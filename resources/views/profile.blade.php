<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>SYAHADAH</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="weibergmedia">
<meta name="Description" content="Belton – Sophisticated Responsive HTML5 Photography Portfolio">
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:400,600" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet" />
<script src="js/modernizr.js" type="text/javascript"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="frank-ruhl-libre">
<div id="nav-wrapper"> 
  <!-- start main nav -->
  {{-- <nav id="main-nav">
    <ul class="clearfix">
      <li> <a href="#" class="sub-nav-toggle selected">Demos</a>
        <ul class="sub-nav hidden">
          <li> <a href="index.html">Agency</a> </li>
          <li> <a href="restaurant.html" class="selected">Restaurant</a> </li>
          <li> <a href="fitness.html">Fitness</a> </li>
          <li> <a href="photography.html">Photography</a> </li>
          <li> <a href="architect.html">Architect</a> </li>
          <li> <a href="medical.html">Medical</a> </li>
        </ul>
      </li>
      <li> <a href="portfolio.html">Portfolio</a></li>
      <li> <a href="about.html">About</a> </li>
      <li> <a href="blog.html">Blog</a> </li>
      <li> <a href="#" class="sub-nav-toggle">Features</a>
        <ul class="sub-nav hidden">
          <li> <a href="case-study-1.html">Case Study 1</a> </li>
          <li> <a href="case-study-2.html">Case Study 2</a> </li>
          <li> <a href="post-1.html">Post</a> </li>
          <li> <a href="pricing.html">Pricing</a> </li>
          <li> <a href="job-offers.html">Job Offers</a> </li>
        </ul>
      </li>
      <li> <a href="contact.html">Penyelenggara</a> </li>
    </ul>
  </nav> --}}
  <!-- end main nav --> 
