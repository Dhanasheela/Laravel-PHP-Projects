<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">

            <!-- edit-->

            <?php
            $con = mysqli_connect("localhost", "root", "", "rakesh");
            if (isset($_GET['edit'])) {
                $id = $_GET["id"];
                $sql = "SELECT * FROM employee WHERE  id = '$id'";
                $result = mysqli_query($con, $sql);
                $data = mysqli_fetch_assoc($result);
            ?>

                <form class="form" action="#" method="post">
                    <label> Name: </label><br>
                    <input type="text" name="name" value='<?= $data['name'] ?>'><br>
                    <label> Email: </label><br>
                    <input type="text" name="email" value='<?= $data['email'] ?>'><br><br>
                    <input type="submit" name="update">
                </form>

                <?php
                if (isset($_POST['update'])) {
                    $con = mysqli_connect("localhost", "root", "", "rakesh");

                    $id = $_GET['id'];
                    $stdname = $_POST['name'];
                    $stdemail = $_POST['email'];
                    $sql2 = "UPDATE `employee` SET `name` = '$stdname',`email` = '$stdemail' WHERE id = '$id'";
                    // echo "$sql2";
                    $result = mysqli_query($con, $sql2);
                    if ($result) {
                        header('Location: show.php');
                    }
                }
            } else {
                ?>
                <div class="row">
                    <div class="col-4">
                        <form class="form" action="#" method="post">
                            <label> Name: </label><br>
                            <input type="text" name="name"><br>
                            <label> Email: </label><br>
                            <input type="text" name="email"><br><br>
                            <input type="submit" name="submit">
                        </form>
                    </div>

                    <!-- insert operation -->

                    <div class="col-8">
                        <div id="submit">
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "rakesh");
                            if (isset($_POST["submit"])) {
                                $stdname = $_POST['name'];
                                $stdemail = $_POST['email'];

                                $sql = "INSERT INTO `employee` (`name`, `email`) VALUES ( '$stdname', '$stdemail')";
                                $result = mysqli_query($con, $sql);
                                if ($result) {
                                    echo "success<br>";
                                }
                            }
                            ?>
                        </div>
                    <?php
                }
                    ?>
                    <h2>list of users</h2>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "rakesh");
                    $result = mysqli_query($con, "select * from employee");
                    echo "<table class='table'>";
                    echo "<tr><td>Id</td><td>Name</td><td>Email</td><td>Edit</td><td>Delete</td></tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"];
                        echo "</td><td><a href=" . "show.php?edit=1&id=" . $row['id'] . "><button class='btn btn-primary'>edit</button></a></td>";
                        echo "<td><a href=" . "show.php?delete=1&id=" . $row['id'] . "><button class='btn btn-success'>DELETE</button></a></td></tr>";
                    }
                    echo "</table>";
                    ?>
                    </div>

                    <!-- delete operation -->

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "rakesh");
                    if (isset($_GET['delete'])) {
                        $id = $_GET['id'];

                        $sql = "DELETE FROM employee where id='$id'";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            echo "deleted success";
                            header('Location: show.php');
                        }
                    }


                    ?>
                </div>
        </div>

        <?php
        echo '<', 'center', '>';
        echo '-----------<br>';
        echo "<", "i", ">";
        echo 'html tags';
        echo "<", "/", "i", ">";
        echo "<", "b", ">";
        echo "<table>";
        echo "<tr><td>*</td></tr>";
        echo "<tr><td>**</td></tr><br>";
        echo "</table>";
        echo '***<br>';
        echo "<", "/", "b", ">";

        // <a href="#" target="_blank">login</a>
        echo "<", "b", ">";
        echo '<', 'a', ' ', 'href', '=', '"show.php"', ' ', 'target', '=', '"_blank"', '>', 'clickme', '<', '/', 'a', '>';
        echo "<", "/", "b", ">";
        echo '<', '/', 'center', '>';
        ?>
    </div>
</body>

</html>