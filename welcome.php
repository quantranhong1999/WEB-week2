<html>
<meta charset="UTF-8">
<head>
    <title>Forms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="2.css">
</head>

<body>
<?php echo'<h2>Hi '.$_POST["name"].' !</h2>'?>
<h3>We got your information. Please check it again!</h3> <br>
Your email address: <?php echo $_POST["email"]; ?> <br> <br>
Your age: <?php echo $_POST["agenum"]; ?> <br> <br>
Your Github: <?php echo $_POST["github"]; ?> <br> <br>
Your gender: <?php echo $_POST["gender"]; ?> <br> <br>
Your birthdate: <?php echo $_POST["birthdate"]; ?> <br> <br>
<?php
$aDoor = $_POST['sport'];
if(empty($aDoor))
{
    echo("You didn't select any favorite sports.");
}
else
{
    $N = count($aDoor);

    echo("You selected $N favorite sport(s): ");
    for($i=0; $i < $N; $i++)
    {
        echo($aDoor[$i] . " ");
    }
}
?> <br> <br>
Your favorite color:
<?php
$color = $_POST["colorpick"];
echo '<i class="fa fa-square" aria-hidden="true" style="font-size:25px;color:'.$color.';"></i>';
?> <br> <br>

Your avatar: <?php
echo 'name: '.$file_name = $_FILES['avatar']['name'];
echo '   ||   size: '.$file_size =$_FILES['avatar']['size'].' bytes';
?> <br> <br>
Your username: <?php echo $_POST["username"]; ?> <br> <br>
Your password: we will keep it for your security. <br>
<h4>Confirm your above information by click OK. If anything is wrong, click Report</h4>
<input type="button" value="OK" onclick="alert('Your infomation has been confirmed!')">
<input type="button" value="Report" onclick="alert('Your wrong infomation has been reported!')">


</body>
</html>