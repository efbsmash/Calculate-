<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate!</title>
</head>
<body>
    <form action="calc.php" method="POST">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="calc">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value"div">Division</option>
        <option value"rem">Remainder</option>
    </select>
    <button type="submit">Calculate</button>
    </form>
</body>
</html>
