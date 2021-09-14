<?php
class Transaksi extends ci_controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role_id') != '2')
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
		}
        $this->load->model(array('Model_barang', 'M_Mmc', 'Model_transaksi'));
    }

    function index()
    {
        if (isset($_POST['submit'])) {
            $nama_mn    =  $this->input->post('menu');
            $qty            =  $this->input->post('qty');
            $idmenu       = $this->db->get_where('menu', array('nama_mn' => $nama_mn))->row_array();
            $data           = array(
                'id_mn' => $idmenu['id_mn'],
                'qty' => $qty,
                'harga_mn' => $idmenu['harga_mn'],
                'status' => '0'
            );
            $this->Model_transaksi->simpan_barang($data);

            redirect('admin1/transaksi');
        } else {
            $data['barang'] =  $this->Model_barang->tampil_data();
            $data['detail'] = $this->Model_transaksi->tampilkan_detail_transaksi()->result();
            $this->load->view('templates_admin1/header');
            $this->load->view('templates_admin1/sidebar');
            $this->load->view('admin1/transaksi/form_transaksi', $data);
            $this->load->view('templates_admin1/footer');
        }
    }


    function hapusitem()
    {
        $id =  $this->uri->segment(4);
        $this->Model_transaksi->hapusitem($id);
        redirect('admin1/transaksi');
    }

    public function ambil()
    {
        $data = array('get_category' => $this->model_barang->get_option());
        $this->load->view('templates_admin1/header');
        $this->load->view('templates_admin1/sidebar');
        $this->load->view('admin1/transaksi/form_transaksi', $data);
        $this->load->view('templates_admin1/footer');
    }


    function selesai_belanja()
    {
        $tanggal = date('Y-m-d');
        $data = array('tanggal_transaksi' => $tanggal);
        $this->Model_transaksi->selesai_belanja($data);
        redirect('admin1/transaksi');
    }


    function laporan()
    {
        $tanggal1 = $this->input->get('tanggal1', TRUE);
        $tanggal2 = $this->input->get('tanggal2', TRUE);
        // die($tanggal1."===".$tanggal2);
        if ($tanggal1 == !null) {
            $data['record'] =  $this->Model_transaksi->laporan_periode(array($tanggal1, $tanggal2));
        } else {
            // $data = 'a';
            $data['record'] =  $this->Model_transaksi->laporan_default();
        }
        $this->load->view('templates_admin1/header');
        $this->load->view('templates_admin1/sidebar');
        $this->load->view('admin1/transaksi/laporan', $data);
        $this->load->view('templates_admin1/footer');
    }


    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantransaksi.xls");
        $data['record'] =  $this->Model_transaksi->laporan_default();

        $this->load->view('admin1/transaksi/laporan_excel', $data);
    }

     function print_transaksi()
    {
        $this->load->library('Dompdf_gen');
        $data['detail'] = $this->Model_transaksi->tampilkan_detail_transaksi()->result();
        $this->load->view('admin1/transaksi/print_transaksi', $data);

        $paper_size = 'A7';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Nota Transaksi", array("Attachment" => 0));
    }
    
     function print_laporan()
    {
        $this->load->library('Dompdf_gen');
        $data['record'] =  $this->Model_transaksi->laporan_default();
        $this->load->view('admin1/transaksi/laporan_excel', $data);
        
        $paper_size = 'A4';
        $orientation = 'lanscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Transaksi", array("Attachment" => 0));
    }
    
     public function transaksi()
	{
		$data['tr'] = $this->Model_transaksi->getTransaksi()->result();

		$this->load->view('templates_admin1/header');
		$this->load->view('templates_admin1/sidebar');
		$this->load->view('admin1/transaksi/data_transaksi', $data);
		$this->load->view('templates_admin1/footer');
	}

    public function dTransaksi($id)
	{
		$data['dt'] = $this->Model_transaksi->getDetail($id)->result();

		$this->load->view('templates_admin1/header');
		$this->load->view('templates_admin1/sidebar');
		$this->load->view('admin1/transaksi/detail_transaksi', $data);
		$this->load->view('templates_admin1/footer');
	}

    function pdf()
    {
        $this->load->library('cfpdf');
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 'L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'LAPORAN TRANSAKSI');
        $pdf->SetFont('Arial', 'B', 'L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10, '', '', 1);
        $pdf->Cell(10, 7, 'No', 1, 0);
        $pdf->Cell(27, 7, 'Tanggal', 1, 0);
        $pdf->Cell(30, 7, 'Operator', 1, 0);
        $pdf->Cell(38, 7, 'Total Transaksi', 1, 1);
        // tampilkan dari database
        $pdf->SetFont('Arial', '', 'L');
        $data =  $this->Model_transaksi->laporan_default();
        $no = 1;
        $total = 0;
        foreach ($data->result() as $r) {
            $pdf->Cell(10, 7, $no, 1, 0);
            $pdf->Cell(27, 7, $r->tanggal_transaksi, 1, 0);
            $pdf->Cell(30, 7, $r->nama_lengkap, 1, 0);
            $pdf->Cell(38, 7, $r->total, 1, 1);
            $no++;
            $total = $total + $r->total;
        }
        // end
        $pdf->Cell(67, 7, 'Total', 1, 0, 'R');
        $pdf->Cell(38, 7, $total, 1, 0);
        $pdf->Output();
    }
}