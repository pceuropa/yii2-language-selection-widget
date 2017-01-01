<?php
    use yii\helpers\Html;
	$img = Html::img($flags['now']) . ' <span class="caret"></span>';
?>
<li class="dropdown">
	<?= Html::a ($img, ['#'], [ 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false', ] ); ?>
	<ul class="dropdown-menu court">
		<?= $flags['all']?>
	</ul>
</li>

<?php $this->registerCss(".court { width: 50px; min-width:50px}"); ?>
