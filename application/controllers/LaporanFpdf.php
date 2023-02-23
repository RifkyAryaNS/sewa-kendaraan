<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporanfpdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
    function index()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'Laporan Sewa Kendaraan Di RentCars', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Nama Penyewa', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Nama Kendaraan', 1, 0, 'C');
        $pdf->Cell(35, 6, 'No Polisi', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Harga Sewa', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Tanggal Sewa', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Lama Sewa', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Total Harga', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pesan = $this->db->get('pesanan')->result();
        $no = 0;
        foreach ($pesan as $data) {
            //$subtotal = $data['harga'] * $data['lama_sewa'];
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(35, 6, $data->nama, 1, 0);
            $pdf->Cell(35, 6, $data->nama_kendaraan, 1, 0);
            $pdf->Cell(35, 6, $data->no_pol, 1, 0);
            $pdf->Cell(35, 6, $data->harga, 1, 0);
            $pdf->Cell(35, 6, date('d F Y', $data->date_created), 1, 0);
            $pdf->Cell(35, 6, $data->lama_sewa, 1, 0);
            $pdf->Cell(35, 6, "Rp." . number_format($data->harga * $data->lama_sewa, 0, '.', ','), 1, 1);
        }
        $pdf->Output();
    }
}
