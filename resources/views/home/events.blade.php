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
                        <h3 class="events__name">First section</h3>
                        <div class="d-flex">
                            <img src="img/person_1.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt qui expedita dignissimos similique voluptatum nobis sit dolore fuga sapiente, repudiandae, amet animi porro, dolorem aliquam velit aperiam itaque ratione!</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">First section</h3>
                        <div class="d-flex">
                            <img src="img/person_1.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt qui expedita dignissimos similique voluptatum nobis sit dolore fuga sapiente, repudiandae, amet animi porro, dolorem aliquam velit aperiam itaque ratione!</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">First section</h3>
                        <div class="d-flex">
                            <img src="img/person_1.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt qui expedita dignissimos similique voluptatum nobis sit dolore fuga sapiente, repudiandae, amet animi porro, dolorem aliquam velit aperiam itaque ratione!</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">First section</h3>
                        <div class="d-flex">
                            <img src="img/person_1.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt qui expedita dignissimos similique voluptatum nobis sit dolore fuga sapiente, repudiandae, amet animi porro, dolorem aliquam velit aperiam itaque ratione!</p>
                    </div>
                </div>
                <div class="row events__card my-5">
                    <div class="events__wrapper col-md-3">
                        <h3 class="events__name">First section</h3>
                        <div class="d-flex">
                            <img src="img/person_1.jpg" alt="" class="events__profile-fix">
                            <img src="img/person_2.jpg" alt="" class="events__profile-fix">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row mb30">
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                            <div class="d-flex col-sm-4 col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <h4 class="events__types mb0 pl-1">first type</h4>
                            </div>
                        </div>
                        <p class="events__description mb0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt qui expedita dignissimos similique voluptatum nobis sit dolore fuga sapiente, repudiandae, amet animi porro, dolorem aliquam velit aperiam itaque ratione!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
