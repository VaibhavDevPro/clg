$(document).ready(function () {
    $("body").on("submit", ".ajax-form", function (e) {
        e.preventDefault();
        let _this = $(this);
        let _button = _this.find("[type=submit]");
        let formData = new FormData(_this[0]);
        let url = _this.attr("action");

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                _button.attr("disabled", true);
                _button.find(".indicator-label").hide();
                _button.find(".indicator-progress").show();
            },
            success: function (data) {
                if (data.redirect) {
                    window.location.href = data.redirect;
                } else {
                    if (data.status == 200) {
                        Swal.fire({
                            text: data.message,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }

                    if (_this.attr("data-redirect-url")) {
                        setTimeout(() => {
                            window.location.href =
                                _this.attr("data-redirect-url");
                        }, 2000);
                    }

                    if (_this.attr("data-modal-form")) {
                        setTimeout(function () {
                            $(_this.attr("data-modal-form"))
                                .find(`[data-bs-dismiss="modal"]`)
                                .click();
                        }, 500);
                        table.table().draw();
                    }
                }
            },
            error: function (xhr) {
                if (xhr.responseJSON.errors) {
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        let errorElement = $(`[name="${key}"]`);
                        if (key.includes(".")) {
                            let parts = key.split(".");
                            let result = parts.reduce(
                                (acc, part) =>
                                    acc ? acc + `[${part}]` : `${part}`,
                                ""
                            );
                            errorElement = $(`[name="${result}"]`);
                            if (
                                errorElement.parents("div.file-error").length >
                                0
                            ) {
                                errorElement
                                    .parents("div.file-error")
                                    .find(".error-file")
                                    .after(
                                        `<small id="postcode-error" class="text-danger">${value[0]}</small>`
                                    );
                            } else if (
                                errorElement.parents("div.input-group").length >
                                0
                            ) {
                                errorElement
                                    .parents("div.input-group")
                                    .after(
                                        `<small id="postcode-error" class="text-danger">${value[0]}</small>`
                                    );
                            } else if (errorElement.length > 0) {
                                errorElement.after(
                                    `<small id="${key}-error" class="text-danger">${value[0]}</small>`
                                );
                            } else {
                                Swal.fire({
                                    text: value[0],
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                                return false;
                            }
                        } else {
                            if (
                                errorElement.parents("div.file-error").length >
                                0
                            ) {
                                errorElement
                                    .parents("div.file-error")
                                    .find(".error-file")
                                    .after(
                                        `<span id="postcode-error" class="text-danger">${value[0]}</span>`
                                    );
                            } else if (
                                errorElement.parents("div.input-group").length >
                                0
                            ) {
                                errorElement
                                    .parents("div.input-group")
                                    .after(
                                        `<span id="postcode-error" class="text-danger">${value[0]}</span>`
                                    );
                            } else if (errorElement.length > 0) {
                                errorElement.after(
                                    `<span id="${key}-error" class="text-danger">${value[0]}</span>`
                                );
                            } else {
                                Swal.fire({
                                    text: value[0],
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        }
                    });
                } else {
                    Swal.fire({
                        text: xhr.responseJSON.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            },
            complete: function () {
                _button.attr("disabled", false);
                _button.find(".indicator-label").show();
                _button.find(".indicator-progress").hide();
            },
        });

        return false;
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
                        ClassicEditor.create(
                            document.querySelector("#editor")
                        ).catch((error) => {
                            console.error(error);
                        });
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

    // $("body").on("click", ".delete-item", function (e) {
    //     e.preventDefault();
    //     var url = $(this).attr("data-url");
    //     console.log (url);
    //     Swal.fire({
    //         title: "Are you sure?",
    //         text: "Want to delete this?",
    //         icon: "warning",
    //         showCancelButton: true,
    //         showLoaderOnConfirm: true,
    //         confirmButtonText: "Yes, delete it!",
    //         customClass: {
    //             confirmButton: "btn-danger",
    //         },
    //         preConfirm: function () {
    //             return $.ajax({
    //                 url: url,
    //                 type: "DELETE",
    //             }).done(function (data) {
    //                 if (data.redirect) {
    //                     window.location.href = data.redirect;
    //                 }
    //             });
    //         },
    //     }).then(function (result) {
    //         if (result.isConfirmed) {
    //             if (table) {
    //                 table.ajax.reload(null, false);
    //             }
    //         }
    //     });
    // });

    $("#daterange").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        mode: "range",
    });
});

setTimeout(function () {
    var inputs = document.querySelectorAll(".tagify__input");
    inputs.forEach(function (input) {
        input.style.placeholderColor = "#4B5675";
    });
}, 500);

$("#checkin_time").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultDate: "12:00",
});

$("#checkout_time").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultDate: "23:00",
});

$("#solid-date-one").flatpickr();
$("#solid-date-second").flatpickr();


$(document).ready(function () {
    $(document).on("change", ".status-switch", function () {
        let switchInput = $(this);
        let dataId = switchInput.data("id");
        let status = switchInput.data("status");

        $.ajax({
            url: "update-status",
            method: "get",
            data: {
                id: dataId,
                status: status,
            },
            success: function (response) { },
            error: function (error) {
                toastr.error("Failed to update status.", "Error");
            },
        });
    });
});
