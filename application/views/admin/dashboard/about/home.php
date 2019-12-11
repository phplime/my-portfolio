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
							        <p><?= $my_info['title'];?></p>
							    </div>
							    <div class="col-md-12">
									<label>About Me</label>
									<p><?= $my_info['about_me'];?></p>
								</div>
							</div>

							<div class="mt-15">
								<div class="form-group about_me_group">
									<div class="left_label">
										<label>Full Name</label>
									</div>
									<input type="text" name="full_name" id="name" class="form-control" placeholder="full name " value="<?= !empty($data[0]['full_name'])?$data[0]['full_name']:set_value('full_name'); ?>">
								</div>
								<div class="form-group about_me_group">
									<div class="left_label">
										<label>Nationality</label>
									</div>
									<input type="text" name="nationality" id="name" class="form-control" placeholder="Nationality" value="<?= !empty($data[0]['nationality'])?$data[0]['nationality']:set_value('nationality'); ?>">
								</div>

								<div class="form-group about_me_group">
									<div class="left_label">
										<label>Date of Birth</label>
									</div>
									<div class="input-group date">
					                   <input type="text" name="dob" id="dob" class="form-control datepicker" placeholder="yyyy-mm-dd" value="<?= !empty($data[0]['dob'])?$data[0]['dob']:set_value('dob'); ?>">
					                   <div class="input-group-addon">
					                    	<i class="fa fa-calendar"></i>
					                  	</div>
					                </div>

								</div>
								<?php if(isset($data[0]['id'])): ?>
									<?php foreach ($data[0]['about_content'] as $value): ?>
										<div class="form-group about_me_group">
											<input type="text" name="label_ex[]" id="name" class="form-control mr-10" value="<?= $value['label']?>" placeholder="Label">
											<input type="text" name="value_ex[]" id="value" class="form-control " value="<?= $value['value']?>" placeholder="Value">
										</div>
										<input type="hidden" name="ex_id[]" value="<?= $value['id']!=0?$value['id']:0; ?>">
									<?php endforeach ?>
								<?php else: ?>
									<div class="form-group about_me_group">
										<input type="text" name="label[]" id="name" class="form-control mr-10" placeholder="Label">

										<input type="text" name="value[]" id="value" class="form-control " placeholder="Value">
									</div>
								<?php endif ?>
									<div class="input_fields_wrap"></div>
									<div class="pull-right">
										<a href="javascript:;"  class="btn add_field_button">Add New</a>
									</div>
							</div>
						    <input type="hidden" name="id" value="<?= isset($data[0]['id'])?$data[0]['id']:0;?>">
						</div><!-- /.box-body -->
						<div class="box-footer" style="">
							<?php if(isset($data[0]['id']) && $data[0]['id'] !=0){ ?>
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
									<th>Name</th>
									<th>About Content</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($home as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['full_name'] ?></td>
										<td>
											<table class="table table-bordered">
												<?php foreach ($row['about_content'] as $value): ?>
												<tr>
													<td><?= $value['label']?></td>
													<td><?= $value['value']?></td>
												</tr>
												<?php endforeach ?>
											</table>
										</td>
										<td><a href="<?php echo base_url('admin/profile/edit_about/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
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
