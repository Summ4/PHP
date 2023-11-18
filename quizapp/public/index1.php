<!DOCTYPE html>
<html>
<head>
    <title>Quiz Form</title>
</head>
<body>
    <h2>Quiz Form</h2>
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="">
        <label for="question">Question:</label>
        <input type="text" name="question" value="">
        <label for="answer">Answer:</label>
        <input type="text" name="answer" value="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
