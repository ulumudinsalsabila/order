<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

$id = $_GET['id'];

$ambildata = mysqli_query($conn,"SELECT * FROM transaksi where id_pesanan={$id} ");

$lastpesanan = $ambildata->fetch_assoc();

$html = '<table>
            <tr>
                <td>No.Pesanan</td>
                <td>: '.substr(str_repeat(0, 3).$lastpesanan['no_pesanan'], - 3).'</td>
            </tr>
            <tr>
                <td>Nama Pesanan</td>
                <td>: '.$lastpesanan['pesanan'].'</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>: Rp. '.number_format($lastpesanan['harga'], 2).'</td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>: '.$lastpesanan['pelanggan'].'</td>
            </tr>
            <tr>
            <tr>
                <td width="110">Tipe</td>
                <td>: '.$lastpesanan['tipe'].'</td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                <br>
                <br>
                <br>
                    Kasir Food Code
                <br>
                <br>
                <br>
                <br>
                <br>
                _________________
                </td>
            </tr>
        </table>';

$mpdfConfig = array(
    'mode' => 'utf-8', 
    'format' => [90, 100],  // format - A4, for example, default ''
    'default_font_size' => 9,     // font size - default 5
    'default_font' => '',    // default font family
    'margin_left' => 5,     // 15 margin_left
    'margin_right' => 5,        // 15 margin right
    'margin_header' => 5,     // 9 margin header
    'margin_footer' => 5,     // 9 margin footer
    'orientation' => 'P'    // L - landscape, P - portrait
);

// Define a default page size/format by array - page will be 190mm wide x 236mm height
$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$arr = array (
  'odd' => array (
    'L' => array (
      'content' => 'Food Code',
      'font-size' => 9,
      'font-style' => 'B',
      'font-family' => 'serif',
      'color'=>'#000000'
    ),
    'C' => array (
      'content' => '',
      'font-size' => 9,
      'font-style' => 'B',
      'font-family' => 'serif',
      'color'=>'#000000'
    ),
    'R' => array (
      'content' => 'Pesanan Meja - '.substr(str_repeat(0, 3).$lastpesanan['no_meja'], - 3),
      'font-size' => 9,
      'font-style' => 'B',
      'font-family' => 'serif',
      'color'=>'#000000'
    ),
    'line' => 1,
  ),
  'even' => array ()
);

$mpdf->SetHeader($arr);

$mpdf->WriteHTML($html);// Define a default Landscape page size/format by name

// Define a default page using all default values except "L" for Landscape orientation
$mpdf->Output();
  
?>