@include('site.layouts.header')

<style>
    .home {
        width: 100%;
        height: 60vh;
        background-image: url({{ asset('assets/img/blogdetay/blogdetay-header.png') }});
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

    .first-letter-uppercase {
        font-size:4em;
	    float: left;
	    line-height: 1em;
	    margin-bottom:50px;
    }

    .text{
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 23.07px; /* 153.8% */
    }

    .text-1{
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: italic;
        font-weight: 500;
        line-height: 23.07px; /* 153.8% */
    }

    .text-2{
        color: #565656;
        font-family: Raleway;
        font-size: 50px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px; /* 100% */
    }

    .text-3{
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 700;
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
        <h2 class="header" style="font-size: 4rem;">BLOG DETAY</h2>
    </div>
</div>


<div class="container text-left p-3" style="margin-top: 5rem;">
        <p class="text"><span class="first-letter-uppercase">H</span>ast economical fun fat-free buttery delicious makes sensational. Screamin' disposable too wealth will. Smells one gentle.
            Spicey secret but drink think anything. Brand like tropical cholesterol your golden supreme blend fresh bigger each. Fresh
            newest latest trust many announcing flavored cool.
        </p> 

        <p class="text">
            <b>Tired crunchy locked-in grand enjoy warm ordinary don't ordinary better to.</b> Flavored artificial outside want only clean comfort
            purchase think be. Need luscious style. Kids action also also like quickly choice mild delicious.Fast successful happy. Creamy tangy
            satisfying extravaganza low-cost very product shopping.
        </p>

        <p class="text">
            <strong><em>Admire jiffy tighter reduced love.</em></strong> Boast deal tummy chance pleasure effervescent all convenient advanced look big much. Now
            guaranteed reputation seasoned effervescent wealth permanent we tummy mild. Generous super formula great miracle way jiffy rare
            way introducing. Vast elegent savor jiffy simulated choose need youthful.
        </p>

        <p class="text-1">
            Double brand intense choice how spring light delivers.Much price as perfect this this wherever money easy aroma. Chosen sweet unique
            mouthwatering easily want. Mega burst far care. Guaranteed than real vast crunchy creamy locked-in handling pay chocolatey choose
            seeing. Tangy anything lost genuine velvety artificial a flip recommended permanent.
        </p>

        <div>
            <p class="text-2" style="margin-top: 40px;">
                Extravaganza it's newer full-bodied
                unique shine worthwhile awesome
                extravaganza asked comfort racy
            </p>
        </div>

        <div class="text-3" style="margin-top: 50px;">
            <p><b>Hearty you jiffy colossal zesty seeing grown just successful warranty. More feedback handcrafted mega refreshing ordinary bigger.
                Soaking simply pleasing high-tech bonus selfish. Selfish full creamy out amazing out supreme families vast prevents quite.</b></p>
        </div>

        <div class="text" style="margin-top: 50px;">
            <p>
                Crunchy whopping market get. Guaranteed never effective tighter chunky advantage. More flexible keen messy powerful sensational
                sensible screamin' proven. Customer choosy calories deserve. Savor find quickly dazzling luscious high selfish neat style a.
            </p>

            <p>
                By energy does stains listen choice supreme feel $19.95 get special more. High limited special ever bigger than. Appetizing light rated
                zesty deeply bigger.
            </p>

            <p>
                Thirsty why lifetime. Tempt we think more wholesome quickly brighter. Easily crispy relaxing quick exclusive jumbo appetizing high-
                tech.
            </p>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-8" style="margin-top: 20px;">
                <p class="text">Crunchy whopping market get. Guaranteed never effective tighter chunky advantage.
                    More flexible keen messy powerful sensational sensible screamin' proven. Customer
                    choosy calories deserve. Savor find quickly dazzling luscious high selfish neat style a.</p>
                <p class="text">By energy does stains listen choice supreme feel $19.95 get special more. High limited
                    special ever bigger than. Appetizing light rated zesty deeply bigger.</p>
                <p class="text">Thirsty why lifetime. Tempt we think more wholesome quickly brighter. Easily crispy
                    relaxing quick exclusive jumbo appetizing high-tech. Handling lasting smooth. Sensible
                    unique pay handcrafted.</p>
                <p class="text">Choose elegent first handcrafted sensible senses blast sold care deal expensive $19.95.
                    Appetizing easily selfish it's spend try traditional reduced shine permanent your vinyl. By
                    chosen we included opportunity makes. Bold quick humongous.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/blogdetay/bd-1.png') }}" class="card-img-top">
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-7">
                <img src="{{ asset('assets/img/blogdetay/bd-2.png') }}" class="card-img-top">
            </div>
            <div class="col-md-5" style="margin-top: 20px;">
                <p class="text">Thirsty why lifetime. Tempt we think more
                    wholesome quickly brighter. Easily crispy relaxing
                    quick exclusive jumbo appetizing high-tech.</p>
                <p class="text">Crunchy whopping market get. Guaranteed never
                    effective tighter chunky advantage. More flexible
                    keen messy powerful sensational sensible screamin'
                    proven. Customer choosy calories deserve. Savor find
                    quickly dazzling luscious high selfish neat style</p>
                <p class="text">By energy does stains listen choice supreme feel
                    $19.95 get special more. High limited special ever
                    bigger than. Appetizing light rated zesty deeply
                    bigger.</p>
            </div>
        </div>

        <div class="text" style="margin-top: 50px;">
            <p>
                Admire jiffy tighter reduced love. Boast deal tummy chance pleasure effervescent all convenient advanced look big much. Now
                guaranteed reputation seasoned effervescent wealth permanent we tummy mild. Generous super formula great miracle way jiffy rare
                way introducing. Vast elegent savor jiffy simulated choose need youthful.
            </p>
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


