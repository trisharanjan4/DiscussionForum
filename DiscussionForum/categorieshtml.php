<html>
<head>
<title>discussion forum-categories page</title>
<script type="text/javascript">
</script>
</head>
<body bgcolor=#666699 text=white>
<form name=frm2 action="categories(forum).php" method=post>
<table width='100' border='5' cellpadding='4' cellspacing='4' align='center'>
<tr><th colspan=6 align='center'><h1><b>Add New Category</b></h1></th></tr>
<tr><td width='30' height='30'><b>Name:</b></td><td><input type=text name='cat'/></td></tr>
<tr><td width='30' height='30'><b>ID:</b></td><td><input type=text name='id' placeholder="Enter ID as 3"/></td></tr>
<tr><td width='30' height='30'><b>Description:</b></td><td><textarea name='desc' cols='24' rows='15'></textarea></td></tr>
<tr><td><input name='save' type='submit' value='Save Categories to DB'> </td>&nbsp&nbsp<td><input name='reset' type='reset' value='Reset'></td></tr>
<tr></tr><td><input type='submit' name='show' value='show existing categories'></td></tr>
</table>
</form>
</body>
</html>