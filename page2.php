<?php
require 'functions.php';
$mobil = query("SELECT * FROM unit_mobil");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CW Transport</title>
    <link rel="icon" type="image/x-icon" href="image/logo1.png" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!-- boostrep icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- style -->
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- navbar dan side bar -->
    <!-- navbar -->
    <div class="navbar-fixed">
      <nav class="blue darken-4">
        <div class="nav-wrapper">
          <div class="container">
            <a href="index.html" class="brand-logo logo"></a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="index.html">HOME</a></li>
              <li><a href="index.html">ABOUT</a></li>
              <li><a href="index.html">MOBIL</a></li>
              <li><a href="index.html">PAKET</a></li>
              <li>
                <a href="https://wa.link/3iqnd5"><i class="bi bi-whatsapp waLogo"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- akhir navbar -->
    <!-- side bar -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="index.html">HOME</a></li>
      <li><a href="index.html">ABOUT</a></li>
      <li><a href="index.html">MOBIL</a></li>
      <li><a href="index.html">PAKET</a></li>
      <li>
        <a href="https://wa.link/3iqnd5"><i class="bi bi-whatsapp waLogo"></i></a>
      </li>
    </ul>
    <!-- akhir sidebar -->
    <!-- akhir navbar dan sidebar -->

    <!-- menu mobil -->
    <div class="container">
      <div class="row">
        <h3 class="center text">Unit sewa Mobil</h3>
        <div class="col l12 col s12 menu-mobil">
          <!-- card-1 -->
          <div data-aos="flip-left" data-aos-duration="1200" data-aos-delay="200">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/2.png" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold">Grand Avanza<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp.500.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 7 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Grand Avanza<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>

          <!-- akhir card-1 -->
          <!-- card-2 -->
          <div data-aos="flip-left" data-aos-duration="1200" data-aos-delay="400">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/unit-1.png" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold; margin-top: -20px">All New Xenia<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp.550.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 7 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">All New Xenia<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
          <!-- akhir card-2 -->
          <!-- card-3 -->
          <div data-aos="flip-left" data-aos-duration="1200" data-aos-delay="600">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/unit-3.jpeg" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold; margin-top: -30px">Innova Rebor<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp.750.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 7 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Innova Rebor<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>

          <!-- akhir card-3 -->
        </div>
        <div class="col l12 col s12 menu-mobil">
          <!-- card-4 -->
          <div data-aos="flip-left" data-aos-duration="1200" data-aos-delay="800">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/unit-4.jpeg" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold">Toyota Hiace Computer<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp1.200.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 14 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Toyota Hiace Computer<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>

          <!-- akhir card-4 -->
          <!-- card-5 -->
          <div data-aos="flip-left" data-aos-duration="1200" data-aos-delay="1000">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/unit-5.jpeg" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold">Toyota Hiace Premio<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp1.300.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 12 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Toyota Hiace Premio<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>

          <!-- akhir card-5 -->
          <!-- card-6 -->
          <div data-aos="flip-left" data-aos-duration="1200" data-aos-delay="1200">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/unit-6.jpeg" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold">Medium Bus<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp1.700.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 30-35 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Medium Bus<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col l12 col s12 menu-mobil">
          <!-- card-7 -->
          <div data-aos="flip-left" data-aos-duration="1400" data-aos-delay="1400">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/unit-7.jpeg" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold; margin-top: -32px">Big Bus<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp3.000.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 50 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Big Bus<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>

          <!-- akhir card-7 -->
          <!-- card-8 -->
          <div data-aos="flip-left" data-aos-duration="1400" data-aos-delay="1600">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/unit mobil/3.png" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4" style="font-weight: bold">Toyota Alpart<i class="material-icons right">more_vert</i></span>
                <i class="bi bi-cash-coin"> Rp3.500.000 /12 jam</i><br />
                <i class="bi bi-people-fill"> 7 Orang</i><br />
                <i class="bi bi-fuel-pump-fill"> full bensin</i><br />
                <i class="bi bi-person-fill">with driver</i>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Toyota Alpart<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
          <!-- akhir card-8 -->
        </div>
      </div>
      <h4 class="center text" style="font-size: 20px">"Tujuan Luar Kota menyesuaikan harga"</h4>
    </div>
    <!-- modal ..... -->
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="center-align">
            <a href="#modal1" class="waves-effect waves-light btn blue darken-4 modal-trigger">
              <i class="material-icons right">directions_car</i>
              rent now
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h3>renting car</h3>
        <div class="container">
          <div class="row">
            <!-- masukan nama pemesan -->
            <div class="input-field col s6">
              <input placeholder="Placeholder" id="first_name" type="text" class="validate" />
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" />
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <!-- pilih unit -->
          <div class="row">
            <div class="input-field col s12">
              <select>
                <option value="" disabled selected>Choose our unit</option>
                <option value="1">Grand Avanza</option>
                <option value="2">All New Xenia</option>
                <option value="3">Innova Rebor</option>
                <option value="4">Toyota Hiace Computer</option>
                <option value="5">Toyota Hiace Premio</option>
                <option value="6">Medium Bus</option>
                <option value="7">Big Bus</option>
                <option value="8">Toyota Alpart</option>
              </select>
              <label>Car Unit</label>
            </div>
          </div>
          <!-- tawarkan driver  -->
          <div class="row">
            <span class="margin-bottom-2">rent without driver discon 20%</span>
            <p>
              <label>
                <input name="option" type="radio" value="option1" checked />
                <span>Driver</span>
              </label>
            </p>
            <p>
              <label>
                <input name="option" type="radio" value="option1" checked />
                <span>no Driver </span>
              </label>
            </p>
          </div>
          <!-- akhir tawaran driver -->
          <!-- tangga sewa -->
          <div class="row">
            <div class="input-field">
              <input type="date" id="tanggal_sewa" />
              <label for="datepicker"> Tanggal mulai</label>
            </div>
          </div>
          <!-- tanggal kembali -->
          <div class="row">
            <div class="input-field">
              <input type="date" id="tanggal_sewa" />
              <label for="datepicker"> Tanggal pengembalian</label>
            </div>
          </div>
          <!-- jam kembali -->
          <div class="input-field">
            <input type="time" id="timepicker" />
            <label for="timepicker">jam pengembalian</label>
          </div>

          <!-- alamat penjemputan / pengembalian  -->
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">alamat penjemputan / pengembalian</label>
          </div>
          <!-- akhir alamat -->
          <!-- aploud SIM... -->
          <form action="#">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" />
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="aploud SIM anda....." />
                <span class="helper-text">berlaku jika tidak menyewa driver </span>
              </div>
            </div>
          </form>
          <!-- akhir aploud SIM -->
        </div>
      </div>
      <div class="modal-footer">
        <!-- Modal Trigger -->
        <button data-target="modal2" class="btn modal-trigger">Submit</button>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>
    <!-- akhir modal -->

    <!-- modal ke -2 -->
    <div id="modal2" class="modal">
      <div class="modal-content">
        <ul>
          <li>
            <p>total: <span style="font-weight: bold">Rp.500.000</span></p>
          </li>
          <li>
            <p>silahkan lakukan pembayaran di salah satu rekening kami :</p>
            <p>BRI :12131313131 (JONI)</p>
            <p>BCA :12131313131 (JONI)</p>
            <p>Dana :12131313131 (AGUS)</p>
          </li>
          <li>
            <span> tunggu respon dari kami melalui whatsapp ,jika tak kunjung datang maka silahkan hubungi kami dengan mengeklik logo whatsapp </span>
          </li>
        </ul>
        <div class="file-field input-field">
          <div class="btn">
            <span>Upload </span>
            <input type="file" multiple />
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="bukti pembayaran...." />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Finish</a>
      </div>
    </div>
    <!-- akhir modal ke 2 -->

    <!-- akhir menu mobil  -->
    <div class="conatainer contact">
      <div class="row">
        <h4 class="center text">silahkan klik icon untuk info dan pemesanan</h4>
        <div class="col l12 col m12 col s12 icon">
          <div class="icon-1">
            <a href="https://wa.link/3iqnd5"> <i class="bi bi-whatsapp"></i></a>
          </div>
          <div class="icon-2">
            <a href="http://"> <i class="bi bi-facebook"></i></a>
          </div>
          <div class="icon-3">
            <a href="https://www.instagram.com/cahayawaskitha/"><i class="bi bi-instagram"></i></a>
          </div>
          <div class="icon-4">
            <a href="http://"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- footer  -->

    <footer>
      <p>Cahayawaskitha@Copyright2022</p>
    </footer>
    <!-- akhir footer  -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- my script -->
    <script src="script2.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-2a09a5d9-5913-47bc-bc01-0e8700bdf470"></div>
  </body>
</html>
