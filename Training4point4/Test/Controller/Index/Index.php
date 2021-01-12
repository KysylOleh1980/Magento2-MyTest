<?php

namespace Training4point4\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action
{
    private $_jsonResultFactory;

    private function getRandomReviewData()
    {
        $reviews = [
           [
                'name' => 'Reviewer 1',
                'message' => ' Text 1 '

            ],
            [
                'name' => 'Reviewer 2',
                'message' => 'Text 2'

            ],
            [
                'name' => 'Reviewer 3',
                'message' => 'Text 3'

            ],
            [
                'name' => 'Reviewer 4',
                'message' => ' Text 3'

            ],
        ];
        return $reviews[rand(0, 3)];
    }

    public function __construct(Context $context, JsonFactory $jsonResultFactory)
    {
        $this->_jsonResultFactory = $jsonResultFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->_jsonResultFactory->create();
        $result->setData($this->getRandomReviewData());
        return $result;
    }
}
