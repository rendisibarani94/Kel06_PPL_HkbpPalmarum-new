@include('layouts.user.header')
@include('layouts.user.navbar')

<section class="container border">
        <br>
            <div class="row">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h1>Jemaat Pindah HKBP Palmarum</h1><br>
                        <h2>Jemaat Pindah</h2><br>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
                    </div>
                    <div class="col-md-4 py-5"><br><br>
                        <img class="w-100" src="D:\yppa\templatemo_559_zay_shop\assets\img\pexels-photo-13899668 1.png">
                    </div>
                </div>

                <div class="title">----------Jemaat Pindah----------</div><br>
        <div class="content">
            <form>
                 <label for="nama">Nama Anggota Keluarga yang Pindah</label><br>
                 <input type="text" placeholder="Masukkan Anggota Keluarga" id="nama" name="nama"><br><br>

                 <label for="wijk">Wijk</label><br>
                 <input type="text" placeholder="Masukkan Wijk" id="wijk" name="wijk"><br><br>

                 <label for="alamat">Alamat Baru</label><br>
                 <input type="text" placeholder="Jl.Loeis Avreldo Lubis No. 16, Tarutung." id="alamat" name="alamat"><br><br>

                 <label for="gereja">Nama Gereja</label><br>
                 <input type="text" placeholder="cth: Gereja Katolik Santa Maria Tarutung" id="info" name="info"><br><br>
                 
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