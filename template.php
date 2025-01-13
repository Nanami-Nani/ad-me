<?php
if(realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 404 Not Found');
	header('Location: ../404.php');
    exit;
}
    class template
    {
        protected $_properties;
        public $error;
        public $message;
        public $warning;

        function __construct()
        {
            $this->_properties			= array();
            $this->error			= '';
            $this->message			= '';
            $this->warning			= false;
            $this->_properties['type'] 		= '';
            $this->_properties['title'] 	= '';

            $this->_properties['name'] 		= '';

            $this->_properties['model_window'] 	= false;
            $this->_properties['meta_keywords'] = '';
            $this->_properties['meta_keywords'] = '';
            $this->_properties['js'] 			= '';
            $this->_properties['css'] 			= '';
            $this->_properties['left_menu']		= false;
            $this->_properties['admin_id']		= 0;
            $this->_properties['member_id']		= 0;
        }

        function __get($propertyName)
        {
            if (array_key_exists($propertyName, $this->_properties))
            {
                return $this->_properties[$propertyName];
            }

            return null;
        }

		public function __set($propertyName, $value)
		{
			return $this->_properties[$propertyName] = $value;
		}

		public function __destruct()
		{
			unset($this->_properties);
			unset($this->error);
			unset($this->message);
		}

		public function heading()
		{
			switch($this->type)
			{
				case 'ADMIN':
					$this->title = 	$this->title == '' ? ADMIN_TITLE : $this->title;
					$this->admin_heading();
					break;
				case 'CLIENT':
					//$this->title = 	$this->title == '' ? FRONT_TITLE : $this->title;
					//$this->name = 	$this->name == '' ? FRONT_TITLE : $this->title;
					$this->client_heading();
					break;
			}
		}

		public function footer()
		{
			switch($this->type)
			{
				case 'ADMIN':
					$this->admin_footer();
					break;
				case 'CLIENT':
					$this->client_footer();
					break;
			}
		}

		public function admin_heading()
		{
			//$admin = new admin($this->admin_id);
			//$theme = $admin->theme == '' ? 'default-inner.css' : functions::deformat_string($admin->theme) . '-inner.css';
			//$theme = functions::deformat_string(ADMIN_THEME) . '/inner.css';
			$theme = 'gray/inner.css';
			echo '
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<link rel="icon" type="image/x-icon" href="' . ROOT_URI . 'images/favicon.ico">
				
				<title>' . functions::deformat_string($this->title) . '</title>
				<link href="css/common.css" rel="stylesheet" type="text/css" />
				<link id="theme" href="css/' . $theme . '" rel="stylesheet" type="text/css" />
				<script src="' . URI_LIBRARY . 'jquery/jquery-min.js" type="text/javascript"></script>
				<script type="text/javascript" language="javascript" src="' . ROOT_URI . 'js/common.js"></script>
				<script type="text/javascript" language="javascript" src="' . ROOT_URI . 'js/clock.js"></script>
				' . $this->css . '
				' . $this->js . '
				</head>
				<body>
				';

			functions::noscript_message();

			if(!$this->model_window)
			{
				echo '<div id="wrapper">';
				include_once 'top_banner.php';
				include_once 'top_navigation.php';
				echo ' <div class="clearFloat"></div>
					<div class="main">';
				if($this->left_menu)
				{
					echo '<div class="leftMenu txtBold txtMedium">';
					$this->list_menu('LIST');
					echo '</div>
						<div class="content">';
				}
				else
				{
					echo '<div class="dashboardContent">';
				}
			}
			else
			{
				echo '<style type="text/css">
					body{ background-color:#fff !important; background-image:none !important;}
					</style>';
			}
		}

		public function admin_footer()
		{
			$clock	= '';
			if(!$this->model_window)
			{
				$clock	= '<script type="text/javascript" language="javascript">
				clock();
				</script>';
				echo '			<div class="clearFloat"></div>
							</div>
						<div class="clearFloat"></div>
					  </div>
					<div class="clearFloat"></div>
					</div>
					<div class="clearFloat"></div>';
					include_once "footer_banner.php";
			}
				echo $clock;
				echo '</body></html>';
		}

		public static function list_menu($type)
		{
			switch ($type)
			{
				case 'THUMBNAILS':
					self::list_thumbnails();
					break;
				case 'LIST':
					self::left_menu();
					break;
				default:
					self::left_menu();
					break;
			}
		}

		private function list_thumbnails()
		{
			$getIdentifier =functions::getIdentifier();
            $admin         = new admin($_SESSION['userid']);


			echo '
				<ul>';
    //                     if($admin->admin_type == 'SA' || $admin->admin_type == 'TL') {
    //                         echo '<li><a href="manage_admin.php?'.$getIdentifier.'"><img src="images/icon-big-admin.jpg" alt="Manage Admin" title="Manage Admin" width="100" height="90" />Admin</a></li>
				// ';
    //                     }

			echo '<li><a href="settings.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Settings" alt="Manage Settings" src="images/icon-big-settings.jpg">Settings</a></li>';	
				
			echo '<li><a href="contentPages.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage CMS" alt="Manage CMS" src="images/icon-big-content.png">CMS</a></li>';	

			echo '<li><a href="jobs.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Jobs" alt="Manage Jobs" src="images/icon-big-job.png">Jobs</a></li>';	

			echo '<li><a href="manage_chart.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Chart" alt="Manage Chart" src="images/icon-big-chart.png">Chart</a></li>';

			echo '<li><a href="manage_candidate.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Candidates" alt="Manage Candidates" src="images/icon-big-member.jpg">Candidates</a></li>';	

			echo '<li><a href="manage_report.php?'.$getIdentifier.'"><img width="90" height="90" title="Manage Candidate Reports" alt="Manage Candidate Reports" src="images/icon-big-candreports.png">Candidate Reports</a></li>';

			echo '<li><a href="manage_employer.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Employers" alt="Manage Employers" src="images/icon-big-community.png">Employers</a></li>';

			echo '<li><a href="textmessages.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Text Messages" alt="Manage Text Messages" src="images/icon-big-message.png">Text Messages</a></li>';

			echo '<li><a href="manage_resume_package.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Resume Packages" alt="Manage Resume Packages" src="images/icon-big-package.png">Resume Packages</a></li>';

			echo '<li><a href="manage_topjobs.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Top Jobs" alt="Manage Top Jobs" src="images/icon-big-extralogo.png">Top Jobs</a></li>';	

			/* echo '<li><a href="apply_form.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage CMS" alt="Manage CMS" src="images/icon-big-applied.png">FORM</a></li>';*/

			echo '<li><a href="manage_forum.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Forum" alt="Manage Forum" src="images/icon-big-callback1.png">Forum</a></li>'; 

			echo '<li><a href="manage_newsletter.php?'.$getIdentifier.'"><img src="images/icon-big-newslettr.png" alt="Manage Newsletter" title="Manage Newsletter" width="100" height="90" />Newsletter</a></li>';


			echo '<li><a href="blockwords.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Block Words" alt="Manage Block Words" src="images/icon-big-page.jpg">Block Words</a></li>';

			echo '<li><a href="testimonial.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Testimonials" alt="Manage Testimonials" src="images/icon-big-testimonial.png">Testimonials</a></li>';

			echo '<li><a href="manage_candidate_applied.php?'.$getIdentifier.'"><img width="100"height="90" title="Manage All Applied" alt="Manage All Applied" src="images/icon-big-applied.png">All Applied</a></li>';

			echo '<li><a href="apply_form.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage Apply Form" alt="Manage Apply Form" src="images/icon-big-other.png">Apply Form</a></li>';
/*
			echo '<li><a href="emailtemplate.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage CMS" alt="Manage CMS" src="images/icon-big-newslettr.png">EMAIL TEMPLATE</a></li>';*/
                        
			echo '</ul>';
		}

		// Generate the admin left menu
		private function left_menu()
		{
        	$admin              = new admin($_SESSION['userid']);
		 	$page_name 			= functions::get_page_name();
			$getIdentifier		=functions::getIdentifier();

			echo '<ul>';

			$settings_module = array('settings.php','statistics.php');

			echo '<li><img width="24" height="24" title="Manage Settings" alt="Manage Settings" src="images/icon-settings.png"><a href="settings.php?'.$getIdentifier.'">Settings</a>';
			if(in_array($page_name, $settings_module))
			{
			 	echo '<ul>
						<li><a href="settings.php?'.$getIdentifier.'">Website Settings</a>
						<li><a href="statistics.php?'.$getIdentifier.'">Statistics</a></li>
					</ul>';
			}

			echo '</a></li>';


			$content_module = array('contentPages.php', 'contentPage.php', 'page_content.php', 'page_content_add.php', 'home.php', 'manage_content.php', 'register_content.php', 'manage_page_content.php', 'register_page_content.php','manage_content_gallery.php','register_content_gallery.php');

			echo '
				<li><img width="24" height="24" title="Manage CMS" alt="Manage CMS" src="images/icon-content.png"><a href="contentPages.php?'.$getIdentifier.'">CMS</a>';

			if(in_array($page_name, $content_module))
			{
			 echo '<ul><li><a href="page_content.php?'.$getIdentifier.'">Page Content</a></li></ul>';
			 echo '<ul><li><a href="home.php?'.$getIdentifier.'">Home Content</a></li></ul>';
			}
			echo '</a></li>';


			$job_module = array('jobs.php', 'category.php','manage_job.php', 'register_job.php', 'manage_job_category.php', 'register_job_category.php');

			echo '<li><a href="jobs.php?'.$getIdentifier.'"><img src="images/icon-job.png" alt="Manage Jobs" title="Manage Jobs" width="24" height="24" />Jobs</a>';

			if(in_array($page_name, $job_module))
			{

				echo '<ul><li><a href="category.php?'.$getIdentifier.'">Job Category</a></li></ul>';
			}
			echo '</a></li>';

			$content_chart = array('manage_chart.php', 'register_chart.php', 'manage_monthly_chart.php', 'register_chart_month.php');
				if(in_array($page_name, $content_chart))
				{

			 echo '
				<li><a href="manage_chart.php?'.$getIdentifier.'"><img src="images/icon-small-chart.png" alt="Manage Chart" title="Manage Chart" width="24" height="24" />Chart</a>
					<ul><li><a href="manage_monthly_chart.php?'.$getIdentifier.'">Monthly Chart</a></li></ul>
				</li>';
				}
				else
				{
					echo '<li><a href="manage_chart.php?'.$getIdentifier.'"><img src="images/icon-small-chart.png" alt="Manage Chart" title="Manage Chart" width="24" height="24" />Chart</a></li>';
				}

			
             echo '<li><img src="images/icon-member.png" alt="Manage Candidate" title="Manage Candidate" width="22" height="22" /><a href="manage_candidate.php?'.$getIdentifier.'">Candidates </a></li>';

             echo '<li><img src="images/icon-candreports.png" alt="Manage Candidate Reports" title="Manage Candidate Reports" width="22" height="22" />
                                           <a href="manage_report.php?'.$getIdentifier.'">Candidate Reports</a>';

            $settings_jobfair = array('empdetails.php', 'empdetails_fair.php', 'manage_jobfair.php','manage_employer.php','register_employer.php','register_jobfair.php', 'manage_employers_logo.php', 'register_employer_logo.php');

            echo '<li><a href="manage_employer.php?'.$getIdentifier.'"><img width="24" height="24" title="Manage Employer" alt="Manage Employer" src="images/manage-community.png">Employer</a>';

			if(in_array($page_name, $settings_jobfair))
			{

				echo '<ul>';
				echo '<li><a href="manage_employers_logo.php?'.$getIdentifier.'">Employers Logo</a></li>';
				echo '<li><a href="manage_jobfair.php?'.$getIdentifier.'">Job Fair</a></li>';
				echo '</ul>';
			}
			echo '</a></li>';

			echo '<li><a href="manage_topjobs.php?'.$getIdentifier.'"><img src="images/icon-extralogo.png" alt="Manage Top Jobs" title="Manage Top Jobs" width="24" height="24" />Top Jobs</a></li>';

			echo '<li><a href="manage_resume_package.php?'.$getIdentifier.'"><img src="images/icon-package.png" alt="Manage Resume Packages" title="Manage Resume Packages" width="24" height="24" />Resume Packages</a></li>';

			 echo '<li><a href="textmessages.php?'.$getIdentifier.'"><img width="24" height="24" title="Manage Messages" alt="Manage Messages" src="images/icon-message.png">Text Messages</a>';

			 $message_module = array('msg_add.php','textmessages.php', 'message_details.php',   'inbox.php', 'sent.php','draft.php','trash.php', 'compose_message.php', 'edit_message.php','reply_message.php');

			if(in_array($page_name, $message_module))
			{
				echo '<ul>';
				echo '<li><a href="msg_add.php?'.$getIdentifier.'">Add Message</a></li>';
				echo '<li><a href="textmessages.php?'.$getIdentifier.'">Sent Items</a></li>';
				echo '</ul>';
			}
			echo '</a></li>';


			 /*$message_module = array('msg_add.php','textmessages.php', 'message_details.php',   'inbox.php', 'sent.php','draft.php','trash.php', 'compose_message.php', 'edit_message.php','reply_message.php');
             $admin_id = $_SESSION['userid'];
             //$inbox_count = message_user::get_unread_mail_count(1, $admin_id); //message::get_inbox_count();
             //$draft_count = message::get_draft_count();

             echo '<li><img src="images/icon-message.png" alt="Manage message" title="Manage message" width="24" height="24" /><a href="msg_add.php?'.$getIdentifier.'" >Messages</a></li>';

             if(in_array($page_name, $message_module))
             {
	             echo '<ul>';

                 echo '<li><a href="msg_add.php?'.$getIdentifier.'">Add Message</a></li>';

                 // if($inbox_count > 0) {
                 //     echo '<li><a href="inbox.php?'.$getIdentifier.'" id="mail_noti1">Inbox ('.$inbox_count.')</a></li>';
                 // } else {
                 //     echo '<li><a href="inbox.php?'.$getIdentifier.'" id="mail_noti1">Inbox</a></li>';
                 // }

                 // if($draft_count > 0 ){
                 //     echo '<li><a href="draft.php?'.$getIdentifier.'">Drafts ('.$draft_count.')</a></li>';
                 // } else {
                 //     echo '<li><a href="draft.php?'.$getIdentifier.'">Drafts</a></li>';
                 // }


                 echo '<li><a href="textmessages.php?'.$getIdentifier.'">Sent Items</a></li>';
                 //echo '<li><a href="trash.php?'.$getIdentifier.'">Trash</a></li>';
                 echo '</ul>';

            }
            echo '</a></li>'; 

            echo '<li><img src="images/icon-applied.png" alt="Manage FORM" title="Manage FORM" width="24" height="24" /><a href="apply_form.php?'.$getIdentifier.'">FORM</a></li>'; */

            echo '<li><a href="manage_forum.php?'.$getIdentifier.'"><img src="images/icon-big-help.png" alt="Manage Forum" title="Manage Forum" width="24" height="24">Forum</a></li>';


                $newsletter_module = array(
                                        'manage_newsletter.php', 'register_newsletter.php', 'send_newsletter.php',
                                        'manage_newsletter_statistics.php',
                                        'manage_newsletter_template.php', 'register_newsletter_template.php',
                                        'manage_newsletter_group.php', 'register_newsletter_group.php',
                                        'manage_newsletter_subscription.php', 'register_newsletter_subscription.php',
                                        'manage_static_newsletter.php', 'register_static_newsletter.php','manage_newsletter_campaign.php', 'register_newsletter_campaign.php','manage_newsletter_campaign_statistics.php',
                                        );
					if(in_array($page_name, $newsletter_module))
					{
						echo '
						<li>
							<img src="images/manage-newsletter.png" alt="Manage Newsletter" title="Manage Newsletter" width="24" height="24" />
							<a href="manage_newsletter.php?'.$getIdentifier.'">Newsletter</a>
							<ul>
								<li><a href="manage_newsletter_template.php?'.$getIdentifier.'" title="Manage Newsletter Template" >Template</a></li>';

                                                                //<li><a href="manage_newsletter_campaign.php?'.$getIdentifier.'" title="Manage Newsletter for new candidates and not contacted" >Newsletter for New & Not Contacted Users</a></li>
                                                                echo '<li><a href="manage_static_newsletter.php?'.$getIdentifier.'" title="Manage Static Newsletter" >Static Newsletter</a></li>
							</ul>
						</li>';

					}
					else
					{
						echo '<li><img src="images/manage-newsletter.png" alt="Manage Newsletter" title="Manage Newsletter" width="24" height="24" /><a href="manage_newsletter.php?'.$getIdentifier.'" >Newsletter</a></li>';
					}

			echo '<li><a href="blockwords.php?'.$getIdentifier.'"><img width="24" height="24" title="Manage Block Word" alt="Manage Block Word" src="images/icon-page.png">Block Words</a></li>';

			echo '<li><a href="testimonial.php?'.$getIdentifier.'"><img width="24" height="24" title="Manage Testimonial" alt="Manage Testimonial" src="images/icon-testimonial.png">Testimonials</a></li>';

			echo '<li><img src="images/icon-applied.png" alt="Manage All Applied" title="Manage All Applied" width="24" height="24" />
                    <a href="manage_candidate_applied.php?'.$getIdentifier.'">All Applied</a>';
            echo '</li>';

			echo '<li><a href="apply_form.php?'.$getIdentifier.'"><img width="24" height="24" title="Manage Apply Form" alt="Manage Apply Form" src="images/icon-other.png">Apply Form</a></li>';


			echo '</ul>';

/*

			echo '<li><a href="emailtemplate.php?'.$getIdentifier.'"><img width="100" height="90" title="Manage CMS" alt="Manage CMS" src="images/icon-big-community.png">EMAIL TEMPLATE</a></li>';

			**/

				

		}

		public function client_heading()
		{
			$page_name 	= functions::get_page_name();
			$path_info = functions::parse_path();
			//print_r($this->custom_title);
			$request = array_filter($path_info['call_parts']);


	        $meta_description=($this->meta_description=="") ? '' : ($this->meta_description);
			$meta_keywords=($this->meta_keywords=="")?'':($this->meta_keywords);			

			$title	= $this->title != '' ? ($this->title) : 'Jobs in Qatar';

			if($page_name == 'index.php') {
				$meta_description= '';
				$meta_keywords= '';
			}

			echo '
			<!doctype html>
			<html dir="ltr" lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">			
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


		
			<title>' . ($title) . '</title>';

			//if($meta_description != '' || $meta_keywords != '') {
				echo '
				<meta name="description" content="' . ($meta_description) . '">
				<meta name="keywords" content="' . ($meta_keywords) . '" />';
			//}
// 			if($request[0] == ''){
// 				echo '<meta name="google-site-verification" content="2T_pN6PyGqdPL-Gmj7c5aEhzgOXY-_RgLh5kZ_Bmsuk" />';
// 			}
			echo '<meta property="og:title" content="' . functions::deformat_string($title) . '"/>
			<meta property="og:type" content="website"/>

			<meta property="og:description" content="' . functions::deformat_string($title) . '"/>

			<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="mobile-web-app-capable" content="yes">
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">';	


			echo '<script src="'.ROOT_URI .'assets/js/vendors/jquery-3.2.1.min.js"></script>';	

			// echo '<link href="' . ROOT_URI . 'pagination.css" rel="stylesheet" type="text/css" />';

			echo '<link rel="shortcut icon" type="image/x-icon" href="' . ROOT_URI . 'images/favicon.ico">

			<link href="' . ROOT_URI . 'assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" media="all" rel="stylesheet" />

			<!-- Dashboard Css -->
			<link href="' . ROOT_URI . 'assets/css/style.css" media="all" rel="stylesheet" />

			<!-- COLOR-SKINS -->
			<link id="theme" rel="stylesheet" type="text/css" media="all" href="' . ROOT_URI . 'assets/color-skins/color-skins/color13.css" />

			<!-- Font-awesome  Css -->
			<link href="' . ROOT_URI . 'assets/css/icons.css" media="all" rel="stylesheet" defer/>

			<!--Horizontal Menu-->
			<link href="' . ROOT_URI . 'assets/plugins/horizontal/horizontal-menu/animation/fade-down.css" rel="stylesheet" media="all" defer />
			<link href="' . ROOT_URI . 'assets/plugins/horizontal/horizontal-menu/horizontal.css" media="all" rel="stylesheet" defer />';

			if($page_name != 'index.php') {

			echo '<!--Select2 Plugin -->
			<link href="' . ROOT_URI . 'assets/plugins/select2/select2.min.css" media="all" rel="stylesheet" defer />';

			}

			echo '<!-- Cookie css -->
			<!-- <link href="' . ROOT_URI . 'assets/plugins/cookie/cookie.css" media="all" rel="stylesheet" defer> -->

			<!-- Owl Theme css-->
			<link href="' . ROOT_URI . 'assets/plugins/owl-carousel/owl.carousel.css" media="all" rel="stylesheet" defer />

			<!-- Custom scroll bar css-->
			<!--<link href="' . ROOT_URI . 'assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" media="all" rel="stylesheet" defer /> -->

			
			';


			?>

				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2639867148399078" crossorigin="anonymous"></script>

				<!-- <script src="<?php echo ROOT_URI ?>assets/js/vendors/jquery-3.2.1.min.js"></script> -->

				<!-- Bootstrap js -->
				<script src="<?php echo ROOT_URI ?>assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js" defer></script>
				<script src="<?php echo ROOT_URI ?>assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js" defer></script>

				<!--JQuery Sparkline Js-->
				<!-- <script src="<?php echo ROOT_URI ?>assets/js/vendors/jquery.sparkline.min.js"></script> -->

				<!-- Circle Progress Js-->
				<!-- <script src="<?php echo ROOT_URI ?>assets/js/vendors/circle-progress.min.js"></script> -->

				<!--Owl Carousel js -->
				<script defer src="<?php echo ROOT_URI ?>assets/plugins/owl-carousel/owl.carousel.js" defer></script>

				<!--Horizontal Menu-->
				<script src="<?php echo ROOT_URI ?>assets/plugins/horizontal/horizontal-menu/horizontal.js" defer></script>

				<!--Showmore Js-->
				<script src="<?php echo ROOT_URI ?>assets/js/jquery.showmore.js" defer></script>
				<!-- <script src="<?php echo ROOT_URI ?>assets/js/showmore.js" defer></script> -->

				<?php //if($page_name != 'index.php') { ?>
				<!-- Star Rating Js-->
				<script src="<?php echo ROOT_URI ?>assets/plugins/rating/jquery.rating-stars.js" defer></script>
			    <?php //} ?>
				<!--Counters -->
				<!-- <script src="<?php echo ROOT_URI ?>assets/plugins/counters/counterup.min.js"></script>
				<script src="<?php echo ROOT_URI ?>assets/plugins/counters/waypoints.min.js"></script>
				<script src="<?php echo ROOT_URI ?>assets/plugins/counters/numeric-counter.js"></script> -->

				<!--JQuery TouchSwipe js-->
				<script src="<?php echo ROOT_URI ?>assets/js/jquery.touchSwipe.min.js" defer></script>

				<?php if($page_name != 'index.php') { ?>
				<!--Select2 js -->
				<script src="<?php echo ROOT_URI ?>assets/plugins/select2/select2.full.min.js" defer></script>
				<script src="<?php echo ROOT_URI ?>assets/js/select2.js" defer></script>
				<?php } ?>

				<!-- sticky Js-->
				<script src="<?php echo ROOT_URI ?>assets/js/sticky.js" defer></script>

				<!-- Ion.RangeSlider -->
				<!-- <script src="<?php echo ROOT_URI ?>assets/plugins/jquery-uislider/jquery-ui.js" defer></script> -->

				<!-- Cookie js -->
				<!-- <script src="<?php echo ROOT_URI ?>assets/plugins/cookie/jquery.ihavecookies.js"></script>
				<script src="<?php echo ROOT_URI ?>assets/plugins/cookie/cookie.js"></script> -->

				    <!-- Custom scroll bar Js-->
				<!-- <script src="<?php echo ROOT_URI ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js" defer></script> -->

				<!-- Swipe Js-->
				<script src="<?php echo ROOT_URI ?>assets/js/swipe.js" defer></script>

				<!-- Scripts Js-->
				<script src="<?php echo ROOT_URI ?>assets/js/scripts2.js" defer></script>

				<!-- Custom Js-->
				<script src="<?php echo ROOT_URI ?>assets/js/custom.js" defer></script>

				<?php include_once('single-style.php'); ?>

			<?php
			echo '</head>
			<body class="main-body">
				<!--Loader-->
				<!--<div id="global-loader">
					<img src="'.ROOT_URI .'assets/images/loader.svg" class="loader-img" alt="">
				</div>-->
			';
			echo $this->css . ' ' .$this->js;

			if($this->top_menu)
				include_once 'top_menu.php';
			else	
			    include_once 'inc_header.php';

		}

		public function client_footer()
		{
			//echo '</div>';
			
			include_once 'inc_footer.php';
			//echo '</div>';
			echo '</body>
				</html>';
		}

		public function header_branding()
		{
			echo '';
		}

		public function footer_branding()
		{
			//echo 'Design and Developed by <a href="http://www.rainend.com/" target="_blank">Rainend</a>';
		}
	}
?>