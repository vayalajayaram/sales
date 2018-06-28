<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
class Leads extends CIUIS_Controller {

	function __construct() {
		parent::__construct();
		$path = $this->uri->segment( 1 );
		if ( !$this->Privileges_Model->has_privilege( $path ) ) {
			$this->session->set_flashdata( 'ntf3', '' . lang( 'you_dont_have_permission' ) );
			redirect( 'panel/' );
			die;
		}
	}

	function kanban() {
		$data[ 'title' ] = lang( 'leads' );
		$data[ 'tlh' ] = $this->db->count_all( 'leads' );
		$data[ 'tbs' ] = $this->db->count_all( 'notifications', array( 'markread' => ( '0' ) ) );
		$data[ 'tcl' ] = $this->Report_Model->tcl();
		$data[ 'tll' ] = $this->Report_Model->tll();
		$data[ 'tjl' ] = $this->Report_Model->tjl();
		$data[ 'settings' ] = $this->Settings_Model->get_settings_ciuis();
		if ( !if_admin ) {
			$data[ 'leads' ] = $this->Leads_Model->get_all_leads_for_admin();
		} else {
			$data[ 'leads' ] = $this->Leads_Model->get_all_leads();
		};
		$data[ 'leadssources' ] = $this->Leads_Model->get_leads_sources();
		$data[ 'leadsstatuses' ] = $this->Leads_Model->get_leads_status();
		$data[ 'countries' ] = $this->db->order_by( "id", "asc" )->get( 'countries' )->result_array();
		$this->load->view( 'leads/kanban', $data );
	}

	function index() {
		$data[ 'title' ] = lang( 'leads' );
		$data[ 'tlh' ] = $this->db->count_all( 'leads' );
		$data[ 'tbs' ] = $this->db->count_all( 'notifications', array( 'markread' => ( '0' ) ) );
		$data[ 'tcl' ] = $this->Report_Model->tcl();
		$data[ 'tll' ] = $this->Report_Model->tll();
		$data[ 'tjl' ] = $this->Report_Model->tjl();
		$data[ 'settings' ] = $this->Settings_Model->get_settings_ciuis();
		if ( !if_admin ) {
			$data[ 'leads' ] = $this->Leads_Model->get_all_leads_for_admin();
		} else {
			$data[ 'leads' ] = $this->Leads_Model->get_all_leads();
		};
		$data[ 'leadssources' ] = $this->Leads_Model->get_leads_sources();
		$data[ 'leadsstatuses' ] = $this->Leads_Model->get_leads_status();
		$data[ 'countries' ] = $this->db->order_by( "id", "asc" )->get( 'countries' )->result_array();
		$this->load->view( 'leads/index', $data );
	}

