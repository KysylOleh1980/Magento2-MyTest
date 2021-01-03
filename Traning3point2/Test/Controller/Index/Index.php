<?php

namespace Traning3point2\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\LayoutFactory;

class Index extends Action
{
    private $layoutFactory;

    public function __construct(Context $context, LayoutFactory $layoutFactory)
    {
        parent::__construct($context);
        $this->layoutFactory = $layoutFactory;
    }


    public function execute()
    {
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Traning3point2\Test\Block\MyBlock');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
