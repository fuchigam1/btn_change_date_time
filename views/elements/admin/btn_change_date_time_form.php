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
<script type="text/javascript">
$(function () {
		
	$('#BoxChangeNowDateTime').insertAfter('#BlogPostPostsDateTime');
	
	$('#BtnNowDateTime').click(function() {
		btnChangeDateTimeValueChengeHandler();
	});
});

function btnChangeDateTimeValueChengeHandler() {
	
	$('#BlogPostPostsDateDate').val('');
	$('#BlogPostPostsDateTime').val('');
	$('#BlogPostPostsDate').val('');
	
	var today = new Date();
	var todayYear = today.getFullYear();
	var todayMonth = today.getMonth();
	var todayDay = today.getDate();	
	var todayHours = today.getHours();
	var todayMinutes = today.getMinutes();
	var todaySeconds = today.getSeconds();
	
	var todayX = new XDate(todayYear, todayMonth, todayDay, todayHours, todayMinutes, todaySeconds);
	var todayDateString = todayX.toString('yyyy/MM/dd');	
	var todayTimeString = todayX.toString('HH:mm:ss');
	
	$('#BlogPostPostsDateDate').val(todayDateString);
	$('#BlogPostPostsDateTime').val(todayTimeString);
	$('#BlogPostPostsDate').val(todayDateString + ' ' + todayTimeString);
	
}
</script>
<?php $bcBaser->js('/btn_change_date_time/js/admin/xdate') ?>
<div id="BoxChangeNowDateTime" class="box-tolink">
	<?php echo $bcForm->button('現在日時に変更', array('div' => false, 'class' => 'button', 'id' => 'BtnNowDateTime')) ?>
</div>
