<?php
include 'connection.php';
?>
<button> <a href="insertData.php">Home</a></button>
<table border="1px" cellpadding="10px" cellspacing="0">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th colspan="2">Actions</th>
</tr>
<?php
$query = "SELECT * FROM student";
$data = mysqli_query($conn, $query);
$result = mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
    ?>
        <tr>
        <td> <?php echo $row['firstname']; ?> </td>
        <td> <?php echo $row['lastname']; ?> </td>
        <td> <?php echo $row['age']; ?> </td>
        <td> <a href= "update.php?id=<?php 
        echo $row['id'];?>">Edit</a> </td>
        <td> <a onclick= "return confirm('Are you sure? You want to delete?')" href= "delete.php?id=<?php 
        echo $row['id'];?>">Delete</a> </td>
    </tr>
    <?php
}
}
else{
    ?>
    <tr>
        <?php echo "No record found"; ?>
    </tr>
    <?php
}
?>
</table>
</body>
</html>