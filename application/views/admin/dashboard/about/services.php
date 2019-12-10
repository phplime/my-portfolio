<div class="row">
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Services</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url('admin/profile/add_services') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
				<div class="box-body" style="">

					<!-- csrf token -->
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="row">
						<div class="form-group col-md-12">
					      	<label for="title">Title</label>
					        <input type="text" name="title" id="title" class="form-control" placeholder="Title / Designation" value="<?= !empty($data['title'])?$data['title']:set_value('title'); ?>">
					        <span class="error"><?php echo form_error('title'); ?></span>
					    </div>
					    <div class="col-md-12">
							<label>Details</label>
							<textarea name="details" id="" cols="5" rows="5" class="form-control"><?= !empty($data['details'])?$data['details']:set_value('details'); ?></textarea>
							<span class="error"><?php echo form_error('details'); ?></span>
						</div>
					</div>
					<div class="row mt-15">
						<div class="form-group col-md-12">
							<div class="serviceImg" style="display:<?= !empty($data['images'])?'block':'none'; ?>;">
								<img src="<?= !empty($data['images'])?base_url($data['images']):''; ?>" class="service_icon_preview" alt="">
							</div>
							<ul class="nav nav-tabs">
							  <li class="active"><a data-toggle="tab" href="#icon">Icon</a></li>
							  <li><a data-toggle="tab" href="#image">Image</a></li>
							</ul>
							<div class="tab-content">
							  <div id="icon" class="tab-pane fade in active <?= !empty($data['icon'])?'active':''; ?> mt-15">
							   		<input type="text" name="icon" id="icon" class="form-control" placeholder="Font awsome icon" value='<?= !empty($data['icon'])?$data['icon']:set_value('icon'); ?>'>
					        		<span class="error"><?php echo form_error('icon'); ?></span>
							  </div>
							  <div id="image" class="tab-pane fade <?= !empty($data['images'])?'active':''; ?> mt-15">
							    <input type="file" name="images" class="service_img">
							    <span class="img_error" style="color: red;"></span>
							  </div>
							</div><!-- tab-content -->
						</div>
					</div>
				    <input type="hidden" name="id" value="<?= $data['id'] !=0?$data['id']:0 ?>">
				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<?php if(isset($data['id']) && $data['id'] !=0){ ?>
						<div class="pull-left">
			          		<a href="<?php echo base_url('admin/profile/services'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
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
				<h3 class="box-title">Services</h3>
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
									<th width="">Title</th>
									<th >User name</th>
									<th>Image/icon</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($services as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['title'] ?></td>
										<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
										<td><div class="serviceImgs"><?= !empty($row['icon'])?$row['icon']:'<img src='.base_url($row['images']).' />'; ?></div></td>
										<td><a href="<?php echo base_url('admin/profile/edit_services/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
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
