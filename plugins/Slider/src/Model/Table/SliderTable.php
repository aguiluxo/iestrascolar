<?php

namespace Slider\Model\Table;

use Cake\ORM\Table;

class SliderTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('slider');
    }
}