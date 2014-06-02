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
			$data['title'] = "Home"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/home', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'createuser')
		{
			$data['title'] = "Account Creation" ; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/createuser', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'createuser_blank')
		{
			$data['title'] = "Account Creation" ; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/createuser_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'createuser_error')
		{
			$data['title'] = "Account Creation" ; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/createuser_error', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'nologin')
		{
			$data['title'] = "Login Failed"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/nologin', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'home_blank')
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/home_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'login' ) 
		{
			$data['title'] = "User Home" ; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/login', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'css_blank' ) 
		{
			$data['title'] = "User Home" ; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/css_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'insert')
		{
			$data['title'] = "Add a Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/insert', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'insertIngredients')
		{
			$data['title'] = "Add a Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/insertIngredients', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'insert_blank')
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/insert_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'insertComplete')
		{
			$data['title'] = "Add a Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/insertComplete', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'search')
		{
			$data['title'] = "Search for a Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/search', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'view')
		{
			$data['title'] = "View Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/view', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'randomDrink')
		{
			$data['title'] = "View Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/randomDrink', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'searchrecipe_blank')
		{
			$data['title'] = "View Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/searchrecipe_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'searchingredient_blank')
		{
			$data['title'] = "View Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/searchingredient_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'searchuser_blank')
		{
			$data['title'] = "View Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/searchuser_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'update')
		{
			$data['title'] = "Update Recipe"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/update', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'update_blank')
		{
			$data['title'] = "View Recipe"; // Capitalize the first letter
			
			$this->load->view('pages/update_blank', $data) ;
			
		}
		else if( $page == 'delete')
		{
			$data['title'] = "Delete Recipe"; // Capitalize the first letter
			
			$this->load->view('pages/delete', $data) ;
			redirect('login') ; 
			
		}
		else if( $page == 'logout_blank') 
		{
			$data['title'] = "Logout"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/logout_blank', $data) ;
			$this->load->view('templates/footer', $data) ;
		}
		else if( $page == 'newrecipes') 
		{
			$data['title'] = "Newest Recipes"; // Capitalize the first letter
			$this->load->view('templates/header', $data) ;		
			$this->load->view('pages/newrecipes', $data) ;
			$this->load->view('templates/footer', $data) ;
		}

	}
}