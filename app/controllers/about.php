<?php

$title = 'My Blog :: About';

$aboutContent = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem accusamus ea soluta voluptatum laboriosam distinctio odio omnis aut ullam eaque obcaecati repellendus enim esse quod exercitationem, sit officiis illum eos.</p>
<p>Ipsa deserunt aliquam similique est voluptatibus, minus odio, odit delectus quidem repudiandae, sequi eius neque recusandae! Quae sapiente, velit est recusandae nisi ab excepturi cupiditate, dignissimos deserunt impedit minus aut.</p>
<p>Iure excepturi totam doloremque cumque aut eius unde fugiat nulla labore ipsam dolorum laudantium voluptatum delectus, repellat eligendi consequuntur, illum eaque officia, maiores corporis non a consequatur quia recusandae. Quod.</p>';


$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/about.tpl.php';
