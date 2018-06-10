<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
	<h1>javascript</h1>
	<ul>
	<script type="text/javascript">
		list = new Array("믕믕믕1", "믕믕믕2", "믕믕믕3", "믕믕믕4", "믕믕믕5", "믕믕믕6");
		i = 0;
		while (i < list.length){
			document.write("<li>" + list[i] + "</li>");
			i = i + 1;
		}
	</script>
	</ul>
	<h1>php</h1>
	<ul>
	<?php
		$list = array("믕믕믕1", "믕믕믕2", "믕믕믕3", "믕믕믕4", "믕믕믕5", "믕믕믕6");
		$i = 0;
		while ($i < count($list)){
			echo "<li>" . $list[$i] . "</li>";
			$i = $i + 1;
		}
	?>
	</ul>
</body>
</html>