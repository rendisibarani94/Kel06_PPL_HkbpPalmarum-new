@include('layouts.user.header')
@include('layouts.user.navbar')

<section class="container border">
        <br>
            <div class="row">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h1>Pendaftaran Jemaat Baru HKBP Palmarum</h1><br>
                        <h2>HKBP Palmarum</h2><br>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
                    </div>
                    <div class="col-md-4 py-5"><br><br>
                        <img class="w-100" src="D:\yppa\templatemo_559_zay_shop\assets\img\pexels-photo-5875282 1.png">
                    </div>
                </div>

                <div class="title">----------Pendaftaran Jemaat HKBP Palmarum----------</div><br>
        <div class="content">
            <form>
                <label for="nama">Nama Lengkap</label><br>
                <input type="text" placeholder="Masukkan Nama Lengkap" id="nama" name="nama"><br><br>

                <label for="tempat-tanggallahir">Tempat Tanggal Lahir</label><br>
                <input type="text" placeholder="Medan, 16 April 2004" id="tempat-tanggallahir" name="tempat-tanggallahir"><br><br>

                <label for="jeniskelamin">Jenis Kelamin</label><br>
                <input type="text" placeholder="laki-laki atau perempuan" id="jeniskelamin" name="jeniskelamin"><br><br>

                 <label for="gelar">Gelar</label><br>
                <input type="text" placeholder="Sarjana Terapan" id="gelar" name="gelar"><br><br>


                <label for="alamat">Alamat</label><br>
                <input type="text" placeholder="Jl.Loeis Avreldo Lubis No. 16, Tarutung." id="alamat" name="alamat"><br><br>

                <label for="golongandarah">Golongan Darah</label><br>
                <input type="text" placeholder="Golongan Darah A"id="golongandarah" name="golongandarah"><br><br>

                <label for="nomor">Nomor Handphone</label><br>
                <input type="nomor" placeholder="08XXXXXXXXX" id="nomor" name="nomor"><br><br>

                <label for="tanggal-baptis">Tanggal Baptis</label><br>
                <input type="date" id="tanggal-baptis" name="tanggal-baptis"><br><br>

                <label for="tanggal-sidi">Tanggal Sidi</label><br>
                <input type="date" id="tanggal-sidi" name="tanggal-sidi"><br><br>

                <label for="nama">Keterangan</label><br>
                <input type="text" placeholder="...................."id="nama" name="nama"><br><br>

                <label for="nama">Foto Jemaat</label><br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
                </form><br><br>

               <div class="form-wrapper">
                   <form>
                   <!-- Field input lainnya -->
                   <input type="submit" value="Next" class="submit-btn">
                   </form>
               </div>
    
    
                </form>
    
            </div>
    
    </section>
    <br>
    @include('layouts.user.footer')