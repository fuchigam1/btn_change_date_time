<?php
/**
 * [ADMIN] btn_change_date_time
 *
 * @copyright		Copyright 2013, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			btn_change_date_time.views
 * @license			MIT
 */
?>
<?php $bcBaser->js('/btn_change_date_time/js/admin/xdate') ?>
<?php $bcBaser->js('/btn_change_date_time/js/admin/change_date_time') ?>
<div id="BoxChangeNowDateTime" class="box-tolink">
	<?php echo $bcForm->button('現在日時に変更', array('div' => false, 'class' => 'button', 'id' => 'BtnNowDateTime')) ?>
</div>
