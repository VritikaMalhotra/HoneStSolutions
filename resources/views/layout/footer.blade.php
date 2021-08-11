<style>
    .footer__logo-fix{
        width: 250px;
        height: 110px;
    }
    /* @media screen and (max-width: 768px) {
        .footer__logo-fix{
            width: 100%;
        }
    } */
    .footer__wrap{
        align-self: center;
    }
    @media screen and (max-width: 767px) {
        .footer__wrap{
            margin: 15px 0px;
        }
    }
    @media screen and (max-width: 768px) {
        .footer__wrapper{
            justify-content: center;
            text-align: center;
        }
    }
    @media screen and (min-width: 1024px) {
    .footer__wrapper{
            text-align: right;
        }
    }
</style>
<footer class="footer">
    <div class="footer-bottom">
        <div class="footer-bottom__main px-4 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer__wrap">
                        <div class="footer__social-icon d-flex align-items-center footer__wrapper">
                            <div class="pr-3">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </div>
                            <div class="pr-3">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <div class="pr-3">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer__wrap">
                        <div class="footer__logo d-flex justify-content-center footer__wrapper">
                            <img src="img/Hone-ST-Logo.png" alt="" class="footer__logo-fix">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer__wrap">
                        <div class="footer__wrapper footer__wrapper_right">Contact Number:
                            <a href="tel:0912-1234567" class="">0912-1234567</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
