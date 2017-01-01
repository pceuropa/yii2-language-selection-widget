<?php
    use yii\helpers\Html;
	$img = Html::img($flags['now']) . ' <span class="caret"></span>';
?>
<<?= $container ?> class="dropdown">
	<?= Html::a ($img, ['#'], [ 'class' => $classContainer, 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false', ] ); ?>
	<ul class="dropdown-menu court">
		<?= $flags['all']?>
	</ul>
</<?= $container ?>>

<?php $this->registerCss(".court { width: 50px; min-width:50px}"); ?>

