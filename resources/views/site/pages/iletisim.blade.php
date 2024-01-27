@include('site.layouts.header')

<style>
    .home {
        width: 100%;
        height: 60vh;
        background-image: url({{ asset('assets/img/iletisim/iletisim-header.png') }});
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

    .icon{
        color: #333;
        text-align: center;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: 30.76px; /* 153.8% */
        text-transform: uppercase
    }

    .text{
        color: #282828;
        text-align: center;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 21.53px; /* 179.417% */
    }

    .title{
        color: #333;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 700;
        line-height: 38.5px; /* 110% */
    }

    .form-group {
        position: relative;
        margin-bottom: 1.5rem; 
    }

    .form-group input,
    .form-group textarea {
      border: 0;
      border-bottom: 1px solid #B7B7B7;
      border-radius: 0;
      outline: 0;
      box-shadow: none;
    }


    .form-group label {
      position: absolute;
      top: 0.5rem;
      left: 0;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .form-group input:focus + label,
    .form-group textarea:focus + label,
    .form-group input:not(:placeholder-shown) + label,
    .form-group textarea:not(:placeholder-shown) + label {
      font-size: 0.8rem;
      top: -1rem;
      color: #4A8B71; /* Odaklandığında veya değer girildiğinde etiket rengi */
    }

    button[type="submit"] {
        background-color: #fff;
        color: #504935;
        border-radius: 5px;
        border: 3px solid #9C641E;
        padding-left: 20px; 
        padding-right: 20px;
        padding-top: 10px;  
        padding-bottom: 10px;
        border-radius: 10px;
        margin-bottom:30px;
    }

    .input{
        color: #9F9F9F;
        font-family: Raleway;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .form-control{
        margin-top:30px;
    }

</style>

<div class="home d-flex justify-content-center align-items-center">
    <div class="header-overlay"></div>
    <div class="content">
        <h2 class="header" style="font-size: 4rem;">İLETİŞİM</h2>
    </div>
</div>

<div class="section">
    <div class="content container text-center" style="padding: 5rem;">
        <div class="row">
            <div class="col-4 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/iletisim/location.svg') }}" class="img-fluid" alt="Resim 1" style="margin-bottom: 10px;">
                    <h4 class="icon">ADRES</h4>
                </div>
                <div>
                    <p class="text">
                        Tacettin Veli Mah. Halit Narin Cad. 4/21 Melikgazi / Kayseri
                    </p>
                </div>
            </div>

            <div class="col-4 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/iletisim/phone.svg') }}" class="img-fluid" alt="Resim 1" style="margin-bottom: 10px;">
                    <h4 class="icon">TELEFON</h4>
                </div>
                <div>
                    <p class="text">
                        +90 532 130 82 90
                    </p>
                </div>
            </div>

            <div class="col-4 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/iletisim/gmail.svg') }}" class="img-fluid" alt="Resim 1" style="margin-bottom: 10px;">
                    <h4 class="icon">EMAİL</h4>
                </div>
                <div>
                    <p class="text">
                        ukab@ukabgrain.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.199969664376!2d35.48996117539616!3d38.71321765755144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b1209cf5c8f69%3A0xcfde4fe318e58975!2sTacettin%20Veli%2C%20Halit%20Narin%20Cd.%20No%3A4%20D%3A21%2C%2038050%20Melikgazi%2FKayseri!5e0!3m2!1str!2str!4v1706178368734!5m2!1str!2str" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="container mt-5">
    <h4 class="title">Bize Yazın</h4>
    <form>
        <div class="form-row" style="margin-top: 20px;">
            <div class="form-group col-md-6">
                <label for="adSoyad" class="input">AD/SOYAD</label>
                <input type="text" class="form-control" id="adSoyad" placeholder=" ">
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="input">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder=" ">
            </div>
        </div>

        <div class="form-group">
            <textarea type="text" class="form-control" id="message" rows="8" placeholder=" "></textarea>
        </div>

        <div class="d-flex justify-content-start">
            <button type="submit">GÖNDER</button>
        </div>
    </form>
</div>
