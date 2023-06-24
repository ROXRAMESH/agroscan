<?php

// $z = $_GET["i"];

// echo $z;

// echo "Success";

// $dbms = new mysqli("localhost", "root", "0763649600Pp", "loopweb_agroscan", "3306");
// $q = "SELECT * FROM scan_input;";
// $resultset = $dbms->query($q);
// $r = $resultset->num_rows;
// for ($i = 0; $i < $r; $i++) {
//     $d = $resultset->fetch_assoc();

//     $l1 = $d["location1"];
//     $l2 = $d["location2"];


?>
{{-- 
<script>
     var marker = new google.maps.Marker({
            position: {
                lat: $l1,
                lng: $l2
            },
            map: map,
            draggable: true
         });
</script> --}}

<?php

        // }
?>

@foreach ($markers as $marker)

@loc1 = {{$marker->location1}}
@loc2 = {{$marker->location2}}

@array['location1'] = @loc1;
@array['location2'] = @loc1;

json_encode(@array);
{{-- <tr>
    <td class="d-none">{{$marker->location1}}</td>
    <td class="d-none">{{$marker->location2}}</td>
</tr> --}}

@endforeach
<?php
// $array['location1'] = $loc1;
// $array['location2'] = $loc2;

// echo json_encode($array);

?>