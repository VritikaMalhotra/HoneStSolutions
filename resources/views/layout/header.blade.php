<!-- <header class="page__header header position-fixed page__header_loading">
    
    <a href="/" class="logo_link primary-nav__logo">
        <img src="../img/logo.png" alt="">
    </a>
    <a href="/" class="logo_link primary-nav__logo-mobile">
        <img src="../img/logo.png" alt="">
    </a>
    <div class="container page__header_px-0">
        <nav class="row no-gutters navbar navbar-expand-md header-main justify-content-space-between">
            <div class="col-12 ">
                <div class="navbar__toggle-wrapper">
                    <button class="navbar-toggler text-black " type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        ☰
                    </button>
                    <img src="@asset('img/logo.png')" alt="" class="primary-nav__logo-mobile" />
                </div>
                <div class="row primary-nav mt-0">
                    <div class="col-12 col-md-2 primary-nav__main-logo justify-content-start align-items-center d-md-flex ">
                        
        
                    </div>
        
                    <div class="col-12 col-md-10 col-lg-10 primary-nav__sm-white">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="primary-nav__items jsPrimaryMenu">
                                <li class="nav-item dropdown primary-nav__item ">
                                    <a class="  text-uppercase text-black  nav-link header__items-menubox primary-nav__item-anchor dropdown-toggle arrow-icon">
                                        service
                                    </a>
                                    <div class="primary-nav__item-sub-menu  dropdown-menu" style="left: -45.3889px;">
                                        <div class="primary-nav__item-sub-menu-col" style="width: auto;">
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Audit & Assurance
                                                </a>
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Advisory
                                                </a>
                                            </div>
                                           
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Corporate Recovery
                                                </a>
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Risk Management & Goverance
                                                </a>
                                            </div>                                            
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Tax
                                                </a>                                            
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Corporate Secretarial Service
                                                </a>
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Business Support
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown primary-nav__item">
                                    <a class=" text-uppercase text-black  nav-link header__items-menubox  primary-nav__item-anchor  dropdown-toggle ">
                                        industry
                                    </a>
                                    <div class="primary-nav__item-sub-menu  dropdown-menu" style="left: -45.3889px;">
                                        <div class="primary-nav__item-sub-menu-col" style="width: auto;">
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Trading
                                                </a>
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Investment Holdings
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </li>
                                <li class="nav-item dropdown primary-nav__item ">

                                    <a class="text-uppercase text-black  nav-link header__items-menubox  primary-nav__item-anchor  dropdown-toggle">
                                       about us
                                    </a>
                                    <div class="primary-nav__item-sub-menu  dropdown-menu" style="left: -45.3889px;">
                                        <div class="primary-nav__item-sub-menu-col" style="width: auto;">
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Our Company
                                                </a>
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Our Partners
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class="nav-item dropdown primary-nav__item ">
                                    <a class="  text-uppercase text-black  nav-link header__items-menubox primary-nav__item-anchor ">
                                        resources
                                    </a>
                                    <div class="primary-nav__item-sub-menu  dropdown-menu" style="left: -45.3889px;">
                                        <div class="primary-nav__item-sub-menu-col" style="width: auto;">
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    New & Updates
                                                </a>
                                            </div>
                                            
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Case Studies
                                                </a>
                                            </div>
                                           
                                            <div class="primary-nav__item-sub-menu-wrapper">
                                                <a href="" class="primary-nav__item-sub-menu-anchor ">
                                                    Quik Links
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
        
                                <button class="btn btn_sm btn_orange primary-nav__contact-buttom" type="submit">contact us</button>
                                {{-- <button class="btn btn-sm  btn-pink" type="submit">Book now</button> --}}
                            </ul>
                        </div>
                    </div>
        \
                    <div class="@isset($template_navigation_class) {!! $template_navigation_class !!} @endisset">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="primary-nav__items jsPrimaryMenu">
         
                                <li class="nav-item dropdown primary-nav__item ">
                                    <a href="#" class="nav-link header__items-menubox primary-nav__item-anchor" role="button">
                                        Hello
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div>
        </nav>
    </div>
</header> -->
<!-- <header class="header">
  <div class="container">
    <nav class="nav justify-content-space-between">
      <div class="navbar__logo">
          <img src="../img/logo.png" alt="">
      </div>
      <ul class="navbar-items">
        <li class="navbar-item">Home</li>
      </ul>
    </nav>
  </div>

</header> -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-4">
  <a class="navbar-brand" href="/"> <img src="../img/logo.png" alt=""> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/gallery">Gallery</a>
      <a class="nav-item nav-link" href="/books">Books</a>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Blog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/blogs">Blogs</a>
          <a class="dropdown-item" href="/blogs-details">Blogs Details</a>
        </div>
      </li> -->
      <a class="nav-item nav-link" href="/blogs">Blogs</a>
      <a class="nav-item nav-link" href="/people">People</a>
      <a class="nav-item nav-link" href="/our-journey">Our journey</a>
      <a class="nav-item nav-link" href="/servies">Servies</a>
      <a class="nav-item nav-link" href="/about">About Us</a>
      <a class="nav-item nav-link" href="/contact">Contact Us</a>
    </div>
  </div>
</nav>