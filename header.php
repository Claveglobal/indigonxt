<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9SQR7V2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
$base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($base_url === '.') $base_url = '';
?>
<header id="header" class="fixed top-0 left-0 right-0 z-50  px-4 md:px-8 py-4 md:py-6 bg-white/80 backdrop-blur-md transition-all duration-300 ease-in-out">
  <div class="flex items-center justify-between w-11/12 mx-auto">
    <div class="text-xl md:text-2xl canela-light text-[#002942] flex items-center">
      <a href="<?= $base_url ?>/"><img src="images/logo.svg" class="h-8 md:h-8 transition-transform duration-300 hover:scale-105"></a>
    </div>
    <nav class="hidden lg:flex items-center space-x-4 xl:space-x-6 text-[#002942] inter font-normal text-sm">
      <a href="<?= $base_url ?>/#nosotros" class="relative transition-colors duration-300 hover:text-[#f4851f] after:content-[''] after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-[#f4851f] after:transition-all after:duration-300 hover:after:w-full">Nosotros</a>
      <a href="<?= $base_url ?>/#caracteristicas" class="relative transition-colors duration-300 hover:text-[#f4851f] after:content-[''] after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-[#f4851f] after:transition-all after:duration-300 hover:after:w-full">Características</a>
      <a href="<?= $base_url ?>/#imagenes" class="relative transition-colors duration-300 hover:text-[#f4851f] after:content-[''] after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-[#f4851f] after:transition-all after:duration-300 hover:after:w-full">Imágenes</a>
      <a href="<?= $base_url ?>/#detalles" class="relative transition-colors duration-300 hover:text-[#f4851f] after:content-[''] after:absolute after:bottom-[-5px] after:left-0 after:w-0 after:h-0.5 after:bg-[#f4851f] after:transition-all after:duration-300 hover:after:w-full">Detalles</a>
      <a href="<?= $base_url ?>/#formulario" class="ripple relative overflow-hidden bg-[#002942] text-white px-3 xl:px-4 py-2 rounded-full transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg transform text-xs xl:text-sm" cta="header">Coordiná tu visita</a>
    </nav>
    <div class="hidden md:flex text-xl md:text-2xl canela-light text-[#002942] items-center">
      <img src="<?= $base_url ?>/images/constructora.svg" class="h-8 md:h-8 transition-transform duration-300 hover:scale-105">
    </div>
    <!-- Mobile menu button -->
    <?php /*<button id="mobile-menu-btn" class="lg:hidden text-[#002942] cursor-pointer transition-transform duration-300 hover:scale-110 flex items-center text-2xl">
      ☰
    </button>*/ ?>
  </div>
</header>

<!-- Mobile menu -->
<div id="mobile-menu" class="fixed top-0 left-0 right-0 bg-white shadow-lg z-40 transform -translate-y-full transition-transform duration-300 lg:hidden">
  <div class="flex justify-between items-center px-4 py-4 border-b">
    <img src="<?= $base_url ?>/images/logo.svg" class="w-24">
    <button id="mobile-menu-close" class="text-2xl text-[#002942]">✕</button>
  </div>
  <nav class="px-4 py-6 space-y-4">
    <a href="<?= $base_url ?>/#nosotros" class="block py-2 text-[#002942] border-b border-gray-100">Nosotros</a>
    <a href="<?= $base_url ?>/#caracteristicas" class="block py-2 text-[#002942] border-b border-gray-100">Características</a>
    <a href="<?= $base_url ?>/#imagenes" class="block py-2 text-[#002942] border-b border-gray-100">Imágenes</a>
    <a href="<?= $base_url ?>/#detalles" class="block py-2 text-[#002942] border-b border-gray-100">Detalles</a>
    <a href="<?= $base_url ?>/#formulario" class="block bg-[#002942] text-white px-4 py-3 rounded-full text-center mt-4">Coordiná tu visita</a>
  </nav>
</div>