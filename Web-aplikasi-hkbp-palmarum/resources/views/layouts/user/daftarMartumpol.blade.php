@include('layouts.user.header')
@include('layouts.user.navbar')

<section class="container border">
        <br>
            <div class="row">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h1>Pendaftaran Martumpol HKBP Palmarum</h1><br>
                        <h2>Martumpol Palmarum</h2><br>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
                    </div>
                    <div class="col-md-4 py-5"><br><br>
                        <img class="w-100" src="D:\yppa\templatemo_559_zay_shop\assets\img\jasa-foto-dan-video-martumpol-2 1.png">
                    </div>
                </div>

                <div class="title">----------Pendaftaran Martumpol----------</div><br>
        <div class="content">
            <form>
                <label for="nama">Nama Keluarga</label><br>
                <input type="text" placeholder="Masukkan Nama Keluarga" id="nama" name="nama"><br><br>

                <label for="wijk">Wijk</label><br>
                <input type="text" placeholder="Masukkan Wijk" id="wijk" name="wijk"><br><br>

                <label for="nomor">Nomor Handphone</label><br>
                <input type="nomor" placeholder="08XXXXXXXXX" id="nomor" name="nomor"><br><br>

                <label for="alamat">Alamat</label><br>
                <input type="text" placeholder="Jl.Loeis Avreldo Lubis No. 16, Tarutung." id="alamat" name="alamat"><br><br>

                <label for="info">Info Anggota Keluarga yang akan Menikah dan Pasangan</label><br>
                <input type="text" placeholder="cth: Messi Sinaga/Pria/1 April 1990 dengan Ronaldo Situmorang/Wanita/2 Juni 1991" id="info" name="info"><br><br>
                
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