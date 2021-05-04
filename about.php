<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
    <title>SI CABAI MERAH</title>
         <script src="http://maps.googleapis.com/maps/api/js"></script>
     <script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form

    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.6668227,111.4636372,16),
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
</head>

<body>

    <nav>
      
        <ul>
                    <li>
                <a href="index.php">Beranda</a>
            </li>
         <li>
                <a href="Budidaya.php">Budidaya Cabai Merah</a>
            </li>
          <li>
      <a href="Penyakit.php">Jenis Penyakit</a>
            </li>
            <li>
                <a href="about.php">Profil Desa</a>
            </li>
           
        </ul>
    </nav>

  <main>

    <h2 class="page-heading">Desa Kerik </h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-image">
           <div id="googleMap" style="width:100%;height:500px;"></div>
          </div>
          <div class="card-description" text-align: justify ;>
            <h3>Petani Cabai Desa Kerik</h3>
            <p>Desa Kerik terdapat di kecamatan Takeran Kabupaten Magetan provinsi Jawa Timur. Penduduk di Desa Kerik sebagian besar berptofesi sebagai petani, dimana petani di desa kerik lebih banyak berfokus kepada tanaman padi dan kacang tanah. disisi lain ada sebagian petani yang menanam sayuran dan buah buahan seperti melon, semangka dan labu. belakangan ini banyak keluhan dari petani yang berfokus di tanaman padi dan kacang tanah, mereka mengeluhkan tentang harga dan masa panen dari kedua tanaman tersebut, mereka mengganggap kedua tanaman tersebut kurang efisien dan menguntungkan apalagi di masa pandemi seperti sekarang yang sedang berlangsung. harga hasil panen dari padi dan kacang tanah di masa pandemi harganya semakin anjlok dan tidak dapat menutup modal penanaman dan perawatan, dan dari segi penyaluran atau penjualannya dirasa tidak mudah.  </p>
           <p>Sedangkan di sisi lain petani cabai justru tidak terpengaruh dengan efek pandemi, karena harga dan penyaluran hasil panen masih stabil dan mudah malah terhitung harga jual mahal dan menguntungkan, tanaman cabai di rasakan lebih menguntungkan karena tanaman cabai dapat di panen 2 hari sekali dan dapat langsung dijual ketengkulak maupun langsung ke konsumen, sedangkan hasil padi dan kacang tanah harus menunggu 3 bulan untuk masa panennya dan harganya pun sangat-sangat anjlok. maka daripada itu tanaman cabai lebih dapat diandalkan dan efisien dari segi masa panen dan harga pun lebih dapat menjanjikan, apalagi di masa pandemi seperti sekarang ini. </p>

            <p>Para Petani cabai di desa kerik tidak hanya menjual hasil panennya langsung ke tengkulak saja, namun juga memasarkan hasil panennya di marketplace seperti forum facebook di kawasan madiun, magetan dan nganjuk dengan begitu tentunya jangkauan dari penjualan dari hasil panen lebih luas dan sekalian sebagai ajang promosi petani cabai desa kerik, karena terhitung dari beberapa petani cabai di desa kerik  berhasil dan mendapatkan keuntungan yang cukup besar dan dengan begitu dapur tetap ngebul dan tidak pusing di masa pandemi. Dengan kasus tersebut budidaya tanaman cabai dapat dijadikan sebuah sarana pertahanan ekonomi di masa pandemi.</p>
          </div>
        </div>

      </section>

    
    </div>


  </main>

  <script src="style/main.js"></script>
</body>

</html>