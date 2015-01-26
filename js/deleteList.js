function deleteArticle() {
	var select = document.getElementById("dropdownID");
	var length = select.options.length;
	for (i = 0; i < length; i++) {
		select.options[i] = null;
	}
}
