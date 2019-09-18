<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> Form Registrasi</title>
    <style>
        form{
            margin-left: 40%
        }
    </style>
  </head>
  <body>
  <h2><center>Form Registrasi</center></h2>
    <form class="" action="" method="post">
      <table>
      <tr>
        <td><label for="nama"> Nama </label></td>
        <td> : </td>
        <td><input type="text" name="nama" id="nama"></td>
      </tr>
      <tr>
        <td><label for="nis">NIS</label></td>
        <td> : </td>
        <td><input type="text" name="nis" id="nis"></td>
      </tr>
      <tr>
        <td><label for="kelas"> Kelas</label></td>
        <td> : </td>
        <td><select name="kelas" id="kelas">
            <option value="">Kelas</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
          </select></td>
      </tr>
      <tr>
        <td><label for="jurusan"> Jurusan</label></td>
        <td> : </td>
        <td><input type="text" name="jurusan" id="jurusan"></td>
      </tr>
      <tr>
        <td><label for="alamat"> Alamat</label></td>
        <td> : </td>
        <td><input type="text" name="text" id="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><button type="button" onclick="">Save</button>
        <button type="button" onclick="">Cancel</button></td>
      </tr>
      </table>