<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="mt-4 mb-3">
    <small>
      <a href="blog">&larr; Blog</a>
    </small>
    <?php echo $json->title; ?>
  </h1>

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Date/Time -->
      <p>
        Posted on <?php echo date("F d, Y", strtotime($json->publishDate)); ?>
        by
        <?php
          $i = 1;
          foreach ($json->authors as $author) {
            if ($i > 1) {
              echo ", ";
            }
            echo $author->name;
            $i++;
          }
        ?>
      </p>

      <hr>

      <!-- Post Content -->
      <style>
        post img {max-width: 100%;}
      </style>

      <post>
        <?php echo $json->body; ?>
      </post>

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
