<html>
    <head>
    <style>
        .buy-book{
            background-image: url(img/bacground-our-mission.png);
            background-repeat: no-repeat;
            background-position: bottom left;
            background-size: 200px;
        }
        .buy-book__button{
            border:1px solid gray;
            border-radius:30px;
            color:black;
            padding:1rem;
            background-color: white;
        }
        .buy-book__button:hover{
            color:white;
            background-color: black;
        }
        .buy-book__image-fix{
            width: 100%;
            height: 600px;
        }
        @media screen and (min-width: 768px) {
            .buy-book__image{
            position: absolute;
            bottom: 100px;
            }
        }
        @media screen and (max-width: 768px) {
            .buy-book__image{
                margin-top:10px;
            }
        }

    </style>
    </head>
    <body>
        <div class="buy-book pt100 pb100">
            <div class="container">
                <div class="row m-0">
                    <div class="col-md-6">
                        <p class="buy-book__description">‘The Corporate Bhagavad Gita – Discover the Arjuna in You’ is an effort to make The Bhagavad Gita a must read for everyone, and make it available for masses to imbibe, emulate, and make a positive difference in one’s life. 
This in–depth research on the eighteenth chapter of Shrimad Bhagavad Gita shall guide the Arjuna within us to emerge as a virtuous winner. This book has been designed with very unique fascinating inputs from Shrimad Bhagavad Gita, and experiences of life. The reader shall be gaining insights, which will become the guiding force to emerge victorious.</p>
                        <p class="buy-book__description">The eighteenth chapter of Shrimad Bhagavad Gita is a summary of the first seventeen chapters. This chapter not only summarizes but elaborates some points which were hinted at earlier.
Therefore, if someone reads or understands this chapter, he/she will be able to understand Shrimad Bhagavad Gita in totality.</p>
                        <div class="row">
                            <a href="#" class="buy-book__button mr-2 mt-2">BUY PAPERBACK <i class="fa fa-shopping-cart pl-2" aria-hidden="true"></i></a>
                            <a href="#" class="buy-book__button mr-2 mt-2">BUY E-BOOK <i class="fa fa-shopping-cart pl-2" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="buy-book__image">
                            <img src="img/book-demo4.PNG" alt="" class="buy-book__image-fix">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
