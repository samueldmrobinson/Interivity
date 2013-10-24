<footer id="colophon" role="contentinfo" data-role="footer" data-position="fixed" data-fullscreen="true" style="background: #414B52; ">
    <div class="row boxed" id="footerCopyright" style="background: #414B52; ">
        <div class="five columns">
            <p class="copyright"><a href="#" title="Interivity">Interivity</a> © <a href="#"><?php echo date('y'); ?></a>  </p>
        </div>
        <div class="seven columns">
            <ul id="menu-footer-menu" class="right no-margin">
                
                <li id="menu-item-433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433 first">
                    <a href="<?php echo URL; ?>help/privacy_policy/">Privacy Policy</a>
                </li>
                <li id="menu-item-433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433 ">
                    <a href="<?php echo URL; ?>help/terms_conditions/">Terms &amp; Conditions</a>
                </li>
                <li id="menu-item-433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433 ">
                    This website uses <a href="http://www.maxmind.com/en/javascript">GeoIP2 JavaScript from MaxMind</a>.
                </li>
            </ul>
        </div>
    </div>
</footer>
<div class="keyboard-demo" style="cursor:pointer;">
    <img src="<?php echo URL; ?>wp-content/themes/serpent/images/small-keyboard.png" alt="small_keyboard"/>
</div>
</div>
<div class="overlay">&nbsp;</div>
<div id="simplemodal-login-form" style="display:none">
    <form name="loginform"  action="<?php echo URL; ?>login/checkpoint/?auth=52793164770" method="post">
        <div class="title">Login</div>
        <div class="simplemodal-login-fields">
            <div class="cosmo-box submit-content warning medium login_req hidden">
                <span class="cosmo-ico"></span>
                You need to be logged in to submit content.
            </div>
            <div class="cosmo-box love warning medium login_req">
                <span class="cosmo-ico"></span>
                You need to be logged in to vote.
            </div>
            <div class="cosmo-box nsfw warning medium login_req hidden">
                <span class="cosmo-ico"></span>
                You need to be logged in to see this post.
            </div>
            <p>
                <label>Email Address<br/>
                    <input name="minter_email" type="text" class="user_login input" value="" size="20" tabindex="10"/></label>
            </p>
            <p>
                <label>Password<br/>
                    <input name="minter_password" type="password" class="user_pass input" value="" size="20" tabindex="20"/></label>
            </p>
            <p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" class="rememberme" value="forever" tabindex="90"/> Remember Me</label></p>
            <div class="fr">
                <p class="submit gray">
                    <input type="submit" name="wp-submit" value="Log In" tabindex="100"/>
                    <input type="hidden" name="testcookie" value="1"/>
                </p>
                <p class="submit red">
                    <input type="button" class="simplemodal-close" value="Cancel" tabindex="101"/>
                    <input type="hidden" name="redirect_to" value="index.html">
                </p>
            </div>
            <p class="nav"><a class="simplemodal-register" href="#">Register</a> | <a class="simplemodal-forgotpw" href="#" title="Password Lost and Found">Lost your password?</a>
            </p><div class="fb_connect modal_fb"> <div id="fb-root"></div>
                <fb:login-button scope="email" perms="email" width="200" onlogin="javascript:onLogin();">
                    Facebook </fb:login-button>
               
            </div></div>
        <div class="simplemodal-login-activity" style="display:none;"></div>
    </form>
   
    
</div>
<script async defer type='text/javascript' src='<?php echo URL; ?>wp-includes/js/jquery/ui/jquery.ui.core.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='<?php echo URL; ?>wp-includes/js/jquery/ui/jquery.ui.widget.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='<?php echo URL; ?>wp-includes/js/jquery/ui/jquery.ui.accordion.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.simplemodal330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var SimpleModalLoginL10n = {"shortcut": "true", "empty_username": "<strong>ERROR<\/strong>: The username field is empty.", "empty_password": "<strong>ERROR<\/strong>: The password field is empty.", "empty_email": "<strong>ERROR<\/strong>: The email field is empty.", "empty_all": "<strong>ERROR<\/strong>: All fields are required."};
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/default4b68.js?ver=1.0.4'></script>

<script type="text/javascript">
    (function() {
        var t = document.createElement('script');
        t.type = 'text/javascript';
        t.async = true;
        t.src = "//turnsocial.com/bar/c5267b535f2bd3f43b4c131eeb632afc.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
    })();
</script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-43667245-2', 'interivity.me');
    ga('send', 'pageview');

</script>
<script type="text/javascript">
window.google_analytics_uacct = "UA-43667245-1";
</script>
<!-- VisualDNA Audience Analytics Tag -->
<script type="text/javascript">
    (function() {
        var s, e;
        s = document.createElement("script");
        s.src = "//a1.vdna-assets.com/analytics.js";
        s.async = true;
        e = document.getElementsByTagName("head")[0];
        e.insertBefore(s, e.firstChild);
        this.VDNA = this.VDNA || {};
        this.VDNA.queue = this.VDNA.queue || [];
    })();

    VDNA.queue.push({
        apiKey: "interivity1379775141407",
        method: "reportPageView"
    });
</script>
<!-- End of VisualDNA Audience Analytics Tag -->
</body>

</html>
