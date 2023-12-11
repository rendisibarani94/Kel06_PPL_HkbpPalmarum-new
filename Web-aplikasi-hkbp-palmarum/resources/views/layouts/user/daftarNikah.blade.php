@include('layouts.user.header')
@include('layouts.user.navbar')

<section class="container border">
        <br>
            <div class="row">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h1>Pendaftaran Pernikahan HKBP Palmarum</h1><br>
                        <h2>Pernikahan</h2><br>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
                    </div>
                    <div class="col-md-4 py-5"><br><br>
                        <img class="w-100" src="D:\yppa\templatemo_559_zay_shop\assets\img\pexels-photo-3585798 1.png">
                    </div>
                </div>

                <div class="title">----------Pendaftaran Pernikahan HKBP Palmarum----------</div><br>
                <h4> Laki-Laki </h4><br>
        <div class="content">
            <form>
                <label for="nama">Nama Lengkap</label><br>
                <input type="text" placeholder="Masukkan Nama Lengkap" id="nama" name="nama"><br><br>

                <label for="alamat">Alamat</label><br>
                <input type="text" placeholder="Jl.Loeis Avreldo Lubis No. 16, Tarutung." id="alamat" name="alamat"><br><br>

                <label for="tanggal-pernikahan">Tanggal Rencana Pernikahan</label><br>
                <input type="date" id="tanggal-pernikahan" name="tanggal-pernikahan"><br><br>

                <label for="nama">Nama OrangTua Ayah/Ibu</label><br>
                <input type="text" placeholder="Masukkan Nama OrangTua Ayah/Ibu"id="nama" name="nama"><br><br>


                <label for="nama">Upload Akta Kelahiran</label><br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
                </form><br><br>

                <label for="nama">Upload Surat Sidi</label><br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit">
                </form><br><br>

                <label for="nama">Keterangan Lainnya</label><br>
                <input type="text" placeholder="...................."id="nama" name="nama"><br><br>

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