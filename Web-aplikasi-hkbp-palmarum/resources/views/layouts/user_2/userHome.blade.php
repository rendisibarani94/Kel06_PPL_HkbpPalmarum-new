@include('layouts.user_2.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.2/accounting.min.js"></script>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
  <div id="loading-indicator">
    <img src="{{asset('Style')}}/image/loading2.gif" alt="Loading..." />
  </div>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Beranda</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon>
        </div>
    </header>

    {{-- foto --}}
    <div id="targetElement">
      <h1 class="photo-gallery2">Pelayan Pelayan Gereja</h1>
      <div class="photo-gallery" id="photoGallery"></div>
    </div>

{{-- contoh sebelumnya --}}
    {{-- <div class="foto-container" id="targetElement">
      @foreach($pelayans as $data)
        <div class="foto-item">
            <img src="{{ asset('Style/image/')}}" alt="Foto">
            <h1 class="foto-text">{{$data['nama_lengkap']}}</h1>
            <h3 class="foto-text">Jabatan : {{$data['jabatan']}}</h3>
            <h4 class="foto-text">Tanggal Tahbisan : {{$data['tanggal_tahbisan']}}</h4>
            <p class="foto-text">{{$data['keterangan']}}</p>          
        </div>
        @endforeach 

        <!-- Tambahkan lebih banyak foto di sini jika diperlukan -->
      </div> --}}
    <div class="judul_11">
        <h1>Mengenai HKBP Palmarum</h1>
    </div>  
      <div class="card">
        <div class="image-container">
          <img src="{{ asset('Style') }}/image/gereja.jpg" alt="Foto" class="round-image" style="  width: 500px;
          height: 500px;
          border-radius: 50%;
          overflow: hidden;
          margin: 20px;">
        </div>
        <div class="text-container">
          <h3>HKBP Palmarum</h3><br>
          <p>HKBP Palmarum merupakan tempat ibadah yang berlokasi di Stadion Tarutung, Hutatoruan VI, Kec. Tarutung, 
            Kabupaten Tapanuli Utara, Sumatera Utara 22411. Dimana HKBP Palmarum ini merupakan sebuah resort 
            yang sudah cukup besar, yang mana pendeta dari gereja ini adalah Martin Gultom. Awal mula didirikannya 
            Gereja ini didirikan karena adanya pergumulan dari antar jemaat.  </p>
        </div>
      </div>
      <div class="judul_1">
        <h1>Jadwal Ibadah</h1>
        <div class="">
          <table table class="aesthetic-table" border="1">
            @foreach($jadwals as $data)
            <tr>
              <th  style=" font-weight:40px ;border: none; background-color: #37545f ; ; padding:40px;  "colspan="3">Acara Minggu</th>
            </tr>
            <tr>
              <th style=" border: none;" colspan="2"></th>
              <th style=" font-weight:40px ;border: none;">Tanggal Ibadah : {{$data['tgl_ibadah']}}</th>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td> : </td>
              <td class="kolom_2">{{$data['nyanyian_1']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">VOTUM  – INTROITUS – DOA PEMBUKA</td>
              <td>:</td>
              <td class="kolom ">{{$data['votum']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td>:</td>
              <td class="kolom 2">{{$data['nyanyian_2']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">HUKUM TAURAT</td>
              <td>:</td>
              <td class="kolom 2">{{$data['hukum_taurat']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td>:</td>
              <td class="kolom 2">{{$data['nyanyian_3']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">PENGAKUAN  DOSA</td>
              <td>:</td>
              <td class="kolom 2">{{$data['pengakuan_dosa']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td>:</td>
              <td class="kolom 2">{{$data['nyanyian_4']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">EPISTEL</td>
              <td>:</td>
              <td class="kolom 2">{{$data['epistel']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td>:</td>
              <td class="kolom 2">{{$data['nyanyian_5']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">PENGAKUAN IMAN</td>
              <td>:</td>
              <td class="kolom 2">{{$data['pengakuan_iman']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">WARTA JEMAAT + DOA SYAFAAT</td>
              <td>:</td>
              <td class="kolom 2"></td>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td>:</td>
              <td class="kolom 2">{{$data['nyanyian_6']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">KHOTBAH</td>
              <td>:</td>
              <td class="kolom 2">{{$data['khotbah']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">BERNYANYI</td>
              <td>:</td>
              <td class="kolom 2">{{$data['nyanyian_7']}}</td>
            </tr>
            <tr>
              <td class="kolom_1">DOA PENUTUP – BERKAT</td>
              <td>:</td>
              <td class="kolom 2">{{$data['doa_penutup']}}</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <div class="judul_1"><br>
      <h1>Informasi Keuangan Gereja</h1>
        <table table class="aesthetic-table2" border="1">
          <tr>
            <th style=" font-weight:40px ;border: none; background-color: #37545f ; padding:40px;">No</th>
            <th  style=" font-weight:40px ;border: none; background-color: #37545f ; ">Pemasukan Gereja</th>
            <th  style=" font-weight:40px ;border: none; background-color: #37545f ;   ">Total</th>
            <th style=" font-weight:40px ;border: none; background-color: #37545f ; padding-left:40px ; padding-right:40px ">Bentuk Pemasukan</th>
          </tr>
          @foreach($pemasukans as $data)
          <tr>
            <td class="row-number"><center>0</center></td>
            <td class="kolom_1">{{$data['nama_kategori_pemasukan']}}</td>
            <td class="kolom_2" id="formatted-amount">{{$data['total_pemasukan']}}</td>
            <td class="kolom_2">{{$data['bentuk_pemasukan']}}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="judul_1">
      <table table class="aesthetic-table2" border="1">
          <tr>
            <th style=" font-weight:40px ;border: none; background-color: #37545f ; padding:40px;">No</th>
            <th  style=" font-weight:40px ;border: none; background-color: #37545f ; ">Pengeluaran Gereja</th>
            <th  style=" font-weight:40px ;border: none; background-color: #37545f ;   ">Total</th>
            <th style=" font-weight:40px ;border: none; background-color: #37545f ;  padding-left:40px ; padding-right:40px ">Keterangan</th>
          </tr>
          @foreach($pengeluarans as $data)
          <tr>
            <td class="row-number2"><center>0</center></td>
            <td class="kolom_1">{{$data['nama_kategori_pengelaran']}}</td>
            <td class="kolom_2" id="formatted-amount">{{$data['jumlah_pengeluaran']}}</td>
            <td class="kolom_2">{{$data['keterangan_pengeluaran']}}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="judul_1">
        <h1>Informasi Kegiatan Gereja</h1>
        <div class="jadwal">
          <div class="schedule-slider">
            @foreach($kegiatans as $data)
            <div class="schedule-item">
              <h2><center>{{$data['nama_jenis_kegiatan']}}</center></h2>
              <p>tanggal : {{$data['tanggal_kegiatan']}}</p>
              <p>waktu : {{$data['waktu_kegiatan']}}</p>
              <p>Lokasi : {{$data['lokasi_kegiatan']}}</p>
              <p>deskripsi : {{$data['keterangan']}}</p>
            </div>
            @endforeach
        </div>
      </div>
      </div>
      
      @include('layouts.user_2.footer')
</body>
<script src="{{asset('Style')}}/style.js"></script>
<script>
    var scrollButton = document.getElementById('scrollButton');

    scrollButton.addEventListener('click', function() {
      var targetElement = document.getElementById('targetElement');

      if (targetElement) {
        var targetPosition = targetElement.offsetTop;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var rowNumbers = document.querySelectorAll('.row-number');

    function updateRowNumbers() {
      rowNumbers.forEach(function(row, index) {
        row.textContent = index + 1; // Mengupdate nomor urut
      });
    }

    // Panggil fungsi updateRowNumbers saat terjadi perubahan dalam tabel
    function observeTableChanges() {
      var targetNode = document.getElementById('table-body');
      var observer = new MutationObserver(function() {
        updateRowNumbers();
      });
      var config = { childList: true, subtree: true };

      observer.observe(targetNode, config);
    }

    updateRowNumbers(); // Panggil fungsi pertama kali saat halaman dimuat
    observeTableChanges(); // Memantau perubahan dalam tabel
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var rowNumbers = document.querySelectorAll('.row-number2');

    function updateRowNumbers() {
      rowNumbers.forEach(function(row, index) {
        row.textContent = index + 1; // Mengupdate nomor urut
      });
    }

    // Panggil fungsi updateRowNumbers saat terjadi perubahan dalam tabel
    function observeTableChanges() {
      var targetNode = document.getElementById('table-body');
      var observer = new MutationObserver(function() {
        updateRowNumbers();
      });
      var config = { childList: true, subtree: true };

      observer.observe(targetNode, config);
    }

    updateRowNumbers(); // Panggil fungsi pertama kali saat halaman dimuat
    observeTableChanges(); // Memantau perubahan dalam tabel
  });
</script>
<script>
  document.getElementById('loading-indicator').style.display = 'block';

  // Kirim permintaan asinkron menggunakan JavaScript atau teknik AJAX
  // Setelah respons diterima, sembunyikan GIF loading
  // Contoh penggunaan dengan teknik Fetch API
  fetch('/example')
      .then(response => {
          // Proses respons atau tindakan lain yang sesuai
      })
      .finally(() => {
          document.getElementById('loading-indicator').style.display = 'none';
      });




//foto js
const photos = [
  @foreach($pelayans as $data)
  {
    url: '{{ asset('Style/image/')}}/{{$data['photo']}}',
    descriptions: ['{{$data['nama_lengkap']}}', 'Jabatan : {{$data['jabatan']}}', 'Tanggal Tahbisan : {{$data['tanggal_tahbisan']}}', '{{$data['keterangan']}}']
  },
  @endforeach
  // Tambahkan objek lain di sini jika diperlukan
];

const photoGallery = document.getElementById("photoGallery");

photos.forEach((photo) => {
  const photoElement = document.createElement("div");
  photoElement.classList.add("photo", "fade-in");

  const imageElement = document.createElement("img");
  imageElement.src = photo.url;
  imageElement.alt = photo.descriptions[0]; // Menggunakan deskripsi pertama sebagai atribut alt

  const overlayElement = document.createElement("div");
  overlayElement.classList.add("photo-overlay");

  photo.descriptions.forEach((description, index) => {
    const descriptionElement = document.createElement("p");
    descriptionElement.classList.add("photo-text");
    descriptionElement.textContent = description;
    descriptionElement.classList.add(`description-${index + 1}`); // Menambahkan kelas CSS dengan gaya yang berbeda
    overlayElement.appendChild(descriptionElement);
  });

  photoElement.appendChild(imageElement);
  photoElement.appendChild(overlayElement);
  photoGallery.appendChild(photoElement);
});





</script>
<script src="{{asset('Style')}}/style.js"></script>
</html>
