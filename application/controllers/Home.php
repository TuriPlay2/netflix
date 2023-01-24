<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{


    public function index(){

        $this->load->model('produtos_model');

        $produtos = $this->produtos_model->list();

        $data = [
            'produtos'=>$produtos
        ];

        $this->load->view('home',$data);
    }

	public function insert(){
		if(!empty($this->input->post())){
			$nome = $this->input->post("nome");
			$quantidade = $this->input->post("quantidade");
			$dados = [
				"nome" => $nome,
				"quantidade" => $quantidade,
			];
			$this->load->model("produtos_model");
			$this->produtos_model->insert($dados);
			redirect("");
		}
		$this->load->view('form_produtos');
		
	}

	public function update(){
		if(!empty($this->input->post())){
			$nome = $this->input->post("nome");
			$addres = $this->input->post("quantidade");
			$id = $this->input->get("id");
			$dados = [
				"nome" => $nome,
				"addres" => $quantidade,
			];
			$this->load->model("produtos_model");
			$this->produtos_model->update($dados, $id);
			redirect("");
		}
		$this->load->view('produtos_update');
		
	}
	public function delete(){
			$id = $this->input->get("id");
			$this->load->model("produtos_model");
			$this->produtos_model->delete ($id);
			redirect("");
			
			$this->load->view('delete_produtos');
		}
}