<div class="container">
	<?php if(count($portfolio) > 0): ?>
		<div class="protfolioSection section-padding-top ">
			<div class="row">
				<div class="col-sm-12">
					<div class="sectionHeader">
						<h1>Portfolio</h1>
					</div>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="gallery_area">
					<div class="gallery_top_menu">
						<ul class="gallery_sort">
							<li><button  data-filter='all' class="active default-button">All</button></li>
							<?php foreach ($portfolio_type as $key => $type): ?>
								<li><button  data-filter='<?= $type['id'];?>' class="default-button"><?= $type['name'];?></button></li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="topRow" id="masonry4">
						<?php foreach ($portfolio as $key => $row): ?>
							<div class ="filter item <?= $row['type_id']?>">
								<img src="<?php echo base_url($row['thumb']); ?>" alt="" /> 
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>
</div><!-- container -->    
