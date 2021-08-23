<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .homepage-banner{
            background-color: #FF9031;
            background-image: url(img/ethnic.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .homepage-banner__wrapper{
            background-color: white;
            background-image: url(img/homepage-banner-background.png);
            background-repeat: no-repeat;
            background-position: top left;
            background-size: 250px;
            border-radius: 10px;
            padding: 50px 0px 50px 50px;
            margin-bottom: -230px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        @media only screen and (max-width: 1023px) {
            .homepage-banner__wrapper{
                padding: 50px 50px 50px 50px;

            }
        }
        .homepage-banner__title{
            font-weight: bold;
            line-height: normal;
        }
        .homepage-banner__subtitle{
            font-family: 'Samarkan', sans-serif;
            color: gray;
            line-height: normal;
        }
        .homepage-banner__description{
            line-height: 1.8;
        }
        .homepage-banner__image-fix{
            width: 60%;
        }
        @media only screen and (max-width: 1023px) {
            .homepage-banner__image-fix{
                width:100%;
            }
        }
        @media only screen and (max-width: 768px) {
            .homepage-banner__wrap{
                padding-top: 30px;
            }
        }
        .testomoials-carousel__name{
               text-align: left;
           }
           @media screen and (max-width: 767px) {
                .testomoials-carousel__name{
                    font-size: 30px;
                    line-height: normal;
                }
            }
    </style>
</head>
<body>
    <div class="homepage-banner pt80 pb80">
        <div class="container">
            <div class="row homepage-banner__wrapper">
                <div class="col-md-6">
                    <h1 class="homepage-banner__title mb0">Hone ST</h1>
                    <h2 class="homepage-banner__subtitle mb30">Solutions</h2>
                    <h1 class="homepage-banner__title sb0">Help Bhagvad Gita Touch Life of Every Individual.</h1>
                    {{-- <div class="d-flex justify-content-center"> --}}
                        <a href="#our_services" class="btn btn-orange">Explore Now</a>
                    {{-- </div> --}}
                </div>
                <div class="col-md-6 homepage-banner__wrap">
                    <div class="d-flex justify-content-center">
                        <img src="img/homepage-banner.jpg" alt="" class="homepage-banner__image-fix">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
