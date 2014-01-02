<?php
// init pdo.
$path = dirname(__FILE__).DIRECTORY_SEPARATOR.'keymap.db';
$db = new PDO('sqlite:'.$path);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->query('PRAGMA encoding = "UTF-8";');
// get browser list
$browsers = $db->query("
	SELECT
	  browser
	  , version
	FROM events
	WHERE
	  browser IS NOT NULL
	GROUP BY browser, version

")->fetchAll();
// get keyboard map
$sql = "
	SELECT
   t0.unicode
   , t0.glyph
   , t0.no
";
$i = 1;
foreach ($browsers as $browser) {
	// keydown
	$sql .= "
	 , 'keydown' AS name{$i}
	 , t{$i}.browser || ' ' || t{$i}.version AS browser{$i}
	 , t{$i}.key AS key{$i}
	 , t{$i}.char AS char{$i}
	 , t{$i}.code AS code{$i}
	 , t{$i}.keyIdentifier AS keyIdentifier{$i}
	 , t{$i}.keyCode AS keyCode{$i}
	 , t{$i}.charCode AS charCode{$i}
	 , t{$i}.which AS which{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.modifiers AS INTEGER), null) ELSE null END AS modifiers{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.ctrlKey AS INTEGER), 0) ELSE null END AS ctrlKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.shiftKey AS INTEGER), 0) ELSE null END AS shiftKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.altKey AS INTEGER), 0) ELSE null END AS altKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.metaKey AS INTEGER), 0) ELSE null END AS metaKey{$i}
	";
	$i++;
	// keypress
	$sql .= "
	 , 'keypress' AS name{$i}
	 , t{$i}.browser || ' ' || t{$i}.version AS browser{$i}
	 , t{$i}.key AS key{$i}
	 , t{$i}.char AS char{$i}
	 , t{$i}.code AS code{$i}
	 , t{$i}.keyIdentifier AS keyIdentifier{$i}
	 , t{$i}.keyCode AS keyCode{$i}
	 , t{$i}.charCode AS charCode{$i}
	 , t{$i}.which AS which{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.modifiers AS INTEGER), null) ELSE null END AS modifiers{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.ctrlKey AS INTEGER), 0) ELSE null END AS ctrlKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.shiftKey AS INTEGER), 0) ELSE null END AS shiftKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.altKey AS INTEGER), 0) ELSE null END AS altKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.metaKey AS INTEGER), 0) ELSE null END AS metaKey{$i}
	";
	$i++;
	// keyup
	$sql .= "
	 , 'keyup' AS name{$i}
	 , t{$i}.browser || ' ' || t{$i}.version AS browser{$i}
	 , t{$i}.key AS key{$i}
	 , t{$i}.char AS char{$i}
	 , t{$i}.code AS code{$i}
	 , t{$i}.keyIdentifier AS keyIdentifier{$i}
	 , t{$i}.keyCode AS keyCode{$i}
	 , t{$i}.charCode AS charCode{$i}
	 , t{$i}.which AS which{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.modifiers AS INTEGER), null) ELSE null END AS modifiers{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.ctrlKey AS INTEGER), 0) ELSE null END AS ctrlKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.shiftKey AS INTEGER), 0) ELSE null END AS shiftKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.altKey AS INTEGER), 0) ELSE null END AS altKey{$i}
	 , CASE WHEN t{$i}.browser IS NOT NULL THEN IFNULL(CAST(t{$i}.metaKey AS INTEGER), 0) ELSE null END AS metaKey{$i}
	";
	$i++;
}
$sql .= "
	FROM events AS t0
