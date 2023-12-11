@include('layouts.user.header')
@include('layouts.user.navbar')

<section class="container border">
        <br>
            <div class="row">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h1>Pendaftaran Baptis</h1><br>
                        <h2>Baptis</h2><br>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
                    </div>
                    <div class="col-md-4 py-5"><br><br>
                        <img class="w-100" src="D:\yppa\templatemo_559_zay_shop\assets\img\d4ae688ee77e44f480a2f4643646004d 1.png">
                    </div>
                </div>

                <div class="title">----------Pendaftaran Baptis----------</div><br>
                <form>
                     <label for="nama">Nama Lengkap Anak</label><br>
                     <input type="text" placeholder="Masukkan Nama Anak" id="nama" name="nama"><br><br>
    
                     <label for="tanggal-lahir">Tanggal Lahir</label><br>
                     <input type="date" id="tanggal-lahir" name="tanggal-lahir"><br><br>
    
                     <label for="tanggal-baptis">Tanggal Baptis</label><br>
                     <input type="date" id="tanggal-baptis" name="tanggal-baptis"><br><br>
    
                    <label for="nama">Nama Ayah</label><br>
                     <input type="text" placeholder="Masukkan Nama Ayah"id="nama" name="nama"><br><br>
    
                     <label for="nama">Nama Ibu</label><br>
                     <input type="text" placeholder="Masukkan Nama Ibu"id="nama" name="nama"><br><br>
                     
                    <div class="form-wrapper">
                        <form>
                        <!-- Field input lainnya -->
                        <input type="submit" value="Submit" class="submit-btn"><br><br>
                        </form>
                    </div>
    
    
                </form>
    
            </div>
    
    </section>
    <br>
    @include('layouts.user.footer')