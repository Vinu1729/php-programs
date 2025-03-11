<!DOCTYPE html>
<html>
<head>
    <title>Form Controls Example</title>
</head>
<body>
    <form>
        <label>Select Country:</label>
        <select name="country">
            <option value="india">India</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
        </select>
        <br><br>

        <input type="hidden" name="user_id" value="12345">

        <label>Select Your Skills:</label>
        <select name="skills" multiple size="4">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JavaScript</option>
            <option value="python">Python</option>
            <option value="C">C</option>
            <option value="C++">C++</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
