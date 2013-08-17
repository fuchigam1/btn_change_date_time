<?php
/**
 * [HookHelper] btn_change_date_time
 *
 * @copyright		Copyright , materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			btn_change_date_time.views
 * @license			MIT
 */
class BtnChangeDateTimeHookHelper extends AppHelper {
/**
 * 登録フック
 *
 * @var array
 * @access public
 */
	var $registerHooks = array('afterFormInput');
/**
 * ビュー
 * 
 * @var View 
 */
	var $View = null;
/**
 * Construct 
 * 
 */
	function __construct() {
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
	function afterFormInput($form, $fieldName, $out) {
		
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
