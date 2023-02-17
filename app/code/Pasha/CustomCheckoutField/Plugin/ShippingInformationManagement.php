<?php

namespace Pasha\CustomCheckoutField\Plugin;

use Magento\Quote\Api\CartRepositoryInterface;

class ShippingInformationManagement
{
    public $cartRepository;

    public function __construct(
        CartRepositoryInterface $cartRepository
    ) {
        $this->cartRepository = $cartRepository;
    }

    public function beforeSaveAddressInformation($subject, $cartId, $addressInformation)
    {
        $quote = $this->cartRepository->getActive($cartId);
        $deliveryNote = $addressInformation->getShippingAddress()->getExtensionAttributes()->getDeliveryNote();
        $quote->setDeliveryNote($newDeliveryNote);
        $this->cartRepository->save($quote);
        return [$cartId, $addressInformation];
    }
}