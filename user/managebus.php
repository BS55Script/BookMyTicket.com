
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="managebus.css">
<body>
    <nav id="navbar">
        <ul class="list">
            <li class="item"><a href="admin.html">Home</a></li>
            <li  class="item"><a href="about.html">About us</a></li>
            <li  class="item"><a href="#">Contact</a></li>
         <ul class="list">
                <h2><li id="web" style="font-size:2.3rem;"><i><a href="#">BookMyTicket.com</a></i></li></h2>
                </ul>
            </ul>
    </nav>
    <h1  class="h-primary" style="text-align: center;">Available Buses</h1>
    <div class="base">
        </div>
        <div class="container">
        <table>
            <thead>
            <tr>     
                <th>Sno</th>
                <th>source</th>
                <th>Destination</th>
                <th>Busno</th>
                </tr>
            </thead>
            <tbody>
            <?php
                	$conn = new mysqli('localhost','root','','ticket');
                if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("Connection Failed : ". $conn->connect_error);
                } else {
                $sql="SELECT * from managebus";
                $result=mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $sno=$row['sno'];
                        $source=$row['source'];
                        $destination=$row['destination'];
                        $busno=$row['busno'];
                        echo '<tr>
                        <td>'.$sno.'</td>
                        <td>'.$source.'</td>
                        <td>'.$destination.'</td>
                        <td>'.$busno.'</td>
                        </tr>';





                    }
                }
            }

            
            ?>