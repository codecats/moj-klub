<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $rel=(isset($rel)?$rel:'login_form');?>
<?php $post=isset($post)?$post:array();?>
<?php $error=isset($error)?$error:array();?>
<?php echo Form::open(
		Route::get('default')->uri(
				array('controller'=>'user', 'action'=>'login', 'id'=>$rel)),	
				array('class'=>'well form-horizontal'));?>
				<div class="row-fluid">
				<div class="label label-warning"><?php echo Arr::get($error, 'login_identificator');?></div>
				</div>
		<div class="modal-body">
			<div class="well">
			<h5><?php echo __('Needed data');?></h5>
				<div class="row-fluid">
					<div class="span12">
<?php echo Form::input(
	'login_identificator', 
	Arr::get($post, 'login_identificator'),
	array(
		'class' 		=> 'span12 round-top-corners', 
		'placeholder' 	=> __('email/login')
	)
);?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
<?php echo Form::input(
	'password',
	'',
	array(
		'type' 			=> 'password',
		'class' 		=> 'span12 round-bottom-corners', 
		'placeholder'	=> __('password')
	)
);?>
<div class="label label-warning"><?php echo Arr::get($error, 'password');?></div>
					</div>
				</div>
			</div>
		</div>
        <div class="modal-footer">
        	<div class="row-fluid">
        		<div class="span12">
<?php echo Form::submit('submit', ucfirst(__('login')),
				array('class'=>'span12 btn btn-success', 'rel'=>$rel));?>
<label class="checkbox">
<?php echo Form::input('stay_login',null, array('checked', 'type'=>'checkbox'));?>
<small><?php echo ucfirst(__('do not log me out'));?></small>
</label>
				</div>
        	</div>
		</div>
<?php echo Form::close();?>
