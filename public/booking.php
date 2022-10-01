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
    <title>Booking</title>
  </head>
  <body>
    <header>
      <!-- Navigation -->
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light shadow-sm fixed-top"
      >
        <div class="container">
          <a class="navbar-brand p-0" href="./index.php"
            ><img
              src="../src/img/navbar/EWisata.png"
              alt="logo"
              width="125"
              height="58"
          /></a>
        </div>
      </nav>
      <!-- End of Navigation -->
    </header>

    <!-- Booking -->
    <div class="container-fluid mt-5 pt-5 pb-5 banner">
      <div class="container">
        <h2 class="display-6 text-center fw-bold" id="pesan">Form Pemesanan</h2>

        <div class="row pt-4 gx-4 gy-4">
          <div class="mb-3">
            
            <form action="" method="post">
              <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label"
                  >Nama Lengkap</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    placeholder="Masukan nama lengkap anda"
                    name="nama"
                    
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="noId" class="col-sm-2 col-form-label"
                  >Nomor Identitas</label
                >
                <div class="col-sm-10">
                  <input
                    type="number"
                    class="form-control"
                    id="noId"
                    placeholder="Masukan nonor identitas anda"
                    name="noId"
                    
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="noHp" class="col-sm-2 col-form-label"
                  >Nomor Handphone</label
                >
                <div class="col-sm-10">
                  <input
                    type="number"
                    class="form-control"
                    id="noHp"
                    placeholder="Masukan nomor hp anda"
                    name="noHp"
                    
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="temWisata" class="col-sm-2 col-form-label"
                  >Tempat Wisata</label
                >
                <div class="col-sm-10">
                  <select
                    class="form-control form-control-lg dropdown"
                    name="temWisata"
                    id="temWisata"
                    required
                  >
                    <option value="#">Pilih</option>
                    <option value="Kampung Cai Ranca Upas">Kampung Cai Ranca Upas</option>
                    <option value="Kawah Putih Ciwidey">Kawah Putih Ciwidey</option>
                    <option value="Orchid Forest Cikole">Orchid Forest Cikole</option>
                    <option value="The Great Asia Africa">The Great Asia Africa</option>
                    <option value="Dago Dream Park">Dago Dream Park</option>
                    <option value="Fairy Garden">Fairy Garden</option>
                    <option value="Gunung Putri Lembang">Gunung Putri Lembang</option>
                    <option value="Bukit Moko">Bukit Moko</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="jadwal" class="col-sm-2 col-form-label"
                  >Jadwal Kunjungan</label
                >
                <div class="col-sm-10">
                  <input
                    type="date"
                    class="form-control"
                    id="jadwal"
                    name="jadwal"
                    
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="penDewasa" class="col-sm-2 col-form-label"
                  >Pengunjung Dewasa</label
                >
                <div class="col-sm-10">
                  <input
                    type="number"
                    class="form-control"
                    id="penDewasa"
                    name="penDewasa"
                    placeholder="Masukan jumlah pengunjung dewasa"
                    required
                  />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="penAnak" class="col-sm-2 col-form-label"
                  >Pengunjung anak<br /><small
                    >Usia di bawah 12 tahun</small
                  ></label
                >
                <div class="col-sm-10">
                  <input
                    type="number"
                    class="form-control"
                    id="penAnak"
                    name="penAnak"
                    placeholder="Masukan jumlah pengunjung anak-anak"
                    required
                  />
                </div>
              </div>             
              

              <?php
              // menampung isi semua var
							if(isset($_POST['submit'])){
							$namaLengkap = $_POST['nama'];
							$nomorIdentitas = $_POST['noId'];
							$nomorHandphone = $_POST['noHp'];
							$tempatWisata = $_POST['temWisata'];
							$jadwalKunjungan = $_POST['jadwal'];
							$pengunjungDewasa = $_POST['penDewasa'];
							$pengunjungAnak = $_POST['penAnak'];
							$hargaTiket = 0;
              
							
              // memberikan harga tiket pada destinasi tepat
							if ($tempatWisata == "Kampung Cai Ranca Upas") {
								$hargaTiket = 30000;
							} else if ($tempatWisata == "Kawah Putih Ciwidey"){
								$hargaTiket = 80000;
							} else if ($tempatWisata == "Orchid Forest Cikole"){
								$hargaTiket = 40000;
							} else if ($tempatWisata == "The Great Asia Africa"){
								$hargaTiket = 50000;
							} else if ($tempatWisata == "Dago Dream Park"){
								$hargaTiket = 30000;
							} else if ($tempatWisata == "Fairy Garden"){
								$hargaTiket = 40000;
							} else if ($tempatWisata == "Gunung Putri Lembang"){
								$hargaTiket = 10000;
							} else if ($tempatWisata == "Bukit Moko"){
								$hargaTiket = 30000;
							} else {
								$hargaTiket = 0;
							}
							
              // operasi matematika untuk total harga
							$hargaDewasa = $pengunjungDewasa * $hargaTiket;
							$hargaAnak = ($pengunjungAnak * 0.5) * $hargaTiket;
							$totalHarga = $hargaDewasa + $hargaAnak;
              
            }
							echo "<p>harga Tiket</p>";
							if(isset($_POST['submit'])){
							echo "<p>"."Rp.".$hargaTiket."</p>";
							}
							echo "<p>Total bayar</p>";
							if(isset($_POST['submit'])){
							echo "<p>"."Rp.".$totalHarga."</p>";
							}

              // data untuk server
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "vsga-jwd";

              // Membuat koneksi
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Cek koneksi
              if ($conn->connect_error) {             
              die("Connection failed: " . $conn->connect_error);
              }

              if(isset($_POST['submit'])){
              // query untuk memasukkan nilai ke database mysql
              $sql = "INSERT INTO tb_booking (nama, no_id, no_hp, destinasi, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar) 
              VALUES ('$namaLengkap', '$nomorIdentitas', '$nomorHandphone', '$tempatWisata', '$pengunjungDewasa', '$pengunjungAnak', '$hargaTiket', '$totalHarga')";
              
              // if else untuk response apabila berhasil konek atau tidak
              if ($conn->query($sql) === TRUE) {              
              echo "New record created successfully";
              } else {              
              echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $conn->close();
            }

							?>

              <div class="form-check pb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                  <label class="form-check-label" for="flexCheckDefault">
                    Saya dan/ atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah diteteapkan
                  </label>
              </div>
              <div class="row-md-3 mx-auto text-center">
                <button
                  type="submit"
                  value="kalkulasi"
                  name="kalkulasi"
                  class="btn btn-danger btn-lg"
                  disabled
                >
                  Hitung Total Bayar
                </button>
                <button
                  type="submit"
                  value="submit"
                  name="submit"
                  class="btn btn-danger btn-lg"
                >
                  Pesan Tiket
                </button>
                <a href="./index.php">
                  <button type="button" class="btn btn-danger btn-lg">
                    Cancel
                  </button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Booking -->
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
