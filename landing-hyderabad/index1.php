<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>Home</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/twentytwenty-no-compass.css" rel="stylesheet" type="text/css" />

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function () {
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
    </script>
    
    <script>
        
        
        function myFunction() {

var number=document.getElementById("fullname").value;  
var number1=document.getElementById("mobile").value; 
var number3=document.getElementById("address").value; 
//window.open("www.fb.com");
  window.open("https://alignwisesmile.com/phpcheck1.html?doctorname="+number+"&address="+number1+"&city="+number3,"", "width = 100, height = 100");
}
        
    </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136784743-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136784743-1');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRPZVW9');</script>
<!-- End Google Tag Manager -->

<script>
(function(h,e,a,t,m,p) {
m=e.createElement(a);m.async=!0;m.src=t;
p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
})(window,document,'script','https://u.heatmap.it/log.js');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 760974550 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-760974550"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-760974550');
</script>

<script>
    
    
    function ajaxcall(){
        
        var mobile=document.getElementById("mobile").value;
        var address=document.getElementById("address").value;
        var fullname=document.getElementById("fullname").value;
        	
		$.ajax({
			

		    type : 'POST',
			data : {mobile:mobile,address:address,fullname:fullname},
			
			url : 'mailsend2.php',
			success : function(responseText) {
		//	document.getElementById("showmsg").style.display="block";
				alert(responseText);
			//	$("#showmsg").show();
	
			}
			

		  
			 
		});
		
        
        
        
    }
    
</script>
    
</head>


