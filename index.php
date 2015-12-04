<html>
<head>

    <title>Weather scraper</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="Weather-logo.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" />
    <style>
        html, body{
            height: 100%;
        }

        .container{
            background-image: url("background.jpg") ;
            width: 100% ;
            height: 100% ;
            background-size: cover;
            background-position: center;
            padding-top: 100px;
        }

        .center{
            text-align: center;
        }

        .white{
            color: white;
        }

        p{
            padding-top: 13px;
            padding-bottom: 13px;
        }

        button{
            margin-top: 25px;
        }

        .alert{
            margin-top: 23px;
            display: none;
        }

        #rights{
            vertical-align: middle;
            margin-top: -53px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="center white">Weather Scraper</h1>
                <p class="lead center white">Enter your city below to get a forecast for the weather.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Giza..."/>
                    </div>
                    <button class="btn btn-success btn-lg" id="findMyWeather">Find my weather</button>
                </form>
                <div class="alert alert-success"></div>
                <div id="fail"class="alert alert-danger">Couldn't find weather data for that city. Please try again.</div>
                <div id="noCity" class="alert alert-danger">Please enter a city.</div>
            </div>
        </div>
    </div>
    <p id="rights" class="white center"><small>All rights reserved, 2015.</small></p>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        $("#findMyWeather").click(function (event) {
            event.preventDefault();
            $(".alert").hide();
            if ($("#city").val() != "")
            {
                $.get("scraper.php?city=" + $("#city").val(), function (data) {
                    // data is what the $.get has obtained for us from the specified parameter
                    if (data == "")
                    {   
                        $("#fail").fadeIn();
                    } else
                    {
                        $(".alert-success").html(data).fadeIn();
                    }
                    
                });
            } else {
                $("#noCity").fadeIn();
            }
            
        });
    </script>

</body>
</html>