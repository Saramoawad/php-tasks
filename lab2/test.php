<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <form action="form.php" method="post">
        <label for="fName">First Name</label>
        <input type="text" name="fname" id="fname"><br>

        <label for="lName">Last Name</label>
        <input type="text" name="lname" id="lname"><br>

        <label for="address">Address</label>
        <textarea name="add" id="address"></textarea><br>

        <label for="country">Country</label>
        <select name="country" id="country">
            <option value="egypt">egypt</option>
            <option value="london">london</option>
            <option value="france">france</option>
        </select><br>

        <label for="gender">Gender</label>
        
        <input type="radio" name="gender" value="male">
        <label for="male" >male</label>

        <input type="radio" name="gender" value="female">
        <label for="female" ">female</label>

        <button type="submit">submit</button>
    
    </form>
</body>
</html>