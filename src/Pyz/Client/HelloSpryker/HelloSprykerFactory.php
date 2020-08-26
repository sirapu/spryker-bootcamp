<?php

namespace Pyz\Client\HelloSpryker;

use Pyz\Client\HelloSpryker\Zed\HelloSprykerStub;
use Pyz\Client\HelloSpryker\Zed\HelloSprykerStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class HelloSprykerFactory extends AbstractFactory
{

    /**
     * @return \Pyz\Client\HelloSpryker\Zed\HelloSprykerStubInterface
     */
    public function createHelloSprykerZedStub(): HelloSprykerStubInterface
    {
        return new HelloSprykerStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }

}
