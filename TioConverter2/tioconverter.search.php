<br>

<h1>Player: <?php echo(($tio->search(SEARCH))['term']) ?></h1>
<h2>Events Attended: <?php echo(($tio->search(SEARCH))['total_results']) ?></h2>

<h3>Events Attended</h3>

<ul>
<?php 
for($x = 0; $x <= 3; $x++) { ?>
	<li>
		<?php echo(($tio->search(SEARCH))['results']['brackets'][$x]['name']) ?>
	</li>
<?php } ?>

</ul>

<pre><?php var_dump($tio->search(SEARCH)); ?></pre>
