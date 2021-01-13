<?php

namespace Training5point1\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    private $_pageResultFactory;

    public function __construct(Context $context, PageFactory $pageResultFactory)
    {
        $this->_pageResultFactory = $pageResultFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->_pageResultFactory->create();
        return $result;
    }
}
