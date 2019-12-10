<div class="row">
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Reviews</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url('admin/profile/add_reviews') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
				<div class="box-body" style="">

					<!-- csrf token -->
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="row">
						<div class="form-group col-md-12">
					      	<label for="name">Name</label>
					        <input type="text" name="name" id="name" class="form-control" placeholder="Name " value="<?= !empty($data['name'])?$data['name']:set_value('name'); ?>">
					        <span class="error"><?php echo form_error('name'); ?></span>
					    </div>

					    <div class="form-group col-md-12">
					      	<label for="name">Designation</label>
					        <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation " value="<?= !empty($data['designation'])?$data['designation']:set_value('designation'); ?>">
					        <span class="error"><?php echo form_error('designation'); ?></span>
					    </div>

					    <div class="col-md-12">
							<label>Comments</label>
							<textarea name="comments" id="" cols="5" rows="5" class="form-control"><?= !empty($data['comments'])?$data['comments']:set_value('comments'); ?></textarea>
							<span class="error"><?php echo form_error('comments'); ?></span>
						</div>
					</div>
					<div class="row mt-15">
						<div class="form-group col-md-12">
							<label><input type="checkbox" name="add_reviewer_image" class="toggle_btn"> Add image</label>
						</div>
						<div class="form-group col-md-12">
							<div class="serviceImg" style="display:<?= !empty($data['images'])?'block':'none'; ?>;">
								<img src="<?= !empty($data['images'])?base_url($data['images']):''; ?>" class="service_icon_preview" alt="">
							</div>
							<div id="image" class="toggle_display mt-15" style="display: none;">
							    <input type="file" name="images" class="service_img">
							    <span class="img_error" style="color: red;"></span>
							 </div>
						</div>
					</div>
				    <input type="hidden" name="id" value="<?= $data['id'] !=0?$data['id']:0 ?>">
				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<?php if(isset($data['id']) && $data['id'] !=0){ ?>
						<div class="pull-left">
			          		<a href="<?php echo base_url('admin/profile/reviews'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
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
				<h3 class="box-title">Reviews</h3>
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
									<th width="">Designation</th>
									<th >User name</th>
									<th>Image/icon</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($reviews as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['name'] ?></td>
										<td><?= $row['designation'] ?></td>
										<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
										<td><div class="serviceImgs"><?= !empty($row['icon'])?$row['icon']:'<img src='.base_url($row['images']).' />'; ?></div></td>
										<td><a href="<?php echo base_url('admin/profile/edit_reviews/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
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
