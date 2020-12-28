<?php

namespace Traning4\TestOM4\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    private $test;

    public function __construct(
        Context $context,
        \Traning4\TestOM4\Model\PlayModel $test
    ) {
        $this->test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->test->run();
    }
}
