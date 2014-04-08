<?php
/* @var $this IndexPicWallController */
/* @var $model IndexPicWall */

$this->breadcrumbs=array(
	'Index Pic Walls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndexPicWall', 'url'=>array('index')),
	array('label'=>'Create IndexPicWall', 'url'=>array('create')),
	array('label'=>'Update IndexPicWall', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IndexPicWall', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndexPicWall', 'url'=>array('admin')),
);
?>

<h1>View IndexPicWall #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nickname',
		'img_url',
	),
)); ?>