";
$i = 1;
foreach ($browsers as $browser) {
	// keydown
	$sql .= "
	LEFT JOIN events AS t{$i} ON
   t{$i}.name = 'keydown'
   AND t{$i}.unicode = T0.unicode
   AND t{$i}.no = T0.no
   AND t{$i}.browser = '{$browser['browser']}'
   AND t{$i}.version = '{$browser['version']}'
  ";
	$i++;
	// keypress
	$sql .= "
	LEFT JOIN events AS t{$i} ON
   t{$i}.name = 'keypress'
   AND t{$i}.unicode = T0.unicode
   AND t{$i}.no = T0.no
   AND t{$i}.browser = '{$browser['browser']}'
   AND t{$i}.version = '{$browser['version']}'
  ";
	$i++;
	// keyup
	$sql .= "
	LEFT JOIN events AS t{$i} ON
   t{$i}.name = 'keyup'
   AND t{$i}.unicode = T0.unicode
   AND t{$i}.no = T0.no
   AND t{$i}.browser = '{$browser['browser']}'
   AND t{$i}.version = '{$browser['version']}'
  ";
	$i++;
}
$sql .= "
	WHERE
	 t0.name IS NULL
	 AND NOT (
";
$i = 1;
foreach ($browsers as $index => $browser) {
	$sql .= "
    ".(($index != 0) ? "AND " : "")."t{$i}.name IS NULL
  ";
	$i++;
	$sql .= "
    AND t{$i}.name IS NULL
  ";
	$i++;
	$sql .= "
    AND t{$i}.name IS NULL
  ";
	$i++;
}
$sql .= "
   )
  ORDER BY t0.unicode, t0.no
";
$sth = $db->query($sql);
$unicode = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Javascript keyboard map.</title>
<style type="text/css">

	html, body, div, span, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	abbr, address, cite, code,
	del, dfn, em, img, ins, kbd, q, samp,
	small, strong, sub, sup, var,
	b, i,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td {
		margin:0;
		padding:0;
		border:0;
		outline:0;
		font-size:100%;
		vertical-align:baseline;
		background:transparent;
	}

	body {
		margin:0;
		padding:0;
		font:12px/15px "Helvetica Neue",Arial, Helvetica, sans-serif;
		color: #555;
		background:#f5f5f5 url(bg.jpg);
	}

	a {color:#666;}

	#content {width:65%; max-width:690px; margin:6% auto 0;}

	/*
	Pretty Table Styling
	CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
	*/

	table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:70%;
		margin:0 auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}

	caption {
		overflow:hidden;
		background:#333;
		margin:0 auto 0;
		padding: 10px;
		font-size: 15px;
		text-align: left;
	}

	th, td {padding:18px 28px 18px; text-align:left; }

	th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}

	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}

	tr:nth-child(odd) td {background:#f6f6f6;}

	td:first-child, th:first-child {text-align:left}

	td:last-child {border-right:none;}

	/*
	Background gradients are completely unnecessary but a neat effect.
	*/

	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}

	tr:nth-child(odd) td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}

	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}

	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius

	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/

	tr:first-child th:first-child {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}

	tr:first-child th:first-child {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}

	tr:last-child td:last-child {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}

	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>
