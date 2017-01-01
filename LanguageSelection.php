<?php
namespace pceuropa\languageSelection;

use Yii;
use yii\helpers\Html;
use pceuropa\languageSelection\LanguageAsset;

class LanguageSelection extends \yii\base\Widget {

	public $language;
	public $url;
	public $languageParam;

	public function init(){
		parent::init();
		if ($this->language === null) {
            $this->language = ['en'];
        }
        
        if ($this->languageParam === null) {
            $this->languageParam = ['language'];
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
				$a = Html::a ($img ,  ['', $this->languageParam => $value] );
				$items .= Html::tag('li',$a );
			}
		}
		
		return $items; 
	}
	
	public function widgetRender(){

		return $this->render('language-selection', [
			'flags' => [
				'now' => $this->patchFlag(Yii::$app->language),
				'all' => $this->allFlag(),
			]
		]);
	}
}

?>
