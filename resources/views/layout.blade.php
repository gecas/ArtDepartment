<!DOCTYPE html>
<html>
<head>
	<title>Art department</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Art Department Masterclass is a brand new educational and training programme, designed to encourage a professional dialogue between the rising and experienced heroes of the art department." />
	<meta property="og:site_name" content="Art department masterclass" />
	<meta property="og:url" content="http://www.artdepartmentmasterclass.com/" />
	<meta property="og:image" content="http://www.artdepartmentmasterclass.com/images/art-department-logo.png" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Art department" />
	<meta property="og:description" content="Art Department Masterclass is a brand new educational and training programme, designed to encourage a professional dialogue between the rising and experienced heroes of the art department.">
	<meta itemprop="name" content="Art department masterclass">
	<meta itemprop="image" content="http://www.artdepartmentmasterclass.com/images/art-department-logo.png">
	<meta itemprop="description" content="Art Department Masterclass is a brand new educational and training programme, designed to encourage a professional dialogue between the rising and experienced heroes of the art department.">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/swipebox/css/swipebox.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<nav class="meniu">
    <div class="menu-line" id="meniu-line"></div>
    <ul class="menu-list" id="meniu-list">
        <li><a href="/">home</a></li>
        <li><a href="/about">about</a></li>
        <li><a href="/workshops-15/16">workshops 15/16</a></li>
        <li><a href="/our-heroes">our heroes</a></li>
        <li><a href="/participant">participants</a></li>
        <li><a href="/pictures">pictures</a></li>
        <li><a href="/video">video</a></li>
        <li><a href="/apply">application form</a></li>
        <li><a href="/partners&supporters">partners&supporters</a></li>
        <li><a href="/contact-us">contact us</a></li>
        
        
    </ul>
    <div class="clear"></div>
</nav>

<div class="my-button navbar-header navbar-default">
    <button type="button" class="navbar-toggle">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
<div class="logo" id="logo">
	<img src="/images/art-department-logo.gif">
</div>

<div class="container-fluid">

@yield('content')

</div>


<div id="scrollTop">▲</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/swipebox/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();

      });
</script>
<script type="text/javascript">
	$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>200){
			$('#scrollTop').fadeIn(200);
		} else {
			$('#scrollTop').fadeOut(200);
		}
	});
	$('#scrollTop').click(function(){
		
		$('html, body').animate({ scrollTop: 0}, 1000);
	
	});
});
</script>
@include ('flash')

</body>
</html>