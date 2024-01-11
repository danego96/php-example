<?php require  VIEWS . '/incs/header.php' ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> New Post </h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Post title">
                    </div>
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <textarea name="excerpt" class="form-control" id="excerpt" rows="3" placeholder="Post excerpt"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="5" placeholder="Post content"></textarea>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
</main>
<?php require VIEWS . '/incs/footer.php' ?>