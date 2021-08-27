<html>

<head>
    <style>
        .page-book-review-que {
            background-image: url(img/background-ship.png), url(img/bacground-om.png);
            background-repeat: no-repeat;
            background-position: top left, bottom right;
            background-size: 200px, 150px;
        }

        .book-review-que__title {
            font-weight: bold;
            text-align: center;
        }

        .book-review-que__title {
            font-weight: bold;
        }

        .carousel-review__subtitle {
            text-align: center;
        }

        .book-review-que__subtitle {}

        .accordion {
            background-color: #fff;
            color: #0e185a;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            border-bottom: 1px solid lightgray;
            text-align: left;
            outline: none;
            font-size: 15px;
            font-weight: bold;
            transition: 0.4s;
        }

        /* .active, .accordion:hover {
            background-color: #fff;
        } */

        .accordion:after {
            content: '\25BC';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
            /* transform: rotate(268deg);
        -webkit-transform: rotate(268deg); */
        }

        .accordion.active:after {
            content: "\25B2";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
</head>

<body>
    <div class="page-book-review-que py-5">
        <div class="container">
            <div class="col-md-12">
                <h2 class="book-review-que__title">Book Reviews</h2>
            </div>
            <div id="carouselReview" class="carousel slide" data-ride="carousel">
                <div class="carousel-review__carousel-inner carousel-inner">
                    <div class="carousel-item active">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Navneet</h4>
                        <p class="carousel-review__subtitle">I coming from corporate background can relate to this very well.....What a thought of taking insight from Gita & incorporating them in the corporate life......What strikes immediately is the ease with which the writer has simplified the concept of performance vs expectations vs delivery

                            The language is also very lucid and easy to comprehend.

                            A true, simple and straightforward guide to life....

                            Very simply written. No big decorative words or phrases which are normally difficult to decipher. Easy to understand and keeps you engrossed. I wish the writer gets his due. Excellent work done.....looking forward for many more to come....Must read & Implement for all...</p>
                    </div>
                    <div class="carousel-item">
                        
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Bilva R Desai</h4>
                        <p class="carousel-review__subtitle">Got my copy delivered yesterday and started reading it. I must say its very engrossing

                            What strikes immediately is the ease with which the writer has simplified the concept of performance vs expectations vs delivery

                            The language is also very lucid and easy to comprehend.

                            A true, simple and straightforward guide to life....</p>
                    </div>
                    <div class="carousel-item">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Amit</h4>
                        <p class="carousel-review__subtitle">While ordering the book I was not sure how an ancient scripture would be able to understand the modern day corporate complexity. I was very enthusiastic to understand how the author will be able to connect both this far ends.
                            While reading the book I was amazed to see how beautifully and logically each and every shlokas have been explained to bring relevancy in operating today’s corporate guidelines.
                            As per me this book is a must read for all decision makers in the company so that the idea can be very well transfered to the respective businesses.
                            I can understand that it would be not easy for author to bring more elaboration and illustrations to each shlokas but I would love to see if he can publishes few other volumes with focus on few selective subjects.</p>
                    </div>
                    <div class="carousel-item">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Umesh Sukhwani</h4>
                        <p class="carousel-review__subtitle">Read the book once yesterday. The summary of Bhagavad Gita, its 18th chapter has been elaborated with such ease and such simple examples that it clarifies quite a few doubts which we face in day to day life.
                            My take away from the first reading of this book was to do Tapah (single pointed focus towards the goal) Yajna (work passionately avoiding all distractions) amd Daanam (Give credit of the success hence achieved to others). The amount of satisfaction from such things is unparalleled, which I can verify from few past small instances. Plus the learning and experience we get out of these instances remains with us which is actually is our internal growth.
                            As rightly mentioned by Prasun sir in the initial note of the book, this is not the book to be read just once like a novel, but to be practiced one shloka at a time and inculcated as a habit.
                            There are many more readings of the book left, and I am sure with each reading some new perspective will get uncovered and reveal itself. The journey to discover the inner Arjuna has begun!</p>
                    </div>
                    <div class="carousel-item">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Jasveen</h4>
                        <p class="carousel-review__subtitle">Got my copy delivered today and started reading it. I must say its very engrossing and has depth with simplicity.....The language is also very lucid and easy to comprehend.

                            A true, simple and straightforward guide to life....

                            Must read for all age group’s.</p>
                    </div>
                    <div class="carousel-item">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Ishita Shukla</h4>
                        <p class="carousel-review__subtitle">I read the book recently and as a beginner in the corporate world, the book has been a great guide. It has taken the lessons from the Bhagavad Gita and very simply stated how to the best version of ourselves. The author has simplified the complex work into layman terms to help all. Every one should have this book as a part of their library.</p>
                    </div>
                    <div class="carousel-item">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Sanjeev Rana</h4>
                        <p class="carousel-review__subtitle">My Mom and her mother have been an avid followers of Bhagavad Gita and have been referring lots of examples from it whenever she or anyone faces any crisis of situation or thoughts and GITA always have its answers ready and satisfying. With this book my faith in GITA and its further utility in my career gets further endorsed.</p>
                    </div>
                    <div class="carousel-item">
                        <h4 class="testomoials-carousel__name pt20" style= "text-align: center;">Hitansh</h4>
                        <p class="carousel-review__subtitle">What a thought of taking insight from Gita & incorporating them in the corporate life.
Your thought process & articulation is excellent. Hope to see many more such great books from you in future.</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="p-1" href="#carouselReview" role="button" data-slide="prev">
                        <span class="p-3" style="border:1px solid gray;border-bottom-left-radius: 20px;border-top-left-radius: 20px;"><i class="fa fa-arrow-left" style="color:gray;" aria-hidden="true"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="p-1" href="#carouselReview" role="button" data-slide="next">
                        <span class="p-3" style="border:1px solid gray;border-bottom-right-radius: 20px;border-top-right-radius: 20px;"><i class="fa fa-arrow-right" style="color:gray;" aria-hidden="true"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            {{-- <div class="row m-0">

                    <div class="book-review-que__wrapper col-sm-12">
                        <h2 class="book-review-que__title">Frequently Asked Question</h2>
                        <p class="book-review-que__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                    </div>
                </div> --}}
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>