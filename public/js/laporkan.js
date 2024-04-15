function scroll_to_class(element_class, removed_height) {
    var scroll_to = $(element_class).offset().top - removed_height;
    if ($(window).scrollTop() != scroll_to) {
        $("html, body").stop().animate({ scrollTop: scroll_to }, 0);
    }
}

function bar_progress(progress_line_object, direction) {
    var number_of_steps = progress_line_object.data("number-of-steps");
    var now_value = progress_line_object.data("now-value");
    var new_value = 0;
    if (direction == "right") {
        new_value = now_value + 100 / number_of_steps;
    } else if (direction == "left") {
        new_value = now_value - 100 / number_of_steps;
    }
    progress_line_object
        .attr("style", "width: " + new_value + "%;")
        .data("now-value", new_value);
}

function displayErrorMessage(inputField, errorMessage) {
    var errorContainer = inputField.siblings(".error-message-container");
    if (errorMessage) {
        if (!errorContainer.length) {
            inputField.after(
                '<div class="error-message-container"><p class="error-message">' +
                    errorMessage +
                    "</p></div>"
            );
        } else {
            errorContainer.html(
                '<p class="error-message">' + errorMessage + "</p>"
            );
        }
    }
}

function removeErrorMessage(inputField) {
    var errorContainer = inputField.siblings(".error-message-container");
    if (errorContainer.length) {
        errorContainer.remove();
    }
}

function cekStatusAnonim() {
    var statusAnonimCheckbox = $("#status_anonim");
    var namaPelaporInput = $("#nama_pelapor");
    var jenisKelaminCheckboxes = $("[name='layanan_dicoba[]']");
    var usiaPelaporInput = $("#usia_pelapor");
    var nomorteleponInput = $("#nomor_telepon_pelapor");

    if (statusAnonimCheckbox.prop("checked")) {
        namaPelaporInput.prop("disabled", true);
        jenisKelaminCheckboxes.prop("disabled", true);
        usiaPelaporInput.prop("disabled", true);
        nomorteleponInput.prop("disabled", true);
    } else {
        namaPelaporInput.prop("disabled", false);
        jenisKelaminCheckboxes.prop("disabled", false);
        usiaPelaporInput.prop("disabled", false);
        nomorteleponInput.prop("disabled", false);
    }
}

function addTextareaValidation(textarea) {
    textarea.on("input", function () {
        if ($(this).val().trim() !== "") {
            $(this).removeClass("input-error");
        }
    });
}

addTextareaValidation($("#lokasi_kejadian"));
addTextareaValidation($("#uraian_kejadian"));

$(document).ready(function () {
    $(".f1 fieldset:first").fadeIn("slow");

    // step selanjutnya (ketika klik tombol selanjutnya)
    $(".f1 .btn-next").on("click", function () {
        var parent_fieldset = $(this).parents("fieldset");
        var next_step = true;
        var current_actives_step = $(this)
            .parents(".f1")
            .find(".f1-step.actives");
        var progress_line = $(this).parents(".f1").find(".f1-progress-line");

        // validasi form
        parent_fieldset.find(".required").each(function () {
            var inputField = $(this);
            var errorMessage = inputField.data("error-message");

            if (inputField.val() == "" || inputField.val() == null) {
                inputField.addClass("input-error");
                displayErrorMessage(inputField, errorMessage);
                next_step = false;
            } else {
                inputField.removeClass("input-error");
                removeErrorMessage(inputField);
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                current_actives_step
                    .removeClass("actives")
                    .addClass("activated")
                    .next()
                    .addClass("actives");
                bar_progress(progress_line, "right");
                $(this).next().fadeIn();
                scroll_to_class($(".f1"), 20);
            });
        }
    });

    // step sbelumnya (ketika klik tombol sebelumnya)
    $(".f1 .btn-previous").on("click", function () {
        var current_actives_step = $(this)
            .parents(".f1")
            .find(".f1-step.actives");
        var progress_line = $(this).parents(".f1").find(".f1-progress-line");

        $(this)
            .parents("fieldset")
            .fadeOut(400, function () {
                current_actives_step
                    .removeClass("actives")
                    .prev()
                    .removeClass("activated")
                    .addClass("actives");
                bar_progress(progress_line, "left");
                $(this).prev().fadeIn();
                scroll_to_class($(".f1"), 20);
            });
    });

    // submit (ketika klik tombol submit diakhir wizard)
    $(".f1").on("submit", function (e) {
        $(this)
            .find("input, textarea")
            .each(function () {
                var isRequired = $(this).hasClass("required");
                if (
                    isRequired &&
                    ($(this).val() == "" || $(this).val() == null)
                ) {
                    e.preventDefault();
                    $(this).addClass("input-error");
                    displayErrorMessage($(this), "Field is required.");
                } else {
                    $(this).removeClass("input-error");
                    removeErrorMessage($(this));
                }
            });
    });
});
