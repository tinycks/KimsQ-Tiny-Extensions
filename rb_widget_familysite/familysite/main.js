function familysite_widget() {
    $(".familysite_widget").click(function(event) {
        var selectObj = $(this);
        event.stopPropagation();
        if (selectObj.children().eq(1).css("display") == "none") {
            $(".familysite_widget").each(function() {
                if ($(this).children().eq(1).css("display") == "block") {
                    $(this).children().eq(0).removeClass("on");
                    $(this).children().eq(1).removeClass("on");
                }
            });
            selectObj.children().eq(0).addClass("on");
            selectObj.children().eq(1).addClass("on");
        } else {
            selectObj.children().eq(0).removeClass("on");
            selectObj.children().eq(1).removeClass("on");
        }
    });

    $(document).click(function() {
        $(".familysite_widget").each(function() {
            if ($(this).children().eq(1).css("display") == "block") {
                $(this).children().eq(0).removeClass("on");
                $(this).children().eq(1).removeClass("on");
            }
        });
    });
}