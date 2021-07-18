<html>
    <head>
        <style>
            /* .carousel-content {
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
            } */
            .carousel__title{
                font-weight:bold;
                color:#FDBE34;
                text-align:center;
            }
            .carousel__subtitle{
                text-align:center;
            }
            .carousel__profile{
                border-radius: 50%;
                width:15%;
            }
            .carousel{
                background-color:black;
                
            }
            .carousel-inner{
                padding:10rem 20rem;
            }
            @media screen and (max-width: 1440px) {
                .carousel-inner{
                padding:10rem 10rem;
                }
            }
            @media screen and (max-width: 778px) {
                .carousel-inner{
                padding:5rem 4rem;
                }
            }
            .carousel-indicators li {
                width: 8px;
                height: 8px;
                margin-left: 5px;
                margin-right: 5px;
                background-color: #FDBE34;
                border-radius: 50%;
            }
            
        </style>
    </head>
    <body>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="img/person_1.jpg" alt="" class="carousel__profile">
                    </div>
                <div class="carousel-content">
                    <h4 class="carousel__title mb-0">Ms. Lorem R. lpsum</h4>
                    <p class="carousel__subtitle mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis, accusantium hic, beatae ullam dignissimos facere officiis magnam saepe error fugit magni eligendi sed laudantium quia aliquid explicabo vero quisquam.</p>
                </div>   
                </div>
                <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="img/person_1.jpg" alt="" class="carousel__profile">
                </div>
                <div class="carousel-content">
                    <h4 class="carousel__title mb-0">Ms. Lorem R. lpsum</h4>
                    <p class="carousel__subtitle mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis, accusantium hic, beatae ullam dignissimos facere officiis magnam saepe error fugit magni eligendi sed laudantium quia aliquid explicabo vero quisquam.</p>
                </div>   
                </div>
                <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="img/person_1.jpg" alt="" class="carousel__profile">
                </div>
                <div class="carousel-content">
                    <h4 class="carousel__title mb-0">Ms. Lorem R. lpsum</h4>
                    <p class="carousel__subtitle mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis, accusantium hic, beatae ullam dignissimos facere officiis magnam saepe error fugit magni eligendi sed laudantium quia aliquid explicabo vero quisquam.</p>
                </div>   
                </div>
                <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="img/person_1.jpg" alt="" class="carousel__profile">
                </div>
                <div class="carousel-content">
                    <h4 class="carousel__title mb-0">Ms. Lorem R. lpsum</h4>
                    <p class="carousel__subtitle mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis, accusantium hic, beatae ullam dignissimos facere officiis magnam saepe error fugit magni eligendi sed laudantium quia aliquid explicabo vero quisquam.</p>
                </div>   
                </div>
                <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="img/person_1.jpg" alt="" class="carousel__profile">
                </div>
                <div class="carousel-content">
                    <h4 class="carousel__title mb-0">Ms. Lorem R. lpsum</h4>
                    <p class="carousel__subtitle mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis, accusantium hic, beatae ullam dignissimos facere officiis magnam saepe error fugit magni eligendi sed laudantium quia aliquid explicabo vero quisquam.</p>
                </div>   
                </div>
                
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </body>
</html>