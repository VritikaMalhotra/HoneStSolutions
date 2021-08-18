<html>
    <head>
        <style>
            .succes_story{
                background-color: #ff9800;
            }
            .succes_story__image-fix{
                width:100%;
                height: 100%;
            }
            .succes_story__content{
                padding-left:50px;
                padding-right:50px;

            }
            @media screen and (max-width: 767px) {
                .succes_story__content{
                    padding:15px;
                }
            }
            @media screen and (max-width: 1023px) {
                .succes_story__content{
                    padding-left:15px;
                    padding-right:15px;
                }
            }
            .succes_story__title ,.succes_story__title-second{
                    color: #ffffff;
                    font-weight:bold;
                    line-height: normal;
            }
            @media screen and (max-width: 1023px) {
                .succes_story__title,.succes_story__title-second{
                    margin-bottom: 15px;
            }
            }
            .succes_story__subtitle{
                color: #ffffff;
                line-height: normal;
            }

        </style>

    </head>
    <body>
        <section class="succes_story">
            <div class="container-fuild">
                <div class="row mx-0">
                    <div class="col-xl-3 col-lg-4 col-sm-6 succes_story__image p-0 d-flex align-items-center">
                        <img src="img/@yield('succes_story__image')" alt="Free Bootstrap Template by uicookies.com" class="succes_story__image-fix">
                    </div>
                    <div class="col-xl-9 col-lg-8 col-sm-6 col-md-pull-6 succes_story__content my-auto">
                        <h3 class="succes_story__title">@yield('succes_story__title')</h3>
                        <h4 class="succes_story__title-second">@yield('succes_story__title-second')</h4>
                        <p class="succes_story__subtitle">@yield('succes_story__subtitle')</p>
                        <a href="/our-journey" class="btn btn-black btn-lg">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
