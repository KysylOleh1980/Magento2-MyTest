<?php


namespace Traning3point10\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Traning3point10\Test\ViewModel\Form;

class Index extends Action
{



    public function __construct(Context $context)
    {
        parent::__construct($context);
    }


    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}