<body>
    <a href="#" id="scroll" style="display: none;"><span></span></a>
    <!-- Header -->
    <header class="py-2">
        <section class="container">
            <div class="col d-flex justify-content-between align-items-center">
                <div class="logo">
                    <span><img class="img-fluid" src="images/logo.png" alt="" /></span>
                </div>
                <div class="enquiry">
                    <a href="#">Call Us: 9773900267</a>
                </div>
            </div>
        </section>
    </header>
    <!-- Header -->

    <!-- Banner -->
    <section class="banner pb-4">
        <img src="images/banner-landingpage-1.jpg" class="img-fluid w-100" alt="" />
        <div class="banner-text">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="left">
                    <h2>We take <br/>your smile<br/> seriously</h2>
                    <h3>High Precision <br />technology for <br />effective results</h3>
                </div>
                <div class="right">
                    <h2>Book Free Consultation NOW</h2>
					<span class="error-text"></span>
                    <form name="contactform" id="contactform">
                        <div class="input-group">
                            <input type="text" name="fullname" id="fullname" placeholder="Full Name*" required/>
                        </div>
                        <div class="input-group">
                            <input type="tel"  name="mobile" id="mobile" placeholder="Mobile Number*" required/>
                        </div>
                        <div class="input-group">
                            <input type="text"  name="address" id="address" placeholder="Address" required/>
                        </div>
                        <div class="input-group">
                            <input type="submit"  name="contact_submit" onclick="ajaxcall()" value="Call Me Back" />
                        </div>
                        
                         <div style="display:none" class="input-group" id="showmsg">
                           <label>Our team will contact you soon</label>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner -->

    <!-- options -->
    <section class="options pt-5 text-center">
        <section class="container-fluid">
        <h2>Clear, invisible, wireless aligners designed <br /> to align your teeth to perfection.</h2>
            <p>
                For years now, the only available option to correct your smile has been metal and ceramic braces. From the time you get the barces to a few months after the treatment, there are hardly any photos of you. You cannot have your favourite food, because of the said braces. It isn't funny when you are mocked as kids or worse, as adults.
                <h4>Braces were the only option, until a light bulb turned on.</h4>
                <h5>That's when 32 watts was created.</h5>
            </p>
            <p>
                32 Watts are Clear Aligners made of light-weight, thin and transparent medical grade polymer, customized for you using 3D scanning and 3D printing technology. A team of CAD/CAM engineers, biomechanical experts and orthodontists create a plan specific to your needs. Thereafter, you get a series of Clear Braces, which are changed every 2 weeks until the total treatment is complete.
            </p>
            <div class="col-md-12">
                <ul class="option-list d-flex justify-content-center align-items-start">
                    <li>
                        <span><img src="images/icon1.png" alt="" /></span>
                        <h3>Invisible</h3>
                        <p>Clear aligners are nearly invisible. Without any one knowing, you can straighten your teeth
                            now.</p>
                    </li>
                    <li>
                        <span><img src="images/icon2.png" alt="" /></span>
                        <h3>Maintain oral hygiene</h3>
                        <p>Brush and floss your teeth regularly after eating or drinking to prevent the plaque and
                            bacteria developing under the
                            aligners.</p>
                    </li>
                    <li>
                        <span><img src="images/icon1.png" alt="" /></span>
                        <h3>Easy to maintain</h3>
                        <p>Keeping aligners clean is a vital part of your healthy smile treatment. They are very easy
                            to clean, easy to remove,
                            and easy to carry.</p>
                    </li>
                    <li>
                        <span><img src="images/icon3.png" alt="" /></span>
                        <h3>Straighten your teeth</h3>
                        <p>Your dentist may have recommended straightening your teeth to avoid oral health issues, or
                            if you simply want to
                            straighten your teeth for a better smile</p>
                    </li>
                </ul>
                <a href="#" id="scroll" class="booknow-btn">Book your free consultation</a>
            </div>
        </section>
    </section>
    <!-- options -->

    <section class="section-03">
        <section class="container">
            <section class="col-md-12">
                <section class="d-flex custom justify-content-between align-items-center">
                    <span class="left">
                        <img src="images/img.png" alt="" />
                    </span>
                    <div class="right">
                        <h4>Why clear aligners are better than braces?</h4>
                        <p>Everyone wants to have straight, white teeth. This is especially true in our age of social
                            media. After all, no one
                            wants to post a close-up photo of themselves with crooked teeth. Unlike metal braces, most
                            people won’t know you are
                            undergoing an orthodontic treatment with clear aligners as they are virtually invisible.
                            Maintaining oral hygiene may be
                            extremely difficult with braces.</p>
                    </div>
                </section>
                
            </section>
        </section>
    </section>

    <div class="howitworks">
        <div class="container">
    <section class="text-center howdoes">
                    <h2>How Does It Work</h2>
                    <ul class="work-opt d-flex">
                        <li>
                            <span><img src="images/thumb.png" alt="" /></span>
                            <h3>We recommend that you wear the Clear Aligners <br /> for a minimum of 22 hours a day,
                                removing them only to eat, brush and floss.</h3>
                        </li>
                        <li>
                            <span><img src="images/thumb1.png" alt="" /></span>
                            <h3>Each set is to be worn for 2 weeks to achieve the targeted movement before moving to the
                                next one in the series.</h3>
                        </li>
                        <li>
                            <span><img src="images/thumb2.png" alt="" /></span>
                            <h3>There are anywhere from 12-48 sets in a series. The treatment duration is of 6-24
                                months,
                                which varies depending on your orthodontic requirement.</h3>
                        </li>
                        <li>
                            <span><img src="images/thumb3.png" alt="" /></span>
                            <h3>By the end of the 5th or 6th aligner, you should be able to see some visible difference
                                in
                                your teeth.</h3>
                        </li>
                    </ul>
                    <a href="#" id="scroll" class="booknow-btn">Am I Eligible for Invisible Braces?</a>
                </section>
