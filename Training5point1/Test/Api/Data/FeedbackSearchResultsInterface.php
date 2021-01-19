<?php

namespace Training5point1\Test\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface FeedbackSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get Feedback list.
     *
     * @return \Training5point1\Test\Api\Data\FeedbackInterface[]
     */
    public function getItems();
    /**
     * Set Feedback list.
     *
     * @param \Training5point1\Test\Api\Data\FeedbackInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
