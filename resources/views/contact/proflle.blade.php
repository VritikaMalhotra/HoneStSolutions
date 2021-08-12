<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .profile-main{
            background-color:white;
            /* margin-bottom: 15rem; */
            background-image: url(img/bacground-our-mission.png);
            background-repeat: no-repeat;
            background-position: bottom left;
            background-size: 200px;
        }
        .profile-card{
            margin-top:-120px;
        }
        .profile-card__logo-fix{
            width:180px;
            height:180px;
            border-radius: 50%;
            border: 20px solid #ffffff;
            outline: orange;
        }
        .profile-card__description{
            text-align:center;
            color: gray;
        }
        .profile-card__name{
            text-align:center;
            color: #000000;

        }
        .profile-card__position{
            text-align:center;
            font-weight:bold;
        }
        .profile-card__content{
            /* position: absolute; */
        }
        .profile-card__logo{
            /* padding-top:5rem; */
        }


    </style>
</head>
<body>
    <div class="profile-main">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <a href="#" class="profile-card col-md-6 col-sm-6 pb-5">
                    <div class="profile-card__logo d-flex justify-content-center px-0 mb-4 ">
                        <img src="img/person_1.jpg" alt="" class="profile-card__logo-fix">
                    </div>
                    <div class="profile-card__content px-0">
                        <h3 class="profile-card__name mb-0" style="font-family: 'Samarkan', sans-serif;">Prasun <span class="">Kundu</span></h3>
                        <p class="profile-card__description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae. Ultricies aliquet fringilla tortor sed consectetur maecenas. Vestibulum ridiculus egestas et sapien nec vitae mollis. Vitae elementum lacinia in non pretium in. Quam."</p>
                        <!-- <a href="#" class="btn btn-primary">Know More</a> -->
                        <div class="d-flex justify-content-center">
                            <button class=" btn btn-orange">Know More</button>
                        </div>
                    </div>
                </a>
                <a href="#" class="profile-card col-md-6 col-sm-6 pb-5">
                    <div class="profile-card__logo d-flex justify-content-center px-0 mb-4">
                        <img src="img/person_1.jpg" alt="" class="profile-card__logo-fix">
                    </div>
                    <div class="profile-card__content px-0">
                        <h3 class="profile-card__name mb-0" style="font-family: 'Samarkan', sans-serif;">Sandhya <span class="">Kundu</span></h3>
                        <p class="profile-card__description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur consequat, amet dictumst faucibus at tristique vitae. Ultricies aliquet fringilla tortor sed consectetur maecenas. Vestibulum ridiculus egestas et sapien nec vitae mollis. Vitae elementum lacinia in non pretium in. Quam."</p>
                        <!-- <a href="#" class="btn btn-primary">Know More</a> -->
                        <div class="d-flex justify-content-center">
                            <button class=" btn btn-orange">Know More</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
