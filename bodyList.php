<?php include ('getBody.php');?>

<script type="text/JavaScript">
var body = JSON.parse('<?php echo json_encode($bodyList) ?>');
var contentArea = document.getElementById('content_area');
	
for (var i=0; i<body.length; i++){		
	var par = document.createElement('p');
	par.innerHTML = body[i];
	par.value = body[i];
	contentArea.innerHTML += par;
}

</script>
