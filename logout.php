<!DOCTYPE html>
<html>
<?php
   session_start();
   session_destroy();
   echo "<head>";
   echo "<meta http-equiv='refresh' content='1; url=login.php'>";
?>
<?php include "parts/head.php"; ?>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="login-logo">
      <a href="#"><b>🔓</b></a>
    </div>
    <div class="text-center">
      <h2>Anda telah keluar..!</h2>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
  <!-- Bootstrap 3.3.7 -->
  <!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
</script>
</body>
</html>
