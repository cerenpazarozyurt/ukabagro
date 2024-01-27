@include('site.layouts.header')
<style>
    .carousel-item {
    position: relative;
    }

    .carousel-indicators button {
      width: 12px;
      height: 12px;
      margin-right: 8px;
      border-radius: 10px;
      background-color: #9C641E;
    }

    .carousel-indicators .active {
      background-color: #314C1E;
    }

    .home {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    }

    .header{
      color: #FFF;
      text-align: center;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      font-family: Poppins;
      font-size: 150px;
      font-style: normal;
      font-weight: 700;
      line-height: 120px; /* 80% */
      letter-spacing: 30px;
      text-transform: uppercase;
    }


    .header-1{
      color: #FFF;
      text-align: center;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      font-family: Poppins;
      font-size: 25px;
      font-style: normal;
      font-weight: 300;
      line-height: 30px; /* 120% */
      letter-spacing: 20px;
      text-transform: uppercase;
    }

    .custom-h2{
        color: #FFF;
        text-align: center;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-family: Poppins;
        font-size: 150px;
        font-style: normal;
        font-weight: 700;
        line-height: 120px; /* 80% */
        letter-spacing: 30px;
        text-transform: uppercase;
    }  
    
    .custom-p{
        color: #FFF;
        text-align: center;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-family: Poppins;
        font-size: 25px;
        font-style: normal;
        font-weight: 300;
        line-height: 30px; /* 120% */
        letter-spacing: 20px;
        text-transform: uppercase;
    }

    .custom-btn{
        border-radius: 5px;
        border: 3px solid #9C641E;
        background: #9C641E;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        padding-left: 20px; 
        padding-right: 20px;
        padding-top: 10px;  
        padding-bottom: 10px;
        color: #FFF;
        text-align: center;
    }

    .title{
        color: #333;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 700;
        line-height: 38.5px; /* 110% */
    }

    .page-title{
        color: #333;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24.61px; /* 153.813% */    
    }

    .text-left{
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 23.07px; /* 153.8% */
        text-align: justify;
    }

    .d-flex.flex-column.justify-content-start span {
        display: flex;
        width: 550px;
        height: 171px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
    }

    .custom-div-1{  
        color: #666;
        font-family: Poppins;
        font-size: 96px;
        font-style: normal;
        font-weight: 900;
        line-height: 38.5px; /* 40.104% */
        margin-bottom:70px;
    }

    .custom-div-2{
        color: #334E20;
        font-family: Poppins;
        font-size: 96px;
        font-style: normal;
        font-weight: 900;
        line-height: 38.5px; /* 40.104% */
        margin-bottom:55px;
    }

    .custom-div-3{
        color: #9C641E;
        font-family: Poppins;
        font-size: 96px;
        font-style: normal;
        font-weight: 900;
        line-height: 38.5px; /* 40.104% */
    }

    .card-title{
        color: #333;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 700;
        line-height: 38.5px; /* 110% */
    }

    .card-text{
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 23.07px; /* 153.8% */
    }

    .card-body{
        color: #333;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 700;
        line-height: 38.5px; /* 110% */
    }

    .text{ 
        color: #FFF;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px; /* 100% */
    }

    .blog-h2{

        color: #333;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 700;
        line-height: 38.5px; /* 110% */
    }

    .custom-p-1{
        color: #4A8B71;
        font-family: Poppins;
        font-size: 60px;
        font-style: normal;
        font-weight: 700;
        line-height: 60px; /* 100% */
    }

    .custom-p-2{
        color: #4A8B71;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 22px; /* 110% */
    }

    .card {
        border: none;
    }

    .custom-button{
        border-radius: 5px;
        border: 3px solid #FFF;
        background-color: black;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        padding-left: 20px; 
        padding-right: 20px;
        padding-top: 10px;  
        padding-bottom: 10px;
        color: #FFF;
        text-align: center;
    }

