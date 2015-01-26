<!doctype html>
<html lang = "sv">

<head>
	<meta charset="utf-8">
	<title>Programmeringstest Phonera</title>
	<link rel="stylesheet" href="style/stylesheet.css">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>	

<body>
		
	<a class="getContent" id="testLink" href="pages/test.php">Test</a>
	<a class="getContent" id="titleLink" href="pages/title.php">Title</a>
	
	
	<select id='dropdownID' onchange="loadArticle();">
		<option value="">Välj en artikel</option>
	</select>
	
	<input type="button" id="delete" value="Ta bort artiklar" onclick="deleteArticle();"/>
	
	<p> <div id="content_area">	</div> </p>
	
	<form action="#" id="add_categoryID">
		<p><input type="text" id="category" /><input type="submit" value="Lägg till"></p>
	</form>
	<div id="category_feedback"></div>
	
	
	<script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/JavaScript" src="js/nav.js"></script>
	<script type="text/JavaScript" src="js/loadSelected.js"></script>
	<script type="text/JavaScript" src="js/deleteList.js"></script>
	<script type="text/JavaScript" src="js/printList.js"></script>
	
</body>

</html>
