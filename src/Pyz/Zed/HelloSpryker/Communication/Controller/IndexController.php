<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacade getFacade()
 * @method \Pyz\Zed\HelloSpryker\Communication\HelloSprykerCommunicationFactory getFactory()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerQueryContainer getQueryContainer()
 */
class IndexController extends AbstractController
{

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function indexAction()
    {
       $helloSprykerTransfer = new HelloSprykerTransfer();
       $helloSprykerTransfer->setOriginalString("Hello Spryker, hello Alexander!");
       $helloSprykerTransfer = $this->getFacade()->reverseString($helloSprykerTransfer);

       $helloSprykerTransfer = $this->getFacade()->createHelloSprykerEntity($helloSprykerTransfer);
       $helloSprykerTransfer = $this->getFacade()->findHelloSpryker($helloSprykerTransfer);

       return ['string' => $helloSprykerTransfer->getReversedString()];
    }

}
