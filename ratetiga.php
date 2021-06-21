<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Kalkulator Rate - Expulsa</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="expulsa-asli.png" rel="icon" />
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style = "background-color:#efc33eff;">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto">
          <a href="index.html">EXPULSA</a>

          <!-- <img src="expulsa.png" alt="" > -->
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.html">Beranda</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#services">Layanan Kami</a></li>
            <!-- <li><a href="#portfolio">Portfolio</a></li> -->
            <li><a href="#team">Testimonial</a></li>


            <li class="drop-down">
              <a href="">Informasi Penting</a>
              <ul>
                <li><a href="http://localhost/imagephp/Expulsa/panduan-transaksi.php">Panduan Transaksi</a></li>
                <li><a href="http://localhost/imagephp/Expulsa/rate.php">Kalkulator Rate</a></li>
                <li><a href="http://localhost/imagephp/Expulsa/syarat-ketentuan-layanan.php">Syarat dan Ketentuan Layanan</a></li>
              </ul>
              </li>
              


            <!-- <li><a href="#contact">Contact</a></li> -->
          </ul>
        </nav>
        <!-- .nav-menu -->

        <a href="#contact" class="get-started-btn scrollto">Tukar Pulsa Sekarang !</a>
      </div>
    </header>
    <!-- End Header -->


    <main id="main" style = "margin-top:100px;">


      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Kalkulator Convert Pulsa</h2>
          </div>
          

          <div class="row content">
            <div class="col-lg-6" style = "margin-top:20px;" >


            <br>

                        
            <!-- <div class="form-group">
            <select name="pilih" id="pilih" class = "form-control">
            <option value="">XL</option>
            <option value="">XL ( sampai Unlimited )</option>
            <option value="">AXIS</option>
            <option value="">AXIS ( sampai Unlimited )</option>
            <option value="">Telkomsel</option>
            <option value="">Telomsel ( sampai Unlimited )</option>
            <option value="">Three</option>
            <option value="">Three ( sampai Unlimited )</option>
            </select>
            </div> -->
            





            <div class="form-group">
            <select name="pilih" id="pilih" class = "form-control">
            <option disabled selected value > --Silakan Pilih Kategori--</option>
            <option value="xl"> XL </option>
            <option value="xl_middle"> XL ( Pertengahan ) </option>
            <option value="xl_unlimited"> XL ( Sampai Unlimited ) </option>
            <option value="axis">AXIS</option>
            <option value="axis_unlimited">AXIS ( sampai Unlimited )</option>
            <option value="telkomsel">Telkomsel</option>
            <option value="telkomsel_unlimited">Telomsel ( sampai Unlimited )</option>
            <option value="three">Three</option>
            <option value="three_unlimited">Three ( sampai Unlimited )</option>
            </select>
            </div>









            <div class="form-group">
            <input type="number" class = "form-control" id = "num" name = "num" placeholder="Silakan Masukkan Nominal Pulsa" >
 
            </div>

            <h1 id = "kata"></h1>

           <div class="form-group">
           <center>
              <!-- <input type="submit" class = "btn btn-success" id = "" name = "" value="HITUNG"> -->
              <button class = "btn btn-success" onclick="calculate()" >Hitung</button>
          </center>
            </div>



          </div>






          <div class="col-lg-6" style = "margin-top:20px;" >

          <br>
                      
          <div class="form-group">
         <textarea  class = "form-control" cols="30" rows="5" disabled id = "hasil"></textarea>
         <!-- <input type="text" id = "hasil"/> -->
         <h1 id = "result" ></h1>
          </div>
          </div>




        </div>










      </section>
      <!-- End About Us Section -->








      <div class="modal fade" id="modalingat1" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 id = "kata_modal">
      <!-- Untuk Uang yang dikeluatkan Minimal Rp.50.000  -->
      </h5>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


















    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="bawah" style="background: #7D2517;">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <!-- <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post"><input type="email" name="email" /><input type="submit" value="Subscribe" /></form> -->
            </div>
          </div>
        </div>
      </div>

      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>EXPULSA</h3>
              <p>
                A108 Adam Street <br />
                New York, NY 535022<br />
                United States <br /><br />
                <strong>Phone:</strong> +1 5589 55488 55<br />
                <strong>Email:</strong> info@example.com<br />
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Link Penting</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#aboutus">Tentang Kami</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan Kami</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#team">Testimonial</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Layanan Kami</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Konversi Pulsa</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Media Partner</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Kontak Media Sosial Kami</h4>
              <p>Berikut Kontak Media Sosial Kami</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Expulsa</span></strong
          >. All Rights Reserved
        </div>
        <!-- <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->

            <script>
            $(submit).click(function(){
              var nominal_pulsa = $("#nominal_pulsa").val();
              var provider = $("#provider").val();
              var nomor_pengirim = $("#nomor_pengirim").val();
              var bank_dompet = $("#bank_dompet").val();
              var nomor_rekening = $("#nomor_rekening").val();

              if(nominal_pulsa ==''|| provider==''|| nomor_pengirim == '')
              {
                alert('ada yang masih kosong !');
              }

            });
            </script>



            <script>
            
            function calculate()
            {
              var field = parseFloat(document.getElementById('num').value); 
            //   var drop = parseFloat(document.getElementById('pilih').value); 
            var drop = document.getElementById('pilih').value; 
              // var penyedia = parseFloat(document.getElementsByClassName('provider').value); 
                // document.getElementById('kata').innerHTML = drop

            //   var total = field*drop;
            //   if(!isNaN(total)){

                if(drop === 'xl' ){
                  
                    if( field < 50000 ) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.50.000 ';
                    }

                    else if(field > 299000) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Maksimal Rp.299.000 ';
                    }

                    else {
                        var total1 = field*0.73
                        document.getElementById('hasil').innerHTML =  total1;
                    }


                }

                else if( drop === 'xl_middle') {

                    if( field < 300000 ) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.300.000 ';
                    }

                    else if(field > 999000) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Maksimal Rp.999.000 ';
                    }

                    else {
                        var total2 = field*0.75
                        document.getElementById('hasil').innerHTML =  total2;
                    }

                }




                else if( drop === 'xl_unlimited') {

                if( field < 1000000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.1.000.000 ';
                }


                else {
                    var total3 = field*0.80
                    document.getElementById('hasil').innerHTML =  total3;
                }

                }






                else if( drop === 'axis') {

                if( field < 100000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.100.000 ';
                }

                else if(field > 2500000) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Maksimal Rp.2.500.000 ';
                    }


                else {
                    var total4 = field*0.75
                    document.getElementById('hasil').innerHTML =  total4;
                }

                }




                else if( drop === 'axis_unlimited') {

                if( field < 2501000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.2.501.000 ';
                }


                else {
                    var total5 = field*0.76
                    document.getElementById('hasil').innerHTML =  total5;
                }

                }





                else if( drop === 'telkomsel') {

                if( field < 100000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.100.000 ';
                }




                else if(field > 2500000) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Maksimal Rp.2.500.000 ';
                    }




                else {
                    var total6 = field*0.75
                    document.getElementById('hasil').innerHTML =  total6;
                }

                }






                else if( drop === 'telkomsel_unlimited') {

                if( field < 2501000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.2.501.000 ';
                }


                else {
                    var total7 = field*0.76
                    document.getElementById('hasil').innerHTML =  total7
                    ;
                }

                }




                


                else if( drop === 'three') {

                if( field < 30000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.30.000 ';
                }


                
                else if(field > 3000000) {
                        $("#modalingat1").modal("show")
                        document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Maksimal Rp.3.000.000 ';
                    }



                else {
                    var total8 = field*0.80
                    document.getElementById('hasil').innerHTML =  total8
                    ;
                }

                }






                else if( drop === 'three_unlimited') {

                if( field < 3001000 ) {
                    $("#modalingat1").modal("show")
                    document.getElementById('kata_modal').innerHTML =  'Untuk Uang yang dikeluarkan Minimal Rp.3.001.000 ';
                }


                else {
                    var total9 = field*0.82
                    document.getElementById('hasil').innerHTML =  total9
                    ;
                }

                }



                else 
                {
                  document.getElementById('hasil').innerHTML =  'tidak ada kategori yang anda pilih';
                }

            }
            

            // }

 
            
            </script>
















    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script> -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>
</html>
