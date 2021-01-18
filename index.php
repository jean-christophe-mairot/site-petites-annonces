<?php
<<<<<<< HEAD
// require_once __DIR__ . '/vendor/autoload.php';

require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
=======
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');

// Output a PDF file directly to the browser
>>>>>>> 060437fa0df1774eb042684a35e6e7bdf1bfbc57
$mpdf->Output();