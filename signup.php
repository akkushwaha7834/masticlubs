<?php include_once('./includes/header.php') ?>

<section class="signup_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="container__form container--signup">
                    <form action="#" class="form" id="form1">
                        <h2 class="form__title mb-4">Sign Up</h2>
                        <div class="row gy-3">
                            <div class="col-12">
                                <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Full Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input border-dark" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I agree to terms's & Condition if Use and Privacy&nbsp;Notes
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn bttn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                        <p class="text-center mt-2">Have an account yet? <a href="login.php" class="text-primary text-decoration-none">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once('./includes/footer.php') ?>