<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Pasien Virus Covid-19</title>
</head>
<body>
<style>
h2 {
    color :#00FF00;
}
</style>
  <div>
    <h2>Data Pasien Virus Covid-19</h2>
    <form action="data.php" method="POST">
    <table>
      <tbody>
      <tr>
        <td> Nama Wilayah </td>
        <td>:</td>
        <td>
          <select name="Nama_Wilayah" id="">
            <option value="DKI Jakarta"> DKI Jakarta</option>
            <option value="Jawa Barat"> Jawa Barat </option>
            <option value="Banten"> Banten </option>
            <option value="Jawa Tengah"> Jawa Tengah </option>
          </select>
        </td>
      </tr>
      <tr>
        <td> Jumlah<font color="(#00008B)"> Positif </td>
        <td>:</td>
        <td><input type="text" name="Jumlah_Positif"></td>
      </tr>
      <tr>
        <td> Jumlah<font color="(#5F9EA0)"> Dirawat </td>
        <td>:</td>
        <td><input type="text" name="Jumlah_Dirawat"></td> 	
      </tr>
      <tr>
        <td> Jumlah<font color="(#7FFF00)"> Sembuh </td>
        <td>:</td>
        <td><input type="text" name="Jumlah_Sembuh"></td>
      </tr>
      <tr>
        <td> Jumlah<font color="rgb()"> Meninggal </td>
        <td>:</td>
        <td><input type="text" name="Jumlah_Meninggal"></td>
      </tr>
      <tr>
        <td> Nama Operator </td>
        <td>:</td>
        <td><input type="text" name="Nama_Operator"></td>
      </tr>
      <tr>
        <td> NIM Mahasiswa </td>
        <td>:</td>
        <td><input type="text" name="NIM_Mahasiswa"></td>
      </tr>
      <tr>
        <td colspan="3">
        <button type="submit"> Submit </button>
        </td>
      </tr>
      </tbody>
    </table>
    </form>
</body>
</html>