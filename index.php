	<?php require 'head.php'; ?>
	<?php require 'header.php'; ?>
	<?php require 'aside.php'; ?>
	<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
              	<div class="col-lg-9 main-chart">
              	<?php for ($j=0; $j < 3; $j++): ?>
              		<div class="row mt">
              			<?php for ($i=0; $i < 3; $i++): ?>
              				<div class="col-md-4 mb">
              					<!-- WHITE PANEL - TOP USER -->
              					<div class="white-panel pn">
              						<div class="white-header">
              							<h5>Lições Completas</h5>

              						</div>
              						<p><img src="assets/img/smokin.png" class="img-circle" width="80"></p>
              						<p><b>6 Nov, 2015</b></p>
              						<div class="row">
              							<div class="col-md-6">
              								<p class="small mt">ORGANIZAÇÃO</p>
              								<p>Reino do Código</p>
              							</div>
              							<div class="col-md-6">
              								<p class="small mt">BADGE</p>
              								<p>Smokin' Hot</p>
              							</div>
              						</div>
              					</div>
              				</div><!-- /col-md-4 -->
              			<?php endfor; ?>

              		</div><!-- /row -->
              		<?php endfor; ?>

              	</div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>
                      
                  </div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section> <!-- /main-content -->


  	</section> <!-- /container -->

  <?php require 'footer.php'; ?>