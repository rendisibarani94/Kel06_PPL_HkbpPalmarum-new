<link rel="stylesheet" href="{{ asset('css/style2.css') }}">


<style>
    
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Martel:wght@200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Martel:wght@200&family=Montserrat:wght@100&display=swap');


*{
    margin: 0;
    padding: 0;
}
body{
   font-family: "montserrat", sans-serif; 
   font-weight: 500;
   letter-spacing: 0.3px;
}
nav{
    position: fixed;
    z-index: 1;
    width: 98%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: 25px;
    padding-right: 25px;
    height: 80px;
    background: transparent;
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
nav a{
    color: inherit;
    text-decoration: none;
    font-size: 13px;
    transition: color 0.3s;
}
nav a:hover{
    opacity: 0.8;
}
nav h3{
    font-family: 'Martel', serif;
    font-size: 30px;
    letter-spacing: 0.6px;
}

nav ul li{
    list-style: none;
    margin-left: 10px;
    margin-right: 10px;
}
nav .list-name{
    display: none;
}
ion-icon{
    font-size: 16px;
}
nav .burger-bar{
    font-size: 35px;
    transition: color 0.3s;
    cursor: pointer;
    margin-right: 25px;
}
nav .burger-bar:hover{
    opacity: 0.8;
}
nav .list-name-android{
    position: absolute;
    top: 80px;
    left: 0;
    display: none;
    text-align: left;
    width: 97%;
    color: #3F486C;
    background-color: #f6f6f6;
}
nav .list-name-android li{
    padding-left: 20px;
    padding-right: 20px;
}
nav .list-name-android li:first-of-type a{
    border-top: 1px solid #e7e7e7;
}
nav .list-name-android li a{
    display: block;
    padding-top: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e7e7e7;
}
nav .list-name-android li a:hover{
    opacity: 0.8;
}

@media only screen and (min-width:1000px){
    nav .list-name{
        display: flex;
    }
    nav .burger-bar{
        display: none;
    }
    nav .list-name-android{
        display: none;
    }
}

.hero{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('{{ asset('image/wallhaven-019gk3.jpg') }}');
    
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: white;
    letter-spacing: 0.8px;
    height: 100vh;
}


.hero h1{
    font-size: 68px;
    margin-top: 50px;
    margin-bottom: 40px;
}
.hero h1 span{
    font-family: 'Martel', serif;
}
.hero p{
    font-size: 20px;
    margin-bottom: 50px;
}
.hero ul li{
    list-style: none;
    display: inline-block;
    margin-left: 10px;
    margin-right: 10px;
}
.hero ul li a{
    color: white;
}
.hero ul li a:hover{
    opacity: 0.8;
}
.hero .mouse{
    position: absolute;
    bottom: 35px;
}
.hero .mouse ion-icon{
    font-size: 35px;
}

.foto-container {
    display: flex;
    justify-content: center;
    background-color: #23283C;
    font-family: 'martel', serif;
  }
  
  .foto-item {
    text-align: center;
    margin: 10px;
  }
  
  .foto-item img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
  }
  
  .foto-item .foto-text {
    margin-top: 5px;
    color: #fff;}


  .foto-container {
    display: flex;
    justify-content: center;
  }
  
  .foto-item {
    text-align: center;
    margin: 110px;
  }
  
  .foto-item img {
    border-radius: 50%;
    width: 400px;
    height: 400px;
    object-fit: cover;
  }
  
  .foto-item .foto-text {
    margin-top: 5px;
  }
    
  

 @media only screen and (min-width: 900px){
   .foto-container{
        display: flex;
    }
  
  }


.container_2 {
margin-left: 100px;
    align-items: center;
    width: 100%;
    max-width: 600px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    border: none;

   
  }
  
  .container_2_1 img {
    width: 350px;
    height: 200px;
    margin: 20px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 10px;
  }
  .container_2_1 {
    display: flex;
    
  }
  .container_2 p {
    flex: 1;
    font-size: 16px;
    line-height: 1.5;
    margin: 0;
    color: #fff;
    /* width: 200px; */
    height: 200px;
    margin: 20px;
  }
  .container_2 .konten {
    background-color: #23353C;
    height: 200px;
    margin: 20px;
    
  }
  ion-icon[name="pricetags-outline"] {
    margin-top: 20px; /* ubah angka sesuai kebutuhan */
    margin-left: 20px; /* ubah angka sesuai kebutuhan */
  }
  
  .content {
    display: flex;
    align-items: center;
    background-color: #3F486C;
    color: #fff;
    margin-bottom: 20px;
    margin-top: 20px;
    width: 400px;
    
  }
  
  .content h4  {
    margin-left: 10px; /* jarak antara icon dan h4 */
    color: #ccc;
  }

  .container_3 {
    margin-bottom: 20px;
    margin-top: 20px;
    
  }
  .content ion-icon {
    font-size: 24px; /* ukuran icon */
    color: white;
    height: 40px;
    margin: 20px;
  }

  ion-icon[name="tv-outline"] {
    margin-top: 20px; /* ubah angka sesuai kebutuhan */
    margin-left: 20px; /* ubah angka sesuai kebutuhan */
    color: white;
  }
.konten_1 {
  display: flex;
}
 .konten_1 .container_3{
  margin-left: 200px;

 }

 /* FOOTER */
 footer {
  background-image: url('{{ asset('image/bg.png') }}');
  background-size: cover;
  color: white;
  padding: 50px 0;
  text-align: center;
  
}

.footer_1 {
  display: flex;
  margin-top: 300px;
}

.footer_1 h1{
  font-family: 'Martel';
  text-align:left;
  margin-top: 40px;
}

.footer_1 p{
  font-size: 20px;
  text-align : left;
}

.footer_1 img{
  width: 200px;
  background: none;
}
main h1{
  font-family: 'Martel';
  margin: 50px auto;
  margin-left: 200px;
  font-weight: 1000;
}

.card {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 80%;
  max-width: 1800px;
  margin: 50px auto;
  box-shadow: 0 4px 50px rgba(2, 2, 2, 0.6);
  background-color: #23353C;
  font-weight: 10;
  font-family: 'Montserrat', sans-serif;
}

.image-container {
  width: 50%;
  text-align: center;
}

img {
  max-width: 100%;
  height: auto;
  background-color: #23353C;
}

.text-container {
  width: 50%;
  padding: 1em;
  background-color: #23353C;
  color: #fff;
}

h3, p {
  margin: 0;
  text-align: center;
}
.card_1 {
  font-family: 'Martel';
  /* font-weight: 10; */
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
  width: 80%;
  max-width: 1800px;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 2px;

}

form{
  animation-name: fade-in;
  animation-duration: 2s;
}
@keyframes fade-in {
  from {opacity: 0;}
  to {opacity: 1;}
}

.form-group {
  margin-bottom: 20px;
  margin: 10px 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  position: relative;

}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 10px rgba(2, 10, 10, 0.20);
  margin-right: 20px;
  outline: none;
}

