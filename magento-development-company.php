<?php

if (isset($_REQUEST['contact_submit_form'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $areaCode = $_REQUEST['areaCode'];
    $description = $_REQUEST['description'];

    //$Link = $con->real_escape_string($_REQUEST['pagelinks']);
    $Link = $_REQUEST['pagelinks'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email
        echo json_encode(array('error' => 'Please enter a valid email.'));
        exit();
    }

    $from_email = 'info@tech2globe.com';
    $static = 'Tech2globe.com';
    $your_email = 'info@tech2globe.com';
    $email_subject = "Enquiry on Tech2globe.com";

    $header = "From: $static <" . $from_email . ">\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $email_content1 = "Thank you for your enquiry. Our team will get back to you within 1 business day.";

    $message = "
    <html>
    <head>
      <title>Enquiry from Tech2globe</title>
    </head>
    <body>
      <p>Name: $name</p>
      <p>Country Code: $areaCode</p>
      <p>Phone: $phone</p>
      <p>Mail ID: $email</p>
      <p>Comment: $description</p>
      <table>
        <tr><td style='font-size:14px; font-family:Arial, Helvetica, sans-serif;'>Send from Page: $Link<br><br></td></tr>
      </table>
    </body>
    </html>";


    // Attempt to send email
    if (@mail($your_email, $email_subject, $message, $header) && @mail($email, "Thank you - Enquiry Received On Tech2globe", $email_content1, $header)) {
        // Successful email sending
        echo "<script>alert('Form submitted successfully.');
        window.location.replace('https://newsite.tech2globe.co.in/thank-you');</script>";
    } else {
        // Email sending failed
        echo "<script>alert('Something went wrong.');
        window.location.replace('https://newsite.tech2globe.com/magento-development-company');</script>";
    }
}


?>


<!doctype html>
<html>
<?php include("include/meta.php"); ?>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebSite",
"name": " Magento Development Services ",
"url": "https://tech2globe.com/",
"potentialAction": {
"@type": "SearchAction",
"target": "https://tech2globe.com/magento-development-company {search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>

<style>

section.container.cartFeature.portfolio.mt-5.mb-0 .portfolioContainer.mb-0 {
    display: none;
}


section.container.cartFeature.portfolio.mt-5.mb-0 h2.main-heading.text-center {
    display: none !important;
}

section.container.cartFeature.portfolio.mt-5.mb-0 .divider {
    display: none;
}


section#port8899 .portfolioContainer.mb-0 {
    display: block !important;
}


section#port8899 h2.main-heading.text-center {
    display: block !important;
}


section#port8899 .divider {
    display: block !important;
}



section#port8899 .portfolioContainer .tab-content {
    
    margin-bottom: 0px;
    
}

p {
    color: #515151;
    font-family: calibri;
    font-size: 19px !important;
    line-height: 27px !important;
    text-align: justify;
}

h1 {
    display: inline-block;
    position: relative;
    font-size: 36px;
    margin-bottom: 10px;
    line-height: inherit;
    text-transform: capitalize;
    text-align: left !important;
    font-family: system-ui;
    font-weight: 700;
	    font-family: calibri;
}

.icon-list li {
    position: relative;
    list-style: disc;
    padding-left: 17px;
    font-size: 15px;
    font-family: calibri;
    font-size: 18px !important;
    color: #000;
    line-height: 32px;
    /* padding-left: 25px; */
    font-family: calibri;
}

.Clientlg-outer {
    width: 20%;
    float: left;
    /* padding: 0px; */
    box-shadow: inset -1px -1px #c6ccd1, -1px -1px #c6ccd1;
}

.technologies-img {
    padding: 10px 10px;
    margin: 30px 0 0 0;
    transition: all 0.3s ease 0s;
    text-align: center;
    display: flex;
    align-items: center;
    min-height: 105px;
    background: #fff;
    border: 1px solid #a7a3a3;
    font-family: calibri;
}

.imple2 {
    border: 1px solid #858383dd;
    padding: 18px;
    height: 288px;
}

.media-heading {
margin-top: 5px;
    margin-bottom: 8px;
    font-size: 21px;
    color: #c6010b;
}


/*cta*/
.popup form select {
            background-image: url(../image/arr-black.png);
            background-position: right 10px center;
            background-repeat: no-repeat;
            -moz-appearance: none;
            text-indent: 0.01px;
            text-overflow: '';
            -ms-appearance: none;
            color: #000000 !important;
        }

        .popup form input[type="text"]::placeholder,
        .popup form input[type="tel"]::placeholder,
        .popup form input[type="email"]::placeholder,
        .popup form textarea::placeholder {
            color: #000000 !important;
            font-weight: 500;
        }

        .popup form select {
            color: #fba420;
            font-weight: 500;
        }

        .popup form select {
            background-image: url(../image/arr-black.png);
            background-position: right 10px center;
            background-repeat: no-repeat;
            -moz-appearance: none;
            text-overflow: '';
            -ms-appearance: none;
            color: #adadad;
            font-weight: 500;
        }

        .popup form textarea {
            height: 78px;
            padding-top: 10px;
            color: #b3b3b3 !important;
            /* font-family: 'Font Awesome 5 Pro'; */
            resize: vertical;
        }

        #hp-ctn-howItWorks img {
            vertical-align: middle;
        }

        #hp-ctn-howItWorks {
            padding: 0px 0px 0px 0px;
            text-align: center;
            margin: 0px;
            width: 160px;
            height: 40px;
            background: #cb010d;
            z-index: 10000;
            border-radius: 5px 5px 0px 0px;
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            -webkit-transform: rotate(-270deg);
            transform-origin: right;
            position: fixed;
            right: 0px;
            border: none !important;
            margin-top: 17px;
            right: 19px;
        }

        #hp-ctn-howItWorks button {
            color: #fff;
            display: inline-block;
            line-height: 40px;
        }

        #hp-ctn-howItWorks p {
            color: #fff;
            display: inline-block;
            line-height: 40px;
        }

        /*cta end*/


  /*pop up*/
  .fixConnect a {
            position: fixed;
            top: 290px;
            right: -70px;
            color: #fff;
            z-index: 10;
            background: var(--dyelltwo);
            transform: rotate(90deg);
            padding: 10px 10px;
            min-width: 180px;
            text-align: center;
            border-radius: 0 0 4px 4px;
            transition: ease all 0.5s;
        }

        * {
            box-sizing: border-box;
        }

        .closess {
            float: right;
            font-size: 36px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            /* text-shadow: 0 1px 0 #ff0000; */
            filter: alpha(opacity=20);
            /* opacity: .2; */
            padding: 5px;
            border: white;
            background: none;
        }

        #info {
            color: hotpink !important;
        }

        .popup form {
            width: 100%;
        }

        input[required]+label,
        .popup form input,
        .popup form select,
        .popup form textarea {
            font-family: inherit !important;
            font-weight: 300;
            color: #afafaf;
            font-size: 15px;
            font-weight: 400px !important;
        }

        .popup form input,
        .popup form select {
            height: 38px !important;
        }

        .popup form input[type="text"],
        .popup form input[type="email"],
        .popup form select,
        .popup form textarea {
            display: block !important;
            margin: 0 auto;
            margin-bottom: 20px;
            padding-left: 10px !important;
            width: 83.55% !important;
            color: black;
            background: transparent !important;
            border: 0px !important;
            border-bottom: 1px solid grey !important;
            box-shadow: none !important;
            border-top: navajowhite;
            border-left: none;
            border-right: none;
        }

        input[required]+label {
            position: absolute;
            transform: translateX(60px) translateY(-50px);
        }

        input[required]+label:after {
            content: '*';
            color: #d8d8d8;
        }

        input[required]:invalid+label {
            display: inline-block;
        }

        input[required]:valid+label {
            display: none;
        }

        .popup form select {
            background-image: url("../image/arr-black.png");
            background-position: right 10px center;
            background-repeat: no-repeat;
            -moz-appearance: none;
            text-indent: 0.01px;
            text-overflow: '';
            -ms-appearance: none;
            color: #adadad;
        }

        .popup form textarea {
            height: 75px;
            padding-top: 10px;
            color: black;
        }

        .popup form input[type="submit"] {
            background: #9b0000;
            border-radius: 3px;
            width: 246px;
            height: 40px;
            margin-bottom: 0;
            font-weight: 500;
            font-size: 16px;
            color: #ffffff;
            line-height: 23px;
            font-family: "roboto";
            border-radius: 25px;
            margin: 0px auto;
            display: block;
            border-color: #9b0000;
            border-width: inherit;
        }

        #form_modal .modal-content {
            margin-inline: 50px;
        }

        #form_modal .modal-content .modal-headerss {
            text-align: center;
            padding: 15px 15px 0px 15px;
        }

        /*pop end*/


        .form-group .form-control {
            background: #fff;
            border: 1px solid #e8e8e8;
            font-size: 14px;
            font-family: 'Roboto', sans-serif;
            color: rgba(0, 0, 0, 0.8);
            box-shadow: inset 0 0 6px rgb(0 0 0 / 0%);
            width: 100%;
            padding: 10px 10px 10px 10px;
            height: auto;
            background-color: #fff;
            background-position: left center;
            background-repeat: no-repeat;
            border-radius: 0;
        }


        .item {
            background: #fff;
            text-align: center;
            padding: 30px 25px;
            -webkit-box-shadow: 0 0px 25px rgb(0 0 0 / 7%);
            box-shadow: 0 0px 25px rgb(0 0 0 / 7%);
            border-radius: 20px;
            border: 5px solid rgba(0, 0, 0, 0.07);
            margin-bottom: 30px;
            -webkit-transition: all .5s ease 0;
            transition: all .5s ease 0;
            transition: all 0.5s ease 0s;
            height: 280px;
        }

