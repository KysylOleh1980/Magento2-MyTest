<?php


namespace Training5point1\Test\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class FeedbackResource extends AbstractDb
{
    public function getAllFeedbackNumber()
    {
        $adapter = $this->getConnection();
        $select = $adapter->select()
            ->from('training_feedback', new \Zend_Db_Expr('COUNT(*)'));
        return $adapter->fetchOne($select);
    }

    public function getActiveFeedbackNumber()
    {
        $adapter = $this->getConnection();
        $select = $adapter->select()
            ->from('training_feedback', new \Zend_Db_Expr('COUNT(*)'))
            ->where('is_active = ?', \Training5point1\Test\Model\Feedback::STATUS_INACTIVE);
        return $adapter->fetchOne($select);
    }

    protected function _construct()
    {
        $this->_init('training_feedback', 'feedback_id');
    }
}
