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
        if(localStorage.getItem(this.getFormType()) !== "undefined") {
            this.formFields = JSON.parse(localStorage.getItem(this.getFormType()));
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
    }
};

formData.init();