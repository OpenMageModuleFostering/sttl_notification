<?php
class Sttl_Notification_Model_Status_Onoff
{
	public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Open')),
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Close')),
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
            1 => Mage::helper('adminhtml')->__('Open'),
            0 => Mage::helper('adminhtml')->__('Close'),
        );
    }

}
