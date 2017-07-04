<?php


class MA_SimpleSlider_Block_Awesome_Slider extends Mage_Core_Block_Template
{
    public function getData()
    {
//        $product = Mage::getModel('simpleslider/slider')->load('1');

//        Просто коллекция
//        $collection=Mage::getModel('simpleslider/slider')->getCollection();

//        Коллекция с выборкой
        $collection = Mage::getModel('simpleslider/slider')
            ->getCollection()
            ->addFilter('slider_id', '2')
            ->setOrder('slider_id', 'asc');

        return $collection;

    }


}