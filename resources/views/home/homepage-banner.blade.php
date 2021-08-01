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
        }
        .homepage-banner__wrapper{
            background-color: white;
            border-radius: 10px;
            padding: 40px 20px;
            margin-bottom: -230px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .homepage-banner__title{
            font-weight: bold;
            line-height: normal;
        }
        .homepage-banner__subtitle{
            color: lightgray;
            line-height: normal;
        }
        .homepage-banner__description{
            line-height: 1.8;
        }
        .homepage-banner__image-fix{
            width: 100%;
            max-height: 300px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="homepage-banner pt80 pb80">
        <div class="container">
            <div class="row homepage-banner__wrapper">
                <div class="col-md-6">
                    <h1 class="homepage-banner__title mb0">Hone St</h1>
                    <h2 class="homepage-banner__subtitle mb30">Solutions</h2>
                    <p class="homepage-banner__description mb30">Learn how design thinking, user research, business vision and marketing, and finally designing and creating real digital products for real users.</p>
                    {{-- <div class="d-flex justify-content-center"> --}}
                        <a href="#" class="btn btn-orange">Explore Now</a>
                    {{-- </div> --}}
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <img src="img/hone-st-banner.jpg" alt="" class="homepage-banner__image-fix">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
