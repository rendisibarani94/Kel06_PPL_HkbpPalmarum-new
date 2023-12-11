@include('layouts.user.header')
@include('layouts.user.navbar')

<section class="container border">
        <br>
            <div class="row">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h1>Sidi HKBP Palmarum</h1><br>
                        <h2>Naik Sidi</h2><br>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
                    </div>
                    <div class="col-md-4 py-5"><br><br>
                        <img class="w-100" src="D:\yppa\templatemo_559_zay_shop\assets\img\IMG_7610 1.png">
                    </div>
                </div>

                <div class="title">----------Pendaftaran Sidi HKBP Palmarum----------</div><br>
        <div class="content">
            <form>
                <form>
                    <label for="nama">Nama Lengkap</label><br>
                    <input type="text" placeholder="Masukkan Nama Lengkap" id="nama" name="nama"><br><br>
   
                    <label for="nama">Nama Ayah</label><br>
                    <input type="text" placeholder="Masukkan Nama Ayah"id="nama" name="nama"><br><br>
   
   
                    <label for="nama">Nama Ibu</label><br>
                    <input type="text" placeholder="Masukkan Nama Ibu"id="nama" name="nama"><br><br>
     
                    <label for="alamat">Alamat</label><br>
                    <input type="text" placeholder="Jl.Loeis Avreldo Lubis No. 16, Tarutung." id="alamat" name="alamat"><br><br>
     
                    <label for="wijk">Wijk</label><br>
                    <input type="text" placeholder="Masukkan Wijk" id="wijk" name="wijk"><br><br>
   
                    <label for="email">Email</label><br>
                    <input type="email" placeholder="akuganteng123@gmail.com" id="email" name="email"><br><br>
   
   
                    <label for="nomor">Nomor Handphone</label><br>
                    <input type="nomor" placeholder="08XXXXXXXXX" id="nomor" name="nomor"><br><br>
   
   
                    <label for="nama">Upload Akta Kelahiran</label><br>
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