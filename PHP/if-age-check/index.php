<form method="POST">
Write your age<br>
<input type="text" name="age" size="3"><br>
<input type="submit" value="Test age">
</form>

<?php
//Capture result from form
$ika = $_POST['age'];

echo "Your result ";

if ($ika < 0)
   echo "You haven't been born yet.";
elseif ($ika <= 1)
   echo "You are a baby.";
elseif ($ika <= 6)
   echo "You're spending your time at a daycare.";
elseif ($ika <= 16)
   echo "You are in grade school.";
elseif ($ika <= 25)
   echo "Studying takes your time.";
elseif  ($ika <= 65)
   echo "Working life is super important.";
else  
   echo "Are you enjoying your retirement?";
?>
