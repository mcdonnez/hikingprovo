<?php
?>

<form action="<? $_SERVER["PHP_SELF"] ?>" method="post">
	<table>
		<tr>
			<td>Username:</td>
			<td>
				<? if (isset($_POST["user"])): ?>
					<input name="user" type="text" value="<?= htmlspecialchars($_POST["user"]) ?>">
				<? elseif (isset($_COOKIE["user"])): ?>
					<input name="user" type="text" value="<?= htmlspecialchars($_COOKIE["user"]) ?>">
				<? else: ?>
					<input name="user" type="text" value="">
				<? endif ?>
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input name="pass" type="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Log In"</td>
		</tr>
	</table>
</form>