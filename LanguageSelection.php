<?php
namespace pceuropa\languageSelection;

use Yii;
use yii\helpers\{Html, Url};
use pceuropa\languageSelection\LanguageAsset;

class LanguageSelection extends \yii\base\Widget {
	
	public $container = 'li'; // li for navbar, div for sidebar or footer example
	public $classContainer = 'dropdown-toggle'; // btn btn-default dropdown-toggle
	public $language;
	public $languageParam;
	public $url;
    

	public function init(){
		parent::init();
		if ($this->language === null) {
            $this->language = ['en'];
        }
        
        if ($this->languageParam === null) {
            $this->languageParam = 'language';
        }
        
        
        LanguageAsset::register($this->view);
        $this->url = $this->view->assetBundles[LanguageAsset::className()]->baseUrl;
	}
	
	public function run(){
		return $this->widgetRender();
	}
	
	public function patchFlag($lang){
		return $this->url .'/images/flags/'.$lang.'.png'; 
	}
	
	public function allFlag(){
		$items = '';
		foreach ($this->language as $key => $value) {
			if (Yii::$app->language != $value){
				$img = Html::img( $this->patchFlag($value));
				$a = Html::a($img,  Url::current([$this->languageParam => $key]));
				$items .= Html::tag('li',$a );
			}
		}

		return $items; 
	}
	
	public function widgetRender(){

		return $this->render('language-selection', [
			'container' => $this->container,
			'classContainer' => $this->classContainer,
			'flags' => [
				'now' => $this->patchFlag(strtolower (substr(Yii::$app->language, -2, 2)) ),
				'all' => $this->allFlag(),
			]
		]);
	}
}

?>
