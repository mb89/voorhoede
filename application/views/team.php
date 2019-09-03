<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="mt-4 mb-3"><?php echo $json->title; ?>
    <small><?php echo $json->subtitle; ?></small>
  </h1>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/imgs/1543322842-heroes.svg" alt="">
    </div>
    <div class="col-lg-6">
      <?php echo $json->body; ?>
    </div>
  </div>
  <!-- /.row -->

  <div class="row">
    <?php
      foreach ($json->teamGrid as $team) {
        if ($team->title == "Entrance") {
          ?>
          <div class="col-lg-12 mb-12" style="margin: 0px 0px 24px;">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="<?php echo $team->image->url; ?>" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $team->title; ?></h4>
              </div>
            </div>
          </div>
          <?php
        }
      }
      foreach ($json->teamGrid as $team) {
        if (isset($team->description)) {
          ?>
          <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="<?php echo $team->image->url; ?>" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $team->title; ?></h4>
                <p class="card-text"><?php echo $team->description; ?></p>
              </div>
            </div>
          </div>
          <?php
        }
      }
      foreach ($json->teamGrid as $team) {
        if ($team->title == "Workshop") {
          ?>
          <div class="col-lg-12 mb-12" style="margin: 0px 0px 24px;">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="<?php echo $team->image->url; ?>" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $team->title; ?></h4>
              </div>
            </div>
          </div>
          <?php
        }
      }
    ?>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
