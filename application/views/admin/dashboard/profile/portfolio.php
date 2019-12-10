<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Resume</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class=" box-body mt-15">
				<form action="<?php echo base_url('admin/profile/upload_image') ?>" method="post" enctype="multipart/form-data" id="">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="col-md-12">
						<input type="file" accept="image/*" class="info_file image_upload" name="file[]" multiple  />
					</div>

					<div class="col-md-4 mt-15">
						<select name="type_id" id="" class="form-control">
							<option value="">Select Type</option>
							<?php foreach ($portfolio_type as $value): ?>
								<option value="<?= $value['id'];?>"><?= $value['name'];?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-12 ">
				    	<div class="img_progress">
					        <div class="show_progress"style="display: none;">
					            <div class="progress">
					               <div class="progress-bar progress-bar-success progress-bar-striped myprogress" role="progressbar" style="width:0%">0%</div>
					        	</div>
					        </div>
					    </div>
				    </div>

					<div class="col-md-12">
						<div class="post_btn">
							<button type="submit" name="submit" class="btn btn-default custom_btn">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- col-6 -->
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Portfolio Type</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<form action="<?php echo base_url('admin/profile/add_portfolio_type') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
						<div class="box-body" style="">

							<!-- csrf token -->
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

							<div class="row">
								<div class="form-group col-md-12">
							      	<label for="name">Name</label>
							        <input type="text" name="name" id="name" class="form-control" placeholder="Education, Experience , etc" value="<?= !empty($data['name'])?$data['name']:set_value('name'); ?>">
							        <span class="error"><?php echo form_error('name'); ?></span>
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
			</div><!-- col-6 -->
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
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($portfolio_type as $row): ?>
											<tr>
												<td><?= $i;?></td>
												<td><?= $row['name'] ?></td>
												<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
												<td><a href="<?php echo base_url('admin/profile/edit_portfolio_type/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
											</tr>
										<?php $i++; endforeach ?>
									</tbody>
								</table>
							</div>
						</div>	
					</div><!-- /.box-body -->
				</div>
			</div><!-- col-6 -->
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="grid_view" class="grid_4">
			<?php foreach ($portfolio as $img): ?>
				<div class="item" id="hide_image_<?php echo $img['id'];?>">
					<div class="single_image ">
						<img src="<?php echo base_url($img['thumb']); ?>" alt="">
						<a href="javascript:;" class="img_delete" data-id="<?php echo $img['id'];?>"><i class="fa fa-trash"></i></a>
					</div>
				</div>	
			<?php endforeach ?>
		</div>
	</div>
</div>