<?php

namespace Pyz\Yves\Cart\Controller;

use Pyz\Yves\Cart\Plugin\Provider\CartControllerProvider;
use Spryker\Yves\Application\Controller\AbstractController;
use Spryker\Client\Cart\CartClientInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\ProductOptionTransfer;

/**
 * @method CartClientInterface getClient()
 */
class AjaxController extends AbstractController
{

    /**
     * @return array
     */
    public function indexAction()
    {
        $cartClient = $this->getClient();
        $cart = $cartClient->getCart();
        foreach ($cart->getItems() as $item) {
            if (empty($item->getName())) {
                $item->setName('Product ' . mt_rand(1, 99));
            }
        }

        return $this->viewResponse([
            'cart' => $cart,
        ]);
    }

    /**
     * @param string $sku
     * @param int $quantity
     * @param array $optionValueUsageIds
     *
     * @return RedirectResponse
     */
    public function addAction($sku, $quantity, $optionValueUsageIds = [])
    {
        $cartClient = $this->getClient();

        $itemTransfer = new ItemTransfer();

        $itemTransfer->setSku($sku);
        $itemTransfer->setQuantity($quantity);

        foreach ($optionValueUsageIds as $idOptionValueUsage) {
            $productOptionTransfer = new ProductOptionTransfer();
            $productOptionTransfer->setIdOptionValueUsage($idOptionValueUsage)
                ->setLocaleCode($this->getLocale());
            $itemTransfer->addProductOption($productOptionTransfer);
        }

        $cartClient->addItem($itemTransfer);

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART_OVERLAY);
    }

    /**
     * @param string $sku
     * @param string $groupKey
     *
     * @return RedirectResponse
     */
    public function removeAction($sku, $groupKey = null)
    {
        $cartClient = $this->getClient();
        $itemTransfer = new ItemTransfer();
        $itemTransfer->setSku($sku)->setGroupKey($groupKey);

        $cartClient->removeItem($itemTransfer);

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART_OVERLAY);
    }

    /**
     * @param string $sku
     * @param string $groupKey
     *
     * @return RedirectResponse
     */
    public function increaseAction($sku, $groupKey = null)
    {
        $cartClient = $this->getClient();

        $itemTransfer = new ItemTransfer();
        $itemTransfer->setSku($sku);
        $itemTransfer->setGroupKey($groupKey);

        $cartClient->increaseItemQuantity($itemTransfer);

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART_OVERLAY);
    }

    /**
     * @param string $sku
     * @param string $groupKey
     *
     * @return RedirectResponse
     */
    public function decreaseAction($sku, $groupKey = null)
    {
        $cartClient = $this->getClient();

        $itemTransfer = new ItemTransfer();
        $itemTransfer->setSku($sku);
        $itemTransfer->setGroupKey($groupKey);

        $cartClient->decreaseItemQuantity($itemTransfer);

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART_OVERLAY);
    }

}