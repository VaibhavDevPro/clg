"use strict";

const delete_record = (url, name) => {
    var deleteMessage = "Record has been deleted.";
    if (name) {
        deleteMessage = "Record : " + name + " has been deleted.";
    }
    Swal.fire({
        title: "Are you sure?",
        text: "You want to Delete Record?",
        icon: "warning",
        showCancelButton: true,
        showLoaderOnConfirm: true,
        confirmButtonText: "Yes, delete it!",
        customClass: {
            confirmButton: 'btn-danger'
        },
        preConfirm: function () {
            return $.ajax({
                url: url,
                type: 'DELETE',
            }).done(function (data) {
                return data;
            });
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            Swal.fire(
                "Deleted!",
                deleteMessage,
                "success"
            )
            if (typeof table !== 'undefined') {
                table.ajax.reload(null, false);
            }
        }
    });
}

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

$(document).ready(function () {

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Set default headers for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    if ($('.modal-tiny-editor').length > 0) {
        var options = {
            selector: ".modal-tiny-editor",
            height: "300",
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help',
                'image code'
            ],
            menubar: false,
        };
        tinymce.init(options);
    }

    if ($('.kt_date_range_flatpickr').length > 0) {
        $(".kt_date_range_flatpickr").flatpickr({
            dateFormat: "Y-m-d",
            mode: 'range',
            altInput: true,
            altFormat: 'd/m/Y'
        });
    }

    if ($('.kt_range_flatpickr').length > 0) {
        $(".kt_range_flatpickr").flatpickr({
            dateFormat: "Y-m-d",
            mode: 'range',
            altInput: true,
            altFormat: 'd/m/Y'
        });
    }

    if ($('.kt_date_flatpickr').length > 0) {
        $('.kt_date_flatpickr').flatpickr({
            dateFormat: "d/m/Y",
        });
    }

    if ($('.kt_date_time_flatpickr').length > 0) {
        $('.kt_date_time_flatpickr').flatpickr({
            enableTime: true,
            dateFormat: "d/m/Y H:i:S",
        });
    }
    if ($('.kt_time_flatpickr').length > 0) {
        $('.kt_time_flatpickr').flatpickr({
            enableTime: true,
            dateFormat: "H:i",
            noCalendar: true,
            time_24hr: true
        });
    }

    $('body').on('click', '#kt_ecommerce_sales_flatpickr_clear', function (e) {
        e.preventDefault();
        $('input.kt_date_range_flatpickr').val('');
    })

    $('body').on('submit', '.global-ajax-form', function (e) {
        e.preventDefault();
        let _this = $(this);
        if (_this.valid()) {
            let _button = _this.find('[type=submit]');
            let formData = new FormData(_this[0]);
            let url = _this.attr('action');
            $.ajax({
                url: url,
                method: "POST",
                data: formData,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    _button.attr('disabled', true);
                    _button.find('.indicator-label').hide();
                    _button.find('.indicator-progress').show();
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.status == 200) {
                            Swal.fire({
                                text: data.message,
                                // icon: "success",
                                // buttonsStyling: !1,
                                // confirmButtonText: "Ok, got it!",
                                // customClass: {
                                //     confirmButton: "btn btn-primary"
                                // }
                                toast:true,
                                position: 'top-right',
                                timer: 1500,
                                timerProgressBar: true,
                                icon: 'success',
                                showConfirmButton: false,
                            });

                        }

                        if (_this.attr('data-redirect-url')) {
                            setTimeout(() => {
                                window.location.href = _this.attr('data-redirect-url');
                            }, 2000);
                        }

                        if (_this.attr('data-modal-form')) {
                            $(_this.attr('data-modal-form')).modal('hide');
                            table.table().draw();
                        }
                    }
                },
                error: function (xhr) { // if error occured
                    $('.error-level').remove();
                    if (xhr.responseJSON.errors) {
                        var i = 1;
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            let errorElement = $(`[name="${key}"]`);
                            if (key.includes('.')) {
                                let parts = key.split('.');
                                let result = parts.reduce((acc, part) => {
                                    return acc ? acc + `[${part}]` : `${part}`;
                                }, '');
                                errorElement = $(`[name="${result}"]`);
                                if (i == 1) {
                                    errorElement.focus();
                                    i++;
                                }
                                if ((errorElement.parents('div.file-error').length > 0)) {
                                    errorElement.parents('div.file-error').find('.error-file').after(`<small id="postcode-error" class="text-danger error-level">${value[0]}</small>`);
                                } else if (errorElement.parents('div.input-group').length > 0) {
                                    errorElement.parents('div.input-group').after(`<small id="postcode-error" class="text-danger error-level">${value[0]}</small>`);
                                } else if (errorElement.length > 0) {
                                    errorElement.after(`<small id="${key}-error" class="text-danger error-level">${value[0]}</small>`);
                                } else {
                                    Swal.fire({
                                        text: value[0],
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                    return false;
                                }
                            } else {
                                if (i == 1) {
                                    errorElement.focus();
                                    i++;
                                }
                                if ((errorElement.parents('div.file-error').length > 0)) {
                                    errorElement.parents('div.file-error').find('.error-file').after(`<span id="postcode-error" class="text-danger error-level">${value[0]}</span>`);
                                } else if (errorElement.parents('div.input-group').length > 0) {
                                    errorElement.parents('div.input-group').after(`<span id="postcode-error" class="text-danger error-level">${value[0]}</span>`);
                                } else if (errorElement.length > 0) {
                                    errorElement.after(`<span id="${key}-error" class="text-danger error-level">${value[0]}</span>`);
                                } else {
                                    Swal.fire({
                                        text: value[0],
                                        toast:true,
                                        position: 'top-right',
                                        timer: 1500,
                                        timerProgressBar: true,
                                        icon: 'error',
                                        showConfirmButton: false,
                                    });
                                }
                            }
                        });
                    } else {
                        Swal.fire({
                            text: xhr.responseJSON.message,
                            // icon: "error",
                            // buttonsStyling: !1,
                            // confirmButtonText: "Ok, got it!",
                            // customClass: {
                            //     confirmButton: "btn btn-primary"
                            // }
                                toast:true,
                                position: 'top-right',
                                timer: 1500,
                                timerProgressBar: true,
                                icon: 'error',
                                showConfirmButton: false,
                        });

                    }
                },
                complete: function () {
                    _button.attr('disabled', false);
                    _button.find('.indicator-label').show();
                    _button.find('.indicator-progress').hide();
                },
            });
        }
        return false;
    });

    $('body').on('change', '.changeStatus', function () {
        var id = $(this).attr('data_id');
        var url = $(this).attr('data-url');
        var status = $(this).is(':checked') ? 'active' : 'inactive'
        $.ajax({
            type: "POST",
            url: url,
            data: {id,status},
            success: function (data) {
                console.log(data)
                // table.ajax.reload(null, false);
                Swal.fire({
                    text: data.message,
                    toast:true,
                    position: 'top-right',
                    timer: 1500,
                    timerProgressBar: true,
                    icon: 'success',
                    showConfirmButton: false,
                });
            },
            error: function(error){
                Swal.fire({
                    text: error.message,
                    toast:true,
                    position: 'top-right',
                    timer: 1500,
                    timerProgressBar: true,
                    icon: 'error',
                    showConfirmButton: false,
                });
            }

        });
    });

    $('body').on('click', `[data-bs-toggle="modal"]`, function (event) {
        event.preventDefault();
        let button = $(this);
        let recipient = button.attr('data-bs-whatever');
        let dataUrl = button.attr('href');
        let modal = $(button.attr('data-bs-target'));
        modal.find('.modal-title').text(recipient);
        $.get(dataUrl, function (response) {
            if (response.success == 200) {
                modal.find('.modal-body').html(response.html);
                modal.modal('show');
                setTimeout(() => {
                    if (modal.find('.modal-tiny-editor').length > 0) {
                        var options = {
                            selector: ".modal-tiny-editor",
                            height: "250",
                            plugins: [
                                'advlist autolink lists link image charmap print preview anchor',
                                'searchreplace visualblocks code fullscreen',
                                'insertdatetime media table paste code help',
                                'image code'
                            ],
                            menubar: false,
                        };
                        tinymce.init(options);
                    }

                    if (modal.find('.kt_date_flatpickr').length > 0) {
                        $('.kt_date_flatpickr').flatpickr({
                            dateFormat: "d/m/Y",
                        });
                    }

                    if (modal.find('.kt_date_range_flatpickr').length > 0) {
                        $(".kt_date_range_flatpickr").flatpickr({
                            altInput: true,
                            altFormat: "d/m/Y",
                            dateFormat: "Y-m-d",
                            mode: "range"
                        });
                    }
                }, 100);
            }
        });
    })

    $('body').on('change', '[name="country"]', function (e) {
        let _this = $(this);
        let _form = _this.parents('form');
        if (_form.find('[name="state"]')) {
            let id = _this.val();
            _form.find('[name="state"]').load(base_url + '/get-states/' + id);
        }
    });


    // $('body').on('change','[name="state"]',function(e){
    //     let _this = $(this);
    //     let _form = _this.parents('form');
    //     if(_form.find('[name="city"]')){
    //         let id = _this.val();
    //         _form.find('[name="city"]').load(City_url?state_id:id);
    //     }
    // });

    $('body').on('click', '.remove-file', function () {
        var _this = $(this);
        var col = _this.attr('data-col');
        var id = _this.attr('data-id');
        var table = _this.attr('data-table');
        var file = _this.attr('data-file');

        Swal.fire({
            title: "Are you sure?",
            text: "Want to delete this?",
            icon: "warning",
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "Yes, delete it!",
            customClass: {
                confirmButton: 'btn-danger'
            },
        }).then(function (result) {
            if (result.isConfirmed) {

                $.ajax({
                    type: "post",
                    url: base_url + "/settings/remove-file",
                    data: {
                        id,
                        col,
                        table,
                        file
                    },
                    success: function (response) {
                        $(`div.${col}_div`).remove();
                        Swal.fire({
                            text: 'File deleted successfully',
                            icon: "success",
                            timer: '2000'
                        });

                        if (table) {
                            table.ajax.reload(null, false);
                        }
                    },
                    error: function (error) {
                        Swal.fire({
                            text: error.responseJSON.message,
                            toast:true,
                            position: 'top-right',
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'error',
                            showConfirmButton: false,
                        });
                    }
                });

            }
        });
    })

    $('body').on('click', '.delete-item', function (e) {
        e.preventDefault();
        let _this = $(this);
        var url = $(this).attr('data-url');

        Swal.fire({
            title: "Are you sure?",
            text: "Want to delete this?",
            icon: "warning",
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonText: "Yes, delete it!",
            customClass: {
                confirmButton: 'btn-danger'
            },
            preConfirm: function () {
                return $.ajax({
                    url: url,
                    type: 'GET',
                }).done(function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    }
                    _this.parents('tr').remove()
                }).catch(function (error) {
                    Swal.fire({
                        text: error.responseJSON.message,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                });
            }
        }).then(function (result) {
            if (result.isConfirmed) {
                // if (table) {
                //     table.ajax.reload(null, false);
                // }
            }
        });
    });

});

$("body").on("click", `[data-bs-toggle="modal"]`, function (event) {
    event.preventDefault();
    let button = $(this);
    let recipient = button.attr("data-bs-whatever");
    let dataUrl = button.attr("href");
    let modal = $(button.attr("data-bs-target"));
    modal.find(".modal-title").text(recipient);
    $.get(dataUrl, function (response) {
        if (response.success == 200) {
            modal.find(".modal-body").html(response.html);
            modal.modal("show");
            setTimeout(() => {
                if (modal.find("#editor").length > 0) {
                    ClassicEditor.create(document.querySelector("#editor")).catch(
                        (error) => {
                            console.error(error);
                        }
                    );
                }
                if (modal.find(".select2").length > 0) {
                    $(".select2").select2({
                        dropdownParent: $(modal),
                    });
                }
                if (modal.find(".flatpickr-range").length > 0) {
                    flatpickr(".flatpickr-range", {
                        dateFormat: "F j, Y",
                        mode: "range",
                    });
                }
            }, 100);
        }
    });
});