input[type="submit"] {
  background-color: #3f486c;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 150px;
  height: 30px;
  text-align: center; 
  font-weight: 20;
 
}

input[type="submit"]:hover {
  background-color: #2b3148;
}
input::placeholder {
  color: #a3a3a3;
   letter-spacing: 1px;
}

/* upload foto */
.form-group.foto_1 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 200px;
  border: 2px dashed #cccccc;
  border-radius: 10px;
  margin: 20px 0;
}

.form-group.foto_1 input[type="file"] {
  position: absolute;
  z-index: -1;
  width: 0;
  height: 0;
  opacity: 0;
}

.form-group.foto_1 span {
  margin-top: 10px;
  font-size: 14px;
  color: #333333;
  text-align: center;
}

.form-group.foto_1:hover {
  border-color: #6c757d;
}

.form-group.foto_1:hover span {
  color: #6c757d;
}

.form-group.foto_1:active {
  border-color: #343a40;
}

.form-group.foto_1:active span {
  color: #343a40;
}

/* Animasi */
.form-group.foto_1 input[type="file"] + label {
  transition: all 2s ease;
}

.form-group.foto_1 input[type="file"]:focus + label,
.form-group.foto_1 input[type="file"]:hover + label {
  transform: scale(1.1);
}
/* upload foto */

.container {
  height: 2000px; /* Tinggi container */
  padding: 50px; /* Jarak padding dari konten */
}

/* Membuat animasi */
.card {
  opacity: 0; /* Set opacity menjadi 0 */
  transform: translateY(50px); /* Set posisi awal di luar layar */
  transition: opacity 1s ease, transform 1s ease; /* Animasi efek transisi */
}

/* Membuat efek ketika elemen muncul saat di-scroll */
.card.is-visible {
  opacity: 1; /* Set opacity menjadi 1 */
  transform: translateY(0); /* Set posisi ke dalam layar */
}
.card_1 {
  opacity: 0; /* Set opacity menjadi 0 */
  transform: translateY(50px); /* Set posisi awal di luar layar */
  transition: opacity 1s ease, transform 1s ease; /* Animasi efek transisi */
}

/* Membuat efek ketika elemen muncul saat di-scroll */
.card_1.is-visible {
  opacity: 1; /* Set opacity menjadi 1 */
  transform: translateY(0); /* Set posisi ke dalam layar */
}
.jadwal {
  max-width: 1800px;
  margin: 0 auto;
  text-align: center;
  font-family: 'Martel', serif;
  background-color: transparent;
  color: rgb(255, 255, 255);
  padding: 30px;
  box-shadow: 10px 10px 90px rgba(185, 185, 185, 0.5);
  border-radius: 10px;
  margin: 70px;
}

.schedule-slider {
  display: flex;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
}

.schedule-item {
  scroll-snap-type: y mandatory;
  flex: 0 0 auto;
  width: 300px;
  margin-right: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(85, 85, 85, 0.5);
  padding: 20px;
  text-align: left;
  background-color: #23353C;
}

.schedule-item h2 {
  margin-top: 0;
}

.schedule-item p {
  margin-bottom: 5px;
}

.schedule-item:first-child {
  margin-left: 20px;
}

.schedule-item:last-child {
  margin-right: 0;
}

.jadwal  h3{
  margin-top: -20px;
  color: #000000;
}
.judul_1{
  font-family: 'Martel', serif;
  margin: 40px;

}
</style>
