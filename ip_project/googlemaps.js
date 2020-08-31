function initMap() {
    var pune = {lat: 18.5204, lng: 73.8567};
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: pune
    });
}