function myMap() {

    var mapCanvas = document.getElementById("map");

    var myCenter = new google.maps.LatLng(13.764989, 100.348152);

    var mapOptions = { center: myCenter, zoom: 17 };

    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({

        position: myCenter,

        icon: "img/allgreen-locationpint.png",

        animation: google.maps.Animation.BOUNCE

    });

    marker.setMap(map);

}