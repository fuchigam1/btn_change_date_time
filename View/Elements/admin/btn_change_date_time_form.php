<?php
/**
 * [ADMIN] BtnChangeDateTime
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @license			MIT
 */
?>
<?php $this->BcBaser->js('/btn_change_date_time/js/admin/xdate') ?>
<?php $this->BcBaser->js('/btn_change_date_time/js/admin/change_date_time') ?>
<div id="BoxChangeNowDateTime" class="box-tolink">
	<?php echo $this->BcForm->button('現在日時に変更', array('div' => false, 'class' => 'button', 'id' => 'BtnNowDateTime')) ?>
</div>
