<?php

namespace Traning3point2\Test\Block;

use Magento\Framework\View\Element\AbstractBlock;

class MyBlock extends AbstractBlock
{
    public function _toHtml()
    {
        return "<b>Hello world from block!</b>";
    }
}
