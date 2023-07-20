<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Public/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../Assets/css/main.css" rel="stylesheet" />

    <title>Signal Check</title>
</head>

<body>
    <div class="">
        <div class="px-5 d-flex align-items-center justify-content-between items-center" style="height: 64px; width: 100%;">
            <div>
                <img src="../Assets/images/logo.png" alt="">
            </div>
            <div>
                <h1 class="text-uppercase" style="font-size: 12px">
                    Radio Network Status Checker
                </h1>
            </div>
            <div>
                <img src="../Assets/images/socials.png" alt="">
            </div>

        </div>

        <div class="px-5 d-flex align-items-center" style="height: 64px; width: 100%; background-color: #48A8C1; ">
                <a class="text-uppercase link <?php echo $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ;?>" >View Mobile Visibility</a>
                <a class="text-uppercase link px-4 " >About Network Checker</a>
        </div>
        <?php echo $content ?>

    </div>

</body>
<script src="../Public/Jquery/jquery.min.js">
</script>
<script src="../Public/bootstrap/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script src="../Assets/javascript/map.js"></script>

</html>