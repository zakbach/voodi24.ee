{{ $header }}

<h2>Lisa kuulutus</h2>

@if($msg)

<p>{{ $msg }}</p>

@endif

<form method="post">

	<h3>1. Ma olen ...</h3>

	<select name="sex">
		<option value="male">Mees</option>
		<option value="female">Naine</option>
		<option value="couple">Paar</option>
	</select>

	<h3>2. Ma otsin ...</h3>

	<select name="looking_for">
		<option value="male">Meest</option>
		<option value="female">Naist</option>
		<option value="couple">Paari</option>
	</select>

	<h3>3. Kohast ...</h3>

	<select name="location">
		<option value="all">Üle Eesti</option>
		<option value="Harjumaa">Harjumaa</option>
		<option value="Tallinn">Tallinn</option>
		<option value="Pärnumaa">Pärnumaa</option>
		<option value="Ida-Virumaa">Ida-Virumaa</option>
		<option value="Tartumaa">Tartumaa</option>
		<option value="Lääne-Virumaa">Lääne-Virumaa</option>
		<option value="Viljandimaa">Viljandimaa</option>
		<option value="Raplamaa">Raplamaa</option>
		<option value="Võrumaa">Võrumaa</option>
		<option value="Saaremaa">Saaremaa</option>
		<option value="Jõgevamaa">Jõgevamaa</option>
		<option value="Järvamaa">Järvamaa</option>
		<option value="Valgamaa">Valgamaa</option>
		<option value="Põlvamaa">Põlvamaa</option>
		<option value="Läänemaa">Läänemaa</option>
		<option value="Hiiumaa">Hiiumaa</option>
	</select>

	<h4>4. Kuulutus</h4>

	<textarea name="content"></textarea>

	<br><br>

	<input type="submit" name="add" value="Lisa kuulutus">

</form>