/* 1801 */
        /*form*/
        .form-control-text {
            border: 1px solid rgba(0, 0, 0, 0.04) !important;
            box-shadow: 12px 7px 90px 0 rgba(110, 123, 131, 0.1) !important;
            background: #ededed !important;
            height: 60px !important;
            padding-left: 15px !important;
            font-size: 14px !important;
            width: 100% !important;
            border: 1px solid #ced4da !important;
            border-radius: 0.25rem !important;
            color: #495057 !important;
        }

        .formc {
            background-color: white;
            /* border-radius: 25px; */
        }

        .form-group {
            margin-bottom: 12px !important;
        }

        @media only screen and (max-width: 600px) {
            #contact-form {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 600px) {
            .boxes {
                padding-right: 0px !important;
            }
        }

        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #777;
            border-radius: 0px !important;
        }

        .form-control {
            border: 1px solid rgba(0, 0, 0, 0.04) !important;
            box-shadow: 12px 7px 90px 0 rgba(110, 123, 131, 0.1) !important;
            background: #ededed !important;
            height: 36px !important;
            padding-left: 15px !important;
            font-size: 14px !important;
        }

        .form-control {
            display: block !important;
            width: 100% !important;
            height: calc(1.5em + 0.75rem + 2px) !important;
            padding: 0.375rem 0.75rem !important;
            /*font-size: 1rem!important;*/
            font-weight: 400 !important;
            line-height: 1.5 !important;
            color: #495057 !important;
            background-color: #ededed !important;
            background-clip: padding-box !important;
            border: 1px solid #ced4da !important;
            border-radius: 0.25rem !important;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        }

        @media (min-width: 768px) .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .white {
            color: white;
        }

        .walmart-s {
            font-size: 48px !important;
            color: white;
        }

        @media only screen and (max-width: 600px) {
            .walmart-s {
                font-size: 30px !important;
                text-align: left;
            }
        }

        /*form end */
</style>

<body>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Magento Development Company",
  "url": "https://tech2globe.com/magento-development-company",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<?php include("include/header.php"); ?>

<div class="banner-outer inner-banner banner-1">
  <div class="container">
	   <div class="row">
    	<div class="col-xs-12">
        
        	<h2>Magento Development Company</h2>
        </div>
    </div>
</div>
</div>

    <button id="hp-ctn-howItWorks" data-toggle="modal" data-target="#form_modal" tabindex="-1">
      <p>Connect With Us</p>
    </button>


<div class="breadcrumbBg">
  <div class="container">
    <div class="row">
      <ul class="breadcrumb">
        <li><a href="http://www.tech2globe.com/">Home</a></li>
        <li><a href="#s">Technologies</a></li>
        <li>Magento Development Services</li>
      </ul>
    </div>
  </div>
</div>
<section class="container cartFeature">
  <div class="row">
    <div class="col-md-9 col-xs-12">
      <h1 class="mb-3">Magento Development Company</h1>
      <p class="imgbottomMargin">Tech2Globe is one of India's most popular and professionally run web development & web design companies. Our <strong>expert Magento developers</strong> offer the best solutions for PHP development, e-commerce, mobile applications, and digital marketing.</p>

      <p>Tech2Globe is a well-established and experienced company that offers customized <strong>Magento development services</strong> at affordable rates. We provide Magento configuration and customize it according to your needs.</p>
     
      <h4 class="h4 mb-3" style="color: #c6010b;font-size: 21px;">As an acclaimed Magento Website Production service provider, we offer a wide range of Magento services.</h4>
      <div class="row">
      <div class="col-md-6">
      <div class="media">
    <div class="media-left">
      <img src="images/web.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Magento Website Development Services</h4>
      <p>We provide end-to-end website creation services for the Magento platform. Our experts help to create Magento Ecommerce stores for your business with full functionality and using third-party plug-ins wherever required.</p>
    </div>
  </div>

        <div class="media">
    <div class="media-left">
      <img src="images/custom-commerce.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Customized Ecommerce Solution</h4>
      <p>We offer customized solutions for all your ecommerce needs. To evaluate your current and potential business requirements, we offer <strong>Custom Magento development services</strong> and provide strategies that fit your budget and timeline</p>
    </div>
  </div>


        <div class="media">
    <div class="media-left">
      <img src="images/web-design.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Magento Theme Development Services</h4>
      <p>In Magento, there are a variety of themes available. Our experts develop the theme that best represents your product and improves the overall look of your website which enhances your customers' user experience.</p>
    </div>
  </div>

      	<div class="media">
    <div class="media-left">
      <img src="images/module-dev.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Magento Module Development Services</h4>
      <p>Based on your specifications, our experts create custom modules. Some of these are easy to install and ready-to-use. You can easily modify any changes in your website with these modules. </p>
    </div>
  </div>
