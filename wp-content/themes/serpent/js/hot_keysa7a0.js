var h2top=0;function go_to_next_post(){jQuery(function(){if(jQuery('nav.hotkeys-meta span').length){jQuery('nav.hotkeys-meta span').each(function(){if(jQuery(this).hasClass('nav-next')){if(jQuery('a',this).length){document.location.href=jQuery('a',this).attr('href');return 0;}}});}else{scrollTop=jQuery(window).scrollTop();jQuery('#main .post').each(function(i,h2){h2top=jQuery(h2).offset().top;if(scrollTop<h2top- 65){jQuery.scrollTo(h2top- 55,400);return false;}});}});}
function go_to_prev_post(){jQuery(function(){if(jQuery('nav.hotkeys-meta span').length){jQuery('nav.hotkeys-meta span').each(function(){if(jQuery(this).hasClass('nav-previous')){if(jQuery('a',this).length){document.location.href=jQuery('a',this).attr('href');return 0;}}});}else{jQuery.fn.reverse=function(){return this.pushStack(this.get().reverse(),arguments);};scrollTop=jQuery(window).scrollTop();jQuery('.post').reverse().each(function(i,h2){h2top=jQuery(h2).offset().top;if(scrollTop>h2top- 55){jQuery.scrollTo(h2top-55,400);return false;}});}});}
function go_to_comments(){var scrollTop=jQuery(window).scrollTop();var comments=jQuery('#comments').offset().top;if(scrollTop<comments- 50||scrollTop>comments- 50){jQuery.scrollTo(comments- 50,400);return false;}
return false;}
function open_next_post_comments(){scrollTop=jQuery(window).scrollTop();jQuery('#main .post').each(function(i,h3){h2top=jQuery(h3).offset().top;if(scrollTop<h2top){if(jQuery(h3).find('h2 a , h1 a').hasClass('simplemodal-nsfw')){jQuery(h3).find('h2 a , h1 a').click();}else{var permalink=(jQuery(h3).find('h2 a , h1 a').attr('href'));if(jQuery('#comments').length>0){go_to_comments();return false;}
if(permalink){window.location.href=permalink+'#comments';}}
return false;}});}
function open_next_post(){scrollTop=jQuery(window).scrollTop();jQuery('#main .post').each(function(i,h3){h2top=jQuery(h3).offset().top;if(scrollTop<h2top){if(jQuery(h3).find('h2 a , h1 a').hasClass('simplemodal-nsfw')){jQuery(h3).find('h2 a , h1 a').click();}else{var permalink=(jQuery(h3).find('h2 a , h1 a').attr('href'));if(permalink){window.location.href=permalink;}}
return false;}});}
function like(){scrollTop=jQuery(window).scrollTop();jQuery('#main .post,.single h2.content-title, .single h1.entry-title').each(function(i,h2){h2top=jQuery(h2).offset().top;if(scrollTop<h2top-19){jQuery(this).find('span.set-like.voteaction').click();return false;}});}
function share(){scrollTop=jQuery(window).scrollTop();jQuery('#main .post').each(function(i,h2){h2top=jQuery(h2).offset().top;if(scrollTop<h2top-10){jQuery.scrollTo(h2top-30,800);return false;}});}
jQuery(document).ready(function(){jQuery(document).focus();jQuery(document).keyup(function(e){if(jQuery(e.target).is("textarea, input[type=text], input[type=password]"))return true;var forbiddenKeys=new Array('j','k','v','c','l','s','r');if(window.event)
{key=window.event.keyCode;if(window.event.ctrlKey)
isCtrl=true;else
isCtrl=false;}else{key=e.which;if(e.ctrlKey)
isCtrl=true;else
isCtrl=false;}
if(isCtrl)
{for(i=0;i<forbiddenkeys.length;i++)
{if(forbiddenKeys[i].toLowerCase()==String.fromCharCode(key).toLowerCase())
{return false;}}}
if(e.keyCode){key=e.keyCode;}else if(e.which){key=e.which;}
switch(key)
{case 74:if(jQuery('.hotkeys-meta.sticky-bar span.nav-next a').length>0){document.location.href=jQuery('.hotkeys-meta.sticky-bar span.nav-next a').attr('href');}else{go_to_next_post();}
jQuery(document).focus();break;case 75:if(jQuery('.hotkeys-meta.sticky-bar span.nav-previous a').length>0){document.location.href=jQuery('.hotkeys-meta.sticky-bar span.nav-previous a').attr('href');}else{go_to_prev_post();}
jQuery(document).focus();break;case 86:open_next_post();jQuery(document).focus();break;case 67:open_next_post_comments()
jQuery(document).focus();break;case 76:like();jQuery(document).focus();break;case 83:break;case 82:act.go_random();jQuery(document).focus();break;case 39:if(jQuery('.hotkeys-meta.sticky-bar span.nav-next a').attr('href')){document.location.href=jQuery('.hotkeys-meta.sticky-bar span.nav-next a').attr('href');}
jQuery(document).focus();break;case 37:if(jQuery('.hotkeys-meta.sticky-bar span.nav-previous a').attr('href')){document.location.href=jQuery('.hotkeys-meta.sticky-bar span.nav-previous a').attr('href');}
jQuery(document).focus();break;case 27:if(jQuery('#keyboard-container').length>0){jQuery('#big-keyboard').slideUp();}
jQuery(document).focus();break;}});jQuery('#keywords').unbind('keyup');jQuery(function(){jQuery('nav.hotkeys-meta.nav a').click(function(){if(jQuery(this).attr('href')=='#next'){go_to_next_post();jQuery(document).focus();}else{go_to_prev_post();jQuery(document).focus();}});});});