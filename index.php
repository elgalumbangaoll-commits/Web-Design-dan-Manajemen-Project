<body>

<div class="menu">
  <a href="index.php">Form</a>
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
</div>

<div class="container">
  <form method="POST" action="class/Biodata.php">
    <input type="text" name="firstname" placeholder="Firstname" required>
    <input type="text" name="lastname" placeholder="Lastname" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <textarea name="address" placeholder="Address" required></textarea>
    <button type="submit">Submit</button>
  </form>
</div>

</body>

<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
        }
        .container{
            width:400px;
            margin:100px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        input, textarea{
            width:100%;
            padding:8px;
            margin:5px 0;
        }
        button{
            background:#4da6ff;
            color:white;
            border:none;
            padding:8px 15px;
            border-radius:5px;
            cursor:pointer;
        }
        .hasil{
            margin-top:20px;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="POST">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <center><button type="submit">Submit</button></center>
    </form>

    <div class="hasil">
        <?php echo $hasil; ?>
    </div>
</div>

</body>
</html>