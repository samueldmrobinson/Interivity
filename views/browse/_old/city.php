<script type='text/javascript' src='<?php echo URL; ?>js/pagination-browse.js'></script>
<script>

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
            browse: city
        });
    });
</script>
<script language="javascript" type="text/javascript">
    function filter(element) {
        var value = $(element).val().toLowerCase();
        $("#theList > li").each(function() {

            if ($(this).text().toLowerCase().indexOf(value) > -1) {
                 $(this).fadeIn();

            }
            else {
                $(this).fadeOut();
            }
        });
    }
</script>
<style>
    .work li {
        height: 197px;
        float: left;
        margin-right: 24px;
        margin-left: 18px;
        padding: 0;
        -moz-box-shadow: 0 0 3px #ccc;
        -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;

        border-radius: 5px 5px 0 0;
        list-style-type: none;
        width: 250px;
        margin-bottom: 40px;

    }
    .work li:hover .boxcaption { display: block; }
    .work li:hover .boxcaption-title { display: none; }
    .boxcaption {
        color: #fff;
        float: left;
        position: relative;
        background: rgb(51,152,182);
        background: rgba(51,152,182,.9);
        height: 101px;
        width: 250px;
        border-radius: 5px 5px 0 0;
        padding-top: 12px;

        display: none;
        text-align: center;

    }
    .boxcaption-title {
        color: #fff;
        float: left;
        position: relative;
        background: rgb(51,152,182);
        background: rgba(51,152,182,.9);
        height: 53px;
        width: 250px;
        margin-top: 48px;
        border-radius: 5px 5px 0 0;
        padding-top: 12px;
        display: block;
        text-align: center;
    }
    .filter-box{

        -moz-box-shadow: 0 0 3px #ccc;
        -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #D3C9C9;
        height: 75px;
        border-radius: 5px 5px 0 0;
        width: 271px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .category{
        color: #fff;

        background: rgb(51,152,182);
        background: rgba(51,152,182,.9);
        height: 20px;
        width: auto;
        border-radius: 0 0 5px 0;

        position: absolute;
        text-align: right;

    }
    .text-category{
        padding: 0 7px 0 7px;
        width: auto;
        height: auto;
        text-align: center;

    }        


</style>
<section id="main">
    <div class="row">
        <div id="entry-title" class="twelve columns relative">
            <h2 class="content-title">Cities</h2>
            <p class="content-delimiter nm"></p>
            <div class="field filter-box">
                <div class="three columns">
                    <label>
                        <h4>Filter By Interest</h4>
                    </label>
                    <input type="text" onkeyup="filter(this)" /> 
                </div>
            </div>
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

                    <li class="boxgrid captionfull">
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

                    <li class="boxgrid captionfull">
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
                    <li class="boxgrid captionfull">
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
                    <li class="boxgrid captionfull">
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
</section>