<!DOCTYPE html>
<!-- Styles -->
<?php include_once("includes\styles.php"); ?>
<!-- Header Sesction -->
<?php include_once("includes\header.php"); ?>
<hr id="hr">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Categories Section -->
            <?php include_once("includes/categories.php");?>
        </div>
        <!-- Advertisement Slider -->
        <div class="col-md-9">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner mt-5" id="car">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="assets/images/camera-1.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="assets/images/camera-2.jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="assets/images/headphone.jpg"
                            alt="Third slide">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Product Section -->
<?php include_once("includes\products.php");?>
<div class="ok">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <h3 class="mt-5">Download app demo text</h3>
                <p>Get an amazing app to make your life easy</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/banner.avif"
                    class="mt-5" id="cool">
            </div>

        </div>
    </div>

</div>
<!-- Footer Section -->
<?php include_once("includes/footer.php"); ?>



<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header  bg-primary">
                <h5 class="modal-title text-light" id="userModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
    </div>

    <div id="login-form">
        <form id="login">
            <input type="text" placeholder="Enter email or username"/>
            <input type="password" placeholder="Enter password"/>
            <button type="button" class="btn login">login</button>
            <p><a href="javascript:void(0)">Forgotten account</a></p>
            <hr/>
           
        </form>
    </div>

    <div id="signup-form">
        <form id="registration">
            <input type="email" name="email" id="email" placeholder="Enter your email"/>
            <input type="text" name="uname" id="uname" placeholder="Choose username"/>
            <input type="password" name="password" id="password" placeholder="Create password"/>
            <button type="submit" class="btn signup">create account</button>
            <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
            <hr/>
        </form>
    </div>

            </div>
            </div>
            

        </div>
    </div>
</div>


<!-- Scripts -->
<?php include_once("includes\scripts.php"); ?>

</html>