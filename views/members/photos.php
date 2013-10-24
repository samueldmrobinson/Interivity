<style>
    .stream-photos {
        width: 650px;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 30px;
        margin-left: 35px;
    }
    div.img
    {
        margin:2px;
        height:277px;
        width:auto;
        float:left;
        text-align:center;
        padding: 14px 10px;
        margin-top: 20px;
        margin-bottom: 20px;
        moz-border-radius: 5px;
        border-radius: 5px;
        -moz-box-shadow: 0 0 5px 5px #888;
        -webkit-box-shadow: 0 0 5px 5px#888;
        box-shadow: 0 0 5px 5px #888;
        margin-right: 20px;
    }
    div.img img
    {
        display:inline;
        margin:3px;
        
        border-radius: 5px;
    }
    div.img a:hover img
    {
         transform: rotateY(90deg);
  box-shadow: -5px 5px 5px #aaa;
    }
    div.desc
    {
        text-align:center;
        font-weight:normal;
        width:170px;
        margin:2px;
        height: 38px;
    }

.iconmenu ul{
  list-style: none;
}

.iconmenu li{
  display: inline;
  display:block;
float:left;
padding:0 10px;
margin-left: 3px;

}

#comment_post{
        position: absolute;
        display: none;
        z-index: 0;
        width: auto;
        height: auto;
        padding: 10px;
        background-color: #ffffff;
        position: fixed;
        margin-left: 17%;
 margin-top: 4%;
 z-index: 5001;
    }
#update-profile-picture{
        position: absolute;
        display: none;
        z-index: 0;
        width: auto;
        height: auto;
        padding: 10px;
        background-color: #ffffff;
        position: fixed;
        margin-left: 17%;
 margin-top: 4%;
 z-index: 5001;
    }
#settings-for-image{
        position: absolute;
        display: none;
        z-index: 0;
        width: auto;
        height: auto;
        padding: 10px;
        background-color: #ffffff;
        position: fixed;
        margin-left: 17%;
 margin-top: 4%;
 z-index: 5001;
    }
</style>

<div id='overlay'></div>
 <link rel="stylesheet" href="<?php echo URL; ?>js/fb/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
 <script type='text/javascript' src='<?php echo URL; ?>js/fb/jquery.fancybox.js.js'></script>
 <script type='text/javascript' src='<?php echo URL; ?>js/fb/jquery.fancybox.pack.js'></script>
  <script type='text/javascript' src='<?php echo URL; ?>js/photos-GetData.js'></script>
 <script type="text/javascript">
        $(document).ready(function() {
                $(".fancybox").fancybox();
                
                
                
        });
     
        $(".options-icons").click(function(e){
        
            var id = e.attr('href');
            var did = e.attr('dataid');
            var dtid = e.attr('datatype');
   
        
        var docHeight = $(document).height();
          

   $("#overlay")
      .height(docHeight)
      .css({
         'opacity' : 0.5,
         'position': 'absolute',
         'top': 0,
         'left': 0,
         'background-color': 'black',
         'width': '100%',
         'z-index': 5000
      });
        
           $('#overlay').fadeIn();
           
        
            //Set the popup window to center
            $(id).css('top', 40);
            $(id).css('left', 180);

            //transition effect
            
            $(id).fadeIn(2000);
            $(id).load('http://www.interivity.me/members/Query_Photo/'+ dtid +'/'+ did +'/');
      
        //if close button is clicked
        });  
  
        
     
     
 </script>
 
   
<!-- Mask to cover the whole screen -->

