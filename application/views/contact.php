<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="mt-4 mb-3"><?php echo $json->title; ?>
    <small><?php echo $json->subtitle; ?></small>
  </h1>

  <!-- Content Row -->
  <div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
      <!-- Embedded Google Map -->
      <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=52.34779620000001,4.850764799999979&amp;spn=0.002537,0.006748&amp;t=m&amp;z=17&amp;output=embed"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
      <h3>Contact Details</h3>
      <p>
        Rijnsburgstraat 9-11
        <br>1059 AT Amsterdam
        <br>
      </p>
      <p>
        <abbr title="Phone">P</abbr>:
        <a href="tel:+31202610954">+31 (0)20 2610954</a>
      </p>
      <p>
        <abbr title="Email">E</abbr>:
        <a href="mailto:markbothof@gmail.com">post@voorhoede.nl</a>
      </p>
      <p>
        <abbr title="Hours">H</abbr>:
        Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Contact Form -->
  <div class="row">
    <div class="col-lg-8 mb-4">
      <h3>Send us a Message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group form-group">
          <div class="controls">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Phone Number:</label>
            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email Address:</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Message:</label>
            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
