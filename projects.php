<?php

$projects = [
  [
    'name' => 'FLARD',
    'URL' => 'https://flard.free.nf/',
    'description' => 'Simple platform for creating, managing and sharing flash cards...',
    'stack' => [
      [
        "name" => "HTML",
        "icon" => "fa-brands fa-html5"
      ],
      [
        "name" => "CSS",
        "icon" => "fa-brands fa-css3-alt"
      ],
      [
        "name" => "JS",
        "icon" => "fa-brands fa-js"
      ],
      [
        "name" => "PHP",
        "icon" => "fa-brands fa-php"
      ],
      [
        "name" => "MySQL",
        "icon" => "fa-solid fa-database"
      ],
      [
        "name" => "",
        "icon" => "",
        "text" => "Twinword Text Analysis API"
      ]
    ]
  ],
  [
    'name' => 'Teetch',
    'URL' => 'https://teetch.free.nf/',
    'description' => 'A simple platform for managing classes, sharing updates with students and creating lesson plans.',
    'stack' => [
      [
        "name" => "HTML",
        "icon" => "fa-brands fa-html5"
      ],
      [
        "name" => "CSS",
        "icon" => "fa-brands fa-css3-alt"
      ],
      [
        "name" => "JS",
        "icon" => "fa-brands fa-js"
      ],
      [
        "name" => "PHP",
        "icon" => "fa-brands fa-php"
      ],
      [
        "name" => "MySQL",
        "icon" => "fa-solid fa-database"
      ],
    ]
  ],
  [
    'name' => 'Los Santos Customs',
    'URL' => 'https://ywnzo.github.io/los-santos-customs/',
    'description' => 'A small web with an ordering system for a car repair store. WIP as of now. Waiting for further communication from the client side regarding the ordering system.',
    'github' => 'https://github.com/ywnzo/los-santos-customs',
    'stack' => [
      [
        "name" => "HTML",
        "icon" => "fa-brands fa-html5"
      ],
      [
        "name" => "CSS",
        "icon" => "fa-brands fa-css3-alt"
      ],
      [
        "name" => "JS",
        "icon" => "fa-brands fa-js"
      ],
      [
        "name" => "PHP",
        "icon" => "fa-brands fa-php"
      ],
      [
        "name" => "MySQL",
        "icon" => "fa-solid fa-database"
      ],
    ]
  ],
  [
    'name' => 'Woodpeckers',
    'URL' => 'https://ywnzo.github.io/los-santos-customs/',
    'description' => 'An unfinished web for a custom-made wood-epoxy furniture brand. Discontinued. Client went silent.',
    'github' => 'https://github.com/ywnzo/woodpeckers',
    'stack' => [
      [
        "name" => "HTML",
        "icon" => "fa-brands fa-html5"
      ],
      [
        "name" => "CSS",
        "icon" => "fa-brands fa-css3-alt"
      ],
      [
        "text" => "Next.JS"
      ],
      [
        "text" => "Tailwind"
      ],
    ]
  ],
  [
    'name' => 'Oregon Trail',
    'URL' => 'https://ywnzo.github.io/oregon_trail/',
    'description' => 'A small incremental, roadtrip browser game written in Vanilla JS I am working on in my free time. Inspired by the old classic Oregon Trail.',
    'github' => 'https://github.com/ywnzo/oregon-trail',
    'stack' => [
      [
        "name" => "HTML",
        "icon" => "fa-brands fa-html5"
      ],
      [
        "name" => "CSS",
        "icon" => "fa-brands fa-css3-alt"
      ],
      [
        "name" => "JS",
        "icon" => "fa-brands fa-js"
      ],
    ]
  ],
  [
    'name' => 'Bao Bounce',
    'URL' => 'https://yawnz.itch.io/bao-bounce',
    'description' => 'A small game about a bao trying to escape an evil chopsticks holding hand. My entry for Trijam #262. Made in a little over 3 hours. ',
    'stack' => [
      [
        "text" => "Godot",
      ],
      [
        "text" => "GDscript",
      ],
      [
        "text" => "Aseprite",
      ],
    ]
  ],
  [
    'name' => 'Penguin Curling Extravaganza',
    'URL' => 'https://yawnz.itch.io/penguin-curling-extravaganza',
    'description' => 'A small game about some penguins playing curling. My entry for Micro Jam 12. Made in 2 days. ',
    'stack' => [
      [
        "text" => "Godot",
      ],
      [
        "text" => "GDscript",
      ],
      [
        "text" => "Aseprite",
      ],
    ]
  ]
]

?>

<?php include "public/comps/header.php"; ?>

<div id="content-wrapper">
  <h2>Projects</h2>
  <a style="width: fit-content;" href="mailto:erny.tamas@gmail.com" target="_blank"> Hit me up if you need a website, web app, mobile app or a game.</a>

  <div class="col" style="gap: 2rem; margin-top: 1rem;">
    <?php foreach ($projects as $project): ?>
      <?php include "public/comps/project_slot.php"; ?>
    <?php endforeach ?>
  </div>
</div>

<?php include "public/comps/footer.php"; ?>