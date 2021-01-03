<?php

namespace Traning3point2\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\LayoutFactory;
use Magento\Framework\Controller\Result\RawFactory;

class Index extends Action
{
    private $_layoutFactory;

    private $_resultRawFactory;

    public function __construct(Context $context, LayoutFactory $layoutFactory, RawFactory $resultRawFactory)
    {
        parent::__construct($context);
        $this->_layoutFactory = $layoutFactory;
        $this->_resultRawFactory = $resultRawFactory;
    }


    public function execute()
    {
        $layout = $this->_layoutFactory->create();
        $block = $layout->createBlock('Traning3point2\Test\Block\MyBlock');
        $result = $this->_resultRawFactory->create();
        return $result->setContents($block->toHtml());
    }
}
