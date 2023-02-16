<?php 


class PagesController {

	public function home () {

        //Recieve, delegate, return 

       // $tasks = App::get('database')->selectAll('tasks');

        return view('index');
    }
    
        
	public function about () {
        require_once('about');
    }

    
    public function contact () {
        require_once('contact');
    }
}

?>