<?php

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
