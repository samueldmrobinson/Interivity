<script type='text/javascript' src='<?php echo URL; ?>js/pagination-browse.js'></script>
<script language="javascript" type="text/javascript">

    $(document).ready(function() {
        $('.list').scrollPagination({
            nop: 5, // The number of posts per scroll to be loaded
            offset: 0, // Initial offset, begins at 0 in this case
            error: 'No More Posts!', // When the user reaches the end this is the message that is
            // displayed. You can change this if you want.
            delay: 500, // When you scroll down the posts will load after a delayed amount of time.
            // This is mainly for usability concerns. You can alter this as you see fit
            scroll: true, // The main bit, if set to false posts will not load as the user scrolls. 
            // but will still load if the user clicks.
            brwse: '<?php echo $this->jsbuildPaginationLoader[1] ?>',
            type: '<?php echo $this->jsbuildPaginationLoader[2] ?>'
        });
    });
    function filter(element) {
        var value = $(element).val().toLowerCase();
        
        
        $("#theList > li").each(function() {
            print($(this).style.display);

            if ($(this).text().toLowerCase().indexOf(value) > -1) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        });
        $(".list .list > div").each(function() {
            if ($(this).text.toLowerCase().indexOf(value) > -1) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        });
    }
    function Filter_Country(element) {
        $(".sel-fccity").fadeIn(function() {
            selected_val = $('select[name=cu-selec]').val();
            if (selected_val !== '') {
                $(".sel-fccity > option").each(function() {
                    if ($(this).val().toLowerCase().indexOf(selected_val) > -1) {
                        $(this).show();
                    }
                    else {
                        $(this).hide();
                    }
                });
            }
            else {
                $(".sel-fccity").fadeOut();
            }
        });
        $(".list .list > div").each(function() {
            if ($(this).attr("location").toLowerCase().indexOf(value) > -1) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        });
        $("#theList > li").each(function() {
            if ($(this).attr("location").toLowerCase().indexOf(value) > -1) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        });

    }
    function Filter_City(element) {
        var value = $(element).val().toLowerCase();
        $(".list .list > div").each(function() {
            if ($(this).attr("location").toLowerCase().indexOf(value) > -1) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        });
        $("#theList > li").each(function() {
            if ($(this).attr("location").toLowerCase().indexOf(value) > -1) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        });

    }
</script>
<style>
    /* The CSS */
    select {
        padding:3px;
        margin: 0;
        -moz-border-radius:4px;
        border-radius:4px;
        color:#888;
        border: 1px solid #E5E5E5;
        border-radius: 4px 4px 4px 4px;
        font: 12px/20px Helvetica,Arial,sans-serif;
        display: inline-block;
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none;
        cursor:pointer;
        height: 26px;
        padding: 2px 5px;
        width: 70%;
    }

    /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
    @media screen and (-webkit-min-device-pixel-ratio:0) {
        select {padding-right:18px}
    }

    .sel-fcc {position:relative}
    .sel-fcc:after {
        content:'<>';
        font:11px "Consolas", monospace;
        color:#aaa;
        -webkit-transform:rotate(90deg);
        -moz-transform:rotate(90deg);
        -ms-transform:rotate(90deg);
        transform:rotate(90deg);
        right:8px; top:0px;
        padding:0 0 2px;
        border-bottom:1px solid #ddd;
        position:absolute;
        pointer-events:none;
    }
    .sel-fcc:before {
        content:'';
        right:6px; top:0px;
        width:20px; height:20px;
        position:absolute;
        pointer-events:none;
        display:block;
    }
