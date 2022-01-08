<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Plotratio</title>
  <meta content="information,property,land,detail,list,units,size,condos,laravel,lease,area,tenure" name="keywords">
  <meta name="description" content="plotratio.co Written by Reema Patel,Designed by Reema patel,Profession web developer,
  responsive,mobile view, About information of land , property">

  <!-- Favicons -->
  <link href="{{url('/public')}}/assets/img/icon.jpeg" rel="icon">
  <link href="{{url('/public')}}/assets/img/icon.jpeg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
  <link href="{{url('/public')}}/assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="{{url('/public')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('/public')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('/public')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('/public')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('/public')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('/public')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .header{
      box-shadow: 0px 0px 35px 20px rgb(0 0 0 / 29%);
    }
    body .marginRowClass > .btn-group {
      /* transition: all 2s, box-shadow .1s; */
      /* background-image: linear-gradient(to bottom, #F9DC5C 0%, #F9DC5C 100%); */
      box-shadow: 0px 10px 10px rgb(0 0 0 / 20%), 0px 0px 0px 0px rgb(0 0 0 / 4%);
      border: 2px solid #465362!important;
    }

    body .marginRowClass > .btn-group:hover *{
        background-color:#F9DC5C!important;
    }

    .reportListButton{
      width:100%!important;
      height: 100%!important;
      border-left: 1px solid #465362;
      padding: 0px 9px!important;
      background-color: #FFFFFF;
      color: #000000;
      font-size: 12px!important;
      text-align: left!important;
      border: 0px;
      display: block;
      align-self: center;
    }
    /* .marginRowClass{
      margin-bottom:1%!important;
      margin-top:1%!important;
      margin-right:1%!important;
      margin-left:1%!important;
    } */

    .marginRowClass > .btn-group{
      border-radius: 5px;
      border: 2px solid #465362;
      padding:0px;
    }


    .reportListButton:hover + .marginRowClass .btn-group{
      background-color: #F9DC5C!important;
    }

    .reportListButton:hover{
      background-color: #F9DC5C!important;
      color: #011936;
      font-weight: bold;
    }

    .row> .about{
      padding: 85px 0!important;
    }

    .header,.navbar a,.header.header-scrolled{
      background-color: #041b34;
      color:#FFFFFF!important;
    }
    [data-aos][data-aos][data-aos-duration="1000"], body[data-aos-duration="1000"] [data-aos]  {
        transition-duration: 500ms!important;
      }

      @media (max-width: 576px) {
        .reportListButton {
          /* height: 3.5rem!important; */
        }
        .btn-group >span img{
          width: 55%!important;
          height: 75%!important;
        }
        .mySpanPaddingClass {
          padding: 0% 1%!important;
        }
        #mySpanPaddingClass,#mySpanPaddingClass1,#mySpanPaddingClass2,#mySpanPaddingClass3,#mySpanPaddingClass4,#mySpanPaddingClass5{
          margin:2%!important;
          padding: 2%;
        }
        .container{
          padding-right: var(--bs-gutter-x,.75rem)!important;
          padding-left: var(--bs-gutter-x,.75rem)!important;
        }
        .textFooter,.textFooter:hover{
          float: none!important;
        }
        .row > *{
          padding:0%;
          margin:0%;
          /* display: block!important; */
        }
        .container > .row{
          margin:0%!important;
        }

      }
      @media (max-width: 770px) {
        .reportListButton {
          height: 7.7rem;
          padding: 0px 5px;
        }
        .btn-group >span img{
          width: 100%;
          height: 100%;
        }
        .mySpanPaddingClass{
          padding: 0% 0%;
          /* background-color: #FFFFFF; */
        }
        .mySpanPaddingClass > img{
          /* margin-top: 13px; */
        }
        .container{
          padding-right: 0px;
          padding-left: 0px;
        }

        .container > .row{
          margin-bottom: 4%;
        }
      }
      @media (min-width: 771px) {
        .reportListButton {
          height: 4.4rem;
          padding: 0px 9px;
        }
        .btn-group >span img{
          width: 80%;
          height: 100%;
        }
        .mySpanPaddingClass{
          padding: 2% 0%!important;
          /* background-color: #FFFFFF; */
        }
      }

      /* .marginRowClass > .btn img {
        display: inline-block;
        vertical-align: middle;
        background: #f00;
        padding: 5px;
        border-radius: 5px;

    }
    .marginRowClass > .btn {
        border: 1px solid black!important;
    } */
    .mySpanPaddingClass{
      padding: 0% 0%;
      /* background-color: #FFFFFF; */
      align-self: center;
      display: flex;
    }

    .btn-group{
      display: flex!important;
    }

    .row > *{
      display: grid;
    }

    .container > .row {
      margin-top: 2%;
      margin-bottom: 3%;
    }
    #mySpanPaddingClass,#mySpanPaddingClass1,#mySpanPaddingClass2,#mySpanPaddingClass3,#mySpanPaddingClass4,#mySpanPaddingClass5{
      border: 1.5px solid black;
      border-radius: 3px;
    }
    .textFooterColor{
      color:#465362!important;
      text-align: center!important;
      padding-left: 13%;
    }
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
      padding: 0 0 0px 0!important;
    }

    .textFooter,.textFooter:hover{
      font-size:12px;
      color:lightgrey;
      float: right;
    }

    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center" target="_blank">
        <img src="{{url('/public')}}/assets/img/plotratio_logo.gif" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('/') }}">Reports</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">RED Paper</a></li>
          <li><a class="nav-link scrollto" href="#team">ReFX</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Portfolio Section ======= -->

    <div class="container">
    <div class="row">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" >
          <div class="row col-sm-12 col-md-12 col-lg-12">
           <!-- <div class="col-sm-1 col-md-1 col-lg-1"></div> -->
             <div class="col-sm-4 col-md-4 col-lg-4  ">
               <div id="mySpanPaddingClass" class="marginRowClass btn-group">
                 <span class="mySpanPaddingClass" >
                   <img src="{{url('/public')}}/assets/img/icons/common_icon.png" alt="Avatar" class="image"/>
                 </span>
                 <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-4") }}'" onmouseover="chbg('mySpanPaddingClass','#F9DC5C')" onmouseout="chbg('mySpanPaddingClass','#FFFFFF')">
                   <span>Top 10 Latest Private Properties</span>
                 </button>
               </div>
             </div>
             <div class="col-sm-4 col-md-4 col-lg-4  ">
               <div id="mySpanPaddingClass1" class="marginRowClass btn-group">
                 <span class="mySpanPaddingClass" >
                   <img src="{{url('/public')}}/assets/img/icons/common_icon.png" alt="Avatar" class="image"/>
                 </span>
                 <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-5") }}'" onmouseover="chbg('mySpanPaddingClass1','#F9DC5C')" onmouseout="chbg('mySpanPaddingClass1','#FFFFFF')">
                   <span>Top 10 Oldest Private Properties</span>
                 </button>
               </div>
             </div>
             <div class="col-sm-4 col-md-4 col-lg-4  ">
               <div id="mySpanPaddingClass2" class="marginRowClass btn-group">
                 <span class="mySpanPaddingClass" >
                   <img src="{{url('/public')}}/assets/img/icons/common_icon.png" alt="Avatar" class="image"/>
                 </span>
                  <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-1") }}'" onmouseover="chbg('mySpanPaddingClass2','#F9DC5C')" onmouseout="chbg('mySpanPaddingClass2','#FFFFFF')">
                    <span>Top 10 Massive Private Properties By Number Of Units</span>
                  </button>
                </div>
              </div>
            <!-- <div class="col-sm-1 col-md-1 col-lg-1"></div> -->
          </div>
          <div class="row col-sm-12 col-md-12 col-lg-12">
            <!-- <div class="col-sm-1 col-md-1 col-lg-1"></div> -->
            <div class="col-sm-4 col-md-4 col-lg-4  ">
              <div id="mySpanPaddingClass3" class="btn-group">
                <span class="mySpanPaddingClass" >
                  <img src="{{url('/public')}}/assets/img/icons/common_icon.png" alt="Avatar" class="image"/>
                </span>
                <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-6") }}'" onmouseover="chbg('mySpanPaddingClass3','#F9DC5C')" onmouseout="chbg('mySpanPaddingClass3','#FFFFFF')">
                  <span>Top 10 Smallest Private Properties By Number Of Units</span>
                </button>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4  ">
              <div id="mySpanPaddingClass4" class="btn-group">
                <span class="mySpanPaddingClass" >
                  <img src="{{url('/public')}}/assets/img/icons/common_icon.png" alt="Avatar" class="image"/>
                </span>
                <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-3") }}'" onmouseover="chbg('mySpanPaddingClass4','#F9DC5C')" onmouseout="chbg('mySpanPaddingClass4','#FFFFFF')">
                  <span>Top 10 Massive Private Properties By Land Size</span>
                </button>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4  ">
              <div id="mySpanPaddingClass5" class="btn-group">
                <span class="mySpanPaddingClass" >
                  <img src="{{url('/public')}}/assets/img/icons/common_icon.png" alt="Avatar" class="image"/>
                </span>
                <button type="button" class="reportListButton" onclick="window.location='{{ url("report-list/button-2") }}'" onmouseover="chbg('mySpanPaddingClass5','#F9DC5C')" onmouseout="chbg('mySpanPaddingClass5','#FFFFFF')">
                  <span>Top 10 Smallest Private properties By Land Size</span>
                </button>
              </div>
            </div>
            <!-- <div class="col-sm-1 col-md-1 col-lg-1"></div> -->
          </div>
      </section><!-- End About Section -->

  </div>

</div>
<!-- /.container -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class=" container col-12">
      <div class="copyright">
        <span class="textFooterColor">&copy; 2008 to {{date("Y")}} <strong><span>Plotratio.co</span></strong></span>
        <span class="textFooter">
          <a class="textFooter" href="https://icons8.com/" target="_blank">
                 <u>Icons8 LLC</u>
          </a>
        </span>
      </div>

      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <!-- Vendor JS Files -->
    <script src="{{url('/public')}}/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{url('/public')}}/assets/vendor/aos/aos.js"></script>
    <script src="{{url('/public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/public')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{url('/public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{url('/public')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{url('/public')}}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{url('/public')}}/assets/js/main.js"></script>
    <script type="text/javascript">
    function chbg(id,color) {
      document.getElementById(id).style.backgroundColor = color;
    }
    </script>
</body>
</html>
