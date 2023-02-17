<?php
namespace Magento\Checkout\Api\Data;

/**
 * Extension class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
class ShippingInformationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingInformationExtensionInterface
{
    /**
     * @return string|null
     */
    public function getDeliveryNote()
    {
        return $this->_get('delivery_note');
    }

    /**
     * @param string $deliveryNote
     * @return $this
     */
    public function setDeliveryNote($deliveryNote)
    {
        $this->setData('delivery_note', $deliveryNote);
        return $this;
    }
}
