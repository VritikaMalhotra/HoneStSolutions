<header>
    <nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="home-st-logo logo">
            <img src="img/Hone-ST-Logo.png" alt="" class="home-st-logo-fix">
        </div>
        <div class="menu">
            <!-- <div class="navbar__wrap"> -->
            <ul>
                <!-- <li class="navbar__wrap"> -->
                    <a href="/" class="navbar__item">Home</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/gallery" class="navbar__item">Gallery</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/books" class="navbar__item">Books</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/blogs" class="navbar__item">Blogs</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/people" class="navbar__item">People</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/our-journey" class="navbar__item">Our journey</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
<<<<<<< HEAD
                    <a href="/service" class="navbar__item">Service</a>
=======
                    <a href="/services" class="navbar__item">Service</a>
>>>>>>> 75133efc0d3bc528521e927d5fa622072366c801
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/about" class="navbar__item">About Us</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/contact" class="navbar__item">Contact Us</a>
                <!-- </li> -->
            </ul>
            <!-- </div> -->
        </div>
    </nav>
</header>
<script>
    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
            });
        });

    // Scrolling Effect

    $(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }

        else {
             $('nav').removeClass('black');
        }
    })
</script>
