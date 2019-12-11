<div class="container">
	<div class="slillArea">
		<div class="row">
			<div class="col-sm-12">
				<div class="sectionHeader">
					<h1>my skills</h1>
				</div>
			</div>
		</div><!-- row -->
		<div class="row">
			<?php foreach ($skills as $skill): ?>
				<div class="col-sm-6">
					<div class="singleProgress">
						<div class="leftProgress">
							<h4><?= $skill['title'];?></h4>
							<p><?= $skill['level']?> %</p>
						</div>
						<div class="rightProgress">
							<div class="progress">
							  <div class="progress-bar" role="progressbar" data-present="<?= $skill['level']?>" aria-valuenow="<?= $skill['level']?>" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div><!-- slillArea -->
	<div class="educationArea">
		<div class="row">
			<div class="col-sm-12">
				<div class="sectionHeader">
					<h1>RESUME</h1>
				</div>
			</div>
		</div><!-- row -->

		<?php foreach ($all_resume as $key => $value): ?>
		<div class="workExperience_area <?= $key >= 1?'educationExp section-padding-bottom':'';?>">
			<div class="workExperienceHeader">
				<i class="fa fa-home"></i>
				<h4><?= $value['type_name']?></h4>
			</div>
			<div class="workExperience">
				<?php foreach ($value['resume'] as $resume): ?>
				<div class="singleWorkExperience">
					<div class="workSummary">
						<h5 class="workYear"><?= $resume['start_year']?> - <?= $resume['end_year'] !=0?$resume['end_year']:'Present';?></h5>
					</div>
					<div class="work-details">
						<h5><?= $resume['title'];?></h5>
						<h6 class="companyName"><?= $resume['designation'];?></h6>
						<p><?= $resume['details'];?></p>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div><!-- container -->    
