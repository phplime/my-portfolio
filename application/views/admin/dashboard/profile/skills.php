<div class="row">
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Skills</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url('admin/profile/add_skills') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
				<div class="box-body" style="">

					<!-- csrf token -->
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="row">
						<div class="form-group col-md-12">
					      	<label for="title">Title</label>
					        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?= !empty($s_skill['title'])?$s_skill['title']:set_value('title'); ?>">
					        <span class="error"><?php echo form_error('title'); ?></span>
					    </div>
					    <div class="col-md-12">
							<label>Level</label>
							<input type="number" name="level" id="level" class="form-control" placeholder="Level" value="<?= !empty($s_skill['level'])?$s_skill['level']:set_value('level'); ?>">
					        <span class="error"><?php echo form_error('Level'); ?></span>
						</div>
					</div>
				    <input type="hidden" name="id" value="<?= $s_skill['id'] !=0?$s_skill['id']:0 ?>">
				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<?php if(isset($s_skill['id']) && $s_skill['id'] !=0){ ?>
						<div class="pull-left">
			          		<a href="<?php echo base_url('admin/profile/skills'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
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
				<h3 class="box-title">Skills</h3>
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
									<th>Level</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($skills as $row): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $row['title'] ?></td>
										<td><?= get_user_info_by_id($row['user_id'])['username'] ?></td>
										<td>
											<div class="progress">
											  	<div class="progress-bar" role="progressbar" aria-valuenow="<?= $row['level'] ?>"
											        aria-valuemin="0" aria-valuemax="100" style="width:<?= $row['level'] ?>%">
											    <?= $row['level'] ?>%
											  	</div>
											</div>

											</td>
										<td><a href="<?php echo base_url('admin/profile/edit_skills/'.$row['id']); ?>" class="btn btn-info">Edit</a></td>
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
