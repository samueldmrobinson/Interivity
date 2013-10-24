<style>
    .stream-cc {
        width: 650px;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 30px;
        margin-left: 35px;
    }
    #commentform #select-c {
        width: 400px;
        height: 32px;
        line-height: 22px;
        float: left;
        display: block;
        border-radius: 3px;
        border-radius: 3px;
        -moz-resize: vertical;
        resize: vertical;
    }

</style>
<section class="wrap">
    <?php
    require_once 'profile-left-main.php';
    ?>
    <!-- end #sidebar-midle -->  

    <div class="stream-cc">
        <h4 style="border-top: 2px solid #232323;
            border-bottom: 1px dotted #232323;">Countries</h4>
      
        <script type='text/javascript' src='<?php echo URL; ?>js/pagination-browse-countries.js'></script>
        <script>

            $(document).ready(function() {

                $('.interivities-stream-list').scrollPagination({
                    nop: 15, // The number of posts per scroll to be loaded
                    offset: 0, // Initial offset, begins at 0 in this case
                    error: 'No More Posts!', // When the user reaches the end this is the message that is
                    // displayed. You can change this if you want.
                    delay: 500, // When you scroll down the posts will load after a delayed amount of time.
                    // This is mainly for usability concerns. You can alter this as you see fit
                    scroll: true // The main bit, if set to false posts will not load as the user scrolls. 
                            // but will still load if the user clicks.

                });

            });

        </script>
        <div class="interivities-stream">
            <ul class="interivities-stream-list">

            </ul><!-- end #widget-list -->   
        </div>
    </div> 
