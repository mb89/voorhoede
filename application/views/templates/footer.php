  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container text-white">
      <div class="row">
        <div class="col-md-4">
          <a class="navbar-brand text-white" href="home">
            <img src="<?php echo base_url(); ?>assets/imgs/logo.svg" alt="V" style="height: 34px;">
            De Voorhoede
          </a>
          <div style="padding-bottom: 15px">
            Copyright &copy; <?php echo date("Y"); ?>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li>
              <a href="home">Home</a>
            </li>
            <li>
              <a href="cases">Cases</a>
            </li>
            <li>
              <a href="blog">Blog</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-unstyled">
            <li>
              <a href="team">Team</a>
            </li>
            <li>
              <a href="contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      var filename = location.pathname.split('/').pop();
      $('a[href="' + filename + '"]').addClass('active');
    });
  </script>

</body>
