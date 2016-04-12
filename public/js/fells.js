/**
 * Created by Bielecki on 4/12/2016.
 */
function initMap() {
    var fells = new google.maps.Map(document.getElementById('fells_map'), {
        center: {lat: 42.451911, lng: -71.101838},
        zoom: 13
    });
    var sheepsFold = new google.maps.Marker({
        position: {lat: 42.4515753, lng: -71.1048641},
        map: fells,
        title: 'Sheepsfold Entrance'
    });
}