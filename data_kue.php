<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah_makanan_proses.php" method="POST">
        <table border="5">
        <tr>
            <td colspan="4" align="center">INPUT DATA ULASAN KUE</td>
        </tr>
        <tr>
            <td>Kode Kue</td>
            <td><input type="text" name="Kode" placeholder="Masukkan Kode Kue" required></td>
        </tr>
        <tr>
            <td>Nama Kue</td>
            <td><input type="text" name="Nama" placeholder="Masukkan Nama Kue" required></td>
        </tr>
        <tr>
    <td>Rating</td>
    <td>
        <select name="rating">
            <option value="selected">-Pilih-</option>
            <option value="Rating 1">1</option>
            <option value="Rating 2">2</option>
            <option value="Rating 3">3</option>
            <option value="Rating 4">4</option>
            <option value="Rating 5">5</option>
        </select>
    </td>
</tr>
            <td>Catatan</td>
            <td><textarea type="text" name placeholder= "Masukkan Catatan"></textarea></td>
        </tr>
        <tr>
           <td colspan="4" align="center">
                <input type="submit" nama="simpan" value="SIMPAN">
                <input type="reset" name="batalbeli" value="BATAL">
                   </td>
               </tr>
           </table>
       </form>
    </body>
</html>