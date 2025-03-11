<!DOCTYPE html>
<html>
<head>
    <title>Form with Validation</title>
    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;
            let age = document.forms["myForm"]["age"].value;
            
            if (name == "" || email == "" || age == "") {
                alert("All fields must be filled out");
                return false;
            }

            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.match(emailPattern)) {
                alert("Invalid email format");
                return false;
            }

            if (age < 18 || age > 60) {
                alert("Age must be between 18 and 60");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <h2>Registration Form</h2>
    <form name="myForm" onsubmit="return validateForm()">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" min="18" max="60" required><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
