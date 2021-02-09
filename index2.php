<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logod.png">
    <title>PT. Delta Thermo Industri</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">


    <!-- fontawesome  -->
    <link rel="stylesheet" type="text/css" href="dist/fontawesome/css/all.min.css">

    <!-- dthermocss -->
    <link rel="stylesheet" href="dist/customs/my.css">
    <link rel="stylesheet" href="dist/customs/my.scss">




</head>

<body>
    <div class="d-flex align-items-center flex-column justify-content-center h-100 bg-grey text-white footer-link">
        <img src="image/xsist-.png" class="img-fluid" style="width: 300px;">
        <h1 class="display-4">Hello.</h1>
        <h3>Your demo website has expired, please contact us at the number below.</h3>
        <h2><a href="https://wa.me/6285108512020"><i class="fab fa-whatsapp"></i> X-sist</a></h2>
    </div>


    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="js/src/collapse.js"></script>
    <script src="dist/js/my.js"></script>

    <script>
        $('.nav-pills a').hover(function(e) {
            e.preventDefault()
            $(this).tab('show')
        })

        if ($(window).width() <= 792) {
            $('#dProduct').toggleClass('show');
            $('#submenu').removeClass(' col-3').addClass(' col-12');
            $('#submenu-content').addClass(' remove');

        }
        if ($(window).width() <= 992) {
            $('#dProduct').remove();
        } else if ($(window).width() > 992) {
            $('#Producs-small').remove();
        }
        // dropdown product
        $('li.nav-item #adProduct').hover(function(e) {
            e.preventDefault()
            $('#dProduct').toggleClass('show')
        })
        $('#dProduct-sub.dropdown-menu').hover(function(e) {
            e.preventDefault()
            $('#dProduct').toggleClass('show')
        })

        // dropdown services
        $('li.nav-item #adServices').hover(function(e) {
            e.preventDefault()
            $('#dServices').toggleClass('show')
        })
        $('#dServices-sub.dropdown-menu').hover(function(e) {
            e.preventDefault()
            $('#dServices').toggleClass('show')
        })

        // click on submenu
        $("#v-pills-sensors-tab").click(function() {
            window.location = "sensors.php";
        });
    </script>


</body>

</html>