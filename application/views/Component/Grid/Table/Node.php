<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="well">

<?php if (is_array($errors)):?>
<!-- ERRORS -->
	<?php foreach ($errors as $error):?>
	<div class="label label-warning">
		<?php if (is_string($error)) echo $error;?>
	</div>
	<?php endforeach;?>
<!-- >ERRORS -->
<?php endif;?>

<!-- TABLE -->
	<table class="table table-hover table-bordered  table-striped">
		<caption><?php echo $title;?></caption>
		
		<thead>
			<tr>	
				<th>
					&nbsp;
				</th>		
<?php foreach ($heads as $head):?>
				<th>
	<?php echo $head->$head_field;?>
				</th>
<?php endforeach;?>	
			</tr>
		</thead>
		
		<tbody>
<?php foreach ($bodies as $body): ?>
			<tr>
				<th>
	<?php echo $body['row'];?>
				</th>
	<?php foreach ($body['content'] as $key => $field):?>
				<td>
			<?php 
				echo Form::input(
					$body['row'].'[]', 
					$key, 
					array(
						($field === TRUE) ? 'checked' : NULL,	
						'type' 		=> 'checkbox'
					)
				);
			?>
				</td>
	<?php endforeach;?>
			</tr>
<?php endforeach;?>
		</tbody>
		
	</table>
<!-- >TABLE -->
</div>