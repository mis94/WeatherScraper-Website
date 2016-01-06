$("#findMyWeather").click(function (event) {
    event.preventDefault();
    $(".alert").hide();
    if ($("#city").val() != "") {
        $.get("scraper.php?city=" + $("#city").val(), function (data) {
            // data is what the $.get has obtained for us from the specified parameter
            if (data == "") {
                $("#fail").fadeIn();
            } else {
                $(".alert-success").html(data).fadeIn();
            }

        });
    } else {
        $("#noCity").fadeIn();
    }

});