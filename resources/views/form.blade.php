<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buat Account Baru </title>
</head>
<body>
    <h1>Buat Account Baru !</h1>
    <h2>Sign Up Form</h2>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <label for="fName">First Name : </label>     <br><br>
        <input type="text" name="fName" id="fName">  <br><br>
        
        <br>
        
        <label for="lName">Last Name  : </label>     <br><br>
        <input type="text" name="lName" id="lName">  <br>
        
        <br>
        
        <label >Gender : </label>                    <br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>               <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>           <br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label> 
        
        <br><br>

        <label for="nation">Nationality  : </label>   <br><br>
        <select name="nation" id="nation">
            <option value="indonesia">Indonesia</option>
            <option value="Palestine">Palestine</option>
            <option value="Rusia">Rusia</option>
        </select>

        <br><br>

        <label>Language Spoken  : </label>            <br><br>
        <input type="radio" id="bahasa" name="lang" value="bahasa">
        <label for="bahasa">Bahasa Indonesia</label>                  <br>
        <input type="radio" id="english" name="lang" value="english">
        <label for="english">English</label>                         <br>
        <input type="radio" id="otherlang" name="lang" value="other">
        <label for="otherlang">Other</label>          <br><br>

        <label for="biodata">Bio  : </label>            <br><br>
        <textarea name="biodata" id="biodata" cols="30" rows="10"></textarea>

        <br><br>
        <input type="submit" value="Sign Up">
    </form>
    
    
</body>
</html>