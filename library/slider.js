(function($){

    $.fn.jwSlider = function(options){
        var defaults = {
            speed : 1000,
            pause : 2000,
            transition : 'fade'
        },
        options = $.extend(defaults,options);
    
        this.each(function(){           
            var $this = $(this);
            
            $this.wrap('<div class="slider_wrap"/>');           
            $this.css({
                'width': '100%',
                'position': 'relative',
                'padding': 0
                
            });
            
            if(options.transition === 'slide'){
                    
                $this.children().css({
                    'float': 'left',
                    'list-style':'none'
                });
                
                $(".slider_wrap").css({
                    'width':$this.children().width(),
                    'overflow':'hidden',                    
                    'padding':0
                });
            }
            
            if(options.transition === "fade"){
                $this.children().css({
                    'width':$this.children().width(),
                    'position':'absolute',
                    'left':0                    
                });
                
                
                for(var i = $this.children().length - 1,y=0;i >= 0;i--,y++ ){
               //     $this.children().eq(y).css("z-index", i + 99999);
                }
                
                fade();
            }
            
            
            if(options.transition === "slide"){
                slide();
                
            }
                
            function fade(){
                
                setInterval(function(){
                    $this.children(":first").animate({'opacity':0},options.speed,function(){
                        $this.children(":first").css('opacity',1)
                            .css("z-index",$this.children(":last").css("z-index") -1 ).appendTo($this);
                    })
                }, options.pause);
            }
            
            
            function slide(){
                setInterval(function(){
                    $this.animate({'left':'-'+$this.parent().width()},options.speed,function(){
                        $this.css('left',0)
                            .children(":first").appendTo($this);
                    });
                }, options.pause);
                
            }
            
    });
  }
    
})(jQuery);
