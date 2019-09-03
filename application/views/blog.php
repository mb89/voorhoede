<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="mt-4 mb-3"><?php echo $json->title; ?>
    <small><?php echo $json->subtitle; ?></small>
  </h1>

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <?php
        foreach ($json2 as $post) {
          ?>
          <div class="card mb-4">
            <?php if (isset($post->social->image->url)) { ?>
              <img class="card-img-top" src="<?php echo $post->social->image->url; ?>" alt="">
            <?php } ?>
            <div class="card-body">
              <h2 class="card-title"><?php echo $post->title; ?></h2>
              <p class="card-text"><?php echo $post->social->description; ?></p>
              <a href="blogpost?slug=<?php echo $post->slug; ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo date("F d, Y", strtotime($post->publishDate)); ?>
              by
              <?php
                $i = 1;
                foreach ($post->authors as $author) {
                  if ($i > 1) {
                    echo ", ";
                  }
                  echo $author->name;
                  $i++;
                }
              ?>
            </div>
          </div>
          <?php
        }
      ?>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card mb-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">HTML</a>
                </li>
                <li>
                  <a href="#">Freebies</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">CSS</a>
                </li>
                <li>
                  <a href="#">Tutorials</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
