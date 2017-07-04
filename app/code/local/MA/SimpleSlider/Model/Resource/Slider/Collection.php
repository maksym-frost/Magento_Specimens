<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 7/2/17
 * Time: 9:03 PM
 */
class MA_SimpleSlider_Model_Resource_Slider_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('simpleslider/slider');
}
}