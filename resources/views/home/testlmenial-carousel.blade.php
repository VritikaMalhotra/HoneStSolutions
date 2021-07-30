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
            .testlmenial-carousel{
                background-color:white;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
           .testlmenial-carousel__title{
               text-align:center;
               /* text-shadow: 1px 1px 2px gray; */
           }
           .testlmenial-carousel__title--shadow{
            position: relative;
                font-size: 60px;
                color: gray;
                text-align: center;
                top: -105px;
                opacity: 0.12;
            }
           .testlmenial-carousel__image-fix{
               width:120px;
               height: 120px;
               border: 10px solid orange;
               border-radius: 50%;
           }
           .testlmenial-carousel__name{
               text-align: center;
           }
           .testlmenial-carousel__description{
               text-align: center;
           }
           .testlmenial-carousel__slide{
               padding: 0px 100px;
               border-left: 10px solid orange;
               border-right: 10px solid orange;
           }
           @media screen and (max-width: 1023px) {
                .testlmenial-carousel__slide{
                    padding: 0px 50px;
                }
            }
            @media screen and (max-width: 768px) {
                .testlmenial-carousel__slide{
                    padding: 0px 20px;
                }
            }


        </style>
    </head>
    <body>
   <div class="testlmenial-carousel pt50 pb50 my-5">

       <div class="container">

           <h1 class="testlmenial-carousel__title">Testlmenial</h1>
           <h1 class="testlmenial-carousel__title--shadow mb0">Testlmenial</h1>
           <div id="testlmenial-carousel" class="carousel slide testlmenial-carousel__slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#testlmenial-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testlmenial-carousel" data-slide-to="1"></li>
                <li data-target="#testlmenial-carousel" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="img/person_1.jpg" alt="" class="testlmenial-carousel__image-fix">
                    </div>
                    <div class="testlmenial-carousel__content">
                        <h1 class="testlmenial-carousel__name pt20">Hello</h1>
                        <p class="testlmenial-carousel__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur earum nulla ab cum. Ea aut ipsam quas animi odit perferendis dolores ab, tenetur et nostrum blanditiis iste facilis ratione eius?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="img/person_1.jpg" alt="" class="testlmenial-carousel__image-fix">
                    </div>
                    <div class="testlmenial-carousel__content">
                        <h1 class="testlmenial-carousel__name pt20">Hello</h1>
                        <p class="testlmenial-carousel__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur earum nulla ab cum. Ea aut ipsam quas animi odit perferendis dolores ab, tenetur et nostrum blanditiis iste facilis ratione eius?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="img/person_1.jpg" alt="" class="testlmenial-carousel__image-fix">
                    </div>
                    <div class="testlmenial-carousel__content">
                        <h1 class="testlmenial-carousel__name pt20">Hello</h1>
                        <p class="testlmenial-carousel__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur earum nulla ab cum. Ea aut ipsam quas animi odit perferendis dolores ab, tenetur et nostrum blanditiis iste facilis ratione eius?</p>
                    </div>
                </div>
            </div>
        </div>

       </div>
   </div>



    </body>
</html>
