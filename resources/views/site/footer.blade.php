<footer id="footer" class="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget-newsletter widget widget-footer">
                        <h3 class="widget-title">About us</h3>
                        <div class="widget-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it .</p>
                        </div>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Widget :: About us -->
                </div>
                <div class="col-md-5">
                    <!-- Widget :: Contact us -->
                    <div class="latest-posts-widget widget widget-footer">
                        <h3 class="widget-title">Contact us</h3>
                        <div class="widget-content">
                            <form id="contact-form" class="contact" name="contact-form" method="post" enctype="multipart/form-data" action="assets/mail/mail.php">
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control name-field" required="required" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="send message" name="submit" id="submitButton" class="btn btn-lg contact-btn" title="Submit Your Message!">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Widget :: Contact us -->
                </div>
                <div class="col-md-3">
                    <!-- Widget :: Address Info -->
                    <div class="contacts-widget widget widget-footer">
                        <h3 class="widget-title">Address</h3>
                        <div class="widget-content">
                            <ul class="contacts-info-list">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <div class="info-item"> <span>Address -</span>
                                        <br> 4220, Chittagong, Bangladesh
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i>
                                    <div class="info-item"> <span>Phone -</span>
                                        <br> (+880)1676966260
                                    </div>
                                </li>
                                <li> <i class="fa fa-envelope"></i>
                                    <div class="info-item"> <span>Email -</span>
                                        <br> <a href="#">info@yourdomain.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Widget :: Address Info -->
                </div>
            </div>
        </div>
    </div>

    <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create New Account</h4>
                </div>
                <div class="modal-body" style="">
                    <form id="frmRegistration">
                        <div class="form-group">
                            <label for="register-email">First Name</label>
                            <input type="text" class="form-control" style="background-color:#fff !important;" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="register-email">Last Name</label>
                            <input name="last_name" type="text" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <div class="form-group">
                            <label for="register-email">Profession</label>
                            <input name="profession" type="text" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <div class="form-group">
                            <label for="register-email">National Document ID Number</label>
                            <input name="dni" type="text" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <div class="form-group">
                            <label for="register-email">National social security number</label>
                            <input name="cuil" type="text" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <div class="form-group">
                            <label for="register-email">Email Address</label>
                            <input name="email" type="email" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <div class="form-group">
                            <label for="register-email">Password</label>
                            <input name="password" type="password" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <div class="form-group">
                            <label for="register-email">Re-type your password</label>
                            <input name="cpassword" type="password" class="form-control" style="background-color:#fff !important;" >
                        </div>
                        <input type="hidden" value="" name="token">
                        <button type="submit" class="btn btn-primary" >Register <i class="fa fa-spinner fa-spin fa-fw lodding_spinner" style="display:none;"></i></button>
                    </form>
                    <!--<small>Already have an account? </small><a href="#" class="login_modal" >Login </a>-->
                </div>
            </div>
        </div>
    </div>
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login Form</h4>
                </div>
                <div class="modal-body">
                    <form id="userLoginForm">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" style="background-color:#fff !important;" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password"  class="form-control" style="background-color:#fff !important;" placeholder="Password">
                        </div>
                        <input type="hidden" value="" name="token">
                        <button type="submit" class="btn btn-primary">Login <i class="fa fa-spinner fa-spin fa-fw lodding_spinner" style="display:none;"></i></button>
                    </form>
                    <br>
                    <a href="#" class="forgot-pass">Forgot Password?</a>
                    <!--<br><small>Do not have an account? </small><a href="#" class="register_modal">Signup</a>-->
                </div>
            </div>
        </div>
    </div>
    <div id="forgotPasswordModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reset Your Password</h4>
                </div>
                <div class="modal-body">
                    <form id="resetPassword">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" style="background-color:#fff !important;" placeholder="Enter email">
                        </div>
                        <input type="hidden" value="}" name="token">
                        <button type="submit" class="btn btn-primary">Reset <i class="fa fa-spinner fa-spin fa-fw lodding_spinner" style="display:none;"></i></button>
                    </form>
                    <br>
                    <!--<small>Do not have an account? </small><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"> Copyright @ 2017 Power by <a href="{{url('/')}}">Jubilaciones</a> All Rihgt Reserved.</div>
            </div>
        </div>
    </div>
</footer>