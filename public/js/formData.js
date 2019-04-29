formData = {
    formFields :{},
    formType: "",
    init: function() {
        this.formType = this.getFormType();
        this.formFields = {};
        this.setFormFieldsFromLocalStorage();
        this.updateFormFieldsOnChange();
        this.setFormFields();
        this.initializeOnSubmitFunction();
    },
    getFormType : function () {
        return $("#userinfo_page").val();
    },
    setFormFieldsFromLocalStorage : function () {
        if(localStorage.getItem(this.getFormType()) !== "undefined") {
            this.formFields = (localStorage.getItem(this.getFormType()) == null) ?
                {}: JSON.parse(localStorage.getItem(this.getFormType()));
        }
    },
    getFormFields : function () {
        return this.formFields;
    },
    setFormFields : function () {
        let formFields = this.getFormFields();
        for (const key in formFields) {
            let value = formFields[key];
            this.setFieldValue(key, value);
        }
    },
    setFieldValue: function(key, value) {
        $("#form_field_"+key).val(value);
    },
    updateValuesInLocalStorage: function () {
        let formFields = this.getFormFields();
        let formType = this.getFormType();
        localStorage.setItem(formType, JSON.stringify(formFields));
    },
    updateFormFieldsOnChange: function () {
        let formData = this;
        let formFields = this.getFormFields();
        $("[id^='form_field_']").on("change", function () {
            formFields[$(this).attr("name")] = $(this).val();
            formData.updateValuesInLocalStorage();
        });
    },
    initializeOnSubmitFunction: function (){
        $('form[name="journeyPageOne"], form[name="journeyPageTwo"]').submit(function (e) {
            e.preventDefault();
            var formName = $(this).attr('name');
            var formReference = $(this);
            formData.postFormToRoute(formName, formReference);
        });
    },
    postFormToRoute: function(formName, formReference){
        let userId = "";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if (formName === "journeyPageOne") {
            window.location.href= '/journey-page-2';
        } else if (formName === "journeyPageTwo") {
            $.ajax({
                type: 'POST',
                url: 'store-journey-user',
                data: $(formReference).serialize(),
                dataType: 'json',
                success: function (data){
                    userId = data.userId;
                },
                failure: function () {
                    alert("request failed !");
                }
            });
            let formOneData = JSON.parse(localStorage.getItem("userinfo_page_one"));
            formOneData["userId"] = userId;
            $.ajax({
                type: 'POST',
                url: $(formReference).attr('action'),
                data: formOneData,
                dataType: 'json',
                success: function (data){
                    alert("successfully posted");
                }
            });
        }
    },
    onProceed: function () {

    }
};

formData.init();