<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Profile Picture</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body" style="">
						<div class="user_profile_img">
							<img src="" alt="">
						</div>
					</div><!-- /.box-body -->
				</div>
			</div>
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">About Me</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<form action="<?php echo base_url('admin/profile/add_about') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
						<div class="box-body" style="">

							<!-- csrf token -->
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

							<div class="row">
								<div class="form-group col-md-12">
							      	<label for="title">Title</label>
							        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?= !empty($data['title'])?$data['title']:set_value('title'); ?>">
							        <span class="error"><?php echo form_error('title'); ?></span>
							    </div>
							    <div class="col-md-12">
									<label>About Me</label>
									<textarea name="about_me" id="" cols="5" rows="5" class="form-control"><?= !empty($data['about_me'])?$data['about_me']:set_value('about_me'); ?></textarea>
									<span class="error"><?php echo form_error('about_me'); ?></span>
								</div>
							</div>

							<div class="row mt-15">
								<div class="col-md-12">
									<div class="social_area">
										<?php foreach ($social_sites as $site): ?>
											<label class="<?= empty($data[$site['name']])?"":"label_active"; ?>"><input type="checkbox" <?= empty($data[$site['name']])?"":"checked"; ?> class="social_label" name="<?= $site['name']; ?>" value="<?= $site['id']?>"> <?= $site['icon'];?> <?= ucfirst($site['name']); ?></label>
										<?php endforeach ?>
									</div>
								</div>
								<?php foreach ($social_sites as $site): ?>
								<div class="form-group col-sm-6 col-lg-6 col-xs-12 <?= empty($data[$site['name']])?"hidden":""; ?>  site_field_<?= $site['id']?>" >
									<div class="social_icon_area">
										<div class="s_icon"><?= $site['icon']?></div>
										<input type="text" name="<?= $site['name']?>" class="form-control" placeholder="Your <?= ucfirst($site['name'])?>" value="<?= !empty($data[$site['name']])?$data[$site['name']]:set_value($site['name']); ?>">
									</div>
								</div>
							<?php endforeach ?>
							</div>

						    <input type="hidden" name="id" value="<?= isset($data['id'])?$data['id']:0;?>">
						</div><!-- /.box-body -->
						<div class="box-footer" style="">
							<?php if(isset($data['id']) && $data['id'] !=0){ ?>
								<div class="pull-left">
					          			<a href="<?php echo base_url('admin/profile'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
					          	</div>
					          <?php } ?>
				          	<div class="pull-right">
				          		<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Submit</button>
				          	</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Home</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body" style="">
				<div class="upcoming_events">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl</th>
									<th>Title</th>
									<th>About Me</th>
									<th>username</th>
									<th width="20%">Social Sites</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($home as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['title'] ?></td>
										<td><?= $row['about_me'] ?></td>
										<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
										<td>
											<?php foreach ($social_sites as $site): ?>
												<?php if(!empty($row[$site['name']])): ?>
												<label class="user_social_icon"> <?= $site['icon'];?></label>
											<?php endif ?>
										<?php endforeach ?></td>
										<td><a href="<?php echo base_url('admin/profile/edit_home/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
									</tr>
								<?php $i++; endforeach ?>
							</tbody>
						</table>
					</div>
				</div>	
			</div><!-- /.box-body -->
		</div>
	</div>
</div>
