<?php  
if(isset($_POST['submit']))
{
    include_once('config.php');

$nome = $_POST["nome"];
$phone_number = $_POST["phone_number"];
$gender = $_POST["gender"];
$date_of_birth = $_POST["date_of_birth"];
$city = $_POST["City"];
$Proced = $_POST["proced"];

$result = mysqli_query ($conection, "INSERT INTO clientes(nome,phone_number,gender,date_of_birth,city,proced) VALUES('$nome', '$phone_number','$gender','$date_of_birth','$city','$Proced')"
);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body{font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(20,147,200),rgb(20,20,20)) ; 
    }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgb(11, 30, 83);
            padding: 15px;
            border-radius: 20px;
            width: 25%;
            height:60%;
            color: white;
        }

        fieldset{
            border: 4px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;

        }
        .inputBox{
            position: relative;
        }

        .inputUser{
            background:none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position:initial;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput , 
        .inputUser:valid ~ .labelInput{
            top:-20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #date_of_birth{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;

        }
        #submit{
            background-image: linear-gradient(rgb(0,92,197),rgb(20,20,20));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        #submit:hover{
           background-image: linear-gradient(rgb(10,102,208),rgb(30,30,30));            
        }
    </style>
</head>
<body>

<header>
        <div class="wrapper">

            <ul class="nav-area">
                <li><a href="beauty saloon.html">Home</a></li>
                <li><a href="Registration.php"> Registration</a></li>
                <li><a href="Procedures.html">Procedures</a></li>
            </ul>
        </div>
    </header>


    <div class="box">
        <form action = "Registration.php" method= "POST">
            <fieldset>
                <legend></b>New Registration</b></legend>
                <br>
                <div class="inputbox">
                <input type = "text" name = "nome" id = "nome" class ="inputUser" required>
                <label for="nome" class="labelInput">Name</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                <input type = "text" name = "phone_number" id = "phone_number" class ="inputUser" required>
                <label for="phone_number" class="labelInput">Phone Number</label>
                </div>
                <br>
                <p>Gender</p>
                <input type="radio" id="female" name ="gender" value="female" required>
                <label for="female">Female</label>
                <br>
                <input type="radio" id= "male" name ="gender" value="male" required>
                <label for="male">Male</label>
                <br>
                <input type="radio" id= "Others" name ="gender" value="Others" required>
                <label for="Others">Others</label>
                <br>
                <br>
                <label for="date_of_birth">Date  of Birth</label>
                <br>
                <input type="date" name="date_of_birth" id="date_of_birth" required>
                <br>
                <br>
                <input type = "text" name = "City" id = "City" class ="inputUser" required>
                <label for="name" class="labelInput">City</label>
                <br>
                <br>
                <div class="inputbox">
                <input type = "text" name = "proced" id = "proced" class ="inputUser" required>
                <label for="name" class="labelInput">Procedure</label>
                </div>
                <br>
                <br>
                <div class="inputbox">

                <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>
    </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
         <a href="https://wa.me/551234567890?text=message%20us" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; 
         z-index:1000;" target="_blank"> 
         <i style="margin-top:16px" class="fa fa-whatsapp"></i> 
         </a>
</body>
</html>