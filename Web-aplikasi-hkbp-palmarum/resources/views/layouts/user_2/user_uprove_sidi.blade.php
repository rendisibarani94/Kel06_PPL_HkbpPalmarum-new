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
        <p>Status Pendaftaran Sidi</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon>
        </div>
    </header><br><br><br><br><br><br>   

      <div class="judul_1" id="targetElement">
        <div class="">
          <table table class="aesthetic-table-user" >
            <thead>
              <tr>
                <th  style=" font-weight:40px ;border: none; background-color: #37545f ; color:white; padding:40px;  "colspan="3">Status Pendaftaran Sidi</th>
              </tr>
              <tr>
                <th class="judul-tabel">Nama Jemaat Sidi</th>
                <th class="judul-tabel">Status</th>
              </tr>
            </thead>
            @foreach($userSidis as $data)
            @if($data['status']== 0)
            <tbody class="info-3">
              <tr>
                <td class="lebar">{{$data['nama_lengkap']}}</td>
                <td>
                  @if($data['status']== 0)
                    <label for="">Menunggu</label>
                  @elseif($data['status']== 1)  
                    <label for="">Uprove</label>
                  @elseif($data['status']== 2)  
                    <label for="">Tolak</label>
                  @endif
                </td>
              </tr>
            </tbody>
            @elseif($data['status'] == 1)
            <tbody class="info-1">
            <tr>
                <td class="lebar">{{$data['nama_lengkap']}}</td>
                <td>
                  @if($data['status']== 0)
                    <label for="">Belum Uprove</label>
                  @elseif($data['status']== 1)  
                    <label for="">Uprove</label>
                  @elseif($data['status']== 2)  
                    <label for="">Tolak</label>
                  @endif
                </td>
              </tr>
            </tbody>
            @elseif($data['status'] == 2)
            <tbody class="info-2">
            <tr>
                <td class="lebar">{{$data['nama_lengkap']}}</td>
                <td>
                  @if($data['status']== 0)
                    <label for="">Belum Uprove</label>
                  @elseif($data['status']== 1)  
                    <label for="">Uprove</label>
                  @elseif($data['status']== 2)  
                    <label for="">Tolak</label>
                  @endif
                </td>
              </tr>
            </tbody>
            @endif
            @endforeach
          </table>
        </div>
      </div><br><br><br><br><br><br>
      
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
<script src="{{asset('Style')}}/style.js"></script>
</html>
