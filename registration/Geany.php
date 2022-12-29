
<html>
<head>
	<title>
		Geany Softech Registration 
	</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color:aliceblue;" >
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1 >GEANY Registration Form</h1><hr>
          </div>
          <div class="panel-body">
            <form action="register.php" method="post" class="form-control" style="background-color: aliceblue; border-radius: 10px; border-color: darkgoldenrod ;">
              <div class="form-group" >
                <label>First Name</label>
                <input type="text" class="form-control" id="firstName"name="fname"  required />
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" id="lname"name="lname"required/>
              </div>
              <div class="form-group ">
                <label>Gender:</label>
                 <select class="custom-select" name="gender" id="gender">
                 	<option>---SELECT---</option>
    				<option value="male" name="m" >Male</option>
    				<option value="female" name="f">Female</option>
    				<option value="other" name="o">Other</option>
    	
  				 </select>

				
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control" id="number" name="number" required />
              </div>
              <button class="btn btn-primary btn btn-lg" type="submit">Register</button>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Sandeep Sharma</small>
          </div>
        </div>
      </div>
    </div>
   
  
</div>
  </body>
</html>