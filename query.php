<!DOCTYPE html>
<html>
<body>

<h1>SQL BOX</h1>
<p>
<br>Type an SQL query in the following box:
<br>Example: SELECT * FROM Actor WHERE id=10;
</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<textarea name="query" cols="60" rows="8" style="margin: 0px; width: 590px; height: 269px;"></textarea>
<br><input type="submit">
<br>
</form>

<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $val = $_REQUEST['query'];

    //Connect PHP code with SQL
    $db = new mysqli('localhost', 'cs143', '', 'CS143');
    if($db->connect_errno > 0)
    {
      die('Unable to connect to database [' . $db->connect_error . ']');
    }

    //Issuing the query
    $query = $val;
    $rs = $db->query($query);
    if ($rs->num_rows > 0){
        $display = "<table border='1' width='600'>";
        foreach($rs as $key => $var) {
        if($key===0) {
            $display .= '<tr>';
            foreach($var as $col => $val) {
                $display .= "<td>" . "<b>$col</b>" . '</td>';
            }
            $display .= '</tr>';
            $display .= '<tr>';
            foreach($var as $col => $val) {
                $display .= '<td>' . $val . '</td>';
            }
            $display .= '</tr>';
        }
        else {
            $display .= '<tr>';
            foreach($var as $col => $val) {
                $display .= '<td>' . $val . '</td>';
            }
            $display .= '</tr>';
        }
    }
    $display .= '</table>';
    echo $display;
    }
  }
?>

</body>
</html>
