(function($){$.fn.extend({saccordion:function(options){var defaults={saccordion:'true',speed:300,closedSign:'',openedSign:''};var opts=$.extend(defaults,options);var $this=$(this);$this.find("li").each(function(){if($(this).find("ul").size()!=0){$(this).find("ul:first").parent().prepend("<div class='mobile-menu-toggler mclosed'>"+ opts.closedSign+"</div>");}});$this.find("li.active").each(function(){$(this).parents("ul").slideDown(opts.speed);$(this).parents("ul").parent("li").find("div:first").html(opts.openedSign);});$this.find("li div").click(function(){if($(this).parent().find("ul").size()!=0){if(opts.saccordion){if(!$(this).parent().find("ul").is(':visible')){parents=$(this).parent().parents("ul");visible=$this.find("ul:visible");visible.each(function(visibleIndex){var close=true;parents.each(function(parentIndex){if(parents[parentIndex]==visible[visibleIndex]){close=false;return false;}});if(close){if($(this).parent().find("ul")!=visible[visibleIndex]){$(visible[visibleIndex]).slideUp(opts.speed,function(){$(this).parent("li").find("div:first").html(opts.closedSign);});}}});}}
if($(this).parent().find("ul:first").is(":visible")){$(this).parent().find("ul:first").slideUp(opts.speed,function(){$(this).parent("li").find("div:first").delay(opts.speed).html(opts.closedSign);$(this).parent("li").find("div:first").toggleClass('mclosed');});}else{$(this).parent().find("ul:first").slideDown(opts.speed,function(){$(this).parent("li").find("div:first").delay(opts.speed).html(opts.openedSign);$(this).parent("li").find("div:first").toggleClass('mclosed');});}}});}});})(jQuery);