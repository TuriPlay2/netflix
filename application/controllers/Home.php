<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$this->load->library("Tmdb");
		
		$data = [
			'data' => $this->tmdb->listMoviesTopRated()
		];
		$this->load->view('home', $data);
	}
	public function lancamentos(){
		
		$this->load->library("Tmdb");
		
		$data = [
			'data' => $this->tmdb->listMoviesLatests()
		];
		$this->load->view('lancamentos', $data);
	}

	public function informationMovie(){
		$this->load->library("Tmdb");
		$id = $this->input->get("id");
		$data = [
			'data' => $this->tmdb->informationMovies($id),
			'video' => $this->tmdb->videoMovies($id)
		];
		
		$this->load->view('information_movie', $data);
	}
}