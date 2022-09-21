<?php include('navbar.php') ?>

<section class="container">
    <div class="row">
        <div class="col-6">
            <input type="text" id="start" class="form-control" placeholder="Stating Point">
            <small class="form-text text-muted">Please Enter Your Stating Point.</small>
            <input type="text" id="end" class="form-control" placeholder="Destination">
            <small class="form-text text-muted">Please Enter Your Destination.</small>
            <button id="submit" class="btn btn-outline-primary btn-lg btn-block">Set Trip</button>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="box1" placeholder="please enter distance (KM)">
            <small class="form-text text-muted">Please Enter Number Of kilometers.</small>
            <!-- <input type="text" id="box2"><br /> -->

            <div class="input-group ">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Vehicles Type</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose Vehicle Type </option>
                    <option id="ac" value="500">Car     🚕</option>
                    <option id="nonAc" value="50">Van   🚐</option>
                    <option id="nonAc" value="50">Threewheel    🛺</option>
                </select>
            </div>
            <small class="form-text text-muted">Please Enter Your Vehicle Type.</small>
            <input type="text" id="+" class="form-control" placeholder="Total Amount Of Ride" disabled>
            <small class="form-text text-muted">Please be patient.</small>
            <input type="button" value="Get Price" onclick="calcSum()" class="btn btn-outline-dark btn-lg btn-block">
        </div>
    </div>


    <script>
        function calcSum() {
            let box1 = document.getElementById("box1").value;
            let ac = document.getElementById("ac").value;
            let sum = Number(box1) * Number(90) + Number(ac);

            document.getElementById("+").value = "RS" + "." + " " + sum + ".00";
        }
    </script>


    <hr>
    <br>
    <div id="map1">
        <h2>Direction Waiting...</h2>
    </div>

    <script>
        $(document).ready(function() {

            $("#submit").on("click", function(e) {

                let start = $("#start").val() + ",LK";
                let end = $("#end").val() + ",LK";

                if (start != "" && end != "" && start !== end) {

                    let iframe = `<iframe width="100%" height="400" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyB8Fj8TSzK3qnwj6QKjSSfx2nOT4AFBRIY&origin=${start}&destination=${end}&avoid=tolls|highways" allowfullscreen></iframe>`;

                    $("#map1").html(iframe);

                }

            })

        });
    </script>
</section>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Your Live Location 🗺️</h1>
        <p class="lead">Hello now your can check your location from here 😊! </p>
        <hr class="container">
    </div>
</div>

<div class="container">
    <div style="height:50vh; width:100%;" id="map"></div>

    <!-- leaflet js  -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Map initialization
        var map = L.map('map').setView([14.0860746, 100.608406], 5);

        //osm layer
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        if (!navigator.geolocation) {
            console.log("Your browser doesn't support geolocation feature!")
        } else {
            setInterval(() => {
                navigator.geolocation.getCurrentPosition(getPosition)
            }, 2000);
        }

        var marker, circle;

        function getPosition(position) {
            // console.log(position)
            var lat = position.coords.latitude
            var long = position.coords.longitude
            var accuracy = position.coords.accuracy

            if (marker) {
                map.removeLayer(marker)
            }

            if (circle) {
                map.removeLayer(circle)
            }

            marker = L.marker([lat, long])
            circle = L.circle([lat, long], {
                radius: accuracy
            })

            var featureGroup = L.featureGroup([marker, circle]).addTo(map)

            map.fitBounds(featureGroup.getBounds())

            console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy)
        }
    </script>
</div>
<?php include('footer.php') ?>