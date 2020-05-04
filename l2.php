<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>
<html>
<body>
    <?php
    if (!isset($_GET['active']))
    // setting default value
    {
        $_GET['active'] = -1;
    }

    if (!isset($_POST['input'])) {

        $_POST['input'] = 0;
    }
    if (!isset($_POST['pressed'])) {
        $_POST['pressed'] = 0;
    }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = test_input($_POST["input"]);
    // }
    ?>
   
    <!-- style -->
    <style>
        body {
            background-color: #444;
            color: white;
        }

        .active {
            background-color: red;
        }
    </style>

    <!-- sending post request -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?active=' . $_GET['active']); ?>">
        <input type="text" name="input" value='<?php echo $_POST['input'] ?>'>
        <br>
        <input type="submit" value="submit" />
    </form>


    <?php

function mb_lcfirst($s)
{
    $r=$s;

$r = mb_strtolower(mb_substr($s,0,1)).mb_substr($s,1);
return $r;
}

function mb_ucfirst($s)
{
    $r = mb_strtoupper(mb_substr($s,0,1)).mb_substr($s,1);
return $r;
}

    $running = true;
    //echo "<br>";
    echo '<p  class="error">';
    if ((strlen(trim($input)) < 1) || ($input == '.')) {
        echo 'empty string!<br>';
        $running = false;
    } else {
        if ((mb_strtoupper($input)[0] != ($input)[0])) {
            echo 'first letter is not big!<br>';
            $running = false;
        }
    }

    if (mb_substr($input, -1) != '.') {
        echo 'dot not found!<br>';
        $running = false;
    }
    //todo: add check for sspacesand commas!
    $temp_arr = explode(',', $input);

    foreach ($temp_arr as $key => $value) {
        # code...

        $temp_arr[$key] = trim($value);
    }

    foreach ($temp_arr as $key => $value) {
        if (($key > 0) && (mb_strtolower($value) != $value)) {
            echo 'not lowercase words!';
            $running = false;
        }

        if (mb_lcfirst($temp_arr[0]) != mb_strtolower(mb_lcfirst($temp_arr[0]))) {
            echo 'not lowercase words!';
            $running = false;
        }

        if (mb_strlen($value) == 0) {
            echo 'empty words!';
            $running = false;
        }

        if (strpos($value, ' ') > 0) {
            echo 'spaces inside!';
            $running = false;
        }
    }
    if (mb_strlen(end($temp_arr)) == 1) {
        echo 'empty words!';
        $running = false;
    }


    if ($running) {
        echo mb_ucfirst(mb_substr(array_pop($temp_arr), 0, -1));
        while (!empty($temp_arr)) {
            echo ', ' . mb_lcfirst(array_pop($temp_arr));
        }
        echo '.<br>';
    }

    echo '</p>';

    if (!$running) {
        echo '
<style> 
    .error
{
    color:red;
    font-width:50px;
}
</style>';
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
	

</body>

</html>