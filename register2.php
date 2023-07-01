
<!DOCTYPE html>
<html>
<head>


html{
    overflow:hidden;
    height: 100%;
    max-height: 100%;
}
body {
    height: 100%;
    max-height: 100%;
    width: 100%;
}
#box {
    height: 100%;
    max-height: 100%;
    overflow: auto;
    width: 100%;
}

















<title>Registration form</title>
<link rel="stylesheet" href="style.css" />
<!-- Compiled and minified CSS -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</head>
<body>
    
<div class="row center">
<h3 style="color:GREEN;">REGISTRATION FORM</h3>

<h6>THE GREAT AIM OF EDUCATION IS NOT KNOWLEDGE, BUT ACTION	</h6>
</div>

 
 

<body bgcolor="white">  
<br>  
<br>  
<form action="link.php" method="post">  
  
  
<label> Fname  </label>         
<input type="text" name="fname" size="15"/> <br> <br>  
<label> Mname </label>     
<input type="text" name="mname" size="15"/> <br> <br>  
<label> Lname </label>         
<input type="text" name="lname" size="15"/> <br> <br>  
  
<label> DEPARTMENT </label>         
<input type="text" name="department" size="10"/>





  
<br>  
<br>  
<label>   
Gender :  
</label><br>

<select name="GENDER">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>






<br>  
<br>  
  
<label>   
Phone :  
</label>  
<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
Address  
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  

  
 <input type="submit" value="Submit">
   
</form>  
</body>  
</html>  


