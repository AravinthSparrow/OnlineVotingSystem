<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Election Commision</title>
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
		top:20%;
		left:35%;
	}
    .login
{  
        width: 382px;  
        overflow: hidden;
        margin: auto;  
          
        padding: 80px;  
         
        border-radius: 15px ; 
        text-align: center; 
}
h1{
	text-align: center;

}
p{
	text-align: center;
}
input[type=text], select {
  width: 125%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  width: 125%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 125%;
  background-color: #4CAF50;
  color: white;
  padding: 12px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
                <div class='centered'>
                <div class="login">    
    <form  method="post" action="save.php"> 
    <h1>Login Page</h1> <br>  
     
             <input type="text" name="voterid" placeholder="Enter Your voter ID">    
        
          <br>
        <input type="date" name="date"  placeholder="">  
        <br>
        <input type="submit" name="log"value="Login">       
        <br><br> 
        <p>Did not Register? <a href="registration.php">Sign up</a> 

       
        

    </form>     
        </div>
        </div>
        

		
		
        </body>
        </html>
        


