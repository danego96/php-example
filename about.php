<?php

$title = 'My Blog :: About';

$post = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem accusamus ea soluta voluptatum laboriosam distinctio odio omnis aut ullam eaque obcaecati repellendus enim esse quod exercitationem, sit officiis illum eos.</p>
<p>Ipsa deserunt aliquam similique est voluptatibus, minus odio, odit delectus quidem repudiandae, sequi eius neque recusandae! Quae sapiente, velit est recusandae nisi ab excepturi cupiditate, dignissimos deserunt impedit minus aut.</p>
<p>Iure excepturi totam doloremque cumque aut eius unde fugiat nulla labore ipsam dolorum laudantium voluptatum delectus, repellat eligendi consequuntur, illum eaque officia, maiores corporis non a consequatur quia recusandae. Quod.</p>';

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

require_once 'about.tpl.php';
