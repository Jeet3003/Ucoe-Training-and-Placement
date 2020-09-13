<!DOCTYPE html>
<html>
  <head>
    <style>
      * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.above {
    background-color: #00334E;
  padding: 5px;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #00334E;
  color: white;
}

.header-right {
  float: right;
}
table > .btn {
  background-color: red;
}


    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div class="above">
      <p></p>
    </div>
    <div class="header">
      <a href="#default" class="logo">Universal College of Engineering</a>
      <div class="header-right">
        <a class="home" href="index.html">Home</a>
        <a class="active" href="seminar.php">Seminar</a>
        <a class="apply" href="apply.php">Apply</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>
    </div>

    <main style="text-align: center; margin-top: 40px">
      Register for our latest Seminar on <br />
      <h1>How to make your profile strong</h1>
      <h5>22nd September, 2020 Wednesday</h5>

      <button class="btn btn-primary">Register</button>
    </main>
    <hr size="2" />
    <div class="container">
      <h6>Register for Seminars:</h6>
      
      <div class="row">
        <table class="table table-striped">
        <?php

            $servername="localhost";
            $username="root";
            $password="";
            $dbname="tnp portal";

            $conn=mysqli_connect($servername,$username,$password,$dbname);

            if(!$conn){
                die("connection failed:" . mysqli_connect_error());
            }

            $sql = "SELECT seminar_name , speaker , date , link from seminar";

            $result = mysqli_query($conn,$sql);

            while($resultArray = mysqli_fetch_array($result))
            {
               echo '<tr>';
               echo '<td>'.$resultArray['seminar_name'].'</td>';
               echo '<td>'.$resultArray['speaker'].'</td>';
               echo '<td>'.$resultArray['date'].'</td>';
               echo '<td style="background-color:00334E;"><a href="'.$resultArray['link'].'" class="btn btn-primary d-flex justify-content-center">Register</a></td>';
               echo '</tr>';
               
            }
            ?>
</table>
    </div>


    </div>
  </body>
</html>