</div>
<div id="content-overlay"></div>
<div id="wrap">
  <div id="menu-button">
    <div class="centralizer">
      <div class="cursor">
        {{-- <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div> --}}
        <h1 id="logo"><a href="/"></a></h1>
      </div>
    </div>
  </div>
  
  <!-- start header -->
  <header id="header" class="clearfix">
    
    <ul class="social-list clearfix">
      {{-- <li> <h1 id="logo"><a href="/"></a></h1> </li> --}}
      <!-- <li> <a href="#"><i class="fa fa-dribbble"></i></a> </li>
      <li> <a href="#"><i class="fa fa-xing"></i></a> </li> -->
    </ul>
  </header>
  <!-- end header --> 
  {{-- coding rata rata --}}
  <?php 
    $total  = $peserta->nilai->where("kategori","al-qur'an")->sum('nominal');
    $total2 = $peserta->nilai->where("kategori","skill")->sum('nominal');
    $total3 = $peserta->nilai->where("kategori","skill")->count();
    $rata2  = ($total + $total2)/($total3+1);
    ?>
  <!-- start content -->
  <div id="content">
    <div class="full-width intro">
      <div class="full-height not-completely-full">
        <div class="fixed">
          <figure class="background-image9 parallax parallax-banner"></figure>
        </div>
        <div class="full-height-wrapper white-text">
          <div class="parent">
            <div class="bottom">
              <div class="container">
                <div class="animatedblock delay2 animatedUp">
                  <div class="col-md-6 col-md-offset-3 centered">
                    <div class="banner-textblock">
                      <p style="font-size: 14px;" class="large">Dinyatakan Lulus &amp; Bersyahadah</p>
                      <h1 class="header">DETAIL SYAHADAH </h1>
                      <button class="btn btn-sm btn-rounded btn-outline-info" onclick="scroll_detail();">DETAIL</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
    </div>
    <section class="white">
      <div class="container clearfix" id="detail">
        <div class="col-md-10 col-md-offset-1">
            <blockquote> 
                <?php 
                    $terbit = Carbon\Carbon::parse($peserta->pelatihan->tanggal)->isoFormat('Y');
                    $mati   = $terbit + 3;
                    ?>
                    @if ($terbit < $mati)
                        <span class="text-primary">SYAHADAH BERLAKU SAMPAI 
                        {{$mati}} <br>
                    @else
                        <span class="text-danger">SYAHADAH SUDAH TIDAK BERLAKU - TERAKHIR AKTIF
                        {{$mati}} <br>
                    @endif
                <div style="text-align: justify">
                    <small style="font-size: 12px">Diwajibkan untuk mengikuti pelatihan ulang apabila syahadah anda sudah tidak berlaku</small>
                </div>
            </span>
                <footer>Abdurrohim Hasan, M. Pd (Sekertaris Eksekutif)</footer>
            </blockquote>
            <br><hr>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">Profile</p>
              <p>
                    {{$peserta->name}}<br />
                    {{$peserta->tmptlahir}}<br />
                    {{Carbon\Carbon::parse($peserta->tgllahir)->isoFormat('D MMMM Y');}}</p>
            </div>
            <div class="col-md-3 col-sm-3 extra-padding-top">
                <p class="small">Pelaksana</p>
                {{Carbon\Carbon::parse($peserta->pelatihan->tanggal)->isoFormat('D MMMM Y');}}<br />
                {{strtoupper($peserta->cabang->name). ' - ' .strtoupper($peserta->pelatihan->tempat)}}
            </div>
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">DIKLAT</p>
              <p>{{strtoupper($peserta->program->name)}}<br /></p>
            </div>
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">STATUS KRITERIA</p>
              <p>DINYATAKAN <br> <a onclick="scroll_nilai();" class="arrow text-primary">{{$peserta->kriteria}}</a></p>
            </div>
            <div class="col-sm-12">
              <div class="borderline last-in-section"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="white same-color-as-previous-section">
      <div class="container clearfix">
        <article class="col-md-5 col-md-offset-1 col-sm-6 extra-padding-right" id="nilai">
          <table style="width: 100%;">
            DETAIL INFORMASI PENILAIAN <br><hr>
            <tbody style="text-transform: uppercase">
                @foreach ($peserta->nilai as $item)
                    @if ($item->kategori !== 'skill')
                    <tr>
                        <td class="text-left">{{$item->penilaian->name}}</td>
                        <td class="text-right">{{$item->nominal}}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
          </table>
          <hr class="my-4">
          <table style="width: 100%">
            <tbody style="text-transform: uppercase">
                @foreach ($peserta->nilai as $item)
                    @if ($item->kategori == 'skill')
                    <tr>
                        <td class="text-left">{{$item->penilaian->name}}</td>
                        <td class="text-right">{{$item->nominal}}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
          </table>
          <br>
          
          <table style="width: 100%">
            <tbody>
              <tr>
                <td class="text-right"><p style="font-size: 20px">NILAI AKHIR : <u> {{$rata2}} </u></p></td>
              </tr>
            </tbody>
          </table>
        </article>
        <article class="col-md-5 col-sm-6 extra-padding-top"> <img src="images/gedung.png" alt="" class="extra-padding-top-on-xs" /> </article>
      </div>
    </section>
  </div>
  <!-- end content -->
  
  <footer id="footer" class="same-color-as-last-section">
    <div class="container clearfix">
      <p class="alignleft">© 2021, Tilawati Pusat.</p>
    </div>
  </footer>
</div>
<!-- end wrap --> 

<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script> 
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script> 
<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope2.min.js" type="text/javascript"></script> 
<script src="js/jquery.ba-bbq.min.js" type="text/javascript"></script> 
<script src="js/packery-mode.pkgd.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.load.js" type="text/javascript"></script> 
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/jquery.form.js" type="text/javascript"></script> 
<script src="js/input.fields.js" type="text/javascript"></script> 
<script src="js/preloader.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<script>
  function scroll_detail() {
    document.getElementById('detail').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"}); 
  }
  function scroll_nilai() {
    document.getElementById('nilai').scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"}); 
  }
</script>
</body>
</html>