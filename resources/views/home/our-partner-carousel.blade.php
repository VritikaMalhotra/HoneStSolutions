<html>
    <head>
        @include('layout/head')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />
        <style>
            .our-partner-carousel__background{
                background-image: url(img/background-testlmenial.png);
                background-repeat: no-repeat;
                background-position: bottom left;
                background-size: 200px;
            }
            .our-partner-carousel{
                background-color:white;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
           .our-partner-carousel__title{
               text-align:center;
           }
           .our-partner-carousel__title--shadow{
            position: relative;
                font-size: 60px;
                color: gray;
                text-align: center;
                top: -75px;
                opacity: 0.12;
            }
           .our-partner-carousel__subtitle{
               text-align:center;
           }

           .our-partner-carousel__image-fix{
               width:100%
           }

        </style>
    </head>
    <body>
   <div class="our-partner-carousel__background">

       <div class="container">
        <div class="our-partner-carousel pt50 pb50 my-5">
            <h1 class="our-partner-carousel__title mb0">Our Partners</h1>
            <h1 class="our-partner-carousel__title--shadow mb0">Our Partners</h1>
            <div class="owl-carousel our-partner-owl-carousel">
                <div class="our-partner-carousel__item">
                    <img src="img/person_1.jpg" alt="" class="our-partner-carousel__image-fix">
                </div>
                <div class="our-partner-carousel__item">
                    <img src="img/person_1.jpg" alt="" class="our-partner-carousel__image-fix">
                </div>
                <div class="our-partner-carousel__item">
                    <img src="img/person_1.jpg" alt="" class="our-partner-carousel__image-fix">
                </div>
                <div class="our-partner-carousel__item">
                    <img src="img/person_1.jpg" alt="" class="our-partner-carousel__image-fix">
                </div>
            </div>
        </div>
       </div>
   </div>

<!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".our-partner-owl-carousel").owlCarousel();
    });

    $('.our-partner-owl-carousel').owlCarousel({
        loop: true,
        margin: 100,
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
