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
            .testomoials-carousel{
                background-color:white;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            .testomoials-carousel__background{
                background-image: url(img/background-ship.png),url(img/bacground-om.png);
                background-repeat: no-repeat;
                background-position: top left,bottom right;
                background-size: 200px,150px;
            }
            .testomoials-carousel__title-fix{
                max-width: 100%;
            }
           .testomoials-carousel__title{
               text-align:center;
               /* text-shadow: 1px 1px 2px gray; */
           }
           .testomoials-carousel__title--shadow{
            position: relative;
                font-size: 60px;
                color: gray;
                text-align: center;
                top: -75px;
                opacity: 0.12;
            }
           .testomoials-carousel__image-fix{
               width:120px;
               height: 120px;
               border: 10px solid #F9B94E;
               border-radius: 50%;
           }
           .testomoials-carousel__name{
               text-align: center;
           }
           .testomoials-carousel__description{
               text-align: center;
           }
           .testomoials-carousel__slide{
               padding: 0px 100px;
               border-left: 10px solid #F78819;
               border-right: 10px solid #F78819;
           }
           @media screen and (max-width: 1023px) {
                .testomoials-carousel__slide{
                    padding: 0px 50px;
                }
            }
            @media screen and (max-width: 768px) {
                .testomoials-carousel__slide{
                    padding: 0px 20px;
                }
            }


        </style>
    </head>
    <body>

   <div class="testomoials-carousel__background">
       <div class="container">
            <div class="testomoials-carousel  pt50 pb50 my-5">
                <div class="testomoials-carousel__title d-flex justify-content-center">
                    <img src="img/testomoials-title.png" alt="" class="testomoials-carousel__title-fix">
                </div>
                {{-- <h1 class="testomoials-carousel__title mb0">testomoials</h1>
                <h1 class="testomoials-carousel__title--shadow mb0">testomoials</h1> --}}
                <div id="testomoials-carousel" class="carousel slide testomoials-carousel__slide" data-ride="carousel">
                 <ul class="carousel-indicators">
                     <li data-target="#testomoials-carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="1"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="2"></li>
                 </ul>
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <div class="d-flex justify-content-center">
                             <img src="img/testimonials-profile.jpg" alt="" class="testomoials-carousel__image-fix">
                         </div>
                         <div class="testomoials-carousel__content">
                             <h1 class="testomoials-carousel__name pt20">Jhon Wick, New York</h1>
                             <p class="testomoials-carousel__description">Writing paragraphs takes practice, but what should students write about? Good paragraph writing prompts allow students to write about what they know and like, so their focus can be on the writing process and using the four essential elements.</p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="d-flex justify-content-center">
                             <img src="img/person_1.jpg" alt="" class="testomoials-carousel__image-fix">
                         </div>
                         <div class="testomoials-carousel__content">
                             <h1 class="testomoials-carousel__name pt20">Jhon Wick, New York</h1>
                             <p class="testomoials-carousel__description">Writing paragraphs takes practice, but what should students write about? Good paragraph writing prompts allow students to write about what they know and like, so their focus can be on the writing process and using the four essential elements.</p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="d-flex justify-content-center">
                             <img src="img/person_1.jpg" alt="" class="testomoials-carousel__image-fix">
                         </div>
                         <div class="testomoials-carousel__content">
                             <h1 class="testomoials-carousel__name pt20">Jhon Wick, New York</h1>
                             <p class="testomoials-carousel__description">Writing paragraphs takes practice, but what should students write about? Good paragraph writing prompts allow students to write about what they know and like, so their focus can be on the writing process and using the four essential elements.</p>
                         </div>
                     </div>
                 </div>
            </div>
        </div>

       </div>
   </div>



    </body>
</html>
