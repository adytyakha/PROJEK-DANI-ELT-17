<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dani ELT | Daftar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index.php"><b>DANI</b>ELT</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

     <form action="db/daftar.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan Username</label>
                  <input name="username" type="Username" class="form-control" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Masukkan Password</label>
                  <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputNama">Masukkan Nama Anda</label>
                  <input name="nama" type="Username" class="form-control" id="exampleInputNama" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputAlamat">Masukkan Alamat Anda</label>
                  <input name="alamat" type="Alamat" class="form-control" id="exampleInputAlamat" placeholder="Alamat Anda">
                </div>
                       <div class="form-group">
                  <div class="jk">Pilih Jenis Kelamin : <br>
                    <label>
                      <input name="jenis_kelamin" type="radio" name="jenis_kelamin" id="optionsRadios1" value="laki" checked>
                      Laki-laki      
                    </label> <br>
                     <label>
                      <input  name="jenis_kelamin" type="radio" name="jenis_kelamin" id="optionsRadios2" value="perempuan">
                      Perempuan
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="agama" class="form-control">
                    <option name="agama">Islam</option>
                    <option name="agama">Kristen</option>
                    <option name="agama">Hindu</option>
                    <option name="agama">Budha</option>
                    <option name="agama">Atheis</option>
                  </select>
                </div>
                  <div class="form-group">
                  <div class="radio">Level :  <br>
                    <label>
                      <input type="radio" name="level" id="optionsRadios1" value="option1" checked>
                      admin
                    </label>
                    <label>
                      <input type="radio" name="level" id="optionsRadios3" value="option3" disabled>
                      User
                    </label>
                  </div>
                </div>

              </div>



      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button name="daftar" type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
