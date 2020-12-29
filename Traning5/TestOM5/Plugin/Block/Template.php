<?php

namespace Traning5\TestOM5\Plugin\Block;

class Template
{
    public function afterToHtml(
        \Magento\Framework\View\Element\Template $subject,
        $result
    ) {
        if ($subject->getNameInLayout()=='top.search') {
            $result = '<div><p>' . $subject->getTemplate() . '</p>'
                . '<p>' . get_class($subject) . '</p>' . $result . '</div>';
        }
        return $result;
    }
}
