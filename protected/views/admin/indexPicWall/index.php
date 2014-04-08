<?php
/* @var $this IndexPicWallController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Index Pic Walls',
);

$this->menu=array(
	array('label'=>'Create IndexPicWall', 'url'=>array('create')),
	array('label'=>'Manage IndexPicWall', 'url'=>array('admin')),
);
?>

<h1>Index Pic Walls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
