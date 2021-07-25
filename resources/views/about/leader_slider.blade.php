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
           .leader_slider__title{
               text-align:center;
           }
           .leader_slider__subtitle{
               text-align:center;
           }

           .leader_slider__image-fix{
               width:100%
           }

        </style>
    </head>
    <body>
   <div class="leader_slider mt50 mb50">

       <div class="container">
       
           <h1 class="leader_slider__title">Events</h1>
           <p class="leader_slider__subtitle">together we can make a difference</p>
           <div class="owl-carousel owl-theme">
               <div class="leader_slider__item">
                   <img src="img/person_1.jpg" alt="" class="leader_slider__image-fix">
               </div>
               <div class="leader_slider__item">
                   <img src="img/person_1.jpg" alt="" class="leader_slider__image-fix">
               </div>
               <div class="leader_slider__item">
                   <img src="img/person_1.jpg" alt="" class="leader_slider__image-fix">
               </div>
               <div class="leader_slider__item">
                   <img src="img/person_1.jpg" alt="" class="leader_slider__image-fix">
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
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            448: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>

    </body>
</html>
