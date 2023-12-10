toastr.options = {
    "closeButton": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": true,
};
$('.file').dropify();
$('.select').select2();
$('.date').datetimepicker({
    timepicker:false,
    format:'d-m-Y',
    formatDate:'d-m-Y',
    scrollMonth : false
});

$('.time').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
});

let _formValidationWithEditor = function() {
    $('#base_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submitting').show();
        $(".ajax_error").remove();
        var submit_url = $('#base_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#base_form")[0]);
        formData.append('information', CKEDITOR.instances['information'].getData());
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
}

let _formValidation1 = function() {
    $('#base_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submitting').show();
        $(".ajax_error").remove();
        var submit_url = $('#base_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#base_form")[0]);
		formData.append('inactive_message', CKEDITOR.instances['inactive_message'].getData());
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
}

let _formValidation = function() {
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
}

var _modalFormValidation = function () {
    if ($('#content_form').length > 0) {
        $('#content_form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
    }
    $('#content_form').on('submit', function (e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submitting').show();
        $(".ajax_error").remove();
        var submit_url = $('#content_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#content_form")[0]);
        let has_editor = $(this).data('editor');

        if(has_editor !== undefined) {
            if(has_editor == 'notes') {
                formData.append(has_editor, CKEDITOR.instances['notes'].getData());
            } else {
                formData.append(has_editor, CKEDITOR.instances['description'].getData());
            }
        }


        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function (data) {
                $('#submit').show();
                $('#submitting').hide();
                if (data.status == 'danger') {
                    toastr.error(data.message);
                } else {
                    $('#modal_remote').modal('toggle');
                    toastr.success(data.message);
                    if (data.goto) {
                        setTimeout(function () {
                            window.location.href = data.goto;
                        }, 2500);
                    }

                    if (data.load) {
                        setTimeout(function () {
                            window.location.href = "";
                        }, 2500);
                    }

                }
            },
            error: function (data) {
                var jsonValue = data.responseJSON;
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function (key, value) {
                        const first_item = Object.keys(errors)[i];
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
                    toastr.error(jsonValue.message);

                }
                $('#submit').show();
                $('#submiting').hide();
            }
        });
    });
};

var _componentRemoteModalLoad = function () {
    $(document).on('click', '#content_management', function (e) {
        e.preventDefault();
        //open modal
        $('#modal_remote').modal('toggle');
        // it will get action url
        var url = $(this).data('url');
        var editor = $(this).data('editor');
        // leave it blank before ajax call
        $('.modal_remote_content').html('');
        // load ajax loader
        $.ajax({
            url: url,
            type: 'Get',
            dataType: 'html'
        })
        .done(function (data) {
            $('.modal_remote_content').html(data).fadeIn(); // load response
            _modalFormValidation();
            if(editor) {
                _initEditor(editor);
            }
        }).fail(function (data) {
            $('.modal_remote_content').html('<span style="color:red; font-weight: bold;"> Something Went Wrong. Please Try again later.......</span>');
        });
    });
};

let _item_move_up = function() {
    $(document).on('click', '#move_up_item', function (e) {
        e.preventDefault();
        var row = $(this).data('id');
        var url = $(this).data('url');
        $('#move_up_action_menu_' + row).hide();
        $('#move_up_delete_loading_' + row).show();
        swal({
            title: "Are you sure?",
            text: "Do you really want to change the position!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: url,
                    method: 'GET',
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false,
                    dataType: 'JSON',
                    success: function (data) {
                        if (data.status == "danger") {
                            toastr.error(data.message);
                        } else {
                            toastr.success(data.message);
                            if (data.load) {
                                setTimeout(function () {
                                    window.location.href = "";
                                }, 2500);
                            }
                        }
                        $('#move_up_delete_loading_' + row).hide();
                        $('#move_up_action_menu_' + row).show();
                    },
                    error: function (data) {
                        var jsonValue = $.parseJSON(data.responseText);
                        const errors = jsonValue.errors
                        var i = 0;
                        $.each(errors, function (key, value) {
                            toastr.error(value);
                            i++;
                        });
                        $('#move_up_delete_loading_' + row).hide();
                        $('#move_up_action_menu_' + row).show();
                    }
                });
            } else {
                $('#move_up_delete_loading_' + row).hide();
                $('#move_up_action_menu_' + row).show();
                swal("Cancelled", "Your imaginary file position is safe :)", "error");
            }
        });
    });
}

let _item_move_down = function() {
    $(document).on('click', '#move_down_item', function (e) {
        e.preventDefault();
        var row = $(this).data('id');
        var url = $(this).data('url');
        $('#move_down_action_menu_' + row).hide();
        $('#move_down_delete_loading_' + row).show();
        swal({
            title: "Are you sure?",
            text: "Do you really want to change the position!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: url,
                    method: 'GET',
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false,
                    dataType: 'JSON',
                    success: function (data) {
                        if (data.status == "danger") {
                            toastr.error(data.message);
                        } else {
                            toastr.success(data.message);
                            if (data.load) {
                                setTimeout(function () {
                                    window.location.href = "";
                                }, 2500);
                            }
                        }
                        $('#move_down_delete_loading_' + row).hide();
                        $('#move_down_action_menu_' + row).show();
                    },
                    error: function (data) {
                        var jsonValue = $.parseJSON(data.responseText);
                        const errors = jsonValue.errors
                        var i = 0;
                        $.each(errors, function (key, value) {
                            toastr.error(value);
                            i++;
                        });
                        $('#move_down_delete_loading_' + row).hide();
                        $('#move_down_action_menu_' + row).show();
                    }
                });
            } else {
                $('#move_down_delete_loading_' + row).hide();
                $('#move_down_action_menu_' + row).show();
                swal("Cancelled", "Your imaginary file position is safe :)", "error");
            }
        });
    });
}

$(document).on('click', '#delete_item', function (e) {
    e.preventDefault();
    var row = $(this).data('id');
    var url = $(this).data('url');
    $('#action_menu_' + row).hide();
    $('#delete_loading_' + row).show();
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: url,
                method: 'GET',
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData: false,
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == "danger") {
                        toastr.error(data.message);
                    } else {
                        toastr.success(data.message);
                        if (data.load) {
                            setTimeout(function () {
    
                                window.location.href = "";
                            }, 2500);
                        }
                        if (data.goto) {
                            setTimeout(function () {
                                window.location.href = data.goto;
                            }, 2500);
                        }
                    }
                    $('#delete_loading_' + row).hide();
                    $('#action_menu_' + row).show();
                },
                error: function (data) {
                    var jsonValue = $.parseJSON(data.responseText);
                    const errors = jsonValue.errors
                    var i = 0;
                    $.each(errors, function (key, value) {
                        toastr.error(value);
                        i++;
                    });
                    $('#delete_loading_' + row).hide();
                    $('#action_menu_' + row).show();
                }
            });
        } else {
            $('#delete_loading_' + row).hide();
            $('#action_menu_' + row).show();
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
});

$(document).ready(function () {
    /*
     * For Logout
     */
    $(document).on('click', '#logout', function (e) {
        e.preventDefault();
        // $("#loader").show('fade');
        var url = $(this).data('url');
        $.ajax({
            url: url,
            method: 'GET',
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function (data) {
                toastr.success(data.message);

                setTimeout(function () {
                    window.location.href = data.goto;
                }, 2000);
            },
            error: function (data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors
                var i = 0;
                $.each(errors, function (key, value) {
                    toastr.success(value);
                    i++;
                });
            }
        });
    });
});