</style>

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/img/welcome/header.png') }}" class="d-block w-100" alt="header">
        <div class="home d-flex justify-content-center align-items-center">
            <div class="content text-center">
                <h2 class="header" style="font-size: 4rem;">UKAB AGRO</h2>
                <p class="header-1">DOĞADAN GELEN SAĞLIK</p>
                <button class="custom-btn">Keşfedin</button>
            </div>
        </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/welcome/header.png') }}" class="d-block w-100" alt="header">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/welcome/header.png') }}" class="d-block w-100" alt="header">
      </div>
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
    </div>
</div>

<div class="container" style="margin-top: 5rem;">
    <div class="row">
        <div class="col-md-3">
            <h2 class="title" style="text-align: right;">UKAB AGRO Ürünleri İle Doğadan Gelen Sağlık</h2>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-center">
            <h4 class="page-title">Ukab Agro olarak, tarımın evrensel dilini konuşan bir ekiple, ürün yelpazemizi her geçen gün genişleterek, sektöre yenilik ve kalite katmaya devam ediyoruz.</h4>
            <p class="text-left">Kendine ait 10.000 m2 kapalı alanda nohut, fasulye, mercimek, ay çekirdeği ve kabak çekirdeği Eleme-Paketleme tesisine sahip Ukab Agro, kuruluştan bugüne giderek genişlemekte ve kendi markasıyla sunduğu ürün yelpazesi ile tarım sektörüne her geçen gün yenilik katmaya devam etmektedir.</p>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-2 mb-4">
                        <img src="{{ asset('assets/img/welcome/tahilurunleri.png') }}" class="img-fluid" alt="Resim 1">
                        <p>Tahıl Ürünleri</p>
                    </div>
                    <div class="col-md-2 mb-4">
                        <img src="{{ asset('assets/img/welcome/bakliyaturunleri.png') }}" class="img-fluid" alt="Resim 2" width="76" height="77">
                        <p>Bakliyat Ürünleri</p>
                    </div>
                    <div class="col-md-2 mb-4">
                        <img src="{{ asset('assets/img/welcome/kuruyemis.png') }}" class="img-fluid" alt="Resim 3" width="76" height="77">
                        <p>Kuruyemiş Ürünleri</p>
                    </div>
                    <div class="col-md-2 mb-4">
                        <img src="{{ asset('assets/img/welcome/elenmişurunler.png') }}" class="img-fluid" alt="Resim 4" width="76" height="77">
                        <p>Elenmiş Ürünler</p>
                    </div>
                    <div class="col-md-2 mb-4">
                        <img src="{{ asset('assets/img/welcome/un.png') }}" class="img-fluid" alt="Resim 5" width="76" height="77">
                        <p>Un Ürünleri</p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex flex-column justify-content-start">
            <div class="custom-div-1">Doğadan</div>
            <div class="custom-div-2">Sofraya</div>
            <div class="custom-div-3">Kalite</div>
        </div>
    </div>
    </div>
</div>

<div class="container" style="margin-top: 5rem;">
    <div class="row">
        <div class="col-md-6">
            <h2 class="card-title">Ukab Agro: Tarımda Yenilik ve Güvenin Markası</h2>
            <p class="card-text">Ukab Agro'nun "Tarımda Yenilik ve Güvenin Markası" olarak öne çıkmasında, sadece ürün kalitesine değil, aynı zamanda sürdürülebilir tarım uygulamalarına verdiği önem de etkili oluyor. Şirket, çevresel ve sosyal sorumluluklarına odaklanarak, tarımın geleceğini şekillendirecek sürdürülebilir çözümler sunmaya devam ediyoruz.</p>
            <p class="card-text">Ukab Agro olarak bu büyüme ve başarı hikayesi, tarım sektörüne yön veren bir marka olarak adımızı duyurmaya devam edeceğimize işaret ediyor. Firmamızın    liderlik ettiği bu yolda, müşteri memnuniyeti ve kalite standartlarına olan bağlılığı, gelecekteki başarılarımızın teminatı olarak öne çıkıyor.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/img/welcome/Main.png') }}" class="card-img-top">
        </div>
    </div>
</div>       

