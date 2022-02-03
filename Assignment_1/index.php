


<?php 
print_r($_GET);

$firstname = $_GET['first'];
$lastname = $_GET['last'];
$age = $_GET['age'];
$comment = "Hello, my name is $firstname $lastname.";

$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

if(!empty($firstname) && !empty($lastname) && !empty($age)) {
    if ($age >= 18) {
        $age_comment = "I am old enough to vote in the United States.";
    }
    else {
        $age_comment = "I am not old enough to vote in the United States.";
    }
    echo htmlspecialchars($comment . " " . $age_comment . "\r");
    echo htmlspecialchars(365 * $age . " " . "days" . "\r"); 
}
else {
    echo htmlspecialchars("You are missing some information.");
}
echo htmlspecialchars(date("Y/m/d"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

?>
</body>
</html>