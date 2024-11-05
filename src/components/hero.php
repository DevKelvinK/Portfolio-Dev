<?php
  $profiles =[
    [
      'avatar' => '/src/assets/Avatar.png',

      'name' => 'Martina Santos',

      'role' => 'Desenvolvedora PHP',

      'about' => 'Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.',

      'stack' => [
        'GitHub' => 'greenCustom',
        'PHP' => 'purpleCustom',
        'CSS' => 'blueCustom',
        'HTML' => 'redCustom ',
        'Javascript' => 'yellowCustom ',
      ],
    ],
  ]
?>

<?php foreach ($profiles as $profile): ?>
  <div class="flex flex-col items-center">
    <div class="border-2 border-redCustom rounded-full mb-16">
      <img src="<?=$profile['avatar'] ?>" alt="Avatar" class="rounded-full p-1.5">
    </div>
  
    <section class="text-center">
      <h2 class="font-inconsolata text-xl leading-120">
        Hello World! Meu nome é 
        <span class="text-redCustom"><?=$profile['name'] ?></span> 
        e sou
      </h2>
  
      <h1 class="font-asap font-bold text-[3.5rem] text-gray-600Custom leading-120 mt-2">
        <?=$profile['role'] ?>
      </h1>
  
      <p class="max-w-2xl mt-5 font-maven text-sm text-gray-400Custom leading-140">
        <?=$profile['about'] ?>
      </p>
    </section>
  
    <div class="max-w-lg mt-20 flex gap-3 flex-wrap justify-center font-inconsolata leading-120 font-bold text-gray-200Custom">
      <?php foreach ($profile['stack'] as $language => $color): ?>
        <span class="px-3 py-1 bg-<?=$color?> rounded-full">
          <?=
            $language
          ?>
        </span>
      <?php endforeach; ?> 
    </div>
  </div>
<?php endforeach; ?>
