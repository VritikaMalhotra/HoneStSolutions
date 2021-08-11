<html>
    <head>
        <style>
            .carousel-content {
                position: absolute;
                right: 10%;
                bottom: 50%;
                left: 10%;
                z-index: 10;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #fff;
                text-align: left;
            }
            @media screen and (max-width: 767px) {
                .carousel-content {
                position: absolute;
                right: 10%;
                bottom: 20%;
                left: 10%;
                z-index: 10;
                color: #fff;
                text-align: left;
                }
            }
            @media screen and (max-width: 1023px) {
                .carousel-content {
                position: absolute;
                right: 5%;
                bottom: 40%;
                left: 5%;
                z-index: 10;
                color: #fff;
                text-align: left;
                }
            }
            @media screen and (max-width: 1024px) {
                .carousel-content {
                position: absolute;
                right: 5%;
                bottom: 35%;
                left: 5%;
                z-index: 10;
                color: #fff;
                text-align: left;
                }
            }
            .carousel__title{
                font-family: 'Samarkan', sans-serif;
                font-size:50px !important;
                font-weight:bold;
                color:white;
            }
            @media screen and (max-width: 1023px) {
                .carousel__title{
                    font-size: 30px !important;
                    margin:0;
                }
            }
            @media screen and (max-width: 1023px) {
                .carousel__subtitle{

                margin:0;
                }
            }
        </style>
    </head>
    <body>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/temple.jpg" alt="Los Angeles" width="100%" height="60%">
                <div class="carousel-content">
                    <h1 class="carousel__title mb-0">@yield('curosal-title')</h1>
                    <p class="carousel__subtitle mb-0">@yield('curosal-subtitle')</p>
                </div>   
                </div>
                <div class="carousel-item">
                <img src="img/temple.jpg" alt="Chicago" width="100%" height="60%">
                <div class="carousel-content">
                    <h1 class="carousel__title mb-0">@yield('curosal-title')</h1>
                    <p class="carousel__subtitle mb-0">@yield('curosal-subtitle')</p>
                </div>   
                </div>
                <div class="carousel-item">
                <img src="img/img_sm_1.jpg" alt="New York" width="100%" height="60%">
                <div class="carousel-content">
                    <h1 class="carousel__title mb-0">@yield('curosal-title')</h1>
                    <p class="carousel__subtitle mb-0">@yield('curosal-subtitle')</p>
                </div>   
                </div>
            </div>
        </div>

    </body>
</html>