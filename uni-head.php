<?php 
  

 if(($_SERVER['PHP_SELF']=='/global-panel2.php')||($_SERVER['PHP_SELF']=='/faq1.php')||($_SERVER['PHP_SELF']=='/global-panel-thank-you.php')||($_SERVER['PHP_SELF']=='/global-panel1.php')||($_SERVER['PHP_SELF']=='/unimrktresponse.php'))
		    {
		        ?>
			<link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon" />
			<?php
		    }
			else 
			{
			?>
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
			<?php
			}
			?>

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#eb5638" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#eb5638" />
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#eb5638" />

<link rel="preconnect" href="https://www.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://www.gstatic.com" crossorigin>

<link rel="preconnect" href="https://www.google.com" crossorigin>
<link rel="dns-prefetch" href="https://www.google.com" crossorigin>

<link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
<link rel="dns-prefetch" href="https://www.googletagmanager.com" crossorigin>

<link rel="stylesheet" rel="preload" as="style" href="css/bootstrap.min.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/style.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/responsive.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/menu.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/popup.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/slick.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/animate.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/jquery.ccpicker.css" onload="this.rel='stylesheet'">
<link rel="stylesheet" rel="preload" as="style" href="css/all.css" onload="this.rel='stylesheet'">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJ328JS');</script>
 <!--End Google Tag Manager -->

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '729105228290206');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=729105228290206&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- Global site tag (gtag.js) - Google Ads: 10925069397 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925069397"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10925069397');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Organization",
  "address": [
{
	"@type": "PostalAddress",
	"streetAddress": "98 Cuttermill Road Suite 466",
	"addressLocality": "Great Neck",
	"addressRegion": "NY",
	"PostalCode": "11021",
	"addressCountry": "US"
  },
{
	"@type": "PostalAddress",
	"streetAddress": "5th Floor, Nimai Tower, 412-415, Phase IV, Sector 18",
	"addressLocality": "Gurugram",
	"addressRegion": "Haryana",
	"PostalCode": "122015",
	"addressCountry": "IN"
    }
],
  "description": "Unimrkt Research was founded on the 6th of December in 2009. It is a reliable market research company and has conducted multi-industry research across 9adsbygoogle0 countries covering over 22 foreign languages. Unimrkt follows ESOMAR norms, and possesses ISO 20252 and ISO 27001 certifications. It aims to lead the research industry by partnering with companies that pursue thorough business and consumer research.",
  "image": "https://www.unimrkt.com/images/logo.png",
  "name": "Unimrkt Research",
  "telephone": [
"USA Office: +1 646-712-9302",
"India Office: +91 124 424 5210, +91 9870- 377-557"
],
  "url": "https://www.unimrkt.com",
  "sameAs": [
	"https://www.facebook.com/unimrktresearch",
	"https://twitter.com/ResearchUnimrkt",
              "https://www.instagram.com/unimrktresearch/",
              "https://www.linkedin.com/company/unimrkt-research/"
  ]

}
  </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  <style>
    .hidden { display: none; }
  </style>

<?php
header("Expires:" . date("D, d M Y H:i:s" , strtotime("+10 days")));
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>