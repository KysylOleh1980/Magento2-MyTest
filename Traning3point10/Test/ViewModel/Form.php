<?php


namespace Traning3point10\Test\ViewModel;

use \Magento\Framework\View\Element\Block\ArgumentInterface;

class Form implements ArgumentInterface
{

    private $urlBuilder;

    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder
    ) {
        $this->urlBuilder = $urlBuilder;
    }

    public function getSubmitUrl()
    {
        return $this->urlBuilder->getUrl('customer/account/login');
    }
}