<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah_barang.php" method="POST">
        <table border="5">
        <tr>
            <td colspan="4" align="center">INPUT DATA BARANG"</td>
        </tr>
        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td><input type="text" name="kode" required ></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="judul" required ></td>
        </tr>
        <tr>
            <td>Stok Barang</td>
            <td>:</td>
            <td><input type="text" name="stok" required ></td>
        </td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td>:</td>
            <td><input type="text" name="judul" required ></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" nama="beli" value="BELI">
                            <input type="reset" name="batalbeli" value="BATAL BELI">
                   </td>
               </tr>
           </table>
       </form>
</body>
</html>