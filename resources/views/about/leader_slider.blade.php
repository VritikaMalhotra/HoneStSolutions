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
             .leader_slider{
                background-image: url(img/bacground-our-mission.png);
                background-repeat: no-repeat;
                background-position: bottom left;
                background-size: 200px;
            }
           .leader_slider__title{
               text-align:center;
           }
           .leader_slider__subtitle{
               text-align:center;
           }

           .leader_slider__image-fix{
               width:100%
           }
           .leader_slider-owl-carousel .owl-stage {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .gallery-card__image-fix {
                width: 100%;
                /* height: 200px; */
                border-radius:5px;
                margin-bottom: 15px;
                object-fit:cover;
            }



        </style>
    </head>
    <body>
   <div class="leader_slider pt50 pb50">

       <div class="container" id="our_partners">

           <h1 class="leader_slider__title" style="font-family: 'Samarkan', sans-serif;">Our Clients</h1>

           {{-- <div class="owl-carousel owl-theme leader_slider-owl-carousel">
               <div class="our-partner-carousel__item d-flex align-items-center justify-content-center">
                    <div class="our-partner-carousel__image d-flex align-items-center justify-content-center">
                        <img src="img/olx_cash_logo.jpg" alt="" class="our-partner-carousel__image-fix">
                    </div>
                </div>
                <div class="our-partner-carousel__item d-flex align-items-center justify-content-center">
                    <div class="our-partner-carousel__image d-flex align-items-center justify-content-center">
                        <img src="img/gls_logo.jpg" alt="" class="our-partner-carousel__image-fix">
                    </div>
                </div>
                <div class="our-partner-carousel__item d-flex align-items-center justify-content-center">
                    <div class="our-partner-carousel__image d-flex align-items-center justify-content-center">
                        <img src="img/kalorex_logo.png" alt="" class="our-partner-carousel__image-fix">
                    </div>
                </div>
                <div class="our-partner-carousel__item d-flex align-items-center justify-content-center">
                    <div class="our-partner-carousel__image d-flex align-items-center justify-content-center">
                        <img src="img/amity_logo.png" alt="" class="our-partner-carousel__image-fix">
                    </div>
                </div>
                <div class="our-partner-carousel__item d-flex align-items-center justify-content-center">
                    <div class="our-partner-carousel__image d-flex align-items-center justify-content-center">
                        <img src="img/relaince_retail_logo.jpg" alt="" class="our-partner-carousel__image-fix">
                    </div>
                </div>
               <div class="leader_slider__item d-flex align-items-center justify-content-center">
                   <div class="leader-slider__image d-flex align-items-center justify-content-center">
                        <img src="img/our-partner-img1.jpg" alt="" class="leader_slider__image-fix">
                   </div>
               </div>

               <div class="leader_slider__item d-flex align-items-center justify-content-center">
                   <div class="leader-slider__image d-flex align-items-center justify-content-center">
                        <img src="img/our-partner-img2.jpg" alt="" class="leader_slider__image-fix">
                   </div>
               </div>
               <div class="leader_slider__item d-flex align-items-center justify-content-center">
                   <div class="leader-slider__image d-flex align-items-center justify-content-center">
                        <img src="img/our-partner-img3.jpg" alt="" class="leader_slider__image-fix">
                   </div>
               </div>
           </div> --}}

           {{-- <div class="d-flex justify-content-center mt30">
                <a href="#" class="btn btn-orange">See All</a>
            </div> --}}

            <div class="page-gallery__cards justify-content-center row m-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="gallery-card pt-3">
                        <img src="img/olx_cash_logo.jpg" alt="" class="gallery-card__image-fix img-fluid">
                    </div>

                    <div class="gallery-card pt-3">
                        <img src="img/relaince_retail_logo.jpg" alt="" class="gallery-card__image-fix img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="gallery-card pt-3">
                        <img src="img/gls_logo.jpg" alt="" class="gallery-card__image-fix img-fluid">
                    </div>

                    <div class="gallery-card pt-3">
                        <img src="img/our-partner-img1.jpg" alt="" class="gallery-card__image-fix img-fluid">
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="gallery-card pt-3">
                        <img src="img/kalorex_logo.png" alt="" class="gallery-card__image-fix img-fluid">
                    </div>

                    <div class="gallery-card pt-3">
                        <img src="img/our-partner-img2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="gallery-card pt-3">
                        <img src="img/amity_logo.png" alt="" class="gallery-card__image-fix img-fluid">
                    </div>

                    {{-- <div class="gallery-card pt-3">
                        <img src="img/our-partner-img3.jpg" alt="" class="gallery-card__image-fix img-fluid">
                    </div> --}}

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
        $(".leader_slider-owl-carousel").owlCarousel();
    });

    $('.leader_slider-owl-carousel').owlCarousel({
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
<script>
    $(document).ready(function(){
        $(".gallery-card").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".gallery-card__image-fix").hover(function(){

                $(this).addClass('transition');
            }, function(){

                $(this).removeClass('transition');
            });
        });

</script>

    </body>
</html>
