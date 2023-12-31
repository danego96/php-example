<?php require VIEWS . '/incs/header.php' ?>
<main class="main py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php foreach ($posts as $post) : ?>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title"><a href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text"><?= $post['description'] ?></p>
              <a href="/post/<?= $post['slug'] ?> class=" card-link">Card link</a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <?php require VIEWS . '/incs/sidebar.php' ?>
    </div>
</main>

<?php require VIEWS . '/incs/footer.php' ?>