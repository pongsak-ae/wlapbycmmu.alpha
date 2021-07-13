$(function() {
    $('.regis-btn').on('click', function(){
        $('#modal_regis').modal('show');
    });

    $('#frm_register').validate({
        rules: {
            customer_fullname: {
                required: true
            },
            customer_idcard: {
                required: true
            },
            customer_company: {
                required: true,
                email: true
            },
            customer_email: {
                required: true
            },
            customer_gender: {
                required: true
            },
            customer_image: {
                required: true
            },
            customer_position: {
                required: true
            },
            customer_birthday: {
                required: true
            },
            shirt_id: {
                required: true
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
            var data = new FormData($(form)[0]);
            $.ajax({
                type: "post",
                url: BASE_LANG + "course_register.php",
                data: data,
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