<?php
/**
 * [HelperEventListener] BtnChangeDateTime
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @license			MIT
 */
class BtnChangeDateTimeHelperEventListener extends BcHelperEventListener {
/**
 * 登録イベント
 *
 * @var array
 */
	public $events = array(
		'Blog.Form.afterInput'
	);
	
/**
 * blogFormAfterInput
 * 
 * @param CakeEvent $event
 * @return string
 */
	public function blogFormAfterInput(CakeEvent $event) {
		$form = $event->subject();
		// ブログ記事編集画面の作成者入力欄の下にボタンを表示する
		if($form->request->params['action'] == 'admin_add' || $form->request->params['action'] == 'admin_edit'){
			if($event->data['fieldName'] == 'BlogPost.user_id') {
				$event->data['out'] = $event->data['out'] . $form->element('BtnChangeDateTime.btn_change_date_time_form');
			}
		}
		return $event->data['out'];
	}
	
}
