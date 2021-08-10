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
        background-image: url('https://images.unsplash.com/photo-1499198116522-4a6235013d63?auto=format&fit=crop&w=1233&q=80');
        }

        .accordion-image__item-2 {
        background-image: url('https://images.unsplash.com/photo-1492760864391-753aaae87234?auto=format&fit=crop&w=1336&q=80');
        }

        .accordion-image__item-3 {
        background-image: url('https://images.unsplash.com/photo-1503631285924-e1544dce8b28?auto=format&fit=crop&w=1234&q=80');
        }

        .accordion-image__item-4 {
        background-image: url('https://images.unsplash.com/photo-1510425463958-dcced28da480?auto=format&fit=crop&w=1352&q=80');
        }

        .accordion-image__item-5 {
        background-image: url('https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=1234&q=80');
        }

        .accordion-image__item-6 {
        background-image: url('https://images.unsplash.com/photo-1499198116522-4a6235013d63?auto=format&fit=crop&w=1233&q=80');
        }

        .accordion-image__item-7 {
        background-image: url('https://images.unsplash.com/photo-1492760864391-753aaae87234?auto=format&fit=crop&w=1336&q=80');
        }

        .accordion-image__item-8 {
        background-image: url('https://images.unsplash.com/photo-1503631285924-e1544dce8b28?auto=format&fit=crop&w=1234&q=80');
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
