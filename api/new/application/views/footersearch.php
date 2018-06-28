<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <?php 
  $prefix = $sprodl = '';
  foreach($searchprod as $sprod)
  {
    $sprodl .= $prefix . '"' . $sprod['product_name'] . '"';
    $prefix = ', ';
  }
  
   $prefix = $servl = '';
  foreach($searchser as $sprod)
  {
    $servl .= $prefix . '"' . $sprod['service_name'] . '"';
    $prefix = ', ';
  }
 
   
   ?>
        <script>
  $( function() {
    var availableTags = [<?php echo $sprodl; ?>,<?php echo $servl; ?>];
    $( "#searchgn" ).autocomplete({
      source: availableTags
    });
  } );
  </script>