<section class="wrap">
    <?php
    if (Session::get('loggedIn', 'minter_id') == $this->user[0]['minter_id']){
    require_once 'profile-left-main.php';
    }
    else{
        require_once 'profile_view.php';  
    }
    ?>
    <!-- end #sidebar-midle -->  
    <div class="stream-photos">
     <h4 style="border-top: 2px solid #232323;
         border-bottom: 1px dotted #232323;"><?php if ($this->user[0]['minter_displayname'] == '') {
                    echo $this->user[0]['minter_firstname'] . '&nbsp' . $this->user[0]['minter_lastname'];
                } else {
                    echo $this->user[0]['minter_displayname'];
                }?>'s Photos</h4>
         <?php
        if (Session::get('loggedIn', 'minter_id') == $this->user[0]['minter_id']) :
            ?>
         <div class='accordionButton first'>Upload Photos</div>
        <div class='accordionContent'> 
            <form enctype="multipart/form-data" action="<?php echo URL; ?>members/photo_upload/" method="post" id="commentform">
                <div class="sleft">
                    <label for="comment">Description:<span>*</span></label>
                    <textarea id="textarea" name="description"  ></textarea>      
                </div>

                <div class="sright">
                    <label for="author">Upload:<span>*</span></label> 
                    <input id="author" name="upload" type="file" size="30" />



                    
                </div>
                <br style="margin-top:-5px;" />

                <input id="submitpost" type="submit" name="submit" class="submitcomm" value="Go" />
            </form>
        </div>
         <?php
        endif;
        ?>
        <?php
          
        foreach ($this->usrphotos as $row) {
            echo '<div class="img">';
            echo '<a class="fancybox" rel="group" href="' . URL . $row['photo_path'] . '">';
            echo '<img src="' . URL . $row['photo_path'] . '" width="165" height="195">';
            echo '</a>';
            echo '<hr />';
            echo '<div class="desc">' . $row['photo_title'] . '</div>';
            if($row['minter_id'] == Session::get('loggedIn', 'minter_id')){
                
               echo '<div class="icon">';
  echo  '<div class="shine">';
      echo '<ul class="iconmenu">';
    
		
      echo '<li>';
         echo '<a class="options-icons iframe"  href="#comment-post" name="modal" style="text-decoration: none;" onclick="javascript:show();"><img src="'.URL.'icons/blog.png" /></a>';
      echo '</li>';
      echo '<li>';
         echo '<a class="options-icons iframe"  href="#update-profile-picture" name="modal" style="text-decoration: none;" onclick="javascript:show();"><img src="'.URL.'icons/user.png" /></a>';
      echo '</li>';
      echo '<li>';
         echo '<a class="iframe"  href="http://www.google.com" name="modal" style="text-decoration: none;" onclick="javascript:show();"><img src="'.URL.'icons/config.png" /></a>';
      echo '</li>';
     
      echo '</ul>';
     echo  '</div>';
echo '</div>';
echo '</div>';
            }
            else{
                
                echo '<div class="icon">';
  echo  '<div class="shine">';
      echo '<ul class="iconmenu">';

      echo '<li>';
         echo '<a href="#"><img src="'.URL.'icons/blog.png" /></a>';
      echo '</li>';
      echo '<li>';
         echo '<a href="#"><img src="'.URL.'icons/tag.png" /></a>';
      echo '</li>';
      echo '<li>';
         echo '<a href="#"><img src="'.URL.'icons/flag.png" /></a>';
      echo '</li>';
  
      
      echo '</ul>';
     echo  '</div>';
echo '</div>';
echo '</div>';
            }
            
        }
//      echo '<div id="comment-post"><!-- Hidden Div -->
// <a href="#" class="close" id="closebutton" style="text-decoration: none;" title="Close">
//                        <b style="color: Red; background-color: Gray;">X</b></a></div>
//
//</div>'; 
//          echo '<div id="update-profile-picture"><!-- Hidden Div -->
// <a href="#" class="close" id="closebutton" style="text-decoration: none;" title="Close">
//                        <b style="color: Red; background-color: Gray;">X</b></a>
//
//</div></div>'; 
//          echo '<div id="settings-for-image"><!-- Hidden Div -->
// 
//
//</div></div>'; 
        ?>

    </div>
