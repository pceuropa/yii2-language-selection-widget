# yii2-language-selection-widget
Menu dropdown to select languages


## Installation
```
composer require pceuropa/yii2-language-selection-widget dev-master
```

## Configure

```
use pceuropa\languageSelection\LanguageSelection;

<?= LanguageSelection::widget([
	'language' => ['pl', 'en', 'fr', 'nl', 'de'],
	'languageParam' => 'language',
	'container' => 'li', // li for navbar, div for sidebar or footer example
	'classContainer' =>  'dropdown-toggle' // btn btn-default dropdown-toggle
]) ?>
```
