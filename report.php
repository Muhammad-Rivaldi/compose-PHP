<?php 
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf -> load_html('menggunakan DOMpdf untuk membuat report PDF dengan DOMPDF');

    $dompdf->setPaper('A4','landscape');

    $dompdf->render();

    $dompdf->stream('hasil_report.pdf')
?>