	function create() {
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'created' => date( 'Y-m-d H:i:s' ),
				'type' => $this->input->post( 'type' ),
				'name' => $this->input->post( 'name' ),
				'title' => $this->input->post( 'title' ),
				'company' => $this->input->post( 'company' ),
				'description' => $this->input->post( 'description' ),
				'country_id' => $this->input->post( 'country_id' ),
				'zip' => $this->input->post( 'zip' ),
				'city' => $this->input->post( 'city' ),
				'state' => $this->input->post( 'state' ),
				'address' => $this->input->post( 'address' ),
				'email' => $this->input->post( 'email' ),
				'website' => $this->input->post( 'website' ),
				'phone' => $this->input->post( 'phone' ),
				'assigned_id' => $this->input->post( 'assigned' ),
				'source' => $this->input->post( 'source' ),
				'public' => $this->input->post( 'public' ),
				'dateassigned' => date( 'Y-m-d H:i:s' ),
				'staff_id' => $this->session->userdata( 'usr_id' ),
				'status' => $this->input->post( 'status' ),
			);
			$lead_id = $this->Leads_Model->add_lead( $params );
			echo $lead_id;
		}
	}

	function update( $id ) {
		$data[ 'lead' ] = $this->Leads_Model->get_lead( $id );
		if ( isset( $data[ 'lead' ][ 'id' ] ) ) {
			if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				$params = array(
					'created' => date( 'Y-m-d H:i:s' ),
					'type' => $this->input->post( 'type' ),
					'name' => $this->input->post( 'name' ),
					'title' => $this->input->post( 'title' ),
					'company' => $this->input->post( 'company' ),
					'description' => $this->input->post( 'description' ),
					'country_id' => $this->input->post( 'country_id' ),
					'zip' => $this->input->post( 'zip' ),
					'city' => $this->input->post( 'city' ),
					'state' => $this->input->post( 'state' ),
					'address' => $this->input->post( 'address' ),
					'email' => $this->input->post( 'email' ),
					'website' => $this->input->post( 'website' ),
					'phone' => $this->input->post( 'phone' ),
					'assigned_id' => $this->input->post( 'assigned_id' ),
					'junk' => $this->input->post( 'junk' ),
					'lost' => $this->input->post( 'lost' ),
					'source' => $this->input->post( 'source' ),
					'public' => $this->input->post( 'public' ),
					'dateassigned' => date( 'Y-m-d H:i:s' ),
					'staff_id' => $this->session->userdata( 'usr_id' ),
					'status' => $this->input->post( 'status' ),
				);
				$this->Leads_Model->update_lead( $id, $params );
				echo lang( 'updated' );
			} else {
				redirect( 'leads/index' );
			}
		} else
			show_error( 'The expensecategory you are trying to edit does not exist.' );
	}

	function Statusupdate( $id ) {
		$data[ 'lead' ] = $this->Leads_Model->get_lead( $id );
		if ( isset( $data[ 'lead' ][ 'id' ] ) ) {
			if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				$params = array(
					'created' => date( 'Y-m-d H:i:s' ),
					'public' => $this->input->post( 'public' ),
					'dateassigned' => date( 'Y-m-d H:i:s' ),
					'staff_id' => $this->session->userdata( 'usr_id' ),
					'status' => $this->input->post( 'status' ),
					'change' => 1,
				);
				$this->Leads_Model->update_lead( $id, $params );
				echo lang( 'updated' );
			} else {
				redirect( 'leads/index' );
			}
		} else
			show_error( 'The expensecategory you are trying to edit does not exist.' );
	}


	function lead( $id ) {
		$lead = $this->Leads_Model->get_lead( $id );
		$data[ 'tcl' ] = $this->Report_Model->tcl();
		$data[ 'tll' ] = $this->Report_Model->tll();
		$data[ 'tjl' ] = $this->Report_Model->tjl();
		$data[ 'title' ] = $lead[ 'leadname' ];
		$data[ 'settings' ] = $this->Settings_Model->get_settings_ciuis();
		if ( !if_admin ) {
			$data[ 'leads_table' ] = $this->Leads_Model->get_all_leads_for_admin();
		} else { 
			$data[ 'leads_table' ] = $this->Leads_Model->get_all_leads();
		};
		$data[ 'leadssources' ] = $this->Leads_Model->get_leads_sources();
		$data[ 'leadsstatuses' ] = $this->Leads_Model->get_leads_status();
		$data[ 'all_staff' ] = $this->Staff_Model->get_all_staff();
		$data[ 'countries' ] = $this->db->order_by( "id", "asc" )->get( 'countries' )->result_array();
		$data[ 'proposals' ] = $this->db->get_where( 'proposals', array( 'relation' => $id, 'relation_type' => 'lead' ) )->result_array();
		$data[ 'notes' ] = $this->db->select( '*,staff.staffname as notestaff,notes.id as id ' )->join( 'staff', 'notes.addedfrom = staff.id', 'left' )->get_where( 'notes', array( 'relation' => $lead[ 'id' ], 'relation_type' => 'lead' ) )->result_array();
		$data[ 'reminders' ] = $this->db->select( '*,staff.staffname as reminderstaff,staff.staffavatar as staffpicture,reminders.id as id ' )->join( 'staff', 'reminders.staff_id = staff.id', 'left' )->get_where( 'reminders', array( 'relation' => $lead[ 'id' ], 'relation_type' => 'lead' ) )->result_array();
		$data[ 'lead' ] = $this->Leads_Model->get_lead( $id );
		$this->load->view( 'leads/lead', $data );
	}

	function convert( $id ) {
		$lead = $this->Leads_Model->get_lead( $id );
		$settings = $this->Settings_Model->get_settings_ciuis();
		if ( $lead[ 'dateconverted' ] != null ) {
			echo 'false';
		} else {
			$params = array(
				'staff_id' => $lead[ 'staff_id' ],
				'company' => $lead[ 'company' ],
				'clientname' => $lead[ 'leadname' ],
				'type' => $lead[ 'type' ],
				'namesurname' => $lead[ 'company' ],
				'created' => date( 'Y-m-d H:i:s' ),
				'address' => $lead[ 'address' ],
				'zipcode' => $lead[ 'zip' ],
				'country_id' => $lead[ 'country_id' ],
				'state' => $lead[ 'state' ],
				'city' => $lead[ 'city' ],
				'phone' => $lead[ 'phone' ],
				'email' => $lead[ 'leadmail' ],
				'web' => $lead[ 'website' ],
			);
			$this->db->insert( 'customers', $params );
			$customer = $this->db->insert_id();
			$this->db->insert( 'logs', array(
				'date' => date( 'Y-m-d H:i:s' ),
				'detail' => ( '' ),
				'detail' => ( '' . $message = sprintf( lang( 'leadconvert' ), $this->session->staffname, $lead[ 'company' ] ) . '' ),
				'staff_id' => $this->session->usr_id,
				'customer_id' => $customer,
			) );
			$response = $this->db->where( 'id', $id )->update( 'leads', array( 'status' => 0, 'dateconverted' => date( 'Y-m-d H:i:s' ) ) );
			$response = $this->db->where( 'relation', $id, 'relation_type', 'lead' )->update( 'proposals', array( 'relation' => $customer, 'relation_type' => 'customer' ) );
			echo $customer;
		}
	}

	function appconvert( $id ) {
			$response = $this->db->where( 'id', $id )->update( 'leads', array( 'status' =>4 ) );
			redirect( 'prospect/index' );
		
	}

	function notinterest( $id ) {
			$response = $this->db->where( 'id', $id )->update( 'leads', array( 'status' =>2,'change' =>0 ) );
			redirect( 'prospect/index' );
		
	}

	function add_status() {
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'name' => $this->input->post( 'name' ),
			);
			$status = $this->Leads_Model->add_status( $params );
			echo $status;
		} else {
			redirect( 'leads/index' );
		}
	}

	function add_remarks() {
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'remark_desc' => $this->input->post( 'name' ),
				'lead_id' => $this->input->post( 'lead_id' ),
			);
			//print_r($params);exit();
			$status = $this->Leads_Model->add_remarks( $params );
			echo $status;
		} else {
			redirect( 'leads/index' );
		}
	}

	function addupdate_status() {
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'status' => $this->input->post( 'name' ),
				'lead_id' => $this->input->post( 'lead_id' ),
			);
			//print_r($params);exit();
			$status = $this->Leads_Model->add_update_status( $params );
			echo $status;
		} else {
			redirect( 'leads/index' );
		}
	}

	function update_status( $id ) {
		$data[ 'statuses' ] = $this->Leads_Model->get_status( $id );
		if ( isset( $data[ 'statuses' ][ 'id' ] ) ) {
			if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				$params = array(
					'name' => $this->input->post( 'name' ),
					'color' => $this->input->post( 'color' ),
				);
				$this->Leads_Model->update_status( $id, $params );
			}
		}
	}

	function remove_status( $id ) {
		$lead = $this->Leads_Model->get_status( $id );
		// check if the expenses exists before trying to delete it
		if ( isset( $lead[ 'id' ] ) ) {
			$this->Leads_Model->delete_status( $id );
		}
	}

	function add_source() {
		if ( isset( $_POST ) && count( $_POST ) > 0 ) {
			$params = array(
				'name' => $this->input->post( 'name' ),
			);
			$source = $this->Leads_Model->add_source( $params );
			echo $source;
		} else {
			redirect( 'leads/index' );
		}
	}

	function update_source( $id ) {
		$data[ 'sources' ] = $this->Leads_Model->get_source( $id );
		if ( isset( $data[ 'sources' ][ 'id' ] ) ) {
			if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				$params = array(
					'name' => $this->input->post( 'name' ),
				);
				$this->Leads_Model->update_source( $id, $params );
			}
		}
	}

	function remove_source( $id ) {
		$lead = $this->Leads_Model->get_source( $id );
		// check if the expenses exists before trying to delete it
		if ( isset( $lead[ 'id' ] ) ) {
			$this->Leads_Model->delete_source( $id );
		}
	}

	function move_lead() {
		$this->Leads_Model->move_lead();
	}

	function mark_as_lead( $id ) {
		if ( isset( $id ) ) {
			if ( isset( $_POST ) && count( $_POST ) > 0 ) {
				if ( $this->input->post( 'value' ) == 1 ) {
					$response = $this->db->where( 'id', $id )->update( 'leads', array( 'lost' => 1 ) );
				}
				if ( $this->input->post( 'value' ) == 2 ) {
					$response = $this->db->where( 'id', $id )->update( 'leads', array( 'lost' => 0 ) );
				}
				if ( $this->input->post( 'value' ) == 3 ) {
					$response = $this->db->where( 'id', $id )->update( 'leads', array( 'junk' => 1 ) );
				}
				if ( $this->input->post( 'value' ) == 4 ) {
					$response = $this->db->where( 'id', $id )->update( 'leads', array( 'junk' => 0 ) );
				}
				if ( $this->input->post( 'value' ) == 5 ) {
					$response = $this->db->where( 'id', $id )->update( 'leads', array( 'notmet' => 1 ) );
				}
				if ( $this->input->post( 'value' ) == 6 ) {
					$response = $this->db->where( 'id', $id )->update( 'leads', array( 'notmet' => 0 ) );
				}
				echo lang( 'updated' );
			} else {
				redirect( 'leads/index' );
			}
		} else
			show_error( 'The expensecategory you are trying to edit does not exist.' );
	}

	function
	import () {
		$this->load->library( 'csvimport' );
		$data[ 'leads' ] = $this->Leads_Model->get_leads_for_import();
		$data[ 'error' ] = ''; //initialize image upload error array to empty
		$config[ 'upload_path' ] = './uploads/imports/';
		$config[ 'allowed_types' ] = 'csv';
		$config[ 'max_size' ] = '1000';
		$this->load->library( 'upload', $config );
		// If upload failed, display error
		if ( !$this->upload->do_upload() ) {
			$data[ 'error' ] = $this->upload->display_errors();
			$this->session->set_flashdata( 'ntf1', 'Csv Data not Imported' );
			redirect( 'leads/index' );
		} else {
			$file_data = $this->upload->data();
			$file_path = './uploads/imports/' . $file_data[ 'file_name' ];
			if ( $this->csvimport->get_array( $file_path ) ) {
				$csv_array = $this->csvimport->get_array( $file_path );
				foreach ( $csv_array as $row ) {
					//print_r($row['name']);exit();
		if($row[ 'name' ]){
			//echo "exits";exit();

					$insert_data = array(
						'created' => date( 'Y-m-d H:i:s' ),
						//'type' => $row[ 'type' ],
						'type' => '0',
						'name' => $row[ 'name' ],
						'title' => $row[ 'title' ],
						'company' => $row[ 'company' ],
						'description' => $row[ 'description' ],
						'zip' => $row[ 'zip' ],
						'city' => $row[ 'city' ],
						'state' => $row[ 'state' ],
						'address' => $row[ 'address' ],
						'email' => $row[ 'email' ],
						'website' => $row[ 'website' ],
						'phone' => $row[ 'phone' ],
						'assigned_id' => $this->input->post( 'importassigned' ),
						'staff_id' => $this->session->userdata( 'usr_id' ),
						'source' => $this->input->post( 'importsource' ),
						'dateassigned' => date( 'Y-m-d H:i:s' ),
						'status' => $this->input->post( 'importstatus' ),
					);
					//print_r($this->input->post( 'importassigned' ));exit();
					$this->Leads_Model->insert_csv( $insert_data );
		/* $staff = $this->Staff_Model->get_staff( $this->input->post( 'importassigned' ) );
		if ( isset( $staff[ 'id' ] ) ) {
				// SEND EMAIL SETTINGS
				$setconfig = $this->Settings_Model->get_settings_ciuis();
				$this->load->library( 'email' );
				$config = array();
				$config[ 'protocol' ] = 'smtp';
				$config[ 'smtp_host' ] = $setconfig[ 'smtphost' ];
				$config[ 'smtp_user' ] = $setconfig[ 'smtpusername' ];
				$config[ 'smtp_pass' ] = $setconfig[ 'smtppassoword' ];
				$config[ 'smtp_port' ] = $setconfig[ 'smtpport' ];
				$sender = $setconfig[ 'sendermail' ];
				$data = array(
					'name' => $this->session->userdata( 'staffname' ),
					'email' => $staff[ 'email' ]
				);
				//print_r($staff[ 'email' ]);exit();
				$body = $this->load->view( 'email/importemail.php', $data, TRUE );
				$this->email->initialize( $config );
				$this->email->set_newline( "\r\n" );
				$this->email->set_mailtype( "html" );
				$this->email->from( $sender ); // change it to yours
				$this->email->to( $staff[ 'email' ] ); // change it to yours
				$this->email->subject( 'Leads are Imported' );
				$this->email->message( $body );
				$this->email->send();
				}*/
					}else{
			$this->session->set_flashdata( 'ntf3', 'Csv Data Imported Failed' );
				redirect( 'leads/index' );

			
		}
				
			}
							 $staff = $this->Staff_Model->get_staff( $this->input->post( 'importassigned' ) );
		if ( isset( $staff[ 'id' ] ) ) {
			//print_r($staff[ 'id' ]);exit();
				// SEND EMAIL SETTINGS
				$setconfig = $this->Settings_Model->get_settings_ciuis();
				$this->load->library( 'email' );
				$config = array();
				$config[ 'protocol' ] = 'smtp';
				$config[ 'smtp_host' ] = $setconfig[ 'smtphost' ];
				$config[ 'smtp_user' ] = $setconfig[ 'smtpusername' ];
				$config[ 'smtp_pass' ] = $setconfig[ 'smtppassoword' ];
				$config[ 'smtp_port' ] = $setconfig[ 'smtpport' ];
				$sender = $setconfig[ 'sendermail' ];
				$data = array(
					'name' => $this->session->userdata( 'staffname' ),
					'email' => $staff[ 'email' ]
				);
				//print_r($staff[ 'email' ]);exit();
				$body = $this->load->view( 'email/importemail.php', $data, TRUE );
				$this->email->initialize( $config );
				$this->email->set_newline( "\r\n" );
				$this->email->set_mailtype( "html" );
				$this->email->from( $sender ); // change it to yours
				$this->email->to( $staff[ 'email' ] ); // change it to yours
				$this->email->subject( 'Leads are Imported' );
				$this->email->message( $body );
				$this->email->send();
				}
				$this->session->set_flashdata( 'ntf3', 'Csv Data Imported Succesfully' );
				redirect( 'leads/index' );
				//echo "<pre>"; print_r($insert_data);
			} else
				redirect( 'leads/index' );
			$this->session->set_flashdata( 'ntf3', 'Error' );
		}
	}

	function remove_converted( $id ) {
		$response = $this->db->delete( 'leads', array( 'status' => $id ) );
	}

	function make_converted_status( $id ) {
		$response = $this->db->where( 'settingname', 'ciuis' )->update( 'settings', array( 'converted_lead_status_id' => $id ) );
	}

	function remove( $id ) {
		$lead = $this->Leads_Model->get_lead( $id );
		// check if the expenses exists before trying to delete it
		if ( isset( $lead[ 'id' ] ) ) {
			$this->Leads_Model->delete_lead( $id );
			redirect( 'leads/index' );
		} else
			show_error( 'The expenses you are trying to delete does not exist.' );
	}
}