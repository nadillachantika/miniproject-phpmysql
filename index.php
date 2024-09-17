<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

  
    <h1>Tambah Data</h1>

    <form action="create.php" method="POST">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" required>

        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <br>
        <button type="submit">Submit</button>
    </form>

    <h1>Table Karyawan</h1>
    <?php include 'read.php'; ?>

</body>

</html>