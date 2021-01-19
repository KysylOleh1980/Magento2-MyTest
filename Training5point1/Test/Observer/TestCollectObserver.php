<?php

namespace Training5point1\Test\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class TestCollectObserver implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $event_object = $observer->getEvent();
        echo $event_object->getName();
    }
}
