<?php


namespace Traning6\Test\Observer;

use Magento\Framework\Event\ObserverInterface;

class MyObserverBefore implements  ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer  $observer){
        echo '<pre>';
        echo 'Event before';
        echo '</pre>';
    }

}