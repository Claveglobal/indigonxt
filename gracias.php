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
  <link rel="stylesheet" href="main.css" />
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body class="font-sans text-gray-800">
  <?php include 'header.php'; ?>
  <section class="w-full bg-gray min-h-screen text-center py-40">
    <h1 class="text-[42px] canela-light mx-auto">¡Gracias por sumarte a Indigo!</h1>
    <p class=" w- 10/12 sm:w-4/12 mx-auto py-12">Recibimos tus datos y muy pronto nos pondremos en contacto. Si querés realizar alguna consulta adicional, comunicate con nosotros.</p>
    <a href="https://wa.me/+5491180243957" class="ripple mx-auto flex w-fit overflow-hidden bg-secondary text-white px-6 py-4 rounded-full text-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:scale-105 hover:bg-dark/80 space-x-2" cta="contacto_wp_gracias" target="_blank">
      <img src="images/whatsapp.svg" alt="Arrow" class="w-8">
      <span class="whitespace-nowrap">Contactar</span>
    </a>
  </section>
  <?php include 'footer.php'; ?>
</body>

</html>