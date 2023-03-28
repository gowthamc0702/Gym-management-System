<?php

require("connection.php");
$query = "SELECT * FROM members_tbl";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3562685406.js" crossorigin="anonymous"></script>
    <title>Member</title>
</head>
<body>
    <section>
        <div class="top">
            <a href="memberregister.html">
            <div class="back">
                    <span class="ba">BACK</span>
            </div></a>
            <div class="title"> 
                GYM MANAGEMENT SYSTEM
            </div>
        </div>
    </section>
    <section>
        <div class="bottom">
            <div class="list_text">
                <h1 class="text">
                    <i style="font-size:30px" class="fas">&#xf0c9;</i>
                    MEMBERS LIST
                </h1>
                <a href="memberregister.html">
                    <button class="button">
                        <h3>
                        <i style="font-size:16px" class="fa">&#xf067;</i>
                        ADD MEMBER
                        </h3>
                    </button>
                </a>
            </div>
            <div class="search_box">
                <form action="" method="post">
                <input type="search" name="search" class="box1" placeholder="  SEARCH FOR MEMBER">
                <input type="submit" name="submit" value="SEARCH" class="box2">
                </form>
            </div>
            <div class="info">
                <table class="table">
                    <tr class="tr">
                        <th class="td">MEMBER_ID</th>
                        <th class="td">NAME</th>
                        <th class="td">EMAIL ID</th>
                        <th class="td">PHONE NUMBER</th>
                        <th class="td">TRAINER_NAME</th>
                        <th class="td">VALID TILL</th>
                        <th class="td">_</th>
                    </tr>
                    <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                    ?>
                        <tr>
                            <td style="border-bottom: 1px solid black;"> <?php echo $rows['member_id']; ?></td>
                            <td style="border-bottom: 1px solid black;"> <?php echo $rows['fname'];?></td>
                            <td style="border-bottom: 1px solid black;"> <?php echo $rows['email'];?></td>
                            <td style="border-bottom: 1px solid black;"> <?php echo $rows['phone'];?></td>
                            <td style="border-bottom: 1px solid black;"> <?php echo $rows['trainer_name'];?></td>
                            <td style="border-bottom: 1px solid black;">_</td>
                            <td style="border-bottom: 1px solid black;">
                                <button class="delete" ><i style="font-size:24px" class="fa">&#xf044;</i></button>
                                <button class="delete" ><i style="font-size:24px" class="fa">&#xf014;</i></button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

<style>
     *{
    margin: 0 0;
    padding: 0 0;
    }

    .top{
        border: 1 px solid whitesmoke;
        width: 100%;
        height: 60px;
        margin: 0 auto;
        background-color: rgb(30, 124,255);
    }

    .title{
        font-size: xx-large;
        text-align: center;
        position: absolute;
        top: 10px;
        left: 450px;
        color: white;
    }

    .back{
        color: white;
        position: relative;
        top: 9px;
        left: 16px;
    }

    .ba{
        font-size: larger;
        font-weight: bolder;
        position: relative;
        top: 10px;
        left: 34px;
    }

    .bottom{
        margin: 20px 40px;
        height: 80rem;
        border: 1px solid grey;
        border-radius: 5px;
        background-color: white;
    }

    .list_text{
        border-bottom: 1px solid black;
        margin: auto 10px;
        text-align: left;
        padding: 18px;
    }

    .text{
        font-size: 2rem;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .button{
        width: 160px;
        height: 40px;
        position: absolute;
        top: 97px;
        right: 90px;
        border: 02px solid grey;
        border-radius: 5px;
    }

    

    .box1{
        width: 400px;
        height: 30px;
        outline: none;
        position: absolute;
        top: 190px;
        left: 380px;
        border: 0.1px solid grey;
        border-radius: 5px;
    }

    .box2{
        width: 80px;
        height: 30px;
        background-color: rgb(30, 124,255);
        border: 0.1px solid grey;
        position: absolute;
        top: 190px;
        left: 780px;
        border-radius: 5px;
    }

    .info{
        margin: auto 10px;
        height: 150px;
    }
    .list{
        display: inline;
        padding: 30px;
        position: relative;
        top: 120px;
    }

    .table{
        text-align: center;
        width: 100%;
        height: 110px;
        border: 1px solid grey;
        line-height: 60px;
        position: relative;
        top: 90px;
    }
    .td{
        border-bottom: 1px solid black;
        background-color: rgb(30, 124, 255);
        width: 10%;
    }


</style>