</head>
<body>
	<table>
		<caption align="top"><a href="https://github.com/k-kinzal/keymap">https://github.com/k-kinzal/keymap</a></caption>
		<thead>
			<tr>
				<th colspan="2" rowspan="3"></th>
				<?php foreach ($browsers as $index => $browser) { ?>
				<th colspan="36"><?php echo $browser['browser'].' '.$browser['version'] ?></th>
				<?php } ?>
			</tr>
			<tr>
				<!-- browser name -->
				<?php foreach ($browsers as $index => $browser) { ?>
				<th colspan="12">keydown</th>
				<th colspan="12">keypress</th>
				<th colspan="12">keyup</th>
				<?php } ?>
			</tr>
			<tr>
				<?php foreach ($browsers as $index => $browser) { ?>
				<!-- keydown -->
				<th>key</th>
				<th>char</th>
				<th>code</th>
				<th>keyIdentifier</th>
				<th>keyCode</th>
				<th>charCode</th>
				<th>which</th>
				<th>modifiers</th>
				<th>ctrlKey</th>
				<th>shiftKey</th>
				<th>altKey</th>
				<th>metaKey</th>
				<!-- keypress -->
				<th>key</th>
				<th>char</th>
				<th>code</th>
				<th>keyIdentifier</th>
				<th>keyCode</th>
				<th>charCode</th>
				<th>which</th>
				<th>modifiers</th>
				<th>ctrlKey</th>
				<th>shiftKey</th>
				<th>altKey</th>
				<th>metaKey</th>
				<!-- keyup -->
				<th>key</th>
				<th>char</th>
				<th>code</th>
				<th>keyIdentifier</th>
				<th>keyCode</th>
				<th>charCode</th>
				<th>which</th>
				<th>modifiers</th>
				<th>ctrlKey</th>
				<th>shiftKey</th>
				<th>altKey</th>
				<th>metaKey</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
		  <?php foreach ($sth as $index => $record) { ?>
			<tr>
				<th><?php echo ($record['unicode'] != $unicode ? htmlentities($record['unicode'], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') : "") ?></th>
				<th><?php echo ($record['unicode'] != $unicode ? htmlentities($record['glyph'], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') : "") ?></th>
				<?php foreach ($browsers as $index => $browser) { ?>
				<!-- keydown -->
				<td><?php echo htmlentities($record['key'.($index*3+1)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['char'.($index*3+1)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['code'.($index*3+1)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['keyIdentifier'.($index*3+1)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo $record['keyCode'.($index*3+1)] ?></td>
				<td><?php echo $record['charCode'.($index*3+1)] ?></td>
				<td><?php echo $record['which'.($index*3+1)] ?></td>
				<td><?php echo $record['modifiers'.($index*3+1)] ?></td>
				<td><?php echo $record['ctrlKey'.($index*3+1)] ?></td>
				<td><?php echo $record['shiftKey'.($index*3+1)] ?></td>
				<td><?php echo $record['altKey'.($index*3+1)] ?></td>
				<td><?php echo $record['metaKey'.($index*3+1)] ?></td>
				<!-- keypress -->
				<td><?php echo htmlentities($record['key'.($index*3+2)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['char'.($index*3+2)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['code'.($index*3+2)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['keyIdentifier'.($index*3+2)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo $record['keyCode'.($index*3+2)] ?></td>
				<td><?php echo $record['charCode'.($index*3+2)] ?></td>
				<td><?php echo $record['which'.($index*3+2)] ?></td>
				<td><?php echo $record['modifiers'.($index*3+2)] ?></td>
				<td><?php echo $record['ctrlKey'.($index*3+2)] ?></td>
				<td><?php echo $record['shiftKey'.($index*3+2)] ?></td>
				<td><?php echo $record['altKey'.($index*3+2)] ?></td>
				<td><?php echo $record['metaKey'.($index*3+2)] ?></td>
				<!-- keyup -->
				<td><?php echo htmlentities($record['key'.($index*3+3)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['char'.($index*3+3)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['code'.($index*3+3)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo htmlentities($record['keyIdentifier'.($index*3+3)], ENT_HTML5|ENT_DISALLOWED, 'UTF-8') ?></td>
				<td><?php echo $record['keyCode'.($index*3+3)] ?></td>
				<td><?php echo $record['charCode'.($index*3+3)] ?></td>
				<td><?php echo $record['which'.($index*3+3)] ?></td>
				<td><?php echo $record['modifiers'.($index*3+3)] ?></td>
				<td><?php echo $record['ctrlKey'.($index*3+3)] ?></td>
				<td><?php echo $record['shiftKey'.($index*3+3)] ?></td>
				<td><?php echo $record['altKey'.($index*3+3)] ?></td>
				<td><?php echo $record['metaKey'.($index*3+3)] ?></td>
				<?php $unicode = $record['unicode']; ?>
				<?php } ?>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>