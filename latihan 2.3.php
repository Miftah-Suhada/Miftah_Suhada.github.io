<form action="" method="POST">
    <input type="number" name="num1">
    <select name="aritmatika">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="number" name="num2">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    if ($_POST['aritmatika'] == '+') {
        $hasil = $_POST[' num1']+$_POST['num2']
    }
    if ($_POST['aritmatika'] == '+') {
        $hasil = $_POST[' num1']-$_POST['num2']
    }
    if ($_POST['aritmatika'] == '+') {
        $hasil = $_POST[' num1']*$_POST['num2']
    }
    if ($_POST['aritmatika'] == '+') {
        $hasil = $_POST[' num1']/$_POST['num2']
    }
    echo $_POST['num1'].$_POST['aritmatika'].$_POST['num2'].'='$hasil;
}

?>