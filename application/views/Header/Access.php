<?php defined('SYSPATH') or die('No direct script access.');?>
                    <div class="pull-right">
<span class="divider-vertical"></span>
<?php echo HTML::anchor(Route::get('default')
		->uri(array('controller'=>'user', 'action'=>'registrate')),ucfirst(__('registrate')),
		array('rel'=>'registrate'));?>
<span class="divider-vertical"></span>
<?php echo HTML::anchor(Route::get('default')
		->uri(array('controller'=>'user', 'action'=>'login')),ucfirst(__('login')),
		array('rel'=>'login'));?>
<span class="divider-vertical"></span>		
                    </div>