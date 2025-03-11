<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Elements Example</title>
   
</head>
<body>
    <div class="container">
        <h2>Sample Form</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Gender:</label><br>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
            </div>
            
            <div class="form-group">
                <label>Hobbies:</label><br>
                <input type="checkbox" id="sports" name="hobby" value="Sports">
                <label for="sports">Sports</label>
                <input type="checkbox" id="music" name="hobby" value="Music">
                <label for="music">Music</label>
                <input type="checkbox" id="reading" name="hobby" value="Reading">
                <label for="reading">Reading</label>
            </div>
            
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>
</html>
