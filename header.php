<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage - Login & Registration System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
<div id="language">
	<select id="langselect" onchange="window.location['search'] = $(this).val();">
		    <option value="?lang=pl">Polski
		    <option value="?lang=en">English
		    <option value="?lang=ru">по-русский
	</select>
	<script>
	$(document).ready(function(){
		val = window.location["search"];
		valstart = "select#langselect option[value='"+val+"']";
	$(valstart).prop('selected', true);	
	});
	</script>
</div>