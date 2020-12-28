<?php

namespace Traning3\TestOM3\Model;

use Traning\TestOM\Model\ManagerInterface;

class Test
{
    private $manager;
    private $managerFactory;
    private $arrayList;
    private $name;
    private $number;

    public function __construct(
        ManagerInterface $manager,
        $name,
        int $number,
        array $arrayList,
        \Traning\TestOM\Model\ManagerInterfaceFactory $managerFactory
    ) {
        $this->manager = $manager;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
        $this->managerFactory = $managerFactory;
    }

    public function log()
    {
        print_r(get_class($this->manager));
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
        echo '<br>';
        $newManager = $this->managerFactory->create() ;
         print_r(  get_class($newManager));
    }
}
