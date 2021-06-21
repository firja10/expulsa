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
            <div class="col-lg-12" style = "margin-top:20px;" >


            <br>

         
            <table class="table">
  <thead>
    <tr>
      <th scope="col"> <center>Provider</center> </th>
      <th scope="col"> <center> Input Uang</center></th>
      <th scope="col"> <center> Hitung</center></th>
      <th scope="col"><center> Hasil</center></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <center> XL ( 50.000 – 299.000 ) </center></th>
      <td><input type="number" class = "form-control" id = "xl" name = "xl" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatesatu()" >Hitung</button> </center>   </td>
      <td>  <center><strong><span id = "hasil1"> </span></strong></center> </td>
    </tr>
    
    <tr>
      <th scope="row"><center> AXIS ( 100.000 – 2.500.000 ) </center></th>
      <td><input type="number" class = "form-control" id = "axis" name = "axis" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatedua()" >Hitung</button> </center>   </td>
      <td> <center><strong><span id = "hasil2"> </span></strong></center></td>

    </tr>
    <tr>
      <th scope="row"><center> TELKOMSEL ( 100.000 – 2.500.000 ) </center></th>
      <td><input type="number" class = "form-control" id = "telkomsel" name = "telkomsel" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatetiga()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil3"> </span></strong></center></td>

    </tr>

    <tr>
      <th scope="row"><center> THREE ( 30.000 – 3.000.000 ) </center></th>
      <td><input type="number" class = "form-control" id = "three" name = "three" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculateempat()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil4"> </span></strong></center></td>

    </tr>

    <tr>
      <th scope="row"><center> XL MIDDLE ( 300.000 – 999.000 ) </center></th>
      <td><input type="number" class = "form-control" id = "xl_middle" name = "xl_middle" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatelima()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil5"> </span></strong></center></td>

    </tr>



    <tr>
      <th scope="row"><center> XL UNLIMITED ( 1.000.000 – Unlimited ) </center></th>
      <td><input type="number" class = "form-control" id = "xl_unlimited" name = "xl_unlimited" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculateenam()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil6"> </span></strong></center></td>

    </tr>
    

    <tr>
      <th scope="row"><center> AXIS UNLIMITED ( 2.501.000 – Unlimited )</center></th>
      <td><input type="number" class = "form-control" id = "axis_unlimited" name = "axis_unlimited" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatetujuh()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil7"> </span></strong></center></td>

    </tr>


    <tr>
      <th scope="row"><center> TELKOMSEL UNLIMITED ( 2.501.000 – Unlimited ) </center></th>
      <td><input type="number" class = "form-control" id = "telkomsel_unlimited" name = "telkomsel_unlimited" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatedelapan()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil8"> </span></strong></center></td>

    </tr>
    

    <tr>
      <th scope="row"><center> THREE UNLIMITED ( 3.001.000 – Unlimited ) </center></th>
      <td><input type="number" class = "form-control" id = "three_unlimited" name = "three_unlimited" placeholder="Silakan Masukkan Nominal Pulsa" ></td>
      <td> <center> <button class = "btn btn-success" onclick="calculatesembilan()" >Hitung</button>  </center> </td>
      <td> <center><strong><span id = "hasil9"> </span></strong></center></td>

    </tr>




    
  </tbody>
</table>







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

        Untuk Uang yang dikeluatkan Minimal Rp.50.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>







<div class="modal fade" id="modalingat2" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.100.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="modalingat3" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.100.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalingat4" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.30.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalingat5" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.300.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalingat6" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.1.000.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modalingat7" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.2.501.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalingat8" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.2.501.000 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="modalingat9" tabindex="-1" role="dialog" aria-labelledby="modalingatTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolong Diperhatikan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Untuk Uang yang dikeluatkan Minimal Rp.3.001.000 
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

    <!-- JS Files -->

            <script>
            
            function calculatesatu()
            {
              var field1 = parseFloat(document.getElementById('xl').value); 
      

              var total1 = field1*0.73;
              if(!isNaN(total1)){

                if(field1 < 50000 ){
  
                  $("#modalingat1").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil1').innerHTML =  total1;
                }

            }
            

            }



            function calculatedua()
            {
              var field2 = parseFloat(document.getElementById('axis').value); 
      

              var total2 = field2*0.75;
              if(!isNaN(total2)){

                if(field2 < 100000 ){
      
                  $("#modalingat2").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil2').innerHTML =  total2;
                }

            }
            

            }





            function calculatetiga()
            {
              var field3 = parseFloat(document.getElementById('telkomsel').value); 
      

              var total3 = field3*0.75;
              if(!isNaN(total3)){

                if(field3 < 100000 ){
      
                  $("#modalingat3").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil3').innerHTML =  total3;
                }

            }
            

            }




            
            function calculateempat()
            {
              var field4 = parseFloat(document.getElementById('three').value); 
      

              var total4 = field4*0.80;
              if(!isNaN(total4)){

                if(field4 < 100000 ){
      
                  $("#modalingat4").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil4').innerHTML =  total4;
                }

            }
            

            }


            function calculatelima()
            {
              var field5 = parseFloat(document.getElementById('xl_middle').value); 
      

              var total5 = field5*0.75;
              if(!isNaN(total5)){

                if(field5 < 300000 ){
      
                  $("#modalingat5").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil5').innerHTML =  total5;
                }

            }
            

            }
 



            function calculateenam()
            {
              var field6 = parseFloat(document.getElementById('xl_unlimited').value); 
      

              var total6 = field6*0.80;
              if(!isNaN(total6)){

                if(field6 < 1000000 ){
      
                  $("#modalingat6").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil6').innerHTML =  total6;
                }

            }
            

            }



            
            function calculatetujuh()
            {
              var field7 = parseFloat(document.getElementById('axis_unlimited').value); 
      

              var total7 = field7*0.76;
              if(!isNaN(total7)){

                if(field7 < 2501000 ){
      
                  $("#modalingat7").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil7').innerHTML =  total7;
                }

            }
            

            }



            function calculatedelapan()
            {
              var field8 = parseFloat(document.getElementById('telkomsel_unlimited').value); 
      

              var total8 = field8*0.76;
              if(!isNaN(total8)){

                if(field8 < 2501000 ){
      
                  $("#modalingat8").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil8').innerHTML =  total8;
                }

            }
            

            }




            function calculatesembilan()
            {
              var field9 = parseFloat(document.getElementById('three_unlimited').value); 
      

              var total9 = field9*0.82;
              if(!isNaN(total9)){

                if(field9 < 3001000 ){
      
                  $("#modalingat9").modal("show")
                  
                }
                else 
                {
                  document.getElementById('hasil9').innerHTML =  total9;
                }

            }
            

            }






            
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
