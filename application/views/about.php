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
			<?php foreach ($about as $row): ?>
				<div class="aboutContent">
					<div class="aboutDetails">
						<h3><?= $row['title'];?></h3>
						<p><?= $row['about_me'];?></p>
						<ul>
							<li><b>Full Name</b> <?= $row['full_name'];?></li>
							<li><b>Nationality</b> <?= $row['nationality'];?></li>
							<li><b>Age</b> <?= $row['dob'];?></li>
							<?php foreach ($row['about_content'] as $content): ?>
								<li><b><?= $content['label'];?></b> <?= $content['value'];?> </li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="aboutBtn">
						<button class="default-button about-Btn">Download</button>
					</div>
			</div>
			<?php endforeach ?>
		</div>
	</div><!-- row -->
	<?php if(count($services) > 0): ?>
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
		<?php endif ?>
		<?php if(count($reviews) > 0): ?>
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
		<?php endif ?>
	</div><!-- container -->    
