 
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>

<?php
// https://www.w3schools.com/php/php_ref_filter.asp
// sanitize a string
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";

// validate an ip (check)
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
     echo("$ip is a valid IP address");
     echo "<br>";
} else {
    echo("$ip is not a valid IP address"); 
    echo "<br>";
}

//validate an integer
$int = 1;
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
    echo "<br>";
} else {
    echo("Integer is not valid");
    echo "<br>";
}

//sanitize and validate email
$email = "john.doe@example.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
    echo "<br>";
} else {
    echo("$email is not a valid email address");
    echo "<br>";
}

//sanitize and validate url
$url = "https://www.w3schools.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
    echo "<br>";
} else {
    echo("$url is not a valid URL");
    echo "<br>";
}

//validate an integer within a range
$int = 123;
$min = 1;
$max = 200;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
    echo "<br>";
} else {
    echo("Variable value is within the legal range");
    echo "<br>";
}

