(function ($) {

    "use strict";

    $('.button2').click(function (e) {

        $.post("/post.php", {data: JSON.stringify(data)}, function (result) {
            $(".result").html(result);
        });
        return false;
    });


})(window.jQuery);