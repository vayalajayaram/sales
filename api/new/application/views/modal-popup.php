<div class="modal fade in" id="squarespaceModal" tabindex="-1" role="dialog" aria-hidden="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
            </button>
            <div class="modal-title" id="lineModalLabel">
               <span>Pick your city</span>
            </div>
         </div>
         <div class="modal-body clearfix">
            <div class="mycontent">
               <div class="row">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-body no-padding2">
                           <div class="profiel-container change-top">
                              <form action="<?php echo base_url(); ?>home/cityandarea" method="post" class="clearfix" >
                                 <div class="clear">
                                    <div class="col-sm-6 col-xs-12 padding-top-25">
                                       <label><small class="adjst"></small>Select City</label>
                                       <select class="form-control" name="fcity" required id="fcity">
                                          <option value="">Select City</option>
                                          <?php foreach($cities as $city){ ?>
                                          <option value="<?php echo $city['c_id']; ?>" <?php if($city['c_id']==$this->session->userdata('headercity')){ echo "selected";} ?>><?php echo $city['city_name']; ?></option>
                                         <?php } ?>
                                       </select>
                                    </div>
                                    
                                    <div class="col-sm-6 col-xs-12 padding-top-25">
                                       <label><small class="adjst"></small>Select Area</label>
                                       <select class="form-control"  name="farea" required id="farea">
                                          <option>Select Area</option>
                                        
                                       </select>
                                    </div>
                                    <div class="col-sm-12 text-right" style="margin-top: 5px;">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>



<div class="modal fade model-quote" id="hmodel-quote-fq" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="model-divider">
               <div class="model-title">
                  <h6>rquest a quote</h6>
               </div>
            </div>
         </div>
         <!-- .model-header end -->
         <div class="modal-body">
            <div class="profiel-container change-top">
               <form action="<?php echo base_url(); ?>products/leads" method="post" class="clearfix">
                  <div class="clear">
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Category</label>
                        <select class="form-control" name="category" id="category_g" required>
                           <option value="">Select Category</option>
                           <?php foreach($categories as $category){ ?>
                           <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                          <?php } ?>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst" ></small> Sub Category</label>
                        
                        <select class="form-control"  name="subcategory" id="subcategory_g" required>
                           <option value="">Select Sub Category</option>
                      
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Sub Sub Category</label>
                        <select class="form-control" name="subsubcategory" id="subsubcategory_g" required>
                           <option value="">Select Sub Sub Category</option>                         
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Product Name</label>
                      
                        <select name="product" class="form-control" id="product_g"  required >
                        <option value="">Select Product</option>
                        </select> 
                         
                        <input type="hidden" name="product_id" id="product_id_g" value="" />
                        <input type="hidden" name="seller_id" id="seller_id_g" value="" />
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your First Name </label>
                           <input name="first_name" type="text" class="form-control" placeholder="Your First Name ..." required value="<?php echo $cust['first_name']; ?>" readonly="readonly">
                        </div>
                     </div>
                       <div class="col-sm-6 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Last Name </label>
                           <input name="last_name" type="text" class="form-control" placeholder="Your Last Name ..." required value="<?php echo $cust['last_name']; ?>" readonly="readonly">
                        </div>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Phone </label>
                           <input name="phone" type="text" class="form-control" placeholder="Your Phone ..." required value="<?php echo $cust['phone']; ?>" readonly="readonly">
                        </div>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Email </label>
                           <input name="email" type="email" class="form-control" placeholder="Your Email..." required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $cust['email']; ?>" readonly="readonly">
                        </div>
                     </div>
                     <div class="col-sm-12 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small>  Your Message </label>
                           <textarea name="yourMessage" id="yourMessage" placeholder="Your Message" required=""></textarea>
                        </div>
                     </div>
                     <div class="col-sm-12 text-right">
                         <input class="btn btn-primary" type="submit" name="sub" value="Submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- .model-body end -->
      </div>
   </div>
</div>


