<html>
    <head>
    <style>
        .buy-book__button{
            border:1px solid gray;
            border-radius:30px;
            color:black;
            padding:1rem;
        }
        .buy-book__image-fix{
            width:100%;
        }
        @media screen and (min-width: 768px) {
            .buy-book__image{
            position: absolute;
            bottom: 0px;
            }
        }
        @media screen and (max-width: 768px) {
            .buy-book__image{
                margin-top:10px;
            }
        }
      
    </style>
    </head>
    <body>
        <div class="buy-book py-5">
            <div class="container">
                <div class="row m-0">
                    <div class="col-md-6">
                        <p class="buy-book__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam magnam mollitia, nisi labore temporibus voluptate tenetur illum repellendus, cupiditate blanditiis provident vel dicta maiores ipsam alias facere? Dolores,Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam magnam mollitia, nisi labore temporibus voluptate tenetur illum repellendus, cupiditate blanditiis provident vel dicta maiores ipsam alias facere? Dolores.</p>
                        <p class="buy-book__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam magnam mollitia, nisi labore temporibus voluptate tenetur illum repellendus, cupiditate blanditiis provident vel dicta maiores ipsam alias facere? Dolores, ex?</p>
                        <div class="row">
                            <a href="#" class="buy-book__button mr-2 mt-2">BUY PAPERBACK <i class="fa fa-shopping-cart pl-2" aria-hidden="true"></i></a>
                            <a href="#" class="buy-book__button mr-2 mt-2">BUY E-BOOK <i class="fa fa-shopping-cart pl-2" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="buy-book__image">
                            <img src="img/bookbanner.jpg" alt="" class="buy-book__image-fix">
                        </div>
                    </div>
                
                </div>
            </div>
            
        </div>
    </body>
</html>
