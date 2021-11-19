


<!DOCTYPE html>
<!--  Last Published: Thu Oct 24 2019 03:51:29 GMT+0000 (UTC)  -->
<html data-wf-page="5d89db19b4e4f786d4fbaa03" data-wf-site="5d88346b08e53e18bbf88072">

<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta content="Contact" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/components.css" rel="stylesheet" type="text/css">
  <link href="css/selma-template.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Merriweather:300,300italic,400,400italic,700,700italic,900,900italic", "Gothic A1:100,200,300,regular,500,600,700,800,900"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="./Assets/Images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="./Assets/Images/webclip.png" rel="apple-touch-icon">
</head>



<!-- GetButton.io widget -->
<script type="text/javascript">
  (function() {
    var options = {
      whatsapp: "07060467119", // WhatsApp number
      call_to_action: "Message us", // Call to action
      position: "right", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol,
      host = "getbutton.io",
      url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
      WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();
</script>
<!-- /GetButton.io widget -->


<body>
 

  <header class="section-header position-absolute">
    <div class="container space-between align-middle">
      <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
        <div class="navbar-container align-middle w-container">
          <div class="col lg-4 no-margin-bottom order-first no-padding-left col-logo xs-12 md-grow"><a href="index.php" class="brand on-dark w-nav-brand"><img src="../Markup/Assets/Images/biyem_logo001.png" /></div>
          <div class="col lg-4 no-margin-bottom position-absolute-md flexh-justify-center">
            <nav role="navigation" class="nav-menu w-nav-menu"><a href="services.php#What_We_Do" class="nav-link on-dark w-nav-link w--current">What&nbspWe&nbspDo</a><a href="services.php#Who_We_Are" class="nav-link on-dark w-nav-link w--current"><small>Who&nbspWe&nbspAre</small></a><a href="contact.php" class="nav-link on-dark w-nav-link w--current"><small>Contact&nbspUs</small></a>
              <div data-hover="1" data-delay="0" data-w-id="cb96dc5f-319e-451a-0e75-919e706164ff" class="nav-dropdown w-dropdown">
                <div class="nav-link on-dark flex-horizontal w-dropdown-toggle">

                </div>
                <nav class="dropdown-list w-dropdown-list"></nav>
              </div>
            </nav>
          </div>
          <div class="col lg-4 no-margin-bottom flexh-justify-end no-padding-right hidden-xs test">
            <!--<a href="contact.php" class="button-primary is-small order-last is-white w-inline-block w--current">
              <div class="button-primary-text">get a quote</div>
            </a>-->
          </div>
          <div class="menu-button w-nav-button">
            <div class="iconfont is-16px on-dark"><em class="iconfont__no-italize"></em></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="section is-hero img1 on-dark is-subpage bgpos4">
    <div class="container">
      <div class="col block-centered text-align-center lg-7 md-12">
        <h1 class="on-dark">Need help and support?</h1>
        <div class="padding-left padding-right margin-bottom">We get back to all messages and respond with immediate accuracy</div>
      </div>
    </div>
  </div>
  
  <div class="section">
    <div class="container">
      <div class="col lg-6 md-12">
        <h2>👋   Hello let&#x27;s get in touch</h2>
        <p class="text-medium low-text-contrast">Dont be shy, Just tell us about yourself and we’ll figure out the best option for you and your project. Dont like Filling up forms ? Mail us then <a href="mailto:timmyywest007@gmail.com">info@biyemglobal.com</a></p>
        <div class="w-form">
       

          <form type='contact' action="sendmail.php"  method="POST" id="email-form" name="email-form" data-name="Email Form">

            <input type="text" class="form-input-text style1 w-input " maxlength="256" name="name" data-name="Name" placeholder="Name" id="name">

            <input type="email"  class="form-input-text style1 w-input" maxlength="256" name="email" data-name="Email" placeholder="Email" id="email" required="">


            <input type="tel" class="form-input-text style1 w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone" id="Phone" required="">

            <textarea placeholder="Your Message" maxlength="5000" id="Message" name="Message" data-name="Message" required="" class="form-input-text textarea style1 w-input"></textarea>

            <input name="submit" type="submit" value="Submit"  id="contact-submit" data-wait="Please wait..." class="button-primary margin-top w-button">
          </form>

          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="col lg-2 no-margin-bottom"></div>
      <div class="col lg-4 md-12">
        <div class="container container-nested">
          <div class="col lg-2 no-padding-right"><img src="https://img.icons8.com/nolan/64/paper-plane.png" width="64" alt="" class="margin-top-negative" /></div>
          <div class="col lg-10">
            <div class="size-h4 margin-bottom">Contact Information</div>
            <div class="margin-bottom">3 Baltimore Street,<br>Minfa 2 Estate,<br>Lokogoma — Abuja</div>
            <div class="margin-bottom-double">Call Us: <a href="tel:+2347060467119">+2347060467119</a><br>We are open from Monday to Friday<br>09.00am — 05.00pm</div>

            <!-- <div class="size-h4 margin-bottom">Follow Us</div>
            <div class="flexh-space-between low-text-contrast">
              <div class="fa-brand margin-right-small"><a href="#"></a></div>
              <div class="fa-brand margin-right-small"><a href="#"></a></div>
              <div class="fa-brand margin-right-small"><a href="#"></a></div>
              <div class="fa-brand margin-right-small"><a href="#"></a></div>
              <div class="fa-brand margin-right-small"><a href="#"></a></div>
              <div class="fa-brand margin-right-small"><a href="#"></a></div>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section has-bg-accent">
    <div class="container">
      <div class="col lg-6 md-12 block-centered text-align-center">
        <h2 id="Frequently_asked_questions">Frequently asked questions</h2>
        <div class="text-medium low-text-contrast margin-bottom"></div>
      </div>
    </div>
    <div class="container is-narrow">
      <div class="col lg-12">
        <div data-delay="0" class="c-accordion2 w-dropdown">
          <div class="c-accordion2__toggle w-dropdown-toggle">
            <div class="c-accordion__title">Do you work with non-profit organizations?</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="c-accordion2__content w-dropdown-list">
            <div class="text-block">We at Biyem global offer a wide variety of business plans and management which also includes partnership with non-profit organizations.</div>
          </nav>
        </div>
        <div data-delay="0" class="c-accordion2 w-dropdown">
          <div class="c-accordion2__toggle w-dropdown-toggle">
            <div class="c-accordion__title">Your focus seems to be on business planning and strategy. Do you also help clients with marketing or strategy execution?</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="c-accordion2__content w-dropdown-list">
            <div class="text-block">We focus on a wider scale than business planning and strategy, while also helping clients with marketing or strategy execution.</div>
          </nav>
        </div>
        <div data-delay="0" class="c-accordion2 w-dropdown">
          <div class="c-accordion2__toggle w-dropdown-toggle">
            <div class="c-accordion__title">Do you provide technological services ?</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="c-accordion2__content w-dropdown-list">
            <div class="text-block">We at biyem global ltd provide a wide variety of technological services that is sure to satisfy consumer wants and needs..</div>
          </nav>
        </div>
        <div data-delay="0" class="c-accordion2 w-dropdown">
          <div class="c-accordion2__toggle w-dropdown-toggle">
            <div class="c-accordion__title">Can you make an equity investment in my business or provide debt financing?</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="c-accordion2__content w-dropdown-list">
            <div class="text-block">We have various investment and debt financing subscription plans provided with terms and conditions.</div>
          </nav>
        </div>
        <div data-delay="0" class="c-accordion2 w-dropdown">
          <div class="c-accordion2__toggle w-dropdown-toggle">
            <div class="c-accordion__title">I need help but have a very limited budget. Can you help me?</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="c-accordion2__content w-dropdown-list">
            <div class="text-block">We provide standard logistics and courier services and at a consumer friendly rate.</div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <footer class="section padding-bottom-16 is-dark">
    <div class="container flex-horizontal">
      <!-- <div class="col lg-3 flexv-space-between md-12 align-left"><img src="../Markup/Assets/Images/biyem_logo001.png" />
         <div class="footer-tagline margin-bottom">.love the hustle</div>
      </div>-->
      <!--<div class="col lg-1 no-margin-bottom"></div>-->
      <div class="col lg-8 md-12">
        <div class="text-xlarge is-thin margin-bottom-double">We collaborate with ambitious brands and people; we’d love to build something great together.<br><a href="mailto:info@biyemglobal.com" class="email-footer">info@biyemglobal.com</a></div>
        <div class="container container-nested is-wrapped">
          <div class="col lg-3 no-margin-bottom-lg md-12">
            <div class="size-h4 margin-bottom on-dark">Office</div>
            <div>Nigeria —<br>3  Baltimore Street,Minfa 2 Estate,<br>Lokogoma, Abuja</div>
          </div>
          <div class="col lg-3 md-12 no-margin-bottom">
            <div class="size-h4 margin-bottom on-dark">Let&#x27;s talk</div>
            <p><a href="mailto:info@biyemglobal.com" class="email-footer">info@biyemglobal.com</a></p>
            <div><a href="tel:+2347060467119" class="phone-footer">+2347060467119</a></div>
          </div>
          <div class="col lg-3 no-margin-bottom-lg md-12">
            <div class="size-h4 margin-bottom on-dark">Company</div><a href="About.php" class="footer-nav-link on-dark">About</a><a href="services.php" class="footer-nav-link on-dark">Services</a><a href="service.php#Who_We_Are" class="footer-nav-link on-dark">Our work</a>
          </div>
          <div class="col lg-3 no-margin-bottom-lg md-12">
            <!--<div class="size-h4 margin-bottom on-dark">Let&#x27;s connect</div>
            <a href="#" class="footer-nav-link on-dark w-inline-block">
              <div><span class="fa-brand-2 w24"></span> LinkedIn</div>
            </a>
            <a href="#" class="footer-nav-link on-dark w-inline-block">
              <div><span class="fa-brand-2 w24"></span> Youtube</div>
            </a>
            <a href="#" class="footer-nav-link on-dark w-inline-block">
              <div><span class="fa-brand-2 w24"></span> Facebook</div>
            </a><a href="#" class="footer-nav-link on-dark w-inline-block"></a>-->
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col lg-12 margin-bottom">
        <div class="hr on-dark opacity"></div>
      </div>
    </div>
    <div class="container">
      <div class="col lg-6 no-margin-bottom md-12 md-order-last">
        <div class="low-text-contrast text-small flexh-space-between md-flex-vertical">
          <div class="md-order-last">©2021 BIYEM GLOBAL SERVICES, LTD. All rights reserved. </div><a href="#" class="footer-bottom-link on-dark">Privacy Policy</a><a href="#" class="footer-bottom-link on-dark">Term Of Service</a>
        </div>
      </div>
      <div class="col lg-6 no-margin-bottom md-12">
        <div class="w100 text-align-right footer-bottom md-text-align-left"></div>
      </div>
    </div>
  </footer>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/selma-template.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

  <!--<script type="text/javascript">
    function sendEmail() {
      var name = $("#name");
      var email = $("#email");
      var phone = $("#phone");
      var Message = $("#Message");

      if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(Message)) {
        $.ajax({
          url: `sendEmail.php`,
          method: 'POST',
          dataType: 'json',
          data: {
            name: name.val(),
            email: email.val(),
            phone: phone.val(),
            Message: Message.val()
          },
          success: function(response) {
            $('#email-form')[0].reset();
            $('.sent-notification').text("Message sent successfully.");
          }
        });
      }
    }
    function isNotEmpty(caller){
      if(caller.val()==""){
        caller.css('border', '1px solid red');
        return false;
      }
      else
      {
        caller.css('border', '');
        return true;
      }
    }
  </script>-->
<!--
<script type="text/javascript">

if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href);
}

</script>
-->

</body>

</html>