<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <div>
        <center>
            <p>Member Register</p>
            <form action="" method="POST">
                <label id="name1" for="name"> </label><br />
                <label id="name2" for="name">Name </label><br />
                <input type="text" name="name" id="name" required />
                <br />
                <label id="address1" for="address"> </label><br />
                <label id="address2" for="address">Address </label><br />
                <textarea id="address" name="address" rows="4" cols="50"></textarea>
                <br />
                <label id="age1" for="age"> </label><br />
                <label id="age2" for="age">Age </label><br />
                <input id="age" name="age" /><br />
                <label id="profession1" for="profession"> </label><br />
                <label id="profession2" for="profession">Profession </label><br />
                <input id="profession" name="profession" /><br />
                <label id="residential1" for="residential"></label><br />
                <label id="residential2" for="residential">Residential Status</label><br />
                <input type="radio" id="residential1" name="residential" value="residential" />
                Residential
                <input type="radio" id="residential2" name="residential" value="nonresidential" />
                Non-Residential
                <br />
                <button type="submit" onclick="">Submit</button>
            </form>
            <div id="show"></div>
        </center>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $age = $_POST["age"];
        $profession = $_POST["profession"];
        $residential = $_POST["residential"];



        if (strlen($name) < 5) {
            echo "<script>document.getElementById('name1').innerHTML = '<span style=\"color: red;\">*** กรอกข้อมูลที่มีความยาว 5 ตัวอักษร ***</span>';</script>";
            return false;
        } else {
            echo "<script>document.getElementById('name1').innerHTML = '';</script>";
        }
        if (strlen($address) < 5) {
            echo "<script>document.getElementById('address1').innerHTML = '<span style=\"color: red;\">*** กรอกข้อมูลที่มีความยาว 5 ตัวอักษร ***</span>';</script>";
            return false;
        } else {
            echo "<script>document.getElementById('address1').innerHTML = '';</script>";
        }
        if (strlen($age) < 5) {
            echo "<script>document.getElementById('age1').innerHTML = '<span style=\"color: red;\">*** กรอกข้อมูลที่มีความยาว 5 ตัวอักษร ***</span>';</script>";
            return false;
        } else {
            echo "<script>document.getElementById('age1').innerHTML = '';</script>";
        }
        if (strlen($profession) < 5) {
            echo "<script>document.getElementById('profession1').innerHTML = '<span style=\"color: red;\">*** กรอกข้อมูลที่มีความยาว 5 ตัวอักษร ***</span>';</script>";
            return false;
        } else {
            echo "<script>document.getElementById('profession1').innerHTML = '';</script>";
        }
        if (strlen($residential) < 5) {
            echo "<script>document.getElementById('residential1').innerHTML = '<span style=\"color: red;\">*** กรอกข้อมูลที่มีความยาว 5 ตัวอักษร ***</span>';</script>";
            return false;
        } else {
            echo "<script>document.getElementById('residential1').innerHTML = '';</script>";
        }
        echo "<center><br/ >name:$name <br />address:$address <br /> age:$age <br /> profession:$profession  <br />residential:$residential <br /></center>";
    }
    ?>


</body>

</html>