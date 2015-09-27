-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2015 at 07:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdiet`
--

CREATE TABLE IF NOT EXISTS `tdiet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diet_code` varchar(20) NOT NULL,
  `diet_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `diet_code` (`diet_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tdiet`
--

INSERT INTO `tdiet` (`id`, `diet_code`, `diet_name`) VALUES
(11, 'ABCD', '1'),
(12, '2', '2'),
(13, '3', '3'),
(14, '4', '4'),
(15, '5', '5'),
(16, '6', '6'),
(17, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tpage`
--

CREATE TABLE IF NOT EXISTS `tpage` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shop_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `name` (`name`,`shop_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tpage`
--

INSERT INTO `tpage` (`page_id`, `name`, `title`, `content`, `type`, `shop_id`) VALUES
(1, 'about-us', 'About Us page', '<h2 class="ui-widget-content ui-corner-all header">About Us</h2>\n<ol>\n<li>\n<div class="list-body">Getmystuff delivers the best groceries available to you. We are more than a fun and efficient way to buy groceries. Getmystuff reconnects you with food, home care products, personal care products, fresh produce like fruits and vegetables from vendors who know their food and uphold certain values that are often misplaced. Like taste, time, ecology, thrift and community.<br /><br />Right from the word go, we''ve always done things differently at Getmystuff. When you''re trying to revolutionise grocery shopping, there''s no point copying everyone else, is there?<br /><br />If you''ve ever wondered how we do what we do, this is the right place to find out more</div>\n</li>\n<li>\n<h2 class="list-header">More Savings</h2>\n<div class="list-body">We believe that you should be able to enjoy first-class service without having to pay more for your shopping. That''s why there are so many ways to save on your monthly shop at Getmystuff, from free home delivery to exclusive online offers, and even our very own range of Getmystuff groceries.<br /><br />We also feature an ever-changing selection of special offers alongside our great value bundle offers and deals.<br /><br />And if you think about it, you save so much&nbsp;<strong>time</strong>&nbsp;to spend with your family and on things you love.</div>\n</li>\n<li>\n<h2 class="list-header">Less Traffic</h2>\n<div class="list-body">We provide a good alternative to traditional grocery shopping. Our home delivery ensures you save precious fuel, while our delivery personal reduce traffic on our busy roads.<br /><br />We also deliver from the nearest location to your place, instead of from far away supermarket chains.<br /><br />Oh, and, best of all, the more we grow, the more energy-efficient our service becomes... so you''re doing your bit for the planet as well as your monthly shopping budget.</div>\n</li>\n<li>\n<h2 class="list-header">So what are you waiting for?<a id="calltoaction" class="calltoaction" style="position: static; margin-left: 220px;" href="javascript:void();">Start Shopping</a></h2>\n</li>\n</ol>', 'HTML', 7508),
(2, 'help', 'Help page', '<h1 class="ui-widget-content ui-corner-all header">Help</h1>\r\n<ol>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How do I start off?</a></h2>\r\n<div class="list-body">Just goto the shop and add your products by clicking on the BUY NOW button and you are done!</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Is it necessary to have an account to shop?</a></h2>\r\n<div class="list-body">No, while it is not necessary to have a Getmystuff account to shop and purchase items, it is certainly recommended to have one. You can shop and checkout by providing just your email ID.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How do I pay?</a></h2>\r\n<div class="list-body">You can pay cash to the Getmystuff representative when the order is delivered. We will be introducing online payments using credit cards and net banking shortly.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What is the minimum order?</a></h2>\r\n<div class="list-body">The minimum order is Rs.500.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Is there a delivery charge?</a></h2>\r\n<div class="list-body">All orders above Rs.1500 will be delivered free of charge. A delivery charge of Rs.40/- will be levied for orders below Rs.1500.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How fast do you deliver?</a></h2>\r\n<div class="list-body">We always deliver your order in the slot you select when placing the order. Incase there is a problem delivering the order in the slot, we will call you to discuss an alternate slot.&nbsp;<br />All orders placed after 12:00pm will be delivered the next day.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if I need faster delivery?</a></h2>\r\n<div class="list-body">We do not offer a priority delivery service at this time. We will be enabling this feature shortly.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if I am not at home when you deliver?</a></h2>\r\n<div class="list-body">We request that you select a delivery slot when you are available at home for the delivery.<br />If you are not at home, you can ask us to leave the order with your neighbour.<br />You also have an option to have the groceries delivered to your work place. In case you need the order to be delivered later than the selected time slot, Please call us and request for the same.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if a product is out of stock?</a></h2>\r\n<div class="list-body">If a product is out of stock, we will call you ask if you prefer an alternative product. Otherwise we will deliver without the product.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Are there any hidden charges?</a></h2>\r\n<div class="list-body">No, there are absolutely no hidden charges when you make a purchase with Getmystuff. we believe in transparent pricing and the price you see in your cart is the price you pay.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How do I check the status of my order?</a></h2>\r\n<div class="list-body">Your order will normally be delivered in the selected slot. However, incase you have questions or the order was not delivered you can&nbsp;<a href="http://getmystuff.co.in/show/contact-us">contact us</a></div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Can I cancel my orders?</a></h2>\r\n<div class="list-body">Yes, you can cancel your orders provided we have not already dispatched it. To cancel your order please&nbsp;<a href="http://getmystuff.co.in/show/contact-us">contact us</a></div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">When will Getmystuff deliver to my area?</a></h2>\r\n<div class="list-body">Getmystuff is rapidly expanding, and we will be in your area very soon. But do let us know if you&nbsp;<a href="http://getmystuff.co.in/show/service-areas">want us in your locality sooner here</a></div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if the product was opened/damaged/expired?</a></h2>\r\n<div class="list-body">Our Quality team always keeps a check on the stuff being shipped to the customers for the suitability for delivery. However, please check your stuff as soon as the order is delivered and if you find any product was opened/damaged/expired inadvertently, Please return to our delivery staff and please ensure to mark a comment in the delivery invoice. Please deduct the amount for the product and pay the remaining invoice. You may also call us on our contact number and register the concern.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What is your return policy?</a></h2>\r\n<div class="list-body">All our products delivered needs to be checked by the customer at the time of delivery. Once the delivery invoice has been signed by the customer, the delivery is confirmed to be accepted by the customer. However, in case of any complaint, Please call us on our contact number and we shall take necessary action on case by case basis.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">My question is still not answered?</a></h2>\r\n<div class="list-body"><a href="http://getmystuff.co.in/show/contact-us">Contact us</a>&nbsp;with your question and we''ll get back to you as soon as possible.</div>\r\n</li>\r\n</ol>', 'HTML', 7508),
(3, 'contact-us', 'Contact Us page', NULL, 'HTML', 7508),
(4, 'how-it-works', 'How It Works page', '<h1 class="ui-widget-content ui-corner-all header">How it works</h1>\r\n<ol>\r\n<li>\r\n<h2 class="list-header">Goto your store</h2>\r\n<div class="list-body">Goto http://getmystuff.co.in in your favourite browser.</div>\r\n</li>\r\n<li>\r\n<h2 class="list-header">Select products</h2>\r\n<div class="list-body">You can quickly add items by clicking on the&nbsp;<strong>+</strong>&nbsp;button which appears when you hover over the product.<br /><img src="//getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/howitworks/3.quick_select_product.png" alt="Quick select products" /></div>\r\n<div class="list-body">You can also add items by clicking on the product image and selecting the number of items to add from the dropdown menu. Don''t forget to click&nbsp;<strong>Add to Cart</strong>!&nbsp;<br /><img src="//getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/howitworks/3.select_product.png" alt="Select products" /></div>\r\n</li>\r\n<li>\r\n<h2 class="list-header">Checkout cart</h2>\r\n<div class="list-body">Click the checkout button on the top right of the page to checkout your cart.&nbsp;<br /><img src="//getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/howitworks/4.1.checkout.png" alt="Checkout cart" /></div>\r\n<div class="list-body">Make sure you verify your cart contents and provide a valid delivery address and time&nbsp;<br /><img src="//getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/howitworks/4.2.address.png" alt="Enter your address" /></div>\r\n<div class="list-body">Your order is now placed!<img src="//getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/howitworks/4.3.confirm.png" alt="Order confirmation" /></div>\r\n</li>\r\n<li>\r\n<h2 class="list-header">We Deliver!</h2>\r\n<div class="list-body">Once you have placed the order, we simply deliver it to your address as per your selected time!</div>\r\n<div class="list-body">All you have to do is pay Cash on Delivery!</div>\r\n<div class="list-body">We request you to check the items on Delivery and sign off the Invoice copy.</div>\r\n</li>\r\n<li>\r\n<div class="list-header">&nbsp;</div>\r\n</li>\r\n</ol><ol>\r\n<li>\r\n<div class="list-header">\r\n<div class="list-header" style="text-align: center;">So what are you waiting for? <a id="calltoaction" class="calltoaction" style="position: static; margin-left: 220px;" href="javascript:void();">Start Shopping</a></div>\r\n</div>\r\n</li>\r\n</ol>', 'HTML', 7508),
(5, 'privacy-policy', 'Privacy Policy page', '<style>\n.privacy-policy li {\n	padding-top:10px !important;\n}\n.privacy-policy .list-body p {\n	line-height:160%;\n}\n</style>\n\n<h1 class="ui-widget-content ui-corner-all header">Privacy Policy</h1>\n\n\n<ol class="privacy-policy">\n<li><div class="list-body"><p><br />We value the trust you place in us. Thats why we insist upon the highest standards for secure transactions and customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices. <br /> <br />Note: <br />Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically. <br /> <br />By visiting this Website you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website. <br /> <br />By mere use of the Website, you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy. This Privacy Policy is incorporated into and subject to the Terms of Use. <br /> </p>\n</div></li>\n\n\n<li><div class="list-body"><h2>Collection of Personally Identifiable Information and other Information</h2>\n<p><br />When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose. <br /> <br />In general, you can browse the Website without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service or feature on the Website. We may automatically track certain information about you based upon your behaviour on our Website. We use this information to do internal research on our users demographics, interests, and behaviour to better understand, protect and serve our users. This information is compiled and analysed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address. <br /> <br />We use data collection devices such as "cookies" on certain pages of the Website to help analyse our web page flow, measure promotional effectiveness, and promote trust and safety. "Cookies" are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a "cookie". <br />We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are "session cookies," meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline our cookies if your browser permits, although in that case you may not be able to use certain features on the Website and you may be required to re-enter your password more frequently during a session. <br /> <br />Additionally, you may encounter "cookies" or other similar devices on certain pages of the Website that are placed by third parties. We do not control the use of cookies by third parties. <br /> <br />If you choose to buy on the Website, we collect information about your buying behaviour. <br /> <br />If you transact with us, we collect some additional information, such as a billing address, a credit / debit card number and a credit / debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders. <br /> <br />If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law. <br /> <br />If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you. <br /> <br />We collect personally identifiable information (email address, name, phone number, credit card / debit card / other payment instrument details, etc.) from you when you set up a free account with us. While you can browse some sections of our Website without being a registered member, certain activities (such as placing an order) do require registration. We do use your contact information to send you offers based on your previous orders and your interests. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Use of Demographic / Profile Data / Your Information</h2>\n<p><br />We use personal information to provide the services you request. To the extent we use your personal information to market to you, we will provide you the ability to opt-out of such uses. We use your personal information to resolve disputes; troubleshoot problems; help promote a safe service; collect money; measure consumer interest in our products and services, inform you about online and offline offers, products, services, and updates; customize your experience; detect and protect us against error, fraud and other criminal activity; enforce our terms and conditions; and as otherwise described to you at the time of collection. <br /> <br />In our efforts to continually improve our product and service offerings, we collect and analyse demographic and profile data about our users activity on our Website. <br /> <br />We identify and use your IP address to help diagnose problems with our server, and to administer our Website. Your IP address is also used to help identify you and to gather broad demographic information. <br /> <br />We will occasionally ask you to complete optional online surveys. These surveys may ask you for contact information and demographic information (like zip code, age, or income level). We use this data to tailor your experience at our Website, providing you with content that we think you might be interested in and to display content according to your preferences. <br /> <br />Cookies <br /> <br />A "cookie" is a small piece of information stored by a web server on a web browser so it can be later read back from that browser. Cookies are useful for enabling the browser to remember information specific to a given user. We place both permanent and temporary cookies in your computers hard drive. The cookies do not contain any of your personally identifiable information. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Sharing of personal information</h2>\n<p><br />We may share personal information with our other corporate entities and affiliates to help detect and prevent identity theft, fraud and other potentially illegal acts; correlate related or multiple accounts to prevent abuse of our services; and to facilitate joint or co-branded services that you request where such services are provided by more than one corporate entity. Those entities and affiliates may not market to you as a result of such sharing unless you explicitly opt-in. <br /> <br />We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public. <br /> <br />We and our affiliates will share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Links to Other Sites</h2>\n<p><br />Our Website links to other websites that may collect personally identifiable information about you. getmystuff.co.in is not responsible for the privacy practices or the content of those linked websites. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Security Precautions</h2>\n<p><br />Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Choice/Opt-Out</h2>\n<p><br />We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account. <br /> <br />If you want to remove your contact information from all getmystuff.co.in lists and newsletters, please let us know via this page &nbsp;<u><a href="http://getmystuff.co.in/show/contact-us"> http://getmystuff.co.in/show/contact-us</a></u><br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Advertisements on getmystuff.co.in</h2>\n<p><br />We use third-party advertising companies to serve ads when you visit our Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Your Consent</h2>\n<p><br />By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to Your consent for sharing your information as per this privacy policy. <br /> <br />If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it. <br /> </p>\n</div></li>\n\n<li><div class="list-body"><h2>Queries, Complaints and suggestions</h2>\n<p><br />In case of any Queries, Complaints and suggestions please <u><a href="http://getmystuff.co.in/show/contact-us">Contact Us</a></u> and we will try to resolve your concern as smoothly as possible.&nbsp;</p>\n<br><br><br>\n\n</ol>\n', 'HTML', 7508),
(6, 'terms', 'Terms page', '<style>\n.terms li {\n	padding-top:10px !important;\n}\n.terms .list-body p {\n	line-height:160%;\n}\n</style>\n<h1 class="ui-widget-content ui-corner-all header">Terms & Conditions</h1>\n\n<ol class="terms">\n<li><div class="list-body"><h2>Terms &amp; Conditions in short</h2>\n<ul class="summary-list">\n    <li style="list-style: square outside none;margin-left:50px">By ordering any of our products, you agree to be bound by these terms &amp; conditions.</li>\n    <li style="list-style: square outside none;margin-left:50px">By placing an order at getmystuff.co.in, you warrant that you are at least 18 years old or have parents'' permission to buy from us.</li>\n    <li style="list-style: square outside none;margin-left:50px">All personal information you provide us with or that we obtain will be handled by getmystuff.co.in as responsible for the personal information.</li>\n    <li style="list-style: square outside none;margin-left:50px">Events outside getmystuff.co.in''s control shall be considered force majeure.</li>\n    <li style="list-style: square outside none;margin-left:50px">The price applicable is that set at the date on which you place your order.</li>\n    <li style="list-style: square outside none;margin-left:50px">Shipping costs and payment fees are recognized before confirming the purchase.</li>\n    <li style="list-style: square outside none;margin-left:50px">Card information is transmitted over secure SSL encryption and is not stored.</li>\n    <li style="list-style: square outside none;margin-left:50px">Please note that local charges may occur.</li>\n    <li style="list-style: square outside none;;margin-left:50px">getmystuff.co.in reserves the right to amend any information without prior notice.</li>\n</ul>\n<br>\n</div></li>\n\n<li><div class="list-body"><h2>Terms &amp; Conditions</h2><br/>\n<p>\n    This page contains the terms &amp; conditions. Please read these terms\n    &amp; conditions carefully before ordering any products from us. You\n    should understand that by ordering any of our products, you agree to be\n    bound by these terms &amp; conditions.\n</p>\n<p>\n    By placing an order at getmystuff.co.in, you warrant that you are at\n    least 18 years old (or have parents'' permission to buy from us) and\n    accept these terms &amp; conditions which shall apply to all orders\n    placed or to be placed at getmystuff.co.in for the sale and supply of any\n    products. None of these terms &amp; conditions affect your statutory\n    rights. No other terms or changes to the terms &amp; conditions shall be\n    binding unless agreed in writing signed by us.\n</p>\n</div></li>\n\n<li><div class="list-body"><h2>Personal Information</h2><br/>\n<p>\n    All personal information you provide us with or that we obtain will be\n    handled by getmystuff.co.in as responsible for the personal information.\n    The personal information you provide will be used to ensure deliveries to\n    you, the credit assessment, to provide offers and information on our\n    catalog to you. The information you provide is only available to\n    getmystuff.co.in and will not be shared with other third parties.\n    You have the right to inspect the information held about you. You always\n    have the right to request getmystuff.co.in to delete or correct the\n    information held about you. By accepting the getmystuff.co.in Conditions,\n    you agree to the above.\n</p>\n</div></li>\n\n<li><div class="list-body"><h2>Force Majeure</h2><br/>\n<p>\n    Events outside getmystuff.co.in''s control, which is not reasonably\n    foreseeable, shall be considered force majeure, meaning that\n    getmystuff.co.in is released from getmystuff.co.in''s obligations to fulfill\n    contractual agreements. Example of such events are government action or\n    omission, new or amended legislation, conflict, embargo, fire or flood,\n    sabotage, accident, war, natural disasters, strikes or lack of delivery\n    from suppliers. The force majeure also includes government decisions that\n    affect the market negatively and products, for example, restrictions,\n    warnings, ban, etc.\n</p>\n</div></li>\n\n<li><div class="list-body"><h2>Payment</h2><br/>\n<p>\n    All products remain getmystuff.co.in''s property until full payment is made.\n    The price applicable is that set at the date on which you place your order.\n    Shipping costs and payment fees are recognized before confirming the\n    purchase. If you are under 18 years old you must have parents'' permission to\n    buy from getmystuff.co.in.\n</p>\n<p>\n    All transfers conducted through getmystuff.co.in are handled and transacted\n    through third party dedicated gateways to guarantee your protection. Card\n    information is not stored and all card information is handled over SSL\n    encryption. Please read the terms &amp; conditions for the payment gateway\n    choosen for the transaction as they are responsible for the transactions made.\n</p>\n</div></li>\n\n<li><div class="list-body"><h2>Local Taxes</h2><br/>\n<p>\n    Please note that local charges (sales tax, customs duty) may occur, depending\n    on your region and local customs duties. These charges are at the customers\n    own expense.\n</p>\n</div></li>\n\n<li><div class="list-body"><h2>Cookies</h2><br/>\n<p>\n    getmystuff.co.in uses cookies. A cookie is a small text file stored\n    on your computer that contains information that helps the website to identify\n    and track the visitor. Cookies do no harm to your computer, consist only of\n    text, can not contain viruses and occupies virtually no space on your hard\n    drive. There are two types of cookies: "Session Cookies" and cookies that are\n    saved permanently on your computer.\n</p>\n<p>\n    The first type of cookie commonly used is "Session Cookies". During the time\n    you visit the website, our web server assigns your browser a unique identifier\n    string so as not to confuse you with other visitors. A "Session Cookie" is\n    never stored permanently on your computer and disappears when you close your\n    browser. To use getmystuff.co.in without troubles you need to have cookies\n    enabled.\n</p>\n<p>\n    The second type of cookie saves a file permanently on your computer. This type\n    of cookie is used to track how visitors move around on the website. This\n    is only used to offer visitors better services and support. The text files can\n    be deleted. On getmystuff.co.in we use this type of cookie to keep track of\n    your shopping cart and to keep statistics of our visitors. The information\n    stored on your computer is only a unique number, without any connection to\n    personal information.\n</p>\n</div></li>\n\n<li><div class="list-body"><h2>Additional Information</h2><br/>\n<p>\n    getmystuff.co.in reserves the right to amend any information, including but not\n    limited to prices, technical specifications, terms of purchase and product\n    offerings without prior notice. At the event of when a product is sold out,\n    getmystuff.co.in has the right to cancel the order and refund any amount paid in\n    the best way. getmystuff.co.in shall also notify the customer of equivalent\n    replacement products if available.\n</p>\n<br>\n<p>\n    Shopnix is not responsible for any content, interactions or transfers made on http://getmystuff.co.in</p>\n<br>\n<p>All enquiries to be made via : <u><a href="http://getmystuff.co.in/show/contact-us">Contact Us</a></u></p>\n</div></li>\n</ol>\n', 'HTML', 7508),
(7, 'header', 'This is additional Header code', '<!-- Replace with your own analytic/chat code -->\r\n<script type=''text/javascript''>\r\n(function(i,s,o,g,r,a,m){i[''GoogleAnalyticsObject'']=r;i[r]=i[r]||function(){\r\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n  })(window,document,''script'',''//www.google-analytics.com/analytics.js'',''ga'');\r\n\r\n  ga(''create'', ''UA-60909632-1'', ''auto'');\r\n  ga(''send'', ''pageview'');\r\n</script>\r\n\r\n<style>\r\n\r\n#relay-options li:nth-child(4) {display: none}\r\n.product-details .ui-widget-content, .option-row .ui-widget-content{background: #fff !important;\r\ncolor: black !important;} \r\n\r\n#Pincode-list {\r\n    width: 190px;\r\n    padding: 3px;\r\n    margin: 0;\r\n    -webkit-border-radius: 4px;\r\n    -moz-border-radius: 4px;\r\n    border-radius: 4px;\r\n    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;\r\n    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;\r\n    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;\r\n    background: #f8f8f8;\r\n    color: #888;\r\n    border: none;\r\n    outline: none;\r\n    display: inline-block;\r\n    -webkit-appearance: none;\r\n    -moz-appearance: none;\r\n    cursor: pointer;\r\n}\r\n\r\n#pincode-label {position:relative; margin-left: 140px;}\r\n#pincode-label:after {\r\n    content:''<>'';\r\n    font:11px "Consolas", monospace;\r\n    color: #aaa;\r\n    -webkit-transform: rotate(90deg);\r\n    -moz-transform: rotate(90deg);\r\n    -ms-transform: rotate(90deg);\r\n    transform: rotate(90deg);\r\n    right: 8px; \r\n    top:2px;\r\n    padding: 0 0 2px;\r\n    border-bottom: 1px solid #ddd;\r\n    position: absolute;\r\n    pointer-events: none;\r\n}\r\n#pincode-label:before {\r\n    content:'''';\r\n    right: 6px; \r\n    top: 0px;\r\n    width: 20px; \r\n    height: 20px;\r\n    background: #f8f8f8;\r\n    position: absolute;\r\n    pointer-events: none;\r\n    display: block;\r\n}\r\n\r\n #ui-dialog-title-html-widget-63914 + a .ui-icon , #ui-dialog-title-html-widget-63914 + a .ui-icon-closethick,  #ui-dialog-title-html-widget-63914 + .ui-dialog-titlebar-close ,#ui-dialog-title-html-widget-63914 + .ui-corner-all {\r\n              display: none !important\r\n      }\r\n</style>\r\n\r\n<script>\r\n/*\r\n=============================================================\r\nThe below code enables the pincode select option at the homepage\r\n=============================================================\r\n*/\r\n\r\n$(document).ready(function(){\r\n\r\n$(''#vertical_menu'').mouseenter(function(){ $(''.zoomContainer'').addClass(''tempZoomContainer'').removeClass(''zoomContainer'') }).mouseleave(function(){ $(''.tempZoomContainer'').addClass(''zoomContainer'').removeClass(''tempZoomContainer'') });\r\n\r\n$(''#html-widget-63914'').addClass(''home-pincode'');\r\n$(''.logo-container'').append($(''#html-widget-63914'').fadeIn())\r\n if(document.location.href=="http://getmystuff.co.in/"){\r\n    $(".home-pincode").dialog({\r\n                width: 415,\r\n                modal: true,                             \r\n                title: "Area we serve",\r\n       buttons:[\r\n        { text: "CLICK HERE TO CONTINUE", click: function () {\r\n                      if($("#Pincode-list").val()===""){\r\n                               alert("Please select");\r\n                        }\r\n                      else\r\n                         {\r\n                          $(this).dialog("close");\r\n                         }\r\n               }, style:"margin-left: 100px;" },\r\n        { text: "I DO NOT WISH TO CONTINUE", click: function () {  window.location = "https://www.google.co.in/";}, style:"margin-left:90px;" }\r\n    ]\r\n\r\n    });\r\n  }\r\n})\r\n\r\n/*\r\n=============================================================\r\nThe below code enables the pincode select option ends\r\n=============================================================\r\n*/\r\n\r\n</script>', 'CODE', 7508),
(8, 'Footer', 'This is additional Footer code', '<!-- FEEDBACK SECTION START -->\n<style>\n	ul#feedback-section {position: fixed !important;position: absolute;margin: 0px;padding: 0px;top: 200px;left: 0px;list-style: none;z-index: 9999;font-family: "socialicoregular";}\n	ul#feedback-section li a {background-position: center center;	background-repeat: no-repeat;color: #FFFFFF;display: block;height: 25px;margin-bottom: 3px;margin-right: 2px;margin-top: 0px;padding-top:0px;}\n</style>\n\n<ul id="feedback-section">\n\n	<!-- feedback -->\n	<li><a href="http://getmystuff.co.in/show/contact-us" style="width:24px;height:87px;background-image: url(http://getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/feedback.png);padding:0px;"></a></li>\n\n	<!-- facebook \n	<li><a target="_blank" href="https://www.facebook.com/" style="width:24px;background-image: url(http://getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/facebook.png);padding:0px;"></a></li> -->\n\n	<!-- twitter \n	<li><a target="_blank" href="https://www.twitter.com/" style="width:24px;background-image: url(http://getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/twitter.png);padding:0px;"></a></li> -->\n\n	<!-- linkedin \n	<li><a target="_blank" href="https://www.linkedin.com/" style="width:24px;background-image: url(http://getmystuff.co.in/themes/layout1/static/images.RELEASE_DATE/linkedin.png);padding:0px;"></a></li> -->\n\n</ul>\n\n<!-- FEEDBACK SECTION END -->', 'CODE', 7508),
(9, 'faq', 'FAQ page', '<h1 class="ui-widget-content ui-corner-all header">Frequently asked questions</h1>\n<ol>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How do I start off?</a></h2>\n<div class="list-body">Just goto the shop and add your products by clicking on the BUY NOW button and you are done!</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Is it neccessary to have an account to shop?</a></h2>\n<div class="list-body">No, while it is not necessary to have a Ravi T account to shop and purchase items, it is certainly recommended to have one. You can shop and checkout by providing just your email ID.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How do I pay?</a></h2>\n<div class="list-body">You can pay cash to the Ravi T representative when the order is delivered. We will be introducing online payments using credit carts and net banking shortly.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What is the minimum order?</a></h2>\n<div class="list-body">The minimum order is Rs.100.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Is there a delivey charge?</a></h2>\n<div class="list-body">No all our deliveries are free.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How fast do you deliver?</a></h2>\n<div class="list-body">We always deliver your order in the slot you select when placing the order. Incase there is a problem delivering the order in the slot, we will call you to discuss an alternate slot.<br />All orders placed after 1:00pm will be delivered the next day.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if I need faster delivery?</a></h2>\n<div class="list-body">We do offer a priority delivery service at an additional charge of Rs.20 per delivery. Delivery in this model will be done within 2 hours of placing the order. Incase you need your order to be delivered in the priority mode, then please&nbsp;<a href="http://getmystuff.co.in/show/contact-us">contact us</a>&nbsp;with your order number after placing the order.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if I am not at home when you deliver?</a></h2>\n<div class="list-body">We request that you select a delivery slot when you are available at home for the delivery.<br />If you are not at home, you can ask us to leave the order with your neighbour.<br />You also have an option to have the groceries delivered to your work place</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What if a product is out of stock?</a></h2>\n<div class="list-body">If a product is out of stock, we will call you ask if you prefer an alternative product. Otherwise we will deliver without the product.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Are there any hidden charges?</a></h2>\n<div class="list-body">No, There are absolutely no hidden charges when you make a purchase with Ravi T. we belive in transparent pricing and the price you see in your cart is the price you pay.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">How do I check the status of my order?</a></h2>\n<div class="list-body">Your order will normally be delivered in the selected slot. However, incase you have questions or the order was not delivered you can&nbsp;<a href="http://getmystuff.co.in/show/contact-us">contact us</a></div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">Can I cancel my orders?</a></h2>\n<div class="list-body">Yes, you can cancel your orders provided we have not already dispatched it. To cancel your order please&nbsp;<a href="http://getmystuff.co.in/show/contact-us">contact us</a></div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">When will Ravi T deliver to my area?</a></h2>\n<div class="list-body">Ravi T is rapidly expanding, and we will be in your area very soon. But do let us know if you&nbsp;<a href="http://getmystuff.co.in/show/service-areas">want us in your locality sooner here</a></div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What is the product was opened/damaged/expired?</a></h2>\n<div class="list-body">If the product was not as per expectations, please&nbsp;<a href="http://getmystuff.co.in/show/contact-us">contact us</a>&nbsp;so that we can either replace the faulty product.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">What is your return policy?</a></h2>\n<div class="list-body">All products sold at Ravi T are covered under our 15 Day Replacement Guarantee.&nbsp;<a href="http://getmystuff.co.in/show/contact-us">Contact us</a>&nbsp;of any problems, damages or defects within 15 days from the date of delivery, and we will issue a brand new replacement to you at no extra cost or refund your amount.</div>\n</li>\n<li>\n<h2 class="list-header"><a href="http://getmystuff.co.in/show/faq">My question is still not answered?</a></h2>\n<div class="list-body"><a href="http://getmystuff.co.in/show/contact-us">Contact us</a>&nbsp;with your question and we''ll get back to you as soon as possible.</div>\n</li>\n</ol>', 'HTML', 7508);

-- --------------------------------------------------------

--
-- Table structure for table `tsellerreview`
--

CREATE TABLE IF NOT EXISTS `tsellerreview` (
  `sellerreview_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `rating` decimal(10,2) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `seller_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  PRIMARY KEY (`sellerreview_id`),
  UNIQUE KEY `customer_id` (`customer_id`,`seller_id`,`shop_id`),
  KEY `fk_SellerReview` (`seller_id`),
  KEY `fk_SellerToShop` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Is used to rate and review Seller' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tsellerreview`
--

INSERT INTO `tsellerreview` (`sellerreview_id`, `customer_id`, `rating`, `title`, `review`, `created_dt`, `is_approved`, `seller_id`, `shop_id`) VALUES
(4, 10157, '3.00', 'Best products', 'Products delivered by this seller are trust able and delivered with in a day', '2015-06-13 06:56:19', 1, 5999, 7508),
(6, 10157, '0.00', 'fgdh', 'fhgdfhfhf', '2015-05-27 11:43:30', 0, 6003, 7508);

-- --------------------------------------------------------

--
-- Table structure for table `tshopsetting`
--

CREATE TABLE IF NOT EXISTS `tshopsetting` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'GENERAL',
  `description` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `shop_id` int(11) NOT NULL,
  UNIQUE KEY `name` (`name`,`shop_id`,`category`),
  KEY `shop_id` (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tshopsetting`
--

INSERT INTO `tshopsetting` (`name`, `value`, `type`, `category`, `description`, `is_hidden`, `shop_id`) VALUES
('account_manager', 'Sivasankar', 'text', 'GENERAL', 'Account manager for this store', 1, 7508),
('admin_rows_per_page', '10', 'rows', 'GENERAL', 'Number of rows to display in the admin list view', 0, 7508),
('appid', '1599267720320275', 'text', 'APP_FB_LOGIN', 'Facebook Login Application ID<br/><br/>1. Go to https://developers.facebook.com/apps and create a new application by clicking "Create New App".<br/>\n2. Fill out any required fields such as the application name and description.<br/>\n3. Put your website domain in the Site Url field.<br/>\n4. Once you have registered, copy and paste the created application credentials (App ID and Secret) here.', 0, 7508),
('appid', 'xxxxxxxxxx.apps.googleusercontent.com', 'text', 'APP_GOOGLE_LOGIN', 'To enable Google+ login for your store. You will need to create a new Google+ app for it. To create a google+ app, follow the below instructions or you can drop us a mail to support@shopnix.in and we will create it for you.<br/><br/>\n\n1. Go to https://code.google.com/apis/console/<br/>\n2. Click on the CREATE A NEW PROJECT button<br/>\n3. In the left nav, click on API ACCESS.<br/>\n4. In the new page, click on CREATE AN OAUTH 2.0 AUTHID<br/>\n5. A pop-up CREATE CLIENT ID will appear, fill in the requrired fields as follows<br/>\nPRODUCT NAME: <Your store name eg: My Superstore><br/>\nGOOGLE ACCOUNT: <your email id><br/>\nPRODUCT LOGO: <your store logo><br/>	\nHOME PAGE URL: <your domain eg: mysuperstore.com><br/>\n6. Click on Next and fill in next page as below<br/>\nAPPLICATION TYPE: Web Application<br/>\n7. Click on (MORE OPTIONS) to show more options and fill in the below<br/>\nAUTHORIZED REDIRECT URIS: http://YOUR_DOMAIN/admin/lib/hybridauth/?hauth.done=Google<br/>\nJAVASCRIPT ORIGINS : <your domain eg: http://YOUR_DOMAIN><br/>\n8. Click on CREATE CLIENT ID to save your settings<br/>\n9. Once your application is created copy the following fields to your Shopnix store apps page<br/>\nCLIENT ID to APPID<br/>\nCLIENT SECRET to APPSECRET<br/>', 0, 7508),
('appsecret', '982aeb3fd8fa420934bef09cefb144b1', 'text', 'APP_FB_LOGIN', 'Facebook Login Application Secret<br/><br/>1. Go to https://developers.facebook.com/apps and create a new application by clicking "Create New App".<br/>\n2. Fill out any required fields such as the application name and description.<br/>\n3. Put your website domain in the Site Url field.<br/>\n4. Once you have registered, copy and paste the created application credentials (App ID and Secret) here.', 0, 7508),
('appsecret', 'xxxxxxxxxxxxxxxxxxxxxxx', 'text', 'APP_GOOGLE_LOGIN', 'To enable Google+ login for your store. You will need to create a new Google+ app for it. To create a google+ app, follow the below instructions or you can drop us a mail to support@shopnix.in and we will create it for you.<br/><br/>\n\n1. Go to https://code.google.com/apis/console/<br/>\n2. Click on the CREATE A NEW PROJECT button<br/>\n3. In the left nav, click on API ACCESS.<br/>\n4. In the new page, click on CREATE AN OAUTH 2.0 AUTHID<br/>\n5. A pop-up CREATE CLIENT ID will appear, fill in the requrired fields as follows<br/>\nPRODUCT NAME: <Your store name eg: My Superstore><br/>\nGOOGLE ACCOUNT: <your email id><br/>\nPRODUCT LOGO: <your store logo><br/>\nHOME PAGE URL: <your domain eg: mysuperstore.com><br/>\n6. Click on Next and fill in next page as below<br/>\nAPPLICATION TYPE: Web Application<br/>\n7. Click on (MORE OPTIONS) to show more options and fill in the below<br/>\nAUTHORIZED REDIRECT URIS: http://YOUR_DOMAIN/admin/lib/hybridauth/?hauth.done=Google<br/>\nJAVASCRIPT ORIGINS : <your domain eg: http://YOUR_DOMAIN><br/>\n8. Click on CREATE CLIENT ID to save your settings<br/>\n9. Once your application is created copy the following fields to your Shopnix store apps page<br/>\nCLIENT ID to APPID<br/>\nCLIENT SECRET to APPSECRET<br/>', 0, 7508),
('city_shipping_charge_enabled', '1', 'bool', 'GENERAL', 'Enable/disable shipping charge based on the city. You can configure the shipping charge per city from Admin > Locations > City', 0, 7508),
('cod_enabled', '1', 'bool', 'GENERAL', 'Enable/disable COD option for this store. It can switch on/off COD per pincode from Admin > Locations > City > Area', 0, 7508),
('dd_details', 'Please transfer the amount to our account. Details as below<br><br><b>Name: ______________________<br>Account no: ______________________<br>Account Type: ______________________<br>Bank: ______________________<br>Branch: ______________________<br>IFSC code: ______________________<br><br></b>The order will be shipped once we have hfdreceived your payment<br>ghdff', 'textarea', 'GENERAL', 'You can enter your bank account details here for the online transfer', 0, 7508),
('dd_enabled', '1', 'bool', 'GENERAL', 'Enable Online Transfer payment method for your shop', 0, 7508),
('dd_title', 'Online Bank Transfer', 'text', 'GENERAL', 'Online Bank Transfer name. eg: Online Transfer', 0, 7508),
('delivery_slot_duration', '4', 'hours', 'GENERAL', NULL, 1, 7508),
('delivery_slot_enabled', '1', 'bool', 'GENERAL', NULL, 1, 7508),
('delivery_slot_max_time', '20', 'hours', 'GENERAL', NULL, 1, 7508),
('delivery_slot_min_time', '8', 'hours', 'GENERAL', NULL, 1, 7508),
('delivery_slot_start_gap', '9', 'text', 'GENERAL', NULL, 0, 7508),
('discountcoupon_enabled', '1', 'bool', 'GENERAL', 'Enable Discount coupons for your the store', 1, 7508),
('discountrule_enabled', '0', 'bool', 'GENERAL', 'Enable Discount Rules for your shop', 1, 7508),
('FB_LOGIN_enabled', '1', 'bool', 'APPS', 'Facebook Login App', 1, 7508),
('firstlogin_wiz_step1', '1', 'bool', 'GENERAL', 'First login wizard - Step 1 completed', 1, 7508),
('firstlogin_wiz_step2', '1', 'bool', 'GENERAL', 'First login wizard - Step 2 completed', 1, 7508),
('firstlogin_wiz_step3', '1', 'bool', 'GENERAL', 'First login wizard - Step 3 completed', 1, 7508),
('firstlogin_wiz_step4', '1', 'bool', 'GENERAL', 'First login wizard - Step 4 completed', 1, 7508),
('firstlogin_wiz_step5', '1', 'bool', 'GENERAL', 'First login wizard - Step 5 completed', 1, 7508),
('firstlogin_wiz_step6', '1', 'bool', 'GENERAL', 'First login wizard - Step 6 completed', 1, 7508),
('firstlogin_wiz_step7', '1', 'bool', 'GENERAL', 'First login wizard - Step 7 completed', 1, 7508),
('firstlogin_wizard_enabled', '0', 'bool', 'GENERAL', 'Enable the First login wizard', 0, 7508),
('gift_message_enabled', '1', 'bool', 'GENERAL', 'Enables gift message option during check out', 0, 7508),
('giftcard_enabled', '1', 'bool', 'GENERAL', 'Enable Giftcards for your shop', 1, 7508),
('GOOGLE_LOGIN_enabled', '1', 'bool', 'APPS', 'Google Login App', 1, 7508),
('home_banner_height', '280px', 'height', 'THEME_HOME', 'Height of the home page banner', 0, 7508),
('home_banner_width', '745px', 'width', 'THEME_HOME', 'Width of the home page banner', 0, 7508),
('is_commission_model_5999', '1', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_commission_model_6003', '1', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_commission_model_6010', '1', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_commission_model_6012', '0', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_commission_model_6014', '0', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_commission_model_6015', '0', 'text', 'GENERAL', 'no desc', 0, 7508),
('is_commission_model_6016', '1', 'text', 'GENERAL', 'no desc', 0, 7508),
('is_ga_firstlogin_sent', '1', 'bool', 'GENERAL', 'Has the user logged in once atleast', 1, 7508),
('is_ga_wiz4steps_sent', '1', 'bool', 'GENERAL', 'Has the user completed atleast 4 steps', 1, 7508),
('is_rental_model_5999', '0', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_rental_model_6003', '0', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_rental_model_6010', '0', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_rental_model_6012', '1', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_rental_model_6014', '1', 'bool', 'GENERAL', 'Describes the seller commission type', 1, 7508),
('is_rental_model_6015', '1', 'text', 'GENERAL', 'no desc', 0, 7508),
('is_rental_model_6016', '0', 'text', 'GENERAL', 'no desc', 0, 7508),
('max_no_of_products', '10000', 'nos', 'GENERAL', 'Maximum number of products allowed for this store', 1, 7508),
('max_no_of_products_5999', '754', 'text', 'GENERAL', 'no desc', 0, 7508),
('max_no_of_products_6006', '0', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6007', '0', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6008', '2', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6009', '1', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6010', '1', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6011', '1000', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6012', '3', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6014', '50000', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6015', '50000', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('max_no_of_products_6016', '10', 'nos', 'GENERAL', 'Gives the maximum no. of product that the seller can upload', 0, 7508),
('min_free_order_size', '1499', 'Rupees', 'GENERAL', 'Apply a shipping charge(Min Order shipping charge) for orders below this amount', 0, 7508),
('min_order_shipping_charge', '40', 'Rupees', 'GENERAL', 'Shipping charge to be applied for orders below Min Free Order Size', 0, 7508),
('min_order_size', '500', 'Rupees', 'GENERAL', 'Do not allow checkout for orders below this amount', 0, 7508),
('mp_enable_product_add_approval', '1', 'bool', 'GENERAL', 'Describes whether the products added by the sellers requires approval or not(0->no approval required,1->admin approval required)', 0, 7508),
('mp_enable_product_edit_approval', '1', 'bool', 'GENERAL', 'Describes whether the products updated by the sellers requires approval or not(0->no approval required,1->admin approval required)', 0, 7508),
('po_details', 'pay the amount in below office address\n\nMizoram', 'textarea', 'GENERAL', 'pay the amount in below office address', 0, 7508),
('po_enabled', '1', 'bool', 'GENERAL', 'Enable/disable Pay In Office option for this store. It can switch on/off COD per pincode from Admin > Locations > City > Area', 0, 7508),
('po_title', 'Pay In Office', 'text', 'GENERAL', 'Online Bank Transfer name. eg: Online Transfer', 0, 7508),
('product_zoom_enabled', '1', 'bool', 'THEME_PRODUCT', 'Enable or disable the product zoom feature', 0, 7508),
('product_zoom_type', 'window', 'text', 'THEME_PRODUCT', 'Set the zoom type', 0, 7508),
('productreview_enabled', '0', 'bool', 'GENERAL', 'Enable Discount Rules for your shop', 1, 7508),
('products_per_page', '12', 'products', 'GENERAL', 'Number of products shown in the grid page', 0, 7508),
('search_report_enabled', '1', 'bool', 'GENERAL', 'Enable search report for your shop', 1, 7508),
('sellerreview_enabled', '1', 'bool', 'GENERAL', 'Enable Seller reviews for your shop', 1, 7508),
('sms_enabled', '1', 'bool', 'GENERAL', 'Enable SMS for your shop', 1, 7508),
('subs_end_dt_5999', '2015-10-07', 'text', 'GENERAL', 'no desc', 0, 7508),
('subs_end_dt_6006', '2015-05-26', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6007', '2015-05-27', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6008', '2015-06-11', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6009', '2015-06-11', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6010', '2015-06-11', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6011', '2015-06-06', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6012', '2015-12-10', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6014', '2015-08-15', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6015', '2015-06-30', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subs_end_dt_6016', '2015-06-10', 'date', 'GENERAL', 'Gives the end date of the Subscription which the seller has chosen', 0, 7508),
('subscription_end_date', '2035-04-07', 'date', 'GENERAL', 'The date to disable the shop', 1, 7508),
('subscription_is_renewed', '0', 'bool', 'GENERAL', 'Is shop renewed', 1, 7508),
('subscription_is_trial', '0', 'bool', 'GENERAL', 'Shop subscription is trial', 1, 7508),
('theme_bg_color', '#FFFFFF', 'html_color', 'THEME_GLOBAL', 'Background color for your shop', 0, 7508),
('theme_bg_image', '886.20130420194122.jpg', 'image_file', 'THEME_GLOBAL', 'Background image for your shop', 0, 7508),
('theme_font', 'default', 'font', 'THEME_GLOBAL', 'Change the theme font', 0, 7508),
('theme_font_size', '12', 'font_size', 'THEME_GLOBAL', 'Change the theme font size', 0, 7508),
('theme_prod_height', '138', 'nos', 'THEME_PRODUCT', 'Modify the theme product height', 0, 7508),
('theme_prod_medium_height', '414', 'nos', 'THEME_PRODUCT', 'Modify the product image width of product page', 1, 7508),
('theme_prod_medium_width', '414', 'nos', 'THEME_PRODUCT', 'Modify the product image width of product page', 1, 7508),
('theme_prod_width', '138', 'nos', 'THEME_PRODUCT', 'Modify the theme product width', 0, 7508),
('tooltip_enabled', '1', 'bool', 'GENERAL', 'Enable tooltips for your shop', 0, 7508),
('userperm_enabled', '0', 'bool', 'GENERAL', 'Enable Discount Rules for your shop', 1, 7508),
('variant_enabled', '1', 'bool', 'GENERAL', NULL, 1, 7508),
('vertical_menu_enabled', '1', 'bool', 'THEME', 'Enables vertical menu and disables horizontal menu', 0, 7508),
('wishlist_enabled', '1', 'bool', 'GENERAL', 'Enable Wishlist for your shop', 1, 7508);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(1) CHARACTER SET latin1 NOT NULL,
  `email_id` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile` bigint(18) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_id_UNIQUE` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='company_name' AUTO_INCREMENT=7155 ;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`user_id`, `type`, `email_id`, `password`, `fname`, `mobile`, `shop_id`) VALUES
(7123, 'A', 'sivasankar@shopnix.in', '123456', 'Sivasankar', 8050900156, 7508),
(7127, 'N', 'sucheta@shopnix.in', 'sucheta', 'Sucheta', 8880788813, 7508),
(7145, 'N', 'mbyakodi@cloudnix.com', '123456', 'Maddy', 9844873853, 7508),
(7154, 'A', 'kiran@cloudnix.com', '123456', 'Kiran', 6666666666, 7508);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1443348647, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