</div>

    <div class="col-md-6">

   	<div class="media">
    <div class="media-left">
      <img src="images/custom-dev.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Custom Magento eCommerce Development</h4>
      <p>Our specialists incorporate the latest designs and trends that make your Magento Webstore attractive and offer you a competitive advantage.</p>
    </div>
  </div>

      <div class="media">
    <div class="media-left">
      <img src="images/shopping-cart-dev.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Magento Shopping Cart Development Services</h4>
      <p>An integral part of our service is to add a Magento shopping cart into your e-Commerce store. The most significant page where the overall price is calculated along with discount coupons and taxes is the shopping cart.</p>
    </div>
  </div>

	<div class="media">
    <div class="media-left">
      <img src="images/extension-dev.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Custom Extension Development Services</h4>
      <p>We offer custom extension creation services as per your specifications. It helps to add more functionality and make it more usable for your website</p>
    </div>
  </div>

  <div class="media">
    <div class="media-left">
      <img src="images/web-maintenance.png" class="media-object lazyload" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Support and Maintenance</h4>
      <p>During and after the project execution, our expert team assists you in using the developed ecommerce store. In addition, we provide attractive packages for continuous service and repair after the warranty duration is over.</p>
    </div>
  </div>
</div>
</div>
           

  <h3 class="h3 mt-3 mb-3">Tech2Globe's Expertise in Magento Development</h3>
  <div class="row">
    <div class="col-md-6">
      <h4 class="h4">ECommerce communications</h4>
      <p>ur experts can easily connect many channels and boost user experience with their expertise in Ecommerce communications. Tech2Globe combines distinct distribution and promotional platforms to build best marketing strategies for your store</p>

      <h4 class="h4">Multi-Vendor ECommerce</h4>
      <p>We can turn your shop into a marketplace like Amazon or eBay with ease. The process involves transforming all data in the shortest possible time and leading you in the right direction.</p>

    </div>

      <div class="col-md-6">

      <h4 class="h4">Magento Security Audit</h4>
      <p>Our Magento development experts review and monitor Magento codebase, server setup, PCI compliance audit, etc. We identify and eliminate any data breach bugs in your ecommerce store.</p>

      <h4 class="h4">Magento Speed Optimization</h4>
      <p>You can rely on our services for optimization of speed in your ecommerce store</p>
      </div>
    </div>

      <div class="col-md-12 col-xs-12 pl-0 mt-3">
       <h3 class="h3 mt-2 mb-2">How Tech2Globe Helps to Improve Your Business?</h3>
       <div class="row">
        <div class="col-md-6">
          <h4 class="h4">Inbuilt Marketing Tools</h4>
          <p>We direct our clients to the advantages of Magento and make them aware of our built-in marketing tools. On their website, we incorporate these tools so that they can customize the platform's pricing rules on their own and can easily build marketing campaigns and promotions.</p>
        </div>
        <div class="col-md-6">
          <h4 class="h4">Analytics and Reporting</h4>
          <p>We provide our customers with Magento's integrated analytics tool that allows them to access comprehensive website sales reports, best-purchased products, new order RSS feeds, most viewed products, as well as product review survey reports.</p>
        </div>
      </div>
      <h3 class="h3">Why choose Tech2Globe?</h3>
      <p>Our <strong>Magento development company</strong> provides dedicated interfacing features of Magento business growth to ensure the strongest commercial presence in the web domain. We are a leading Magento software company that supports your business presence through our e-commerce development experience. Our motto is to provide our customers with robust storefront models. We allow the access of our clients to their store so that they can add and expand features to improve your scalability.</p>
       
       

          <h3 class="h3">Begin Your New Project With tech2Globe</h3>
          <p>Connect with us to learn more about how Tech2Globe Web Solutions will help your company to meet all your requirements.</p>
    </div>
    </div>

    <?php include("include/sidebar-e-commerce-solutions.php")?>
    
    	<!-- query form -->
	<?php include("include/query-form.php"); ?>
	<!-- query form -->  
    <div class="clearfix"></div>
  </div>
</section>



