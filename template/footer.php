<!-- footer  -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="p-1">
                    <h4 class="text-white">Office</h4>
                </div>
                <div class=" p-1 text-white footer-link">
                    <a href="https://goo.gl/maps/khWzB1srcgAgpHGR8"><i class="fa fa-fw fa-map-marker-alt"></i> Jl.
                        Semingkir No. 22
                        Rejasari, Purwokerto Barat</a><br>
                    <a href="mailto: sales@dthermo.com"><i class="fa fa-fw fa-envelope"></i>
                        sales@dthermo.com</a><br>
                    <a href="tel: 62-281-5567777"><i class="fa fa-fw fa-phone"></i> +62-281-5567777</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" p-1">
                    <h4 class="text-white">Social Media</h4>
                </div>
                <div class=" p-1 text-white footer-link">
                    <a href="https://m.facebook.com/Daily-Thermetrics-483493271664410/">
                        <i class="fab fa-fw fa-facebook-square"></i>
                        Facebook</a><br>
                    <a href="https://twitter.com/dailytherm">
                        <i class="fab fa-fw fa-twitter-square"></i>
                        Twitter</a><br>
                    <a href="https://www.linkedin.com/company/daily-thermetrics">
                        <i class="fab fa-fw fa-linkedin"></i>
                        Linkedin</a><br>
                    <a href="https://www.youtube.com/channel/UCKbMRiTZRIdm6rZr8U6djWA">
                        <i class="fab fa-fw fa-youtube-square"></i>
                        Youtube</a><br>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" p-1">
                    <h4 class="text-white">Others</h4>
                </div>
                <div class=" p-1 text-white footer-link">
                    <a href="#">Terms & Conditions</a><br>
                    <a href="#">Legal Notices</a><br>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Feedback </a><br>
                </div>
            </div>
            <div class="col-3 m-auto">
                <img src="image/logo_white.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</section>
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