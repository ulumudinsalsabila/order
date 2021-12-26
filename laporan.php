<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

$jenis = $_GET['jenis'];
$tipe = $_GET['tipe'];

$where = "";
if ($jenis === 'Harian') {
    $where = " DATE(waktu) = CURDATE()";
}else if ($jenis === 'Bulanan'){
    $where = " MONTH(waktu) = MONTH(NOW()) AND YEAR(waktu)= YEAR(NOW()) ";
}else{
    $where = " waktu >= DATE_SUB(NOW(),INTERVAL 1 WEEK)";
}
    
if ($tipe) {
    $where .= " AND tipe like '%{$tipe}%'" ;
}

$query = "SELECT * FROM transaksi where ".$where;

$ambildata = mysqli_query($conn,$query);

$listData = "";
$row = mysqli_num_rows($ambildata);
    if ($row > 0) {
        $totalharga=0;
        $no=1;
        while($tampil = mysqli_fetch_array($ambildata)){
            $totalharga += $tampil['harga'];
            $status = $tampil['status'] === '1' ? 'Diproses' : 'Selesai';

            $listData .=  "
            <tr>
                <td width='20'><center>".$no."</center></td>
                <td width='100'><center>".substr(str_repeat(0, 4).$tampil['no_pesanan'], - 4)."</center></td>
                <td width='100'><center>".substr(str_repeat(0, 3).$tampil['no_meja'], - 3)."</center></td>
                <td width='150'><center>".$tampil['pelanggan']."</center></td>
                <td><center>".$tampil['pesanan']."</center></td>
                <td><center>".$tampil['tipe']."</center></td>
                <td><center>".$tampil['waktu']."</center></td>
                <td><center>".$status."</center></td>
                <td><center>".number_format($tampil['harga'],2)."</center></td>
            </tr>";
            $no++;
        }
            $listData .=  "
            <tr>
                <td colspan=\"8\" align=\"right\">TOTAL HARGA</td>
                <td><center>".number_format($totalharga, 2)."</center></td>
            </tr>";
    }else {
        $listData .=  "<tr>
                    <td colspan=\"9\" align=\"center\"> TIdak ada data</td>
                    </tr>";
    }   

$html = '<table width="100%" border="1" collapse="0" style="border-collapse: collapse;"  cellspacing="5" cellpadding="5">
            <thead>
                <tr>
                    <H2>DATA TRANSAKSI HARI INI</H2>
                    <th><center>NO</center></th>
                    <th><center>NO PESANAN</center></th>
                    <th><center>NO MEJA</center></th>
                    <th><center> NAMA PELANGGAN</center></th>
                    <th><center>PESANAN</center></th>
                    <th><center>TIPE</center></th>
                    <th><center>WAKTU</center></th>
                    <th><center>STATUS</center></th>
                    <th><center>HARGA (Rp.)</center></th>
                </tr>
            </thead>
            <tbody>
            '.$listData.'
            </tbody>
        </table>
        <table width="80%">
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
            </tr></table>';

$mpdfConfig = array(
    'mode' => 'utf-8', 
    'format' => 'A4',  // format - A4, for example, default ''
    'default_font_size' => 9,     // font size - default 5
    'default_font' => '',    // default font family
    'margin_left' => 5,     // 15 margin_left
    'margin_right' => 5,        // 15 margin right
    'margin_header' => 5,     // 9 margin header
    'margin_footer' => 5,     // 9 margin footer
    'orientation' => 'L'    // L - landscape, P - portrait
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
      'content' => 'Laporan - '.$jenis,
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