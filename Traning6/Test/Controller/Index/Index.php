<?php

namespace Traning6\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

use Magento\Framework\Event\Manager;

class Index extends Action
{
    private $eventManager;

    public function __construct(
        Context $context,
        Manager $eventManager
    ) {
        $this->eventManager = $eventManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->eventManager->dispatch('my_event_before');
        echo 'Hello';
        $this->eventManager->dispatch('my_event_after');
    }
}
