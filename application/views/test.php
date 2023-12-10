<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-gb">

    <head>

        <style type="text/css">

            h2{

                font-size:15px !important;

            }

            .pdg30 p{

                color:#fff;

            }

            .pdg30 h2{

                color:#92a5d9

            }
            .tweetdiv p{
                font-family: Tahoma !important;
                font-size: 13px !important;
                line-height: 25px !important;
                text-align: justify !important;

            }


            .review-btn{

                position: fixed;



                top: 267px;

                height: 288px;

                z-index: 10001;

                transition: all .2s ease-in .0s;

                -moz-transition: all .2s ease-in .0s;

                -webkit-transition: all .2s ease-in .0s;

                -ms-transition: all .2s ease-in .0s;

                -o-transition: all .2s ease-in .0s;



            }


            #deed-donate-slide.slider.reveal {
                margin-left: 0;
            }

            #deed-donate-slide.slider {
                width: 250px;
                margin: 0 auto 0 -280px;
                position: fixed;
                left: 0;
                bottom: 15px;
                z-index: 1000;
                display: table;
                -moz-box-shadow: 1px 2px 6px rgba(0,0,0,.3);
                -webkit-box-shadow: 1px 2px 6px rgba(0,0,0,.3);
                box-shadow: 1px 2px 6px rgba(0,0,0,.3);
                -webkit-transition: margin .3s ease-in-out;
                -moz-transition: margin .3s ease-in-out;
                -o-transition: margin .3s ease-in-out;
                -ms-transition: margin .3s ease-in-out;
                transition: margin .3s ease-in-out;
            }


            #deed-donate-slide {
                width: 90%;
                margin: 0 auto;
                line-height: 17px;
                text-align: center;
                color: #fff;
            }
            user agent stylesheetdiv {
                display: block;
            }
            .slide-trigger {
                display: block;
                background-color: #dc642f;
                padding: 15px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .slide-trigger button {
                background: rgba(70,34,18,.3);
                display: inline-block;
                padding: .5em 1em;
                border: 0;
                -webkit-border-radius: 5px 5px 5px 5px;
                border-radius: 5px 5px 5px 5px;
                -webkit-box-shadow: inset 2px 2px 6px 0 rgba(0,0,0,.2);
                box-shadow: inset 2px 2px 6px 0 rgba(0,0,0,.2);
                color: #fff;
                font-size: 10px;

                text-decoration: none;
                cursor: pointer;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }
            .slide-close {
                background: url('../images/slide-close.png') no-repeat center center;
                width: 16px;
                height: 17px;
                display: block;
                cursor: pointer;
                position: absolute;
                right: 5px;
                top: 5px;
                opacity: .6;
                text-indent: -99999px;
                z-index: 999;
            }
        </style>
        <style>
            #mask {
                position: fixed;
                left: 0;
                top: 0;
                z-index: 1000;
                background-color: #000;
                display: none;
                right: 0;
                bottom: 0;
            }
            .popbox {
                position: fixed;
                left: 0;
                top: 0;
                width: 440px;
                z-index: 1001;
                padding: 10px;

            }

            .popbox .close {
                position: absolute;
                right: 10px;
                top: 10px;
                float: none;
                opacity: 1;
            }
            .popinside {
                background: #FFFFFF;
                text-align: center;

            }


            .subsc_popfirst {
                overflow: hidden;
                height: 40px;
            }


            .sucess_msgg, .error_msgg {
                overflow: hidden;
                font-size: 13px;
            }

        </style>

        <style>
            .hovereffect {
                width: 81%;
                height: 100%;
                float: left;
                overflow: hidden;
                position: relative;
                text-align: center;
                cursor: default;
                margin-top: 15px;
            }

            .hovereffect .overlay {
                width: 100%;
                height: 100%;
                position: absolute;
                overflow: hidden;
                top: 0;
                left: 0;
                background-color: rgba(0,0,0,0.6);
                opacity: 0;
                filter: alpha(opacity=0);
                -webkit-transform: translate(460px, -100px) rotate(180deg);
                -ms-transform: translate(460px, -100px) rotate(180deg);
                transform: translate(460px, -100px) rotate(180deg);
                -webkit-transition: all 0.2s 0.4s ease-in-out;
                transition: all 0.2s 0.4s ease-in-out;
            }

            .hovereffect img {
                display: block;
                position: relative;
                -webkit-transition: all 0.2s ease-in;
                transition: all 0.2s ease-in;
            }

            .hovereffect h2 {
                text-transform: uppercase;
                color: #fff;
                text-align: center;
                position: relative;
                font-size: 17px;
                padding: 10px;
                background: rgba(0, 0, 0, 0.6);
            }

            .hovereffect a.info {
                display: inline-block;
                text-decoration: none;
                padding: 7px 14px;
                text-transform: uppercase;
                color: #fff;
                border: 1px solid #fff;
                margin: 215px 34px 0 0;
                background-color: transparent;
                -webkit-transform: translateY(-200px);
                -ms-transform: translateY(-200px);
                transform: translateY(-200px);
                -webkit-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
            }

            .hovereffect a.info:hover {
                box-shadow: 0 0 5px #fff;
            }

            .hovereffect:hover .overlay {
                opacity: 1;
                filter: alpha(opacity=100);
                -webkit-transition-delay: 0s;
                transition-delay: 0s;
                -webkit-transform: translate(0px, 0px);
                -ms-transform: translate(0px, 0px);
                transform: translate(0px, 0px);
            }

            .hovereffect:hover h2 {
                -webkit-transform: translateY(0px);
                -ms-transform: translateY(0px);
                transform: translateY(0px);
                -webkit-transition-delay: 0.5s;
                transition-delay: 0.5s;
            }

            .hovereffect:hover a.info {
                -webkit-transform: translateY(0px);
                -ms-transform: translateY(0px);
                transform: translateY(0px);
                -webkit-transition-delay: 0.3s;
                transition-delay: 0.3s;
            }

        </style>	

        <!-- section scroll start-->
        <style>

            #arrow {
                position: fixed;
                right: 0;
                top: 500px;
                z-index: 900000000;
                background-color: #8E0F1A !important;
                color: #ffffff !important;
            }
            #arrow a{
                display:inline-block;
                padding:10px 20px;
                cursor:pointer;
                color: #ffffff !important;
            }
        </style>

        <!-- section scroll end-->
        <style>
            .law-point-section{
                padding-top:75px;
            }
            .law-point-text{
                position: relative;

            }
            .icon-front i{
                font-size: 60px;
                padding-bottom: 20px;
                color: #8E0F1A !important;
            }
            .point-text-bg {
                background: url(../images/law-point-bg.png) no-repeat;
                background-size: cover;
                position: absolute;
                top: 0;
                right: 30px;
                width: 73%;
                height: 100%;
                z-index: -1;
            }
            .law-point-text{
                background: url(../images/law-point-bg2.png) no-repeat;
                background-size: cover;
                background-position: center;
                width: 100%;
                height: 100%;
            }
            .law-point-text {
                padding: 100px 40px 60px;
            }
            .law-point-text h2{
                font-size: 24px;
                color: #222222;
                font-weight: 400;
            }
            .law-point-text span {
                font-style: italic;
                font-weight: 700;
                font-size: 15px;
                color: #888888;
                margin-bottom: 10px;
                display: inline-block;
            }
            .read-btn{
                display: inline-block;
                background: #383949;
                padding: 13px 20px;
                font-size: 15px;
                color: #a49878;
                margin-top: 25px;
                font-family: 'Hind', sans-serif;
            }

            .lawpoint-iconbox{
                height: 320px;
                position: relative;
                overflow: hidden;
                margin-bottom: 30px;
            }
            .icon-detail {
                text-align: center;
                width: 100%;
                height: 100%;
                display: table;
                border: 1px solid #f7f7f7;
            }
            .caption-text{
                position: absolute;
                left: 50%;
                top: 50%;
                width: 100%;
                text-align: center;
                transform: translate(-50%, -50%);
                opacity: 0;
                transition: all 0.3s ease-in-out 0s;
            }
            .caption-text h3{
                color: #222222;
                font-size: 18px;
            }
            .caption-text a{
                text-decoration:none !important;
            }
            .caption-text i{
                color: #8E0F1A !important;
            }

            .lawpoint-iconbox:hover .caption-text{
                left: 50%;
                top: 50%;
                opacity: 1;
            }
            .fade-inleft{
                left: 20%;
            }
            .caption-text i {
                padding: 10px 20px;
                color: #a49878;
            }
            .caption-text p{

                line-height: 18px !important; 
                text-align: center !important; 
            }
            .icon-overlay{
                background: #f7f7f7;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                transition: all 0.3s ease-in-out 0s;
            }
            .lawpoint-iconbox:hover .icon-overlay{
                opacity: 1;
            }
            .icon-front{
                display: table-cell;
                vertical-align: middle;
                opacity: 1;
                transition: all .3s ease 0s;

            }
            .lawpoint-iconbox:hover .icon-front{
                opacity: 0;
            }
            .icon-front img {
                margin-bottom: 20px;
            }
            .icon-front h3 {
                font-size: 18px;
                color: #a49878;
                margin: 0;
            }

        </style>

        <style>
            .readMoreFade a {
                background: #8E0F1A !important;
                color: #fff !important;
                box-shadow: 1px 1px 1px 1px #8E0F1A !important;
                font-size: 12px;
                padding: 5px 20px;
                border-radius: 20px;
                border-color: #8E0F1A;
            }

            .btn-readmore {
                background: #8E0F1A !important;   
                color: #fff !important;
                box-shadow: 1px 1px 1px 1px #8E0F1A !important;
                font-size: 12px;
                border-radius: 20px;
                border-color: #8E0F1A;

            }
        </style>


        <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>

        <link rel="stylesheet" href="bootstrap-theme.min.css"  type="text/css"/>

        <link rel="stylesheet" href="corner-slide.css"  type="text/css"/>

        <script src="jquery.js" type="text/javascript"></script>

        <script src="bootstrap.min.js" type="text/javascript"></script>

        <script src="jquery.nicescroll.min.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="style1.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />


        <!--home page Slider css/js start-->
        <link href="camera.css" rel="stylesheet" type="text/css"/>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="easing.min.js" type="text/javascript"></script>
        <script src="camera.min.js" type="text/javascript"></script>
        <script src="plugins.js"></script>

        <!--home page Slider css/js end-->


        <script type="text/javascript">

            $(document).ready(function () {

                $("#home-leftmenu1").niceScroll({

                    cursorcolor: "#ddd",

                    cursorwidth: "10px",

                    cursorborder: "1px solid #ddd",

                    touchbehavior: true,

                    cursorborderradius: "1px",

                });



                $(".sliderouterful").niceScroll({

                    cursorcolor: "#324168",

                    cursorwidth: "10px",

                    cursorborder: "1px solid #324168",

                    autohidemode: false,

                    cursorborderradius: "1px",

                });



                $('.reviewyesbtn').click(function () {

                    // alert('ad');

                    $('#reviewbox').css('display', 'none');

                    $('#review_collectbox').css('display', 'block');



                });





            });



            function save_values()

            {





                $('#review_collectbox input[type=text]').each(function () {



                    var value = $(this).val();

                    //alert(value);

                    if (value == '')

                    {

                        $(this).addClass('error');

                        //var next=$(this).next('label').show();



                    } else {



                        $(this).removeClass('error');

                    }



                });



                var a = {};







                a['name'] = $("#name").val();

                a['email'] = $("#email").val();

                a['review'] = $("#review").val();

                a['star'] = $("#star").val();



                //alert(a['place']);

                $.ajax({

                    type: "POST",

                    url: "store_review.php",

                    data: a,

                    success: function (msg) {



                        //alert(msg);



                        if (msg == 'success')

                        {





                        } else

                        {



                            // alert('success');

                        }

                    }

                });


            }

        </script>


        <link rel="stylesheet" href="gcstyle.css" type="text/css"/>

        <link rel="stylesheet" href="gcresponsive.css" type="text/css"/>
        <script src="owl.carousel.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="owl.theme.css" type="text/css"/>
        <link rel="stylesheet" href="owl.carousel.css" type="text/css"/>
        <link href="lightbox.css" rel="stylesheet" type="text/css" />
        <script src="script.js"  type="text/javascript"></script>

        <style>

            /* uk visas mega menu*/



            .dropdown:hover .dropdown-content {
                display: block;
            }
            .dropdown-content {
                display: none;
                position: fixed;
                background-color: #000;
                width: 100%;
                left: 0;
                top: 38px;
                right: 0;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .subitems li {
                display: inline-block;
                justify-content: space-between; 
                width: 100%;
            }

            .subitems {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
            }

            .headerthirdmenu ul li {
                line-height: 30px;
                float: left;
                /* font-weight: 700; */
                position: static;

            }


            .dropdown-content ul.subitems li a {
                color: #fff;
                padding: 10px;
            }

            .dropdown-content ul.subitems li a:hover {
                background-color: #f23d3d;

            }

            #new-menu ul li .subitems{

                width: 1065px !important;

            }

            #new-menu ul li .subitems li{

                width: 375px !important;

            }

            @media only screen and (min-width: 1441px) and (max-width: 1680px) {
                #new-menu ul li .subitems{

                    width: 800px !important;

                }

                #new-menu ul li .subitems li{

                    width: 200px !important;

                }

            }

            @media only screen and (min-width: 1261px) and (max-width: 1440px) {
                #new-menu ul li .subitems{

                    width: 800px !important;

                }

                #new-menu ul li .subitems li{

                    width: 200px !important;

                }

            }

            @media only screen and (min-width: 1024px) and (max-width: 1260px) {
                #new-menu ul li .subitems{

                    width: 800px !important;

                }

                #new-menu ul li .subitems li{

                    width: 250px !important;

                }
                .dropdown-content{
                    position: absolute !important;
                    left: -270px !important;
                }

            }

            @media only screen and (min-width: 768px) and (max-width: 1023px) {
                #new-menu ul li .subitems{

                    width: 700px !important;

                }

                #new-menu ul li .subitems li{

                    width: 200px !important;

                }
                .dropdown-content{
                    position: absolute !important;
                    left: -415px !important;
                }

            }

        </style>

        <script>
    $(function () {

        $(window).bind("resize", function () {
            console.log($(this).width())
            if ($(this).width() < 768) {
                $('ul').removeClass('subitems')
            }

        })
    })
        </script>

    </head>

    <body>




        <div class="container-fluid " style="margin-bottom:10px !important">
            <div class="row">
                <div class="col-sm-12" style=" padding: 0px;">
                    <div id="new-menu">
                        <div class="responsivemenu">

                            <ul class="responsiveul">

                            </ul>
                        </div>

                        <div class="homemenu123">

                            <div class="icscenter">
                                <ul class="col-sm-12 mainmenu redmenu">

                                    <li><a href="<?= SERVERPATH ?>/index.php">Home</a>


                                    </li>
                                    <li><a href="<?= SERVERPATH ?>/about_us.php">About Us <i class="fa fa-caret-down"></i></a>


                                    </li>

                                    <li><a href="<?= SERVERPATH ?>/services.php">Services <i class="fa fa-caret-down"></i></a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="https://www.icslegal.com/uk-visas.php">UK Visas <i class="fa fa-caret-down"></i></a>
                                        <div class="dropdown-content">
                                            <ul class="subitems">

                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/uk-spouse-visa.php">Spouse
                                                        Visas and Civil Partner Visas</a></li>

                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/eea-family-permit-uk-family-visa.php">Family
                                                        Visas</a></li>
                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/work-permit.php">UK Work
                                                        Permits & Visas</a></li>
                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/visiting-the-uk.php">Visitors
                                                        Visas</a></li>
                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/tier1-investors.php">Tier 1
                                                        Investor Visa</a></li>
                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/tier1-entrepreneur.php">Tier
                                                        1 Entrepreneur Visa</a></li>
                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/tier1-hsmp.php">High-Value
                                                        Migrant Tier 1 Visas</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/tier-2-visa-tier-2-work-permit-skilled-worker.php">Skilled
                                                        Worker Tier 2 Visas</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/tier5-temporary-workers-in-uk.php">Temporary Worker
                                                        Tier 5 Visas</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/student-visa-tier-4-student-visa.php">Student & Tier
                                                        4 Visas</a></li>

                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/sponsorship-licence.php">Businesses
                                                        & Sponsors</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/sponsorship-licence-sponsors-rating.php">Sponsorship
                                                        Licences & Visa Sponsorship</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/uk-business-visitor-visa.php">Business Visitors
                                                        Visas</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/indefinite-leave-to-remain.php">Indefinite Leave to
                                                        Remain (ILR)</a></li>

                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/eea-family-permit-uk-family-visa.php">European
                                                        Nationals &amp; EEA Applications</a></li>
                                                <li style="width:100% !important;"><a href="https://www.icslegal.com/british-citizenship.php">British
                                                        Citizenship</a></li>
                                                <li style="width:100% !important;"><a
                                                        href="https://www.icslegal.com/british-nationality-naturalisation.php">British
                                                        Nationality</a></li>

                                            </ul>
                                        </div>



                                    </li>

                                    <li><a href="<?= SERVERPATH ?>/our_clients.php">Our Clients <i class="fa fa-caret-down"></i></a>


                                    </li>
                                    <li><a href="<?= SERVERPATH ?>/links.php">Regulatory Bodies</a>


                                    </li>
                                    <li><a href="https://icslegal.com/blog">Latest Legal</a></li>
                                    <li><a href="<?= SSL_SERVERPATH ?>contact_us.php">Contact Us</a>


                                    </li>





                                </ul>


                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>





    </body>
</html>
