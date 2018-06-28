<?php
class Excel_export_model extends CI_Model
{
 function fetch_data()
 {
  $this->db->order_by("id", "DESC");
  $query = $this->db->get("customers");
  return $query->result();
 }

 function fetch_leaddata()
 {
	$this->db->select( '*,leadsstatus.name as statusname,countries.shortname as leadcountry,staff.staffname as leadassigned,staff.staffavatar as assignedavatar,leadssources.name as sourcename,leads.name as leadname,leads.email as leadmail,leads.city as leadcity,leads.title as title,leads.phone as leadphone,leads.id as id' );
		$this->db->join( 'leadsstatus', 'leads.status = leadsstatus.id', 'left' );
		$this->db->join( 'countries', 'leads.country_id = countries.id', 'left' );
		$this->db->join( 'leadssources', 'leads.source = leadssources.id', 'left' );
		$this->db->join( 'staff', 'leads.assigned_id = staff.id', 'left' );
		//$this->db->where( 'leads.source = 2' );
		$this->db->order_by( 'leads.id', 'desc' );
		return $this->db->get( 'leads' )->result();
}

 function fetch_leadsource($id)
 {
	$this->db->select( '*,leadsstatus.name as statusname,countries.shortname as leadcountry,staff.staffname as leadassigned,staff.staffavatar as assignedavatar,leadssources.name as sourcename,leads.name as leadname,leads.email as leadmail,leads.city as leadcity,leads.title as title,leads.phone as leadphone,leads.id as id' );
		$this->db->join( 'leadsstatus', 'leads.status = leadsstatus.id', 'left' );
		$this->db->join( 'countries', 'leads.country_id = countries.id', 'left' );
		$this->db->join( 'leadssources', 'leads.source = leadssources.id', 'left' );
		$this->db->join( 'staff', 'leads.assigned_id = staff.id', 'left' );
		$this->db->where( 'leads.source' , $id );
		$this->db->order_by( 'leads.id', 'desc' );
		return $this->db->get( 'leads' )->result();
}

 function fetch_leadstatus($id)
 {
	$this->db->select( '*,leadsstatus.name as statusname,countries.shortname as leadcountry,staff.staffname as leadassigned,staff.staffavatar as assignedavatar,leadssources.name as sourcename,leads.name as leadname,leads.email as leadmail,leads.city as leadcity,leads.title as title,leads.phone as leadphone,leads.id as id' );
		$this->db->join( 'leadsstatus', 'leads.status = leadsstatus.id', 'left' );
		$this->db->join( 'countries', 'leads.country_id = countries.id', 'left' );
		$this->db->join( 'leadssources', 'leads.source = leadssources.id', 'left' );
		$this->db->join( 'staff', 'leads.assigned_id = staff.id', 'left' );
		$this->db->where( 'leads.status' , $id );
		$this->db->order_by( 'leads.id', 'desc' );
		return $this->db->get( 'leads' )->result();
}
 
}