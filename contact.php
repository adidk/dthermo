<?php include('template/header.php') ?>

<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <h2 class="text-center">CONTACT</h2>
        </div>
    </div>
</div>

<section id="defaultsections">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <i class="fa fa-fw fa-map-marker-alt text-size-16"></i><br>
                <h4>ADDRESS</h4>
                <a href="https://goo.gl/maps/khWzB1srcgAgpHGR8" class="text-size-23 link-custom-2">PT. dThermo Industrial
                    <br>Jl. Semingkir No. 22
                    Rejasari, Purwokerto Barat, PURWOKERTO 53134
                </a>
            </div>
            <div class="col-md-3 text-center">
                <i class="fa fa-fw fa-envelope text-size-16"></i><br>
                <h4>EMAIL</h4>
                <a href="mailto: sales@dthermo.com" class="text-size-23 link-custom-2">
                    sales@dthermo.com</a><br>
            </div>
            <div class="col-md-3 text-center">
                <i class="fa fa-fw fa-phone text-size-16"></i><br>
                <h4>PHONE</h4>
                <a href="tel: 62-281-5567777" class="text-size-23 link-custom-2">
                    +62-281-5567777</a><br>
            </div>
            <div class="col-md-3 text-center">
                <i class="fab fa-fw fa-instagram text-size-16"></i><br>
                <h4>Media</h4>
                <a href="#" class="text-size-23 link-custom-2">
                    @dthermoindustrial</a><br>
            </div>
        </div>
    </div>
</section>

<section id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>You can also contact us using the form below:</h4>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Name" style="height: 50px;">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" style="height: 50px;">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Phone" style="height: 50px;">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include('template/footer.php') ?>