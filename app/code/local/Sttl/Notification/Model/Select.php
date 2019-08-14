<?php
class Sttl_Notification_Model_Select
{
	public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Store Message')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('HTML Message')),
			array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('Product Deals')),
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
            1 => Mage::helper('adminhtml')->__('Store Message'),
            2 => Mage::helper('adminhtml')->__('HTML Message'),
			3 => Mage::helper('adminhtml')->__('Product Deals'),			
        );
    }

}
?>
