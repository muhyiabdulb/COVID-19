<?php 

  session_start();
  require 'config/koneksi.php';
  if (!isset($_SESSION["mulai"])) {
    header("Location: index.php");
    exit;
  }
  
  if (!isset($_SESSION['biodata'])) {
    header("Location: biodata.php");
    exit();
  }

  //Klik tombol total yang dikirim dari form
  if (isset($_POST['hasil'])) {

    $total = $_POST['1'] + $_POST['2'] + $_POST['3'] +  $_POST['4'] +  $_POST['5'] +  $_POST['6'] +  $_POST['7'] +  $_POST['8'] +  $_POST['9'] +  $_POST['10'] +  $_POST['11'] +  $_POST['12'] +  $_POST['13'] +  $_POST['14'] +  $_POST['15'] +  $_POST['16'] +  $_POST['17'] +  $_POST['18'] +  $_POST['19'] +  $_POST['20'] +  $_POST['21'] +  $_POST['22'];

    if ($total >= 15) {
      $desk = "RESIKO TINGGI";
    } elseif ($total >= 8) {
      $desk = "RESIKO SEDANG";
    } elseif ($total >= 0) {
      $desk = "RESIKO RENDAH";
    } else {
      echo "tidak valid";
    }

    $sql = mysqli_query($con, "INSERT INTO hasil VALUES('','$_SESSION[nama]','$_SESSION[jk]', '$_SESSION[usia]','$total','$desk')");
      if ($sql) {
        $_SESSION['deskripsi'] = $desk;
        $_SESSION['test'] = true;
        echo "<script>alert('BERHASIL');document.location.href='deskripsi.php';</script>";
      }else{
        echo "<script>alert('GAGAl');document.location.href='test.php';</script>";
      }
  } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Kuyy Ngisi...</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/masker1.jpg" />
    <style>
        body {
            background-image: url(images/1.png);
        }
    </style>

  </head>

  <body>
    <form method="post" action="">
    <div class="">
      <div class="main_container">
        
        <!-- page content -->
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <h5><?php echo "<center> Penilaian Resiko Pribadi Tertular COVID-19 "."<u>".@$_SESSION['nama'];"</u></center>" ?></h5>
          
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">Kegiatan </th>
                            <th class="column-title no-link last"><span class="nobr">YA</span>
                              <th class="column-title no-link last"><span class="nobr">TIDAK</span>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            
                            <td class=" ">1</td>
                            <td class=" ">Saya pergi keluar rumah</td>
                            <td>
                              <input type="radio" name="1" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="1" value="0" required>T
                            </td>
                        
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">2</td>
                            <td class=" ">Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api dll</td>
                            <td>
                              <input class=" " type="radio" name="2" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="2" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">3</td>
                            <td class=" ">Saya tidak menggunakan masker saat berkumpul dengan orang lain</td>
                            <td>
                              <input class=" " type="radio" name="3" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="3" value="0" required>T
                            </td>
                           
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">4</td>
                            <td class=" ">Saya berjabat tangan dengan orang lain</td>
                            <td>
                              <input class=" " type="radio" name="4" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="4" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">5</td>
                            <td class=" ">Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil/motor</td>
                            <td>
                              <input class=" " type="radio" name="5" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="5" value="0" required>T
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">6</td>
                            <td class=" ">Saya menyentuh benda/uang yang juga disentuh orang lain</td>
                            <td>
                              <input class=" " type="radio" name="6" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="6" value="0" required>T
                            </td>
                           
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">7</td>
                            <td class=" ">Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah dll</td>
                            <td>
                              <input class=" " type="radio" name="7" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="7" value="0" required>T
                            </td>
                            
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">8</td>
                            <td class=" ">Saya makan diluar rumah (warung/restaurant)</td>
                            <td>
                              <input class=" " type="radio" name="8" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="8" value="0" required>T
                            </td>
                           
                          </tr>

                          <tr class="even pointer">
                            
                            <td class=" ">9</td>
                            <td class=" ">Saya tidak minum air hangat & cuci tangan dengan sabun</td>
                            <td>
                              <input class=" " type="radio" name="9" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="9" value="0" required>T
                            </td>
                       
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">10</td>
                            <td class=" ">Saya berada di wilayah kelurahan tempat pasien tertular</td>
                            <td>
                              <input class=" " type="radio" name="10" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="10" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">11</td>
                            <td class=" ">Saya tidak pasang hand sanitizer di depan pintu masuk, untuk membersihkan tangan sebelum pegang gagang(handle) pintu masuk rumah</td>
                            <td>
                              <input class=" " type="radio" name="11" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="11" value="0" required>T
                            </td>
                        
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">12</td>
                            <td class=" ">Saya tidak mencuci tangan dengan sabun setelah tiba di rumah/td>
                            <td>
                              <input class=" " type="radio" name="12" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="12" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">13</td>
                            <td class=" ">Saya tidak menyediakan : tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah</td>
                           <td>
                              <input class=" " type="radio" name="13" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="13" value="0" required>T
                            </td>
                           
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">14</td>
                            <td class=" ">Saya tidak segera merendam baju & celana bekas pakai di luar rumah ledalam air panas/sabun</td>
                            <td>
                              <input class=" " type="radio" name="14" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="14" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">15</td>
                            <td class=" ">Saya selalu minum air 15 menit sekali</td>
                            <td>
                              <input class=" " type="radio" name="15" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="15" value="0" required>T
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">16</td>
                            <td class=" ">Saya tidak segera mandi keramas setelah saya tiba di rumah</td>
                            <td>
                              <input class=" " type="radio" name="16" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="16" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">17</td>
                            <td class=" ">Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</td>
                            <td>
                              <input class=" " type="radio" name="17" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="17" value="0" required>T
                            </td>
                            
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">18</td>
                            <td class=" ">Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                             <td>
                                <input class=" " type="radio" name="18" value="1" required>Y
                              </td>
                              <td>
                                <input class=" " type="radio" name="18" value="0" required>T
                              </td>
                            </tr>

                          <tr class="even pointer">
                            
                            <td class=" ">19</td>
                            <td class=" ">Saya tidak jalan kaki/berolah raga minimal 30 menit setiap hari</td>
                            <td>
                              <input class=" " type="radio" name="19" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="19" value="0" required>T
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">20</td>
                            <td class=" ">Saya jarang minum vitamin C & E, dan kurang tidur</td>
                            <td>
                              <input class=" " type="radio" name="20" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="20" value="0" required>T
                            </td>
                          </tr>
                          <tr class="even pointer">
                            
                            <td class=" ">22</td>
                            <td class=" ">Usia saya diatas 60 tahun </td>
                           <td>
                              <input class=" " type="radio" name="21" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="21" value="0" required>T
                            </td>
                       
                          </tr>
                          <tr class="odd pointer">
                            
                            <td class=" ">22</td>
                            <td class=" ">Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</td>
                            <td>
                              <input class=" " type="radio" name="22" value="1" required>Y
                            </td>
                            <td>
                              <input class=" " type="radio" name="22" value="0" required>T
                            </td>
                          </tr>
                          <tr>
                            <td colspan="4">
                              <div align="center">
                                <button type="submit" autofocus name="hasil" class="btn btn-success">AL - HASIL !!!</button>
                              </div>
                            
                            </td>                            
                          </tr>
                        </tbody>
                      </table>
                      <center>
                        <p><strong>Created by</strong> <a href="https://github.com/muhyiabdulb" target="blank"> : @Muhyi Abdul Basith</a></p>
                        <b><u> Copyright © 2020 PeriksaCovid-19</u></b>
                      </center>
                    </div>
                  </form>
        <!--  last page content -->
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