</div>
    </div>

    <section id="whoithelps">



        <div class="container">



            <h1>



                <span>Who</span> does it help?</h1>



            <h2>Get ready to face the world with your best smile ever.</h2>



            <div class="whoithelps-bar">



                <h3>Drag the vertical bar sideways to see the effective treatment for yourself.</h3>



                <div class="row">



                    <div class="col-sm-4">



                        <div class="twentytwenty-container">



                            <img src="images/crowding-before.jpg" />



                            <img src="images/crowding-after.jpg" />



                        </div>



                        <p>Crowding</p>



                    </div>



                    <div class="col-sm-4">



                        <div class="twentytwenty-container">



                            <img src="images/spacing-before.jpg" />



                            <img src="images/spacing-after.jpg" />



                        </div>



                        <p>Spacing</p>



                    </div>



                    <div class="col-sm-4">



                        <div class="twentytwenty-container">



                            <img src="images/deepbite-before.jpg" />



                            <img src="images/deepbite-after.jpg" />



                        </div>



                        <p>Deepbite</p>



                    </div>



                </div>



                <div class="row">



                    <div class="col-sm-4">



                        <div class="twentytwenty-container">



                            <img src="images/crossbite-before.jpg" />



                            <img src="images/crossbite-after.jpg" />



                        </div>



                        <p>Crossbite</p>



                    </div>



                    <div class="col-sm-4">



                        <div class="twentytwenty-container">



                            <img src="images/overjet-before.jpg" />



                            <img src="images/overjet-after.jpg" />



                        </div>



                        <p>Overjet</p>



                    </div>



                    <div class="col-sm-4">



                        <div class="twentytwenty-container">



                            <img src="images/occulasion-before.jpg" />



                            <img src="images/occulasion-after.jpg" />



                        </div>



                        <p>Occlusal Cant</p>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-04">
        <section class="container">
            <section class="col-md-12 text-center">
                <img src="images/img1.png" alt="" />
            </section>
        </section>
    </section>
    <section class="achievements text-center">
        <section class="container">
            <h2>Achievements</h2>
            <div class="d-flex justify-content-between align-items-start">
                <div class="left">
                    <p>Awarded amongst top 10 startups in Delhi-NCR</p>
                    <p>Dedicated CRM for efficient case management</p>
                </div>
                <div class="medium">
                    <img src="images/prize.png" alt="" />
                </div>
                <div class="right">
                    <p>300+ registered clinics in India</p>
                    <p>Most precise manufacturing in a German Plant</p>
                </div>
            </div>
        </section>
    </section>
    <section class="counters">
        <section class="container">
            <section class="col-md-12">
                <ul class="counters-list d-flex align-items-center justify-content-center">
                    <li>
                        <h2>500+</h2>
                        <h6>Patients</h6>
                    </li>
                    <li>
                        <h2>300+</h2>
                        <h6>Registered Clinics</h6>
                    </li>
                    <li>
                        <h2>250+</h2>
                        <h6>Doctors</h6>
                    </li>
                </ul>
            </section>c
        </section>
    </section>
    <section class="aligner-image">
        <div class="container">
        <h2>When do I start?</h2>
        <p>Contact your dentist to help you get started. You get your first set within five days of choosing 32 Watts Invisible Braces.</p>
        <a href="#" id="scroll" class="booknow-btn">Get your Starter Kit</a>
        </div>
    </section>
    <section class="testimonials">
        <section class="container">
            <section class="col-md-12">
                <h2>Testimonials</h2>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="left">
                        <p>When I decided to go for an orthodontic treatment, my dentist told me that I will have to
                            remove
                            four of my teeth to
                            align my teeth. I was not comfortable removing my teeth. I was then referred to Dr Varun
                            Grover
                            by a friend of mine who
                            gave me the option of Clear Braces. I have achieved my dream smile and I am thankful to
                            the
                            entire Alignwise team in
                            achieving this.
                            <br />- <em>Rohit</em></p>
                    </div>
                    <div class="right">
                        <iframe width="500" height="315" src="https://www.youtube.com/embed/Skcn9nP7dQo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <footer>
        <section class="container">
            <secction class="row">
                <section class="col-md-2">
                    <section class="logo">
                        <img src="images/logo.png" alt="" />
                    </section>
                </section>
                <section class="col-md-3">
                    <ul class="footer-list">
                        <li><a href="http://alignwisesmile.com/index.html">Patient</a></li>
                        <li><a href="http://alignwisesmile.com/orthodontist.html">Orthodontists</a></li>
                        <li><a href="http://alignwisesmile.com/about.html">About</a></li>
                        <li><a href="https://alignwisesmile.com/allblog.php/">Blog</a></li>
                    </ul>
                </section>
                <section class="col-md-4">
                    <h4>32 watts</h4>
                    <h5>© 2019 <strong>Alignwise Smile Technologies.</strong> All Rights Reserved</h5>
                </section>
                <section class="col-md-3">
                    <ul class="social d-flex align-items-center justify-content-end">
                        <li><a href="https://www.facebook.com/32watts"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/alignwise-smile-technologies/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.instagram.com/alignwise_smile/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC2Xgt_zC4ZWvKISMzzwmMbg"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </section>
        </section>
    </footer>

    <!-- jQuery library -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>
    <script>
    
    $(window).load(function () {    
    $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({ default_offset_pct: 0.7 });
    $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({ default_offset_pct: 0.3, orientation: 'vertical' });
    });
    </script>
</body>

</html>