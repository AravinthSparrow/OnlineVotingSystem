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
	section
	{
		position:relative;
		width: 100%;
		min-height: 100vh;
		padding: 100px;
		display: flex;
		justify-content: space-between;
		align-items: center;
		background: #fff;
	}
	header
	{
		position: absolute;
		top: -130;
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
	.content
	{
		position: relative;
		width: 100%;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.content .textBox
	{
		position: relative;
		max-width: 600px;
	}
	.content .textBox h2
	{
		color: #333;
		font-size: 4em;
		line-height: 1.4em;
		font-weight: 500;
	}
	.content .textBox h2 span
	{
		color: #017143;
		font-size: 1.2em;
		font-weight: 900;
	}
	.content .textBox p
	{
		color:#333;
	}
	.content .textBox a
	{
		display: inline-block;
		margin-top: 20px;
		padding: 8px 20px;
		background: #017143;
		color: #fff;
		border-radius: 40px;
		font-weight: 500;
		letter-spacing: 1px;
		text-decoration: none;
	}
	.content .imgBox
	{
		width: 600px;
		display: flex;
		justify-content: flex-end;
		padding-right: 50px;
		margin-top: 50px;
	}
	.content .imgBox img
	{
		max-width: 340px;
	}
	.thumb
	{
		position: absolute;
		left: 50%;
		bottom: 20px;
		transform: translateX(-50%);
		display: flex;
	}
	.thumb li
	{
		list-style: none;
		display: inline-block;
		margin:0 20px;
		cursor: pointer;
		transition: 0.5s;
	}
	.thumb li:hover
	{
		transform: translateY(-15px);
	}
	.thumb li img
	{
        max-width: 60px;
	}
	 
	</style> 
	<body>
		<section>
			
			<header>
				<a href="#">
					<img src="\logo.jpg " class="logo"></a>
					<ul>
						<li><a href="#">Home</a></li>
						
		<li><a href="registration.php">Register</a></li>
		<li><a href="loginvote.php">Login</a></li>
						<li><a href="#">About</a></li>
						</ul>
				</header>
				<div class="content">
					<div class="textBox">
						<h2><br>Election Commission<br>Online<span>  Voting </span></h2>
						<!-- <p>Online voting System.Its help to put the vote</p> -->
						<!-- <a href="#">Learn More</a> -->
					</div>
					<div class="imgBox">
						<img src="\fingerrr.jpeg" class="starbucks">
					</div>
				</div>
				<ul class="thumb">
				<li><img src="\logo.jpg" onclick="imgSlider('logo.jpg');changeCircleColor('#017143')"></li>
				<li><img src="\fingerrr.jpeg"onclick="imgSlider('fingerrr.jpeg');changeCircleColor('#017143')"></li>
				<li><img src="\vote.jpg"onclick="imgSlider('vote.jpg');changeCircleColor('#d752b1')"></li>
			</ul>
			</section>
			<script type="text/javascript">
				function imgSlider(anything){
					document.querySelector('.starbucks').src=anything;
				}
				function changeCircleColor(color){
					const circle=document.querySelector('.circle');
					circle.style.background=color;
				}
			</script>
		</body>
		</html>