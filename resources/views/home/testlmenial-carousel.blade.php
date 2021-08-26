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
           @media screen and (max-width: 767px) {
                .testomoials-carousel__name{
                    font-size: 30px;
                    line-height: normal;
                }
            }
           .testomoials-carousel__description{
               text-align: center;
           }
           @media screen and (max-width: 767px) {
                .testomoials-carousel__description{
                    font-size: 12px;
                    line-height: normal;
                }
            }
           .testomoials-carousel__slide{
               padding: 0px 100px;
               border-left: 10px solid #F78819;
               border-right: 10px solid #F78819;
           }
           .testomoials-carousel__dots{
               bottom: -30px !important;
           }
           .testomoials-carousel__dots li {
                /* display: inline-block; */
                width: 10px!important;
                height: 10px !important;
                /* margin: 10px; */
                /* text-indent: 0; */
                /* cursor: pointer;
                border: none; */
                border-radius: 100%;
                background-color: #707070 !important;
                /* box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5); */
                /* list-style-type: square; */
            }


            .carousel-indicators .active {
                width: 10px !important;
                height: 10px !important;
                /* margin: 10px; */
                background-color: #F78819 !important;
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
                 <ul class="carousel-indicators testomoials-carousel__dots">
                     <li data-target="#testomoials-carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="1"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="2"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="3"></li>
                     {{-- <li data-target="#testomoials-carousel" data-slide-to="4"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="5"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="6"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="7"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="8"></li>
                     <li data-target="#testomoials-carousel" data-slide-to="9"></li> --}}
                 </ul>
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <div class="d-flex justify-content-center">
                             <img src="img/testimonial1.png" alt="" class="testomoials-carousel__image-fix">
                         </div>
                         <div class="testomoials-carousel__content">
                             <h1 class="testomoials-carousel__name pt20">Varsha Adhikari, Managing Director, Tinctura Colour</h1>
                             <p class="testomoials-carousel__description">Earlier, Chanting for me was to recite some selective shlokas. Though I read Geeta but never gave a real try to Geeta chanting ,may be because I  thought it's not necessary to know geeta chanting to get Geeta gyan. But chanting with Prasun opened up a new vista a new perspective to understand the importance of sound energy . Prasun helped me to improve my diction with his own chaste uccharan and with simple yet specific instructions. He also made us repeat and absorb the verse completely. The whole process helped me and my family to welcome  Geeta with love and reverence to our lives. Will always be grateful towards him for Sharing his blessings.                            </p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="d-flex justify-content-center">
                             <img src="img/testimonial2.png" alt="" class="testomoials-carousel__image-fix">
                         </div>
                         <div class="testomoials-carousel__content">
                             <h1 class="testomoials-carousel__name pt20">Khushal Lalwani, Entrepreneur</h1>
                             <p class="testomoials-carousel__description">Blessed to be apart of enchanting and enticing Shri Bhagavad Gita chanting with Prasun. With every Shloka - I felt much decluttered and many confusions were cleared and even beyond that there is something so liberating that I am not able to express in words. One has to experience it to understand it. Every chanting session prepared us for more learning and understanding of modern world day to day  challenges. Other than the relevance of Bhagvad Gita in today’s corporate world explained by Prasun, what also makes me a big fan is it’s importance in making us more equipoised in any situation. Thank you Prasun for such a blissful experience.
                            </p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="d-flex justify-content-center">
                             <img src="img/testimonial3.png" alt="" class="testomoials-carousel__image-fix">
                         </div>
                         <div class="testomoials-carousel__content">
                             <h1 class="testomoials-carousel__name pt20">Mr. Amit Gulati, CEO, My Car My Ride</h1>
                             <p class="testomoials-carousel__description">I distinctly remember going to a workshop conducted by Mr Prasun Kundu at AMA, Ahmedabad on the topic, “Discover the Arjuna in You". The workshop was nice but I was awestruck by Prasun's pronunciation of the shlokas of Bhagavad Gita. That compelled me to request Mr Prasun to help me learn, "How to read and chant Bhagavad Gita Shlokas". We started with Chapter 18 and I got stuck on the first shloka for 20 mins as I had no background of Sanskrit nor had gone through Bhagavad Gita ever. Such speed breakers came in pretty regularly for me. It was Prasun's patience and methodology of teaching that helped me learn what I could. Now for anyone reading this,  I would like to share that I go through Bhagavad Gita shlokas every day. It helps me ease down, betters my composure, solves a lot of day to day problems, and most importantly, I have now taken the first step towards the spiritual journey. Whenever I am sad or in any difficult situation, learnings from Bhagavad Gita helps me overcome delusion each and every time. Thanks to Mr Prasun Kundu for making my life easier.
                            </p>
                         </div>
                    </div>
                    

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="img/People1.jpg" alt="" class="testomoials-carousel__image-fix">
                        </div>
                        <div class="testomoials-carousel__content">
                            <h1 class="testomoials-carousel__name pt20">Mr. Amit Gulati, CEO, My Car My Ride</h1>
                            <p class="testomoials-carousel__description">I distinctly remember going to a workshop conducted by Mr Prasun Kundu at AMA, Ahmedabad on the topic, “Discover the Arjuna in You". The workshop was nice but I was awestruck by Prasun's pronunciation of the shlokas of Bhagavad Gita. That compelled me to request Mr Prasun to help me learn, "How to read and chant Bhagavad Gita Shlokas". We started with Chapter 18 and I got stuck on the first shloka for 20 mins as I had no background of Sanskrit nor had gone through Bhagavad Gita ever. Such speed breakers came in pretty regularly for me. It was Prasun's patience and methodology of teaching that helped me learn what I could. Now for anyone reading this,  I would like to share that I go through Bhagavad Gita shlokas every day. It helps me ease down, betters my composure, solves a lot of day to day problems, and most importantly, I have now taken the first step towards the spiritual journey. Whenever I am sad or in any difficult situation, learnings from Bhagavad Gita helps me overcome delusion each and every time. Thanks to Mr Prasun Kundu for making my life easier.
                           </p>
                        </div>
                       </div>
                   </div>
                </div>

                   <div class="d-flex justify-content-center pt30">
                    <a href="/people" class="btn btn-orange">Read more</a>
                </div>

           </div>
                </div>

            </div>

       </div>
   </div>



    </body>
</html>
