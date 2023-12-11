@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jemaat Pindah</title>
    <link rel="icon" href="{{asset('Style/img/logo.png')}}" type="image/x-icon">

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
        <p>Jemaat Pindah HKBP Palmarum</p>
        
        <div class="mouse">
          <ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon>
        </div>
    </header>
    <main>
    
    <h1>Pendaftaran Jemaat Pindah</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('Style') }}/image/pindah.png" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Jemaat Pindah</h3><br>
              <p>Jemaat sah HKBP Palmarum Tarutung yang ingin pindah jemaat menjadi jemaat gereja lain, 
                maka wajib melakukan pendaftaran jemaat pindah agar sah tidak lagi menjadi jemaat HKBP Palmarum Tarutung</p>
            </div>

          </div>
          
          <div class="card_1" id="targetElement">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Jemaat Pindah HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form method="post" action="{{route('registrasiPindah')}}">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="name">Nama Jemaat</label>
                <!-- <input type="text" id="name" name="id_jemaat" placeholder="Asexxxx , bxxxxx, Cxxxxx" /> -->
                <select class="pilihan" name="id_jemaat">
                  <option value="{{ old('id_jemaat') }}">Pilih Nama Anda Sebagai Mempelai Laki-Laki</option>
                  @foreach($jemaats as $data)
                    <option value="{{$data['id_jemaat']}}">{{$data['nama_depan']}}&nbsp{{$data['nama_belakang']}}</option>
                  @endforeach
                </select>
              </div> 
              <div class="form-group">
                <label for="name">Nama Keluarga</label>
                <!-- <input type="text" id="name" name="id_registrasi" placeholder="Asexxxx , bxxxxx, Cxxxxx" /> -->
                <select class="pilihan" name="id_registrasi">
                  <option value="{{ old('id_registrasi') }}">Pilih Nama Anda Sebagai Mempelai Laki-Laki</option>
                  @foreach($namKeluargas as $data)
                    <option value="{{$data['id_registrasi']}}">{{$data['nama_keluarga']}}</option>
                  @endforeach
                </select>
              </div>  
              <div class="form-group">
                <label for="name">Tanggal Pindah</label>
                <input type="date" id="name" name="tgl_pindah" value="{{ old('tgl_pindah') }}" placeholder="Masukkan rencana tanggal pindah" required/>
              </div>
              <div class="form-group">
                <label for="name">Gereja Tujuan</label>
                <input type="text" id="name" name="nama_gereja" value="{{ old('nama_gereja') }}" placeholder="cnth : Gereja Katedral Jakarta Jl. Katedral No. 7B Jakarta Pusat 10110 Indonesia" required/>
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan keterangan jika dibutuhkan" />
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
        	<img src="{{ asset('Style') }}/image/logo_putih.png" alt="HKBP PALMARUM">
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