<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$ci = new CI_Controller();
$ci = & get_instance();
$ci->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Error 404 - Restfull API</title>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/style/css/style.css" />
    </head>

    <body>

        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>404</h1>
                </div>
                <h2>Page Not Found</h2>
                <p>Halaman yang anda cari tidak ditemukan</p>
            </div>
        </div>

    </body>

</html>