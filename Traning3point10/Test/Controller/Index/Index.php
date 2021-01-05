<?php


namespace Traning3point10\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}