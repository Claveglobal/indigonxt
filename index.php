<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Indigo - Nordelta</title>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9SQR7V2');
  </script>
  <!-- End Google Tag Manager -->

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'canela': ['Canela', 'serif'],
            'inter': ['Inter', 'sans-serif'],
            'serif': ['Canela', 'serif'],
          },
          animation: {
            'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
            'fade-in-left': 'fadeInLeft 0.8s ease-out forwards',
            'fade-in-right': 'fadeInRight 0.8s ease-out forwards',
            'float': 'float 3s ease-in-out infinite',
            'scale-up': 'scaleUp 0.3s ease-out',
          },
          keyframes: {
            fadeInUp: {
              '0%': {
                opacity: '0',
                transform: 'translateY(30px)'
              },
              '100%': {
                opacity: '1',
                transform: 'translateY(0)'
              }
            },
            fadeInLeft: {
              '0%': {
                opacity: '0',
                transform: 'translateX(-30px)'
              },
              '100%': {
                opacity: '1',
                transform: 'translateX(0)'
              }
            },
            fadeInRight: {
              '0%': {
                opacity: '0',
                transform: 'translateX(30px)'
              },
              '100%': {
                opacity: '1',
                transform: 'translateX(0)'
              }
            },
            float: {
              '0%, 100%': {
                transform: 'translateY(0px)'
              },
              '50%': {
                transform: 'translateY(-10px)'
              }
            },
            scaleUp: {
              '0%': {
                transform: 'scale(0.95)'
              },
              '100%': {
                transform: 'scale(1)'
              }
            }
          },
          animationDelay: {
            '200': '0.2s',
            '400': '0.4s',
            '600': '0.6s',
            '800': '0.8s',
            '1000': '1s',
          },
          colors: {
            'primary': '#003057',
            'secondary': '#EA7601',
            'accent': '#e6751a',
            'dark': '#012639',
            'light': '#f6f6f6'
          },
        }
      }
    }
  </script>
  <link rel="stylesheet" href="main.css?v=1" />
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body class="font-sans text-gray-800">
  <!-- Header -->
  <?php include 'header.php'; ?>
  <!-- 1) Hero -->
  <section class="relative sm:h-screen min-h-screen bg-cover bg-center text-white z-0 bg-dark"">
    <!-- Overlay para degradado oscuro inferior -->
    <div class=" absolute w-full bg-gradient-to-t from-[#002942] to-transparent z-10 bottom-0 left-0 h-32 hidden sm:block">
    </div>

    <!-- Hero content -->
    <div class="relative z-10 h-full flex justify-center md:justify-end px-4 md:px-20 text-white sm:text-dark" id="hero-content">
      <div class="w-full md:w-5/12 text-center md:text-left md:mr-12 animate-fade-in-up px-4 md:px-0 mt-[190px] sm:mt-0">
        <h1 class="text-2xl md:text-[38px] canela-light leading-tight mt-32 animate-fade-in-up animation-delay-200">
          Tu próxima inversión <br>
          en Nordelta desde <span class="text-secondary ">U$D 690.000</span>
        </h1>
        <p class="mt-4 text-base md:text-[24px] canela-light leading-normal animate-fade-in-up animation-delay-400">Semipisos de 189 m<sup>2</sup> totales*: de 2 dormitorios en suite con dependencia o 3 dormitorios en suite. Amplias vistas, arquitectura de categoría en un entorno natural.<br><br>
          <span class="inline">- Fecha entrega Marzo 2026<br>
            - Anticipo 35% al boleto y financiación en 30 cuotas**</span>
        </p>
        <a href="/#formulario" class="shimmer ripple relative overflow-hidden mt-6 inline-block bg-[#f4851f] text-white px-4 md:px-6 py-2 md:py-3 rounded-full inter font-normal transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:scale-105 animate-fade-in-up animation-delay-600 text-[18px] sm:text-sm md:text-base" cta="hero">Agendá una visita</a>
      </div>
    </div>

    <!-- WhatsApp botón 
    <div class="absolute bottom-4 right-4 md:bottom-8 md:right-8 z-10">
      <a href="#" class="animate-bounce hover:animate-none transition-transform duration-300 hover:scale-110">
        <img src="images/whatsapp.svg" alt="WhatsApp" class="w-12 h-12 md:w-16 md:h-16">
      </a>
    </div>-->
    <div class="absolute w-10/12 bottom-0 sm:bottom-6 left-1/2 transform -translate-x-1/2 text-white text-[10px] sm:text-[14px] z-10">
      <p>*Los metros expresados se consideran estimados pudiendo estos no resultar ser los definitivos de la unidad funcional. Los metros finales no podrán tener una variación menor ni mayor al 5% de los mencionados.<br>
        ** La financiación se estipula en 30 cuotas, iguales, mensuales y consecutivas a abonar en dólares estadounidenses billetes.</p>
    </div>
    <div class=""></div>
  </section>

  <!-- 2) Pantalla dividida con slider -->
  <section class=" py-20 px-6 bg-dark text-white">
    <a name="nosotros" class="block sm:h-[110px]"></a>
    <div class="sm:flex w-11/12 mx-auto">
      <div class="w-full sm:w-6/12 mb-8">
        <h2 class="text-3xl mb-8 canela-light text-[30px] sm:text-[42px] leading-tight">Imaginá tu vida<br>en Indigo Nordelta</h2>
        <p class="mb-12 inter w-11/12 text-[16px]">Indigo Nordelta propone una forma de habitar única, donde diseño, calidad y naturaleza se integran en un entorno privilegiado. <br>Unidades de 2 y 3 dormitorios en suite, desde 189 m<sup>2</sup>, con layouts funcionales, amplios espacios y vistas panorámicas al agua. Terrazas con parrilla, opción de piscina privada y una ubicación estratégica en la Bahía, rodeada de verde, paseo costero y gastronomía. Una experiencia pensada para vivir bien.</p>
        <a href="/#formulario" class="ripple relative w-fit overflow-hidden bg-secondary text-white  text-[18px] sm:text-sm px-5 py-2 rounded-full transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:bg-blue-700" cta="disponibilidad">Conocer disponibilidad</a>
      </div>
      <div class="w-full sm:w-6/12" id="gallerysmall">
        <div class="relative  w-full overflow-hidden">
          <div class="swiper1 w-full ">
            <div class="swiper-wrapper">
              <div class="swiper-slide h-fit"><img src="images/gallery_small/1.png" class="w-full relative" /></div>
              <div class="swiper-slide h-fit"><img src="images/gallery_small/2.png" class="w-full relative" /></div>
              <div class="swiper-slide h-fit"><img src="images/gallery_small/3.png" class="w-full relative" /></div>
              <div class="swiper-slide h-fit"><img src="images/gallery_small/4.png" class="w-full relative" /></div>
              <div class="swiper-slide h-fit"><img src="images/gallery_small/5.png" class="w-full relative" /></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"><img src="images/flecha-round-blanca.svg" class=" scale-x-[-1] -translate-x-[-50%]"></div>
            <div class="swiper-button-next"><img src="images/flecha-round-blanca.svg"></div>
          </div>

          <script>
            new Swiper('.swiper1', {
              loop: true,
              pagination: {
                el: '.swiper-pagination',
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          </script>

        </div>
      </div>
    </div>
  </section>

  <!-- 3) CTA central -->
  <section class="flex items-center justify-center py-16 mt-16">
    <a href="/#formulario" class="shimmer ripple flex space-x-2 mx-auto w-fit overflow-hidden bg-[#f4851f] text-white px-4 py-4 rounded-full text-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:scale-105 hover:bg-[#e6751a]" cta="invertir">
      <span>Quiero invertir</span>
      <img src="images/flecha-round-blanca-naranja.svg" alt="Arrow" class="w-8">
    </a>
  </section>

  <!-- 4) Video -->
  <section class="py-16 px-6 flex items-center justify-center">
    <video class="w-full w-full sm:w-8/12" poster="images/video-poster.jpg" controls>
      <source src="videos/indigo-promo.mp4" type="video/mp4">
    </video>
  </section>

  <!-- 5) Bullet 3x3 -->
  <?php $class = "mb-2 transition-colors duration-300 group-hover:text-[#f4851f] text-center"; ?>
  <?php $animclass = "feature-card opacity-0 transform translate-y-8 transition-all duration-700 hover:scale-105 hover:-translate-y-2 cursor-pointer group flex flex-col items-center justify-center"; ?>
  <a name="caracteristicas" class="block sm:h-[110px]"></a>
  <section class="pb-20 text-center w-11/12 sm:w-8/12 mx-auto items-center">
    <h3 class="mx-auto canela-light text-[40px] sm:text-[56px]">Amenities Indigo Nordelta</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 px-6 py-20 text-center w-11/12 sm:w-10/12 mx-auto items-start">
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/1-spa.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Salón de relax, masajes, yoga o spa</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/2-amarras.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Salida con control de acceso
          hacia el paseo costero propio</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/3-sauna.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Sauna seco</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/Outline.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Pileta semiolímpica climatizada y cubierta de 25 m. de largo</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/5-gym.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Gimnasio</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/6-sum.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Salón de usos múltiples</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/7-cocina.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Cocina con equipamiento</h3>
      </div>
      <div class="<?php echo $animclass; ?>">
        <img src="images/amenities/8-duchas.png" class="mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
        <h3 class="<?php echo $class; ?>">Sanitarios, vestuarios y duchas</h3>
      </div>

    </div>
    <a href="/#formulario" class="ripple mx-auto flex w-fit overflow-hidden bg-dark text-white px-6 py-4 rounded-full text-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:scale-105 hover:bg-dark/80 space-x-2" cta="amenities"><span class="whitespace-nowrap
