Program Ewisata ini dibuat untuk mempermudah orang lain dalam memesan tiket wisata. Program ini dibuat menggunakan bahasa pemrograman **HTML (Hypertext Markup Language)**, **CSS (Cascading Style Sheet)** dan **PHP (Hypertext Preprocessor)** menggunakan Framework **Bootstrap 5**.

Berikut struktur folder dalam aplikasi ini:
```
📦proto-boost
 ┣ 📂public
 ┃ ┣ 📂article
 ┃ ┃ ┣ 📂asiaafrica
 ┃ ┃ ┃ ┣ 📜asiaafricaArt.html
 ┃ ┃ ┃ ┗ 📜styleasiaafricaArt.css
 ┃ ┃ ┣ 📂bukitmoko
 ┃ ┃ ┃ ┣ 📜bukitmokoArt.html
 ┃ ┃ ┃ ┗ 📜stylebukitmokoArt.css
 ┃ ┃ ┣ 📂dagopark
 ┃ ┃ ┃ ┣ 📜dagoparkArt.html
 ┃ ┃ ┃ ┗ 📜styledagoparkArt.css
 ┃ ┃ ┣ 📂fairygarden
 ┃ ┃ ┃ ┣ 📜fairygardenArt.html
 ┃ ┃ ┃ ┗ 📜stylefairygardenArt.css
 ┃ ┃ ┣ 📂gunungputri
 ┃ ┃ ┃ ┣ 📜gunungputriArt.html
 ┃ ┃ ┃ ┗ 📜stylegunungputriArt.css
 ┃ ┃ ┣ 📂kampungcai
 ┃ ┃ ┃ ┣ 📜kampungCaiArt.html
 ┃ ┃ ┃ ┗ 📜styleKampungCai.css
 ┃ ┃ ┣ 📂kawahputih
 ┃ ┃ ┃ ┣ 📜kawahputihArt.html
 ┃ ┃ ┃ ┗ 📜stylekawahputihArt.css
 ┃ ┃ ┗ 📂orchidforest
 ┃ ┃ ┃ ┣ 📜orchidforestArt.html
 ┃ ┃ ┃ ┗ 📜styleorchidforestArt.css
 ┃ ┣ 📜booking.php
 ┃ ┣ 📜index.php
 ┃ ┣ 📜readme.md
 ┃ ┗ 📜style.css
 ┗ 📂src
 ┃ ┗ 📂img
 ┃ ┃ ┣ 📂destinasi
 ┃ ┃ ┃ ┣ 📜1609747079374-kawah-putih-ciwidey.jpeg
 ┃ ┃ ┃ ┣ 📜aladdin-carpet-dago-dreampark.jpg
 ┃ ┃ ┃ ┣ 📜asiajumbo.jpg
 ┃ ┃ ┃ ┣ 📜bktmoko.jpg
 ┃ ┃ ┃ ┣ 📜bukitmokopic.jpg
 ┃ ┃ ┃ ┣ 📜cai1.jpg
 ┃ ┃ ┃ ┣ 📜citylight-bandung-camping-gunung-putri-104419530.jpg
 ┃ ┃ ┃ ┣ 📜dagopic.jpg
 ┃ ┃ ┃ ┣ 📜Fairy-Garden-Bandung.jpg
 ┃ ┃ ┃ ┣ 📜faitygarden.jpg
 ┃ ┃ ┃ ┣ 📜gngputri.png
 ┃ ┃ ┃ ┣ 📜Kampung-Cai-Ranca-Upas.jpg
 ┃ ┃ ┃ ┣ 📜Kaputih.jpg
 ┃ ┃ ┃ ┣ 📜Orchid-Forest-Cikole-3.jpg
 ┃ ┃ ┃ ┣ 📜orchid-forest.jpg
 ┃ ┃ ┃ ┗ 📜the-great-asia-afrika-lembang.jpg
 ┃ ┃ ┣ 📂jumbotron
 ┃ ┃ ┃ ┣ 📜africajumbo.jpg
 ┃ ┃ ┃ ┣ 📜dagojumbo.jpg
 ┃ ┃ ┃ ┣ 📜fairyjumbo.jpg
 ┃ ┃ ┃ ┣ 📜jumbo.jpg
 ┃ ┃ ┃ ┣ 📜kampungcaiArt.jpg
 ┃ ┃ ┃ ┣ 📜kawahjumbo.jpg
 ┃ ┃ ┃ ┣ 📜mokojumbo.jpg
 ┃ ┃ ┃ ┣ 📜orchidjumbo.jpg
 ┃ ┃ ┃ ┗ 📜putrijumbo.jpg
 ┃ ┃ ┣ 📂navbar
 ┃ ┃ ┃ ┗ 📜EWisata.png
 ┃ ┃ ┗ 📂story
 ┃ ┃ ┃ ┗ 📜storyprofil1.png
 ```

## Requirements

* XAMPP : PHP >= 8.0.0
* Google Chrome 
* Bootstrap >= 5.0.0 

## Instalation

* XAMPP

   Download [XAMPP](https://www.apachefriends.org/download.html) sesuai OS (Operating System) masing-masing, kemudian install sesuai petunjuk.

*  Bootstrap

   Download [Bootstrap V5.0.0](https://getbootstrap.com/docs/5.0/getting-started/download/).
   
## Usage

1. Letakan folder **proto-boost** ke dalam 
    > *C:\xampp\htdocs*  (Windows).
2. Letakan folder ** file Bootstrap V5.0.0** ke dalam 
    > *C:\xampp\htdocs\proto-boost\library*  (Windows).
   
   Kemudian, sisipkan sintaks berikut diantara tag *head*.
    ```php
    <link rel="stylesheet" type="text/css" href="library/bootstrap.css">
    ```
3. Atau Pakai CDN yang tersedia di website Bootstrap official
		Kemudian, sisipkan sintaks berikut diantara tag *head*.
    ```php
    **Syntax tersedia di website resmi**
    ```
4. Jalankan *XAMPP -> Apache*.
5. Buka Browser ketikan 
   > *localhost/proto-bost*.

## Credits

   Author: Deni 