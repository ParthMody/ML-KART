<!DOCTYPE html>
<html>
<head>
    <title>Contact Us | ML-KART</title>
    <link rel="shortcut icon" href="img/ML.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1><center>Contact Us</center></h1>
    <p style="text-align:center;"><img src="img/ML.png" alt="Logo"></div>
    <form action="pro.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>