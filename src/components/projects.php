<?php 
  $projects = [
    [
      'thumb' => '/src/assets/Thumbnail_Project-01.png',

      'title' => 'Travelgram',

      'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',

      'stack' => [
        'HTML' => 'redCustom ',
        'CSS' => 'blueCustom',
        'GitHub' => 'greenCustom',
      ],
    ],

    [
      'thumb' => '/src/assets/Thumbnail_Project-02.png',

      'title' => 'Página de receita',

      'description' => 'Página com o passo a passo de uma receita para cupcakes',

      'stack' => [
        'HTML' => 'redCustom ',
        'CSS' => 'blueCustom',
        'GitHub' => 'greenCustom',
      ],
    ],

    [
      'thumb' => '/src/assets/Thumbnail_Project-03.png',

      'title' => 'Tech News',

      'description' => 'Homepage de um portal de notícias sobre a área de tecnologia',

      'stack' => [
        'HTML' => 'redCustom ',
        'CSS' => 'blueCustom',
        'JS' => 'yellowCustom ',
        'GitHub' => 'greenCustom',
      ],
    ],

    [
      'thumb' => '/src/assets/Thumbnail_Project-04.png',

      'title' => 'Refund',

      'description' => 'Um sistema para pedido e acompanhamento de reembolso ',

      'stack' => [
        'HTML' => 'redCustom ',
        'CSS' => 'blueCustom',
        'JS' => 'yellowCustom ',
        'GitHub' => 'greenCustom',
      ],
    ],

    [
      'thumb' => '/src/assets/Thumbnail_Project-05.png',

      'title' => 'Página de turismo',

      'description' => 'Página com as principais informações para quem quer viajar para Busan',

      'stack' => [
        'HTML' => 'redCustom ',
        'CSS' => 'blueCustom',
        'PHP' => 'purpleCustom',
        'JS' => 'yellowCustom',
        'GitHub' => 'greenCustom',
      ],
    ],

    [
      'thumb' => '/src/assets/Thumbnail_Project-06.png',

      'title' => 'Zingen',

      'description' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',

      'stack' => [
        'HTML' => 'redCustom ',
        'CSS' => 'blueCustom',
        'PHP' => 'purpleCustom',
        'GitHub' => 'greenCustom',
      ],
    ],
  ]
?>

<nav class="mx-auto grid grid-rows-3 grid-cols-2 gap-6">
  <?php foreach($projects as $project): ?>
    <a href="" target="_blank" class="rounded-xl mx-auto my-auto hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
      <article class="bg-gray-300Custom max-w-[508px] flex gap-4 p-3 rounded-xl">
        <div class="my-auto">
          <img src="<?=$project['thumb'] ?>" alt="Tumbnail do projeto" class="object-cover rounded-lg max-w-[224px]">
        </div>

        <div class="flex flex-col gap-2 justify-between px-1 py-2">
          <div>
            <h3 class="font-asap leading-120 font-bold text-gray-600Custom mb-2">
              <?=$project['title'] ?>
            </h3>
            <p class="font-maven text-sm leading-140 text-gray-500Custom">
              <?=$project['description'] ?>
            </p>
          </div>

          <div class="flex flex-wrap gap-2 font-inconsolata leading-120 font-bold text-xs text-gray-200Custom">
            <?php foreach($project['stack'] as $language => $color): ?>
              <span class="px-2 py-0.5 bg-<?=$color ?> rounded-full">
                <?=$language ?>
              </span>
            <?php endforeach; ?>
          </div>
        </div>
      </article>
    </a>
  <?php endforeach; ?>
</nav>