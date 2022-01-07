<?php 


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="welcome.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="header">

</div>
  <div class="judul">
    <h2 class="selamat"> KAWAL CORONA</h2>
    <h5 class="selamat2">Coronavirus Global & Indonesia Live Data</h2>
    <h5 class="selamat2">Tugas Web Programming 2</h2>

</div>

  <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center">
  <div class="col">
    <div class="card">
      <img src="./assets/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./assets/2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card">
      <img src="./assets/3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./assets/4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
      </div>
    </div>
  </div>
</div>

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
</div>

          <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kementerian Kesehatan</h5>
        <p class="card-text">Media Informasi Resmi Penyakit Infeksi Emerging</p>
        <a href="https://infeksiemerging.kemkes.go.id/" class="btn btn-primary">Go</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">WHO</h5>
        <p class="card-text">Coronavirus disease (COVID-19) advice for the public</p>
        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="btn btn-primary">GO</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kawalcovid19</h5>
        <p class="card-text">Situasi Vaksinasi COVID-19 Saat Ini</p>
        <a href="https://kawalcovid19.id/vaksin" class="btn btn-primary">GO</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kompas TV</h5>
        <p class="card-text">Daftar 100 Rumah Sakit CORONA</p>
        <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona" class="btn btn-primary">GO</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
          </div>
          <div class="footer">
                <p class="right">&copy;2021 Rifki Amalun </p>
        </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

