<?php
    include "init.php";
?>


<section class="login__form mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="login__form-brand text-center">
                    <i class="fab fa-angular fa-5x"></i>
                </div>
                <h3 class="text-center my-4">Sign in to Jobify</h3>
                <form class="border bg-white p-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username Or Email address</label>
                        <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <div class="d-flex">
                            <label for="exampleInputPassword1">Password</label>
                            <a href="" class="ml-auto">Forgot password?</a>
                        </div>
                        <input type="password" class="form-control  rounded-0" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block  rounded-0 text-uppercase text-center">Sign In</button>
                </form>
                <div class="alert alert-light border mt-3 text-center  rounded-0" role="alert">
                    New to GitHub? <a href="">Create an account.</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    include $tpl . "footer.php";
?>