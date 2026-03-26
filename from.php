<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            background: #f5f7fa;
            margin: 0;
        }

        .menu {
            background: #007bff;
            padding: 15px;
            text-align: center;
        }

        .menu a {
            color: white;
            margin: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .menu a.active {
            color: yellow;
        }

        .container {
            width: 380px;
            margin: 80px auto 20px auto;
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        input, textarea {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            background: #4da6ff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #3399ff;
        }
        .hasil {
            width: 380px;
            margin: 0 auto 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        .hasil h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="menu">
    <a href="../home/home.php">Home</a>
    <a href="form.php" class="active">Form</a>
    <a href="../about/about.php">About</a>
</div>

<div class="container">
    <h2>Form Sederhana</h2>

    <form method="POST">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
?>
    <div class="hasil">
        <h3>Hasil Input</h3>
        <p>Hi, my name is <b><?php echo $firstname . " " . $lastname; ?></b></p>
        <p>Phone Number: <?php echo $phone; ?></p>
        <p>Address: <?php echo $address; ?></p>
    </div>
<?php
}
?>

</body>
</html>