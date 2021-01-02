<?php

namespace Traning2point6\Test\Controller\Product;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class View extends Action
{
    private $_customerSession;

    public function __construct(Context $context, Session $customerSession)
    {
        parent::__construct($context);
        $this->_customerSession = $customerSession;
    }

    public function execute()
    {
        if (!$this->_customerSession->isLoggedIn()) {
            $myRedirect = $this->resultRedirectFactory->create();
            $myRedirect->setPath('customer/account/login');
            return $myRedirect;
        }
    }
}
