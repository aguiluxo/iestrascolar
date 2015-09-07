<?php
namespace Slider\Model\Entity;

use Cake\ORM\Entity;

class Slider extends Entity
{
protected $_accesible = [
    'photo' => true,
    'photo_dir' => true,
    'position' => true,
    'titulo' => true
];
}