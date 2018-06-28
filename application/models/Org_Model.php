<?php
class Org_Model extends CI_Model {

	function get_org( $id ) {
		$query = $this->db->select('t1.org_id,t1.plan_id,t1.logo,t1.org_name,t1.city,t1.state,t1.country,t1.telephone,t1.mobile,t1.website_url,t1.email,t1.password,t1.location,t1.status,t1.created,t2.plan_id,t2.plan_type,t2.plan_price,t3.id,t3.shortname')
                 ->from('organizations as t1')
                 ->join('plans as t2', 't1.plan_id = t2.plan_id','left')
                 ->join('countries as t3', 't3.id = t1.country','left')
		         ->where( 't1.org_id', $id)->get();
		 return  $query;
	}

	function get_all_orgs($perpage,$page) {

$query = $this->db->select('t1.org_id,t1.plan_id,t1.logo,t1.org_name,t1.city,t1.state,t1.country,t1.telephone,t1.mobile,t1.website_url,t1.email,t1.status,t1.created,t1.location,t2.plan_id,t2.plan_type,t2.plan_price,t3.id,t3.shortname')
                 ->from('organizations as t1')
                 ->join('plans as t2', 't1.plan_id = t2.plan_id','left')
                 ->join('countries as t3', 't3.id = t1.country','left')
                 ->order_by('org_id')
                 ->limit($perpage,$page)->get();  
              return $query;
		//return $this->db->get( 'organizations' )->result_array();
	}

	public function update_org($id,$data1) {
	return $this->db->where('org_id',$id)->update('organizations',$data1);
	}

	public function update_logo($id,$userData) {
	return $this->db->where('org_id',$id)->update('organizations',$userData);
	}

	public function update_password($id,$userData) {
	return $this->db->where('org_id',$id)->update('organizations',$userData);
	}

	function get_country() {
		$query = $this->db->from('countries')->order_by('id')->get();  
              return $query;
	}
	function get_plans() {
		$query = $this->db->from('plans')->order_by('plan_id')->get();  
              return $query;
	}
	
	function delete_org( $org_id ) {
		$response = $this->db->delete( 'organizations', array( 'org_id' => $org_id ) );
	}
	function delete_plan( $plan_id ) {
		$response = $this->db->delete( 'plans', array( 'plan_id' => $plan_id ) );
	}	
	/* Add Lead Status and Sources */
	
	function add_organizations( $params ) {
		$this->db->insert( 'organizations', $params );
		return $this->db->insert_id();
	}

	function add_plans( $params ) {
		$this->db->insert( 'plans', $params );
		return $this->db->insert_id();
	}

}