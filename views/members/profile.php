<script type='text/javascript' src='<?php echo URL; ?>js/pagination-profile.js'></script>
<script type='text/javascript'>
    $(document).ready(function() {
        $('.list').scrollPagination({
            nop: 10, // The number of posts per scroll to be loaded
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
<section id="main">
    <div class="row">
        <div id="entry-title" class="twelve columns relative">
            <h2 class="content-title">
                My posts </h2>
            <nav class="hotkeys-meta">
                <span class="nav-previous no-zoom"><a href="#" rel="prev">Previous</a></span>
                <span class="nav-next"></span>
            </nav>
        </div>
    </div>
    <div class="row">
        <div id="primary" class="twelve columns">
            <div id="content" role="main">
                <article id="post-5" class="post-5 page type-page status-publish hentry post my-posts big-post">
                    <div class="list">

                    </div>
                </article>
            </div>
        </div>
    </div>
</section>