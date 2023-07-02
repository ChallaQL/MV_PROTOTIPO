<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/style_upload.css'>
    <title>Subir Video</title>
</head>
<body>
    
<div class='upload-container'>
    <br><br>
    <div class='upload'>
        <div class='text'>
            <h4>Elige el archivo (Se recomienda formato .mp4)</h4>
        </div>
        <div class='form'>
            <form action='upload.php' method='post' enctype="multipart/form-data"> 
                <input type='file' name='file1' accept="video/*">
                <input type='text' name='vidtitle' placeholder='Escribe el Título del Video'>
                <input type='text' name='viddesc' placeholder='Escribe una Descripción'>
                <button type='submit' name='upload-btn'>Subir</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
<?php
    require 'config/config.php';
    require 'vendor/autoload.php';
    use Vimeo\Vimeo;

    $client = new Vimeo("$clientId", "$clientSecret", "$accessToken");

    $response = $client->request('/tutorial', array(), 'GET');
    print_r($response);


