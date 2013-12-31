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
	public $events = array('Form.afterInput');
	
/**
 * ビュー
 * 
 * @var View 
 */
	public $View = null;
	
/**
 * Construct 
 * 
 */
	public function __construct() {
		parent::__construct();
		$this->View = ClassRegistry::getObject('view');
	}
	
/**
 * afterFormInput
 * 
 * @param Object $form
 * @param string $fieldName
 * @param string $out
 * @return string 
 */
	public function afterFormInput($form, $fieldName, $out) {
		
		// ブログ記事編集画面の作成者入力欄の下にボタンを表示する
		if($form->params['controller'] == 'blog_posts'){
			if($this->action == 'admin_add' || $this->action == 'admin_edit'){				
				if($fieldName == 'BlogPost.user_id') {
					$out = $out . $this->View->element('admin/btn_change_date_time_form', array('plugin' => 'btn_change_date_time'));
				}
			}
		}
		return $out;
		
	}
	
}
