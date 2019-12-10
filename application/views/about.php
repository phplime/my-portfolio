<div class="container">
	<div class="row section-padding-top">
		<div class="col-sm-12">
			<div class="sectionHeader">
				<h1>ABOUT ME</h1>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="aboutImage">
				<img src="<?php echo base_url('assets/images/avatar.jpg'); ?>" alt="">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="aboutContent">
				<div class="aboutDetails">
					<h3>I am Devid Chester</h3>
					<p>I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations.</p>
					<ul>
						<li><b>Full Name</b> Devid Chester </li>
						<li><b>Age</b>25 Years </li>
						<li><b>Nationality</b> Bangladeshi </li>
						<li><b>Languages</b> Bangla,English </li>
						<li><b>Address</b> Dhaka, Bangladesh </li>
						<li><b>Freelance</b> Available</li>
					</ul>
				</div>
				<div class="aboutBtn">
					<button class="default-button about-Btn">Download</button>
				</div>
			</div>
		</div>
	</div><!-- row -->
	<div class="row section-padding-top">
		<div class="col-sm-12">
			<div class="sectionHeader">
				<h1>Services</h1>
			</div>
		</div>
	</div><!-- row -->
	<div class="row">
		<?php foreach ($services as $service): ?>
			<div class="col-sm-6 col-lg-4">
				<div class="single_serivce_area">
					<div class="single_service">
						<?php if (!empty($service['icon'])): ?>
							<?= $service['icon'];?>
							<?php elseif (!empty($service['images'])): ?>
								<img src="<?= base_url($service['images']); ?>"  alt="">
						<?php endif ?>
						<h5><?= $service['title'];?></h5>
						<p><?= $service['details'];?></p>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div><!-- row -->
	<div class="testimonitalSection section-padding-top section-padding-bottom">
		<div class="row">
			<div class="col-sm-12">
				<div class="sectionHeader">
					<h1>Reviews</h1>
				</div>
			</div>
		</div><!-- row -->
		<div class="">
			<div class="testimonial">
				<?php foreach ($reviews as $review): ?>
					<div class="single_testimonial">
						<div class="testimonial_text">
							<?= $review['comments'];?>
						</div>
						<div class="testimonialUser">
							<div class="single_testimonialUser">
								<?php if (!empty($review['images'])): ?>
									<div class="testimonialImage">
										<img src="<?= base_url($review['images']);?>" alt="">
									</div>
								<?php endif ?>
								<div class="testimonitalUser_details">
									<h5><?= $review['name'];?></h5>
									<p><?= $review['designation'];?></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div><!-- testimonial -->
		</div>
	</div>
</div><!-- container -->    
