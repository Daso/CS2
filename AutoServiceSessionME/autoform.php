<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AutoServices</title>
</head>

<body>
<h1>AutoService</h1>
<?php if ($_POST['registro']==null) { ?>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td><h2>Sedan</h2></td>
      <td><h2>Marca</h2></td>
      <td><h2>Placa</h2></td>
      <td>&nbsp;</td>
      <td><h2>Servicios</h2></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="marcaSedan1">
        <input type="text" name="marcaSedan1" id="marcaSedan1" />
      </label></td>
      <td><input type="text" name="placaSedan1" id="placaSedan1" /></td>
      <td>&nbsp;</td>
      <td><p>
        <input name="lavado1" type="checkbox" id="lavado1" value="10" />
        <label for="lavado1">Lavado</label>
        <br />
        <input name="niveles1" type="checkbox" id="niveles1" value="10" />
        <label for="niveles1">Niveles</label>
        <br />
        <input name="afinamiento1" type="checkbox" id="afinamiento1" value="50" />
        <label for="afinamiento1">Afinamiento</label>
      </p>      </td>
    </tr>
   
    <tr>
      <td><h2>Camionetas</h2></td>
      <td><h2>Marca
        
      </h2></td>
      <td><h2>Placa</h2></td>
      <td><h2>Modelo</h2></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="marcaCam1" id="marcaCam1" /></td>
      <td><input type="text" name="placaCam1" id="placaCam1" /></td>
      <td><input type="text" name="modeloCam1" id="modeloCam1" /></td>
      <td><input name="lavado4" type="checkbox" id="lavado4" value="10" />
        <label for="lavado4">Lavado</label>
        <br />
        <input name="niveles4" type="checkbox" id="niveles4" value="10" />
        <label for="niveles4">Niveles</label>
        <br />
        <input name="afinamiento4" type="checkbox" id="afinamiento4" value="50" />
        <label for="afinamiento4">Afinamiento</label>
<label for="afinamiento5"></label></td>
    </tr>
    
    <tr>

      <td colspan="2">
      <input name="registro" type="hidden" id="hidden" value="1" />
      <label for="button"></label>

      <input type="submit" name="button" id="button" value="Submit" /></td>
      <td colspan="3"><label for="button2"></label>
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
  </table>
  <?php } ?>

</form>
</body>
</html>
