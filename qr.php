<?php
require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$writer = new PngWriter();

// The URL or text to encode in the QR
$qrText = 'http://localhost/y22cm171/qr_certificate/certificate.html';

$qr = QrCode::create($qrText)
    ->setSize(300)
    ->setMargin(10);

$result = $writer->write($qr);

// Save to file
$outputPath = __DIR__ . '/images/certificate_qr.png';
$result->saveToFile($outputPath);

echo "✅ QR code generated successfully: <a href='images/certificate_qr.png'>View QR Code</a>";
?>
