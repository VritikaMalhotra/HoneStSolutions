<html>
    <head>
    <style>
        .auther{
            background-color:lightblue;
        }
        .auther__title{
            font-family: 'Samarkan', sans-serif;
            text-align:center;
            color:black;
            font-weight:bold;
        }
        .auther__subtitle{
            text-align:center;
            color:gray;
        }
        .auther__profile{
            width:100%;
        }       
        .auther__name{
            font-weight:bold;
        }
        .auther__link{
            position: absolute;
            right: 0px; 
        }
        .auther__link-icon{
            border:1px solid gray;
            color:gray;    
        }
        .auther__link-icon:hover{
            color:gray;
        }
    </style>
    </head>
    <body>
        <div class="auther py-5">
            <div class="container">
                <h1 class="auther__title col-12 mb-0">Author's words</h1>
                <p class="auther__subtitle col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                <div class="auther__cards justify-content-center row m-0">
                    <div class="auther__card col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-5">
                        <p class="auther__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur, nesciunt aut nulla blanditiis, eum non adipisci error consectetur, maxime quas possimus quis magni distinctio eius magnam tenetur quia dignissimos.</p>
                        <p class="auther__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur, nesciunt aut nulla blanditiis, eum non adipisci error consectetur, maxime quas possimus quis magni distinctio eius magnam tenetur quia dignissimos.</p>
                        <p class="auther__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur, nesciunt aut nulla blanditiis, eum non adipisci error consectetur, maxime quas possimus quis magni distinctio eius magnam tenetur quia dignissimos.</p>
                    </div>

                    <div class="auther__card col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-5">
                        <p class="auther__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur, nesciunt aut nulla blanditiis, eum non adipisci error consectetur, maxime quas possimus quis magni distinctio eius magnam tenetur quia dignissimos.</p>
                        <p class="auther__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur, nesciunt aut nulla blanditiis, eum non adipisci error consectetur, maxime quas possimus quis magni distinctio eius magnam tenetur quia dignissimos.</p>
                    </div>

                    <div class="auther__card col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-5">
                        <div class="auther__image d-flex justify-content-center px-0 mb-4">
                            <img src="img/person_1.jpg" alt="" class="auther__profile">
                        </div>
                        <h6 class="auther__name mb-1">Prasun Kundu</h6>
                        <h6 class="auther__publish">Published Author</h6>
                        {{-- <div class="d-flex align-items-center my-3">
                            <p class="mb-0">Download Resumne as PDF</p>
                            <a href="#" class="auther__link"><i class="fa fa-download p-2 m-2 auther__link-icon"></i></a>
                        </div>
                        <div class="d-flex align-items-center my-3">
                            <p class="mb-0">Print Resumne</p>
                            <a href="#" class="auther__link"><i class="fa fa-print p-2 m-2 auther__link-icon"></i></a>
                        </div> --}}
                    </div>
                </div>                
            </div>
        </div>
    </body>
</html>
