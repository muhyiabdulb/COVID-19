<?php 

  session_start();
  require 'config/koneksi.php';
  if (!isset($_SESSION["mulai"])) {
    header("Location: index.php");
    exit;
  }
  if(isset($_POST['lanjut'])){
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['jk'] = $_POST['jk'];
    $_SESSION['usia'] = $_POST['usia'];
    $_SESSION['biodata'] = true;
    echo "<script>alert('SELAMAT DATANG ".$_SESSION['nama']."');document.location.href='test.php';</script>";
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
	  
    <title>Kuyy Isi Biodata... </title>

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
  </head>

  <body>
    <div class="container body">
      <div class="main_container">
        
        <!-- page content -->
          <div class="right_col" role="main"> 
            <div class="page-title">
              <div class="clearfix">
                
              </div>
              
                <div class=" col-sm-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Isi biodata anda</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="nama" name="nama" required="required" class="form-control" autofocus="autofocus">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin <span class="re">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                          <div id="jk" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="L" class="join-btn" required="required"> &nbsp; Laki-laki &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="P" class="join-btn" required="required"> Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="usia">Usia<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="usia" name="usia" class="date-picker form-control" autofocus="autofocus" required="required" type="number">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3" align="center">
                          <button type="submit" autofocus  value="Lanjut!" name="lanjut" class="btn btn-success">Lanjut!</button>
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <center>
                        <p><strong>Created by</strong> <a href="https://github.com/muhyiabdulb" target="blank"> : @Muhyi Abdul Basith</a></p>
                        <b><u> Copyright © 2020 PeriksaCovid-19</u></b>
                      </center>
                    </form>
                  </div>
                    </div>
                  </div>
                </div>
              
              
            </div>
          </div>
        </div>
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
