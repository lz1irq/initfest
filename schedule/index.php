<?php
error_reporting(~0);
ini_set('display_errors', 1);

$requirePath = __DIR__ . DIRECTORY_SEPARATOR;
require $requirePath . 'class.SmartCurl.php';
require $requirePath . 'config.php';
require $requirePath . 'load.php';
require $requirePath . 'parse.php';
$sched_config = getSchedConfig(date('Y'));
$data = loadData($sched_config);
$sched_config['filterEventType'] = array_key_exists('event_type', $_GET) ? $_GET['event_type'] : null;
$content = parseData($sched_config, $data);
?>
<html>
	<head>
		<title>Test schedule</title>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://www.openfest.org/2014/wp-content/themes/initfest/style.css" />
	</head>
	<body>
<?php
echo $content['schedule'];
?>
		<div class="separator"></div>
		<table border="1">
			<tbody>
<?php
echo $content['legend'], PHP_EOL;
?>
			</tbody>
		</table>
<?php
echo $content['fulltalks'];
echo $content['gspk'];
echo $content['fspk'];
?>
	</body>
</html>
