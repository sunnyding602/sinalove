<?php
/* @var $this IndexPicWallController */
/* @var $model IndexPicWall */

$this->breadcrumbs=array(
	'Index Pic Walls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndexPicWall', 'url'=>array('index')),
	array('label'=>'Create IndexPicWall', 'url'=>array('create')),
	array('label'=>'View IndexPicWall', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IndexPicWall', 'url'=>array('admin')),
);
?>

<h1>Update IndexPicWall <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>