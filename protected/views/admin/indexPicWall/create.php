<?php
/* @var $this IndexPicWallController */
/* @var $model IndexPicWall */

$this->breadcrumbs=array(
	'Index Pic Walls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndexPicWall', 'url'=>array('index')),
	array('label'=>'Manage IndexPicWall', 'url'=>array('admin')),
);
?>

<h1>Create IndexPicWall</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>