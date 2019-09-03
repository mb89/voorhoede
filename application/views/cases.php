<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="mt-4 mb-3"><?php echo $json->title; ?>
    <small><?php echo $json->subtitle; ?></small>
  </h1>

  <div class="row">
    <?php
      foreach ($json->projects as $project) {
        ?>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo $project->linkUrl; ?>">
              <?php
                foreach ($project->images as $image) {
                  ?>
                  <img class="card-img-top" src="<?php echo $image->url; ?>" alt="">
                  <?php
                  break;
                }
              ?>
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <?php echo $project->title; ?>
              </h4>
              <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $project->subtitle; ?>
              </h6>
              <p class="card-text">
                <?php echo $project->summary; ?>
              </p>
            </div>
          </div>
        </div>
        <?php
      }
    ?>
  </div>
  <!-- /.row -->

  <!-- Our Customers -->
  <h2>Our Customers</h2>
  <div class="row">
    <?php
      foreach ($json->services as $service) {
        foreach ($service->bodyItems as $item) {
          if ($item->type == "image") {
            ?>
            <div class="col-lg-3 col-sm-4 mb-4">
              <img class="img-fluid" src="<?php echo $item->src; ?>" alt="">
            </div>
            <?php
          }
        }
      }
    ?>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
