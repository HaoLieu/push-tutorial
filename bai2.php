<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bai2</title>
</head>
<body>
  <?php
    $error = "";
    $result = "";
    if (isset($_GET['numA']) && isset($_GET['numB'])) {
      $a = $_GET['numA'];
      $b = $_GET['numB'];

      if ($a == '') {
        $error = 'Xin hãy nhập số hạng 1';
      } else if ($b == '') {
        $error = 'Xin hãy nhập số hạng 2';
      } else if (!isset($_GET['op'])) {
        $error = 'Xin hãy chọn một phép toán';
      } else {
        $op = $_GET['op'];
        if ($op == 'add') {
          $result = $a + $b;
        } else if ($op == 'subtract') {
          $result = $a - $b;
        } else if ($op == 'multiply') {
          $result = $a * $b;
        } else if ($op == 'divide') {
          if ($b == 0) {
            $error = 'Không thể chia cho 0';
          } else {
            $result = $a / $b;
          }
        }
      }
    }
  ?>
  <form action="" method = "get">
    <table>
      <title>Tính toán cơ bản</title>
      <tr>
        <td>Số hạng 1</td>
        <td><input type="text" name = "numA"></td>
      </tr>
      <tr>
        <td>Số hạng 2</td>
        <td><input type="text" name = "numB"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="radio" name = "op" value = "add">Cộng
          <input type="radio" name = "op" value = "subtract">Trừ
          <input type="radio" name = "op" value = "multiply">Nhân
          <input type="radio" name = "op" value = "divide">Chia
        </td>  
      </tr>
      <tr>
        <td></td>
        <td><p><?= $result ?></p></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value = "Xem kết quả"></td>
      </tr>
      <tr>
        <td></td>
        <td><p style = "color: red;"><?= $error ?></p></td>
      </tr>
    </table>
  </form>
</body>
</html>