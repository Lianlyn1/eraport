<style>
  .jumbotron{
    background-image:url('images/mts1.png');
    width:100%;
    height:500px;
    background-size:cover;
    
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Landing Page</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">MTs NU Miftahul Ulum Margasari</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-primary btn-sm text-white" href="eraport.php">Login</a>
        </li>
        <li>
        <a href="cek_login.php" class="nav-link ml-3 btn btn-primary btn-sm text-white">Registrasi</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <header class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4 text-white mt-5">Selamat Datang Di Website Restoran Kami</h1>
      <p class="lead text-white">Kami Senantiasa Melayani Anda Dengan Sepenuhnya.</p>
    </div>
  </header>

  <section class="container">
    <div class="row">
      <div class="col text-center mb-3">
        <h2>Tentang Kami</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h2>Pelayanan</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, lacus at consectetur tristique.</p>
      </div>
      <div class="col-md-4">
        <h2>Service</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, lacus at consectetur tristique.</p>
      </div>
      <div class="col-md-4">
        <h2>Informasi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, lacus at consectetur tristique.</p>
      </div>
    </div>
  </section>

  <footer class="bg-light text-center py-4">
    <p>Developer <?php echo date('Y')?> By:Ardi</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>