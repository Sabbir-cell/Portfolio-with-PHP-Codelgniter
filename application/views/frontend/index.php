<!doctype html>
<html lang="en">
    <?php include 'header.php'; ?>
    <body>
        
        <!--================Header Menu Area =================-->
        <div id="i"></div>
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><h4>SABBIR</h4></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="#home" id="home_link">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="#about" id="about_link">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="#service"id="service_link">Services</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#" id="projects_link">Projects</a></li>
										<li class="nav-item"><a class="nav-link" href="#" id="project_details_link">Project Details</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#blog" id="blog_link" class="nav-link">Blog</a>
								</li> 
								<li class="nav-item"><a class="nav-link" href="#contact" id="contact_link">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="home_left_img header_img">
								<img src="<?php echo base_url('assets/frontend/img/banner/home-left-1.jpg'); ?>" alt="" style="width: 100%;">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="banner_content">
								<h5>This is me</h5>
								<h2>Sabbir Biswas</h2>
								<p>Web Devloper</p>
								<a class="banner_btn" href="#">Discover Now</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120" id="about">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>About Myself</h4>
        					<P>
	        					<?php echo $about_my_self = $this->db->get_where('about')->row('about_my_self'); ?>
	        				</p>
        					
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">
        					<h3>Tools Expertness</h3>
        					<div class="skill_main">
								<div class="skill_item">
									<?php
										$tools = $this->db->get_where('about')->result_array();
										foreach($tools as $tool){
									?>
										<h4 class="m-1"><?php echo $tool['tools_name'] ?> <span class="counter"><?php echo $tool['percent'] ?></span>%</h4>
										<div class="progress mb-4">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $tool['percent'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									<?php } ?>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120" id="service">
        	<div class="container">
        		<div class="main_title">
        			<h2>offerings to my clients</h2>
        			<p>Thanks first for browsing my website.If you hire me I can say with confidence that I will finish your work in the right time.</p>
        		</div>
        		<div class="feature_inner row">
        			<?php
        				$services = $this->db->get_where('service')->result_array();
        				foreach($services as $service){
        			?>
	        			<div class="col-lg-4 col-md-6">
	        				<div class="feature_item" style="width: 360px; height: 270px;" >
	        					<i class="fa fa-code-fork"></i>
	        					<h4><?php echo $service['caption']; ?></h4>
	        					<p><?php echo $service['deatils']; ?></p>
	        				</div>
	        			</div>
        			<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Projects Area =================-->

        <section class="projects_area p_120" id="projects">
        	<div class="container">
        		<div class="main_title">
					<h2>My Recent Completed Projects</h2>
					<p>I have already finished these projects.And there are so many projects in my hand,I'm always working on new projects.</p>
				</div>
        		<div class="projects_fillter">
					<ul class="filter list">
						<li class="active" data-filter="*"><a href="#">All Categories</a></li>
						<li data-filter=".work"><a href="#">Creative Work </a></li>
						<li data-filter=".web"><a href="#">Web Design</a></li>
					</ul>
				</div>
				<div class="projects_inner row">
					<?php
        				$projects = $this->db->get_where('projects')->result_array();
        				foreach($projects as $project){
        			?>
	        			<div class="col-md-4 brand web">
							<div class="projects_item">
								<img class="img-fluid" src="<?php echo base_url('uploads/project/'.$project['id'].'.jpg'); ?>" alt="" style="width: 360px; height: 220px;">
								<div class="projects_text">
									<a href="portfolio-details.html"><h4><?php echo $project['tittle']; ?></h4></a>
									<p><?php echo $project['made']; ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
        	</div>
        </section>

        <section class="portfolio_details_area p_120" id="project_details">
        			<div class="mb-5 w-100 text-center"><h1>PROJECT DETAILS</h1></div>
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-6">
							<div class="left_img">
								<img class="img-fluid" src="<?php echo base_url('assets/frontend/img/gallery/Capture.PNG'); ?>" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="portfolio_right_text">
						<?php
							$project_details = $this->db->get_where('project_deatils')->result_array();
								foreach($project_details as $project_detail){
							?>
									<h4><?php echo $project_detail['name']; ?></h4>
									<p><?php echo $project_detail['tittle']; ?></p>
									<ul class="list">
										<li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
										<li><span>Client</span>:<?php echo $project_detail['client']; ?></li>
										<li><span>Website</span>:<?php echo $project_detail['website']; ?></li>
										<li><span>Completed</span>:<?php echo $project_detail['complite']; ?></li>
									</ul>
								<?php } ?>
							</div>
						</div>
					</div>
       				<p>
       					<?php echo $project_detail = $this->db->get_where('project_deatils')->row('deatils'); ?>
       				</p>
        		</div>
        	</div>
        </section>
        <!--================End Projects Area =================-->
        
        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area p_120" id="blog">
        	<div class="container">
        		<div class="main_title">
        			<h2>This is my blog about photography</h2>
        			<p>Photography is my hobby and passion.I think you are a little better.</p>
        		</div>
        		<div class="row latest_blog_inner">
					<?php
						$blogs = $this->db->get_where('blog')->result_array();
						foreach($blogs as $blog){

					?>
                        <div class="col-md-4">
                            <div class="l_blog_item">
                                <div class="l_blog_img">
            						<img class="img-fluid" src="<?php echo base_url('uploads/blog/'.$blog['id'].'.jpg'); ?>"alt="" style="width: 360px; height: 220px;">
            					</div>
            					<div class="l_blog_text">
            						<div class="date">
            							<a href="#"><?php echo $blog['date_writter']; ?></a>
            						</div>
            						<a href="#"><h4><?php echo $blog['caption']; ?></h4></a>
            						<p><?php echo $blog['deatils']; ?></p>
            					</div>
            				</div>
            			</div>
                    <?php }?>
    			</div>
    		</div>
        </section>
        <section class="contact_area p_120" id="contact">
            <div class="container">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="457" id="gmap_canvas" src="https://maps.google.com/maps?q=Dhaka%2CBangladesh&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:457px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:457px;width:1080px;}</style></div><br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Dhaka,Bangladesh</h6>
                                <p>Mirpur Area</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">01700000000</a></h6>
                                <p>Anytime</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">sabbirbiswas991@gmail.com</a></h6>
                                <p>Send me your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" method="post" action="<?php echo site_url('portfolio/contact/create'); ?>" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"  required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"  required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest Blog Area =================-->
    	<?php include 'footer.php'; ?>
    </body>
</html>