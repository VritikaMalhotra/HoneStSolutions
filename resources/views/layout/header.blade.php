<header>
    <nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="home-st-logo logo">
            <img src="img/Hone-ST-Logo.png" alt="" class="home-st-logo-fix">
            <p class="home-logo-title m-0" style=" font-family: 'italic';">Together We Can Make a Difference</p>

        </div>
        <div class="menu">
            <!-- <div class="navbar__wrap"> -->
            <ul>
                <!-- <li class="navbar__wrap"> -->
                    <a href="/" class="navbar__item  <?php if ($page=='home') {echo 'navbar__item_active';} ?>">Home</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/gallery" class="navbar__item <?php if ($page=='gallery') {echo 'navbar__item_active';} ?>">Gallery</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/books" class="navbar__item <?php if ($page=='books') {echo 'navbar__item_active';} ?>">Our Book</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/blogs" class="navbar__item <?php if ($page=='blogs') {echo 'navbar__item_active';} ?>">Blogs</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/people" class="navbar__item <?php if ($page=='people') {echo 'navbar__item_active';} ?>">Testimonials</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/our-journey" class="navbar__item <?php if ($page=='our-journey') {echo 'navbar__item_active';} ?>">Our journey</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/service" class="navbar__item <?php if ($page=='service') {echo 'navbar__item_active';} ?>">Our Services</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/about" class="navbar__item <?php if ($page=='about') {echo 'navbar__item_active';} ?>">About Us</a>
                <!-- </li> -->
                <!-- <li class="navbar__wrap"> -->
                    <a href="/contact" class="navbar__item <?php if ($page=='contact') {echo 'navbar__item_active';} ?>">Contact Us</a>
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
