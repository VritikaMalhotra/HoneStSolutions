<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .events__background{
                /* background-image: url(img/background_krishna-bhagavad.png),url(img/background-lotus.png); */
                background-image: url(img/background-lotus.png);
                background-repeat: no-repeat;
                background-position: center right;
                background-size: 350px;
            }
            .events__title-fix{
                max-width: 100%;
            }
            .events__title{
               text-align:center;
            }
            .events__title--shadow{
            position: relative;
                font-size: 60px;
                color: gray;
                text-align: center;
                top: -75px;
                opacity: 0.12;
            }

            @media only screen and (max-width: 1023px) {
                .events__profile{
                    justify-content: center;
                }
            }
            /* @media only screen and (max-width: 767px) {
                .events__media-wrap{
                    justify-content: center;
                }
            } */

            .events__profile-fix{
                width: 60%;
                padding-right: 10px;
            }
            .events__description{

            }
            .events__cards{
                border-left: 10px solid #c9c9c9;
            }
            .events__name{
                border-left: 10px solid gray;
                margin-left: -10px;
            }
            .events__types{
                color: black;
                font-size: 22px;
            }
            .events__types-link{
                color: black;
                font-size: 22px;
            }
            .events__types-link:hover{
                color: orange;
            }
    </style>
</head>
<body>
    <div class="events events__background">
        <div class="container">
            <div class="events__title d-flex justify-content-center">
                <img src="img/videos.png" alt="" class="events__title-fix">
            </div>
            {{-- <h1 class="events__title mb0">Events</h1>
            <h1 class="events__title--shadow mb0">Events</h1> --}}
            <div class="events__cards">
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Discover the ARJUNA in You</h3>
                        <div class="events__profile d-flex"><a href="https://www.youtube.com/watch?v=akc1hFwCa1A" target="_blank">
                            <img src="img/ama_video.jpg"   alt="" class="events__profile-fix"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 58 min</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: Sept 20 2021</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="https://www.youtube.com/watch?v=akc1hFwCa1A" class="events__types-link mb0 pl-1" target="_blank">View video</a>
                            </div>
                        </div>
                        <p class="events__description mb0" >Discover the ARJUNA in You by Mr. Prasun Kundu Corporate Trainer & Consultant September 18, 2021.</div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">In conversation with Ummeed!</h3>
                        <div class="events__profile d-flex"><a href="https://www.youtube.com/watch?v=1nI-Sa1uf-E" target="_blank">
                            <img src="img/YT_1.jpg"   alt="" class="events__profile-fix"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 1hr 11min</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: May 25 2021</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="https://www.youtube.com/watch?v=1nI-Sa1uf-E" class="events__types-link mb0 pl-1" target="_blank">View video</a>
                            </div>
                        </div>
                        <p class="events__description mb0" >Great Conversation with Mr. Jayesh Kaushik and Mr. Vikash Jha, Founders of Ummeed, on how an individual can remain focussed in these challenging times and come out with flying colours. More importantly, how Bhagavad Gita can help swim through these high tides!!!
Unveil the power of Bhagavad Gita and how by choosing Lord Shri Krishna as our charioteer we can remain focussed in righteous action.</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Lockdown Learnings - Part XI</h3>
                        <div class="events__profile d-flex"><a href="https://www.youtube.com/watch?v=yznQB5DH6r4" target="_blank">
                            <img src="img/yt_2.jpg" alt="" class="events__profile-fix"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 9 Mins</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: June 10 2020</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="https://www.youtube.com/watch?v=yznQB5DH6r4" class="events__types-link mb0 pl-1" target="_blank">View video</a>
                            </div>
                        </div>
                        <p class="events__description mb0">Concept of DAVIPS - Karma (Action/Activity)
Prasun Kundu has experience of over 27 years in the corporate world of which more than 18 years in leadership position. Decided to pursue his passion to give back to the corporate world and to the society at large.
Corporate experience includes 12 years with Nestle India Limited, 3 Years with Reliance Retail, Close to 8 years with Idea Cellular Limited and 11 months with McCormick.</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Interview with Dr. Avani Desai</h3>
                        <div class="events__profile d-flex"><a href="https://www.youtube.com/watch?v=3Y4bKdBum7o" target="_blank">
                            <img src="img/yt_3.jpg" alt="" class="events__profile-fix"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 8 Mins</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: Aug 31 2019</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="https://www.youtube.com/watch?v=3Y4bKdBum7o" class="events__types-link mb0 pl-1" target="_blank" >View video</a>
                            </div>
                        </div>
                        <p class="events__description mb0">In this session The author is talking about the book Corporate Bhagavad Gita along with Dr. Avani Desai  </p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Interview by Dr. Sameer Savaliya</h3>
                        <div class="events__profile d-flex"><a href="https://www.youtube.com/watch?v=qgJaBg53A50" target="_blank">
                            <img src="img/yt_4.jpg" alt="" class="events__profile-fix"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 30 Mins</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: May 2 2019</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="https://www.youtube.com/watch?v=qgJaBg53A50" class="events__types-link mb0 pl-1" target="_blank">View video</a>
                            </div>
                        </div>
                        <p class="events__description mb0">This interview was done at Books n Bliss club with Dr. Sameer Savaliya, Founder of Books n Bliss club. Interview revolced around The Corporate Bhagavad Gita - Discover The Arjuna In You...</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Mr Prasun Kundu</h3>
                        <div class="events__profile d-flex"><a href="https://www.youtube.com/watch?v=68fLyFiaDoM" target="_blank">
                            <img src="img/yt_5.jpg" alt="" class="events__profile-fix"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 1 hr 15 min</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: July 16 2019</h4>
                            </div>
                            <div class="events__media-wrap d-flex col-lg-4 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <a href="https://www.youtube.com/watch?v=68fLyFiaDoM" class="events__types-link mb0 pl-1" target="_blank">View video</a>
                            </div>
                        </div>
                        <p class="events__description mb0">Ahmedabad Management Association</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
