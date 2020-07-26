  <?php 

  session_start();
  if (!isset($_SESSION["mulai"])) {
    header("Location: index.php");
    exit;
  }
  if (!isset($_SESSION['biodata'])) {
    header("Location: biodata.php");
    exit();
  }
  if (!isset($_SESSION['test'])) {
    header("Location: test.php");
    exit();
  }
  if (isset($_POST['kembali'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
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
    
    <title>Hasil Kamu...</title>

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
              <form method="post" action="">
                <center>
                  <h1><?php echo "Hasil ".@$_SESSION['nama']; ?><?php echo ", "; ?></h1>
                  <h3><?php echo "Resiko Anda untuk tertular penyakit COVID-19 adalah <b>".@$_SESSION['deskripsi']; "</b>"?></h2>
                    <br>
                  <h3>Ingat ! Apapun hasilnya harus TENANG dan WASPADA !!!</h3>
                  <br>
                  <br>
                  <h4>Silahkan <b>Klik tombol dibawah ini</b> untuk memulai kembali !</h4>
                  <button name="kembali" autofocus="autofocus" class="btn btn-success">Mulai lagi kuyyy!!!</button>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <p><strong>Created by</strong> <a href="https://github.com/muhyiabdulb" target="blank"> : @Muhyi Abdul Basith</a></p>
                 <b><u> Copyright © 2020 PeriksaCovid-19</u></b>
                </center>
              </form>
              <center>
              
             </center>
            </div>
          </div>

        <!--  last page content -->
      </div>
    </div>
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
