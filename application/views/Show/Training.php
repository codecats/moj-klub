<?php defined('SYSPATH') OR die('No direct script access');?>
<div class="well">

<?php if ( ! empty($training->type)):?>
	<h4>
	<?php echo $training->type;?>
	</h4>
<?php endif;?>

<?php if ( ! empty($training->description)):?>
	<p>
		<small>
	<?php echo $training->description;?>
		</small>
	</p>
<?php endif;?>
	<div class="row-fluid">
		<div class="span6">
			<label class="label label-success"><?php echo __('when').':';?></label>
			<p>
<?php echo __(Date::fuzzy_span(strtotime($training->start)));?>
			</p>
		</div>
		
		<div class="span6">
			<label class="label label-success">duration:</label>
			<p>
<?php
	$limes = 9;
	$duration = Date::span(strtotime($training->start), strtotime($training->finish));
	if ($duration['hours'] > 0) echo $duration['hours'].' hours, '.$duration['minutes'].' minutes.';
	elseif ($duration['hours'] === 0 AND $duration['minutes'] > $limes) echo $duration['minutes'].' minutes.';
	
	if ($duration['hours'] === 0 AND $duration['minutes'] <= $limes) echo 'less than '.($limes+1).' minutes'
?>
			</p>
		</div>
	</div>
</div>