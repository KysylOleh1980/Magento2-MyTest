<?php

namespace Training5point1\Test\Controller\Index;

use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrderBuilder;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Training5point1\Test\Api\Data\FeedbackInterfaceFactory;
use Training5point1\Test\Api\Data\FeedbackRepositoryInterface;

class Test extends Action
{
    private $feedbackFactory;
    private $feedbackRepository;
    private $searchCriteriaBuilder;
    private $sortOrderBuilder;

    public function __construct(
        Context $context,
        FeedbackInterfaceFactory $feedbackFactory,
        FeedbackRepositoryInterface $feedbackRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SortOrderBuilder $sortOrderBuilder
    ) {
        $this->feedbackFactory = $feedbackFactory;
        $this->feedbackRepository = $feedbackRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->sortOrderBuilder = $sortOrderBuilder;
        parent::__construct($context);
    }

    public function execute()
    {
        /*$newFeedback = $this->feedbackFactory->create();
        $newFeedback->setAuthorName('some name');
        $newFeedback->setAuthorEmail('test@test.com');
        $newFeedback->setMessage('ghj dsghjfghs sghkfgsdhfkj sdhjfsdf gsfkj');
        $newFeedback->setIsActive(1);
        $this->feedbackRepository->save($newFeedback);*/

        $feedback = $this->feedbackRepository->getById(1);
        //$this->printFeedback($feedback);

        /*$feedbackToUpdate = $this->feedbackRepository->getById(1);
        $feedbackToUpdate->setMessage('CUSTOM ' . $feedbackToUpdate->getMessage());
        $this->feedbackRepository->save($feedbackToUpdate);*/

        /*$this->feedbackRepository->deleteById(11);*/


        $this->searchCriteriaBuilder->addFilter('is_active', 1);
        $sortOrder = $this->sortOrderBuilder->setField('creation_time')->setDescendingDirection()->create();
        $this->searchCriteriaBuilder->addSortOrder($sortOrder);
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $searchResult = $this->feedbackRepository->getList($searchCriteria);
        /*foreach ($searchResult->getItems() as $item) {
            $this->printFeedback($item);
        }
        exit();*/
    }

    private function printFeedback($feedback)
    {
        echo $feedback->getId() . ' : '
            . $feedback->getAuthorName()
            . ' (' . $feedback->getAuthorEmail() . ')';
        echo "<br/>\n";
    }
}
