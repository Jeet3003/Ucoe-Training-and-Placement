<!--REGISTRATION FORM-->


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Seminar registration page</h2>
    <div class="form-group">
      <label for="uname">Seminar Title:</label>
      <input type="text" class="form-control" id="txtname" placeholder="Enter title.." name="txtname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Link:</label>
      <input type="text" class="form-control" id="link" placeholder="Enter link of seminar.." name="link" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     <div class="form-group">
      <label for="uname">Speaker Name:</label>
      <input type="text" class="form-control" id="speaker" placeholder="Enter name of speaker.." name="speaker" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

     <div class="form-group">
      <label for="uname">Date:</label>
      <input type="text" class="form-control" id="date" placeholder="Enter date of seminar.." name="date" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>


    
   
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {

  $servername="localhost";
    $username="root";
    $password="";
    $dbname="tnp portal";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());

    }
   
    $Sname = $_POST['txtname'];
    $Slink = $_POST['link'];
    $Sspeaker = $_POST['speaker'];
   // $Sconfirmpassword = $_POST['txtname'];
    $Sdate= $_POST['date'];
    $sql="INSERT INTO seminar(seminar_name,link,speaker,date)
          VALUES ('$Sname','$Slink','$Sspeaker','$Sdate')";
     
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Details added successfully');</script>";
    }
    else
    {
        echo "Error :".mysqli_error($conn);
    }


   mysqli_close($conn);
}
   ?>