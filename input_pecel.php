<!DOCTYPE html>
<html>
<head> 
    <title></title>
</head>
<body>
<form action="output_pecel.php" method="POST">
<h2>RUMAH MAKAN PECEL LELE LELO</h2>
<table border="1">
    <td>Nama Pembeli</td>
    <td><input type="text"name="Nama Pembeli"></td>
</tr>
<tr>
    <td>Alamat Pembeli</td>
    <td><textarea type="text" name="text"></textarea></td>
</tr>
<tr>
    <td>Paket</td>
    <td><select name="Paket">
        <option value="Paket 1">Paket 1</option>
        <option value="Paket 2">Paket 2</option>
        <option value="Paket 3">Paket 3</option>
    </select>
</td>
</tr>
<tr>
    <td>Menu Tambahan</td>
    <td><input type="checkbox" name="Kentang Goreng" value="Kentang Goreng">Kentang Goreng<br>
        <input type="checkbox" name="Nasi" value="Nasi">Nasi<br>
        <input type="checkbox" name="Telur Rebus" value="Telur Rebus">Telur Rebus<br>
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="proses" value="PROSES">
                    <input type="reset" name="batal" value="BATAL">
    </td>
</tr>
</table>
</form>
</body>
</html>