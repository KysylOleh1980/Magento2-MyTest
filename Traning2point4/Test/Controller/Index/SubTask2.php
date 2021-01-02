<?php

namespace Traning2point4\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RawFactory;


class SubTask2 extends Action
{
    private $_MyRawFactory;

    public function __construct(Context $context, RawFactory $rawFactory)
    {
        $this->_MyRawFactory = $rawFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRaw = $this->_MyRawFactory->create();
        $resultRaw->setContents('simple text2');
        return $resultRaw;
    }
}
