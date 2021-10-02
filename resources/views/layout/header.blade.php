<header>
    <nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="home-st-logo logo">
            <div class="home-st-logo__image d-flex justify-content-center">
                <img src="img/Hone-ST-Logo.png" alt="" class="home-st-logo-fix">
            </div>
            <!-- <p class="home-logo-title m-0" style=" font-family: 'Brush Script MT', cursive;">Together We Can Make a Difference</p> -->

        </div>
        <div class="menu">
            <!-- <div class="navbar__wrap"> -->
            <ul>
                <li>
                    <a href="/" class="navbar__item  <?php if ($page=='home') {echo 'navbar__item_active';} ?>">Home</a>
                </li>
            
                    <!-- <a href="/books" class="navbar__item <?php if ($page=='books') {echo 'navbar__item_active';} ?>">Our Book</a> -->
                <li>
                    <a href="/attend-form" class="navbar__item <?php if ($page=='register') {echo 'navbar__item_active';} ?>">Register</a>
                </li>
            
                <li>
                    <a href="/blogs" class="navbar__item <?php if ($page=='blogs') {echo 'navbar__item_active';} ?>">Blogs</a>
                </li>
                    <!-- <a href="/people" class="navbar__item <?php if ($page=='people') {echo 'navbar__item_active';} ?>">Testimonials</a> -->
            
                    <!-- <a href="/our-journey" class="navbar__item <?php if ($page=='our-journey') {echo 'navbar__item_active';} ?>">Our journey</a> -->
                <li>
                    <a href="/service" class="navbar__item <?php if ($page=='service') {echo 'navbar__item_active';} ?>">Our Services</a>
                </li>
                    <!-- <a href="/about" class="navbar__item <?php if ($page=='about') {echo 'navbar__item_active';} ?>">About Us</a> -->

                    <li class="nav-item dropdown">
                        
                            <a href="" class="navbar__item dropdown-toggle <?php if ($page=='books')  {echo 'dropdown-item_active';} ?> <?php if ($page=='people') {echo 'dropdown-item_active';} ?><?php if ($page=='our-journey') {echo 'dropdown-item_active';} ?>"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a href="/books" class="dropdown-item <?php if ($page=='books') {echo 'dropdown-item_active';} ?>">Our Book</a>
                                <!-- <a href="/about" class="dropdown-item <?php if ($page=='about') {echo 'dropdown-item_active';} ?>">About Us</a> -->
                                <a href="/people" class=" dropdown-item <?php if ($page=='people') {echo 'dropdown-item_active';} ?>">Testimonials</a>
                                <a href="/our-journey" class="dropdown-item <?php if ($page=='our-journey') {echo 'dropdown-item_active';} ?>">Our journey</a>
                                <!-- <a class="dropdown-item" href="#">Action</a> -->
                                </div>
                        
                    </li>
                    <!-- <li class="dropdown">
                        <button class="dropbtn">Dropdown</button>
                        <div class="dropdown-content">
                            <a href="/about">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </li> -->
                <li>
                    <a href="/gallery" class="navbar__item <?php if ($page=='gallery') {echo 'navbar__item_active';} ?>">Gallery</a>
                </li>
                <li>
                    <a href="/contact" class="navbar__item <?php if ($page=='contact') {echo 'navbar__item_active';} ?>">Contact Us</a>             
                </li>
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
