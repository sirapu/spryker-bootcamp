<?php
namespace Pyz\Yves\Cart\Communication\Controller;

use Pyz\Yves\Library\Tracking\PageTypeInterface;
use ProjectA\Yves\Cart\Communication\Controller\CartController as ProjectACartController;
use ProjectA\Yves\Library\Tracking\Tracking;
use Symfony\Component\HttpFoundation\Request;

class CartController extends ProjectACartController
{

    public function indexAction(Request $request)
    {
        Tracking::getInstance()
            ->setPageType(PageTypeInterface::PAGE_TYPE_CART)
            ->buildTracking();

        return parent::indexAction($request);
    }
}
