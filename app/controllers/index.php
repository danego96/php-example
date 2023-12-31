<?php



$title = 'My Blog :: Home';

$posts = [
  1 => [
    'title' => 'Title 1',
    'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
    'slug' => 'title-1',
  ],
  2 => [
    'title' => 'Title 2',
    'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
    'slug' => 'title-2',
  ],
  3 => [
    'title' => 'Title 3',
    'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
    'slug' => 'title-3',
  ],
  4 => [
    'title' => 'Title 4',
    'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
    'slug' => 'title-4',
  ],
  5 => [
    'title' => 'Title 5',
    'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
    'slug' => 'title-5',
  ],

];

$recent_posts = [
  1 => [
    'title' => 'An item',
    'slug' => lcfirst(str_replace(' ', '-', 'An item')),
  ],
  2 => [
    'title' => 'Second item',
    'slug' => lcfirst(str_replace(' ', '-', 'Second item')),
  ],
  3 => [
    'title' => 'Third item',
    'slug' => lcfirst(str_replace(' ', '-', 'Third item')),
  ],
  4 => [
    'title' => 'A fourth item',
    'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
  ],
  5 => [
    'title' => 'And a fifth one',
    'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
  ],
];

require_once VIEWS . '/index.tpl.php';