<div class="modal fade model-quote" id="hmodel-quote-fs" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="model-divider">
               <div class="model-title">
                  <h6>rquest a quote</h6>
               </div>
            </div>
         </div>
         <!-- .model-header end -->
         <div class="modal-body">
            <div class="profiel-container change-top">
               <form action="<?php echo base_url(); ?>products/leadservice" method="post" class="clearfix">
                  <div class="clear">
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Category</label>
                        <select class="form-control" name="category" id="category_s" required>
                           <option value="">Select Category</option>
                           <?php foreach($categories as $category){ ?>
                           <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                          <?php } ?>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small> Sub Category</label>
                        <select class="form-control"  name="subcategory" id="subcategory_s" required>
                           <option value="">Select Sub Category</option>
                      
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Sub Sub Category</label>
                        <select class="form-control" name="subsubcategory" id="subsubcategory_s" required>
                           <option value="">Select Sub Sub Category</option>                         
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Service Name</label>
                        <select class="form-control"  name="service" id="service_s" required>
                           <option value="">Select Service</option>                        
                         
                        </select>
                        <input type="hidden" name="service_id" id="service_id_s" value="" />
                        <input type="hidden" name="seller_id" id="seller_id_s" value="" />
                     </div>
                       <div class="col-sm-6 padding-top-25">
                        <div class="form-group required">
                           <label><small class="adjst"></small> Appoitment Date </label>
                           <input type="text" class="form-control" id="datetimepicker6" name="appointment" placeholder="11/11/2017">
                        </div>
                     </div>
                     
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your First Name </label>
                           <input name="first_name" type="text" class="form-control" placeholder="Your First Name ..." required value="<?php echo $cust['first_name']; ?>" readonly="readonly">
                        </div>
                     </div>
                       <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Last Name </label>
                           <input name="last_name" type="text" class="form-control" placeholder="Your Last Name ..." required value="<?php echo $cust['last_name']; ?>" readonly="readonly">
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Phone </label>
                           <input name="phone" type="text" class="form-control" placeholder="Your Phone ..." required value="<?php echo $cust['phone']; ?>" readonly="readonly">
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-25">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Email </label>
                           <input name="email" type="email" class="form-control" placeholder="Your Email..." required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $cust['email']; ?>" readonly="readonly" >
                        </div>
                     </div>
                     <div class="col-sm-12 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small>  Your Message </label>
                           <textarea name="yourMessage" id="yourMessage" placeholder="Your Message" required=""></textarea>
                        </div>
                     </div>
                     <div class="col-sm-12 text-right">
                         <input class="btn btn-primary" type="submit" name="sub" value="Submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- .model-body end -->
      </div>
   </div>
</div>


<div class="modal fade model-quote" id="hmodel-quote1" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="model-divider">
               <div class="model-title">
                  <h6>BOOK A SERVICE</h6>
               </div>
            </div>
         </div>
         <!-- .model-header end -->
         <div class="modal-body">
            <div class="profiel-container change-top">
               <form action="#" method="post" class="clearfix">
                  <div class="clear">
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small> Service </label>
                        <select class="selectpicker form-control" data-live-search="true">
                           <option>Select Service</option>
                           <option>Hot Dog</option>
                           <option>Burger</option>
                           <option>Sugar</option>
                           <option>Purger</option>
                           <option>Zugar</option>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>  Sub Service </label>
                        <select class="selectpicker form-control" data-live-search="true">
                           <option>Select Service</option>
                           <option>Hot Dog</option>
                           <option>Burger</option>
                           <option>Sugar</option>
                           <option>Purger</option>
                           <option>Zugar</option>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Sub Sub Service</label>
                        <select class="selectpicker form-control" data-live-search="true">
                           <option>Select Service</option>
                           <option>Hot Dog</option>
                           <option>Burger</option>
                           <option>Sugar</option>
                           <option>Purger</option>
                           <option>Zugar</option>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <label><small class="adjst"></small>Service Name </label>
                        <select class="selectpicker form-control" data-live-search="true">
                           <option>Select Service</option>
                           <option>Hot Dog</option>
                           <option>Burger</option>
                           <option>Sugar</option>
                           <option>Purger</option>
                           <option>Zugar</option>
                        </select>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group required">
                           <label><small class="adjst"></small> Appoitment Date </label>
                           <input type="text" class="form-control" id="datetimepicker6" placeholder="11/11/2017">
                        </div>
                     </div>
                     <div class="col-sm-6 padding-top-25">
                        <div class="form-group required">
                           <label class=""><small class="adjst"></small>  Appoitment Time</label>
                           <select class="form-control" id="input-country2" name="country_id">
                              <option value=""> --- Please Select --- </option>
                              <option value="244">09:00AM - 10:00AM</option>
                              <option value="1">11:00AM - 12:00PM</option>
                              <option value="2">01:00PM - 2:00PM</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Name </label>
                           <input name="firstname" type="text" class="form-control" placeholder="Your Name ...">
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small>  Your Phone </label>
                           <input name="lastname" type="text" class="form-control" placeholder="Your Phone...">
                        </div>
                     </div>
                     <div class="col-sm-4 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small> Your Email </label>
                           <input name="lastname" type="text" class="form-control" placeholder="Your Email...">
                        </div>
                     </div>
                     
                     <div class="col-sm-12 padding-top-2">
                        <div class="form-group">
                           <label><small class="adjst"></small>  Your Message </label>
                           <textarea name="yourMessage"  placeholder="Your Message" required=""></textarea>
                        </div>
                     </div>
                     <div class="col-sm-12 text-right">
                        <a class="mybtns"  data-toggle="tooltip" title="" data-original-title="Submit"><i class="fa fa-check"></i> <span class="">Submit</span></a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- .model-body end -->
      </div>
   </div>
</div>


