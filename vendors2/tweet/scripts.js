jQuery(function($){
    var FEED = window.FEED||{};
    
    FEED.TWEET= function(){
        $('.tweets_feed').twittie({
            template:
                '<div class="twitterIcon row m0"><i class="fa fa-twitter"></i></div>'
                +'<div class="tweet_text row m0">'+'{{tweet}}'+'</div>'
                /*+'<div class="tweet_user row m0">'                    
                    + '{{screen_name}}'
                +'</div>'
                +'<div class="tweet_time">'+'<a href="{{url}}">{{date}}</a>'+ '</div>'*/
        },
        function(){
            $(".tweets_feed").owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                items:1,
                dots:false,
                lazyLoad: true,
                autoplay: true,
                navText: [ '<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>' ]
            })
        })
    }
    
    $(document).ready(function(){FEED.TWEET();})
})