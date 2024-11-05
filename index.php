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
        
    <?php include('./src/components/projects.php'); ?>
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