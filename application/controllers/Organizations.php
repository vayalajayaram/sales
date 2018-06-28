<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
class Organizations extends CIUIS_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Org_Model');
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url')); 
		$path = $this->uri->segment( 1 );
		if ( $this->Privileges_Model->has_privilege( $path ) ) {
			$this->session->set_flashdata( 'ntf3', '' . lang( 'you_dont_have_permission' ) );
			redirect( 'panel/' );
			die;
		}
	}


	function index() {
		$data[ 'title' ] = lang( 'Org' );
		$this->load->database(); 
		$this->load->model('Org_Model');
		$config = array();
		$config["base_url"] = base_url() . "index.php/Organizations/index";
		$total_row = $this->db->select('count(org_id) as total')->from('organizations')->get()->result();
		$config["total_rows"] = $total_row[0]->total;
		$config["per_page"] = 5;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		$offset = ($page == 0 ? 0 : ($page) );
		$data['h']=$this->Org_Model->get_all_orgs($config["per_page"], $page); 
		//$data['c']=$this->Org_Model->get_country();
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		$data['start'] = ($page == 0 ? 1 : (($page)));
		$data['c']=$this->Org_Model->get_country();
		$data['p']=$this->Org_Model->get_plans();
		$this->load->view( 'organizations/index.php',$data);
		$this->load->view( 'inc/footer');
	}

	public function create() {
		   $this->load->database(); 
		   $this->load->model('Org_Model');
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'created' => date( 'Y-m-d H:i:s' ),
				'org_name' => $this->input->post( 'org_name' ),
				'location' => $this->input->post( 'location' ),
				'email' => $this->input->post( 'email' ),
				'website_url' => $this->input->post( 'website_url' ),
				'telephone' => $this->input->post( 'telephone' ),
				'mobile' => $this->input->post( 'mobile' ),
				'plan_id' => $this->input->post( 'plan_id' ),
				'status' => $this->input->post( 'status' ),
				'logo' => 'logo.jpg',
				'password' => md5($this->input->post( 'password' )),
			);
			//print_r($params);exit();
			$params = $this->Org_Model->add_organizations( $params );
			 echo "<script>alert('Successfully Organizations Added');</script>"; 
         redirect(base_url().'index.php/organizations/index','refresh');
		}
	}

	function editorg( $id) {
		$this->load->database(); 
		$this->load->model('Org_Model');
		$data[ 'title' ] = lang( 'organizationdetail');
		$this->load->view( 'inc/header', $data );
		$data['editorg']=$this->Org_Model->get_org($id);
		$data['p']=$this->Org_Model->get_plans();
		//print_r($data);exit();
		$this->load->view( 'organizations/orgview', $data );
		$this->load->view( 'inc/footer', $data );

	}

	function updateorg( $id ) {
		    $this->load->database(); 
		    $this->load->model('Org_Model');
	        $data1 = array(
                'created' => date( 'Y-m-d H:i:s' ),
				'org_name' => $this->input->post( 'org_name' ),
				'location' => $this->input->post( 'location' ),
				'email' => $this->input->post( 'email' ),
				'website_url' => $this->input->post( 'website_url' ),
				'telephone' => $this->input->post( 'telephone' ),
				'mobile' => $this->input->post( 'mobile' ),
				'plan_id' => $this->input->post( 'plan_id' ),
				'status' => $this->input->post( 'status' ),
            );
           // print_r($data1);exit();
              if($this->Org_Model->update_org($id,$data1)) {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Organization Updated Successfully! </div>');
                redirect(base_url('index.php/organizations/editorg/'.$id));
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-warning text-center"> Failed to Update Organization! </div>');
                redirect(base_url('index.php/organizations/editorg/'.$id));
            }
	}

    function add($id){
    	  $this->load->database(); 
		    $this->load->model('Org_Model');
        if($this->input->post('userSubmit')){
            //print_r($_FILES['picture']);exit();
            //Check whether user upload picture
            if(isset($_FILES['picture']['name']) && !empty($_FILES['picture']['name'])){
                $config['upload_path'] = './uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            //print_r($picture);exit();
            //Prepare array of user data
            $userData = array(
                'logo' => $picture
            );
            
            //Pass user data to model
            $insertUserData = $this->Org_Model->update_logo($id,$userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'Organization logo have been updated successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        }
        //Form for adding user data
        redirect(base_url('index.php/organizations/editorg/'.$id));
    }

    	function changepassword( $id ) {
		    $this->load->database(); 
		    $this->load->model('Org_Model');
		     if($this->input->post('userSubmit')){
	        $data1 = array(
				'password' => md5($this->input->post( 'password' )),
            );
            //print_r($data1);exit();
              if($this->Org_Model->update_password($id,$data1)) {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Organization password change Successfully! </div>');
                redirect(base_url('index.php/organizations/editorg/'.$id));
            }else{
                $this->session->set_flashdata('msg','<div class="alert alert-warning text-center"> Failed to Update changed password! </div>');
                redirect(base_url('index.php/organizations/editorg/'.$id));
            }
        }
	}

    public function deleteorg($org_id){
    	$this->load->database(); 
		$this->load->model('Org_Model');
		$result= $this->Org_Model->delete_org($org_id);
        redirect(base_url().'index.php/organizations/','refresh');
			}

	public function deleteplan($plan_id){
    	$this->load->database(); 
		$this->load->model('Org_Model');
		$result= $this->Org_Model->delete_plan($plan_id);
        redirect(base_url().'index.php/organizations/plans','refresh');
			}

	public function plans() {
        $data[ 'title' ] = lang( 'Org' );
		$this->load->database(); 
		$this->load->model('Org_Model');
		$this->load->view( 'inc/header',$data);
		$data['p']=$this->Org_Model->get_plans(); 
		$this->load->view( 'organizations/plan.php',$data);
		$this->load->view( 'inc/footer');
	}

	public function addplan() {
		   $this->load->database(); 
		   $this->load->model('Org_Model');
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'created' => date( 'Y-m-d H:i:s' ),
				'plan_type' => $this->input->post( 'plan_type' ),
				'plan_duration' => $this->input->post( 'plan_duration' ),
				'plan_services' => $this->input->post( 'plan_services' ),
				'plan_price' => $this->input->post( 'plan_price' ),
			);
			//print_r($params);exit();
			$params = $this->Org_Model->add_plans( $params );
			 echo "<script>alert('Successfully Plans Added');</script>"; 
         redirect(base_url().'index.php/organizations/plans','refresh');
		}
	}

	
}