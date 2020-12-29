<?php


namespace Traning6\Test\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class MyObserverAfter implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        echo '<pre>';
        echo 'Event After';
        echo '</pre>';
    }
}