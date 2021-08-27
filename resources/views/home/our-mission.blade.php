<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .page__our-mission{
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            padding: 0 121px;
            background-image: url(img/wave_orange.png);
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: 650px;
            /* background-size: 200px,150px; */
        }

        @media only screen and (max-width: 768px) {
            .page__our-mission{
                padding: 0 15px;
        }
        }
        .Our-mission__title-fix{
            max-width: 100%;
        }
        .our-mission__title{
            text-align: center;
        }
        .our-mission__title--shadow{
                position: relative;
                font-size: 60px;
                color: gray;
                text-align: center;
                top: -75px;
                opacity: 0.12;
            }
        .our-mission__banner-fix{
            width: auto;
            /* height: 150px; */
        }
        .our-mission__description{

        }

    </style>
</head>
<body>
    <div class="container">
        <div class="page__our-mission py-5 my-5">
            {{-- <h1 class="our-mission__title mb0">Our Mission</h1>
            <h1 class="our-mission__title--shadow mb0">Our Mission</h1> --}}
            <div class="Our-mission__title d-flex justify-content-center">
                <img src="img/Our-mission-title.png" alt="" class="Our-mission__title-fix">
            </div>
            {{-- <div class="our-mission__banner d-flex justify-content-center mb20">
                <img src="img/our-mission-banner.jpg" alt="" class="our-mission__banner-fix">
            </div> --}}
            <h1 class="testomoials-carousel__name pt20">Share learnings from Bhagvad Gita with maximum people to increase happiness quotient.</h1>
            <p class="our-mission__description mb0"> </p>
            <p class="our-mission__description mb0"></p>
            <div class="d-flex justify-content-center pt30">
                <a href="#" class="btn btn-orange">Read more</a>
            </div>
        </div>
    </div>
</body>
</html>
