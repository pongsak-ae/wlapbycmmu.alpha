$(function() {
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });

    $('.regis-btn').on('click', function(){
        $('#modal_regis').modal('show');
    });

    $("#modal_regis").on("hidden.bs.modal", function () {
        $('#frm_register').find('.is-invalid').removeClass("is-invalid");
        $('#frm_register').find('.is-valid').removeClass("is-valid");
        $('#frm_register').find('label.text-danger').remove();
    });

    $('#frm_register').validate({
        rules: {
            customer_fullname: {
                required: true
            },
            customer_nickname: {
                required: true
            },
            customer_gender: {
                required: true
            },
            customer_phone: {
                required: true,
                minlength: 10
            },
            customer_email:{
                required: true
            },
            customer_line:{
                required:true
            },
            customer_birthday:{
                required:true
            },
            customer_company:{
                required:true
            },
            customer_position:{
                required:true
            },
            shirt_id:{
                required:true
            },
            customer_image:{
                required:true
            }
        },
        errorClass: "text-danger",
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').prevObject.addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').prevObject.removeClass('is-invalid').addClass('is-valid');
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            var formData = new FormData($(form)[0]);
            $.ajax({
                type: "post",
                url: "https://admin.wlapbycmmu.com/en/api/course_register.php",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(res){
                    if (res['status'] == true) {
                        $('#modal_regis').modal('hide');
                        $('#frm_register')[0].reset();
                    }
                }
            });
        }
    });
});