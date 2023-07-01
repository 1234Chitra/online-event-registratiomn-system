<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color:#F5DEB3 ;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: #FFE4E1;  
    }   
</style>   
</head>    
<body>    
    <center> <h2> WELCOME TO TECHNO SPECTRUM </h2>
	<h4>THE GREAT AIM OF EDUCATION IS NOT KNOWLEDGE, BUT ACTION  </h4> </center>   
    <form>  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            
<form action="/action_page.php">
  
    <a href="http://localhost/dataproject/infopage.php" type="submit">Login</a>
   
   
</form>  			
             
			 <center>
			 <div class="row"></div>
<div class="row">
<div class="col s6"><a href="http://localhost/dataproject/register.php">Create account</a></div>
              </center>
            
			 <a href="http://localhost/dataproject/forget.php">Forgot password? </a>  
	 
        </div>   
    </form>     
</body>     
</html>  