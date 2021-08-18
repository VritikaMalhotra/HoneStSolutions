<html>
    <head>
    <style>
        .page-book-review-que{
            background-image: url(img/background-ship.png),url(img/bacground-om.png);
            background-repeat: no-repeat;
            background-position: top left,bottom right;
            background-size: 200px,150px;
        }
       .book-review-que__title{
            font-weight:bold;
       }
       .book-review-que__subtitle{

       }
       .accordion {
        background-color: #fff;
        color: #0e185a;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border:none;
        border-bottom: 1px solid lightgray;
        text-align: left;
        outline: none;
        font-size: 15px;
        font-weight:bold;
        transition: 0.4s;
        }

        /* .active, .accordion:hover {
            background-color: #fff;
        } */

        .accordion:after {
        content: '\25BC';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
        /* transform: rotate(268deg);
        -webkit-transform: rotate(268deg); */
        }
        .accordion.active:after {
        content: "\25B2";
        }

        .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        }
    </style>
    </head>
    <body>
        <div class="page-book-review-que py-5">
            <div class="container">
                <div class="row m-0">
                    {{-- <div class="book-review-que__wrapper col-sm-6">
                        <h2 class="book-review-que__title">Book Reviews</h2>
                        <p class="book-review-que__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                        <p class="book-review-que__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                    </div> --}}
                    <div class="book-review-que__wrapper col-sm-12">
                        <h2 class="book-review-que__title">Frequently Asked Question</h2>
                        <p class="book-review-que__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">How does Asana's pricing work?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
        }
        </script>
    </body>
</html>
