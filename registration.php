<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
	*
	{
  
		margin:0;
		padding:0;
		box-sizing: border-box;;
		font-family: 'Poppins',sans-serif;
	}
  header
	{ 
		position: absolute;
		top: -120;
		left: 0;
		width: 100%;
		padding: 20px 100px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.logo
	{
		position: relative;
		max-width: 400px;
    margin-left:-150px;
		
	}
	header ul
	{
		position:relative;
		display: flex;
	}
	header ul li
	{
		list-style: none;
	}
	header ul li a
	{
		display: inline-block;
		color: #333;
		font-weight: 400;
		margin-left: 40px;
		text-decoration: none;
	}
	.centered
	{
		position :fixed;
		top:30%;
		left:30%;
	}
  .login{  
        width: 382px;  
         overflow: hidden; 
        margin: auto;  
          
        padding: 80px;  
         
        border-radius: 15px ; 
        text-align: center; 
}
input[type=text], select {
  width: 100%;
  padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  margin-left:100px;

  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #f1f1f1;
  color: black;
}

.round {
  border-radius: 50%;
}
h1{
	margin-left:100px;
	/* /color:red; */
}

  </style> 
	<body>
		
	  <header>
				<a href="#">
					<img src="\logo.jpg " class="logo"></a>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="registration.php">Register</a></li>
            <li><a href="loginvote.php">Login</a></li>

						<li><a href="#">About</a></li>
					</ul>
		</header>
				
        
        <div class="centered">
        <form  method="post" action="registration1.php">
			<h1  >Registration </h1> <br>  

        <div class="row g-2">
  <div class="col-md-3">
  <label for="first name" class="form-label form-control-lg">First Name</label>
  <input type="text" name="firstname" class="form-control " placeholder="Enter First  Name" required>
  </div>     
    
  <div class="col-md-4">
  <label for="last name" class="form-label form-control-lg">Last Name</label>
  <input type="text" name="lastname" class="form-control " placeholder="Enter Last Name" required>
  </div>
</div> 
<div class="row">
  <div class="col-md-4">
  <label for="voterid"  class="form-label form-control-lg">Voter Id</label>
  <input type="text" name="voterid" class="form-control " placeholder="Enter Voter ID" required>  
  </div>
  <div class="col-md-4">
  <label for="mobno" class="form-label form-control-lg">Mobile Number</label>
  <input type="number" name="mobno" class="form-control " placeholder="Enter Mobile Number" required>
  </div>
</div>
  <div class="row">
  <div class="col-md-4">
  <label for="gender" class="form-label form-control-lg">Gender</label>
  <!-- <input type="text"name="gender" class="form-control "  placeholder="Enter Gender" required  >   -->
  <select name="gender">
  <option value="male" >Select a gender</option>
  <option value="male" >Male</option>
  <option value="female" >Female</option>
  </select>
  </div>
  <div class="col-md-4">
  <label for="date" class="form-label form-control-lg">DOB</label>
  <input type="date" name="dob" class="form-control"  placeholder="Enter Date Of birth" required>
  </div>
</div>
<input type="submit" name="log"value="Create Account">
<!-- <a href="#" class="previous">&laquo; Previous</a>
<a href="registration1.php" class="next">Next &raquo;</a>
 --></div> 
</div>
  </body>
</html>