<div class="modal fade model-quote" id="hmodel-quote2" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <div class="model-divider">
               <div class="model-title">
                  <h6>Contact Details</h6>
               </div>
            </div>
         </div>
         <!-- .model-header end -->
         <div class="modal-body">
            

            <form action="#" method="post" class="profiel-container1 clearfix">
                           

                            <div class="clear">
                                <div class="col-sm-6 col-md-6 padding-top-25">
                                    <div class="form-group">
                                        <label>First Name <small>(required)</small></label>
                                        <input name="firstname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 padding-top-25">
                                    <div class="form-group">
                                        <label>Last Name <small>(required)</small></label>
                                        <input name="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email <small>(required)</small></label>
                                        <input name="email" type="email" class="form-control">
                                    </div> 
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number <small>(required)</small></label>
                                        <input name="Password" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Address1<small>(required)</small></label>
                                        <input name="email" type="text" class="form-control">
                                    </div> 
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Address2<small>(required)</small></label>
                                        <input name="Password" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-12 page-login">
                                <div class="row">
                                <div class="bottom-form">
                                  <a href="#" class="btn btn-default pull-right">Submit</a>
                                </div>
                                </div>
                            </div>
                    </form>

         </div>
         <!-- .model-body end -->
      </div>
   </div>
</div>


<!-- delete -->
<div id="conform" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box">
              <i class="fa fa-close"></i>
            </div>        
            <h4 class="modal-title">Are you sure?</h4>  
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Do you really want to delete these records? This process cannot be undone.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div> 
	  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
	<script>
	$("select[name='fcity']").change(function(){
      var cid = $(this).val();
 
      $.ajax({
          url: "<?php echo base_url();?>home/ajax_city",
          method: 'POST',
          data: {city:cid},
          success: function(data) {
			
          $("#farea").html(data);
          }
      });
  });
  
  $(document).ready(function(){
	   var cid = $("#fcity").val();
  var aid ='<?php echo $this->session->userdata('headerarea') ?>';
      $.ajax({
          url: "<?php echo base_url();?>home/ajax_city",
          method: 'POST',
          data: {city:cid,area:aid},
          success: function(data) {
			
          $("#farea").html(data);
          }
      });
	  });
  
	 $("select[id='category_g']").change(function(){
      var category = $(this).val(); 	
      $.ajax({
          url: "<?php echo base_url();?>/popup/ajax_subcat",
          method: 'POST',
          data: {category:category},
          success: function(data) {		
          $("#subcategory_g").html(data);
          }
      });
  });
  
  $("select[id='subcategory_g']").change(function(){
      var subcategory = $(this).val();  	
      $.ajax({
          url: "<?php echo base_url();?>/popup/ajax_subsubcat",
          method: 'POST',
          data: {subcategory:subcategory},
          success: function(data) {			 	 
          $("#subsubcategory_g").html(data);
          }
      });
  });
  
  $("select[id='subsubcategory_g']").change(function(){
      var subsubcategory = $(this).val();  	
      $.ajax({
          url: "<?php echo base_url();?>/popup/ajax_prod",
          method: 'POST',
          data: {subsubcategory:subsubcategory},
          success: function(data) {	
			 	 alert(data);
          $("#product_g").html(data);
          }
      });
  });
   $("select[id='product_g']").change(function(){
	   var prod=$('#product_g option:selected').attr('label');
	   var seller=$('#product_g option:selected').attr('gnr');
	   $("#product_id_g").val(prod);
	   $("#seller_id_g").val(seller);
   });
   
   $("select[id='category_s']").change(function(){
      var category = $(this).val(); 	
      $.ajax({
          url: "<?php echo base_url();?>/popup/ajax_subcat",
          method: 'POST',
          data: {category:category},
          success: function(data) {		
          $("#subcategory_s").html(data);
          }
      });
  });
  
  $("select[id='subcategory_s']").change(function(){
      var subcategory = $(this).val();  	
      $.ajax({
          url: "<?php echo base_url();?>/popup/ajax_subsubcat",
          method: 'POST',
          data: {subcategory:subcategory},
          success: function(data) {			 	 
          $("#subsubcategory_s").html(data);
          }
      });
  });
  
  $("select[id='subsubcategory_s']").change(function(){
      var subsubcategory = $(this).val();  	
      $.ajax({
          url: "<?php echo base_url();?>/popup/ajax_serivce",
          method: 'POST',
          data: {subsubcategory:subsubcategory},
          success: function(data) {	
			
          $("#service_s").html(data);
          }
      });
  });
   $("select[id='service_s']").change(function(){
	   var prod=$('#service_s option:selected').attr('label');
	   var seller=$('#service_s option:selected').attr('gnr');
	   $("#service_id_s").val(prod);
	   $("#seller_id_s").val(seller);
   });
  $('input[name="phone"]').keyup(function(e){
              if (/\D/g.test(this.value))
              {   
              this.value = this.value.replace(/\D/g, '');
             }  
            });
	</script>
	