">Quiero comprar</span> <img src="images/flecha-round-blanca.svg" alt="Arrow" class="w-8"></a>
  </section>

  <section class="">
    <img src="images/full-width-image.png" alt="Indigo Nordelta" class="w-full block ">
  </section>

  <!-- 7) Otro slider -->
  <a name="imagenes" class="block sm:h-[110px]"></a>
  <section class="py-8 sm:py-20 sm:px-6 flex items-center justify-center">
    <div class="relative overflow-hidden w-11/12 pull-right w-full hidden sm:block">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/gallery/1.png" alt="Render 1"></div>
          <div class="swiper-slide"><img src="images/gallery/2.png" alt="Render 2"></div>
          <div class="swiper-slide"><img src="images/gallery/3.png" alt="Render 3"></div>
          <div class="swiper-slide"><img src="images/gallery/4.png" alt="Render 4"></div>
          <div class="swiper-slide"><img src="images/gallery/5.png" alt="Render 5"></div>
          <div class="swiper-slide"><img src="images/gallery/6.png" alt="Render 6"></div>
          <div class="swiper-slide"><img src="images/gallery/7.png" alt="Render 7"></div>
          <div class="swiper-slide"><img src="images/gallery/8.png" alt="Render 8"></div>
        </div>
      </div>
      <div class="flex space-x-2 mt-4">
        <div class="swiper-button-prev2"><img src="images/slide-arrow.svg" class="w-8 h-8 scale-x-[-1]"></div>
        <div class="swiper-button-next2"><img src="images/slide-arrow.svg" class="w-8 h-8"></div>
      </div>
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: "auto",
          spaceBetween: 30,
          pagination: {
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next2",
            prevEl: ".swiper-button-prev2",
          },
        });
      </script>
    </div>
    <div class="block sm:hidden w-full">
      <div class="swiper mySwiperMobile">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/mobile/1.png" alt="Render 1"></div>
          <div class="swiper-slide"><img src="images/mobile/2.png" alt="Render 2"></div>
          <div class="swiper-slide"><img src="images/mobile/3.png" alt="Render 3"></div>
          <div class="swiper-slide"><img src="images/mobile/4.png" alt="Render 4"></div>
          <div class="swiper-slide"><img src="images/mobile/5.png" alt="Render 5"></div>
          <div class="swiper-slide"><img src="images/mobile/6.png" alt="Render 6"></div>
          <div class="swiper-slide"><img src="images/mobile/7.png" alt="Render 7"></div>
          <div class="swiper-slide"><img src="images/mobile/8.png" alt="Render 8"></div>
        </div>
      </div>
      <div class="flex space-x-2 mt-4 ml-2">
        <div class="swiper-button-prev3"><img src="images/slide-arrow.svg" class="w-8 h-8 scale-x-[-1]"></div>
        <div class="swiper-button-next3"><img src="images/slide-arrow.svg" class="w-8 h-8"></div>
      </div>
      <script>
        var swiper = new Swiper(".mySwiperMobile", {
          slidesPerView: "auto",
          spaceBetween: 30,
          pagination: {
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next3",
            prevEl: ".swiper-button-prev3",
          },
        });
      </script>
    </div>
  </section>

  <!-- 8) Mapa -->
  <a name="detalles" class="block sm:h-[110px]"></a>
  <section>
    <iframe src="https://snazzymaps.com/embed/731882" width="100%" class="h-[80vh]" style="border:none;"></iframe>
  </section>

  <!-- 9) CTA central -->
  <section class="flex items-center justify-center py-16">
    <a href="/#formulario" class="ripple flex space-x-4 items-center justify-center overflow-hidden bg-dark text-white px-8 py-4 rounded-full text-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:scale-101 " cta="agenda"><img src="images/calendario.svg"><span>Agendar una visita</span></a>
  </section>

  <!-- 10) Texto 90% -->
  <section class="py-16 flex items-center justify-center px-4">
    <div class="w-11/12 text-left flex flex-col items-center justify-center">
      <h2 class="text-[30px] sm:text-[42px]  mb-4 canela-light text-secondary leading-tight mb-8">Indigo es un proyecto del futuro en Nordelta, que redefine la calidad
        de vida con diseño, naturaleza y vistas abiertas al agua. Cinco edificios inmersos en un entorno vivo, rodeados por 300 metros de costa, la bahía y el canal mayor del Río Luján.</h2>
      <p class="inter text-[16px]">Es una invitación a habitar el futuro desde lo esencial. Un desarrollo de cinco edificios integrados a un entorno natural único, rodeado de agua, vegetación y cielo abierto. Sus unidades de 2 y 3 dormitorios en suite están diseñadas para elevar la experiencia cotidiana: layouts funcionales, terrazas con parrilla, opción de piscina privada y vistas panorámicas al río. Cada espacio está pensado para acompañar un estilo de vida más presente y conectado, donde el diseño, la calidad y el entorno se alinean para ofrecer algo más que confort: una forma de vivir que respira calma, luz y sentido.</p>
    </div>
  </section>

  <!-- 11) Formulario 40/60 -->
  <a name="formulario" class="block sm:h-[110px]"></a>
  <section class="flex px-6 py-20 bg-secondary">
    <div class="container w-11/12 mx-auto sm:flex sm:justify-between">
      <div class="w-full sm:w-4/12 mb-8">
        <h2 class="text-2xl text-[30px] sm:text-[42px] leading-tight mb-8 text-white canela-light">Contactate<br>con nosotros</h2>
        <p class="text-dark mb-8">¿Querés saber más sobre Indigo y ser parte de una nueva forma de vivir en Nordelta?</p>
        <p class="text-dark">Completá tus datos y nuestro equipo te va a contactar para brindarte toda la información sobre unidades, disponibilidad y avances del proyecto. Estamos para acompañarte en cada paso.</p>
      </div>
      <div class="w-full sm:w-7/12">
        <form class="space-y-4 w-full" id="contact" method="POST">
          <div class="flex space-x-4">
            <input type="text" name="nombre" placeholder="Nombre" class="w-6/12 border px-4 py-2 rounded" required>
            <input type="email" name="email" placeholder="Email" class="w-6/12 border px-4 py-2 rounded" required>
          </div>
          <input type="text" name="telefono" placeholder="Teléfono" class="w-full border px-4 py-2 rounded" required>
          <p class="text-dark">Nuestros proyectos tienen un mínimo de USD 690.000, ¿te interesa invertir con nosotros?</p>
          <select name="interes" class="w-full border px-4 py-2 rounded" required>
            <option value="">Seleccioná una respuesta</option>
            <option>Si me interesa, estoy buscando opciones</option>
            <option>Si me interesa y quiero en Nordelta</option>
            <option>No dispongo de ese capital</option>
          </select>
          <p class="text-dark">¿Cómo querés que te contactemos?</p>
          <select name="contacto" class="w-full border px-4 py-2 rounded" required>
            <option value="">Seleccioná una respuesta</option>
            <option>Por whatsapp</option>
            <option>Por llamada</option>
            <option>Por email</option>
            <option>No quiero que me contacten</option>
          </select>
          <button type="submit" class="ripple relative overflow-hidden bg-dark text-white px-6 py-2 rounded-full transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:bg-secondary border-dark border-[1px] border-solid hover:text-dark">Enviar</button>
        </form>
        <div id="error-message" class="hidden text-red-500 mt-4"></div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <!-- JavaScript para animaciones -->
  <script>
    // Header dinámico al hacer scroll
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 100) {
        header.classList.add('bg-white/95', 'shadow-lg');
        header.classList.remove('bg-white/80');
      } else {
        header.classList.add('bg-white/80');
        header.classList.remove('bg-white/95', 'shadow-lg');
      }
    });

    // Intersection Observer para animaciones de scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observar las feature cards para animaciones
    document.addEventListener('DOMContentLoaded', function() {
      const featureCards = document.querySelectorAll('.feature-card');
      featureCards.forEach((card, index) => {
        // Delay escalonado para cada card
        setTimeout(() => {
          observer.observe(card);
        }, index * 100);
      });
    });

    // JavaScript para el formulario de contacto
    document.querySelector('form').addEventListener('submit', async function(event) {
      event.preventDefault();

      const formData = new FormData(this);
      const errorMessageDiv = document.getElementById('error-message');

      try {
        const response = await fetch('contacto.php', {
          method: 'POST',
          body: formData
        });

        if (response.ok) {
          const result = await response.text();
          if (result.trim() === 'ok') {
            window.location.href = 'gracias.php';
          } else {
            errorMessageDiv.textContent = result;
            errorMessageDiv.classList.remove('hidden');
          }
        } else {
          errorMessageDiv.textContent = 'Error en la conexión con el servidor.';
          errorMessageDiv.classList.remove('hidden');
        }
      } catch (error) {
        errorMessageDiv.textContent = 'Ocurrió un error inesperado. Por favor, intenta nuevamente.';
        errorMessageDiv.classList.remove('hidden');
      }
    });
  </script>

</body>

</html>