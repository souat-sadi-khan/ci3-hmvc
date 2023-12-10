$('#base_form').parsley();
// $("#base_form").submit(function(e) {
//     e.preventDefault();
//     $('#submit').hide();
//     $('#submitting').show();
//     var form = $(this);
//     var url = form.attr('action');
//     $.ajax({
//         type: "POST",
//         url: url,
//         data: form.serialize(),
//         dataType: 'json',
//         success: function(data){
//             if(data.status) {
//                 toastr.success(data.message);
//                 if(data.goto) {
//                     setTimeout(function(){
//                         window.location.href=data.goto;
//                     }, 3000);
//                 }
//             } else {
//                 toastr.error(data.message);
//             }
//             $('#submit').show();
//             $('#submitting').hide();
//         }
//     });
// });

$('#base_form').on('submit', function(e) {
    e.preventDefault();
    $('#submit').hide();
    $('#submitting').show();
    $(".ajax_error").remove();
    var submit_url = $('#base_form').attr('action');
    //Start Ajax
    var formData = new FormData($("#base_form")[0]);
    $.ajax({
        url: submit_url,
        type: 'POST',
        data: formData,
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false,
        dataType: 'JSON',
        success: function(data) {
            $('#submit').show();
            $('#submitting').hide();
            $('#base_form')[0].reset();
            if (data.status == 'danger') {
                toastr.error(data.message);
            } else {
                toastr.success(data.message);
                
                if (data.goto) {
                    setTimeout(function() {
                        window.location.href = data.goto;
                    }, 500);
                }

                if (data.window) {
                    $('#content_form')[0].reset();
                    window.open(data.window, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=auto,left=auto,width=700,height=400");
                    setTimeout(function() {
                        window.location.href = '';
                    }, 1000);
                }

                if (data.load) {
                    setTimeout(function() {
                        window.location.href = "";
                    }, 2500);
                }
            }
        },
        error: function(data) {
            var jsonValue = $.parseJSON(data.responseText);
            const errors = jsonValue.errors;
            if (errors) {
                var i = 0;
                $.each(errors, function(key, value) {
                    const first_item = Object.keys(errors)[i]
                    const message = errors[first_item][0];
                    if ($('#' + first_item).length > 0) {
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                    }
                    // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                    toastr.error(value);
                    i++;
                });
            } else {
                toastr.warning(jsonValue.message);

            }
            _componentSelect2Normal();
            $('#submit').show();
            $('#submiting').hide();
        }
    });
});