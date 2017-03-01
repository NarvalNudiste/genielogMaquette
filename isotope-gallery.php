<div class="container">
	<h3 class="center red-text text-lighten-2">Dernières sorties</h3>
	<div class="button-group filter-button-group center	">
	  <button class="btn-large waves-effect waves-light red lighten-2"data-filter="*">Voir tous les sous-genres</button>
	  <button class="btn-large waves-effect waves-light red lighten-2"data-filter=".metal">metal</button>
	  <button class="btn-large waves-effect waves-light red lighten-2"data-filter=".metal">metal</button>
	  <button class="btn-large waves-effect waves-light red lighten-2"data-filter=".metal">metal</button>
	  <button class="btn-large waves-effect waves-light red lighten-2"data-filter=".metal">metal</button>
	</div>
</div>
<div class="container isotope" style="padding-bottom: 3em;">

	<div class="row">
	<?php for($i = 0; $i < 3; $i++){
		echo("<div class=\"col center s-12 m4 isotope-item metal\">
				<h5 class=\"red-text text-lighten-2\">Gojira - Magma</h5>
				<h6>Nuclear Blast, 2016</h6>
				<a href=\"page.php\"><img class=\"responsive-img\" src=\"imgs/disques/album1.jpg\"></a>
			</div>
			<div class=\"col center s-12 m4 isotope-item\">
				<h5 class=\"red-text text-lighten-2\">Isis - Panopticon</h5>
				<h6>Ipecac Recordings, 2004</h6>
				<a href=\"#\"><img class=\"responsive-img\" src=\"imgs/disques/album2.png\"></a>
			</div>
			<div class=\"col center s-12 m4 isotope-item metal \">
				<h5 class=\"red-text text-lighten-2\">Car Bomb - Meta</h5>
				<h6>Car Bomb, 2016</h6>
				<a href=\"#\"><img class=\"responsive-img\" src=\"imgs/disques/album3.png\"></a>
			</div>
			<div class=\"col center s-12 m4 isotope-item\">
				<h5 class=\"red-text text-lighten-2\">Genesis - Nursery Crime</h5>
				<h6>Charisma records, 1971</h6>
				<a href=\"#\"><img class=\"responsive-img\" src=\"imgs/disques/album4.png\"></a>
			</div>
			
			"); 
	}
	?>
	</div>
</div>
