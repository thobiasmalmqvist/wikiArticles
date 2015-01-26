<?php include ('getTitle.php');?>

<script type="text/JavaScript">
var titleList = JSON.parse('<?php echo json_encode($titleList) ?>');
var dropdown = document.getElementById('dropdownID');
	
var printList = [];

for (var i=0; i<titleList.length; i++){
	printList.push(titleList[i]);
}

addToEmpty();
localStorage.setItem('printList', JSON.stringify(printList));

</script>
