<?php 
error_reporting(E_ALL);

// user auth
require_once('common.php');
checkUser();

// load e(x)tra- conf and librarys
include('php/elf-xconfig.php');
include('php/xinclude.php');

// begin of prefs/theme choose site 
if($_GET['theme'] == "edit") { ?>

<html>
	<head>
		<meta charset="utf-8">
		<link href="./css/prefs.css" rel="stylesheet">
	</head>
	<body>
		<div id="tcr">
			<h1><?php echo $eox['xloc']['chooseTheme']; ?></h1>
			<?php echo(isMobile())?'<p style="color:red">'.$eox['xloc']['selNAinfo'].'</p>':''; ?>
			<div id="mySelectdev" class="select">
				<select <?php echo(isMobile())?'disabled':''; ?> name="sell" id="mySelect">
					<option value="0">Standard</option>
					<option value="windows-10">Windows-10</option>
					<option value="moono">Moono</option>
					<option value="Material-Light">Material-Light</option>
					<option value="Material-Grey">Material-Grey</option>
					<option value="Material">Material</option>
					<option value="dark-slim">Dark-Slim</option>
				</select>
			</div>
			<div id="loadd" class="loader"></div>
		</div>

		<script>
			var newthm = "";
			document.getElementById("mySelect").value = "<?php if(!isset($_COOKIE["cthm"])){echo "0";}else{echo $_COOKIE['cthm'];} ?>";
			document.getElementById("mySelect").onchange=function() {
				var y = document.getElementById("mySelect").value;
				newthm = y;
				document.getElementById("loadd").style.display = "block";
				setTimeout(function(){
				location.replace("./?ntheme="+y);
				}
						, 850);
			}
		</script>
	</body>
</html>

<?php 
// end of prefs/theme choose site 
exit; } ?>


<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Cache-control" content="public">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
		<title><?php echo $eox['xloc']['titleFM']; ?></title>
		<link href="./css/xelfi.css" rel="stylesheet">
		<!-- Require JS (REQUIRED) -->
		<!-- Rename "main.default.js" to "main.js" and edit it if you need configure elFInder options or any things -->
		<script data-main="./main.default.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>
		<script>
			function leleup() {
				if($("#nzweu").length == 0){
					$('.elfinder-statusbar').append('<a href="./?theme=edit" id="nzweu"><?php echo $eox["xloc"]["themeBtn"]; ?></a>&emsp;');
				}
			}
	
			define('elFinderConfig', {
				// elFinder options (REQUIRED)
				// Documentation for client options:
				// https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
				defaultOpts : {
					width: '100%',
					height: '100%',
					defaultView: 'list',
					resizable: false,
					cssAutoLoad : <?php echo $cssglob; ?>,
					url : 'php/connector.minimal.php', // or connector.maximal.php : connector URL (REQUIRED)
					// bootCalback calls at before elFinder boot up 
					bootCallback : function(fm, extraObj) {
						/* any bind functions etc. */
						fm.bind('init', function() {
							// any your code
						});
						// for example set document.title dynamically.

						fm.bind('open', function() {
							leleup();
						}).bind('sync', function() {
							leleup();
						});
					}
				},
				managers : {
					// 'DOM Element ID': { /* elFinder options of this DOM Element */ }
					'elfinder': {}
				}
			});
  // for mobile elfinder def useragent
   
		</script>
	</head>
	<body>

		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>

	</body>
</html>