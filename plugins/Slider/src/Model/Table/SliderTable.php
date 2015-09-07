<?php

namespace Slider\Model\Table;

use Cake\ORM\Table;

class SliderTable extends Table
{
    public function initialize($value='')
    {
        $this->table('slider');
        # code...
    }
}