
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Raport Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- Favicons-->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
    <!-- Favicons-->
    
    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>


<body class="green">
  <div id="login-page" class="row">
    <div class="col s12 card-panel z-depth-4" >
      <form class="login-form" method="post" action="cek_login.php" onSubmit="return validasi_login(this);">

        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/mts.jpg" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Raport Online MTs NU MIFTAHUL ULUM MARGASARI</p>
            <div class="divider"></div>
          </div>
        </div>
        <div class="row margin">          
          <div class="input-field col s12 m12 l12  login-text">
             <select name="hak_akses">
                          <option value="pilih" disabled selected>-Pilih Hak Akses-</option>
                          <option value="Admin">Admin</option>
                          <option value="Guru">Guru</option>
                          <option value="Siswa">Siswa</option>
                        </select>
                        <label>Hak Akses</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="username">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password1" type="password" name="password1">
            <label for="password">Password</label>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="checkbox" id="lihat" onChange="getpass; lihatpassword(this.value)" >
           <label for="lihat">Tampilkan password</label>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s6 right green" type="submit" name="login">Login
                            <i class="mdi-content-send right"></i>
                          </button>
          </div>
        </div>
      </form>
    </div>
  </div>

    <!-- ================================================
    Scripts
    ================================================ -->

      <?php
  include "validasi_form.php";
  ?>
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
</body>

</html>