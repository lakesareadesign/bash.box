(function(a){a.fn.jFlow=function(m){var b=a.extend({},a.fn.jFlow.defaults,m),d=b.controller,f=b.slideWrapper,g=b.selectedWrapper,c=0,i,j=a(d).length,k=function(c,d){a(b.slides).children().css({overflow:"hidden"});a(b.slides+" iframe").hide().addClass("temp_hide");a(b.slides).animate({marginLeft:"-"+(d*a(b.slides).find(":first-child").width()+"px")},b.duration*c,b.easing,function(){a(b.slides).children().css({overflow:"hidden"});a(".temp_hide").show()})};a(this).find(d).each(function(e){a(this).click(function(){h();
a(b.slides).is(":not(:animated)")&&(a(d).removeClass(g),a(this).addClass(g),k(Math.abs(c-e),e),c=e)})});a(b.slides).before('<div id="'+f.substring(1,f.length)+'"></div>').appendTo(f);a(b.slides).find("div").each(function(){a(this).before('<div class="jFlowSlideContainer"></div>').appendTo(a(this).prev())});a(d).eq(c).addClass(g);var l=function(){a(f).css({position:"relative",width:b.width,height:b.height,overflow:"hidden"});a(b.slides).css({position:"relative",width:a(f).width()*a(d).length+"px",
height:a(f).height()+"px",overflow:"hidden"});a(b.slides).children().css({position:"relative",width:a(f).width()+"px",height:a(f).height()+"px","float":"left",overflow:"hidden"});a(b.slides).css({marginLeft:"-"+(c*a(b.slides).find(":eq(0)").width()+"px")})};l();a(window).resize(function(){l()});a(b.prev).click(function(){h();if(a(b.slides).is(":not(:animated)")){var e=1;c>0?c--:e=c=j-1;a(d).removeClass(g);k(e,c);a(d).eq(c).addClass(g)}});a(b.next).click(function(){h();if(a(b.slides).is(":not(:animated)")){var e=
1;c<j-1?c++:(c=0,e=j-1);a(d).removeClass(g);k(e,c);a(d).eq(c).addClass(g)}});var h=function(){b.auto==!0&&(i!=null&&clearInterval(i),i=setInterval(function(){a(b.next).click()},1E4))};h();a(b.slides).hover(function(){clearInterval(i)},function(){h()})};a.fn.jFlow.defaults={controller:"#myController",slideWrapper:"#mySlides",selectedWrapper:".jFlowSelected",easing:"swing",width:"100%",prev:".jFlowPrev",next:".jFlowNext"}})(jQuery);