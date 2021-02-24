<?php 
require_once 'header.php';

$organizasyonsor=$db->prepare("SELECT * FROM organizasyon where organizasyon_id=:id");
$organizasyonsor->execute(array(
  'id' => 1
  ));
$organizasyoncek=$organizasyonsor->fetch(PDO::FETCH_ASSOC);

 ?>
<head>
  <style type="text/css">
    .page-title-section {
      padding: 160px 0px 45px 0px;
    }
    .feature-flex-square-content h4 a {
      font-size: 18px;
    }
  </style>
</head>

<!-- Page Title START -->
<div class="page-title-section" style="background-image: url(img/slider/slide11.jpg);">
  <div class="container">
    <h1>Organizasyon Şeması</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about-2.html">About</a></li>
    </ul>
  </div>
</div>
<!-- Page Title END -->


<!-- Info & Feature Section START -->
<div class="section-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-12">
        <img src="<?php echo $organizasyoncek['organizasyon_resimyol']; ?>" class="rounded-border shadow-primary" alt="img">
      </div>
    </div>
  </div>
</div>
<!-- Info & Feature Section END -->




<!-- Notice Section START -->
<div class="notice-section notice-section-sm border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-12">
        <div class="mt-5">
          <h6>Hizmetlerimiz hakkında daha fazla bilgi almak için lütfen bizimle iletişime geçiniz. </h6>
          <div class="section-heading-line-left"></div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-12">
        <div class="mt-10 right-holder-md text-center">
          <a href="#" class="primary-button" style="font-size: 14px; padding: 13px 25px 13px 25px;">Bize Ulaşın</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Notice Section END -->






<?php require_once 'footer.php'; ?>