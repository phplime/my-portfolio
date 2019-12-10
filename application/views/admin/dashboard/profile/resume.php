<div class="row">
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Resume Type</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url('admin/profile/add_resume_type') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
				<div class="box-body" style="">

					<!-- csrf token -->
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="row">
						<div class="form-group col-md-12">
					      	<label for="type_name">Name</label>
					        <input type="text" name="type_name" id="type_name" class="form-control" placeholder="Education, Experience , etc" value="<?= !empty($type_data['type_name'])?$type_data['type_name']:set_value('type_name'); ?>">
					        <span class="error"><?php echo form_error('type_name'); ?></span>
					    </div>

					    <div class="form-group col-md-12">
					      	<label for="icon">Icon</label>
					        <input type="text" name="icon" id="icon" class="form-control" placeholder="<i class='fa fa-icon'></i>" value='<?= !empty($type_data['icon'])?$type_data['icon']:set_value('icon'); ?>'>
					        <span class="error"><?php echo form_error('icon'); ?></span>
					    </div>
					</div>
				    <input type="hidden" name="id" value="<?= $type_data['id'] !=0?$type_data['id']:0 ?>">
				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<?php if(isset($type_data['id']) && $type_data['id'] !=0){ ?>
						<div class="pull-left">
			          		<a href="<?php echo base_url('admin/profile/resume'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
			          	</div>
		          <?php } ?>
		          	<div class="pull-right">
		          		<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Submit</button>
		          	</div>
				</div>
			</form>
		</div>
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Resume</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url('admin/profile/add_resume') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
				<div class="box-body" style="">

					<!-- csrf token -->
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="row">
						<div class="form-group col-md-12">
					      	<label for="name">Type</label>
					       	<select name="resume_type" class="form-control" id="">
					       		<option value="">Select Type</option>
					       		<?php foreach ($resume_type as $value): ?>
					       			<option <?= isset($data['type_id']) && $value['id']==$data['type_id']?"selected":""; ?>  value="<?= $value['id']?>"><?= $value['type_name'];?></option>
					       		<?php endforeach ?>
					       	</select>
					        <span class="error"><?php echo form_error('resume_type'); ?></span>
					    </div>

					    <div class="form-group col-md-12">
					      	<label for="title">Title / Service *</label>
					        <input type="text" name="title" id="title" class="form-control" placeholder="title " value="<?= !empty($data['title'])?$data['title']:set_value('title'); ?>">
					        <span class="error"><?php echo form_error('title'); ?></span>
					    </div>

					    <div class="form-group col-md-12">
					      	<label for="name">Designation / institute name *</label>
					        <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation " value="<?= !empty($data['designation'])?$data['designation']:set_value('designation'); ?>">
					        <span class="error"><?php echo form_error('designation'); ?></span>
					    </div>

					    <div class="col-md-12">
							<label>Details *</label>
							<textarea name="details" id="" cols="5" rows="5" class="form-control"><?= !empty($data['details'])?$data['details']:set_value('details'); ?></textarea>
							<span class="error"><?php echo form_error('details'); ?></span>
						</div>
					</div>
					<div class="row mt-15">
						<div class="form-group col-md-6">
							<label for="name">Start Year *</label>
							<div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                   <input type="number" name="start_year" id="start_year" class="form-control" placeholder="yyyy" value="<?= !empty($data['start_year'])?$data['start_year']:set_value('start_year'); ?>">
			                </div>
					        <span class="error"><?php echo form_error('start_year'); ?></span>
					    </div>

					    <div class="form-group col-md-6">
							<label for="name">End Year</label>
							<div class="input-group date">
			                   <input type="number" name="end_year" id="end_year" class="form-control" placeholder="yyyy" value="<?= !empty($data['end_year'])?$data['end_year']:set_value('end_year'); ?>">
			                   <div class="input-group-addon">
			                    	<i class="fa fa-calendar"></i>
			                  	</div>

			                </div>
			                <p style="font-size: 12px;color: tomato;">* Empty define as present</p>
					        <span class="error"><?php echo form_error('end_year'); ?></span>
					    </div>
					</div>
				    <input type="hidden" name="id" value="<?= $data['id'] !=0?$data['id']:0 ?>">
				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<?php if(isset($data['id']) && $data['id'] !=0){ ?>
						<div class="pull-left">
			          		<a href="<?php echo base_url('admin/profile/resume'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
			          	</div>
		          <?php } ?>
		          	<div class="pull-right">
		          		<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Submit</button>
		          	</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Resume Type</h3>
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
									<th width="">Sl</th>
									<th width="">Name</th>
									<th width="">Username</th>
									<th>icon</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($resume_type as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['type_name'] ?></td>
										<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
										<td><div class="serviceImgs"><?= $row['icon'];?></div></td>
										<td><a href="<?php echo base_url('admin/profile/edit_resume_type/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
									</tr>
								<?php $i++; endforeach ?>
							</tbody>
						</table>
					</div>
				</div>	
			</div><!-- /.box-body -->
		</div>
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Resume</h3>
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
									<th width="">Sl</th>
									<th width="">Type name</th>
									<th width="">Title</th>
									<th width="">Designation</th>
									<th >User name</th>
									<th>Start Year</th>
									<th>End Year</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($resume as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['type_name'] ?></td>
										<td><?= $row['title'] ?></td>
										<td><?= $row['designation'] ?></td>
										<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
										<td><?= $row['start_year'] ?></td>
										<td><?= $row['end_year']==0?'present': $row['end_year'];?></td>
										<td><a href="<?php echo base_url('admin/profile/edit_resume/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
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
