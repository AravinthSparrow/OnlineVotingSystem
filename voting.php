<html>
<head>
<title>Vote</title>
<style>
	*{
    margin: 0;
    padding: 0;
}
.background{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(jass.jpeg);
    background-position: top;
    background-size: cover;
    position: absolute;

}
.form-box{
    width: 55%;
    top: 20%;
    height: 320px;
    position: relative;
    margin:  6% auto;
    background-color: rgba(204,240,212,0.849);
    padding: 5px;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    border-radius: 30px;
    transition: .5s;
}
.input-group{
    top: 80px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.radio{
    left: 15%;
    position: absolute;
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 100px rgba(24, 92, 24, 0.021);
    outline: 10px;
}
.submit-btn{
    width: 90%;
    left: 200%;
    top: 120%;
    position: absolute;
    padding: 5px 5px;
    cursor:pointer;
    display:block;
    margin:auto;
    background:linear-gradient(right, #ff105f,#ffad06);
    border:0;
    outline:none;
    border-radius: 30px;
}
</style>
</head>
<body>
<div class="background">
    <div class="form-box">
        <h2>Check to the party which you think deserve to rule our state.</h2>
            <div id="btn">
                
                
            </div>
            <form class="input-group" action="acknowledgement.html">
                <input type="radio" name="radio"><img src="arvi.jpg" width="70" height="70"><br><br>
                <input type="radio" name="radio"><img src="download.jpg" width="70" height="70"<br><br>
                <input type="radio" name="radio"><img src="123.jpg" width="70" height="70"<br><br>
                
                <button type="submit" class="submit-btn">procceed</button>
            </form>

        </div>


    </div>

</div>


</body>
</html>