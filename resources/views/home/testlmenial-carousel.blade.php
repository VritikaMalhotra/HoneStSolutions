<html>

<head>
    @include('layout/head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <style>
        .testomoials-carousel {
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .testomoials-carousel__background {
            background-image: url(img/background-ship.png), url(img/bacground-om.png);
            background-repeat: no-repeat;
            background-position: top left, bottom right;
            background-size: 200px, 150px;
        }

        .testomoials-carousel__title-fix {
            max-width: 100%;
        }

        .testomoials-carousel__title {
            text-align: center;
            /* text-shadow: 1px 1px 2px gray; */
        }

        .testomoials-carousel__title--shadow {
            position: relative;
            font-size: 60px;
            color: gray;
            text-align: center;
            top: -75px;
            opacity: 0.12;
        }

        .testomoials-carousel__image-fix {
            width: 120px;
            height: 120px;
            border: 10px solid #F9B94E;
            border-radius: 50%;
        }

        .testomoials-carousel__name {
            text-align: center;
        }

        @media screen and (max-width: 767px) {
            .testomoials-carousel__name {
                font-size: 30px;
                line-height: normal;
            }
        }

        .testomoials-carousel__description {
            text-align: center;
        }

        @media screen and (max-width: 767px) {
            .testomoials-carousel__description {
                font-size: 12px;
                line-height: normal;
            }
        }

        .testomoials-carousel__slide {
            padding: 0px 100px;
            border-left: 10px solid #F78819;
            border-right: 10px solid #F78819;
        }

        .testomoials-carousel__dots {
            bottom: 10px !important;
        }

        .testomoials-carousel__dots li {
            /* display: inline-block; */
            width: 10px !important;
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
            .testomoials-carousel__slide {
                padding: 0px 50px;
            }
        }

        @media screen and (max-width: 768px) {
            .testomoials-carousel__slide {
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
                <div id="testomoials-carousel" class="carousel slide testomoials-carousel__slide" data-ride="carousel">
                    <ul class="carousel-indicators testomoials-carousel__dots">
                        <li data-target="#testomoials-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testomoials-carousel" data-slide-to="1"></li>
                        <li data-target="#testomoials-carousel" data-slide-to="2"></li>
                        <li data-target="#testomoials-carousel" data-slide-to="3"></li>
                         <li data-target="#testomoials-carousel" data-slide-to="4"></li>
                            <li data-target="#testomoials-carousel" data-slide-to="5"></li>
                            <li data-target="#testomoials-carousel" data-slide-to="6"></li>
                            <li data-target="#testomoials-carousel" data-slide-to="7"></li>
                            <li data-target="#testomoials-carousel" data-slide-to="8"></li>
                            <!-- <li data-target="#testomoials-carousel" data-slide-to="9"></li>  -->
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <img src="img/testimonial1.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Varsha Adhikari, Managing Director, Tinctura Colour</h1>
                                <p class="testomoials-carousel__description">Earlier , Chanting for me was to recite some selective shlokas. Though I read Geeta but never gave a real try to Geeta chanting ,may be because I thought it's not necessary to know geeta chanting to get Geeta gyan. But chanting with Prasun opened up a new vista a new perspective to understand the importance of sound energy . Prasun helped me to improve my diction with his own chaste uccharan and with simple yet specific instructions. He also made us repeat and absorb the verse completely. The whole process helped me and my family to welcome Geeta with love and reverence to our lives. Will always be grateful towards him for Sharing his blessings. </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/testimonial2.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Khushal Lalwani, Entrepreneur</h1>
                                <p class="testomoials-carousel__description">Blessed to be apart of enchanting and enticing Shri Bhagavad Gita chanting with Prasun. With every Shloka - I felt much decluttered and many confusions were cleared and even beyond that there is something so liberating that I am not able to express in words. One has to experience it to understand it. Every chanting session prepared us for more learning and understanding of modern world day to day challenges. Other than the relevance of Bhagavad Gita in today’s corporate world explained by Prasun, what also makes me a big fan is it’s importance in making us more equipoised in any situation. Thank you Prasun for such a blissful experience.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/testimonial3.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Mr. Amit Gulati, CEO, My Car My Ride</h1>
                                <p class="testomoials-carousel__description">I distinctly remember going to a workshop conducted by Mr Prasun Kundu at AMA, Ahmedabad on the topic, “Discover the Arjuna in You". The workshop was nice but I was awestruck by Prasun's pronunciation of the shlokas of Bhagavad Gita. That compelled me to request Mr Prasun to help me learn, "How to read and chant Bhagavad Gita Shlokas". We started with Chapter 18 and I got stuck on the first shloka for 20 mins as I had no background of Sanskrit nor had gone through Bhagavad Gita ever. Such speed breakers came in pretty regularly for me. It was Prasun's patience and methodology of teaching that helped me learn what I could. Now for anyone reading this, I would like to share that I go through Bhagavad Gita shlokas every day. It helps me ease down, betters my composure, solves a lot of day to day problems, and most importantly, I have now taken the first step towards the spiritual journey. Whenever I am sad or in any difficult situation, learnings from Bhagavad Gita helps me overcome delusion each and every time. Thanks to Mr Prasun Kundu for making my life easier.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/bigtest1.jpg" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Mr Biswajit Adhikari, AVP, VIVRO Financial Services Private Limited</h1>
                                <p class="testomoials-carousel__description">Gita chanting is eternally enchanting. For the first time in my life, I attempted to do Gita chanting by joining the Gita chanting session. There were two distinct takeaways for me. First, Gita chanting is not as difficult as I thought always before joining the class. And Prasun made it simpler and easier for me to learn the nuances of chanting. Second, I never thought Gita chanting would be as blissful as I personally experienced the same. I always fall short of words to explain the bliss and peace of doing Gita chanting on daily basis. </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/bigtest2.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Amit Bose, Business Director, DSM B2C BusinessMANDI (Making a Nutritional Difference to India)
                                </h1>
                                <p class="testomoials-carousel__description">The Bhagavad Gita is an incredible scripture that teaches one and all, from all echelons of society and of any lineage, caste and creed, how to live life, how to break the cycle of rebirth and death, the duality of existence of soul and physical body, and how in progressing in spiritual life, it's not really denouncing and giving up actions, but actually how to do the action with full devotion and single minded focus, without the attraction and expectation of results, and neither a fear of failure. It teaches us that all we see or experience- the happiness, joy, sorrow are all transient and are direct result of our expectations. Pursuit of these only takes us more and more towards the center of the cyclone (turmoils of life), from where it becomes more and more difficult to come out and look for the eternal truth, which is just one.While reading the verses and reflecting on the same is great, chanting in a group elevates the entire experience. During the group chanting, different individual's thoughts become one and merges into one rhythm. This convergence or the synching of thoughts into one, creates a huge positive energy that empowers, enlivens and awakens us. It's an incredibly uplifting experience.
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/bigtest3.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Geet Anjali, Associate Project Manager/ Philanthropist at Infostretch</h1>
                                <p class="testomoials-carousel__description">I am Geetanjali, a person connected with Bhagavad Gita since childhood. Learnt few chapters of Gita in Sanskrit by heart. Heard Gita chantings endless times from very intellectual, well read scholars/ saints. When my husband asked me to join classes of Gita chanting, I was dubious on 2 fronts: who is teaching and secondly would I be able to make time for it? I reluctantly joined the class for the first time and there was no turning back since then and made sure that I attend all the classes no matter what. Prasun’s pronunciation/chanting of shlokas - never ever heard before - made a powerful impact on me and actually took me to vedic times. It was so authentic and melodic that all attendees use to get mesmerised. I learnt the rules of chanting from him, its nitty-gritties and try to practice them. If still in doubt, Prasun is always there to help. Bhagavad Gita was always part of me and will always remain part of me, but now I know how to chant it properly. </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/bigtest5.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Sujit Shorai, GM Instrumentation, Reliance Industries Ltd.
                                </h1>
                                <p class="testomoials-carousel__description">When an elephant walks through the market, he swings his trunk from side to side and creates havoc wherever he goes, knocking over fruits, stands, snatching bananas, coconuts scattering vendors. His trunk is naturally restless, hungry, scattered, undisciplined. This is just like our mind constantly causing trouble. However, when his master gives a stick of bamboo to hold in his trunk, the elephant wraps his trunk around the bamboo and the trunk begins to settle. Now the elephant strides through the market like a prince, calm, collected, focused serene. Bananas and coconuts no longer distract him.
                                    Similarly, mind is restless, turbulent, powerful and violent. Trying to control it is like trying to tame the wind. One fine day my wife asked me to join Mr.Prasun Kundu”s Gita Chanting is Enchanting batch and I did. His explanations and examples are appropriate to resonate with our daily life. As soon as my mind realize the true meaning of my life it slowly begins to settle and it becomes focused, calm, and concentrated. Thanks a ton for sharing your valuable knowledge about the Bhagavat Gita.
                                    Finally, I request everyone to please try to read the Bhagavat Gita which is a pure science and it can be used at all times to act righteously.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/bigtest4.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">Deepak Merchant, Business Partner at MeraMsg
                                </h1>
                                <p class="testomoials-carousel__description">Gita chanting experience with Prasun Sir is Inner soul purifying activity for me.. I recommend because it helps me a lot to understand my Mind . Heart, Body and soul and overcome from its weaknesses. My personal experience from Geeta Chanting is like going forward to divinity and ultimate Bliss.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="img/bigtest6.png" alt="" class="testomoials-carousel__image-fix">
                            </div>
                            <div class="testomoials-carousel__content">
                                <h1 class="testomoials-carousel__name pt20">
                                    Omkar Nath
                                </h1>
                                <p class="testomoials-carousel__description">I got initiated to Chanting of Bhagwat Gita through Prasoon Kundu Sir and joined chanting online with a group (though completely unknown to me), that was extremely friendly & dedicated Gita lovers.Gita chanting creates a soothing and very positive vibe in the house at the start of the day. As you proceed one chapter after another your Sanskrit pronunciation improves, the words of Slokas becomes clearer to you, unravelling the deeper meaning and secrets of life from one of the oldest and most revered scriptures of Sanatana Dharma“
                                </p>
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
</body>

</html>