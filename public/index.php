<?php
// Array untuk destinasi dan harga tiketnya
$destinasis = [
    [
      'Destinasi' => 'Kampung Cai Ranca Upas',
      'Harga' => 30000,
    ],

    [ 'Destinasi' => 'Kawah Putih Ciwidey',
      'Harga' => 80000,
    ],  
    [ 'Destinasi' => 'Orchid Forest Cikole',
      'Harga' => 40000,  
    ],  
    [ 'Destinasi' => 'The Great Asia Africa',
      'Harga' => 50000,  
    ],  
    [ 'Destinasi' => 'Dago Dream Park',
      'Harga' => 30000,  
    ],  
    [ 'Destinasi' => 'Fairy Garden', 
      'Harga' => 40000,  
    ],
    [ 'Destinasi' => 'Gunung Putri Lembang', 
      'Harga' => 10000,  
    ],
    [ 'Destinasi' => 'Bukit Moko',  
      'Harga' => 30000,  
    ], 
  ]; 
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap cdn -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome cdn -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <title>Landing Page</title>
  </head>
  <body>
    <header>
      <!-- Navigation -->
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light shadow-sm fixed-top"
      >
        <div class="container">
          <a class="navbar-brand p-0" href=""
            ><img
              src="../src/img/navbar/EWisata.png"
              alt="logo"
              width="125"
              height="58"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#destinasi">Destinasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tabel">Biaya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#story">Cerita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./booking.php">Booking</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of Navigation -->
    </header>
    <main>
      <!-- Banner -->
      <div class="container-fluid banner">
        <div class="container text-center">
          <h3 class="display-3">
            Sudahkah <span class="red">Berwisata</span> Bulan Ini ?
          </h3>
          <h4 class="display-6">Coba Aja <span class="red">EWisata!</span></h4>
          <div class="pt-4">
            <a href="./booking.php">
              <button type="button" class="btn btn-success btn-lg">
                Pesan Tiket
              </button>
            </a>
          </div>
        </div>
      </div>
      <!-- End of Banner -->

      <!-- Destination -->
      <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
          <h2 class="display-6 text-start fw-bold" id="destinasi">
            Destinasi Pilihan
          </h2>
          <div class="row pt-4 gx-4 gy-4">
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/kampungcai/kampungCaiArt.html">
                  <img
                    src="../src/img/destinasi/cai1.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Kampung Cai Ranca Upas</h6>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/kawahputih/kawahputihArt.html">
                  <img
                    src="../src/img/destinasi/Kaputih.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Kawah Putih Ciwidey</h6>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/orchidforest/orchidforestArt.html">
                  <img
                    src="../src/img/destinasi/orchid-forest.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Orchid Forest Cikole</h6>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/asiaafrica/asiaafricaArt.html">
                  <img
                    src="../src/img/destinasi/the-great-asia-afrika-lembang.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">The Great Asia Africa</h6>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/dagopark/dagoparkArt.html">
                  <img
                    src="../src/img/destinasi/aladdin-carpet-dago-dreampark.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Dago Dream Park</h6>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/fairygarden/fairygardenArt.html">
                  <img
                    src="../src/img/destinasi/faitygarden.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Fairy Garden</h6>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/gunungputri/gunungputriArt.html">
                  <img
                    src="../src/img/destinasi/gngputri.png"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Gunung Putri Lembang</h6>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card crop-img move">
                <a href="./article/bukitmoko/bukitmokoArt.html">
                  <img
                    src="../src/img/destinasi/bktmoko.jpg"
                    class="card-img-top"
                    width="200"
                    height="250"
                  />
                </a>
                <h6 class="card-footer">Bukit Moko</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Destination -->

      <!-- Price List-->
      <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
          <h2 class="display-6 text-start fw-bold" id="tabel">
            Daftar Harga Tiket Masuk
          </h2>
          <div class="row pt-4 pb-4">
            <table class="table text-start">
              <thead>
                <tr class="table-success">
                  <th scope="col">No</th>
                  <th scope="col">Destinasi</th>
                  <th scope="col">Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 $no = 1;
                foreach($destinasis as $destinasi){
                echo "<tr>";
                  echo "<th scope='row'>".$no."</th>";
                  echo "<td>".$destinasi['Destinasi']."</td>
                  <td>".$destinasi['Harga']."</td>";
                echo "</tr>";
                $no++;
                }
                ?> 
              </tbody>
            </table>
          </div>
        </div>
        <!-- End of Price List -->

        <!-- Story -->
        <div class="container-fluid pt-5 pb-5 bg-light">
          <div class="container">
            <h2 class="display-6 text-start fw-bold" id="story">
              Apa Kata Mereka?
            </h2>
            <div class="row pt-4 gx-5 gy-4">
              <div class="col-md-8">
                <iframe
                  class="rounded-3"
                  width="753"
                  height="510"
                  src="https://www.youtube.com/embed/CVIAtBWLNNw"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                >
                </iframe>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body bg-gray rounded-3">
                    <p>
                      <q
                        >The road to the entrance is very bad and it actually
                        has limited orchids (especially if it is compared to
                        Singapore's orchid garden) but the sceneries and
                        surrounding's are refreshingly natural. It has clean and
                        sufficient toilets. The foods and drinks' prices are
                        affordable for a tourist place. I like the wood bridge
                        and its flying fox. They observe the safety protocols
                        quite good. In the hanging bridge, they follow maximum
                        five persons in one time strictly. Unlike the other
                        tourist places in Indonesia, they follow the ticketing
                        procedures quite well though nobody check the car's
                        ticket when we exit the area.</q
                      >
                    </p>
                    <img
                      class="rounded-circle"
                      src="../src/img/story/storyprofil1.png"
                      alt="person"
                      width="73"
                      height="73"
                    />
                    <caption>
                      &NonBreakingSpace; By Wanda
                      <b>-</b>
                      <small>Traveller</small>
                    </caption>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Story -->
    </main>
    <footer>
      <div class="container text-center pt-3 pb-3">
        <img src="../src/img/navbar/EWisata.png" alt="footer" width="20%" />
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
