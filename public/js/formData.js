var formData = {
    formFields :{},
    formType: "",
    init: function() {
        this.formType = this.getFormType();
        this.formFields = this.setFormFieldsFromLocalStorage();
        this.updateFormFieldsOnChange();
        this.setFormFields();
    },
    getFormType : function () {
        return $("#usreinfo_page").val();
    },
    setFormFieldsFromLocalStorage : function () {
        var formFields = (localStorage.getItem(this.formType)) !== null ?
            localStorage.getItem(this.formType) :
            null;
        this.formFields = JSON.parse(formFields);
    },
    getFormFields : function () {
        return this.formFields;
    },
    setFormFields : function () {
        var formFields = this.getFormFields();
        var formFieldLength = formFields.length;
        for (var i = 0; i < formFieldLength; i++) {
            this.setFieldValue(formFields[i].key, formFields[i].value);
        }
    },
    setFieldValue: function(key, value) {
        $("#form_field_"+key).val(value);
    },
    updateValuesInLocalStorage: function () {
        var formFields = this.getFormFields();
        var formType = this.getFormType();
        localStorage.setItem(formType, JSON.stringify(formFields));
    },
    updateFormFieldsOnChange: function () {
        var formFields = this.getFormFields();
        $("input[id^='form_field_']").on("change", function () {
            if ($(this).attr("name") in formFields) {
                formFields[$(this).attr("name")] = $(this).val();
            } else {
                formFields[$(this).attr("name")] = $(this).val();
            }
        });

        this.updateValuesInLocalStorage();
    }
};