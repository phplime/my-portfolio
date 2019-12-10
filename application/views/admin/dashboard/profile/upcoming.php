<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Upcoming Counter</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body" style="">
				<form action="<?php echo base_url('admin/activities/add_upcoming') ?>" method="post" enctype= "multipart/form-data">
					
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


				    <div class="form-group">
				      	<label for="title">Title</label>
				        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?= $s_upcoming['title'];?>">
				        <span class="error"><?php echo form_error('title'); ?></span>
				    </div>
				    <div class="form-group">
				      	<label for="title">Details</label>
				        <textarea name="details" id="" class="form-control" cols="5" rows="5"><?= $s_upcoming['details'];?></textarea>
				        <span class="error"><?php echo form_error('details'); ?></span>
				    </div>
				    <div class="form-group">
				      	<label for="email">Date Time</label>
				        <div class='input-group date datetimepicker' id=''>
	                      <input type='text' name="start_date" class="form-control" value="<?= $s_upcoming['start_date'];?>" />
	                      <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
                      	  </span>
                  		</div>
                  		<span class="error"><?php echo form_error('start_date'); ?></span>
				    </div>

				    <div class="form-group">
				    	<img src="<?= !empty($s_upcoming['image'])?base_url($s_upcoming['image']):"";?>" alt="" class="preview_load_image" id="preview_load_image" style="display: <?= !empty($s_upcoming['image'])?'block':'none';?>">
				    	<label>Image</label>
				    	<input type="file" name="images" id="load_image">
				    </div>

				    <div class="form-group">
				      	<label for="title">Status</label>
				       	<div class="">
				       		<label><input type="radio" name="status" class="icheck" value="1" <?= $s_upcoming['status']== 1?'checked':''; ?>> 
				       		&nbsp;Upcoming</label> &nbsp;&nbsp;
				       		<label><input type="radio" name="status" class="icheck" value="0" <?= $s_upcoming['status']== "0"?'checked':''; ?>> 
				       		&nbsp;Draft </label>
				       	</div>
				        <span class="error"><?php echo form_error('status'); ?></span>
				    </div>

				    <input type="hidden" name="id" value="<?= $s_upcoming['id']; ?>">

				</div><!-- /.box-body -->
				<div class="box-footer" style="">
					<div class="pull-left">
		          		<?php if($s_upcoming['id']!=0){ ?>
		          			<a href="<?php echo base_url('admin/activities'); ?>" class="btn btn-default btn-block btn-flat">Cancel</a>
		          		<?php } ?>
		          	</div>
		          	<div class="pull-right">
		          		<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Submit</button>
		          	</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Upcoming Counter</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body" style="">
				<div class="upcoming_events">
					<?php foreach ($upcoming as $row): ?>
						<div class="single_upcoming">
							<div class="image_ p_r">
								<img src="<?php echo base_url($row['image']); ?>" alt="">
								<label class="label edit_label <?= $row['status']==1?'label-success':'label-warning'?>"><?= $row['status']==1?'Upcoming':'Draft';?></label>
							</div>
							<div class="upcoming_body">
								<div class="upcoming_details">
									<h5><?= $row['title']; ?></h5>
									<p><?= full_time($row['start_date']); ?></p>
								</div>
								<div class="upcoming_footer">
									<a href="<?php echo base_url('admin/activities/edit_upcoming/'.$row['id']); ?>" class="btn btn-info btn-sm">Edit</a>
									<a href="" class="btn btn-danger btn-sm">Delete</a>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>	
			</div><!-- /.box-body -->
		</div>
	</div>
</div>
