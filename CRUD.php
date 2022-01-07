<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/Animation.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="welcome.css">
<script src="assets/js/MyJS.js" type="text/javascript"></script>
<?php
// Start the session
session_start();
?>
</head>
<body>    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Selamat Datang</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Corona Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    <div class="container-fluid" style="margin-top:100px">
        <center>
        <div class="w-75">
        <?php
         include_once 'CRUD_Insert.php';
        ?>
        <table class="table">
            <thead>
                <td>No.</td>  
                <td>Nim</td>  
                <td>Nama</td>  
                <td>Matkull</td>  
                <td>Hapus/Pembaruan</td>  
            </thead>
            <tbody>
                <?php
                 include_once 'MyFrameworks/DBQuery.php';
                 DBQuery::SetDiv("SELECT * FROM bank_table order by IDNum  desc",'Gridview_mhsw_table_admin.php'); 
                ?>
            </tbody>
        </table>
        </div>
        </center>
    </div>  
    </div>
</body>

<?php
  include_once 'CRUD_Delete.php';
  include_once 'CRUD_Update.php';
?>
<div class ="container-1">
<div class="card-group">
<?php 
        $data = file_get_contents('https://api.kawalcorona.com/indonesia/');
        $indonesia = json_decode($data, true);
    ?>
  <div class="card text-white bg-danger">
    <img class="card-img-top-2" src="./assets/sad-icon.png" alt="Card image cap">
    <div class="card-body">
    <?php 
            $a=1;
            foreach($indonesia as $ina) :

          ?>
          <h5>TOTAL POSITIF</h6>
    <p class="card-text"><?= $ina['positif']; ?></p>

    <?php 
            endforeach;
            ?>
      <p class="card-text"><small class="text-muted">ORANG</small></p>
    </div>
  </div>
    <div class="card text-white bg-success">
    <img class="card-img-top-2" src="./assets/happy-icon.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">TOTAL SEMBUH</h5>
      <p class="card-text"><?= $ina['sembuh']; ?></p>
      <p class="card-text"><small class="text-muted">ORANG</small></p>
    </div>
  </div>
  <div class="card text-white bg-dark ">
    <img class="card-img-top-2" src="./assets/emoji-icon.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">TOTAL MENINGGAL</h5>
      <p class="card-text"><?= $ina['meninggal']; ?></p>
      <p class="card-text"><small class="text-muted">ORANG</small></p>
    </div>
  </div>
</div>

</div>
          </div>
          <div class="footer">
                <p class="right">&copy;2021 Rifki Amalun </p>
        </div>
</div>


</html>