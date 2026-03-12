<?php

$name = $_POST['name'];
$school = $_POST['school'];
$level = $_POST['level'];
$weight = $_POST['weight'];

$qualified = false;

if(strtolower($school) == "school of computing"){

    if($level == 100 && $weight <= 60){
        $qualified = true;
    }
    elseif($level == 200 && $weight <= 80){
        $qualified = true;
    }
    elseif($level == 300 && $weight <= 90){
        $qualified = true;
    }
    elseif($level == 400 && $weight <= 100){
        $qualified = true;
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Qualification Result</title>

<style>

body{
font-family: Arial;
background:#f2f2f2;
}

.result-box{
width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
text-align:center;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

.pass{
color:green;
font-size:20px;
}

.fail{
color:red;
font-size:20px;
}

a{
display:inline-block;
margin-top:20px;
text-decoration:none;
background:#007bff;
color:white;
padding:10px 20px;
border-radius:5px;
}

</style>
</head>

<body>

<div class="result-box">

<h2>Football Qualification Result</h2>

<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Level:</strong> <?php echo $level; ?></p>
<p><strong>Weight:</strong> <?php echo $weight; ?> kg</p>

<?php

if($qualified){
    echo "<p class='pass'>$name is QUALIFIED to play.</p>";
}
else{
    echo "<p class='fail'>$name is NOT qualified to play.</p>";
}

?>

<a href="index.html">Go Back</a>

</div>

</body>
</html>