<?php

namespace Training5point1\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

use Training5point1\Test\Model\FeedbackFactory;
use Training5point1\Test\Model\ResourceModel\FeedbackResource;

class Save extends Action
{
    private $_feedbackFactory;
    private $_feedbackResource;

    private function validatePost($post)
    {
        if (!isset($post['author_name']) || trim($post['author_name']) === '') {
            throw new LocalizedException(__('Name is missing'));
        }
        if (!isset($post['message']) || trim($post['message']) === '') {
            throw new LocalizedException(__('Comment is missing'));
        }
        if (!isset($post['author_email']) || false === \strpos($post['author_email'], '@')) {
            throw new LocalizedException(__('Invalid email address'));
        }
        if (trim($this->getRequest()->getParam('hideit')) !== '') {
            throw new \Exception();
        }
    }

    public function __construct(Context $context, FeedbackFactory $feedbackFactory, FeedbackResource $feedbackResource)
    {
        $this->_feedbackFactory = $feedbackFactory;
        $this->_feedbackResource = $feedbackResource;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        if ($post = $this->getRequest()->getPostValue()) {
            try {
                $this->validatePost($post);
                $feedback = $this->_feedbackFactory->create();
                $feedback->setData($post);
                $this->_feedbackResource->save($feedback);
                $this->messageManager->addSuccessMessage(
                    __('Thank you for your feedback.')
                );
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(
                    __('An error occurred while processing your form. Please try again later.')
                );
                $result->setPath('*/*/form');
                return $result;
            }
        }
        $result->setPath('*/*/index');
        return $result;
    }
}
