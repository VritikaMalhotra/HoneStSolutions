<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .events__background{
                background-image: url(img/background-lotus.png);
                background-repeat: no-repeat;
                background-position: center right;
                /* background-size: 200px; */
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
            .events__profile-fix{
                width: 50%;
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
    </style>
</head>
<body>
    <div class="events events__background">
        <div class="container">
            <div class="events__title d-flex justify-content-center">
                <img src="img/events-title.png" alt="" class="events__title-fix">
            </div>
            {{-- <h1 class="events__title mb0">Events</h1>
            <h1 class="events__title--shadow mb0">Events</h1> --}}
            <div class="events__cards">
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">First session</h3>
                        <div class="d-flex">
                            <img src="img/event-profile1.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 6 hour</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: November 5</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">View video</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">In the first session, we will consider design thinking and its understanding as well as different models of design thinking and the design process, and we will better remember this process with various examples. We will also discuss problem solving techniq</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Second session</h3>
                        <div class="d-flex">
                            <img src="img/event-profile2.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 6 hour</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: November 5</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">View video</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">In the second session, we will discuss service design, first discussing “What is a service?” Then we practice how to create the right conditions for them in the long run to stay loyal to our product based on the actual needs of our audience and to create s</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Third session</h3>
                        <div class="d-flex">
                            <img src="img/event-profile1.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 6 hour</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: November 5</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">View video</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">In the third session we will discuss the most important design phase, which is the initial research and review process. We will explore user experience research and user research methods. At the end of the session we will be able to build user personas as </p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Fourth session</h3>
                        <div class="d-flex">
                            <img src="img/event-profile3.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 6 hour</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: November 5</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">View video</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">Building experience is one of the key points in product management and design. But how does this experience come about? The experience is made by creating a unique feeling in the mind. In the fourth session, we will learn how to identify users’ behavior an</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">Fifth session</h3>
                        <div class="d-flex">
                            <img src="img/event-profile1.jpg" alt="" class="events__profile-fix">
                            <img src="img/event-profile4.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Duration: 6 hour</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-calendar-o " ></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">Date: November 5</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">View video</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">It’s time to get started.The fifth session is intended to capture the audiences’ minds and create a new experience for them, like a humorist, sculptor or painter.But with one big difference - and the difference is that we will solve their problems at the s</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
