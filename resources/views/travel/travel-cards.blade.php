<html>
    <head>
    <style>
        .travel-card__image-fix{
            width:100%;
        }
        .travel-card__content{
            border:1px solid black;
        }
        .travel-card__offer{
            font-size:0.5rem;
        }
        .travel-card__price{
            color: green;
            font-weight:bold;
        }
        .travel-card__plan{
        }
        .travel-card__days{
            color:gray;
        }
        .travel-card__range{
            width:100%;
        }



    </style>
    </head>
    <body>
        <div class="page-travel-card py-5">
            <div class="container">
                <div class="travel-cards row m-0">
                    <div class="travel-card col-md-12 mb-4">
                    <a href="#">
                        <div class="travel-card__image">
                            <img src="img/prasun_sir_profile2.png" alt="" class="travel-card__image-fix">
                        </div>
                        <div class="travel-card__content px-4 py-4">
                            {{-- <input type="range" class="travel-card__range form-range" id="disabledRange" disabled value='99'> --}}
                            {{-- <h6 class="travel-card__offer mb-2">FEES</h6>
                            <h6 class="travel-card__price">RS 50</h6> --}}
                            <h5 class="travel-card__plan mb-2">Prasun Kundu</h5>
                            <div class="d-flex align-items-center">
                                {{-- <i class="fa fa-calendar" style="color:gray"></i> --}}
                                <p class="travel-card__days pl-2 mb-0">Experience of over 27 years with Nestle India Ltd., Reliance Retail, Idea Cellular, McCormick in the corporate world of which more than 20 years in leadership position...</p>
                            </div>
                            <a href="/contact" class="btn btn-orange mt-2">Read more</a>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
