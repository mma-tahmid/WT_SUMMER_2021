<?php   include "Control/myform.php" ; ?>
<!DOCTYPE html>
<html>
<head>
	<title>registration_form</title>
</head>
<body>
<form action="" method="POST">

<table>

<tr>

<td>
Full Name:
</td>

<td>
<input type="text" name="" > <?php echo $name; ?>

</td>
</tr>


<tr>

<td>
Email:
</td>

<td>
<input type="text" name=""> <?php echo $validateemail; ?>

</td>
</tr>

<tr>

<td>
Password:
</td>

<td>
<input type="password" name="" > <?php echo $validatepassword; ?>

</td>
</tr>



<tr>

<td>
Comment:
</td>


<td>
<textarea rows="7" cols="33" name="comment"></textarea> <?php echo $validatecomment; ?>

</td>
</tr>


<tr>

<td>
Gender:
</td>

<td>
<input type="radio" name="Gender" > Male
<input type="radio" name="Gender" > Female
<input type="radio" name="Gender" > Other <br> <?php echo $validateradio; ?><br>
</td>
</tr>

<tr>

<td>
Please choose a hobby
</td>

<td>
<input type="checkbox" name="Please choose a hobby" > singing 
<input type="checkbox" name="Please choose a hobby" > Dancing
<input type="checkbox" name="Please choose a hobby" > Reading <br> <?php echo $validatecheckbox; ?>
</td>
</tr>

<tr>

<td>
Please choose a file
</td>

<td>
<input type="file" name="fileupload" > <?php  echo  $validFile;  ?>

</td>
</tr>

<tr>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>

</tr>

</table>

</form>
</body>
</html>