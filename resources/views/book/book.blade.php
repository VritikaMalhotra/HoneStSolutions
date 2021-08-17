<html>
    <head>
    <style>
        .page-book{
                background-image: url(img/background-lotus.png);
                background-repeat: no-repeat;
                background-position: center right;
                background-size: 250px;
        }
        .page-book__title{
            text-align:center;
            color:gray;
        }
        .page-book__subtitle{
            text-align:center;
            color:white;
        }
        .book__logo-fix{
            width:100%;
        }
        .book__link-icon{
            border:1px solid gray;
            color:gray;
        }
        .book__link-icon:hover{
            color:gray;
        }
        .book-carousel__image-fix{
               max-width:100% !important;
               margin: auto;
           }
           .owl-carousel .owl-stage {
                display: flex;
                align-items: center;
                justify-content: center;
            }
    </style>
    </head>
    <body>
        <div class="page-book py-5">

            <!-- <p class="page-book__subtitle col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p> -->
            <div class="container">
                <div class="owl-carousel book-owl-carousel">
                    <div class="book-carousel__item d-flex align-items-center justify-content-center">
                        <div class="book-carousel__image d-flex align-items-center justify-content-center">
                            <img src="img/look_inside_1.jpg" alt="" class="book-carousel__image-fix">
                        </div>
                    </div>
                    <div class="book-carousel__item d-flex align-items-center justify-content-center">
                        <div class="book-carousel__image d-flex align-items-center justify-content-center">
                            <img src="img/look_inside_2.jpg" alt="" class="book-carousel__image-fix">
                        </div>
                    </div>
                    <div class="book-carousel__item d-flex align-items-center justify-content-center">
                        <div class="book-carousel__image d-flex align-items-center justify-content-center">
                            <img src="img/look_inside_3.jpg" alt="" class="book-carousel__image-fix">
                        </div>
                    </div>
                </div>
            </div>

                {{-- <div class="page-book__cards justify-content-center row m-0">
                    <a href="#" class="book col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-5">
                        <div class="book__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_1.jpg" alt="" class="book__logo-fix">
                        </div>
                    </a>

                    <a href="#" class="book col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-5">
                        <div class="book__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_1.jpg" alt="" class="book__logo-fix">
                        </div>
                    </a>

                    <a href="#" class="book col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-5">
                        <div class="book__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_1.jpg" alt="" class="book__logo-fix">
                        </div>
                    </a>


                </div> --}}
            </div>
            <div class="page-book__wrapper d-flex justify-content-center">
                <a href="#" class="book_link"><i class="fa fa-facebook p-2 m-2 book__link-icon"></i></a>
                <a href="#" class="book_link"><i class="fa fa-twitter p-2 m-2 book__link-icon"></i></a>
                <a href="#" class="book_link"><i class="fa fa-linkedin p-2 m-2 book__link-icon"></i></a>
                <a href="#" class="book_link"><i class="fa fa-google-plus p-2 m-2 book__link-icon"></i></a>
            </div>
            <h6 class="page-book__title col-12 mb-0">Share this book</h6>
        </div>
       <!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".book-owl-carousel").owlCarousel();
    });

    $('.book-owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay:true,
        nav: false,
        dots:false,
        responsive: {
            0: {
                items: 1
            },
            448: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
    </body>
</html>
