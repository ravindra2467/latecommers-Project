<html>
<head>
 <TITLE> STUDENT DETAILS</TITLE>
</head>
<body bgcolor="#E6E6FA">
 
<div class="container">
<div class="row">
 
<div class="col-md-8">
<center><h1 STYLE="COLOR:#00ff00">ENTER LATE COMMERS STUDENTS DETAILS</h1><hr><br/><br/><br/><br/><br/><br/><br/><br/>
<h3>enter student details</h3>
<form name="form-control" action="get_response.php" method="post">
<table>
<div class="form-group">
<tr><td><label for="RegNo">RegNo</label></td>
<td><input type="integer" class="form-control" name="rollno" placeholder="Register Number" required></td></tr>
</div>
<tr></tr>
<tr></tr>

<div class="form-group">
<tr><td><label for="Date">Date</label></td>
<td><input type="date" class="form-control" name="date" placeholder="Date" required></td></tr>
</div>
 <tr></tr>
<tr></tr>

<tr><td><button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button></td>
<td><button type="reset" class="btn btn-primary" name="reset" value="reset" id="submit_form">Reset</button></td></tr>
</table></form></center>
 
<div class="response_msg"></div>
</div>
</div>
</div>


</body>
</html>