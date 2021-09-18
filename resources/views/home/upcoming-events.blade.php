<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .upcoming-events__background{
                /* background-image: url(img/background_krishna-bhagavad.png),url(img/background-lotus.png); */
                /* background-image: url(img/background-lotus.png);
                background-repeat: no-repeat;
                background-position: center right;
                background-size: 350px; */
            }
            .upcoming-events__main-title{
                background: #FF9031;
                border-radius: 10px;
                margin: 0px 30px 20px !important;
                position: relative;
            }
            .upcoming-events__title-fix{
                max-width: 100%;
            }
            .upcoming-events__title{
               text-align:center;
            }
            .upcoming-events__title--shadow{
            position: relative;
                font-size: 60px;
                color: gray;
                text-align: center;
                top: -75px;
                opacity: 0.12;
            }

            @media only screen and (max-width: 1023px) {
                .upcoming-events__profile{
                    justify-content: center;
                }
            }
            /* @media only screen and (max-width: 767px) {
                .upcoming-events__media-wrap{
                    justify-content: center;
                }
            } */

            .upcoming-events__profile-fix{
                width: 60%;
                padding-right: 10px;
            }
            .upcoming-events__description{

            }
            .upcoming-events__cards{
                border-left: 10px solid #c9c9c9;
            }
            .upcoming-events__name{
                border-left: 10px solid gray;
                margin-left: -10px;
            }
            .upcoming-events__types{
                color: black;
                font-size: 22px;
            }
            .upcoming-events__types-link{
                color: black;
                font-size: 22px;
            }
            .upcoming-events__types-link:hover{
                color: white;
            }
            .upcoming-events__border-fix{
                background: red;
                width: 10px;
                position: absolute;
                left: -40px;
                min-height: -webkit-fill-available;
            }
    </style>
</head>
<body>
    <div class="upcoming-events upcoming-events__background">
        <div class="container">
            <div class="upcoming-events__title d-flex justify-content-center">
                <img src="img/videos.png" alt="" class="upcoming-events__title-fix">
            </div>
            {{-- <h1 class="upcoming-events__title mb0">upcoming-Events</h1>
            <h1 class="upcoming-events__title--shadow mb0">upcoming-Events</h1> --}}
            <div class="upcoming-events__cards">

                <div class="upcoming-events__card my-5">
                    <div class="">
                        <div class="upcoming-events__main-title row  mb30">
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <h4 class="upcoming-events__types mb0 pl-1">First Session</h4>
                            </div>
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="upcoming-events__types mb0 pl-1">Duration: 1hr 11min</h4>
                            </div>
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="upcoming-events__types mb0 pl-1">Date: May 25 2021</h4>
                            </div>
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="/attend-form" class="upcoming-events__types-link mb0 pl-1" target="_blank" >Attend</a>
                            </div>
                            <div class="upcoming-events__border-fix">
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="upcoming-events__wrapper col-md-3">
                                <div class="upcoming-events__profile d-flex"><a href="https://www.youtube.com/watch?v=1nI-Sa1uf-E" target="_blank">
                                    <img src="img/YT_1.jpg"   alt="" class="upcoming-events__profile-fix"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p class="upcoming-events__description mb0" >Great Conversation with Mr. Jayesh Kaushik and Mr. Vikash Jha, Founders of Ummeed, on how an individual can remain focussed in these challenging times and come out with flying colours. More importantly, how Bhagavad Gita can help swim through these high tides!!!
                                    Unveil the power of Bhagavad Gita and how by choosing Lord Shri Krishna as our charioteer we can remain focussed in righteous action.</p>
                            </div>

                        </div>
                    </div>
                  
                </div>

                <div class="upcoming-events__card my-5">
                    <div class="">
                        <div class="upcoming-events__main-title row  mb30">
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <h4 class="upcoming-events__types mb0 pl-1">First Session</h4>
                            </div>
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="upcoming-events__types mb0 pl-1">Duration: 1hr 11min</h4>
                            </div>
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="upcoming-events__types mb0 pl-1">Date: May 25 2021</h4>
                            </div>
                            <div class="upcoming-events__media-wrap d-flex col-lg-3 col-md-3 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="/attend-form" class="upcoming-events__types-link mb0 pl-1" target="_blank" >Attend</a>
                            </div>
                            <div class="upcoming-events__border-fix">
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="upcoming-events__wrapper col-md-3">
                                <div class="upcoming-events__profile d-flex"><a href="https://www.youtube.com/watch?v=1nI-Sa1uf-E" target="_blank">
                                    <img src="img/YT_1.jpg"   alt="" class="upcoming-events__profile-fix"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p class="upcoming-events__description mb0" >Great Conversation with Mr. Jayesh Kaushik and Mr. Vikash Jha, Founders of Ummeed, on how an individual can remain focussed in these challenging times and come out with flying colours. More importantly, how Bhagavad Gita can help swim through these high tides!!!
                                    Unveil the power of Bhagavad Gita and how by choosing Lord Shri Krishna as our charioteer we can remain focussed in righteous action.</p>
                            </div>

                        </div>
                    </div>
                  
                </div>
               
             
            </div>
        </div>

    </div>
</body>
</html>
