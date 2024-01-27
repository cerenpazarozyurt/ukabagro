@include('site.layouts.header')

<style>
    .home {
        width: 100%;
        height: 60vh;
        background-image: url({{ asset('assets/img/kuruyemisurunleri/kuruyemis-header.png') }});
        background-blend-mode: darken;
        background-repeat: no-repeat;
        background-size: cover;
    }
  
    .home .content {
        text-align: center;
        padding-top: 100px;
        z-index: 2;
    }
  
    .home::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 75vh;
    background: #4A8B71; /* Renk */
    opacity: 0.15; /* Opaklık */
    z-index: 1; /* Arka plandan önce gelmesi için */
    }

    .header{
        color: #FFF;
        font-family: Poppins;
        font-size: 80px;
        font-style: normal;
        font-weight: 700;
        line-height: 80px; /* 100% */
        letter-spacing: 22px;
        text-transform: uppercase;
    } 

    .card {
        position: relative;
        border: none;
    }

    .card .card-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1rem;
        background-color: rgba(40, 40, 40, 0.73);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
        }

    .text-muted{
        color: #FFF !important;
        text-align: center;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 900;
        line-height: 22px; /* 110% */
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

    .text{
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 23.07px; /* 153.8% */
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

<div class="home d-flex justify-content-center align-items-center">
    <div class="header-overlay"></div>
    <div class="content">
        <h2 class="header" style="font-size: 4rem;">KURUYEMİŞ ÜRÜNLERİ</h2>
    </div>
</div>

<div class="container" style="margin-top: 5rem;">
    <div class="row">
        <div class="col-md-3">
            <h2 class="title" style="text-align: right;">KURUYEMİŞ ÜRÜNLERİ</h2>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-left">
            <h4 class="page-title">Ukab Agro Kuruyemiş Ürünleri: Doğanın Kalbinden Sofralarınıza Uzanan Sağlıklı Bir Lezzet Serüveni!</h4>
            <p class="text">Doğanın Mucizeleri Sofranızda! Sağlığınız İçin En Doğal Atıştırmalıklar. Her Çekirdek, Bereketin ve Lezzetin İncelikleriyle Dolu. Ukab Agro'nun Özenle Seçip İşlediği Çekirdeklerle Sofranızı Doğallığın ve Enerjinin Zenginliğiyle Buluşturun. Sağlıklı Atıştırmalıklar, Ukab Agro İle Her An Yanınızda!</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="content container text-center" style="padding: 5rem;">
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('assets/img/kuruyemisurunleri/aycekirdegi.png') }}" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">AY ÇEKİRDEĞİ</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('assets/img/kuruyemisurunleri/kabakcekirdegi.png') }}" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">KABAK ÇEKİRDEĞİ</small>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
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

@include('site.layouts.footer')