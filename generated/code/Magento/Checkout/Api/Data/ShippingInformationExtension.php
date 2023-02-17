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
    public function getCustomNotes()
    {
        return $this->_get('custom_notes');
    }

    /**
     * @param string $customNotes
     * @return $this
     */
    public function setCustomNotes($customNotes)
    {
        $this->setData('custom_notes', $customNotes);
        return $this;
    }
}
