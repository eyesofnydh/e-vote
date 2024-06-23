<?php
 session_start();

?>
<a?php
include('routes/header.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free PHP Project for Download">
    <meta name="author" content="Online Voting System">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
<!-- Required meta tags -->
  
    <title>Online Voting System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
    <link rel="stylesheet" href="resources/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/css/stylesheet.css">
    <script src="resources/Jquery/jquery-3.5.1.js"></script>
    <script src="resources/Bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/js/sweetalert.min.js"></script>

    <link rel = "icon" href = "assets_1/images/logo.jpg" 
        type = "image/x-icon">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets_1/css/fontawesome.css">
    <link rel="stylesheet" href="assets_1/css/tooplate-main.css">
    <link rel="stylesheet" href="assets_1/css/owl.css">
    <style>
        @media only screen and (max-width: 600px) {
          .display-in-mobile 
          {
            display:block!important;
          }
        }
    </style>
  </head>

  <body>

  <div class="sequence">
        <div class="seq-preloader">
            <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator">
                <g fill="#F96D38">
                    <path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/>
                    <path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/>
                    <path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/>
                </g>
            </svg>
        </div>
    </div>

    <div class="logo" style="background-color:black;height:100px">
        <h1 style="color:white;font-size:16px;letter-spacing:3px"><img src="assets_1/images/vote.png" style="height:40px;width:40px"><br>E - Vote</h1>
        <h2 style="margin:0px;padding:0px;background-color:black;"><img src="assets_1/images/vote.png" style="height:40px;width:40px"></h2>
    </div>
    <nav>
        <ul>
            <li><a href="#1"><img src="assets_1/images/icon-1.png" alt=""> <em>Homepage</em></a></li>
            <li><a href="#2"><img src="assets_1/images/icon-2.png" alt=""> <em>About Us</em></a></li>
            <li><a href="#3"><img src="assets_1/images/icon-3.png" alt=""> <em>Voting History</em></a></li>
            <li><a href="#4"><img src="assets_1/images/icon-4.png" alt=""> <em>Contact Us</em></a></li>
        </ul>
    </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div id="slider-wrapper">
                <div id="image-slider">
                  <ul>
                    <li class="active-img">
                        <p class="display-in-mobile" style="display:none"><br><br><br><br></p>
                        <!-- < style="color:white;font-size:16px;letter-spacing:3px"><img src="assets_1/images/vote.png" style="height:40px;width:40px"><br>E - Vote -->
                    <a href="admin.php" style="text-decoration:none;"><h5 style="text-align:right;padding:20px;color:white"><img src="assets_1/images/man.png" style="height:40px;width:40px;">Admin Login </a> </h5>
                        <div class="slide"> 
            


<div id="bodySection">
    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-md-7 text-center pb-3">
            <h3 >Welcome to Online Voting</h3><br>
            <div id="getData">
            </div>
            </div>
            <div class="col-md-5 text-center">
                <div id="loginSection" class="text-center">
                    <h4><i class="fa fa-user-circle fa-3x" style="color:#27ae60"></i></h4>
                    <form>
                        <div class="form-row py-1 mx-4">
                            <div class="form-group col-md-12">
                            <input type="text" id="mobile" class="form-control" placeholder="Mobile No">
                            </div>
                        </div>
                        <div class="form-row pt-1 mx-4">
                            <div class="form-group col-md-12">
                            <input id="pass" type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            Forget password? <a href="routes/forget_pass.php">Click here</a>
                            </div>
                        </div>

                        
                    
                        <div class="form-row py-1 mx-4">
                            <div class="form-group col-md-12">
                            <input type="button" onclick="loginFun()" id="loginbtn" class="form-control btn btn-success" value="Login">
                            </div>
                        </div>
                        <div class="form-row py-1">
                            <div class="form-group col-md-12">
                                <h5>Not registered? <a href="routes/register.php">Register here</a></h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row py-1" id="pArea">
        </div>
    </div>
</div>
     
 </div> 
                      <div class="slide-caption">
                       <!-- <h2>Online<br>Voting System</h2> -->

                      </div>
                    </li>
                    <li>
                      <div class="slide-caption">
                        <!-- <h6>Latest One</h6> -->
                        <h2>E - Vote</h2>
                      </div>
                    </li>
                    <li>
                      <div class="slide-caption">
                        <h6>New Update With</h6>
                        <h2>Smart<br>Devices</h2>
                      </div>
                    </li>                      
                  </ul>
                </div>
                <div id="thumbnail">
                  <ul>
                    <li class="active"><img src="assets_1/images/.jpg" alt="Earth" /></li>
                    <li><img src="assets_1/images/.jpg" alt="Meeting" /></li>
                    <li><img src="assets_1/images/icon-1.png" alt="Smart" /></li>         
                  </ul>
                </div>
              </div>
        </div>
        <div class="slide" id="2">
            <div class="content second-content">
                <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'><span class='fa fa-desktop'></span></a></li>
                    <li><a href='#tabs-2'><span class='fa fa-users'></span></a></li>
                    <li><a href='#tabs-3'><span class='fa fa-mobile'></span></a></li>
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <h2>What We Offer?</h2>
                      <span>Online Voting System</span>
                      <ol>
    <li>Easy Voting: You can vote from anywhere with an internet connection, so no need to go to a specific place.</li>
    <li>Safe and Fair: It's designed to keep your vote secure and prevent cheating.</li>
    <li>Quick Results: You get to see the results right away once voting is done.</li>
    <li>Customized Options: You can choose your language and sometimes even how you want to vote.</li>
    <li>Help When Needed: If you have any questions or problems, there are people to assist you.</li>
                    </ol>


                      <!--<p>Aenean non suscipit risus. Nam mattis, ipsum ac aliquet dignissim, eros justo tempor dolor, rutrum feugiat nunc mauris et elit. Mauris sem odio, accumsan vel sem sed, aliquam convallis dui. Aenean et commodo est.</p>-->
                    </article>
                    <article id='tabs-2'>
                      <h2>How To Use?</h2>
                      
                      <ol>
    <li>Sign Up: Create an account if you haven't already. Provide your details like name and email.</li>
    <li>Log In: Use your username/email and password to log into the voting system.</li>
    <li>Find the Election: Look for the election you want to vote in. It will be listed on the voting panel,you may need to verify your email address or complete any additional authentication steps.</li>
    <li>Vote: Click on the election to access the ballot. Choose your preferred candidates or options.</li>
    <li>Review: Before you submit, double-check your choices to make sure they're correct.</li>
    <li>Submit: Hit the submit button to cast your vote.</li>
    <li>Confirmation: You may receive a confirmation message once your vote is submitted. Keep note of any confirmation numbers.</li>
    <li>Logout: Don't forget to log out when you're done voting to keep your account secure.</li>
</ol>

                      <!--<p>Quisque blandit purus orci, et cursus ante porttitor in. Curabitur eleifend turpis id diam ultricies hendrerit. Donec et lectus vitae justo porta molestie.</p>-->
                    </article>
                    <article id='tabs-3'>
                      <h2>Who We Are?</h2>
                      <span></span>
                      <p>the admins in an online voting system are the people who manage and run the platform. They make sure everything works smoothly, from setting up elections to ensuring security and helping users if they have any questions or problems. They're like the organizers who make sure the voting process is fair, secure, and accessible to everyone.</p> 
                      <!--<p>Here you can download various PHP Projects, Email Templates and HTML Templates free according to your needs.</p>-->
                    </article>
                  </section>
                </div>
            </div>
        </div>
        <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            <div class="col-md-12">
                                <div class="featured-item"> 
                                	<a href=""><img src="assets_1/images/bcd.jpg" alt=""></a>
                                    <div class="down-content">
                                        <h4>Feb 2004 NEWS</h4>
                                        <!-- <a href="https://www.sec.kerala.gov.in/public/onser/trend" style="text-decoration:none;">click here -->
                                        <h6><a href="https://www.elections.in/parliamentary-constituencies/2004-election-results.html" style="text-decoration:none;">click here</h6></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <a href=""><img src="assets_1/images/abc.jpg" alt=""></a>
                                    <div class="down-content">
                                        <h4> ELECTION 2016</h4>
                                        <h6><a href="https://www.sec.kerala.gov.in/public/onser/trend" style="text-decoration:none;">click here</h6></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/gcd.jpg" alt="">
                                    <div class="down-content">
                                        <h4>  ELECTION 2019</h4>
                                        <h6><a href="https://www.elections.in/indian-general-election/2019/" style="text-decoration:none;">click here</h6></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/yyy.jpg" alt="">
                                    <div class="down-content">
                                        <h4>Jan 2019 Winner</h4>
                                        <h6><a href="https://www.sec.kerala.gov.in/public/onser/trend" style="text-decoration:none;">click here</h6></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/online_vote.png" alt="">
                                    <div class="down-content">
                                        <h4>2020 </h4>
                                        <h6><a href="https://www.sec.kerala.gov.in/public/onser/trend" style="text-decoration:none;">click here</h6></a>
                                        <!-- <h6>Congratulations...!</h6> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/b.jpg" alt="">
                                    <div class="down-content">
                                        <h4>2021 </h4>
                                        <h6><a href="https://www.sec.kerala.gov.in/public/onser/trend" style="text-decoration:none;">click here</h6></a>
                                        <!-- <h6>Congratulations...!</h6> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/bcd.jpg" alt="">
                                    <div class="down-content">
                                        <h4>2022 </h4>
                                        <h6><a href="https://www.sec.kerala.gov.in/public/onser/trend" style="text-decoration:none;">click here</h6></a>
                                        <!-- <h6>Congratulations...!</h6> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/item-08.jpg" alt="">
                                    <div class="down-content">
                                        <h4>Curabitur sed 8</h4>
                                        <h6>$95.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/item-09.jpg" alt="">
                                    <div class="down-content">
                                        <h4>Curabitur sed 10</h4>
                                        <h6>$105.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/item-10.jpg" alt="">
                                    <div class="down-content">
                                        <h4>Curabitur sed 12</h4>
                                        <h6>$115.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/item-11.jpg" alt="">
                                    <div class="down-content">
                                        <h4>Curabitur sed 14</h4>
                                        <h6>$125.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="featured-item">
                                    <img src="assets_1/images/item-12.jpg" alt="">
                                    <div class="down-content">
                                        <h4>Curabitur sed 16</h4>
                                        <h6>$135.00</h6>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-md-12">
                            <h2>Contact Us</h2>
                          </div>
                          <div class="col-md-11">
                                        <h4>contact no:0477 990067</h4>
                                        <h4>Email : onlinevotingsystem2@gmail.com</h4>
                                        <h4>-----------------------------------------</h4>
                                    </div>

                          <div class="col-md-6">
                            <fieldset>
                              <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6">
                            <fieldset>
                              <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12">
                            <fieldset>
                              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-md-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="button">Send Now</button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="slide" id="5"> 
            <div class="content fourth-content" id="login">
                <div class="container-fluid">
                    <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="row">
                          <div class="col-md-12">
                            <h2><a href="index.php">login</a></h2>
                            <h2><a href="routes/register.php">Register</a></h2>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 </div> 


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets_1/js/owl.js"></script>
    <script src="assets_1/js/accordations.js"></script>
    <script src="assets_1/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // navigation click actions 
            $('.scroll-link').on('click', function(event){
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');         
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed){
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({scrollTop:targetOffset}, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }
        
    $(document).ready(function(){
        getData();
    });

    function getData(){
        $.ajax({
            url : 'api/api.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 14
            }),
            success : function(data){
                $("#getData").html('<img src="uploads/eci-logo-white.svg" style="border-radius:10px" height="200" width="300"><br><br><h5 id="titleText" color="#000">'+data.text+'</h5>');
                
            }
            
        });
    }

    function loginFun(){
        var mobile = $("#mobile").val();
        var pass = $("#pass").val();

        $.ajax({
            url : 'api/api.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 1,
                mobile : mobile,
                pass : pass,
            }),
            success : function(data){
                if(data==0){
                    swal({
                            title: "Invalid Credentials!",
                            text: "Mobile or Password is invalid!",
                            icon: "error",
                            button: "OK!",
                    });
                }
                else{
                   window.location = 'routes/main.php';
                }
            }
            
        });
    }

 
    </script>

  </body>
</html>