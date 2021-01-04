<?php

namespace Traning3point4\Test\Block\Product\View;

use  Magento\Catalog\Block\Product\View\Description;

class MyDescription
{
    public function beforeToHtml(Description $subject)
    {
        if ($subject->getNameInLayout() == 'product.info.sku') {
            $subject->setTemplate('Traning3point4_Test::test.phtml');
        }
    }
}