</style>
<section id="main">
    <div class="row">
        <div id="entry-title" class="twelve columns relative">
            <h2 class="content-title">
                <?php
                if (isset($this->jsbuildPaginationLoader[2])) {

                    echo ucfirst($this->jsbuildPaginationLoader[1]) . '&nbsp' . ucfirst($this->jsbuildPaginationLoader[2]);
                } else {

                    echo ucfirst($this->jsbuildPaginationLoader[1]);
                }
                ?>            
            </h2>
            <p class="content-delimiter nm"></p>
            <section style="margin-left: 20.5%;">
                <div class="field filter-box" style="float:left; margin-left: 5%;">
                    <div class="three columns" >
                        <label>
                            <h4>Filter By Interest</h4>
                        </label>
                        <input type="text" onkeyup="filter(this)" /> 
                    </div>

                </div>
                <div class="field filter-box" style="float:left; margin-left: 5%;">
                    <div class="three columns">
                        <label>
                            <h4>Filter By Country</h4>
                        </label>
                        <label class="sel-fcc">

                            <select name="cu-selec" onchange="Filter_Country(this)">
                                <?php
                                echo '<option selected value="">Select Country</option>';

                                foreach ($this->distinctCountries as $row) {
                                    if ($row['loc_country'] !== '') {
                                        echo '<option value="' . $row['loc_country'] . '">' . $row['loc_country'] . '</option>';
                                    }
                                }
                                ?>

                            </select>
                        </label>
                    </div>

                    <label  class="sel-fccity" style="display:none;">
                        <h4>Filter By City</h4>
                    </label>
                    <label class="sel-fcc sel-fccity" style="display:none;">

                        <select onchange="Filter_City(this)">
                            <?php
                            echo '<option selected value="">Select City</option>';

                            foreach ($this->distinctCities as $row) {
                                if ($row['loc_city'] !== '') {
                                    echo '<option value="' . $row['loc_city'] . '">' . $row['loc_city'] . '</option>';
                                }
                            }
                            ?>

                        </select>
                    </label>


                </div>
            </section>

            <nav class="hotkeys-meta">
                <span class="nav-previous no-zoom"><a href="#" rel="prev">Previous</a></span>
                <span class="nav-next"></span>
            </nav>
        </div>
    </div>


    <div class="row">
        <div id="primary" class="twelve columns">
            <div id="content" role="main">
                <ul id="theList" class="work">
                    <!-- li Starts Here -->
                    <li class="boxgrid captionfull" location="Birmingham">
                        <div class="category"><span class="text-category">Animals</span></div>
                        <a href="css3-image-slider-book-demo.html"><img src="http://i1.likes-media.com/uimg/c174feda0fda18c2ceae08b8ca253dd9.600x" class="attachment-home-post-thumbnail wp-post-image" alt="CSS3 Image Slider Book Demo" title="CSS3 Image Slider Book Demo" height="197" width="250">		
                            <span style="top: -119px;" class="cover boxcaption">
                                <span class="descr">I want an Otter :D</span> 
                            </span>
                            <span style="top: -119px;" class="cover boxcaption-title">
                                <span class="title" category='animals'>I Want An Otter :D</span> 

                            </span>
                        </a>
                    </li>	


                    <!-- li ends here-->
                    <li class="boxgrid captionfull" location="London">
                        <div class="category"><span class="text-category">Animals</span></div>
                        <a href="css3-image-slider-book-demo.html"><img src="http://i239.photobucket.com/albums/ff181/suruha/Smiles/animal-gifs-big-smile.gif" class="attachment-home-post-thumbnail wp-post-image" alt="CSS3 Image Slider Book Demo" title="CSS3 Image Slider Book Demo" height="197" width="250">		
                            <span style="top: -119px;" class="cover boxcaption">
                                <span class="descr">CSS3 Image Slider</span> 
                                <span class="title">Book Template Demo</span>
                                <span class="caption">with Book effect</span>
                            </span>
                            <span style="top: -119px;" class="cover boxcaption-title">
                                <span class="title" category='animals'>I'm Coming For You</span>                        
                            </span>
                        </a>
                    </li>	



                    <li class="boxgrid captionfull" location="Lichfield">
                        <div class="category"><span class="text-category">Funny</span></div>
                        <a href="html5-image-slider-box-stack-v-demo.html"><img src="http://images.wikia.com/victorious/images/1/15/Funny-gif-11.gif" class="attachment-home-post-thumbnail wp-post-image" alt="HTML5 Image Slider Box Stack Vertical Demo" title="HTML5 Image Slider Box Stack Vertical Demo" height="197" width="250">		
                            <span style="top: -119px;" class="cover boxcaption">
                                <span class="descr">HTML5 Image Slider</span> 
                                <span class="title">Box Template Demo</span>
                                <span class="caption">with Stack Vertical effect</span>
                            </span>
                            <span style="top: -119px;" class="cover boxcaption-title">
                                <span class="title">Big Head, Little Arms</span>
                            </span>
                        </a>
                    </li>


                    <li class="boxgrid captionfull" location="Far Far Away">
                        <div class="category"><span class="text-category">Football</span></div>
                        <a href="css3-slideshow-pure-domino.html"><img src="http://funny-pictures-blog.com/wp-content/uploads/2011/12/Funny-GIF-Luck.gif" class="attachment-home-post-thumbnail wp-post-image" alt="CSS3 Slideshow Pure Domino Demo" title="CSS3 Slideshow Pure Domino Demo" height="197" width="250">		
                            <span style="top: -119px;" class="cover boxcaption">
                                <span class="descr">CSS3 Slideshow</span> 
                            </span>
                            <span style="top: -119px;" class="cover boxcaption-title">
                                <span class="title">Best Goal Ever</span>
                            </span>
                        </a>
                    </li>





                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <p class="content-delimiter nm"></p>
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