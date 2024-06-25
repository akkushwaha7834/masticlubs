<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
    </div>
    <div class="row gy-3">
      <div class="col-12 footer_menu_list">
        <ul class="footer-menu list-unstyled mb-0">
          <li>
            <a href="./" class="text-decoration-none text-white">Home</a>
          </li>
          <span class=" text-white">|</span>
          <li>
            <a href="#" class="text-decoration-none text-white">Contact Us</a>
          </li>
          <span class=" text-white">|</span>
          <li>
            <a href="#" class="text-decoration-none text-white">Terms of Use Policy</a>
          </li>
          <span class=" text-white">|</span>
          <li>
            <a href="#" class="text-decoration-none text-white">Sitemap</a>
          </li>
          <span class=" text-white">|</span>
          <li>
            <a href="#" class="text-decoration-none text-white">Blog</a>
          </li>
        </ul>
      </div>
      <div class="col-12 text-center text-white">
        <div class="mb-2">Follow us:</div>
        <div class="d-flex gap-2 justify-content-center social-icons">
          <a href="" target="_blank">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a href="" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="" target="_blank">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
          <a href="" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="col-md-12">
        <p class="text-center text-white mb-0">Copyright &copy; <?= date('Y'); ?> All Rights Reserved by <a href="https://in.masticlubs.com/" class="text-white text-decoration-none">Masticlubs Network</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->
<!-- Modal On Page Load -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-body">
        <div class="pop_up_content text-center">
          <img src="images/hugs-love.gif" class="img-fluid text-center" width="30%" />
          <p class="warning-para">Please read the following warning before continuing</p>
          <p class="mt-4 px-5 year_para"><b>I am over 18 years old</b> and I accept the viewing of explicit texts and images intended for an <b>adult audience</b>.</p>
          <p class="tnc_class">I have read and accept the<br> <a href="/terms-and-conditions/" class="text-decoration-none text-primary">Terms and Conditions</a></p>
        </div>
      </div>
      <div class="modal-footer d-block text-center border-0 mb-3">
        <button type="button" class="btn bttn btn-primary border-0 mb-3 w-50" id="agreeBtn" style="">ACCEPT</button><br>
        <a href="./" rel="noopener nofollow" data-dismiss="modal" class="text-center text-primary text-decoration-none">Decline</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal On Page Load -->
<!-- Modal Search  -->
<div class="modal fade" id="buttonClickModal" tabindex="-1" aria-labelledby="buttonClickModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buttonClickModalLabel"><i class="fas fa-search text-clipped"></i> Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" name="Search">
          <div class="container">
            <div class="row gy-3">
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-select" id="service_category">
                    <option>Select Category</option>
                    <option value="Escorts">Escorts</option>
                    <option value="Male Escorts">Male Escorts</option>
                    <option value="Massage">Massage</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-select" id="service_state">
                    <option>Select State</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Goa">Goa</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-select" id="service_city">
                    <option>Select City</option>
                    <option value="Ghaziabad">Ghaziabad</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Buxar">Buxar</option>
                    <option value="Ambala">Ambala</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-select" id="service_area">
                    <option>Select Area</option>
                    <option value="Ghaziabad">Ghaziabad</option>
                    <option value="Lucknow">Lucknow</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn bttn btn-primary w-50 search_bttn" type="submit">Search</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search  -->

<!-- Modal Account  -->
<div class="modal fade" id="buttonClickModalSignup" tabindex="-1" aria-labelledby="buttonClickModalSignupLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buttonClickModalSignupLabel"><i class="fas fa-user text-clipped"></i> Get into Masticlubs!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" name="Search">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="gif_image d-flex justify-content-center">
                  <img src="images/hugs-love.gif" class="img-fluid text-center" width="30%" />
                </div>
              </div>
              <div class="col-md-12">
                <p class="text-center mt-2">Have an account yet? <br /><a href="login.php" class="btn bttn btn-primary w-50 mt-3 text-decoration-none">Login</a></p>
              </div>
              <div class="col-md-12  mb-2">
                <p class="text-center">Don't have an account yet? <br /> <a href="signup.php" class="btn bttn btn-primary w-50 mt-3 text-decoration-none">Signup</a></p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Acount  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fancybox.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>