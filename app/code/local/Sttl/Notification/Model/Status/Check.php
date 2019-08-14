<?php
class Sttl_Notification_Model_Status_Check extends Mage_Core_Model_Config_Data
{
    public function save()
    {
		
		$getValues 		=	Mage::app()->getRequest()->getPost();
		$getSelect		=	$getValues['groups']['notification']['fields']['select']['value'];
		$getCategoryId	=	$getValues['groups']['notification']['fields']['categoryid']['value'];
		$getStartDate	=	strtotime($getValues['groups']['notification']['fields']['startdate']['value']);
		$getEndDate		=	strtotime($getValues['groups']['notification']['fields']['enddate']['value']);
		$getDeaultMsg	=	$getValues['groups']['notification']['fields']['defaultmassage']['value'];
		
		$currentDate	=	strtotime(date('d.m.Y'));
				
		if( ($getStartDate !="") && ($getEndDate !="") && ($getStartDate <= $currentDate) && ($currentDate >= $getEndDate) && ($getDeaultMsg == "") )
		{
			echo Mage::throwException("Please Define Default Masaage When Deal Is Expired");
			echo '<br/>';
		}	
		
		if( ( ($getStartDate != "") && ($getEndDate != "") ) && ($getStartDate > $getEndDate)  )
		{
			echo Mage::throwException("The End Date Should Be Greater Than Or Equal To The Start Date");
			echo '<br/>';
		}	
		
		if ($getSelect == "1" || $getSelect == "2")
		{
?>	
			<?php return parent::save();?>
<?php 
		}
				
		if ($getSelect == "3")
		{
			$connection		=	Mage::getSingleton('core/resource')->getConnection('core_read');
			$select			=	$connection->select()->from('catalog_category_entity', array('*'))->where('entity_id=?',$getCategoryId); 
			$rowArray		=	$connection->fetchRow($select);
?>				
		<?php if(empty($rowArray)):?>
			<?php Mage::throwException("Defined Categoryid Is Not Exist");?>
		<?php else:?>
			<?php return parent::save();?>
		<?php endif;?>
<?php 
		}	
    }
}
?>