/**
 * [Script] BtnChangeDateTime
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @license			MIT
 */
$(function () {
	$('#BoxChangeNowDateTime').insertAfter('#BlogPostPostsDateTime');
	$('#BtnNowDateTime').click(function() {
		btnChangeDateTimeValueChengeHandler();
		return false;
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
