<?php include 'connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM student WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
?>
<div>
    <form action="" method="POST">
        <input type="text" value="<?php echo $row['firstname'] ?>" name="firstname" placeholder="firstname"><br><br>
        <input type="text" value="<?php echo $row['lastname'] ?>" name="lastname" placeholder="lastname"><br><br>
        <input type="number" value="<?php echo $row['age'] ?>" name="age" placeholder="age"><br><br>
        <input type="submit" name="update_btn" value="update">
        <button><a href="view.php">Back</a></button>
    </form>
</div>
<?php
if (isset($_POST['update_btn'])) {
    $A = $_POST['firstname'];
    $B = $_POST['lastname'];
    $C = $_POST['age'];
}
$update = "UPDATE student SET firstname = '$A',lastname = '$B'
            ,age = '$C' WHERE id = '$id'";
$data = mysqli_query($con, $update);
if ($data) {
?>
    <script type="text/javascript">
        alert("Data Update Successfully");
    </script>
<?php
} else {
?> 
    <script type="text/javascript">
        alert("data not saved");
    </script>
<?php
}
?>