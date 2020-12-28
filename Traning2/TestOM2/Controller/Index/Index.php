<?php

namespace Traning2\TestOM2\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    private $test;

    public function __construct(
        Context $context,
        \Traning2\TestOM2\Model\Test $test
    ) {
        $this->test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->test->log();
    }
}
