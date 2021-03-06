<?php require_once('./bootstrap.php'); ?>
<?php require_once('./getData.php'); ?>
<?php
	$apiGet = new apiGet();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= L::meta_title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic">
	<link rel="stylesheet" type="text/css" href="<?= getVersioned('site.css')?>"/>
	<meta name="theme-color" content="#FE4365">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Trier.hu">
	<meta name="application-name" content="Trier.hu">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">

	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<!-- Commented out because of favico.js bug -->
	<!--<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">-->
	<!--<link rel="shortcut icon" href="/favicons/favicon.ico">-->
	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">


	<meta name="description"
		  content="<?= L::meta_description ?>">
	<meta charset="utf-8">
	<script type="text/javascript">
		window.lang = JSON.parse('<?= L_getJSON() ?>');
		window.lang.langCode = '<?= $i18n->getAppliedLang() ?>';
	</script>
	<script>
		window.config = {
			next  : <?= $apiGet->getNextToSeconds() ?>,
			after : <?= $apiGet->getAfterToSeconds() ?>
		};
	</script>
</head>
<body class="index">
<?php new MainTemplate() ?>
<script async type="text/javascript" src="./static/js/vendor/favico.min.js"></script>
<script async type="text/javascript" src="<?= getVersioned('bundle.js')?>"></script>
<?php
// Check if http://dev.trier.hu
if (isProd()):
?>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-78324908-1', 'auto');
		ga('send', 'pageview');
	</script>
<?php endif; ?>
</body>
</html>