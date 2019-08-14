<?php
class Sttl_Notification_Block_Notification extends Mage_Core_Block_Template
{
	public function getMassage()
	{
	$getMassage	=	Mage::getStoreConfig('notification/notification/massage');
?>
	<script type="text/javascript" src="<?php echo $this->getJsUrl('')?>notification/slideDownMin.js"></script>
	<script type="text/javascript" src="<?php echo $this->getJsUrl('')?>notification/slideDown.js"></script>
	<link type="text/stylesheet" rel="stylesheet" href="<?php echo $this->getSkinUrl()?>css/notification/slideDown.css"/>
	
	<div>
		<div>
			<button href="#collapse1" class="nav-toggle">ShowMain</button>
		</div>
		<div id="collapse1" style="display:none">
			<p><?php echo $getMassage?></p>
		</div>
	</div>
<?php
	}
}
?>
