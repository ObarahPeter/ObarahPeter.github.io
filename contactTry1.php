<?php
    // Check for the data
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';

    } else{
        echo 'No Data Found';
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CONTACT</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="data">
        <button type="submit">Submit</button>
    </form>
</body>
</html>