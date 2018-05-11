<?php include 'header.php'; ?>
<div>
	<style>
		
		.clubs{
			display:flex;
			flex-direction:row;
			
			border:2px solid #e0e0e0;
			border-radius:10px;
			padding:10px 5px 5px 10px;
			margin-left:30px;
			margin-top:10px;
			width:280px;
		}	
		.clubs h5{
			font-size:19px;
			transform:translateY(70%);
			margin-left:50px;
			
		}
		.back{
			background-color:#fbfbfb !important;
		}
		.sqback{
			position: absolute;
   	 		z-index: -1;
    		top:-50%;
   	 		bottom: 0;
    		left: 76%;
    		right: 0;
			opacity: .2;
			width:33%;
    		background-image:url("images/About Background.svg");
			background-repeat:no-repeat;
			
		}
		.alumini{
			background:white;
			border:1px solid white;
			border-radius:50%;
			height:150px;
			width:150px;
			margin:10px 50px 10px 50px;
		}
		.alumini img{
			margin-top:45px;
		}

		.tour{
			font-size: 40px;
			padding: 20px 100px 20px;
		}

		.arrow{
			color: white;
			padding-left: 20px;
		}

		.card{
			padding:10px; 
		}

		.card-img{
			height:160px;
			width:170px;
			border-radius:10px;


		}
		.bulb{
			height:220px;
			width:220px;
		}

		.testimg{
			height:70px;
			width:70px;
			margin-top:10px;
		}

		.carouselA{
			font-size:18px !important;
			padding:40px 20px 10px 20px !important;
		}
		

	</style>
