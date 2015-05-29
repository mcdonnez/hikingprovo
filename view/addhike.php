<?php
print_r($_GET);
print_r($_POST);
?>
<form action="index.php?page=addedhike" method="post">
	<table>
		<tr>
			<td>Hike Name:</td>
			<td>
				<input name="name" type="text">
			</td>
		</tr>
		<tr>
			<td>Hike Area:</td>
			<td>
				<select name="areaid">
  					<option name="areaid" value="1">Provo Canyon</option>
 					<option name="areaid" value="2">Rock Canyon</option>
  					<option name="areaid" value="3">In Provo</option>
  					<option name="areaid" value="4">Diamond Fork Road</option>
  					<option name="areaid" value="5">American Fork Canyon</option>
  					<option name="areaid" value="6">Mt. Nebo Loop</option>
  					<option name="areaid" value="7">Other</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Difficulty:</td>
			<td>
				<select name="difficulty">
  					<option name="difficulty" value="Very Easy">Very Easy</option>
 					<option name="difficulty" value="Easy">Easy</option>
  					<option name="difficulty" value="Moderate">Moderate</option>
  					<option name="difficulty" value="Hard">Hard</option>
  					<option name="difficulty" value="Strenuous">Strenuous</option>
				</select>
			</td>
		</tr>
		<tr>
		    <td>Distance:</td>
			<td>
				<input name="distance" type="text">
			</td>
		</tr>
		<tr>
		    <td>Description:</td>
			<td>
				<input name="description" type="text">
			</td>
		</tr>
		<tr>
			<td>Location:</td>
			<td><input name="location" type="text"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"</td>
		</tr>
	</table>
</form>