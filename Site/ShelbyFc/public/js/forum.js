$("#title").click(function () {
    $("#open_forum").slideDown();
    $("#close").slideDown();
});

$("#close").click(function () {
    $("#open_forum").slideUp();
    $("#close").slideUp();
});

$(function () {
    // Multiple images preview in browser
    var imagesPreview = function (input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            console.log(input.files.length);
            if (input.files.length < 5) {
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        $($.parseHTML("<img>"))
                            .attr("src", event.target.result)
                            .appendTo(placeToInsertImagePreview);
                    };
                    reader.readAsDataURL(input.files[i]);
                }
                $("#clear").css("display","block");
            } else {
                alert("too much my nigga");
            }
        }
    };

    $("#gallery-photo-add").on("change", function () {
        imagesPreview(this, "div.preview_images");
    });
});

$("#gallery-photo-add").click(function () {
    $("#gallery-photo-add").val("");
    $(".preview_images").empty();
    $("#clear").css("display","none");
});

$("#clear").click(function () {
    $("#clear").css("display","none");
    $("#gallery-photo-add").val("");
    $(".preview_images").empty();
});
