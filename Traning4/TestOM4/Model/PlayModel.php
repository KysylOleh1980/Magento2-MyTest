<?php

namespace Traning4\TestOM4\Model;

class PlayModel
{
    private $testObjectFactory;
    private $manager;

    public function __construct(
        \Traning2\TestOM2\Model\TestFactory $testObjectFactory,
        \Traning4\TestOM4\Model\ManagerCustom $manager
    ) {
        $this->testObjectFactory = $testObjectFactory;
        $this->manager = $manager;
    }

    public function run()
    {
        $customArrayList = ['item1'=>'aaaaa', 'item2'=>'bbbbb' ];
        $newTestObject = $this->testObjectFactory->create(['arrayList' => $customArrayList, 'manager' => $this->manager]);
        $newTestObject->log();
    }
}
