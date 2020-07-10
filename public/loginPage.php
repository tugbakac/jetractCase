<?php
include 'header.php';
?>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/modalStyle.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/formStyle.css">
</link>
<!-- TO DO LIST Grid-->
<section class="page-section bg-light" id="portfolio">
  <div class="container bg-light">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Profile</h2>
      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="../img/todolist/01-thumbnail.png" alt="" />
          </a>
          <div class="portfolio-caption">
            <div class="portfolio-caption-heading">To Do List</div>
            <div class="portfolio-caption-subheading text-muted">Add or Create</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal 1-->
<div class="portfolio-modal modal fade bg-light" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="modal-body">
              <!-- Project Details Go Here-->
              <h2 class="text-uppercase">TO DO LIST</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <form id="login" action="../config/operation.php" method="post" class="mb-0 mt-0 pt-5 pb-5 text-center">
                <fieldset class="pt-2 pb-2">
                  <input placeholder="Create a new message for title" type="text" name="UserMail" tabindex="1" required>
                </fieldset>
                <fieldset>
                  <textarea placeholder="Your message enter here....." tabindex="5" required></textarea>
                </fieldset>
                <fieldset class="pt-2 pb-2">
                  <button name="submit" type="submit" class="bg-warning text-dark text-uppercase font-weight-bold" id="login-submit" data-submit="...Loading">Add</button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>