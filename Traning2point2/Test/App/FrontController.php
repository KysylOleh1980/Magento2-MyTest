<?php

namespace Traning2point2\Test\App;

use Magento\Framework\App\FrontControllerInterface;

class FrontController extends \Magento\Framework\App\FrontController implements FrontControllerInterface
{
    private $_mylogger;

    public function __construct(
        \Magento\Framework\App\RouterListInterface $routerList,
        \Magento\Framework\App\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_mylogger = $logger;
        parent::__construct($routerList, $response);
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|null
     */
    public function dispatch(\Magento\Framework\App\RequestInterface  $request)
    {
        foreach ($this->_routerList as $key => $router) {
            $this->_mylogger->info('my lasts result', [ $key => get_class($router) ]);
        }
        return parent::dispatch($request);
    }
}
