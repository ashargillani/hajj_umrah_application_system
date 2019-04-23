formData = {
    formFields :{},
    formType: "",
    init: function() {
        this.formType = this.getFormType();
        this.formFields = {};
        this.setFormFieldsFromLocalStorage();
        this.updateFormFieldsOnChange();
        this.setFormFields();
    },
    getFormType : function () {
        return $("#userinfo_page").val();
    },
    setFormFieldsFromLocalStorage : function () {
        let formFields = this.getFormFields();
        if(localStorage.getItem(this.getFormType()) !== "undefined") {
            formFields = JSON.parse(localStorage.getItem(this.getFormType()));
        }
    },
    getFormFields : function () {
        return this.formFields;
    },
    setFormFields : function () {
        let formFields = this.getFormFields();
        let formFieldLength = formFields.length;
        for (var i = 0; i < formFieldLength; i++) {
            this.setFieldValue(this.formFields[i].key, this.formFields[i].value);
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
        let formFields = this.getFormFields();
        $("input[id^='form_field_']").on("change", function () {
            formFields[$(this).attr("name")] = $(this).val();
            formData.updateValuesInLocalStorage();
        });
    }
};

formData.init();