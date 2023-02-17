<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getDeliveryNote();

    /**
     * @param string $deliveryNote
     * @return $this
     */
    public function setDeliveryNote($deliveryNote);
}
