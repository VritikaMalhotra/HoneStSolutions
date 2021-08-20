<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .accordion-image__wrap {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 80vh;
        }

        .accordion-image__item {
        flex: 1;
        height: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: none;
        transition: flex 1s ease;
        cursor: pointer;

        }
        .accordion-image__item:hover{
            flex: 8;
        }

        .accordion-image__item-1 {
        background-image: url(img/Picture5.png);
        }

        .accordion-image__item-2 {
        background-image: url(img/Picture2.png);
        }

        .accordion-image__item-3 {
        background-image: url(img/Picture4.png);
        }

        .accordion-image__item-4 {
        background-image: url(img/Picture7.png);
        }

        .accordion-image__item-5 {
        background-image: url(img/Picture6.png);
        }

        .accordion-image__item-6 {
        background-image: url(img/collage.png);
        }

        .accordion-image__item-7 {
        background-image: url(img/Picture3.png);
        }

        .accordion-image__item-8 {
        background-image: url(img/group8.png);
        }

    </style>
</head>
<body>
    <div class="accordion-image py-5">
        <div class="container">
            <div class="accordion-image__wrap">
              <div class="accordion-image__item accordion-image__item-1"></div>
              <div class="accordion-image__item accordion-image__item-2"></div>
              <div class="accordion-image__item accordion-image__item-3"></div>
              <div class="accordion-image__item accordion-image__item-4"></div>
              <div class="accordion-image__item accordion-image__item-5"></div>
              <div class="accordion-image__item accordion-image__item-6"></div>
              <div class="accordion-image__item accordion-image__item-7"></div>
              <div class="accordion-image__item accordion-image__item-8"></div>
            </div>
        </div>
    </div>
</body>
</html>
