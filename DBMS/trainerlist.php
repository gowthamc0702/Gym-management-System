<?php

require("connection.php");
$query = "SELECT * FROM trainers_tbl";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3562685406.js" crossorigin="anonymous"></script>
    <title>trainer</title>
</head>
<body>
    <section>
        <div class="top">
        <a href="trainerregister.html">
            <div class="back">
                <span class="ba">BACK</span>
            </div>
        </a>
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
                    TRAINERS LIST
                </h1>
                <a href="trainerregister.html">
                    <button class="button">
                        <h3>
                        <i style="font-size:16px" class="fa">&#xf067;</i>
                        ADD TRAINER
                        </h3>
                    </button>
                </a>
            </div>
            <div class="down">
            <div class="search_box">
                <input type="search" name="search" class="box1" placeholder="  SEARCH FOR TRAINER">
                <input type="submit" value="SEARCH" class="box2">
            </div>
            <div class="info">
                <table class="table">
                    <tr>
                        <th class="td">TRAINER ID</th>
                        <th class="td">FIRST NAME</th>
                        <th class="td">LAST NAME</th>
                        <th class="td">EMAIL ID</th>
                        <th class="td">PHONE NUMBER</th>
                        <th class="td">SALARY</th>
                        <th class="td">_</th>
                    </tr>
                    <?php
                    while($rows=mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr>
                                <td style="border-bottom: 1px solid black;"> <?php echo $rows['trainer_id']; ?></td>
                                <td style="border-bottom: 1px solid black;"> <?php echo $rows['fname'];?></td>
                                <td style="border-bottom: 1px solid black;"> <?php echo $rows['lname'];?></td>
                                <td style="border-bottom: 1px solid black;"> <?php echo $rows['email'];?></td>
                                <td style="border-bottom: 1px solid black;"> <?php echo $rows['phone'];?></td>
                                <td style="border-bottom: 1px solid black;"> <?php echo $rows['salary'];?></td>
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
        </div>
    </section>
</body>
</html>

<style>
     *{
    margin: 0 0;
    padding: 0 0;
    font-family: 'Courier New', Courier, monospace;
    }

    .top{
        border: 1 px solid whitesmoke;
        width: 100%;
        height: 60px;
        margin: 0 auto;
        background-color: rgb(30, 124,255);
    }

    .title{
        color: white;
        font-size: xx-large;
        text-align: center;
        position: absolute;
        top: 10px;
        left: 450px;
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
        height: 50rem;
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
        border-radius: 5px;
        position: absolute;
        top: 97px;
        right: 90px;
    }

    .box1{
        width: 400px;
        height: 30px;
        outline: none;
        border-radius: 5px;
        position: absolute;
        top: 190px;
        left: 380px;
    }

    .box2{
        width: 80px;
        height: 30px;
        background-color: rgb(30, 124,255);
        border: 0.1px solid grey;
        border-radius: 5px;
        position: absolute;
        top: 190px;
        left: 780px;
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