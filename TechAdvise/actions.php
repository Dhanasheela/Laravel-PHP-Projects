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
/* to insert values into database table */
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
function getDatabyrole($table, $table1, $id)
{
    $conn = conn;
    $sql = " select $table.*,$table1.name as role_name from $table left JOIN roles on $table1.role_id=user.role_id where view_able=1";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}
function getCardData($name)
{
    $conn = conn;
    $sql = "select * from cards where name='$name'";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}

function getCardName()
{
    $conn = conn;
    $sql = "select name from cards group by name";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}
function getDatabyTable($table, $params = [])
{
    $conn = conn;
    $sql = "select * from $table ";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}
function getData($table, $id)
{
    $conn = conn;
    $sql = "select * from $table where id='$id'";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}

/* get blog categories */
function getBlogCategories()
{
    $conn = conn;
    $sql = "SELECT bl_cat.*,count(blog.category_id) as count FROM `blog_categories` bl_cat 
    LEFT JOIN blog on blog.category_id=bl_cat.id 
    group by blog.category_id order BY bl_cat.name";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}

/*get blog recentposts*/
function getBlogRecentposts()
{
    $conn = conn;
    $sql = "SELECT blog_recentposts.* FROM  blog_recentposts 
    LEFT JOIN blog on blog.recent_id=blog_recentposts.id 
    group by blog.recent_id 
    order BY blog_recentposts.id";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}

function getBlogTags()
{
    $conn = conn;
    $sql = "SELECT tags.* from tags LEFT join blog on tags.id=blog.tag_id GROUP by tags.id";
    $result = $conn->query($sql);
    $res = [];
    while ($row = $result->fetch_assoc()) {
        $res[] = $row;
    }
    return $res;
}
