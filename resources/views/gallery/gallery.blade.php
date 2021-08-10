<html>
    <head>
    <style>
        .page-gallery{
        background-image: url(img/background-ship.png),url(img/bacground-om.png);
        background-repeat: no-repeat;
        background-position: top left,bottom right;
        background-size: 200px,150px;
        }
        .gallery-card__image-fix{
            width:100%;
        }
        /* body {
  background-color:#1d1d1d !important;
  font-family: "Asap", sans-serif;
  color:#989898;
  margin:10px;
  font-size:16px;
} */


        .page-top{
            margin-top:85px;
        }


.gallery-card__image-fix {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}


.transition {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
    .modal-header {

     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;
    }



    </style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    </head>
    <body>

        <div class="page-gallery py-5">
            <div class="container">
                <div class="">
                    <div class="page-gallery__cards justify-content-center row m-0">
                        <a href="img/person_1.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_1.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_3.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_3.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_1.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_1.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_1.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_1.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>
                        <a href="img/person_4.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_4.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_3.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_3.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_4.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_4.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_1.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_1.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_3.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_4.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>

                        <a href="img/person_2.jpg" class="gallery-card col-lg-3 col-md-4 col-sm-6 pt-3" data-toggle="lightbox" data-gallery="gallery" rel="ligthbox">
                            {{-- <div class="gallery-card__image col-md-12 px-0"> --}}
                                <img src="img/person_2.jpg" alt="" class="gallery-card__image-fix img-fluid">
                            {{-- </div> --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".gallery-card").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });

                    $(".gallery-card__image-fix").hover(function(){

                        $(this).addClass('transition');
                    }, function(){

                        $(this).removeClass('transition');
                    });
                });

        </script>
    </body>
</html>
