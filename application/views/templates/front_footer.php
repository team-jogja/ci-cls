<footer class="wepro view  white-text">

  <div class="" >
    <div class="wow fadeIn pt-4">
    <div class="row col-lg-12" style="justify-content: center;">

      <div class="col-lg-2 mb-3">
      <img class="img-fluid" src="<?= base_url('assets/img/logo-cls-fa putih.png'); ?>"height="50%" width="50%"/><br>
      <p class="white-text justify1-text">
       CLS SYSTEM is <span style=" font-weight: bold; font-style:italic;">  One of The Leading Technology Companies in Asia. </span> Since 2007 we focus in LOYALTY SOLUTION MANAGEMENT such as Consultation, IT Loyalty Solution Infrastructure, CRM, SaaS (software as service), mobile applications, and Fulfillment Gift Reward.
      </p>
      <div class="row  embuh3">
        <a href="https://www.instagram.com/pt_cls_system/"><img class="img-fluid ml-2 mr-3" src="<?= base_url('assets/img/instagram.svg'); ?>"height="10%" width="10%"/></a> 
        <a href="https://www.linkedin.com/in/pt-cls-system/"><img class="img-fluid ml-2 mr-3" src="<?= base_url('assets/img/linkedin.svg'); ?>"height="10%" width="10%"/></a> 
        <a href="https://twitter.com/cls_system"><img class="img-fluid ml-2 mr-3" src="<?= base_url('assets/img/facebook.svg'); ?>"height="10%" width="10%"/></a> 
        <a href="https://www.facebook.com/PT-CLS-System-106976076848507/"><img class="img-fluid ml-2 mr-3" src="<?= base_url('assets/img/twitter.svg'); ?>"height="10%" width="10%"/></a> 
      </div>
      </div>

      <div class="col-lg-2  mb-2">
        <p class="font-bold" style="font-size: small">PT. CLS SYSTEM INDONESIA</p>
        <div class="justify1-text pb-3">
            Jl. Kebon Jeruk VII No. 2E Maphar Taman Sari, Jakarta Barat, INDONESIA
        </div>

        <div class="justify1-text pb-3">
          (021)22686277 / (021)22686511
        </div>
                      
        <div class="justify1-text pb-3">
          info@cls-indo.com
        </div>  
      </div>

      <div class="col-lg-2 mb-2">
        <p class="font-bold" style="font-size: small">LATEST RELEASE</p>
        <div class="justify1-text pb-3">
          New Millennium in Digital Era
        </div>

        <div class="justify1-text pb-3">
          CSR Event at President University
        </div>
                      
        <div class="justify1-text">
          Magang Seru di CLS
        </div>     
      </div>

      <div class="col-lg-2 mb-2">
        <p class="font-bold" style="font-size: small">PROFILE</p>
        <div class="justify1-text pb-3">
          About US
        </div>

        <div class="justify1-text pb-3">
          Why CLS?
        </div>
      </div>  

      <div class="col-lg-2 mb-2">
        <p class="font-bold" style="font-size: small">OUR PRODUCT</p>
        <div class="justify1-text pb-3">
          Loyalty Program Platform
        </div>
                   
        <div class="justify1-text  pb-3">
          E-Commerce
        </div>  

        <div class="justify1-text">
          Fulfillment
        </div>  

    </div>
    </div>

    <hr id="hr">
    <p class="text-center" style="font-size: x-small;">
       <?= "Copyright © " . (int)date('Y') . " PT CLS SYSTEM. All Rights Reserved"; ?>
    </p>
    </div>
      </div>
  </div>

</footer>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/mdb.min.js"></script>
    <script>new WOW().init();</script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
        </script>
  </body>
</html>