<div class="container-fluid" style="margin-top: 80px; background-color: #E9F1EE;">
  <div class="container">
    <div class="row">
      <div class="col-md-3" style="margin:0; padding:0;">
        <div class="card">
          <div class="card-body " style="background-color: #E9F1EE;">
            <h2 style="margin-top :30px;">Ürünlerimiz</h2>
            <p class="card-text">Ukab Agro'nun ürün yelpazesi, doğadan sofralara uzanan lezzetli bir serüven sunuyor.</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card" >
          <img src="{{ asset('assets/img/welcome/urunlerimiz/tahıl.png') }}" class="card-img-top" alt="Image 2" style="border-radius: 0px;">
          <div class="card-body position-absolute" style="bottom: 0; left: 0;">
            <p class="text">Tahıl</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card">
          <img src="{{ asset('assets/img/welcome/urunlerimiz/bakliyat.png') }}" class="card-img-top" alt="Image 3" style="border-radius: 0px;">
          <div class="card-body position-absolute" style="bottom: 0; left: 0;">
            <p class="text">Bakliyat</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card">
          <img src="{{ asset('assets/img/welcome/urunlerimiz/kuruyemiss.png') }}" class="card-img-top" alt="Image 4" style="border-radius: 0px;">
          <div class="card-body position-absolute" style="bottom: 0; left: 0;">
            <p class="text">Kuruyemiş</p>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card">
          <img src="{{ asset('assets/img/welcome/urunlerimiz/unn.png') }}" class="card-img-top" alt="Image 5" style="border-radius: 0px;">
          <div class="card-body position-absolute" style="bottom: 0; left: 0;">
            <p class="text">Un</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card">
          <img src="{{ asset('assets/img/welcome/urunlerimiz/bugday.png') }}" class="card-img-top" alt="Image 6" style="border-radius: 0px;">
          <div class="card-body position-absolute" style="bottom: 0; left: 0;">
            <p class="text">Buğday</p>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
          <div class="card">
            <img src="{{ asset('assets/img/welcome/urunlerimiz/elenmisurunlerr.png') }}" class="card-img-top" alt="Image 7" style="border-radius: 0px;">
            <div class="card-body position-absolute" style="bottom: 0; left: 0;">
              <p class="text">Elenmiş Ürünler</p>
            </div>
          </div>
      </div>
  
      <div class="col-md-3 position-relative" style="margin:0; padding:0;">
          <div class="card">
            <img src="{{ asset('assets/img/welcome/urunlerimiz/Tritikale.png') }}" class="card-img-top" alt="Image 8" style="border-radius: 0px;">
            <div class="card-body position-absolute" style="bottom: 0; left: 0;"> 
              <p class="text">Tritikale</p>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 5rem;">
    <div class="blog-h2">
        <h2>Blog</h2>
    </div>      

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3" style="margin:0; padding:0;">
                <div class="card">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-md-5" style="text-align: right;">
                            <p class="custom-p-1">22</p>
                        </div>
                        <div class="col-md-7" style="text-align: left; margin-top:10px;">
                            <p class="custom-p-2 mb-0">Aralık</p>
                            <p class="custom-p-2 mb-0">2023</p>
                        </div>
                    </div>
                    <h3>Agriculture Products</h3>
                    <p class="card-text">Appetizing luscious savor hot senses.
                        Effervescent the secure special. Kids
                        spicey chance excellent proven too</p>
                </div>
                </div>
            </div>

    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
      <div class="card" >
        <img src="{{ asset('assets/img/welcome/blog/1.png') }}" class="card-img-top" style="border-radius: 0px;">
      </div>
    </div>

    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5" style="text-align: right;">
                    <p class="custom-p-1">23</p>
                </div>
                <div class="col-md-7" style="text-align: left; margin-top:10px;">
                    <p class="custom-p-2 mb-0">Aralık</p>
                    <p class="custom-p-2 mb-0">2023</p>
                </div>
            </div>
            <h3>Crispy citrus exclusive</h3>
            <p class="card-text">Appetizing luscious savor hot senses.
                Effervescent the secure special. Kids
                spicey chance excellent proven too</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
      <div class="card">
        <img src="{{ asset('assets/img/welcome/blog/2.png') }}" class="card-img-top" alt="Image 4" style="border-radius: 0px;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
      <div class="card">
        <img src="{{ asset('assets/img/welcome/blog/3.png') }}" class="card-img-top" alt="Image 4" style="border-radius: 0px;">
      </div>
    </div>

    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5" style="text-align: right;">
                    <p class="custom-p-1">24</p>
                </div>
                <div class="col-md-7" style="text-align: left; margin-top:10px;">
                    <p class="custom-p-2 mb-0">Aralık</p>
                    <p class="custom-p-2 mb-0">2023</p>
                </div>
            </div>
            <h3>Waxy latest also drink</h3>
            <p class="card-text">Appetizing luscious savor hot senses.
                Effervescent the secure special. Kids
                spicey chance excellent proven too</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card">
            <img src="{{ asset('assets/img/welcome/blog/4.png') }}" class="card-img-top" alt="Image 4" style="border-radius: 0px;">
        </div>
    </div>

    <div class="col-md-3 position-relative" style="margin:0; padding:0;">
        <div class="card">
          <div class="card-body"> 
            <div class="row">
                <div class="col-md-5" style="text-align: right;">
                    <p class="custom-p-1">25</p>
                </div>
                <div class="col-md-7" style="text-align: left; margin-top:10px;">
                    <p class="custom-p-2 mb-0">Aralık</p>
                    <p class="custom-p-2 mb-0">2023</p>
                </div>
            </div>
            <h3>Agriculture Products</h3>
            <p class="card-text">Appetizing luscious savor hot senses.
                Effervescent the secure special. Kids
                spicey chance excellent proven too</p>
          </div>
        </div>
    </div>
  </div>
