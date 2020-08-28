<?php

namespace Pyz\Zed\ApplicationDEMO\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return 'Hello DEMO Store!';
    }
}
