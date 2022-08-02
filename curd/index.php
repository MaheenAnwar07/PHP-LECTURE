<?php include 'connection.php';?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <input type="text" name="firstname" placeholder="firstname"><br><br>
                <input type="text" name="lastname" placeholder="lastname"><br><br>
                <input type="number" name="age" placeholder="age"><br><br>
                <input type="submit" name="save_btn" value="Save">
                <button><a href="view.php">View</a></button>
            </form>
</div>

       <?php
       if (isset($_POST['save_btn'])) {
        $A=$_POST['firstname'];
        $B=$_POST['lastname'];
        $C=$_POST['age'];
       }
       
  $query="INSERT INTO student (
    firstname,lastname,age) VALUES('$A',
    '$B','$C')";
  $data=mysqli_query($con,$query);
  if ($data) {
    ?>
    <script type="text/javascript">
        alert("data saved")
    </script>
    <?php
  }
  else {
    ?>
    <script type="text/javascript">
        alert("data not saved")
    </script>
    <?php
  }
       ?>
</body>
</html>