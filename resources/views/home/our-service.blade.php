<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .page__our-servies{
            /* background-color: #d6d6d6; */
            padding: 180px 0 80px 0;
        }
        .our-servies__card{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            background-color: white;
            padding: 10px 10px;
        }
        .our-servies__card:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .our-servies__logo-fix{
            width:150px;
        }
        @media only screen and (max-width: 1023px) {
            .our-servies__logo-fix{
                width:100%;
        }
        }
        .our-servies__name{
            color: black;
            font-weight: 600;
            text-align:center;
        }
        .our-servies__description{
            color: gray;
            text-align:center;
        }

    </style>
</head>
<body>
    <div class="page__our-servies">
        {{-- <div class="container"> --}}
            <div class="our-servies__cards justify-content-center row m-0">
                <a href="#" class="our-servies col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_1.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h4 class="our-servies__name mb-0">-Steve Jobs</h4>
                            <p class="our-servies__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="our-servies col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_2.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h4 class="our-servies__name mb-0">-Steve Jobs</h4>
                            <p class="our-servies__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="our-servies col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_3.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h4 class="our-servies__name mb-0">-Steve Jobs</h4>
                            <p class="our-servies__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="our-servies col-xl-3 col-md-4 col-sm-6 pt-5">
                    <div class="our-servies__card">
                        <div class="our-servies__logo d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_4.jpg" alt="" class="our-servies__logo-fix">
                        </div>
                        <div class="our-servies__content px-0">
                            <h4 class="our-servies__name mb-0">-Steve Jobs</h4>
                            <p class="our-servies__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>
                </a>


            </div>
        {{-- </div> --}}
    </div>
</body>
</html>
