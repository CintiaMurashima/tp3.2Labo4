<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL=StyleSheet href="baseStyle.css" TYPE="text/css"></link>
    <title>Document</title>
</head>
<body>
    <div class="container">
      <form action="action.php" method="post">
        <h1>Contact Form</h1>
        <div class="number">1</div>
        <h2>Your basic info</h2>  

        <label for="">Name</label>
        <div>
          <input required type="text" name= "name" class="full-width">
        </div>
        <br/>
        <label for="">Email</label>
        <div>
          <input required type="email" name= "email" class="full-width">
        </div>
        <br/>
        <label for="">Password</label>
        <div>
          <input required type="password" name= "password" class="full-width">
        </div>
        <br/>
        <label for="">Birthday</label>
        <div>
          <input required type="text" name= "birthday" placeholder="dd/mm/aaaa" class="full-width">
        </div>
        <br/>
        <label for="">Sex:</label>
        <input type="radio" name="answere" value="f"checked>Female
        <input type="radio" name="answere" value="m">Male
        <br/>
        <div class="number number-2">2</div>
        <h2>Your profile</h2>  
        <label for="">About you</label>
        <div>
        <textarea name="comments" cols="30" rows="10" class="full-width"></textarea >
        </div>
        <br/>
        <label for="">Role</label>
        <div>
          <select name="role" class="full-width" placeholder="select a role">
             <option value="front-end-developer">Front-End developer</option>
             <option value="Back-end-developer">Back-End developer</option>
          </select>
        </div>
        <br/>
        <label for="">Interest</label>
        <div>
          <input type="checkbox" name="interest[]" value= "data-base">Data Base <!--name crea un array-->
          <input type="checkbox" name="interest[]" value= "desing">Desing
          <input type="checkbox" name="interest[]" value= "business">Business
          <input type="checkbox" name="interest[]" value= "unit-test">Unit Test
          <input type="checkbox" name="interest[]" value= "cloud-development">Cloud development
          <input type="checkbox" name="interest[]" value= "web-development">Web development
        </div>
        <br/>
        <button type="submit">Send</button>
        <button type="reset">Reset</button>
      </form>
    </div>
    
    
</body>
</html>