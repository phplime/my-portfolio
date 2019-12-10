<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Social site Names</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url('admin/activities/add_social_sites') ?>" method="post" class="skill_form" enctype= "multipart/form-data">
				<div class="box-body" style="">

					<!-- csrf token -->
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

					<div class="row">
						<div class="form-group col-md-12">
					      	<label for="title">Name</label>
					        <input type="text" name="name" id="title" class="form-control" placeholder="Title" value="<?=set_value('name'); ?>">
					        <span class="error"><?php echo form_error('name'); ?></span>
					    </div>

					    <div class="form-group col-md-12">
					      	<label for="title">Icon</label>
					        <input type="text" name="icon" id="title" class="form-control" placeholder='<i class"fa fa-icon"></i> 'value="<?=set_value('icon'); ?>">
					        <span class="error"><?php echo form_error('icon'); ?></span>
					    </div>
					   
					</div>

				    <input type="hidden" name="id" value="<?= '0';?>">
				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<div class="pull-left">
		          			<a href="<?php echo base_url('admin/activities'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
		          	</div>
		          	<div class="pull-right">
		          		<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Submit</button>
		          	</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Social Sites</h3>
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
									<th>Icon</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($social_sites as $site): ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $site['name'] ?></td>
										<td><?= $site['icon'] ?></td>
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
