@include('site.layouts.header')

<style>
  .home {
      width: 100%;
      height: 70vh;
      background-image: url({{ asset('assets/img/insankaynaklari/insankaynaklari-header.png') }});
      background-blend-mode: darken;
      background-repeat: no-repeat;
      background-size: cover;
  }

  .home .content {
      text-align: start;
      padding-top: 100px;
      z-index: 2;
  }

  .home::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 85vh;
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

  .header-1{
    color: #FFF;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 300;
    line-height: 19.2px; /* 120% */
    letter-spacing: 5px;
    text-transform: uppercase;
  }

  .custom-text {
    color: #FFF;
    text-align: center;
    font-family: Poppins;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: 19.2px; /* 120% */
  }

  .text{ 
    color: #FFF;
    font-family: Poppins;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 20px; /* 100% */
  }

  .card {
        border: none;
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

</style>

<div class="home d-flex justify-content-center align-items-center">
  <div class="header-overlay"></div>
  <div class="content">
      <h2 class="header" style="font-size: 4rem;">İNSAN KAYNAKLARI</h2>
      <p class="header-1">SÜRDÜRÜLEBİLİR Tarımın Öncü İsmİ: Ukab Agro </p>
  </div>
</div>

<div class="container" style="margin-top: 5rem;">
    <div class="row">
        <div class="col-md-6">
            <h2 class="card-title">İnsan Kaynakları</h2>
            <p class="card-text">Ukab Agro olarak başarımızın ve geleceğe yaptığımız yatırımın verimli olmasının sebebinin, en değerli varlığımız olarak gördüğümüz çalışanlarımıza bağlı olduğuna inanıyoruz.</p>
            <p class="card-text">Bu nedenle Ukab Agro ailesine katılan ve katılacak olan tüm üyelerimizin, hem toplumumuzu hem de firmamızı bir adım daha ileriye taşımak için çalışanlarımızı eğitimlerle destekliyor, kendilerini geliştirmeleri için alan tanıyarak, değerlerimizi paylaşan ve oluşturmaya çalıştığımız kurum kültürüne uyumlu bireyler olmasını önemsiyoruz.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/img/insankaynaklari/ik.png') }}" class="card-img-top" width="250" height="350">
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: 5rem; background-color: #282828;">
  <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-2 mb-4 text-center mt-4">
            <img src="{{ asset('assets/img/welcome/tahilurunleri.png') }}" class="img-fluid" alt="Resim 1">
            <p class="custom-text" style="margin-top: 10px;">Tahıl Ürünleri</p>
        </div>
        <div class="col-md-2 mb-4 text-center mt-4">
            <img src="{{ asset('assets/img/welcome/bakliyaturunleri.png') }}" class="img-fluid" alt="Resim 2" width="76" height="77">
            <p class="custom-text" style="margin-top: 30px;">Bakliyat Ürünleri</p>
        </div>
        <div class="col-md-2 mb-4 text-center mt-4">
            <img src="{{ asset('assets/img/welcome/kuruyemis.png') }}" class="img-fluid" alt="Resim 3" width="76" height="77">
            <p class="custom-text" style="margin-top: 20px;">Kuruyemiş Ürünleri</p>
        </div>
        <div class="col-md-2 mb-4 text-center mt-4">
            <img src="{{ asset('assets/img/welcome/elenmişurunler.png') }}" class="img-fluid" alt="Resim 4" width="76" height="77">
            <p class="custom-text" style="margin-top: 15px;">Elenmiş Ürünler</p>
        </div>
        <div class="col-md-2 mb-4 text-center mt-4">
            <img src="{{ asset('assets/img/welcome/un.png') }}" class="img-fluid" alt="Resim 5" width="76" height="77">
            <p class="custom-text" style="margin-top: 8px;">Un Ürünleri</p>
        </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="background-color: #E9F1EE;">
  <div class="container">
    <div class="row">
      <div class="col-md-3" style="margin:0; padding:0;">
        <div class="card">
          <div class="card-body" style="background-color: #E9F1EE;">
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

@include('site.layouts.footer')