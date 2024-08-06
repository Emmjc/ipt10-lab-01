<html>  
<head>   
<title>  
Registration Page  
</title>
<style>
        body {
            background-color: LightSkyBlue;
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 1em;
            background: #f9f9f9;
            border-radius: 5px;
        }
        label {
            margin-top: 1em;
            display: block;
        }
        input, textarea, select {
            font: 1em Arial, sans-serif;
            width: 100%;
            box-sizing: border-box;
            padding: 0.5em;
            margin-top: 0.5em;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 1em;
            cursor: pointer;
        }

        input[type="reset"] {
            background-color: #FF0000;
            color: white;
            border: none;
            padding: 1em;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        hr {
            margin: 1em 0;
        }
    </style>  
</head>  
<body bgcolor="Lightskyblue">  

<img src="https://www.auf.edu.ph/home/images/logo2.png" />
<hr />

<form action="summary.php" method="POST"> 
    <label> First Name </label>         
    <input type="text" name="firstname" size="15" required/>
    <label> Middle Name: </label>     
    <input type="text" name="middlename" size="15" required/>
    <label> Last Name: </label>         
    <input type="text" name="lastname" size="15" required/> <br> <br>
    Birthdate:  
    <input type="date" name="birthdate"/> <br>   
    <br> 

    Email:  
    <input type="email" name="email" required/> 
    
    <label>Phone:</label>  
    <input type="text" name="country code"  value="+63" size="2"/>   
    <input type="number" name="phone_number" size="10"/> <br> <br> 

    <label>Sex:</label><br>  
    <input type="radio" name="sex" value="male" checked="checked" /> Male <br>  
    <input type="radio" name="sex" value="female" /> Female
    <br>  <br>
 

    <label>Program:</label>   
    <select name="program">
    <option value="BSA">BS Accountancy</option>  
    <option value="BSBA">BS Business Administration</option>  
    <option value="BSEE">BS Electronics Engineering</option>  
    <option value="BSIT">BS Information Technology</option>  
    <option value="BSCS">BS Computer Science</option>
    </select>  
    
    <br>  
    <br>  
     
    Address  
    <br>  
    <textarea cols="80" rows="5" name="address"></textarea>  
    <br> <br>     

    <input type="submit" value="Register Now"/>
    <input type="reset" value="Reset"/>  
</form>  

</body>  
</html>  