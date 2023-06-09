<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta property="og:image" content="#">
    <meta property="og:image:width" content="516">
    <meta property="og:image:height" content="432">
    <link rel="stylesheet" type="text/css"  href="./admin/css/icomon.css">
    <link href="./admin/css/main.css" rel="stylesheet" type="text/css" media="all">
    <link href="./admin/css/banners.css" rel="stylesheet" media="all">
    <style>.whats { position: fixed; bottom: 10px; right: 10px; z-index: 9999;} </style>
    <script src="https://kit.fontawesome.com/97be9fb117.js" crossorigin="anonymous"></script>
    <script src="/admin/js/"></script>
    <title>Home | B1SOFT</title>
</head>
<body>
    <header><a href="index.html"> <h1>B1SOFT</h1></a>
        <nav id="main-nav"><a href="#main-nav">[+] menu</a>
            <a href="#">[-] menu</a>
            <ul>
                <li>
                    <a href="/">
                        <i class="icon-home"></i> Início</a>
                </li>
                <li>
                    <a href="/solucoes/">
                        <i><img alt="" src="/media/img/network.svg"></i>Serviços</a>
                    <ul>
                        <li><b><a href="/Servicos/">Conheça Todos Nossos Serviços</a></b></li>
                        <li><a href="/Servicos/Interfaces_aut.html">Interfaces e Automações</a></li>
                        <li><a href="/Servicos/CrystalReports.html">Crystal Reports</a></li>
                        <li><a href="/Servicos/DevAddons.html">Desenvolvimento de AddOns</a></li>
                        <li><a href="/Servicos/ConsuFuncional.html">Consultoria Funcional</a></li>
                    </ul>
                </li>
                <li><a href="./Home.html"><i><img src=""></i>Academy</a></li>
                <li><a target="_blank" href="#"><i class="icon-star"></i> Carreira</a></li>
                <li><a href="#contato"><i class="icon-phone"></i> Contato</a></li>
                <li><a href="./admin/pages/login1.php"><i class="icon-enter"></i> Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="home">
        <video class="video-slide active" src="./admin/videos/video3.mp4" autoplay muted loop poster="/media/css/img/Banner - The Dream SAP S_4HANA Migration Project Team (1) (1).jpg"></video>
        <video class="video-slide" src="/videos/video2.mp4" autoplay muted loop></video>
        <video class="video-slide" src="/videos/video3.mp4" autoplay muted loop></video>
        <video class="video-slide" src="/videos/video4.mp4" autoplay muted loop></video>
        <video class="video-slide" src="/videos/video5.mp4" autoplay muted loop></video>
        <div class="content active">
        <h1>Otimize<br> <span>SAP Business One</span></h1> <p>Melhore os seus processos online</p><a href="#">Saiba Mais</a>
            </div>
            <div class="media-icons">
            <a href="#"><i class="fa-brands fa-facebook"></i> </a>
            <a href="#"><i class="fa-brands fa-linkedin"></i> </a>
            <a href="#"><i class="fa-brands fa-instagram"></i> </a>
        </div>
</section>
<section class="page-section gray-bg"> <!--Section Video -->
                <div class="container">
                    <div class="fancy-title"><span>Software</span>
                        <h1>Conheça algumas das nossas Aplicações!</h1>
                    </div>
                        <iframe style="display: block; margin: 20px auto; max-width: 500px; width: 100%;"height="264px" src="https://www.youtube.com/embed/BOCKqjB-Z34?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="features-1">  
                        </div>
                    </div>
                </div>
            </section>
            <section>  <!--Section SAPB1-->
                <div class="carousel">
                    <a href="javascript:homeCarousel.prev()" class="nav-link"></a>
                    <a href="javascript:homeCarousel.next()" class="nav-link"></a>
                    <div class="carousel-container siema" style="overflow: hidden; direction: ltr; cursor: -webkit-grab;">
                    <div class="carousel-banner parcerias-banner">
                        <div class="container">
                            <div class="title"><b>B1SOFT</b>Connect</div><p>Juntos vamos mais longe.</p><a href="/parcerias" title="B1Soft Connect">Saiba mais</a></div>
                        </div>
                        <div class="carousel-banner overlay" style="background:url(/media/css/img/Banner\ para\ loja\ de\ eletrônicos\ promoção\ desconto\ moderno\ preto\ e\ azul.jpg) no-repeat center; background-size: cover;"><div class="container" style="background:none"></div> </div>
                    </div><ol>
                        <li><a class="active" href="javascript:homeCarousel.goTo(0)">1</a></li>
                        <li><a href="javascript:homeCarousel.goTo(1)">2</a></li>
                    </ol>
                </div>
            </section>
            <section class="page-section">
                <div class="container form-container">
                    <div id="contato">
                        <div class="title-1"><h1>Vamos conversar!</h1><p>A B1Soft  entra em contato com você.</p>
                        </div><p>Basta preencher o formulário com seus dados e seu telefone que logo entraremos em contato!</p>
                    </div>
                    <form class="form-1" action="https://formsubmit.co/victor.parga@b1soft.io" method="POST">
                        <input required name="name" placeholder="Nome">
                        <input type="hidden" name="mail-list" value="home">
                         <input type="hidden" name="page" value="Home">
                          <input required type="email" name="email" placeholder="email@example.com">
                        <input required name="phone" placeholder="Telefone">
                         <input required name="company" placeholder="Empresa">
                          <input name="cityState" placeholder="Cidade/Estado">
                           <textarea rows="4" required name="message" placeholder="Escreva aqui sua mensagem para a B1Soft"></textarea>
                        <button type="submit"> Enviar contato</button>
                        <input type="hidden" name="_subject" value="Novo Contato!">
                        <input type="text" name="_honey" style="display: none;">
                        <input type="hidden" name="_captcha" value="false">
                    </form>
                </div>
            </section>
                    </main>


                    <footer>
                        <img src="/admin/img/oie_transparent.png" alt="" class="logob1">
                        <div class="social-icons-container">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <ul class="footer-menu-container">
                            <li class="menu-item">Legal</li>
                            <li class="menu-item">Legal</li>
                            <li class="menu-item">Privacidade</li>
                            <li class="menu-item">Carreira</li>
                            <li class="menu-item"><a href="#contato">Contato</a></li>
                        </ul>
                        <span class="copyright">&copy;2020, B1SOFT Sistemas. LTDA</span>
                        </footer>


</body>
</html>