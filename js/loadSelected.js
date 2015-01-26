function loadArticle(){
	
	var selText;
	
	if ($("#dropdownID option:selected").val() != null ) {
		selText =  $("#dropdownID option:selected").text();
		$.get('getBody.php', { selval: selText }, function(data) {
			$("#content_area").load("pages/body.php");
			$("#content_area").text(data);
		});
	}
}
