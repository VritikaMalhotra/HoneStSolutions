<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .homepage__banner-fix{
            padding: 80px 0 80px 0;
        }
        .page__our-servies{
            /* background-color: #d6d6d6; */
            background-image: url(img/background-flower3.png),url(img/background-flower4.png);
            background-repeat: no-repeat;
            background-position: top left,bottom right;
            background-size: 200px,200px;
            /* padding: 180px 0 80px 0; */

        }
        .our-service-title-fix{
            max-width: 100%;
        }
        .our-servies__card{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            background-color: white;
            padding: 30px 20px;
        }
        .our-servies__card:hover{
            /* box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); */
            transform: translateY(-10px);
        }
        .our-servies__logo-fix{
            min-height: 90px;
            max-width: 70px;
        }
        @media only screen and (max-width: 1023px) {
            .our-servies__logo-fix{
                width:100%;
        }
        }
        .our-servies__name{
            color: black;
            font-weight: 600;
            text-align:center;
        }
        .our-servies__description{
            color: gray;
            text-align:center;
        }

    </style>
</head>
<body>
    <div class="homepage__banner-fix">
    <div class="page__our-servies">
        <div class="container">
            <div class="our-service-title d-flex justify-content-center">
                <img src="img/our-service-title.png" alt="" class="our-service-title-fix">
            </div>
            <div class="our-servies__cards justify-content-center row m-0">
                <a href="/service" class="our-servies d-flex col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card flex-fill">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/our-service-img1.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h5 class="our-servies__name mb-0">Business Consultation</h5>
                            <p class="our-servies__description">All i want to have client setisfaction & this is my aim</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="our-servies d-flex col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card flex-fill">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/our-service-img2.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h5 class="our-servies__name mb-0">Bhagavad Gita</h5>
                            <p class="our-servies__description">All i want to have client setisfaction & this is my aim</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="our-servies d-flex col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card flex-fill">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/our-service-img3.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h5 class="our-servies__name mb-0">Corporate Training</h5>
                            <p class="our-servies__description">All i want to have client setisfaction & this is my aim</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="our-servies d-flex col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card flex-fill">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/our-service-img4.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h5 class="our-servies__name mb-0">Digital  Marketing</h5>
                            <p class="our-servies__description">All i want to have client setisfaction & this is my aim</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>


            </div>
        </div>
    </div>
    </div>
</body>
</html>