</div>
		<div class="swiper-bg-wrap swiper-style-1">
			<div class="swiper-container swiper-slider swiper-bg swiper-height-1" data-autoplay="6500" data-slide-effect="fade">
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-slide-bg="images/slider-1.jpg">
						<div class="swiper-slide-caption" data-speed="0.5" data-fade="true">
							<div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
								<!--<hr class="divider-sm divider-success" data-caption-animate="fxRotateInLeft" data-caption-delay="50">
								<h1 data-caption-animate="fxRotateInRight" data-caption-delay="150">A Variety of Layouts</h1>
								<p class="subtitle-variant-3" data-caption-animate="fxRotateInLeft" data-caption-delay="350">you can use
									any layout to customize your website</p>
								<a class="btn btn-square btn-white-outline btn-lg btn-aqil btn-aqil--mod-1" href="#" data-caption-animate="fxRotateInRight" data-caption-delay="550"><span>Buy this template</span></a>-->
							</div>
						</div>
					</div>
					<div class="swiper-slide" data-slide-bg="images/slider-2.jpg">
						<div class="swiper-slide-caption" data-speed="0.5" data-fade="true">
							<div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
								<!--<hr class="divider-sm divider-success" data-caption-animate="fxRotateInLeft" data-caption-delay="50">
								<h1 data-caption-animate="fxRotateInRight" data-caption-delay="150">A Variety of Layouts</h1>
								<p class="subtitle-variant-3" data-caption-animate="fxRotateInLeft" data-caption-delay="350">you can use
									any layout to customize your website</p>
								<a class="btn btn-square btn-white-outline btn-lg btn-aqil btn-aqil--mod-1" href="#" data-caption-animate="fxRotateInRight" data-caption-delay="550"><span>Buy this template</span></a>-->
							</div>
						</div>
					</div>
					<div class="swiper-slide" data-slide-bg="images/slider-3.jpg">
						<div class="swiper-slide-caption" data-speed="0.5" data-fade="true">
							<div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
								<!--<hr class="divider-sm divider-success" data-caption-animate="fxRotateInLeft" data-caption-delay="50">
								<h1 data-caption-animate="fxRotateInRight" data-caption-delay="150">A Variety of Layouts</h1>
								<p class="subtitle-variant-3" data-caption-animate="fxRotateInLeft" data-caption-delay="350">you can use
									any layout to customize your website</p>
								<a class="btn btn-square btn-white-outline btn-lg btn-aqil btn-aqil--mod-1" href="#" data-caption-animate="fxRotateInRight" data-caption-delay="550"><span>Buy this template</span></a>-->
							</div>
						</div>
					</div>
					
				</div>
				<div class="swiper-button-prev"><span>Prev</span></div>
				<div class="swiper-button-next"><span>Next</span></div>
				<div class="swiper-pagination"></div>
			</div>
		</div>

	<section class="section-lg novi-background bg-cover" id="about-us" data-type="anchor">
		<div class="shell">
			<div class="range spacing-55">
				<div class="cell-sm-6"><h3>About Leadership Foundation</h3>
					<p>“It is possible to fly without motors, but not without knowledge and skill” – Wilbur Wright<br>A result of seven years of student lobbying, Leadership Foundation is fundamentally an organization built for and by the student body. Leadership Foundation is a student union that functions like a student colony devoted to the enhancement of multiple intelligences in students.<br>The need for additional dedicated Centre is to make a difference in standard student learning system. As the ever increasing pace of technologies changes from day-to- day, educational institutions must re-examine whether the skills they teach will definitely provide best opportunities to their students.<br>In order to integrate these skills into their academics, Leadership Foundation is one good place for the students to learn and work with a network of passionate and like – minded people in their interested field. Leadership Foundation adheres to the objective of mutating the students into professional learners so that they can stimulate their thinking and knowledge and to ensure that their mastery in fascinated domain is critically up-to- date.</p>
				</div>
				<div class="cell-sm-6">
					<div class="sqback"></div>
					<img class="img-responsive" src="images/about-us.jpg" alt="" width="570" height="370" style="margin-top:60px;"></div>
			</div>
		</div>
	</section>
	<section class="section-md novi-background bg-gray-light bg-cover text-center back">
		<div class="shell-fluid shell-custom-width"><h3>We are good at</h3>
			<div class="range range-sm-center spacing-55 box-bordered-variant-3-wrap">
				<div class="cell-sm-6 cell-lg-3">
					<article class="box-minimal box-bordered-variant-3 bg-white bg-cover">
						<div class="box-minimal-icon icon-success novi-icon"><img src="images/Student Activity.svg" height="60" width="80"></div>
						<h5 class="box-minimal-title"><a href="works/sac.php">Student Activites Center</a></h5>
						<div class="box-minimal-text">A green hub provided for enhancing Leadership skills to the students.
						</div>
					</article>
				</div>
				<div class="cell-sm-6 cell-lg-3">
					<article class="box-minimal box-bordered-variant-3 bg-white bg-cover">
						<div class="box-minimal-icon icon-success novi-icon"><img src="images/Graduation Hat.svg" height="60" width="80"></div>
						<h5 class="box-minimal-title">In Schools</h5>
						<div class="box-minimal-text">A platform for school students can think, learn faster and more efficiently.
						</div>
					</article>
				</div>
				<div class="cell-sm-6 cell-lg-3">
					<article class="box-minimal box-bordered-variant-3 bg-white bg-cover">
						<div class="box-minimal-icon icon-success novi-icon"><img src="images/Rocket.svg" height="60" width="80"></div>
						<h5 class="box-minimal-title">Incubation</h5>
						<div class="box-minimal-text">Space for dawn entreprenuers to transform ideas into business models.</div>
					</article>
				</div>
				<div class="cell-sm-6 cell-lg-3">
					<article class="box-minimal box-bordered-variant-3 bg-white bg-cover">
						<div class="box-minimal-icon icon-success novi-icon"><img src="images/Plant.svg" height="60" width="80"></div>
						<h5 class="box-minimal-title">Smart Village Revolution</h5>
						<div class="box-minimal-text">An initiative for accelerating off-grid areas towards smart environment.
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section class="section-lg text-center novi-background bg-cover" id="services" data-type="anchor"><h2>Our
			Clubs</h2>
			<p class="subtitle-variant-2">Join your interested club</p>
			<div class="range range-xs-center spacing-50 club">
				
					<a href="club/webapps/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/web.png" alt="" height="80" width="80">
						</div>
						<div class="culbname">
							<h5>WebApps</h5>
						</div>
					</div></a>
					<a href="club/events/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/event.png" alt="" height="80" width="80">
						</div>
						<div class="culbname" >
							<h5>Events</h5>
						</div>
					</div></a>
					<a href="club/automobiles/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/automobile.png" alt="" height="80" width="80">
						</div>
						<div class="culbname">
							<h5>Automobiles</h5>
						</div>
					</div></a>
					<a href="club/sports/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/sport.png" alt="" height="80" width="80">
						</div>
						<div class="culbname">
							<h5>Sports</h5>
						</div>
					</div></a>
					
					<a href="club/media/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/media.png" alt="" height="80" width="80">
						</div>
						<div class="culbname">
							<h5>Media</h5>
						</div>
					</div></a>
				
					<a href="club/cultural/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/cultural.png" alt="" height="80" width="80">
						</div>
						<div class="culbname">
							<h5>Cultural</h5>
						</div>
					</div></a>
					<a href="club/robotics/"><div class="cell-sm-4 cell-md-3 clubs">
						<div>
							<img src="images/robot.png" alt="" height="80" width="80">
						</div>
						<div class="culbname">
							<h5>Robotics</h5>
						</div>
					</div></a>
			</div>
		</section>

		<section class="section-md novi-background bg-cover bg-gray-light text-center" id="clients" data-type="anchor">
		<div class="shell"><h2>Our Partners</h2>
			<div class="range range-xs-center grid-system-bordered range-custom-bordered">
				<div class="cell-sm-6 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.aec.edu.in"><img src="images/aditya_logo.png" alt="" width="126" height="102"></a></figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.adityatekkali.edu.in"><img src="images/aitam_logo.png" alt="" width="134" height="102"></a></figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.internshala.com"><img src="images/internshala_logo.png" alt="" width="132" height="102"></a></figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.kluniversity.in"><img src="images/klu-logo.png" alt="" width="126" height="102"></a></figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.mvgrce.com"><img src="images/mvgr_logo.png" alt="" width="138" height="102"></a></figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.swarnandhra.ac.in"><img src="images/scet_logo.png" alt=""></a>
					</figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.sv.co"><img src="images/sv_logo.png" alt=""></a>
					</figure>
				</div>
				<div class="cell-sm-4 cell-md-3 grid-element">
					<figure class="box-icon-image">
						<a href="https://www.vvsfoundation.org"><img src="images/vvs_logo.png" alt=""></a>
					</figure>
				</div>

			</div>
		</div>
	</section>

	<section class="section-md novi-background bg-cover bg-light " id="leadershipfoundationon" data-type="anchor">
	  <div class="container row">
		  <center><p><h4> Leadership Foundation On</h4></br></p><center>
		  <div class="col-lg-1"></div>

	  <!--card 1-->
		<div class="col-lg-4 " >
			<div class="row">
				<div class="card well" style="width: 30rem;">
					<div class="card-body">
						<h5 class="card-title">1. Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>

			<!--card 2-->
			<div class="row">
				<div class="card well" style="width: 30rem;">
					<div class="card-body">
						<h5 class="card-title">2. Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>
			
		</div>

		<div class="col-lg-3"><img class="bulb" src="images/bulb.png" alt=""></a></div>
		
		<div class="col-lg-4" >

			<!--card 3-->
		    <div class="row">
				<div class="card well" style="width: 30rem;">
					<div class="card-body">
						<h5 class="card-title">3. Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>

			<!--card 4-->
			<div class="row">
				<div class="card well" style="width: 30rem;">
					<div class="card-body">
						<h5 class="card-title">4. Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>
			
		</div>
	  </div>
    
	</section>

	<section class="section-md novi-background bg-cover" id="testimonials" data-type="anchor">
		<div class="shell">
			<div class="range range-xs-center range-fix">
				<div class="cell-xs-10 cell-sm-12">
					<div class="complex-text complex-text-divider"><h2>What People Say</h2>
						<p class="subtitle-variant-3">testimonials</p></div>
					<div class="tabs-custom tabs-horizontal tabs-complex" id="tabs-2">
						<div class="scroll-wrap">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tabs-2-1" data-toggle="tab" aria-expanded="true">
									<div class="quote-classic-preview">
										<div class="quote-classic-preview-left">
											<img class="quote-classic-preview-image" src="images/Shekhar_96 x 106.jpg" alt="" width="96" height="106">
										</div>
										<div class="quote-classic-preview-body"><cite>Shekhar Kammula</cite>
											<p class="caption">Film Director</p></div>
									</div>
								</a></li>
								<li><a href="#tabs-2-2" data-toggle="tab">
									<div class="quote-classic-preview">
										<div class="quote-classic-preview-left">
											<img class="quote-classic-preview-image mCS_img_loaded" src="images/Sanjay-96 x106.jpg" alt="" width="96" height="106">
										</div>
										<div class="quote-classic-preview-body"><cite>Sanjay Vijay Kumar</cite>
											<p class="caption">Founder , SV.CO</p></div>
									</div>
								</a></li>
								<li><a href="#tabs-2-3" data-toggle="tab">
									<div class="quote-classic-preview">
										<div class="quote-classic-preview-left">
											<img class="quote-classic-preview-image" src="images/Ram_96 x 106 copy.jpg" alt="" width="96" height="106">
										</div>
										<div class="quote-classic-preview-body"><cite>Ram Mohan Naidu</cite>
											<p class="caption">MP , Srikakulam</p></div>
									</div>
								</a></li>	
								<li><a href="#tabs-2-4" data-toggle="tab">
									<div class="quote-classic-preview">
										<div class="quote-classic-preview-left">
											<img class="quote-classic-preview-image" src="images/Msk_96 x 106.jpg" alt="" width="96" height="106">
										</div>
										<div class="quote-classic-preview-body"><cite>MSK Prasad</cite>
											<p class="caption">Chairman , Selection Board (BCCI)</p></div>
									</div>
								</a></li>
								
							</ul>
						</div>
						<div class="tab-content tabs-centered">
							<div class="tab-pane fade in active" id="tabs-2-1">
								<div class="unit unit-sm-horizontal unit quote-boxed quote-boxed__mod-1">
									<div class="quote-boxed-left">
										<img class="quote-classic-image" src="images/Shekhar_180 x 263.jpg" alt="" width="180" height="263">
									</div>
									<div class="quote-boxed-body unit-body"><cite>Shekhar Kammula</cite>
										<p class="caption">Film Director</p>
										<p class="quote-text"><q>Leadership Foundation is the go-to- place for continuous self-improvement. Great facility with incredible industry insight and fantastic Leadership Skills. Truly a deserved mentor for the students.</q></p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tabs-2-2">
								<div class="unit unit-sm-horizontal unit quote-boxed quote-boxed__mod-1">
									<div class="quote-boxed-left">
										<img class="quote-classic-image" src="images/Sanjay_180 x 263.jpg" alt="" width="180" height="263">
									</div>
									<div class="quote-boxed-body unit-body"><cite>Sanjay Vijay Kumar</cite>
										<p class="caption">Founder , SV.CO</p>
										<p class="quote-text"><q>Leadership Foundation will support the students throughout their learning journey - from the early stages of learning to beyond! The Students are in great hands!</q></p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tabs-2-3">
								<div class="unit unit-sm-horizontal unit quote-boxed quote-boxed__mod-1">
									<div class="quote-boxed-left">
										<img class="quote-classic-image" src="images/Ram_180 x 263.jpg" alt="" width="180" height="263">
									</div>
									<div class="quote-boxed-body unit-body"><cite>Ram Mohan Naidu</cite>
										<p class="caption">MP , Srikakulam</p>
										<p class="quote-text"><q>The future of the students lay in the Leadership activities.</q></p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tabs-2-4">
								<div class="unit unit-sm-horizontal unit quote-boxed quote-boxed__mod-1">
									<div class="quote-boxed-left">
										<img class="quote-classic-image" src="images/Msk_180 x 263.jpg" alt="" width="180" height="263">
									</div>
									<div class="quote-boxed-body unit-body"><cite>MSK Prasad</cite>
										<p class="caption">Chairman , Selection Board (BCCI)</p>
										<p class="quote-text"><q>An Educational and Fascinating Experience to the Students. They would have never learnt this much from anywhere else.</q></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-lg text-center novi-background bg-cover bg-light" id="happystdt" data-type="anchor"><h2>Our Happy Students</h2>
	</br></br>
		<div class="row" style="padding-top:10px; padding-bottom:10px;">
			<div class="col-sm-3">
					<div class="card w-50" style="border:2px white; box-shadow:1px 1px 1px 1px whitesmoke; height:35vh;">
						<div class="card-body">		
							<p class="card-text">With supporting text below as a natural lead-in to additional content. The club allots you a more improvised surrounding to enhance the students ability</p>
							<hr style="display:flex; flex-direction:column;">
							<div class="row">
							<div class="col-sm-6 " style="margin-top:20px;">
								<h5 class="card-title">Card title</h5>
								<h6> sdmbfukdsk</h6>
							</div>
							<div class="col-sm-6"><img src="..\lf.info\images\robot.png" alt="..." class="rounded-circle testimg"></div>
							</div>
							
						</div>
					</div>
			</div>

			<div class="col-sm-3">
					<div class="card w-50" style="border:2px solid gray; height:30vh;">
						<div class="card-body">		
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<hr>
							<div class="row">
							<div class="col-sm-6 " style="margin-top:20px;">
								<h5 class="card-title">Card title</h5>
								<h6> sdmbfukdsk</h6>
							</div>
							<div class="col-sm-6"><img src="..\lf.info\images\robot.png" alt="..." class="rounded-circle testimg"></div>
							</div>
							
						</div>
					</div>
			</div>

			<div class="col-sm-3">
					<div class="card w-50" style="border:2px solid gray; height:30vh;">
						<div class="card-body">		
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<hr>
							<div class="row">
							<div class="col-sm-6 " style="margin-top:20px;">
								<h5 class="card-title">Card title</h5>
								<h6> sdmbfukdsk</h6>
							</div>
							<div class="col-sm-6"><img src="..\lf.info\images\robot.png" alt="..." class="rounded-circle testimg"></div>
							</div>
							
						</div>
					</div>
			</div>

			<div class="col-sm-3">
					<div class="card w-50" style="border:2px solid gray; height:30vh;">
						<div class="card-body">		
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<hr>
							<div class="row">
							<div class="col-sm-6 " style="margin-top:20px; ">
								<h5 class="card-title">Card title</h5>
								<h6> sdmbfukdsk</h6>
							</div>
							<div class="col-sm-6"><img src="..\lf.info\images\robot.png" alt="..." class="rounded-circle testimg"></div>
							</div>
							
						</div>
					</div>
			</div>

			

			<div class="align-right"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> </div>		 

		</div>
		
		
	</section>

	<section class="section-lg  novi-background bg-cover bg-gray-light" id="services" data-type="anchor"><h2>Our Happy Students</h2>
            <div class="owl-carousel owl-carousel-style-2" style="height:300px;" data-items="2" data-sm-items="4" data-stage-padding="30" data-lg-stage-padding="100" data-xl-stage-padding="300" data-loop="true" data-margin="30" data-mouse-drag="true" data-autoplay="true" data-nav="true">
                
					<div class="card-body" style="display:flex; background:white; border-radius:10px; flex-direction:column; height:40vh;"> 
						<div style="height:70%">
							<p class="card carouselA">With supporting text below as a natural lead-in to additional content.</p>
						</div>
						<hr>
						<div style="display:flex; flex-direction:row; height:30%; justify-content:space-between;">
							<div style="width:70%;">
								<p class="card-title"><b>Card title</b></p>
								<h6> sdmbfukdsk</h6>
							</div>
							<div style="width:30%;">
								<img src="..\lf.info\images\robot.png" alt="..." class="rounded-circle testimg">
							</div>
						</div>
					</div>
                
                <div class="thumbnail-modern"><a href="club/events/">
                    <img class="thumbnail-modern-image" src="images/events_card.jpg" alt="" width="637" height="428">
                    <div class="thumbnail-modern-caption">
                        <div class="thumbnail-modern-caption-body">
                            <div class="thumbnail-modern-title-left">Events</div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="thumbnail-modern"><a href="club/media/">
                    <img class="thumbnail-modern-image" src="images/media_card.jpg" alt="" width="637" height="428">
                    <div class="thumbnail-modern-caption">
                        <div class="thumbnail-modern-caption-body">
                            <div class="thumbnail-modern-title-left">Media</div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="thumbnail-modern"><a href="club/automobiles/">
                    <img class="thumbnail-modern-image" src="images/automobiles_card.jpg" alt="" width="637" height="428">
                    <div class="thumbnail-modern-caption">
                        <div class="thumbnail-modern-caption-body">
                            <div class="thumbnail-modern-title-left">AutoMobile</div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="thumbnail-modern"><a href="club/robotics/">
                    <img class="thumbnail-modern-image" src="images/robotics_card.jpg" alt="" width="637" height="428">
                    <div class="thumbnail-modern-caption">
                        <div class="thumbnail-modern-caption-body">
                            <div class="thumbnail-modern-title-left">Robotics</div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="thumbnail-modern"><a href="club/cultural/">
                    <img class="thumbnail-modern-image" src="images/cultural_card.jpg" alt="" width="637" height="428">
                    <div class="thumbnail-modern-caption">
                        <div class="thumbnail-modern-caption-body">
                            <div class="thumbnail-modern-title-left">Cultural</div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="thumbnail-modern"><a href="club/sports/">
                    <img class="thumbnail-modern-image" src="images/sports_card.jpg" alt="" width="637" height="428">
                    <div class="thumbnail-modern-caption">
                        <div class="thumbnail-modern-caption-body">
                            <div class="thumbnail-modern-title-left">Sports</div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </section>

		<section class="section-lg text-center novi-background bg-cover bg-gray-light" id="services" data-type="anchor"><h2>Our
			Alumni Work for</h2>
			<div class="range range-xs-center spacing-50 club">
				
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/800px-Accenture.svg.png" alt="" height="60" width="100">
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/1280px-Tata_Consultancy_Services_Logo.svg.png" alt="" height="70" width="90">
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/cg_logo.jpg" alt="" height="40" width="120" style="margin-top:60px;">
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/download.png" alt="" height="40" width="100" style="margin-top:60px;">
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/infostretch-logo.jpg" alt="" height="50" width="110" style="margin-top:60px;">
						</div>
					</div></a>
					
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/infosys-logo-JPEG.jpg" alt="" height="40" width="110" style="margin-top:60px;">
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/logo-Zauba.png" alt="" height="80" width="120">
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/logo-Zauba.png" alt="" height="80" width="120" >
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/logo-Zauba.png" alt="" height="80" width="120" >
						</div>
					</div></a>
					<a><div class="cell-sm-3 cell-md-15 alumini">
						<div>
							<img src="Alumni-Work/logo-Zauba.png" alt="" height="80" width="120" >
						</div>
					</div></a>
			</div>
		</section>

	
	<section class="section-lg text-center novi-background bg-cover bg-light" style="padding:15px 10px;" id="events" data-type="anchor"><h2 style="padding-bottom:20px;">Upcoming Events</h2>
		<!--	<p class="subtitle-variant-2">Register yourself</p> -->
						 
	<div class="container">
					
			 	<!--card 1-->
		<div class="row" style="padding-top:10px;">

			<div class="col-md-5" style="width:44%">
				<div class="well" style="border-radius:20px; display:flex; flex-direction:row; justify-content: space-between; padding:0px;">
					
				    	<img class="lib-img card-img" src="..\lf.info\images\cultural_card.jpg">
					
					<div style="padding-right:60px;">
						<h4>Seminar</h5>
						<p>Billgates Bhavan</br>Aditya Engineering College</p>
						<p>10:30pm<font style="float:right;">May 12th,2018</font></p>
					</div>
				</div>
			</div>

			<div class="col-md-1"></div>
				 		<!--card 2-->
			<div class="col-md-5" style="width:44%">
				<div class="well" style="border-radius:20px; display:flex; flex-direction:row; justify-content: space-between; padding:0px;">
					
				    	<img class="lib-img card-img" src="..\lf.info\images\cultural_card.jpg">
					
					<div style="padding-right:60px;">
						<h4>Seminar</h5>
						<p>Billgates Bhavan</br>Aditya Engineering College</p>
						<p>10:30pm<font style="float:right;">May 12th,2018</font></p>
					</div>
				</div>
			</div>
		</div>	  

		<div class="row">

		<!--card 3-->
		<div class="col-md-5" style="width:44%">
				<div class="well" style="border-radius:20px; display:flex; flex-direction:row; justify-content: space-between; padding:0px;">
					
				    	<img class="lib-img card-img" src="..\lf.info\images\cultural_card.jpg">
					
					<div style="padding-right:60px;">
						<h4>Seminar</h5>
						<p>Billgates Bhavan</br>Aditya Engineering College</p>
						<p>10:30pm<font style="float:right;">May 12th,2018</font></p>
					</div>
				</div>
		</div>	
		
		<div class="col-md-1"></div>
		<!--card 4-->
        <div class="col-md-5" style="width:44%">
				<div class="well" style="border-radius:20px; display:flex; flex-direction:row; justify-content: space-between; padding:0px;">
					
				    	<img class="lib-img card-img" src="..\lf.info\images\cultural_card.jpg">
					
					<div style="padding-right:60px;">
						<h4>Seminar</h5>
						<p>Billgates Bhavan</br>Aditya Engineering College</p>
						<p>10:30pm<font style="float:right;">May 12th,2018</font></p>
					</div>
				</div>
		</div>
				
	</div>
  
			<!-- <div class="owl-carousel owl-carousel-style-2" data-items="2" data-sm-items="4" data-stage-padding="30" data-lg-stage-padding="100" data-xl-stage-padding="300" data-loop="true" data-margin="30" data-mouse-drag="true" data-autoplay="true">
				<div class="thumbnail-modern"><a href="#">
					<img class="thumbnail-modern-image" src="images/services-1-637x428.jpg"  alt="" width="637" height="428">
					<div class="thumbnail-modern-caption">
						<div class="thumbnail-modern-caption-body">
							<div class="thumbnail-modern-title-left">Online Marketing</div>
						</div>
					</a>
					</div>
				</div>
				<div class="thumbnail-modern"><a href="#">
					<img class="thumbnail-modern-image" src="images/services-2-637x428.jpg" alt="" width="637" height="428">
					<div class="thumbnail-modern-caption">
						<div class="thumbnail-modern-caption-body">
							<div class="thumbnail-modern-title-left">Branding</div>
						</div>
					</a>
					</div>
				</div>
				<div class="thumbnail-modern"><a href="#">
					<img class="thumbnail-modern-image" src="images/services-1-637x428.jpg" alt="" width="637" height="428">
					<div class="thumbnail-modern-caption">
						<div class="thumbnail-modern-caption-body">
							<div class="thumbnail-modern-title-left">Web Design</div>
						</div>
					</a>
					</div>
				</div>
				<div class="thumbnail-modern"><a href="#">
					<img class="thumbnail-modern-image" src="images/services-2-637x428.jpg" alt="" width="637" height="428">
					<div class="thumbnail-modern-caption">
						<div class="thumbnail-modern-caption-body">
							<div class="thumbnail-modern-title-left">Web Development</div>
						</div>
					</a>
					</div>
				</div>
			</div> -->
		</section>
		
		<section>
			<nav class="navbar p-3 mb-2 text-white " style="background:linear-gradient(#67a5ff,#4ed5f9);">
			 <p class="text-right tour"><b>Let's Take a Tour</b> <a href="index.php" class="arrow" aria-hidden="true"> <img height="50" width="50"src="..\lf.info\right-arrow.svg" alt=""></a>  </p>
			</nav>
		</section>
<?php include 'footer.php'; ?>