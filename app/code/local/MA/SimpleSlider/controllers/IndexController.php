<?php

/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 03.07.2017
 * Time: 16:06
 */
class Ma_SimpleSlider_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        echo 'controller';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
//            Данные из двух элементов введенные в myblog.phtml в поле input
        $title =$this->getRequest()->getPost('title');
        $name = $this->getRequest()->getPost('name');
      
        if (isset($title) && ($title !== '')) {
            $contact = Mage::getModel('simpleslider/slider');

//           
//      1-й Способ сохранения данных          
//               title - название поля в моей таблице, куда хочу вставить
//            $contact->setData('title', $name);
//            $contact->save();

//      2-й Способ сохранения данных  
//              setTitle( указываю Title- поле таблицы в которое сохраняю)   
           $contact->setTitle($title);
           $contact->save();
        }
//       Делаю редирект на страницу myblock.phtml(см. handler <routerfrontend_index_index> в layout/ma/slider.xml)- указывается используемые block и template.
//       А в config.xml я нахожу( <frontend> <routers>)что routerfrontend-это имя(мной заданное), которое задает роутер- sliders в url   )  
        $this->_redirect('sliders/index/index');

    }

}