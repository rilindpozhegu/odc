    	// Testimonials

    	$(document).ready(function() {
            $("#owl-demo0").owlCarousel({
                autoPlay: 4000,
                items: 1,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });


        // Lastest news

        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                autoPlay: 3500,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });



        // Lastest From Galery
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3500,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });


// Maps

              function initMap() {
                var uluru = {lat: 25.0927909, lng: 55.1356495};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 12,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }