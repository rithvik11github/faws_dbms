<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 100%;
  text-align: center;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="action_farmer.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1 align="center">FARMER Sign Up</h1>
    <p align="center">Please fill in this form to create an account.</p>
    <hr>
    
    
    <label for="Name"><b>Name</b></label>
    <input class="input" type="text" placeholder="Enter Name" name="name" value="" required>
    
    <label for="Age"><b>Age</b></label>
    <input class="input" type="number" placeholder="Enter Age" name="age" value="" required>

    <label for="Address"><b>Address</b></label>
    <input class="input" type="text" placeholder="Enter Address" name="address" value="" required>

    <label for="Contact No."><b>Contact no.</b></label>
    <input class="input" type="number" placeholder="Enter Contact No." name="contactno" value="" required>

    <label for="Aadhar No."><b>Aadhar no.</b></label>
    <input class="input" type="number" placeholder="Enter Aadhar No." name="aadharno" value="" required>

    <label for="Area"><b>Land Area(in Acres)</b></label>
    <input class="input" type="text" placeholder="Enter Land Area" name="landarea" value="" required>

    <label for="Crops"><b>Crops Grown</b></label>
    <input class="input" type="text" placeholder="Enter Crop names" name="cropsgrown" value="" required>

    <label for="username"><b>User Name</b></label>
    <input class="input" type="text" placeholder="Enter Username" name="username" value="" required>

    <label for="psw"><b>Password</b></label>
    <input class="input" type="password" placeholder="Enter Password" name="psw" value="" required>

    <div class="clearfix">
      <button type="submit" name="Submit" class="signupbtn" value="Submit">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
