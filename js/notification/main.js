var $jk = jQuery.noConflict();
$jk('document').ready(function()
{
	$jk(".btn-slide").click(function(){
		$jk("#panel").slideToggle("slow");
		$jk(this).toggleClass("active"); return false;
	});
}
)