<!--Start Portfolio-->
<section id="port8899" class="container cartFeature portfolio mt-5 mb-0">
  <div class="row">
    <div class="col-md-12">
      <h2 class="main-heading text-center">Our <span>Portfolio</span></h2>
    </div>
 </div>
 <div class="row">
    <div class="col-md-12">
      <div class="divider"></div>
     
    <div class="portfolioContainer mb-0">       
      <div style="display:none;" class="tabbable" id="mygallery">
         <ul class="nav nav-tabs">
         <li class=""><a href="#tab1" data-toggle="tab" aria-expanded="false">Product Uploading</a></li>
         <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">web Stores Design &amp; Dev</a></li>
         <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Indian Ecomm MarketPlace</a></li>
         <li class="active"><a href="#tab4" data-toggle="tab" aria-expanded="true">International Ecomm Marketplace</a></li>
        </ul>
       </div>
       <div class="tab-content">   
         <div class="tab-pane" id="tab1">   
          <div class="row">
             <div class="col-md-3 col-sm-6">
                  <div class="portfolio_imagBg">
                   <a href="http://www.lacanvas.com/" target="_blank"><img src="images/portfolio-images/webt/lacanvas.jpg">
                   <div class="blackBg"></div>
                   </a>
                   <h3 class="h3 text-left">Lacanvas</h3>
                   <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
                   <div class="text-right"><a href="http://www.lacanvas.com/" target="_blank" class="portfolio-button">View Project</a></div>
                  </div>
             </div>       
             <div class="col-md-3 col-sm-6">
                  <div class="portfolio_imagBg">
                   <a href="http://www.linkcycle.com/" target="_blank"><img src="images/portfolio-images/webt/linkcycle.jpg">
                   <div class="blackBg"></div>
                   </a>
                   <h3 class="h3 text-left">Linkcycle</h3>
                   <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
                   <div class="text-right"><a href="http://www.linkcycle.com/" target="_blank" class="portfolio-button">View Project</a></div>
                  </div>
             </div>       
             <div class="col-md-3 col-sm-6">
                  <div class="portfolio_imagBg">
                   <a href="http://www.silvergoldintocash.com/" target="_blank"><img src="images/portfolio-images/webt/silvergoldintocash.jpg">
                   <div class="blackBg"></div>
                   </a>
                   <h3 class="h3 text-left">Silver Goldinto Cash</h3>
                   <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
                   <div class="text-right"><a href="http://www.silvergoldintocash.com/" target="_blank" class="portfolio-button">View Project</a></div>
                  </div>
             </div>
             <div class="col-md-3 col-sm-6">
                  <div class="portfolio_imagBg">
                   <a href="http://www.travel-blue.com/" target="_blank"><img src="images/portfolio-images/webt/travel-blue.jpg">
                   <div class="blackBg"></div>
                   </a>
                   <h3 class="text-left h3">Travel Blue</h3>
                   <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
                   <div class="text-right"><a href="http://www.travel-blue.com/" target="_blank" class="portfolio-button">View Project</a></div>
                  </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-3 col-sm-6">
              <div class="portfolio_imagBg">
               <a href="http://www.windsorone.com/" target="_blank"><img src="images/portfolio-images/webt/windsorone.jpg">
               <div class="blackBg"></div>
               </a>
               <h3 class="text-left h3">Windsor One</h3>
               <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
               <div class="text-right"><a href="http://www.windsorone.com/" target="_blank" class="portfolio-button">View Project</a></div>
              </div>
             </div>
             <div class="col-md-3 col-sm-6">
              <div class="portfolio_imagBg">
               <a href="http://www.zphotoedit.com/" target="_blank"><img src="images/portfolio-images/php_websites/zphotoedit.jpg">
               <div class="blackBg"></div>
               </a>
               <h3 class="text-left h3">Zphotoedit</h3>
               <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
               <div class="text-right"><a href="http://www.zphotoedit.com/" target="_blank" class="portfolio-button">View Project</a></div>
              </div>
             </div>
             <div class="col-md-3 col-sm-6">
              <div class="portfolio_imagBg">
               <a href="http://www.luiolei.com/" target="_blank"><img src="images/portfolio-images/net_t/luiolei.jpg">
               <div class="blackBg"></div>
               </a>
               <h3 class="text-left h3">Luiolei</h3>
               <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
               <div class="text-right"><a href="http://www.luiolei.com/" target="_blank" class="portfolio-button">View Project</a></div>
              </div>
             </div>
             <div class="col-md-3 col-sm-6">
              <div class="portfolio_imagBg">
               <a href="http://www.plazasurfsports.com/" target="_blank"><img src="images/portfolio-images/net_t/plazasurfsports.jpg">
               <div class="blackBg"></div>
               </a>
               <h3 class="text-left h3">Plaza Surf Sports</h3>
               <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
               <div class="text-right"><a href="http://www.plazasurfsports.com/" target="_blank" class="portfolio-button">View Project</a></div>
              </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-3 col-sm-6">
                  <div class="portfolio_imagBg">
                   <a href="http://www.shopaloo.com/" target="_blank"><img src="images/portfolio-images/net_t/shopaloo.jpg">
                   <div class="blackBg"></div>
                   </a>
                   <h3 class="text-left h3">Shopaloo</h3>
                   <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                   <div class="text-right"><a href="http://www.shopaloo.com/" target="_blank" class="portfolio-button">View Project</a></div>
                  </div>
             </div>
             <div class="col-md-3 col-sm-6">
                  <div class="portfolio_imagBg">
                   <a href="http://www.sports456.com/" target="_blank"><img src="images/portfolio-images/net_t/sports456.jpg">
                   <div class="blackBg"></div>
                   </a>
                   <h3 class="text-left h3">Sports456</h3>
                   <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                   <div class="text-right"><a href="http://www.sports456.com/" target="_blank" class="portfolio-button">View Project</a></div>
                  </div>
             </div>
          </div> 
        </div>
       <div class="tab-pane" id="tab2">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="https://consultforppp.com/" target="_blank"><img src="images/portfolio-images/net_t/consultforppp.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Consult for PPP</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="https://consultforppp.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://devouttechs.com/" target="_blank"><img src="images/portfolio-images/net_t/devouttechs.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Devouttechs</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="http://devouttechs.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="https://geturkart.com/" target="_blank"><img src="images/portfolio-images/net_t/geturkart.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Geturkart</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="https://geturkart.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://nopextensions.com/" target="_blank"><img src="images/portfolio-images/net_t/nopextensions.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Nopextensions</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="http://nopextensions.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
           </div>
           <div class="row">
                <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.shopaloo.com/" target="_blank"><img src="images/portfolio-images/net_t/shopaloo.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Shopaloo</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="http://www.shopaloo.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.sports456.com/" target="_blank"><img src="images/portfolio-images/net_t/sports456.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Sports456</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="http://www.sports456.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.luiolei.com/" target="_blank"><img src="images/portfolio-images/net_t/luiolei.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Luiolei</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="http://www.luiolei.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.plazasurfsports.com/" target="_blank"><img src="images/portfolio-images/net_t/plazasurfsports.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Plaza Surf Sports</h3>
                 <p><span class="contactBottominfo">Technology:</span> Asp.net, C#,SQL Server , Jquery.</p>
                 <div class="text-right"><a href="http://www.plazasurfsports.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
          </div>
       </div>
      <div class="tab-pane" id="tab3">
        <div class="row">
           <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.windsorone.com/" target="_blank"><img src="images/portfolio-images/webt/windsorone.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Windsor One</h3>
                 <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
                 <div class="text-right"><a href="http://www.windsorone.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
           </div>
           <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.zphotoedit.com/" target="_blank"><img src="images/portfolio-images/webt/zphotoedit.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Zphotoedit</h3>
                 <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
                 <div class="text-right"><a href="http://www.zphotoedit.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
           </div>
           <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.myorthosoft.com/" target="_blank"><img src="images/portfolio-images/webt/myorthosoft.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">My Orthosoft </h3>
                 <p><span class="contactBottominfo">Technology:</span> Cake PHP</p>
                 <div class="text-right"><a href="http://www.myorthosoft.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
           </div>
           <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="https://saleswarp.com/" target="_blank"><img src="images/portfolio-images/webt/saleswarp.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Saleswarp</h3>
                 <p><span class="contactBottominfo">Technology:</span> Cake PHP</p>
                 <div class="text-right"><a href="https://saleswarp.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
           </div>
        </div>
        <div class="row">
           <div class="col-md-3 col-sm-6">
            <div class="portfolio_imagBg">
             <a href="https://www.webmallng.com/" target="_blank"><img src="images/portfolio-images/webt/webmallng.jpg">
             <div class="blackBg"></div>
             </a>
             <h3 class="text-left h3">Webmallng</h3>
             <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
             <div class="text-right"><a href="https://www.webmallng.com/" target="_blank" class="portfolio-button">View Project</a></div>
            </div>
           </div>
           <div class="col-md-3 col-sm-6">
            <div class="portfolio_imagBg">
             <a href="https://www.unotechonline.com/" target="_blank"><img src="images/portfolio-images/webt/unotechonline.jpg">
             <div class="blackBg"></div>
             </a>
             <h3 class="text-left h3">UnotechonLine</h3>
             <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
             <div class="text-right"><a href="https://www.unotechonline.com/" target="_blank" class="portfolio-button">View Project</a></div>
            </div>
           </div>
           <div class="col-md-3 col-sm-6">
            <div class="portfolio_imagBg">
             <a href="http://www.lacanvas.com/" target="_blank"><img src="images/portfolio-images/webt/lacanvas.jpg">
             <div class="blackBg"></div>
             </a>
             <h3 class="text-left h3">Lacanvas</h3>
             <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
             <div class="text-right"><a href="http://www.lacanvas.com/" target="_blank" class="portfolio-button">View Project</a></div>
            </div>
           </div>       
           <div class="col-md-3 col-sm-6">
            <div class="portfolio_imagBg">
             <a href="http://www.linkcycle.com/" target="_blank"><img src="images/portfolio-images/webt/linkcycle.jpg">
             <div class="blackBg"></div>
             </a>
             <h3 class="text-left h3">Linkcycle</h3>
             <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
             <div class="text-right"><a href="http://www.linkcycle.com/" target="_blank" class="portfolio-button">View Project</a></div>
            </div>
           </div>
        </div>
        <div class="row">
             <div class="col-md-3 col-sm-6">
              <div class="portfolio_imagBg">
               <a href="http://www.silvergoldintocash.com/" target="_blank"><img src="images/portfolio-images/webt/silvergoldintocash.jpg">
               <div class="blackBg"></div>
               </a>
               <h3 class="text-left h3">Silver Goldinto Cash</h3>
               <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
               <div class="text-right"><a href="http://www.silvergoldintocash.com/" target="_blank" class="portfolio-button">View Project</a></div>
              </div>
             </div>
             <div class="col-md-3 col-sm-6">
              <div class="portfolio_imagBg">
               <a href="http://www.travel-blue.com/" target="_blank"><img src="images/portfolio-images/webt/travel-blue.jpg">
               <div class="blackBg"></div>
               </a>
               <h3 class="text-left h3">Travel Blue</h3>
               <p><span class="contactBottominfo">Technology:</span> PHP, Mysql, Jquery.</p>
               <div class="text-right"><a href="http://www.travel-blue.com/" target="_blank" class="portfolio-button">View Project</a></div>
              </div>
             </div>
        </div>
      </div>
      <div class="tab-pane myport active" id="tab4">
           <div  style="display:none;"  class="tabbable pt-0" id="mygallery">
                 <ul class="nav nav-tabs">
                 <li class=""><a href="#tab1e" data-toggle="tab" aria-expanded="false">Shopify</a></li>
                 <li class=""><a href="#tab2e" data-toggle="tab" aria-expanded="false">Magento</a></li>
                 <li class=""><a href="#tab3e" data-toggle="tab" aria-expanded="false">Bigcommerce</a></li>
                 <li class="active"><a href="#tab4e" data-toggle="tab" aria-expanded="true">NopCommerce</a></li>
                </ul>
           </div>
      <div class="tab-content">
            <div class="tab-pane" id="tab1e">
                <div class="row"> 
                   <div class="col-md-3 col-sm-6">
                        <div class="portfolio_imagBg">
                         <a href="http://shopmodernaccessory.com/" target="_blank"><img src="images/portfolio-images/shopify/shopmodernaccessory.jpg">
                         <div class="blackBg"></div>
                         </a>
                         <h3 class="text-left h3">Shop Modern Accessory</h3>
                         <p><span class="contactBottominfo">Technology:</span> Shopify</p>
                         <div class="text-right"><a href="http://shopmodernaccessory.com/" target="_blank" class="portfolio-button">View Project</a></div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                        <div class="portfolio_imagBg">
                         <a href="http://www.donnabellajewelry.dk/" target="_blank"><img src="images/portfolio-images/shopify/donnabellajewelry.jpg">
                         <div class="blackBg"></div>
                         </a>
                         <h3 class="text-left h3">Donna Bella Jewelry</h3>
                         <p><span class="contactBottominfo">Technology:</span> Shopify</p>
                         <div class="text-right"><a href="http://www.donnabellajewelry.dk/" target="_blank" class="portfolio-button">View Project</a></div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                        <div class="portfolio_imagBg">
                         <a href="http://e-panneur.ca/" target="_blank"><img src="images/portfolio-images/shopify/e-panneur.jpg">
                         <div class="blackBg"></div>
                         </a>
                         <h3 class="text-left h3">E-Panneur</h3>
                         <p><span class="contactBottominfo">Technology:</span> Shopify</p>
                         <div class="text-right"><a href="http://e-panneur.ca/" target="_blank" class="portfolio-button">View Project</a></div>
                        </div>
                   </div>
                </div>
            </div>
            <div class="tab-pane" id="tab2e">
               <div class="row">
                <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.sports456.com/" target="_blank"><img src="images/portfolio-images/magento/sports456.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Sports456</h3>
                 <p><span class="contactBottominfo">Technology:</span> Magento</p>
                 <div class="text-right"><a href="http://www.sports456.com/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.allextreme.in/" target="_blank"><img src="images/portfolio-images/magento/allextreme.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">All Extreme</h3>
                 <p><span class="contactBottominfo">Technology:</span> Magento</p>
                 <div class="text-right"><a href="http://www.allextreme.in/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="https://www.shoesuite.ie/" target="_blank"><img src="images/portfolio-images/magento/shoesuite.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Shoesuite</h3>
                 <p><span class="contactBottominfo">Technology:</span> Magento</p>
                 <div class="text-right"><a href="https://www.shoesuite.ie/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="https://www.atkins.ie/" target="_blank"><img src="images/portfolio-images/magento/atkins.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Atkins</h3>
                 <p><span class="contactBottominfo">Technology:</span> Magento</p>
                 <div class="text-right"><a href="https://www.atkins.ie/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
             </div>
             <div class="row"> 
               <div class="col-md-3 col-sm-6">
                <div class="portfolio_imagBg">
                 <a href="http://www.directorderblinds.co.uk/" target="_blank"><img src="images/portfolio-images/magento/directorderblinds.jpg">
                 <div class="blackBg"></div>
                 </a>
                 <h3 class="text-left h3">Director Derblinds</h3>
                 <p><span class="contactBottominfo">Technology:</span> Magento</p>
                 <div class="text-right"><a href="http://www.directorderblinds.co.uk/" target="_blank" class="portfolio-button">View Project</a></div>
                </div>
               </div>
             </div>
            </div>
            <div class="tab-pane" id="tab3e">
                <div class="row">
                    
                </div>
            </div>
            <div style="margin-top: 0px;" class="tab-pane active" id="tab4e">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                    <div class="portfolio_imagBg">
                     <a href="http://www.luiolei.com/" target="_blank"><img src="images/portfolio-images/noopcommerce/luiolei.jpg">
                     <div class="blackBg"></div>
                     </a>
                     <h3 class="text-left h3">Luiolei</h3>
                     <p><span class="contactBottominfo">Technology:</span> NopCommerce</p>
                     <div class="text-right"><a href="http://www.luiolei.com/" target="_blank" class="portfolio-button">View Project</a></div>
                    </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                    <div class="portfolio_imagBg">
                     <a href="http://www.plazasurfsports.com/" target="_blank"><img src="images/portfolio-images/noopcommerce/plazasurfsports.jpg">
                     <div class="blackBg"></div>
                     </a>
                     <h3 class="text-left h3">Plaza Surf Sports</h3>
                     <p><span class="contactBottominfo">Technology:</span> NopCommerce</p>
                     <div class="text-right"><a href="http://www.plazasurfsports.com/" target="_blank" class="portfolio-button">View Project</a></div>
                    </div>
                   </div>
                   <div class="col-md-3 col-sm-6">
                    <div class="portfolio_imagBg">
                     <a href="https://www.hometurph.com/" target="_blank"><img src="images/portfolio-images/noopcommerce/hometurph.jpg">
                     <div class="blackBg"></div>
                     </a>
                     <h3 class="text-left h3">Home Turph</h3>
                     <p><span class="contactBottominfo">Technology:</span> NopCommerce</p>
                     <div class="text-right"><a href="https://www.hometurph.com/" target="_blank" class="portfolio-button"> View Project</a></div>
                    </div>
                   </div>
				   <div class="col-md-3 col-sm-6">
                    <div class="portfolio_imagBg">
                     <a href="https://coovysports.com/" target="_blank"><img src="images/portfolio-images/bigcommerce/coovysports.jpg">
                     <div class="blackBg"></div>
                     </a>
                     <h3 class="text-left h3">Coovy Sports</h3>
                     <p><span class="contactBottominfo">Technology:</span> BigCommerce</p>
                     <div class="text-right"><a href="https://coovysports.com/" target="_blank" class="portfolio-button">View Project</a></div>
                    </div>
                   </div>
				   
				   
                </div>
            </div>
      </div>      
      </div>
    </div> 
  </div>
  </div>
  </div>
