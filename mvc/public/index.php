<!-- Created by Danila Chenchik, Dana Elhertani, Jenny Zhang, Nik Gunawan Monikos LLC-->

<head>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script type = "text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
	<link rel="stylesheet" type="text/css" href="/mvc/public/css/main.css">
    
	<script type="text/javascript" src="/mvc/fbapp/fb.js"></script>
    
	<script src="/mvc/public/js/myCtrl.js"></script>
    <script src="/mvc/public/js/checklist-model.js"></script>
    <script src="/mvc/public/js/global-script.js"></script>
	<!--<script src="/mvc/public/js/databaseCtrl.js"></script>-->

	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>

	
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
		<!-- ///////////////BOOTSTRAP///////////// -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!--
	<link rel="stylesheet" type="text/css" href="css/helios.css" />
    -->
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/mvc/public/css/loading.css">
	<!-- ///////////////BOOTSTRAP///////////// -->
	<meta charset="utf-8"/>
	<meta name='viewport' content="width=device-width, initial-scale=1" />

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-90116987-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script>
		//temp window reloactor
		/*if(window.location.pathname == "/"){
			window.location.replace("http://www.monikos.org/mvc/public/construction.php");
		}*/
	</script>
</head>
<?php 

require_once '../app/init.php';

$app = new App;

?>