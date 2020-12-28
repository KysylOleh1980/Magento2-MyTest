<?php

namespace Traning\TestOM\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;


class Index extends Action{

    private $test;

    public function __construct(
        Context $context,
        \Traning\TestOM\Model\Test $test
    ) {
        $this->test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->test->log();
    }
}
