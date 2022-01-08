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

  <link rel="stylesheet" href="https://jacoblett.github.io/bootstrap4-latest/bootstrap-4-latest.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="{{url('/public')}}/assets/css/google-font.css" rel="stylesheet">

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

    .report{
      overflow-x:auto;
    }
    .marginTable > thead > tr {
      background-color: #f6f9ff;
    }
    tbody > tr {
      font-size: 14px;
    }
    table {
      border: 1px solid black;
      width: 99%!important;
      empty-cells: show;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    .header,.navbar a,.header.header-scrolled{
      background-color: #041b34;
      color:#FFFFFF!important;
    }
    .marginTable{
      margin-top:2%;
    }
    .marginTopHead{
      margin-top: 3%;
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
    .backButton{
      box-shadow: 0px 10px 10px rgb(0 0 0 / 20%), 0px 0px 0px 0px rgb(0 0 0 / 4%);
      z-index: -1;
      background-color:#ED254E;
    }
    .subTextDesign{
      font-size: 14px;
    }
    .mainHeadingText{
      letter-spacing: 0.7px;
    }
    .mainTableDataClass{
      margin-top: 2%;
    }
    @media (max-width: 574px) {
      .textFooter,.textFooter:hover{
        float: none!important;
      }
    }
    @media (max-width: 767px) {
      .subTextDesign{
        font-size: 12px!important;
      }
      .mainHeadingText{
        font-size: 14px!important;
      }
      .backButton{
        font-size: 13px;
      }
    }
    @media (max-width: 991px) {
      .subTextDesign{
        font-size: 14px;
      }
      .mainHeadingText{
        font-size: 18px;
      }
    }
    .table thead th{
      vertical-align: middle;
    }
    .textFooter,.textFooter:hover{
      font-size:12px;
      color:lightgrey;
      float: right;
    }


    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
        empty-cells: show;
      }

      table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
      }


      table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
      }

      table th,
      table td {
        padding: .625em;
        text-align: left;
      }

      table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
      }

      @media screen and (max-width: 776px) {
        table {
          border: 0;
          /* empty-cells: show; */
        }

        table caption {
          font-size: 1.3em;
        }

        table thead {
          border: none;
          clip: rect(0 0 0 0);
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          width: 1px;
        }

        table tr {
          border-bottom: 3px solid #ddd;
          display: block;
          margin-bottom: .625em;
        }

        table td {
          border-bottom: 1px solid #ddd;
          display: block;
          font-size: .8em;
          text-align: right;
          display: flow-root;
          border-top: 0px!important;
        }

        table td::before {
          /*
          * aria-label has no advantage, it won't be read inside a table
          content: attr(aria-label);
          */
          content: attr(data-label);
          float: left;
          font-weight: bold;
          text-transform: uppercase;
          white-space: nowrap;
          bottom: 10px;
        }

        table td:last-child {
          border-bottom: 0;
        }
        td:empty::after{
          content: "\00a0";
          height: 22px;
        }
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

     <!-- ======= Portfolio Section =======  -->
    <div class="container">
      @php $headingText = '';$headingSubText = ''; @endphp
      @if(request()->id === 'button-1')
        @php $headingText = "Top 10 massive private properties by total number of units";
        $headingSubText = "List of Top 10 massive private properties in Singapore by total
        number of units in the private property. Massive private properties will have more
        higher number of facilities, lower maintenance cost and higher sales volume.";

        $header = array('RANK','PROPERTY NAME','TOTAL UNITS','TENURE','AREA');@endphp

      @elseif(request()->id === 'button-2')
        @php $headingText = "Top 10 smallest private properties by land size";
        $headingSubText = "List of Top 10 smallest private properties in Singapore by total
        land size occupied by the private property. Smaller land size projects have higher potential for En Bloc sale.";

        $header = array('RANK','PROPERTY NAME','LAND SIZE (SQFT)','LAND SIZE (SQM)','TOTAL UNITS','TENURE','AREA');@endphp

      @elseif(request()->id === 'button-3')
        @php $headingText = "Top 10 massive private properties by land size";
        $headingSubText = "List of Top 10 massive private properties in Singapore by total land size occupied by the
         private property. Bigger land size projects have more open space between blocks and generally higher number
         of shared facilities.";

        $header = array('RANK','PROPERTY NAME','LAND SIZE (SQFT)','LAND SIZE (SQM)','TOTAL UNITS','TENURE','AREA');@endphp

      @elseif(request()->id === 'button-4')
        @php $headingText = "Top 10 latest private properties";
        $headingSubText = "List of Top 10 latest private properties in Singapore. Latest private properties
        will have less maintenance, newer facilities and higher resale value due to long lease remaining years.";

        $header = array('RANK','PROPERTY NAME','YEAR BUILT','TOTAL UNITS','TENURE','LEASE REMAINING YEARS','AREA');@endphp

      @elseif(request()->id === 'button-5')
        @php $headingText = "Top 10 oldest private properties";
        $headingSubText = "List of Top 10 oldest private properties in Singapore. Older private properties will be spacious,
         under value and higher En Bloc potential.";

         $header = array('RANK','PROPERTY NAME','YEAR BUILT','TOTAL UNITS','TENURE','LEASE REMAINING YEARS','AREA');@endphp

      @else
        @php $headingText = "Top 10 smallest private properties by number of units";
        $headingSubText = "List of Top 10 smallest private properties in Singapore by total number of units in the private property.
        Smaller private properties will have more privacy, quiet and exclusive.";

        $header = array('RANK','PROPERTY NAME','TOTAL UNITS','TENURE','AREA');@endphp

      @endif

      <div class="row">
        <section id="report" class="report">
          <div class="row col-sm-12 col-md-12 col-lg-12 marginTopHead">
              <div class="col-sm-3 col-md-3 col-lg-3">
                <button type="button" class="btn backButton waves-effect waves-light marginTable pull-left" onclick="window.location='{{ url("/") }}'">
                  <i class="fas fa-arrow-left pr-2" aria-hidden="true"></i> Back
                </button>
              </div>
              <div class="mainTableDataClass col-sm-7 col-md-7 col-lg-7">
                <center>
                <h5 class="mainHeadingText"><strong>{{strtoupper($headingText)}}</strong></h5>
                <div class="subTextDesign">{{$headingSubText}}</div>
                </center>
              </div>
          </div>
          <table class="table marginTable">
            <thead>
                <tr>
                  <?php foreach ($header as $key => $value): ?>
                    <th scope="col">{{$value}}</th>
                  <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>

              <?php
              if(request()->id === 'button-1'){

                foreach ($data as $key => $value):

                ?>
                <tr>
                  <td scope="row" data-label="RANK">{{++$key}}</td>
                  <td data-label="PROPERTY NAME">{{$value->property_name}}</td>
                  <td data-label="TOTAL UNITS">{{($value->units_count==0) ? " ":$value->units_count}}</td>
                  <td data-label="TENURE">{{$value->tenure}}</td>
                  <td data-label="AREA">{{$value->planning_area}}</td>
                </tr>
              <?php endforeach; }
            else if(request()->id === 'button-2'){

              foreach ($data as $key => $value):

              ?>
              <tr>
                <td scope="row" data-label="RANK">{{++$key}}</td>
                <td data-label="PROPERTY NAME">{{$value->property_name}}</td>
                <td data-label="LAND SIZE (SQFT)">{{number_format($value->land_size_sqft)}}</td>
                <td data-label="LAND SIZE (SQM)">{{number_format($value->land_size_sqm)}}</td>
                <td data-label="TOTAL UNITS">{{($value->units_count==0) ? " ":$value->units_count}}</td>
                <td data-label="TENURE">{{$value->tenure}}</td>
                <td data-label="AREA">{{$value->planning_area}}</td>
              </tr>
            <?php endforeach;  }
            else if(request()->id === 'button-3'){

              foreach ($data as $key => $value):

            ?>
              <tr>
                <td scope="row" data-label="RANK">{{++$key}}</td>
                <td data-label="PROPERTY NAME">{{$value->property_name}}</td>
                <td data-label="LAND SIZE (SQFT)">{{number_format($value->land_size_sqft)}}</td>
                <td data-label="LAND SIZE (SQM)">{{number_format($value->land_size_sqm)}}</td>
                <td data-label="TOTAL UNITS">{{($value->units_count==0) ? " ":$value->units_count}}</td>
                <td data-label="TENURE">{{$value->tenure}}</td>
                <td data-label="AREA">{{$value->planning_area}}</td>
              </tr>
            <?php endforeach; }
            else if(request()->id === 'button-4') {
              $currentYear = date('Y');

              foreach ($data as $key => $value):

                $ageData = (($currentYear-1) - $value->top_year);
                $age = $ageData < 0 ? "  " : $ageData;
                if($value->tenure=="Freehold"){
                  $leaseData = "";
                }else{
                  $tenure = (int)(explode(" years",$value->tenure))[0];
                  $leaseUsedUp = ($currentYear-1) - ($value->top_year-3);
                  $leaseRemainingYear = $leaseUsedUp < 0 ? $tenure  : ($tenure- $leaseUsedUp);
                  $leaseData = $leaseRemainingYear < 0 ? '' : $leaseRemainingYear." years";
                }
            ?>
              <tr>
                <td scope="row" data-label="RANK">{{++$key}}</td>
                <td data-label="PROPERTY NAME">{{$value->property_name}}</td>
                <td data-label="YEAR BUILT">{{$value->top_year}}</td>

                <td data-label="TOTAL UNITS">{{($value->units_count==0) ? " ":$value->units_count}}</td>
                <td data-label="TENURE">{{$value->tenure}}</td>
                <td data-label="LEASE REMAINING YEARS">{{$leaseData}}</td>
                <td data-label="AREA">{{$value->planning_area}}</td>
              </tr>
            <?php endforeach;  }
            else if(request()->id === 'button-5') {
              $currentYear = date('Y');

              foreach ($data as $key => $value):

                $ageData = (($currentYear-1) - $value->top_year);
                $age = $ageData < 0 ? "  " : $ageData;
                if($value->tenure=="Freehold"){
                  $leaseData = "";
                }else{
                  $tenure = (int)(explode(" years",$value->tenure))[0];
                  $leaseUsedUp = ($currentYear-1) - ($value->top_year-3);
                  $leaseRemainingYear = $leaseUsedUp < 0 ? $tenure : ($tenure - $leaseUsedUp);
                  $leaseData = $leaseRemainingYear < 0 ? '' : $leaseRemainingYear." years";
                }
            ?>
              <tr>
                <td scope="row" data-label="RANK">{{++$key}}</td>
                <td data-label="PROPERTY NAME">{{$value->property_name}}</td>
                <td data-label="YEAR BUILT">{{$value->top_year}}</td>

                <td data-label="TOTAL UNITS">{{($value->units_count==0) ? " ":$value->units_count}}</td>
                <td data-label="TENURE">{{$value->tenure}}</td>
                <td data-label="LEASE REMAINING YEARS">{{$leaseData}}</td>
                <td data-label="AREA">{{$value->planning_area}}</td>
              </tr>
            <?php endforeach;  }
            else if(request()->id === 'button-6') {

              foreach ($data as $key => $value):

              ?>
              <tr>
                <td scope="row" data-label="RANK">{{++$key}}</td>
                <td data-label="PROPERTY NAME">{{$value->property_name}}</td>
                <td data-label="TOTAL UNITS">{{($value->units_count==0) ? " ":$value->units_count}}</td>
                <td data-label="TENURE">{{$value->tenure}}</td>
                <td data-label="AREA">{{$value->planning_area}}</td>
              </tr>
            <?php endforeach; }
            ?>
            </tbody>
          </table>
        </section>
      </div>
  </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

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
</body>

</html>
