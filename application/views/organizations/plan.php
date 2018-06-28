

<h2 class="main-title">Next Lead Pricing Table</h2>

<!-- Extra code, do not imcluded with buttons -->
<div class="container-box rotated">
<button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal" style="padding: 0px 170px;">ADD NEW PLANS</button>
</div>
<!-- BEGIN # MODAL LOGIN -->


<div class="container">
    <div class="row">
            <?php   foreach ($p->result() as $row)  {   ?>
        <div class="col-xs-12 col-sm-6 col-md-4"> 
            <!-- Price Table Item -->
            <div class="price-table text-center">
                <div class="price-table-heading">
                    <h4 class="title"><?php echo $row->plan_type; ?></h4>
                </div>
                <div class="price-table-body">
                    <p class="value">Rs<?php echo $row->plan_price;?><small>/<?php echo $row->plan_duration;?></small></p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><i class="icon-ok text-success"></i> <?php echo $row->plan_services;?></li>
                    <li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited Sources</li>
                    <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
                </ul>
                <div class="price-table-footer"> <a class="btn btn-lg btn-success" href="<?php echo base_url(); ?>index.php/organizations/deleteplan/<?php echo $row->plan_id; ?>" onclick="return confirm ('Do you want to Delete this plans?');">DELETE</a> </div>
            </div>
            <!-- END Price Table Item -->
        
            <!-- START: Will be visible in tablet and mobile devices to make gap between tow price items -->
            <div class="col-xs-12 col-sm-12 margin-bottom-20"></div>
            <!-- END: Will be visible in tablet and mobile devices to make gap between tow price items -->
        </div>
         <?php } ?> 
    </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">


<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h1 class="modal-title">Add Plans</h1>
</div>

        <form role="form" method="post" action="<?php echo base_url('index.php/organizations/addplan');?>">
    
<div class="col-xs-12 col-sm-6 col-md-12"> 
        <div class="form-group">
            <label for="name">
                Plan Type:</label>
            <input type="text" class="form-control"
            id="name" name="plan_type"   required >

        </div>
        <div class="form-group">
            <label for="email">
                Plan Duration:</label>
            <input type="text" class="form-control"
            id="email" name="plan_duration" required >
        </div>
             <div class="form-group">
            <label for="email">
                Plan Services:</label>
            <input type="text" class="form-control"
            id="email" name="plan_services" required >
        </div>
            <div class="form-group">
            <label for="email">
                Plan Price:</label>
            <input type="text" class="form-control"
            id="email" name="plan_price" required >
        </div>

        <button type="submit" class="btn btn-lg btn-danger btn-block" >Add Plan Details →</button>
</div>
    </form>


 </div>
</div>
<style>
body {
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    line-height: 28px;
}
.main-title {
    font-weight: 700;
    text-align: center;
    margin: 50px 0;
}
.margin-bottom-20 {
    margin-bottom: 20px;
}
.margin-bottom-50 {
    margin-bottom: 50px;
}


/* =================================
Price Table
================================= */ 
.price-table {
    background: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    border: 7px solid #eeeeee;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -webkit-transition: all .3s ease;
}
.price-table:hover {
    background: rgba(0,0,0, .03);
    border-color: #0093DD;
}
.price-table .price-table-heading {
    color: #333333;
    background: #f9f9f9;
    padding: 10px 0;
    margin: 0;
}
.price-table .price-table-heading .title {
    color: #333333;
    font-weight: 900;
    letter-spacing: 1px;
}
.price-table > .price-table-body {
    color: #FFFFFF;
    background: #0093DD;
    padding: 50px 0 30px;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -webkit-transition: all .3s ease;
}
.price-table > .price-table-body .value {
    font-size: 66px;
    font-weight: 300;
    color: #FFFFFF;
    padding: 0;
}
.price-table > .price-table-body .value small {
    font-size: 16px;
}
.price-table > .list-group {
    color: #333;
    font-weight: 400;
    margin-bottom: 0;
}
.price-table > .list-group .list-group-item {
    color: #333;
    font-weight: 400;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;   
}
.price-table .btn {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-weight: 700;
}
.price-table-footer {
    background: #eeeeee;
    padding: 15px 0;
}
</style>

<script>
$(document).ready(function() {
 
//Sort random function
function random(owlSelector){
owlSelector.children().sort(function(){
return Math.round(Math.random()) - 0.5;
}).each(function(){
$(this).appendTo(owlSelector);
});
}
 
$("#owl-wrap").owlCarousel({
navigation: true,
navigationText: [
"<i class='icon-chevron-left icon-white'><</i>",
"<i class='icon-chevron-right icon-white'>></i>"
],
beforeInit : function(elem){
//Parameter elem pointing to $("#owl-demo")
random(elem);
}
 
});
 
});



// Nivo Lightbox
$('a').nivoLightbox({
    effect: 'fadeScale',                             // The effect to use when showing the lightbox
    theme: 'default',                           // The lightbox theme to use
    keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
    clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
    onInit: function(){},                       // Callback when lightbox has loaded
    beforeShowLightbox: function(){},           // Callback before the lightbox is shown
    afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
    beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
    afterHideLightbox: function(){},            // Callback after the lightbox is hidden
    onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
    onNext: function(element){},                // Callback when the lightbox gallery goes to next item
    errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
});
</script>