<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 7/2/17
 * Time: 8:51 PM
 */
class MA_SimpleSlider_Model_Resource_Slider extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('simpleslider/slider','slider_id');
    }
}