<?php
class Sttl_Notification_Model_Categoryid_Check extends Mage_Core_Model_Config_Data
{
    public function save()
    {
		$getCategoryId	=	$this->getValue('startdate');
		$getValues 		=	Mage::app()->getRequest()->getPost();
		$getSelect		=	$getValues['groups']['notification']['fields']['select']['value'];
		$getCategoryId	=	$getValues['groups']['notification']['fields']['categoryid']['value'];
		$getStartDate	=	strtotime($getValues['groups']['notification']['fields']['startdate']['value']);
		$getEndDate		=	strtotime($getValues['groups']['notification']['fields']['enddate']['value']);
		
		if($getStartDate >= $getEndDate) 
		{
			echo Mage::throwException("Startdate must not grater than Enddate");
			echo '<br/>';
		}	
				
		if ($getSelect == "3")
		{
			$connection		=	Mage::getSingleton('core/resource')->getConnection('core_read');
			$select			=	$connection->select()->from('catalog_category_entity', array('*'))->where('entity_id=?',$getCategoryId); 
			$rowArray		=	$connection->fetchRow($select);
?>				
		<?php if(empty($rowArray)):?>
			<?php Mage::throwException("Defined categoryid is not exist or you defined it as null");?>
		<?php else:?>
			<?php return parent::save();?>
		<?php endif;?>
<?php 
		}	
    }
}
?>