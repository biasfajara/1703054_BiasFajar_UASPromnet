<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Motor_model');
        $this->load->model('Cicil_model');
        $this->load->model('Uangmuka_model');
        $this->load->model('Penjualan_model');
    }

    public function motor()
    {
        $data['motor'] = $this->Motor_model->getMotor();
        $data['judul'] = "Motor";
        $this->load->view('header', $data);
        $this->load->view('Home', $data);
        $this->load->view('footer');
    }

    public function cicil()
    {
        $data['cicil'] = $this->Cicil_model->getCicil();
        $data['judul'] = "Cicilan";
        $this->load->view('header', $data);
        $this->load->view('Cicil', $data);
        $this->load->view('footer');
    }

    public function uangmuka()
    {
        $data['uangmuka'] = $this->Uangmuka_model->getUangmuka();
        $data['judul'] = "Uang Muka";
        $this->load->view('header', $data);
        $this->load->view('Uangmuka', $data);
        $this->load->view('footer');
    }

    public function penjualan()
    {
        $data['penjualan'] = $this->Penjualan_model->getPenjualan();
        $data['judul'] = "Penjualan";
        $this->load->view('header', $data);
        $this->load->view('Penjualan', $data);
        $this->load->view('footer');
    }
}