</div>
</div>


<div class="container-fluid" style="margin-top: 5rem;">
  <div class="row">
      <div class="col-md-6" style="background-color: #4A8B71; color: white; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h2 style="margin-bottom: 2rem;">İletişim</h2>
          <div class="d-flex align-items-center mb-4">
              <img src="{{ asset('assets/img/welcome/konum.svg') }}" class="mr-2" alt="Address Image" style="margin-bottom: 5px;"/>
              <p style="margin: 0;">Tacettin Veli Mah. Halit Narin Cad. 4/21 Melikgazi / Kayseri</p>
          </div>
  
          <div class="d-flex align-items-center mb-4">
              <img src="{{ asset('assets/img/welcome/telefon.svg') }}" class="mr-2" alt="Phone Image"/>
              <p style="margin: 0;">+90 532 130 82 90</p>
          </div>
  
          <div class="d-flex align-items-center mb-4">
              <img src="{{ asset('assets/img/welcome/maill.svg') }}" class="mr-2" alt="Mail Image"/>
              <p style="margin: 0;">ukab@ukabgrain.com</p>
          </div> 

          <ul class="list-inline" style="display: flex; align-items: center;">
              <li class="list-inline-item">
                  <a class="nav-link" href="#" style="color:white;"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
  
              <li class="list-inline-item">
                  <a class="nav-link" href="#" style="color:white;"><i class="fa-brands fa-twitter"></i></a>
              </li>
  
              <li class="list-inline-item">
                  <a class="nav-link" href="#" style="color:white;"><i class="fa-brands fa-instagram"></i></a>
              </li>
  
              <li class="list-inline-item">
                  <a class="nav-link" href="#" style="color:white;"><i class="fa-brands fa-youtube"></i></a>
              </li>
            </ul> 
      </div>
      <div class="col-md-6" style="background-color: #282828; color: white; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h2 style="margin-top: 15px;">Bize Yazın</h2>
          <form style="width: 26rem;">
              <!-- Name input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Ad/Soyad</label>
                <input type="text" id="form4Example1" class="form-control" />
              </div>
            
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form4Example2">E-mail</label>
                <input type="email" id="form4Example2" class="form-control" />
              </div>
            
              <!-- Message input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form4Example3">Mesajınız</label>
                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
              </div>
            
              <!-- Submit button -->
              <button data-mdb-ripple-init type="button" class="btn-block mb-4 custom-button ">GÖNDER</button>
          </form>
      </div>
  </div> 

</div>

</body>
</html>

@include('site.layouts.footer')

