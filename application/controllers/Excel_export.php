<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
  
  function index()
  {
    $this->load->model("excel_export_model");
    $data["employee_data"] = $this->excel_export_model->fetch_data();

    $this->load->view("report", $data);
  }

  function action()
  {
    $this->load->model("excel_export_model");
    $this->load->library("excel");
    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Company", "User Name", "Client Name", "Phone", "City", "State", "Staff ID");

    $column = 0;

    foreach($table_columns as $field)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
      $column++;
    }

    $employee_data = $this->excel_export_model->fetch_data();

    $excel_row = 2;

    foreach($employee_data as $row)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->company);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->namesurname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->clientname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->phone);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->city);
      $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->state);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->staff_id);
      $excel_row++;
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Customers Data.xls"');
    $object_writer->save('php://output');
  }

  function actionleads()
  {
    $this->load->model("excel_export_model");
    $this->load->library("excel");
    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Name", "Company", "Service", "Phone", "City", "State", "Status", "Source", "Staff ID");

    $column = 0;

    foreach($table_columns as $field)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
      $column++;
    }

    $employee_data = $this->excel_export_model->fetch_leaddata();

    $excel_row = 2;

    foreach($employee_data as $row)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->leadname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->company);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->title);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->phone);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->city);
      $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->state);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->statusname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->sourcename);
      $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->leadassigned);
      $excel_row++;
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Leads Data.xls"');
    $object_writer->save('php://output');
  }

   function sourceleads()
  {
    $this->load->model("excel_export_model");
    $this->load->library("excel");
    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Name", "Company", "Service", "Phone", "City", "State", "Status", "Source", "Staff ID");

    $column = 0;

    foreach($table_columns as $field)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
      $column++;
    }
    $id = $this->input->post( 'name' );
    $employee_data = $this->excel_export_model->fetch_leadsource($id);

    $excel_row = 2;

    foreach($employee_data as $row)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->leadname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->company);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->title);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->phone);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->city);
      $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->state);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->statusname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->sourcename);
      $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->leadassigned);
      $excel_row++;
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Leads Source Data.xls"');
    $object_writer->save('php://output');
  }

   function statusleads()
  {
    $this->load->model("excel_export_model");
    $this->load->library("excel");
    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Name", "Company", "Service", "Phone", "City", "State", "Status", "Source", "Staff ID");

    $column = 0;

    foreach($table_columns as $field)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
      $column++;
    }
    $id = $this->input->post( 'name' );
    $employee_data = $this->excel_export_model->fetch_leadstatus($id);

    $excel_row = 2;

    foreach($employee_data as $row)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->leadname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->company);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->title);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->phone);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->city);
      $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->state);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->statusname);
      $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->sourcename);
      $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->leadassigned);
      $excel_row++;
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Leads Status Data.xls"');
    $object_writer->save('php://output');
  }


  
  
}

