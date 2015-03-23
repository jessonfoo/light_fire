<div style="width: 500px; margin: 0 auto;">
<style>
	table {
	width: 100%;
	}
	table td {
		border: 1px solid black;
		padding: 5px;
	}
	form input[type=text] {
		width: 100%;
		padding: 5px;
		margin-bottom: 15px;
	}
</style>
<table>
	<thead>
		<tr>
			<th>Option</th>
			<th>Status</th>
		</tr>
	</thead>
	<?php
	$xmlFile = file_get_contents("layout/options.xml");
	$xml= new SimpleXMLElement($xmlFile);
	
	foreach($xml->option as $option) {
		 
	    if($option['id'] == $_POST['key']) {
	    	$option->value = $_POST['update'];
	    }
	    echo '<tr>';
		    echo '<td>'.$option['id'].'</td>'; 
		    echo '<td>'.$option->value.'</td>';
	    echo '</tr>';
	}
	
	$xml->asXml("layout/options.xml");
	
	?>
</table>
<form action="" method="post" id="logo">
	<h2>Logo</h2>
	<input type="text" name="update" placeholder="New Value" />
	<input type="submit" name="key" value="logo" />
</form>
<form action="" method="post" id="logo">
	<h2>Favicon</h2>
	<input type="text" name="update" placeholder="New Value" />
	<input type="submit" name="key" value="favicon" />
</form>
<form action="" method="post" id="logo">
	<h2>Comments</h2>
	<select name="update">
		<option value="true">Yes</option>
		<option value="false">No</option>
	</select>
	<input type="submit" name="key" value="comments" />
</form>
</div>