<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/tailwindCustom.js"></script>

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <title>Portfólio Dev</title>
</head>

<body class="bg-gray-200Custom text-gray-500Custom">
  <header class="bg-intro bg-cover bg-no-repeat bg-top py-32">
    <?php include('./src/components/hero.php'); ?>
  </header>

  <main class="pt-[4.5rem] pb-36 flex flex-col gap-14">
    <div class="text-center">
      <h2 class="font-inconsolata leading-120 text-xl text-redCustom mb-2">Meu trabalho</h2>
      <h3 class="font-asap leading-120 font-bold text-2xl text-gray-600Custom">Veja os projetos em destaque</h3>
    </div>

    <nav class="mx-auto grid grid-rows-3 grid-cols-2 gap-6">
      <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
        <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
          <div class="my-auto">
            <img src="/src/assets/Thumbnail_Project-01.png" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
          </div>
  
          <div class="flex flex-col justify-between px-1 py-2">
            <div>
              <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">Travelgram</h3>
              <p class="font-maven text-sm leading-140 text-gray-500Custom">
                Rede social onde as pessoas mostram os registros de suas viagens pelo mundo
              </p>
            </div>
  
            <div class="flex gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
              <span class="px-2 py-0.5 bg-purpleCustom rounded-full">
                PHP
              </span>
  
              <span class="px-2 py-0.5 bg-blueCustom rounded-full">
                CSS
              </span>
  
              <span class="px-2 py-0.5 bg-redCustom rounded-full">
                HTML
              </span>
  
              <span class="px-2 py-0.5 bg-yellowCustom rounded-full">
                Javascript
              </span>
            </div>
          </div>
        </article>
      </a>

      <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
        <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
          <div class="my-auto">
            <img src="/src/assets/Thumbnail_Project-02.png" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
          </div>
  
          <div class="flex flex-col justify-between px-1 py-2">
            <div>
              <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">Página de receita</h3>
              <p class="font-maven text-sm leading-140 text-gray-500Custom">
                Página com o passo a passo de uma receita para cupcakes
              </p>
            </div>
  
            <div class="flex gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
              <span class="px-2 py-0.5 bg-purpleCustom rounded-full">
                PHP
              </span>
  
              <span class="px-2 py-0.5 bg-blueCustom rounded-full">
                CSS
              </span>
  
              <span class="px-2 py-0.5 bg-redCustom rounded-full">
                HTML
              </span>
  
              <span class="px-2 py-0.5 bg-yellowCustom rounded-full">
                Javascript
              </span>
            </div>
          </div>
        </article>
      </a> 

      <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
        <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
          <div class="my-auto">
            <img src="/src/assets/Thumbnail_Project-03.png" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
          </div>
  
          <div class="flex flex-col justify-between px-1 py-2">
            <div>
              <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">Tech News</h3>
              <p class="font-maven text-sm leading-140 text-gray-500Custom">
              Homepage de um portal de notícias sobre a área de tecnologia
              </p>
            </div>
  
            <div class="flex gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
              <span class="px-2 py-0.5 bg-purpleCustom rounded-full">
                PHP
              </span>
  
              <span class="px-2 py-0.5 bg-blueCustom rounded-full">
                CSS
              </span>
  
              <span class="px-2 py-0.5 bg-redCustom rounded-full">
                HTML
              </span>
  
              <span class="px-2 py-0.5 bg-yellowCustom rounded-full">
                Javascript
              </span>
            </div>
          </div>
        </article>
      </a>

      <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
        <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
          <div class="my-auto">
            <img src="/src/assets/Thumbnail_Project-04.png" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
          </div>
  
          <div class="flex flex-col justify-between px-1 py-2">
            <div>
              <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">Refund</h3>
              <p class="font-maven text-sm leading-140 text-gray-500Custom">
                Um sistema para pedido e acompanhamento de reembolso 
              </p>
            </div>
  
            <div class="flex gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
              <span class="px-2 py-0.5 bg-purpleCustom rounded-full">
                PHP
              </span>
  
              <span class="px-2 py-0.5 bg-blueCustom rounded-full">
                CSS
              </span>
  
              <span class="px-2 py-0.5 bg-redCustom rounded-full">
                HTML
              </span>
  
              <span class="px-2 py-0.5 bg-yellowCustom rounded-full">
                Javascript
              </span>
            </div>
          </div>
        </article>
      </a>

      <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
        <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
          <div class="my-auto">
            <img src="/src/assets/Thumbnail_Project-05.png" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
          </div>
  
          <div class="flex flex-col justify-between px-1 py-2">
            <div>
              <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">Página de turismo</h3>
              <p class="font-maven text-sm leading-140 text-gray-500Custom">
                Página com as principais informações para quem quer viajar para Busan
              </p>
            </div>
  
            <div class="flex gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
              <span class="px-2 py-0.5 bg-purpleCustom rounded-full">
                PHP
              </span>
  
              <span class="px-2 py-0.5 bg-blueCustom rounded-full">
                CSS
              </span>
  
              <span class="px-2 py-0.5 bg-redCustom rounded-full">
                HTML
              </span>
  
              <span class="px-2 py-0.5 bg-yellowCustom rounded-full">
                Javascript
              </span>
            </div>
          </div>
        </article>
      </a>

      <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
        <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
          <div class="my-auto">
            <img src="/src/assets/Thumbnail_Project-06.png" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
          </div>
  
          <div class="flex flex-col justify-between px-1 py-2">
            <div>
              <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">Zingen</h3>
              <p class="font-maven text-sm leading-140 text-gray-500Custom">
                Landing Page completa e responsiva de um aplicativo de Karaokê
              </p>
            </div>
  
            <div class="flex gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
              <span class="px-2 py-0.5 bg-purpleCustom rounded-full">
                PHP
              </span>
  
              <span class="px-2 py-0.5 bg-blueCustom rounded-full">
                CSS
              </span>
  
              <span class="px-2 py-0.5 bg-redCustom rounded-full">
                HTML
              </span>
  
              <span class="px-2 py-0.5 bg-yellowCustom rounded-full">
                Javascript
              </span>
            </div>
          </div>
        </article>
      </a>
    </nav>
  </main>

  <footer class="bg-contacts bg-cover bg-no-repeat bg-bottom flex flex-col items-center px-[7.5rem] pt-32 pb-[12.5rem]">
    <div class="flex flex-col gap-2 text-center">
      <h2 class="font-inconsolata text-xl text-purpleCustom leading-120">Contato</h2>
      <h3 class="font-asap text-2xl text-gray-600Custom leading-120 font-bold">Gostou do meu trabalho? </h3>
      <p class="font-maven leading-140">
        Entre em contato ou acompanhe as minhas redes sociais!
      </p>
    </div>

    <nav class="mt-12">
      <ul class="flex flex-col gap-4">
        <li>
          <a href="https://www.linkedin.com/in/kelvin-kesley/" target="_blank" class="py-5 px-5 inline-block flex items-center gap-3 w-[400px] bg-gray-300Custom rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
            <i class="ph ph-linkedin-logo text-gray-400Custom text-[28px] hover:text-blueCustom"></i>
            <span class="flex-1 font-maven leading-140">LinkedIn</span>
            <i class="ph ph-arrow-up-right text-blueCustom text-[20px]"></i>
          </a>
        </li>

        <li>
          <a href="https://www.instagram.com" target="_blank" class="py-5 px-5 inline-block flex items-center gap-3 w-[400px] bg-gray-300Custom rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
            <i class="ph ph-instagram-logo text-gray-400Custom text-[28px]"></i>
            <span class="flex-1 font-maven leading-140">Instagram</span>
            <i class="ph ph-arrow-up-right text-blueCustom text-[20px]"></i>
          </a>
        </li>

        <li>
          <a href="https://github.com/DevKelvinK" target="_blank" class="py-5 px-5 inline-block flex items-center gap-3 w-[400px] bg-gray-300Custom rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
            <i class="ph ph-github-logo text-gray-400Custom text-[28px]"></i>
            <span class="flex-1 font-maven leading-140">GitHub</span>
            <i class="ph ph-arrow-up-right text-blueCustom text-[20px]"></i>
          </a>
        </li>

        <li>
          <a href="#" target="_blank" class="py-5 px-5 inline-block flex items-center gap-3 w-[400px] bg-gray-300Custom rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
            <i class="ph ph-instagram-logo text-gray-400Custom text-[28px]"></i>
            <span class="flex-1 font-maven leading-140">E-mail</span>
            <i class="ph ph-arrow-up-right text-blueCustom text-[20px]"></i>
          </a>
        </li>
      </ul>
    </nav>
  </footer>
</body>
</html>