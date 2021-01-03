<?php

namespace Traning3point4\Test\Block\Product\View;

use  Magento\Catalog\Block\Product\View\Description;

class MyDescription
{
    public function beforeToHtml(Description $subject)
    {
        $subject->getProduct()->setDescription('Test description');
    }
}
