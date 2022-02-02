
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    
    <form>
  <table>
   <tr>
    <td>First Name : <input type="text"></td>
   </tr>
   <tr>
    <td>Last Name: <input type="text"></td>
   </tr>
   <tr>
    <td>Age: <input type="number"></td>
   </tr>
   <tr>
    <td>Designation : 
     <input type="radio" name="Designation"> Junior Programmer
     <input type="radio" name="Designation"> Senior Programmer
     <input type="radio" name="Designation"> Project Lead
    </td>
   </tr>
   <tr>
    <td>Preferred Language:  
     <input type="checkbox" name="Preferred Language"> JAVA
     <input type="checkbox" name="Preferred Language"> PHP
     <input type="checkbox" name="Preferred Language"> C++
     
    </td>
   </tr>
   <tr>
    <td>Email : <input type="email"></td>
   </tr>
   <tr>
    <td>Password : <input type="Password"></td>
   </tr>
   
   
    <tr>
   <td for="myfile">Please choose a file<input type="file" id="myfile" name="myfile"></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"> <input type="Reset" value="Reset"></td>
   
    </tr>
   
  </table>
 </form>
</body>
</html>
