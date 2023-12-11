@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Jemaat Yang Berujung Hidup HKBP Palmarum</title>

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
        <p>Jemaat Meninggal HKBP Palmarum</p>
        
        <div class="mouse">
          <ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon>
        </div>
    </header>
    <main>
    <h1>Pendaftaran Baptis HKBP Palmarum</h1>
       <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{asset('Style')}}//image/meninggal.jpeg" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Jemaat Meninggal HKBP Palmarum</h3>
              <p>ext commonly used to demonstrate the visual form of a 
                    document or a typeface without relying on meaningful content. 
                    Lorem ipsum may be used as a placeholder before final copy is 
                    available. It is also used to temporarily replace text in a
                     process called greeking, which allows designers to consider</p>
            </div>
          </div>
          
          <div class="card_1">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Jemaat Meninggal HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form>
              <div class="form-group">
                <label for="name">Nama lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('nama_depan') }}" placeholder="Masukkan nama dan nama panggilan beliau " required/>
              </div>    
              <div class="form-group">
                <label for="name">Tanggal lahir</label>
                <input type="text" id="name" name="name" value="{{ old('nama_depan') }}" placeholder="Masukkan tanggal lahir beliau" />
              </div>
              <div class="form-group">
                <label for="name">Tanggal Meninggal</label>
                <input type="text" id="name" name="name" value="{{ old('nama_depan') }}" placeholder="Masukkan tanggal meninggal beliau" />
              </div>
              <div class="form-group">
                <label for="name">Tutup Umur</label>
                <input type="text" id="name" name="name" value="{{ old('nama_depan') }}" placeholder="Masukkan tanggal tutup umur beliau" />
              </div>
              <div class="form-group">
                <label for="name">Tanggal Pemakaman</label>
                <input type="text" id="name" name="name" value="{{ old('nama_depan') }}" placeholder="Masukkan tanggal pemakaman beliau" />
              </div>
              <div class="form-group">
                <label for="name">Wijk</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan Wijk" />
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