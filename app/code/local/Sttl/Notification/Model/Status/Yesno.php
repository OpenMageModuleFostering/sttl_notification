<?php
class Sttl_Notification_Model_Status_Yesno
{
	public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Enable')),
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Disable')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            1 => Mage::helper('adminhtml')->__('Enable'),
            0 => Mage::helper('adminhtml')->__('Disable'),
        );
    }

}
