<?php
function filtertable($query){
    $con=mysqli_connect("localhost", "root", "", "DBMS");
    $filter_result = mysqli_query($con,$query);
    return $filter_result;
}


?>


<?php

if(isset($_POST['submit']))
{
    $query = "SELECT * FROM `members_tbl` WHERE `member_id`='$_POST[search]'";
}
else{
    $query = "SELECT * FROM members_tbl";
    $search_result = filtertable($query);
}

?>

<?php
                    while($rows=mysqli_fetch_assoc($search_result))
                    {
                    ?>
                        <tr>
                            <td> <?php echo $rows['member_id']; ?></td>
                            <td> <?php echo $rows['fname'];?></td>
                            <td> <?php echo $rows['email'];?></td>
                            <td> <?php echo $rows['phone'];?></td>
                            <td> <?php echo $rows['trainer_name'];?></td>
                        </tr>
                    <?php
                    }
                    ?>