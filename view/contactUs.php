<?php include('navbar.php') ?>
<style>
    .b1{
        letter-spacing:0.05rem;
    }
    .b1:hover{
        font-size: 1.05rem;
        color: blue;
        transform: translateY(-0.05em);
    }
</style>
<section class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-6">
            <h1>
                Hotlines
            </h1>
            <table style="width:150%;">
                <tr>
                    <td>General Inquiries</td>
                    <td>Business Inquiries</td>
                </tr>
                <tr>
                    <td>+94117433433</td>
                    <td>+94114507500</td>
                </tr>
                <tr>
                    <td>Careers</td>
                    <td>Inquiries on Affiliations</td>
                </tr>
                <tr>
                    <td>+94117433433</td>
                    <td>+94114507500</td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <h1>Get in touch</h1>
            <p>We would love to hear from you. Get in touch with us by email.</p>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-secondary btn-md ">Send</button>
            </form>
        </div>
    </div>
</section>

<section class="container-fluid mt-3" style="background-color: #EEEEEE;padding:4rem;">
    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <h2>Our Branches</h2>
                <p class="b1">GoCheeta Nugegoda branch</p>
                <p class="b1">GoCheeta Galle branch</p>
                <p class="b1">GoCheeta Kandy branch</p>
                <p class="b1">GoCheeta Gampaha branch</p>
                <p class="b1">GoCheeta jaffna branch</p>
                <p class="b1">GoCheeta Kurunagela branch</p>
            </div>
            <div class="col-6">
                <h2>Agents</h2>
                <p class="b1">Nugegoda agent</p>
                <p class="b1">Galle agent</p>
                <p class="b1">Kandy agent</p>
                <p class="b1">Gampaha agent</p>
                <p class="b1">jaffna agent</p>
                <p class="b1">Kurunagela agent</p>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>