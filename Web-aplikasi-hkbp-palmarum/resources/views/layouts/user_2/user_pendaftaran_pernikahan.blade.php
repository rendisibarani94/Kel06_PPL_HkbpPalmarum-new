@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pernikahan</title>
    <link rel="stylesheet" href="../styles/styles.css">
    
    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
  <div id="loading-indicator">
    <img src="{{asset('Style')}}/image/loading2.gif" alt="Loading..." />
  </div>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Pendaftaran Jemaat Menikah</p>
        
        <div class="mouse">
          <ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon>
        </div>
    </header>
    <main>
    
    <h1>Pendaftaran Nikah HKBP Palmarum</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('Style') }}/image/pernikahan.png" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Nikah</h3><br>
              <p>Dalam pandangan Kristen, pernikahan secara hakiki bukan hanya sesuatu yang bersifat kemasyarakatan, 
                tapi juga mempunyai aspek kekudusan. Pernikahan dilihat sebagai suatu persekutuan badaniah dan 
                rohaniah antara seorang laki-laki dan perempuan untuk membentuk suatu lembaga.</p>
            </div>
          </div>
          
          <div class="card_1" id="targetElement">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Pendaftaran Pernikahan HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form method="post" action="{{route('registrasiNikah')}}">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="name">Nama Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_lengkap_laki" value="{{ old('nama_lengkap_laki') }}" placeholder="Masukkan tanggal martumpol anda" required/>
              </div> 
              <div class="form-group">
                <label for="name">Nama Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_lengkap_perempuan" value="{{ old('nama_lengkap_perempuan') }}" placeholder="Masukkan tanggal martumpol anda" required/>
              </div> 
              <div class="form-group">
                <label for="name">Tanggal Martumpol</label>
                <input type="date" id="name" name="tgl_martumpol" value="{{ old('tgl_martumpol') }}" placeholder="Masukkan tanggal martumpol anda" required/>
              </div>    
              <div class="form-group">
                <label for="name">Nama Gereja Martumpol</label>
                <input type="text" id="name" name="nama_gereja_martumpol" value="{{ old('nama_gereja_martumpol') }}" placeholder="Masukkan nama gereja martumpol anda" required/>
              </div>
              <div class="form-group">
                <label for="name">Tanggal Pemberkatan</label>
                <input type="date" id="name" name="tgl_pemberkatan" value="{{ old('tgl_pemberkatan') }}" placeholder="Masukkan rencana tanggal pemberkatan" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Pemberkatan</label>
                <input type="text" id="name" name="nama_gereja_pemberkatan" value="{{ old('nama_gereja_pemberkatan') }}" placeholder="Masukkan nama gereja pemberkatan" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_gereja_laki" value="{{ old('nama_gereja_laki') }}" placeholder="Masukkan nama gereja mempelai laki-laki" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_ayah_laki" value="{{ old('nama_ayah_laki') }}" placeholder="Masukkan nama ayah mempelai laki-laki" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_ibu_laki" value="{{ old('nama_ibu_laki') }}" placeholder="Masukkan nama ibu mempelai laki-laki" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_gereja_perempuan" value="{{ old('nama_gereja_perempuan') }}" placeholder="Masukkan nama gereja mempelai perempuan" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_ayah_perempuan" value="{{ old('nama_ayah_perempuan') }}" placeholder="Masukkan nama ayah mempelai perempuan" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_ibu_perempuan" value="{{ old('nama_ibu_perempuan') }}" placeholder="Masukkan nama ibu mempelai perempuan" required/>
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" value="{{ old('keterangan') }}" placeholder="masukkan keterangan terkait jika dibutuhkan" />
              </div>
              <input type="hidden" name="id_user" value="{{ Auth::id() }}">
              <div style="text-align: right; margin-top: 40px;">
                 <input type="submit" value="daftar"/>
              </div>
             
            </form>
          </div>
          
          
 
    </main>
    <footer>
       <div class="footer_1">
        <img src="{{ asset('Style') }}/image/logo_putih.png" alt="Foto">
            <div class="teks">
            <h1>
                PALMARUM
            </h1>
            <P>Stadion Tarutung,        <br>
                Hutatoruan VI,          <br>
                Kec. Tarutung,          <br>
                Kabupaten Tapanuli      <br>
                Utara, Sumatera Utara   <br>
                22411</P> 
            </div>
            
       </div>
	
	</footer>
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
  </script>
</body>
</html>