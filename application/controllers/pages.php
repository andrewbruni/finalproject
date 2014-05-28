<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php') )
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->helper('url');
		$this->load->database('default') ; 
		
		if( $page == 'home')
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/home', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'insert')
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/insert', $data) ;
			$this->load->view('templates/footer', $data) ;
			redirect('home') ;
		}
		else if( $page == 'delete')
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/delete', $data) ;
			$this->load->view('templates/footer', $data) ;
			redirect('home') ;
		}
		else if( $page == 'update')
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/update', $data) ;
			$this->load->view('templates/footer', $data) ;
			redirect('home') ;
		}
	}
}