<footer class="wepro view py-5 white-text">

  <div class="" >
    <div class="wow fadeIn">
    <div class="row col-lg-12" style="justify-content: center;">

      <div class="col-lg-2 mb-3">
      <img class="img-fluid" src="<?= base_url('assets/img/logo-cls-fa putih.png'); ?>"high="50%" width="50%"/><br>
      <p class="white-text justify1-text">
        PT CLS System is The Total Integrated Loyalty Consulting that provides strategic consultation to clients on how best to design, structure, implement and manage a Loyalty Program in the long run trough IT Support & System Integration.
      </p>
      <div class="row ml-2 embuh3">
        <img class="img-fluid mr-3" src="<?= base_url('assets/img/Group28.png'); ?>"high="10%" width="10%"/>
        <img class="img-fluid mr-3" src="<?= base_url('assets/img/linkedin.svg'); ?>"high="10%" width="10%"/>
        <img class="img-fluid mr-3" src="<?= base_url('assets/img/facebook.svg'); ?>"high="10%" width="10%"/>
        <img class="img-fluid mr-3" src="<?= base_url('assets/img/twitter.svg'); ?>"high="10%" width="10%"/>
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
          Independrnt Day !
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
          B2B White Label
        </div>

        <div class="justify1-text pb-3">
          RMS (Reword Management System)
        </div>
                      
        <div class="justify1-text  pb-3">
          E-Commerce
        </div>  

        <div class="justify1-text">
          Prochurement & Fullfillment
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