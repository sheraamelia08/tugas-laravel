<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h2>Form</h2>
    <form action="submit" method="post">
        @csrf
        <label for="name">Nama</label><br>
        <input type="text" id="name" name="nama" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="messege" name="messege" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
