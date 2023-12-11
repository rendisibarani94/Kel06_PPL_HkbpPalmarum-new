@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Naik Sidi HKBP Palmarum</title>
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
        <p>Pendaftaran Naik Sidi</p>
        
        <div class="mouse">
          <ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon>
        </div>
    </header>
    <main>
    
        <h1>Pendaftaran Sidi</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('Style') }}/image/sidi.JPG" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Sidi</h3><br>
              <p>Malua/Naik Sidi merupakan suatu pemberkatan terhadap umat Gereja yang sudah dianggap dewasa, 
                dan sudah bisa membedakan mana yang baik dan yang baik menurut ajaran Yesus. Malua atau naik sidi 
                membuktikan bahwa kita menerima Tuhan Yesus dan bersaksi untuknya serta masuk dalam perjamuan-Nya.</p>
            </div>
          </div>
          
          <div class="card_1" id="targetElement">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-right: 10px; margin-bottom: 9px;">
            </span>Pendaftaran Sidi HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
        </h1>

     
            <form method="post" action="{{route('registrasiSidi')}}">
              @csrf
              @method('post')
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukkan Nama Lengkap Anda" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah</label>
                <input type="text" id="nama Ayah" name="nama_ayah" value="{{ old('nama_ayah') }}" placeholder="Masukkan Nama Ayah Anda" required/>
              </div>     
              <div class="form-group">
                <label for="name">Nama Ibu</label>
                <input type="text" id="name" name="nama_ibu" value="{{ old('nama_ibu') }}" placeholder="Masukkan Nama Ibu Anda" required/>
              </div>
              <div class="form-group">
                <label for="name">Tempat Lahir</label>
                <input type="text" id="name" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir Anda" required/>
              </div>
              <div class="form-group">
                <label for="name">Tanggal Lahir</label>
                <input type="date" id="name" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir Anda" required/>
              </div>
              <div class="form-group">
                <label for="name">Gereja</label>
                <!-- <input type="date" id="name" name="id_gereja_sidi" placeholder="Masukkan Tanggal Lahir Anda" /> -->
                <select class="pilihan" name="id_gereja_sidi">
                  <option value="{{ old('id_gereja_sidi') }}">Pilih Gereja Anda</option>
                  @foreach($gerejas as $data)
                    <option value="{{$data['id_gereja']}}">{{$data['nama_gereja']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Non-HKBP</label>
                <input type="text" id="name" name="nama_gereja_non_hkbp" value="{{ old('nama_gereja_non_hkbp') }}" placeholder="Masukkan asal gereja Non HKBP" required/>
              </div>
              <div class="form-group">
                <label for="name">Status Keluarga</label>
                <!-- <input type="text" id="name" name="id_hub_keluarga" placeholder="Asal gereja Non HKBP" /> -->
                <select class="pilihan" name="id_hub_keluarga">
                  <option value="{{ old('id_hub_keluarga') }}">Pilih Status Didalam Keluarga</option>
                  @foreach($keluargas as $data)
                    <option value="{{$data['id_hub_keluarga']}}">{{$data['nama_hub_keluarga']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan keterangan yang terkait" />
              </div>
              <input type="hidden" name="id_user" value="{{ Auth::id() }}">
              <!-- upload foto -->
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