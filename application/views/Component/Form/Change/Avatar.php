<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $error=(isset($error)?$error:null);?>
<?php echo Form::open(Route::get('default')->uri(
		//array('controller'=>'image', 'action'=>Request::current()->action())),
		array('controller'=>Request::initial()->controller(), 'action'=>Request::initial()->action())),
		array('enctype' => 'multipart/form-data', 'class'=>'form-horizontal'));
?>
<div class="well">
	<div class="row-fluid">
		<div class="span12">
			<label for="password">
				avatar:
			</label>
			<input type="file" name="avatar" value="" />
			<span class="label label-warning"><?php  echo Arr::get($error, 'avatar');?></span>              
		</div>
	</div>
	<hr>
<?php echo Form::submit('submit', 'wyślij', array('class'=>'btn btn-success', 'rel'=>'user_change-avatar_unavalible'));?>

<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller'=>lcfirst(Request::initial()->controller()))
			),
		ucfirst(__('close')),
		array('class'=>'btn btn-small', 'rel'=>'form_close'));?>
</div>
<?php echo Form::close();?>