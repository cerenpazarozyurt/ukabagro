@include('site.layouts.header')

<style>
    .home {
        width: 100%;
        height: 60vh;
        background-image: url({{ asset('assets/img/urunler/ürünler-header.png') }});
        background-blend-mode: darken;
        background-repeat: no-repeat;
        background-size: cover;

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
  
    .home .content {
        position: relative;
        text-align: center;
        padding-top: 100px;
        z-index: 2;
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
    }

    .icon{
        color: #333;
        text-align: center;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 22px; /* 110% */
    }

    .text{ 
        color: #777;
        text-align: center;
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
        <h2 class="header" style="font-size: 4rem;">ÜRÜNLER</h2>
    </div>
</div>

<div class="container" style="margin-top: 5rem;">
    <div class="row">
        <div class="col-md-3">
            <h2 class="title" style="text-align: right;">Ukab Agro: Doğadan Sofralara Taşıdığımız Zenginlik!</h2>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-center">
            <h4 class="page-title">Her Bir Ürün, Titizlikle Seçilen Doğanın En Kaliteli Hediyesi. Nohut, fasulye, mercimek, ay çekirdeği ve kabak çekirdeği ile Sofranızı Renklendiriyoruz.</h4>
            <p class="text-left">Ukab Agro olarak, doğanın bize sunduğu zenginlikleri, titizlikle seçilmiş ve işlenmiş ürünlerle sofralarınıza taşıyoruz. Nohut, fasulye, mercimek, ay çekirdeği ve kabak çekirdeği gibi kaliteli ürünlerimiz, modern tesislerimizde en yüksek standartlarda üretilir ve paketlenir.</p>
            <p class="text-left">Sağlıklı beslenmeye odaklanan Ukab Agro, her bir ürünüyle lezzetli ve besleyici bir deneyim sunmayı amaçlar. Sofralarınızı doğallık, kalite ve bereketle buluşturmak için çalışıyoruz.</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="content container text-center" style="padding: 5rem;">
        <div class="row">
            <div class="col-6 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/welcome/tahilurunleri.png') }}" class="img-fluid" alt="Resim 1">
                    <p class="icon" style="margin-top:10px;">Tahıl</p>
                </div>
                <div>
                    <p class="text" style="margin-bottom:30px;">
                        Yaklaşık 11,000 yıl önce bir topluluk, insanların çevreleriyle ilişkisini sonsuza kadar değiştirecek bir uygulama başlattı: tahıl ehlileştirme. Bu binlerce yıllık süreçte artan nüfus ile birlikte yeni arayışlara geçilmesi; tarım makinelerinin kullanılmasıyla hızlı dönüş alınabilmesi ve uzun süre saklanabilme özelliğine sahip olmasıyla temel gıda haline dönüşen tahıl ürünleri önemini bir kez daha bize kanıtlamış oldu.
                    </p>
                </div>
            </div>

            <div class="col-6"
            style="background-image: url('{{ asset('assets/img/urunler/ü-tahil.png') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div>
        
        <div class="row">
            <div class="col-6"
            style="background-image: url('{{ asset('assets/img/urunler/ü-bakliyat.png') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>

            <div class="col-6 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/welcome/bakliyaturunleri.png') }}" class="img-fluid" alt="Resim 2" style="margin-top:20px;">
                    <p class="icon" style="margin-top:10px;">Bakliyat</p>
                </div>
                <p class="text" style="margin-bottom:30px;">
                    Faydaları saymakla bitmeyecek bakliyat ürünleri yemeklere kattığı lezzetin yanı sıra günün her öğünü tüketilebilen gıdalardır. Ulaşımı ve pişirmesi de oldukça kolay olan bakliyat çeşitleri, besin değerinin zengin olmasının yanı sıra, ülkemiz ve dünya mutfaklarında da büyük bir öneme sahiptir.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-6 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/welcome/kuruyemis.png') }}" class="img-fluid" alt="Resim 3" style="margin-top:20px;">
                    <p class="icon" style="margin-top:10px;">Kuruyemiş</p>
                </div>
                <p class="text" style="margin-bottom:30px;">
                    Her mevsim ulaşacabileceğiniz lezzet olan kuruyemiş, her yaştan insanın severek tükettiği dinlenmek, sohbet etmek, güzel bir öğün geçirmek için yararlanabileceğiniz sağlıklı atıştırmalıklardır. Bu besinler, vitaminler, proteinler ve mineraller açısından oldukça zengin olmalarının yanısıra, tam bir enerji rezervidir.
                </p>
            </div>

            <div class="col-6"
            style="background-image: url('{{ asset('assets/img/urunler/ü-kuruyemiş.png') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div>

        <div class="row">
            <div class="col-6"
            style="background-image: url('{{ asset('assets/img/urunler/ü-un.png') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>

            <div class="col-6 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/welcome/un.png') }}" class="img-fluid" alt="Resim 5" style="margin-top:20px;">
                    <p class="icon" style="margin-top:10px;">Un</p>
                </div>
                <p class="text" style="margin-bottom:30px;">
                    Kardeş firmamız olan Büyük Özaslanlar Tarım Gıda Un Yem Sanayi A.Ş. un fabrikamız saatte 20 ton, günde 350 ton buğday kırma kapasitesine sahiptir. Elde edilen ürünlerin %50’si iç piyasaya sunulurken, kalan %50’si dünya ülkelerine ihraç edilmektedir. İhraç edilen ülkeler arasında Batı Afrika, Irak, Suriye, Libya, Lübnan gibi Orta Doğu vs gibi ülkeler yer almaktadır. Un ihracatında dünya ülkeleri arasında ilk sıralarda yer alan Türkiye ekonomisine yapmış olduğumuz büyük ölçüde ihracat ile uluslararası pazarda yer alarak katma değer sağlıyor olmaktan gurur duyuyoruz.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-6 align-items-center">
                <div>
                    <img src="{{ asset('assets/img/welcome/elenmişurunler.png') }}" class="img-fluid" alt="Resim 4" style="margin-top:20px;">
                    <p class="icon" style="margin-top:10px;">Elenmiş Ürünler</p>
                </div>
                <p class="text">
                    Tesisimizde kullanılan Sortex teknolojisi ile söz konusu ürünler, yabancı maddelerden arındırılarak çeşitli temizleme, tasnifleme, ayıklama aşamalarından geçirilerek hizmetinize sunulmaktadır. Kullanılan teknoloji sayesinde renk ayırıcı kameralar, ton farklılıklarını ve ürün içerisindeki yabancı maddeleri ayıklayabilmektedir. İşlemlerden geçirilen ürünler, elenmiş buğday haline getirildikten sonra yine tesisimizde paketlenerek evcil kuş ve kümes hayvanları için yem olarak kullanılmak üzere piyasaya sunulmaktadır.
                </p>
            </div>

            <div class="col-6"
            style="background-image: url('{{ asset('assets/img/urunler/ü-elenmiş.png') }}'); background-size: cover; background-repeat: no-repeat;">
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

@include('site.layouts.footer')
