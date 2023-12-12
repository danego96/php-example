<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'TITLE'?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/main.css">
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

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
          <div class="col-md-4">
            <h3>Recent Posts</h3>
            <?php foreach ($recent_posts as $recent_post) : ?>
            <ul class="list-group">
            <li class="list-group-item"> <a href="/post/<?=$recent_post['slug']?>"> <?= $recent_post['title']?></a></li>
            </ul>
            <?php endforeach ?>
          </div>
        </div>
    </main>

    <footer class="fotter">
      <div class="p-3 bg-dark text-white text-center">
        <p> &copy; Copyright <?= date('Y') ?>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>