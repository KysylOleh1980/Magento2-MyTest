<?php

namespace Traning2point4\Test\Controller\Index;

use Magento\Framework\App\Action\Action;

class SubTask1 extends Action
{
    public function execute()
    {
        $this->getResponse()->appendBody('my simple text');
    }
}
