<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerFacadeInterface
{

    /**
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $stringToReverse): HelloSprykerTransfer;

    /**
     * Specification
     * - Creates a database record
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;


    /**
     * Specification
     * - Finds a record in the database
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer
     */
     public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
