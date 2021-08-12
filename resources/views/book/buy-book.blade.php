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
            bottom: 0px;
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
                        <p class="buy-book__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam magnam mollitia, nisi labore temporibus voluptate tenetur illum repellendus, cupiditate blanditiis provident vel dicta maiores ipsam alias facere? Dolores,Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam magnam mollitia, nisi labore temporibus voluptate tenetur illum repellendus, cupiditate blanditiis provident vel dicta maiores ipsam alias facere? Dolores.</p>
                        <p class="buy-book__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam magnam mollitia, nisi labore temporibus voluptate tenetur illum repellendus, cupiditate blanditiis provident vel dicta maiores ipsam alias facere? Dolores, ex?</p>
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
