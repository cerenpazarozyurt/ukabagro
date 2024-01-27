@include('site.layouts.header')

<style>
    .home {
        width: 100%;
        height: 60vh;
        background-image: url({{ asset('assets/img/e-katalog/katalog-header.png') }});
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
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-family: Poppins;
        font-size: 80px;
        font-style: normal;
        font-weight: 700;
        line-height: 80px; /* 100% */
        letter-spacing: 22px;
        text-transform: uppercase;
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
        <h2 class="header" style="font-size: 4rem;">E-KATALOG</h2>
    </div>
</div>
<br>

<div>
    
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