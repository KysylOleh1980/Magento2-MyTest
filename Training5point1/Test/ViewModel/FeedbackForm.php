<?php

namespace Training5point1\Test\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class FeedbackForm implements ArgumentInterface
{
    private $urlBuilder;

    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder
    ) {
        $this->urlBuilder = $urlBuilder;
    }

    public function getActionUrl()
    {
        return $this->urlBuilder->getUrl('training_feedback/index/save');
    }
}
