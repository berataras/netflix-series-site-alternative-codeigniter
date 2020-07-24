﻿<?php $this->load->view('front/include/head') ?>
<?php $this->load->view('front/include/navbar') ?>

<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#">Sci-fi</a></span>
			    					<span class="yell"><a href="#">Action</a></span>
			    					<span class="orange"><a href="#">advanture</a></span>
			    				</div>
			    				<h1><a href="#">guardians of the<br>
								galaxy <span>2015</span></a></h1>
								<div class="social-btn">
									<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: 2h21’ </li>
			    						<li>  Rated: PG-13  </li>
			    						<li>  Release: 1 May 2015</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="#" class="item item-1 redbtn">more detail</a></div>
									<div><a href="#" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>		
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="<?php echo base_url('public/front/') ?>images\uploads\poster1.jpg" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#">Sci-fi</a></span>
			    					<span class="yell"><a href="#">Action</a></span>
			    					<span class="orange"><a href="#">advanture</a></span>
			    				</div>
			    				<h1><a href="#">guardians of the<br>
								galaxy <span>2015</span></a></h1>
								<div class="social-btn">
									<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: 2h21’ </li>
			    						<li>  Rated: PG-13  </li>
			    						<li>  Release: 1 May 2015</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="#" class="item item-1 redbtn">more detail</a></div>
									<div><a href="#" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>
			    				
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="<?php echo base_url('public/front/') ?>images\uploads\poster1.jpg" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>Diziler & Filmler</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
			    <div class="tab-content">
			        <div id="tab1-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								<?php foreach($contents as $content){ ?>
			            		<div class="movie-item">
			            			<div class="mv-img">
			            				<img src="<?php echo base_url("public/front/images/uploads/banner/out_banner/$content->content_out_banner") ?>" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a href="<?php echo base_url("series/$content->content_url") ?>"> İzle <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#"><?php echo $content->content_name ?></a></h6>
			            				<!-- <p><i class="ion-android-star"></i><span>7.4</span> /10</p> -->
			            			</div>
			            		</div>
								<?php } ?>
			            	</div>
			            </div>
			        </div>
			    </div>
			</div>
			<div class="title-hd">
				<h2>Diziler</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								<?php foreach($seriesContents as $sc){ ?>
			            		<div class="movie-item">
			            			<div class="mv-img">
										<img src="<?php echo base_url("public/front/images/uploads/banner/out_banner/$sc->content_out_banner") ?>" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a href="moviesingle.html"> İzle <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#"><?php echo $sc->content_name ?></a></h6>
			            				<!-- <p><i class="ion-android-star"></i><span>7.4</span> /10</p> -->
			            			</div>
			            		</div>
								<?php } ?>
			            	</div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>Fragmanlar</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
					    <?php foreach($contents as $content){ ?>
					   	<div>
							<iframe class="item-video" src="<?php echo $content->content_trailer ?>"></iframe>
					    </div>
						<?php } ?>
					</div>
					<div class="slider-nav-2 thumb-ft">
						<?php foreach($contents as $content){ ?>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("public/front/images/uploads/banner/out_banner/$content->content_out_banner") ?>" alt="photo by Barn Images">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $content->content_name ?></h4>
	                        	<p>2:30</p>
	                        </div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">En İyiler</h4>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url('public/front/') ?>images\uploads\ava1.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url('public/front/') ?>images\uploads\ava2.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url('public/front/') ?>images\uploads\ava3.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url('public/front/') ?>images\uploads\ava4.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</div>
<!-- latest new v1 section-->
<div class="latestnew">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="ads">
					<img src="<?php echo base_url("public/front/") ?>images\uploads\ads2.png" alt="">
				</div>
				<div class="title-hd">
					<h2>Latest news</h2>
				</div>
				<div class="tabs">
					<ul class="tab-links-3">
						<li class="active"><a href="#tab31">#Movies </a></li>
						<li><a href="#tab32"> #TV Shows </a></li>              
						<li><a href="#tab33">  # Celebs</a></li>                       
					</ul>
				    <div class="tab-content">
				        <div id="tab31" class="tab active">
				            <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="<?php echo base_url("public/front/") ?>images\uploads\blog-it1.jpg" alt="">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Brie Larson to play first female white house candidate Victoria Woodull in Amazon film</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab32" class="tab">
				           <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="<?php echo base_url("public/front/") ?>images\uploads\blog-it2.jpg" alt="">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 2</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab33" class="tab">
				        	<div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="<?php echo base_url("public/front/") ?>images\uploads\blog-it1.jpg" alt="">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 3</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="morenew">
					<div class="title-hd">
						<h3>More news on Blockbuster</h3>
						<a href="#" class="viewall">See all Movies news<i class="ion-ios-arrow-right"></i></a>
					</div>
					<div class="more-items">
						<div class="left">
							<div class="more-it">
								<h6><a href="#">Michael Shannon Frontrunner to play Cable in “Deadpool 2”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">French cannibal horror “Raw” inspires L.A. theater to hand out “Barf Bags”</a></h6>
								
								<span class="time">13 hours ago</span>
							</div>
						</div>
						<div class="right">
							<div class="more-it">
								<h6><a href="#">Laura Dern in talks to join Justin Kelly’s biopic “JT Leroy”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">China punishes more than 300 cinemas for box office cheating</a></h6>
								<span class="time">13 hours ago</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end of latest new v1 section-->

<?php $this->load->view('front/include/footer') ?>