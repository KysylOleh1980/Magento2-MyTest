<?php

namespace Training5point1\Test\Api\Data;

interface FeedbackRepositoryInterface
{
    /**
     * Save feedback.
     *
     * @param \Training5point1\Test\Api\Data\FeedbackInterface $feedback
     * @return \Training5point1\Test\Api\Data\FeedbackInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Training5point1\Test\Api\Data\FeedbackInterface $feedback);
    /**
     * Retrieve feedback.
     *
     * @param int $feedbackId
     * @return \Training5point1\Test\Api\Data\FeedbackInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($feedbackId);
    /**
     * Retrieve feedbacks matching the specified criteria.
     *
     * @param \Training5point1\Test\Api\SearchCriteriaInterface $searchCriteria
     * @return \Training5point1\Test\Api\Data\FeedbackSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
    /**
     * Delete feedback.
     *
     * @param \Training5point1\Test\Api\Data\FeedbackInterface $feedback
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Training5point1\Test\Api\Data\FeedbackInterface $feedback);
    /**
     * Delete feedback by ID.
     *
     * @param int $feedbackId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($feedbackId);
}
