

<section class="wrap">
      <?php
     require_once 'profile-left-main.php';
     ?>
    <!-- end #sidebar-midle -->  
    <script type='text/javascript' src='<?php echo URL; ?>js/pagination-category.js'></script>
        <script>
 $(document).ready(function() {
	$('.interivities-stream-list').scrollPagination({

		nop     : 5, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : 'No More Posts!', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 500, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true, // The main bit, if set to false posts will not load as the user scrolls. 
		               // but will still load if the user clicks.
                category_num: <?php echo $this->cat_id; ?>
		
	});
	});
        


</script>
    <div class="stream">
        <div class="interivities-stream">
            <ul class="interivities-stream-list">
              
            </ul><!-- end #widget-list -->   
        </div><!-- end #widget-left -->  
    </div>
