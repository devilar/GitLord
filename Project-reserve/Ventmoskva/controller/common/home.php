<?php  
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_title'));
		//генерация description для всех страниц. задача 5117436
		#$this->document->setDescription($this->config->get('config_meta_description'));
		$titleForDescr = $this->config->get('config_title')?$this->config->get('config_title'):'';
		$this->document->setDescription($titleForDescr.". Магазин вентиляционных и дымоходных систем. Наш телефон в Москве: 8-499-130-2048");

		$this->data['heading_title'] = $this->config->get('config_title');
		
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/home.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/common/home.tpl';
			
			$this->data['latest'] = $this->url->link('latest/latest', '', 'SSL');
			
		} else {
			$this->template = 'default/template/common/home.tpl';
		}
		
		$this->children = array(
			'common/column_left',
			'common/column_right',
			'common/content_top',
			'common/content_bottom',
			'common/footer',
			'common/header'
		);
										
		$this->response->setOutput($this->render());
	}
}
?>