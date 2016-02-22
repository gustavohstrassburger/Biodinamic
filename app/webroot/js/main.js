function initialize() {

    var mapCanvas = document.getElementById('map_canvas');
	
    var myLatlng = new google.maps.LatLng(-29.689855, -51.131849);
	
    var mapOptions = {
	
        zoom: 16,

        center: new google.maps.LatLng(-29.688065, -51.132085), 

        scrollwheel: false,

        styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]

    }
	
    var map = new google.maps.Map(map_canvas, mapOptions);
		
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: 'http://localhost/biodinamic/img/marker.png'
    });

    var contentString = '<p><b>BioDinamic Pilates e Fisioterapia</b><br/>Av. Nações Unidas, 2456, Sala 102A<br/>Novo Hamburgo</p>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });

    infowindow.open(map, marker);

}
  
google.maps.event.addDomListener(window, 'load', initialize);

$(window).load(function(){

    $('.flexslider').flexslider({
        controlNav: false,
    });
	
    (function ($){
        
        var handler = $('#tiles li');

        handler.wookmark({
            // Prepare layout options.
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#images'), // Optional, used for some extra CSS styling
            offset: 12, // Optional, the distance between grid items
            outerOffset: 10, // Optional, the distance to the containers border
            itemWidth: 260 // Optional, the width of a grid item
        });
	  
    })(jQuery);
		
	$('.fancybox-thumbs').fancybox({
	
            closeBtn  : false,
            nextClick : true,

            helpers : {
                title : {
                    type : 'inside'
                },
                overlay : {
                    css : {
                        'background' : 'rgba(238,238,238,0.85)'
                    }
                }
            }
	});
	
});