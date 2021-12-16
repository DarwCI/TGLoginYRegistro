<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mundo Andino - Inicio</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body::-webkit-scrollbar {
        width: 12px;
        }
        body::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.4);
        }
        body::-webkit-scrollbar-thumb {
        background-color: #aab74d;
        background-image:-webkit-linear-gradient(rgba(255,255,255,.3) 20%,transparent 20%,transparent 40%,rgba(255, 255, 255, 0.3) 40%,rgba(255,255,255,.3) 60%,transparent 60%,transparent 80%,rgba(255, 255, 255, 0.3) 80%);
        border-radius: 10px;
        }
        /*body{
            cursor: url("/img/ico.png");
        }*/
        
    </style>
</head>
<body style="font-family: 'Nanum Pen Script', cursive">

    <header id="header">

     <!-- Navegation Menu -->
     <nav class="menu" style="">
         <div class="logobox">
             <h1 class="logo"><a href="#">
                <i class="fas fa-tree"></i>
                MundoAndino
             </a></h1>

             <span class="btn-menu"><i class="fas fa-bars"></i></span>
         </div>

         <div class="list-container" >
             <ul class="lists">
                 <li><a href="http://localhost:8000" class="active">Inicio</a></li>
                 <li><a href="#11">Nosotros</a></li>
                 <li><a href="#22">Donaciones</a></li>
                 <li><a href="#33">Animales</a></li>
                 <li><a href="#44">Videos</a></li>
                 <li><a href="{{ route('login') }}">Iniciar Sesion</a></li>
               </ul>
         </div>
     </nav>

     <!-- Img Header -->
     <figure class="img-header">
         <div class="welcome" style="">
            <h4 style="font-family: 'Fuzzy Bubbles', cursive;">"Los ojos de un animal tienen el poder de hablar un gran idioma"</h4>
            <h2><a href="#" style="font-family: 'Fuzzy Bubbles', cursive;">
               <i class="fas fa-tree"></i>
               zoológico Mundo Andino
            </a></h2>
         </div>
     </figure>

    </header>

<main>
    <div id="11">
        <br><br>
    </div>
    <!-- About Us -->
    <section class="about-us"">
        <div class="info" >
            <h3 >Acerca de nosotros</h3>
            <p>Estamos orgullosos de nuestra exitosa historia salvando animales, desde pájaros hasta pumas de los andes. Conozca algunos de nuestros trabajos rescatando gran cantidad de diferentes especies, como felinos, aves, auquenidos, etc.</p>
            <hr>
        </div>
        <div id="22">
                </div>
        <div class="free-content">
            <h4>¡Donaciones!</h4>

            <div class="icons">
                <!-- <div class="hidden">
                   <div class="span-icon"><span><i class="fas fa-file-pdf"></i></span></div>
                   <h6>PDF</h6>
                   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nesciunt sed mollitia ea ut itaque.</p>
                </div>-->

                <div class="free-content">
                    <!-- <div class="span-icon"><span><i class="fas fa-images"></i></span></div>
                    <h6>Awesome Photos</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nesciunt sed mollitia ea ut itaque.</p> -->
                    <img src="img/yape.png" class="img-fluid" width="600" height="auto" alt="yp">
                  
                    
                 </div>

                 <div>
                    <div class="span-icon"><span><i class="fab fa-youtube"></i></span></div>
                    <h6>Youtube</h6>
                    <h1 style="font-size: 30px">AHORA ES EL MOMENTO DE ACTUAR POR LA VIDA SILVESTRE. LA CONSERVACIÓN ES CRÍTICA; LAS ESPECIES ESTÁN AMENAZADAS. JUNTOS PODEMOS HACER UNA GRAN DIFERENCIA. ACTÚE HOY Y ÚNASE A NOSOTROS PARA PREVENIR LA EXTINCIÓN .</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nesciunt sed mollitia ea ut itaque.</p>
                 </div>
                
            </div>
        </div>
    </section>
    
    <div id="33">
        
    </div>
    <!-- Gallery -->
        <div class="animal-icon">
            <i class="fas fa-paw"></i>            
        </div>

        <div class="gallery-content">
            <div class="img-card"><img src="img/img-1.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-2.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-3.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-4.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-5.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-6.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-7.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-8.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-9.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-10.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-11.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-12.jpg" alt="animal"></div>
            
        </div>
        

        <!-- Modal -->
         <div class="modal">
             <span id="closeModal"><i class="fas fa-times"></i></span>
             <img id="imgModal">
             <p id="caption"></p>
         </div>

    </section>
    <div style="text-align: center" id="44">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YIEh49wvF_k?start=70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SOYuURMLQ0s?start=26" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div style="text-align: center" id="44">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EKhdpRBboiI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8FZjdAEsZSA?start=485" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <!-- Footer -->
    <footer>
       <p>&copy; Todos los derechos reservados - 2021 | MundoAndino</p>
    </footer>

</main>
    
<!-- Scripts -->
<script src="https://kit.fontawesome.com/35db202371.js" crossorigin="anonymous"></script>
<script src="js/ap.js"></script>

</body>
</html>
