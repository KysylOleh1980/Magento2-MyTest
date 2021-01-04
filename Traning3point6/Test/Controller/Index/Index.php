<?php

namespace Traning3point6\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\View\LayoutFactory;

class Index extends Action
{
    private $_resultRawFactory;

    private $_layoutFactory;

    public function __construct(Context $context, RawFactory $RawFactory, LayoutFactory $LayoutFactory)
    {
        parent::__construct($context);
        $this->_resultRawFactory = $RawFactory;
        $this->_layoutFactory = $LayoutFactory;
    }

    public function execute()
    {
        $layout = $this->_layoutFactory->create();
        $block = $layout->createBlock('\Magento\Framework\View\Element\Template');
        $block->setTemplate('Traning3point6_Test::test.phtml');
        $resultRaw = $this->_resultRawFactory->create();
        return $resultRaw->setContents($block->toHtml());

    }
}
