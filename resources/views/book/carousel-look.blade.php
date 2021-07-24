<html>
    <head>
    <style>
        .carousel-look__title{
          text-align:center;
          font-weight:bold;
        }
        .carousel-look__subtitle{
          text-align:center;
        }
        .carousel-look__carousel-inner{
          padding: 10rem 20rem;
          /* background-color:black; */
        }
        @media screen and (max-width: 1420px) {
          .carousel-look__carousel-inner{
          padding: 10rem 5rem;
          }
        }
        @media screen and (max-width: 778px) {
          .carousel-look__carousel-inner{
          padding: 10rem 1rem;
          }
        }
    </style>
    </head>
    <body>
      <div class="carousel-look">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-look__carousel-inner carousel-inner">
            <div class="carousel-item active">
              <h1 class="carousel-look__title">Look Inside</h1>
              <p class="carousel-look__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti distinctio, ipsum modi aliquam maiores perferendis ipsa iste quas accusantium atque? Ut consectetur quibusdam sit neque aliquam veniam voluptates perspiciatis earum?</p>
            </div>
            <div class="carousel-item">
              <h1 class="carousel-look__title">Look Inside</h1>
              <p class="carousel-look__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti distinctio, ipsum modi aliquam maiores perferendis ipsa iste quas accusantium atque? Ut consectetur quibusdam sit neque aliquam veniam voluptates perspiciatis earum?</p>
            </div>
            <div class="carousel-item">
              <h1 class="carousel-look__title">Look Inside</h1>
              <p class="carousel-look__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti distinctio, ipsum modi aliquam maiores perferendis ipsa iste quas accusantium atque? Ut consectetur quibusdam sit neque aliquam veniam voluptates perspiciatis earum?</p>  
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <a class="p-1" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="p-3" style="border:1px solid gray;border-bottom-left-radius: 20px;border-top-left-radius: 20px;"><i class="fa fa-arrow-left" style="color:gray;" aria-hidden="true"></i></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="p-1" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="p-3" style="border:1px solid gray;border-bottom-right-radius: 20px;border-top-right-radius: 20px;"><i class="fa fa-arrow-right" style="color:gray;" aria-hidden="true"></i></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>        
    </body>
</html>

