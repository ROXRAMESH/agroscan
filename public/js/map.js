let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 6.707744,
            lng: 80.037849
        },
        zoom: 19,
    });


  
    // for(var i = 0; i<$markers; i++){

        var marker = new google.maps.Marker({
            position: {
                lat: 6.707749,
                lng: 80.038311
            },
            map: map,
            draggable: true
         });

         var marker = new google.maps.Marker({
            position: {
                lat: 6.707636,
                lng: 80.037560
            },
            map: map,
            draggable: true
         });

         var marker = new google.maps.Marker({
            position: {
                lat: 6.707922,
                lng: 80.038251
            },
            map: map,
            draggable: true
         });

         var marker = new google.maps.Marker({
            position: {
                lat: 6.708079,
                lng: 80.037789
            },
            map: map,
            draggable: true
         });
 
    // }

}

// map = new google.maps.Map(document.getElementById('map'), {
//     center: { lat: -34.397, lng: 150.644 },
//     zoom: 8,
//     mapId: 'MAP_ID'
// });

function get(id,id2){
    var id = id;
    var id2,id2;
    // alert(id);
    // alert(id2);

    // //  for(var i = 0; i<$markers; i++){

        var marker = new google.maps.Marker({
            position: {
                lat: id,
                lng: id2
            },
            map: map,
            draggable: true
         });

         
    // // }
}


function m() {
    // var x = x;

    // alert(x);
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // var objn = JSON.parse(text);
            // alert(text);
            // var d = document.getElementById("map");
            // d.innerHTML = text;
        }
    }

    r.open("GET", "test", true);
    r.send();
}

function sendID(id){
    var id = id;
    // alert(id);
    var m = document.getElementById("sendpassword");
    bm = new bootstrap.Modal(m);
    bm.show();

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // var objn = JSON.parse(text);
            // alert(text);
            // var d = document.getElementById("map");
            // d.innerHTML = text;
        }
    }

    r.open("GET", "test?i=" + id, true);
    r.send();
}