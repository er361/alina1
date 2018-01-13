<?php
/**
 * Created by PhpStorm.
 * User: ИЗБАСАР
 * Date: 13.01.2018
 * Time: 21:04
 */

$this->widgets('zii.widgets.grid.CGridView',[
   'id' => 'user_grid_ajax',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
]);