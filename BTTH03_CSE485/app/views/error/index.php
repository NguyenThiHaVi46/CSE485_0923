<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        html {
            color-scheme: light dark;
        }

        body {
            width: 35em;
            margin: auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }

        .back {
            padding: 10px;
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            text-decoration: none;
        }

        .back:hover {
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <h1>An error occurred.</h1>
    <p>Sorry, the page you are looking for is currently unavailable.<br />
        Please try again later.</p>
    <p>If you are the system administrator of this resource then you should check
        the error log for details.</p>
    <p><em>Faithfully yours, Havi0406.</em></p>
    <a class="back" href="<?=DOMAIN."/public/index.php"?>">Return</a>
</body>

</html>