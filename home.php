  <section id="banner">

  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/8.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Nurture</h3>
          <p>Find attachment and internship opportunities</p>

                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/5.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Specialize</h3>
          <p>Get placed in the company and department of your choice</p>

                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->

  </section>
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Partner with Business Leaders</h3>
          <p>Choose from the wide variety of companies and attachment positions. Grow your practical skills with the leaders in the market.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>



  <section class="section-padding green-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Available Attachment/Internship Departments</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>

    </div>
  </section>
  <!-- <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">

      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section> -->
