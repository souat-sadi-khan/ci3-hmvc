$('#base_form').parsley();

toastr.options = {
    "closeButton": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": true,
};

$("#base_form").submit(function(e) {
    e.preventDefault();
    $('#submit').hide();
    $('#submitting').show();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        dataType: 'json',
        success: function(data){
            if(data.status) {
                toastr.success(data.message);
                if(data.goto) {
                    setTimeout(function(){
                        window.location.href=data.goto;
                    }, 3000);
                }
            } else {
                toastr.error(data.message);
            }
            $('#submit').show();
            $('#submitting').hide();
        }
    });
});