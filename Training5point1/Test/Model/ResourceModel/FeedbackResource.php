<?php


namespace Training5point1\Test\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class FeedbackResource extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('training_feedback', 'feedback_id');
    }
}
