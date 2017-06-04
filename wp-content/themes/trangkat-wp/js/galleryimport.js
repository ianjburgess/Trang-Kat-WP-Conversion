/**
 * Created by Ian on 14/09/2016.
 */
$(document).ready(function() {
    var fullimg = "../img/maternity/";
    var thumb = "../img/maternity/thumbs/";

    $.ajax({
        url: thumb,
        success: function (data) {
            $(data).find("a").attr("href", function (i, val) {
                if (val.match(/\.(jpe?g|png|gif)$/)) {
                    $(".gallery").append("<a href='" + fullimg + val + "'><img src='" + thumb + val + "' class='img-thumbnail galleryImg'></a>");
                }
            });
        }
    });
});



