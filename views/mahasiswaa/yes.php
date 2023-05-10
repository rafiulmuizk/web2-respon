<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>nama</th>
        </tr>
        <?php foreach ($mahasiswa as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->nama ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>