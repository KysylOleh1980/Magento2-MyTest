<?php

namespace Training5point1\Test\Model;

use Magento\Framework\Model\AbstractModel;

class Feedback extends AbstractModel
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected function _construct()
    {
        $this->_init(\Training5point1\Test\Model\ResourceModel\FeedbackResource::class);
        parent::_construct();
    }
}