<?php include_once('./includes/header.php') ?>
<section class="login_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="container__form container--signup">
                    <form action="#" class="form" id="form1">
                        <h2 class="form__title mb-4">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree to terms's & Condition if Use and Privacy Notes
                            </label>
                        </div>
                        <button class="btn bttn btn-primary w-50 mt-3">Login</button>
                        <p class="text-center mt-2"><a href="forgot-password.php" class="text-primary text-decoration-none">Forgot your password?</a></p>
                        <p class="text-center">Don't have an account yet? <a href="signup.php" class="text-primary text-decoration-none">Signup</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once('./includes/footer.php') ?>