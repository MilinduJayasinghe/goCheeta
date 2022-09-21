<?php include 'navbar.php';
$response = isset($_GET['response']) ? $_GET['response'] : '';
?>


<section class="container sec1">
    <div class="row">
        <div class="col-6 col-md-6 col-sm-12">
            <h1><?php echo $response; ?></h1>
            <h1 style="font-size:3.5rem;margin:30% 0 5% 0;">Always the ride you want</h1>
            <p>Request a ride, hop in, and relax.</p>
            <button style="margin-top:1rem;">
                Sign Up To Ride
            </button>
        </div>
        <div class="col-6 col-md-6 col-sm-12"><img style=" border-radius: 10%;" src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_496,h_592/v1535561382/assets/26/1f9990-25f7-486d-aa25-1a7bef309777/original/D_Rider_Header_Global2x.png" alt=""></div>
    </div>
</section>
<main>
    <hr>
    <section class="container">
        <div class="row">
            <div class="col-6 my-5">
                <p>
                    Where it all began! GoCheeta Ride-Hailing is a seamless transport solution that arrives within minutes to wherever you are, featuring the best
                    rates and the largest fleet of vehicles in Sri Lanka including Tuk-Tuks, Flex, Minis, Cars, Minivans, and Vans offering you comfort and safety throughout the journey.
                </p>
            </div>
            <div class="col-6">
                <h2>Benefits</h2>
                <ul>
                    <li>Simultaneous multiple ride bookings</li>
                    <li>Live location share</li>
                    <li>In-app SOS function</li>
                    <li>Schedule and book later function</li>
                    <li>Multiple drops</li>
                    <li>In-app feedback/complaint system</li>
                    <li>24x7 customer support</li>
                    <li>Earn PickMe rewards and climb up the loyalty tier for better offers</li>
                </ul>
            </div>
        </div>
    </section>
    <hr>
    <section class="container">
        <div class="row">
            <h1>
                Why use the GoCheeta app?
            </h1>
            <img src="https://www.uber-assets.com/image/upload/q_auto:eco,c_fill,w_1152,h_270/v1536163144/assets/27/d1f66e-c9c5-455a-b912-234700f4c0d8/original/whyRideWithUs_desktop.svg" alt="">
        </div>
    </section>
    <hr>
    <section class="container options">
        <h1>Know Your Options</h1>
        <div class="row">
            <button>Cars</button>
            <button>vans</button>
            <button>ThreeWheels</button>
        </div>
    </section>
    <hr>
    <section class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img class="img-trans" src="https://www.uber-assets.com/image/upload/q_auto:eco,c_fill,w_558,h_372/v1600423778/assets/5a/eb49b9-5a81-41fd-92b5-99a5cb8900ef/original/womanWithPhone_03.svg" alt="">
            </div>
            <div class="col-4">
                <h1 style="text-align:left;">Ways people move around the country</h1>
                <br>
                <p>
                    The GoCheeta app gives you the power to get where you want to go with access to different types of rides across more than 6 cities.
                </p>
            </div>
            <div class="col-2">

            </div>
        </div>
    </section>
    <hr>
    <section class="container">
        <div class="row">
            <div class="col">
                <img style=" border-radius: 10%;" src="https://pickme.lk/themes/pickme/assets/images/home/options/Ride.jpg" class="col-10">
            </div>
            <div class="col-lg-6 positon:">
                <h2>Ride</h2>
                <br>
                <p>
                    GoCheeta Ride-Hailing includes the largest fleet of vehicles in Sri Lanka offering both on-demand and
                    pre-booking features at the best rates, including TUK-TUKs Flex, Minis, Cars, Minivans, and Vans
                    offering you comfort, convenience and safety, covering the entire island nation.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php' ?>