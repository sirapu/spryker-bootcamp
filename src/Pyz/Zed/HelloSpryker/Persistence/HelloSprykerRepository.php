<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

class HelloSprykerRepository extends AbstractRepository implements HelloSprykerRepositoryInterface
{
    /**
     * @param int $idHelloSpryker
     *
     * @return \Generated\Shared\Transfer\HelloSprykerTransfer|null
     */
    public function findPyzHelloSprykerById(int $idHelloSpryker): ?HelloSprykerTransfer
    {
        $helloSprykerEntity = $this->getFactory()
            ->createHelloSprykerQuery()
            ->filterByIdHelloSpryker($idHelloSpryker)
            ->findOne();

        if (!$helloSprykerEntity) {
            return null;
        }

        return (new HelloSprykerTransfer())
            ->fromArray($helloSprykerEntity->toArray(), true);
    }

}
