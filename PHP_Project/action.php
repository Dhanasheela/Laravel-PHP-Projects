
<?php

function _print($arr = [])
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function _die($arr = [])
{
    echo "<pre>";
    print_r($arr);
    die;
}
function insert($table, $arrdata)
{
    $conn = conn;
    $sql = "insert into $table";
    $fields = [];
    $values = [];
    foreach ($arrdata as $field => $val) {
        $fields[] = $field;
        $values[] = "'" . $val . "'";
    }
    $sql .= "(" . implode(',', $fields) . ")values(" . implode(',', $values) . ")";
    return ($conn->query($sql) === TRUE);
}
function getDatabyId($table, $id)

{

    $conn = conn;

    $sql = "select * from $table ";

    $sql .= " where id= $id";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row;
}

?>