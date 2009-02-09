<?php

	global $NOTIFICATION_HANDLERS;

?>

<script type="text/javascript">

$(document).ready(function () {
<?php 
	foreach($NOTIFICATION_HANDLERS as $method => $foo) {
?>
	$('input[@type=checkbox]:checked').parent("a.<?php echo $method; ?>toggleOff").each(function(){
		$(this).removeClass('<?php echo $method; ?>toggleOff').addClass('<?php echo $method; ?>toggleOn');
	});
	
<?php
	}
?>

});

<?php 
	foreach($NOTIFICATION_HANDLERS as $method => $foo) {
?>
function adjust<?php echo $method; ?>(linkId) {
	var obj = $(this).prev("a");
	
	if (obj.className == "<?php echo $method; ?>toggleOff") {
		obj.className = "<?php echo $method; ?>toggleOn";
	} else {
		obj.className = "<?php echo $method; ?>toggleOff";
	}
	return false;
}
function adjust<?php echo $method; ?>_alt(linkId) {
	var obj = document.getElementById(linkId);
	
	if (obj.className == "<?php echo $method; ?>toggleOff") {
		obj.className = "<?php echo $method; ?>toggleOn";
		$('#' + linkId).children("INPUT[type='checkbox']").attr('checked', true);
	} else {
		obj.className = "<?php echo $method; ?>toggleOff";
		$('#' + linkId).children("INPUT[type='checkbox']").attr('checked', false);
	}
	return false;
}
<?php
	}
?>

</script>