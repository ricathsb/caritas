<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form action="input_data.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
