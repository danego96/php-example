<div class="col-md-4">
    <h3>Recent Posts</h3>
    <?php foreach ($recent_posts as $recent_post) : ?>
        <ul class="list-group">
            <li class="list-group-item"> <a href="post?id=<?= $post['id'] ?>"> <?= $recent_post['title'] ?></a></li>
        </ul>
    <?php endforeach ?>
</div>