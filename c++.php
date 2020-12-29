<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="languag.css">
    <title>Document</title>
    <script src="jquery-1.10.2.min.js"></script>
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYmQqqoGa-vY_SfcRHFL63p074Lrg_7Gk&
    callback=initMap"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
#map{
    width: 250px;
    height: 250px;
}
</style>
<script type="text/javascript">
    var x=navigator.geolocation;
    x.getCurrentPosition(success,failure);
    function success(position){
        var mylat=position.coords.latitude;
        var mylong=position.coords.longitude;
        var coords= new google.maps.LatLang(mylat,mylong);
        var mapOption={
            zoom:9,
            center:coords,
            mapTypeId:google.maps.mapTypeId.ROADMAP
        }
        
        var map= new google.maps.Map(document.getElementById("map"),mapOption);
        var marker= new google.maps.Marker({
            map:map,
            position:coords
        });
    }
     function failure(){}
     </script>
<body>
    <header class="head">
        <ul>
            <li><a href="">logout</a></li>
            <li><a href="">user</a></li>
            <li><a href=""><i class="fa fa-user" style="font-size: 25px; ">
            </i></a></li>
        </ul>
    </header>
    <section>
        <div id="map"></div>
    </section>
</body>
</html>