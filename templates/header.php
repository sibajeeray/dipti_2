<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracksheet</title>
    <link rel="stylesheet" href="/php/dipti_2/style.css">
</head>
<body>
    <?php include __DIR__.'/../variables.php'; ?>
<section class="menu container">
    <div class="main">
        <nav>
            <ul class="list">
                <li><a href="<?php echo $home_url; ?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="<?php echo $home_url.'/admin'; ?>">Admin</a></li>
            </ul>
        </nav>
    </div>
</section>
    
