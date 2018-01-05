<!DOCTYPE html>
<html>
<head>
	<title> SignUp Page</title>
	<style>
	
		/* Bordered form */
		form {
		border: 3px solid #f1f1f1;
		}

		/* Full-width inputs */
	input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    body {

  background: #384047;
  font-family: sans-serif;
  font-size: 15px
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
}
form {

  background: #fff;
  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 50px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
  h2 {
    margin:0 0 50px 0;
    padding:10px;
    text-align:center;
    font-size:12px;
    color:darken(#e5e5e5, 50%);
    border-bottom:solid 1px #e5e5e5;
  }
		/* Add a hover effect for buttons */
		button:hover {
			opacity: 0.8;
		}


		/* Add padding to containers */
		.container {
			padding: 16px;
		}

		/* The "Forgot password" text */
		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			    display: block;
			    float: none;
			}
			.cancelbtn {
			    width: 100%;
			}
		}
	</style>
</head>
<body>
	<form action="/action_page.php">
	  <div class="imgcontainer">
	    <img src="Icon.PNG" alt="" class="avatar">
	  </div>

	  <div class="container">
	<label><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="fname" required>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
    <input type="checkbox" checked="checked"> Remember Me
    

    <div class="clearfix">
    <button type="submit" class="signupbtn">Sign Up</button>
    </div>
	</form>
</body>
</html>