</section>

<!--End Portfolio-->

   
<!-- popup start here -->

<div id="form_modal" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-headerss"><button class="closess" type="button" data-dismiss="modal">×</button>
                 <a href=""></a>
                 <h4 class="modal-title" style="color: #c6010b;">Get in touch with us</h4>
             </div>
             <div class="modal-body">
                 <div class="popup">
                 <?php // onsubmit="doSubmit1();"
                     $min1  = 0;
                     $max1  = 9;
                     $num31 = rand($min1, $max1);
                     $num41 = rand($min1, $max1);
                     $sum2  = $num31 + $num41;
                     $actual_link = str_replace('.php', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
                     ?>
                     <form action=" " method="POST" enctype="multipart/form-data">
                         <?php $actual_link = str_replace('.php', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); ?>
                         <input required="" type="text" class="form-control" id="name" onkeypress="return withoutspecialnumeric(event)" placeholder="Name" name="name" style="font-weight:500; color:black;">


                         <input name="pagelinks" id="pagelink" value="<?php echo $actual_link; ?>" type="hidden" />
                         <input type="email" required="" class="form-control" id="email" placeholder="Email" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" style="font-weight:500; color:black;">
                         <select id="areaCode" class="form-control " name="areaCode" required style="font-weight: 500 !important;margin-left: 36px; color:#808080 ;">



                             <option value="" data-dialcode="" style="color:#808080!important;">Select Country</option>
                             <option value="Maldives " data-dialcode="+960-">Maldives (+960) </option>
                             <option value="Mali" data-dialcode="+223-">Mali (+223) </option>
                             <option value="Malta" data-dialcode="+356-">Malta (+356) </option>
                             <option value="Marshall Islands " data-dialcode="+692-">Marshall Islands (+692) </option>
                             <option value="Martinique " data-dialcode="+596-">Martinique (+596) </option>
                             <option value="Mauritania " data-dialcode="+222-">Mauritania (+222) </option>
                             <option value="Mayotte " data-dialcode="+269-">Mayotte (+269) </option>
                             <option value="Mexico " data-dialcode="+52-">Mexico (+52) </option>
                             <option value="Moldova " data-dialcode="+373-">Moldova (+373) </option>
                             <option value="Monaco " data-dialcode="+377-">Monaco (+377) </option>
                             <option value="Mongolia " data-dialcode="+976-">Mongolia (+976) </option>
                             <option value="Montserrat " data-dialcode="+1664-">Montserrat (+1664) </option>
                             <option value="Morocco" data-dialcode="+212-">Morocco (+212) </option>
                             <option value="Mozambique " data-dialcode="+258-">Mozambique (+258) </option>
                             <option data-dialcode="+1" value="USA (+1) ">USA (+1) </option>

                             <option data-dialcode="+1-" value="USA (+1) ">USA (+1) </option>

                             <option data-dialcode="+44-" value="UK (+44)">UK (+44) </option>

                             <option data-dialcode="+1-" value="Canada (+1) ">Canada (+1) </option>

                             <option data-dialcode="+61-" value="Australia (+61)">Australia (+61) </option>

                             <option data-dialcode="+49-" value="Germany (+49)">Germany (+49) </option>

                             <option data-dialcode="+33-" value="France (+33) ">France (+33) </option>

                             <option data-dialcode="+45-" value="Denmark (+45)">Denmark (+45) </option>

                             <option data-dialcode="+65-" value="Singapore (+65)">Singapore (+65) </option>

                             <option data-dialcode="+971-" value="UAE (+971)">UAE (+971) </option>

                             <option data-dialcode="+64-" value="New Zealand (+64) ">New Zealand (+64) </option>

                             <option data-dialcode="+966-" value="Saudi Arabia (+966) ">Saudi Arabia (+966) </option>

                             <option data-dialcode="+91-" value="India (+91)">India (+91) </option>

                             <option data-dialcode="+359-" value="Bulgaria (+359)">Bulgaria (+359) </option>

                             <option data-dialcode="+86-" value="China (+86)">China (+86) </option>

                             <option data-dialcode="-" value="Japan (+81)">Japan (+81) </option>

                             <option data-dialcode="+54-" value="Argentina (+54)">Argentina (+54) </option>

                             <option data-dialcode="+43-" value="Austrai (+43)">Austrai (+43) </option>

                             <option data-dialcode="+32-" value="Belgium (+32)">Belgium (+32) </option>

                             <option data-dialcode="+973-" value="Bahrain (+973)">Bahrain (+973) </option>

                             <option data-dialcode="+257--" value="Burundi (+257) ">Burundi (+257) </option>

                             <option data-dialcode="+855-" value="Cambodia (+855)">Cambodia (+855) </option>

                             <option data-dialcode="+57-" value="Colombia (+57) ">Colombia (+57) </option>

                             <option data-dialcode="+385-" value="Croatia (+385) ">Croatia (+385) </option>

                             <option data-dialcode="+20-" value="Egypt (+20)">Egypt (+20) </option>

                             <option data-dialcode="+358-" value="inland (+358)">Finland (+358) </option>

                             <option data-dialcode="+353-" value="Ireland (+353) ">Ireland (+353) </option>

                             <option data-dialcode="+7880-" value="Georgia (+7880)">Georgia (+7880) </option>

                             <option data-dialcode="+502-" value="Guatemala (+502) ">Guatemala (+502) </option>

                             <option data-dialcode="+852-" value="Hong Kong (+852)">Hong Kong (+852) </option>

                             <option data-dialcode="+98-" value="Iran (+98) ">Iran (+98) </option>

                             <option data-dialcode="+62-" value="Indonesia (+62) ">Indonesia (+62) </option>

                             <option data-dialcode="+972-" value="Israel (+972)">Israel (+972) </option>

                             <option data-dialcode="+39-" value="Italy (+39)">Italy (+39) </option>

                             <option data-dialcode="+965-" value="Kuwait (+965)">Kuwait (+965) </option>

                             <option data-dialcode="+691-" value="Micronesia (+691) ">Micronesia (+691) </option>

                             <option data-dialcode="+961-" value="Lebanon (+961)">Lebanon (+961) </option>

                             <option data-dialcode="+47-" value="Norway (+47)">Norway (+47) </option>

                             <option data-dialcode="+968-" value="Oman (+968)">Oman (+968) </option>

                             <option data-dialcode="+63-" value="Philippines (+63) ">Philippines (+63) </option>

                             <option data-dialcode="+48-" value="Poland (+48) ">Poland (+48) </option>

                             <option data-dialcode="+7-" value="Russia (+7) ">Russia (+7) </option>

                             <option data-dialcode="+27-" value="South Africa (+27)">South Africa (+27) </option>

                             <option data-dialcode="+34-" value="Spain (+34)">Spain (+34) </option>

                             <option data-dialcode="+46-" value="Sweden (+46) ">Sweden (+46) </option>

                             <option data-dialcode="+90-" value="Turkey (+90) ">Turkey (+90) </option>

                             <option data-dialcode="+380-" value="Ukraine (+380)">Ukraine (+380) </option>

                             <option disabled>______________________________________________________________</option>

                             <option data-dialcode="+213-" value="Algeria (+213)">Algeria (+213) </option>

                             <option data-dialcode="+376-" value="Andorra (+376)">Andorra (+376) </option>

                             <option data-dialcode="+244-" value="Angola (+244)">Angola (+244) </option>

                             <option data-dialcode="+1264-" value="Anguilla (+1264)">Anguilla (+1264) </option>

                             <option data-dialcode="+1268-" value="Antigua &amp; Barbuda (+1268)">Antigua &amp; Barbuda (+1268) </option>

                             <option data-dialcode="+599-" value="Antilles (Dutch) (+599) ">Antilles (Dutch) (+599) </option>


                             <option data-dialcode="+374-" value="Armenia (+374)">Armenia (+374) </option>

                             <option data-dialcode="+297-" value="Aruba (+297)">Aruba (+297) </option>

                             <option data-dialcode="+247-" value="scension Island (+247) ">Ascension Island (+247) </option>



                             <option data-dialcode="+43-" value="Austria (+43) ">Austria (+43) </option>

                             <option data-dialcode="+994-" value="Azerbaijan (+994)">Azerbaijan (+994) </option>

                             <option data-dialcode="+1242-" value="Bahamas (+1242)">Bahamas (+1242) </option>

                             <option data-dialcode="+880-" value="Bangladesh (+880) ">Bangladesh (+880) </option>

                             <option data-dialcode="+1246-" value="Barbados (+1246)">Barbados (+1246) </option>

                             <option data-dialcode="+375-" value="Belarus (+375)">Belarus (+375) </option>

                             <option data-dialcode="+501-" value="Belize (+501) ">Belize (+501) </option>

                             <option data-dialcode="+229-" value="Benin (+229) ">Benin (+229) </option>

                             <option data-dialcode="+1441-" value="Bermuda (+1441)">Bermuda (+1441) </option>

                             <option data-dialcode="+975-" value="Bhutan (+975) ">Bhutan (+975) </option>

                             <option data-dialcode="+591-" value="Bolivia (+591) ">Bolivia (+591) </option>

                             <option data-dialcode="+387-" value="Bosnia Herzegovina (+387)">Bosnia Herzegovina (+387) </option>

                             <option data-dialcode="+267-" value="Botswana (+267)">Botswana (+267) </option>

                             <option data-dialcode="+55-" value="Brazil (+55) ">Brazil (+55) </option>

                             <option data-dialcode="+673-" value="Brunei (+673) ">Brunei (+673) </option>


                             <option data-dialcode="+226-" value="Burkina Faso (+226)">Burkina Faso (+226) </option>

                             <option data-dialcode="+237-" value="Cameroon (+237) ">Cameroon (+237) </option>

                             <option data-dialcode="+238-" value="Cape Verde Islands (+238) ">Cape Verde Islands (+238) </option>

                             <option data-dialcode="+1345-" value="Cayman Islands (+1345)">Cayman Islands (+1345) </option>

                             <option data-dialcode="+236-" value="Central African Republic (+236)">Central African Republic (+236) </option>

                             <option data-dialcode="+56-" value="Chile (+56)">Chile (+56) </option>

                             <option data-dialcode="+269-" value="Comoros (+269) ">Comoros (+269) </option>

                             <option data-dialcode="+242-" value="Congo (+242)">Congo (+242) </option>

                             <option data-dialcode="+682-" value="Cook Islands (+682)">Cook Islands (+682) </option>

                             <option data-dialcode="+506-" value="Costa Rica (+506)">Costa Rica (+506) </option>

                             <option data-dialcode="+53-" value="Cuba (+53)">Cuba (+53) </option>

                             <option data-dialcode="+90392-" value="Cyprus North (+90392) ">Cyprus North (+90392) </option>

                             <option data-dialcode="+357-" value="Cyprus South (+357)">Cyprus South (+357) </option>

                             <option data-dialcode="+42-" value="Czech Republic (+42) ">Czech Republic (+42) </option>

                             <option data-dialcode="+2463-" value="Diego Garcia (+2463) ">Diego Garcia (+2463) </option>

                             <option data-dialcode="+253-" value="Djibouti (+253) ">Djibouti (+253) </option>

                             <option data-dialcode="+1809-" value="Dominica (+1809)">Dominica (+1809) </option>

                             <option data-dialcode="+1809-" value="Dominican Republic (+1809)">Dominican Republic (+1809) </option>

                             <option data-dialcode="+593-" value="Ecuador (+593)">Ecuador (+593) </option>

                             <option data-dialcode="+353-" value="Eire (+353)">Eire (+353) </option>

                             <option data-dialcode="+503-" value="El Salvador (+503)">El Salvador (+503) </option>

                             <option data-dialcode="+240-" value="Equatorial Guinea (+240) ">Equatorial Guinea (+240) </option>

                             <option data-dialcode="+291-" value="Eritrea (+291)">Eritrea (+291) </option>

                             <option data-dialcode="+372-" value="Estonia (+372)">Estonia (+372) </option>

                             <option data-dialcode="+251-" value="Ethiopia (+251)">Ethiopia (+251) </option>

                             <option data-dialcode="+500-" value="Falkland Islands (+500)">Falkland Islands (+500) </option>

                             <option data-dialcode="+298-" value="Faroe Islands (+298) ">Faroe Islands (+298) </option>

                             <option data-dialcode="+679-" value="Fiji (+679) ">Fiji (+679) </option>

                             <option data-dialcode="+594-" value="French Guiana (+594)">French Guiana (+594) </option>

                             <option data-dialcode="+689-" value="French Polynesia (+689)">French Polynesia (+689) </option>

                             <option data-dialcode="+241-" value="Gabon (+241) ">Gabon (+241) </option>

                             <option data-dialcode="+220-" value="Gambia (+220) ">Gambia (+220) </option>

                             <option data-dialcode="+233-" value="Ghana (+233) ">Ghana (+233) </option>

                             <option data-dialcode="+350-" value="Gibraltar (+350) ">Gibraltar (+350) </option>

                             <option data-dialcode="+30-" value="Greece (+30)">Greece (+30) </option>

                             <option data-dialcode="+299-" value="Greenland (+299)">Greenland (+299) </option>

                             <option data-dialcode="+1473-" value="Grenada (+1473)">Grenada (+1473) </option>

                             <option data-dialcode="+590-" value="Guadeloupe (+590)">Guadeloupe (+590) </option>

                             <option data-dialcode="+671-" value="Guam (+671)">Guam (+671) </option>

                             <option data-dialcode="+224-" value="Guinea (+224)">Guinea (+224) </option>

                             <option data-dialcode="+245-" value="Guinea - Bissau (+245)">Guinea - Bissau (+245) </option>

                             <option data-dialcode="+592-" value="Guyana (+592)">Guyana (+592) </option>

                             <option data-dialcode="+509-" value="Haiti (+509) ">Haiti (+509) </option>

                             <option data-dialcode="+504-" value="Honduras (+504)">Honduras (+504) </option>

                             <option data-dialcode="+36-" value="Hungary (+36) ">Hungary (+36) </option>

                             <option data-dialcode="+354-" value="Iceland (+354) ">Iceland (+354) </option>

                             <option data-dialcode="+964-" value="Iraq (+964) ">Iraq (+964) </option>

                             <option data-dialcode="+225-" value="Ivory Coast (+225) ">Ivory Coast (+225) </option>

                             <option data-dialcode="+1876-" value="Jamaica (+1876)">Jamaica (+1876) </option>

                             <option data-dialcode="+81-" value="apan (+81) ">Japan (+81) </option>

                             <option data-dialcode="+962-" value="Jordan (+962)">Jordan (+962) </option>

                             <option data-dialcode="+7-" value="Kazakhstan (+7) ">Kazakhstan (+7) </option>

                             <option data-dialcode="+254-" value="Kenya (+254) ">Kenya (+254) </option>

                             <option data-dialcode="+686-" value="Kiribati (+686)">Kiribati (+686) </option>

                             <option data-dialcode="+850-" value="Korea North (+850)">Korea North (+850) </option>

                             <option data-dialcode="+82-" value="Korea South (+82) ">Korea South (+82) </option>


                             <option data-dialcode="+996-" value="Kyrgyzstan (+996) ">Kyrgyzstan (+996) </option>

                             <option data-dialcode="+856-" value="Laos (+856) ">Laos (+856) </option>

                             <option data-dialcode="+371-" value="Latvia (+371)">Latvia (+371) </option>

                             <option data-dialcode="+266-" value="Lesotho (+266)">Lesotho (+266) </option>

                             <option data-dialcode="+231-" value="Liberia (+231)">Liberia (+231) </option>

                             <option data-dialcode="+218-" value="Libya (+218) ">Libya (+218) </option>

                             <option data-dialcode="+417-" value="Liechtenstein (+417) ">Liechtenstein (+417) </option>

                             <option data-dialcode="+370-" value="Lithuania (+370)">Lithuania (+370)</option>

                             <option data-dialcode="+352-" value="Luxembourg (+352) ">Luxembourg (+352) </option>

                             <option data-dialcode="+853-" value="Macao (+853)">Macao (+853) </option>

                             <option data-dialcode="+389-" value="Macedonia (+389) ">Macedonia (+389) </option>

                             <option data-dialcode="+261-" value="Madagascar (+261)">Madagascar (+261) </option>

                             <option data-dialcode="+265-" value="Malawi (+265)">Malawi (+265) </option>

                             <option data-dialcode="+60-" value="Malaysia (+60)">Malaysia (+60) </option>

                         </select>

                         <!-- <input type="text" placeholder="Phone Number" id="dialCode"/> -->
                         <input type="text" class="form-control" placeholder="Mobile No." id="dialCode" name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="20" required style="font-weight:500; color:black;">


                         <textarea name="description" required class="form-control" id="description" placeholder="Description" rows="3" style="font-weight:500; color:black!important;"></textarea>


                         <div class="form-group">
                         
                             <div class="text-dark" style='font-size: 14px; margin-left: 50px;'>
                                 <strong><b style="color: black;">Captcha Please enter sum :</b></strong> <span class="badge badge-secondary" style="margin-right: 4px;background-color: black;color: #fff; padding: 6px 8px;"><?php echo $num31; ?></span><b style="color:black;">+</b><span class="badge badge-secondary" style="margin-left: 4px; margin-right: 5px;background-color: black;color: white;padding: 6px 8px;"><?php echo $num41; ?></span> ?
                             </div><br>
                             <input type="text" class="form-control  quiz-control1" id="quiz2" placeholder="Please Enter Sum*" required>
                         
                             <div style="display:none" class="alert alert-danger" id='msgcaptch2'>Please enter right captcha </div>

                         </div>



                         <input type="submit" id="contact" data-mata="<?php echo $sum2; ?>" disabled name="contact_submit_form" value="Send Query">

                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--popup close here-->
 <script>
     // for form
     $("#areaCode").on("change", function() {
         $('#dialCode').val($('option:selected', this).data('dialcode'));
     });
     $("select[name=country]").change(function() {
         $('input#phone').val($('option:selected', this).data('countrycode'));
     });
 </script>
 <script>
     const submitButton2 = document.getElementById("contact");
     const quizInput2 = document.querySelector("#quiz2");
     quizInput2.addEventListener("input", function(e) {
         const res2 = submitButton2.getAttribute("data-mata");
         if (this.value == res2) {
             document.getElementById("msgcaptch2").style.display = "none";
             //var checkkk=IsEmpty();
             //if(checkkk == true){submitButton.removeAttribute("disabled");}else{submitButton.setAttribute("disabled", "");}
             submitButton2.removeAttribute("disabled");
             //console.log('f1');
         } else {
             document.getElementById("msgcaptch2").style.display = "block";
             submitButton1.setAttribute("disabled", "");
             //console.log('f12');
         }
     });
     //  function doSubmit1() {
     //   document.getElementById('contact-us1').action ='innerformemail.php';

     //   return true;
     // }
 </script>

<?php include("include/common-ecomm-portfolio-testimonial.php"); ?>
<?php include("include/inner-form.php"); ?>
<?php include("include/footer.php"); ?>




