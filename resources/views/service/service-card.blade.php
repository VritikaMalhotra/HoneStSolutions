<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .page__service{
            background-color: #d6d6d6;
            background-image: url(img/background-ship.png),url(img/bacground-om.png);
            background-repeat: no-repeat;
            background-position: top left,bottom right;
            background-size: 200px,150px;
        }
        .service__card{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            background-color: white;
        }
        .service__card:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .service__logo-fix{
            width:150px;
        }
        .service__name{
            text-align:center;
        }
        .service__description{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="page__service py-5">
        <div class="container">
            <div class="service__cards justify-content-center row m-0">
                <a href="#" class="service col-sm-6 pt-5">
                    <div class="service__card px-5 py-5">
                        <div class="service__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_1.jpg" alt="" class="service__logo-fix">
                        </div>
                        <div class="service__content px-0">
                            <h4 class="service__name mb-0">-Steve Jobs</h4>
                            <p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="service col-sm-6 pt-5">
                    <div class="service__card px-5 py-5">
                        <div class="service__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_2.jpg" alt="" class="service__logo-fix">
                        </div>
                        <div class="service__content px-0">
                            <h4 class="service__name mb-0">-Steve Jobs</h4>
                            <p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="service col-sm-6 pt-5">
                    <div class="service__card px-5 py-5">
                        <div class="service__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_3.jpg" alt="" class="service__logo-fix">
                        </div>
                        <div class="service__content px-0">
                            <h4 class="service__name mb-0">-Steve Jobs</h4>
                            <p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="service col-sm-6 pt-5">
                    <div class="service__card px-5 py-5">
                        <div class="service__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_4.jpg" alt="" class="service__logo-fix">
                        </div>
                        <div class="service__content px-0">
                            <h4 class="service__name mb-0">-Steve Jobs</h4>
                            <p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-orange">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>



            </div>
        </div>
    </div>
</body>
</html>
