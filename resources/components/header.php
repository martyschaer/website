<header>
	<div id="title-container">
		<h1>
			<?php 
				$f_contents = file("resources/colors.txt");
				$line = $f_contents[array_rand($f_contents)]; 
			?>
			<?php if(substr($_SERVER['HTTP_HOST'], 0, strlen("beta")) === "beta"){echo "<span style='color: $line;' id='beta_notice'>β</span>";}?>
			Marius Sch&#x00e4;r
		</h1>
	</div>
	<nav>
		<ul>
			<a href="/blog" title="I might have opinions"><li class="menu"><span class="fa">&#xf1ea;</span><span class="txt"> blog</span></li></a>
			<a href="https://github.com/martyschaer" title="see my code"><li class="menu ext"><span class="fa">&#xf092;</span><span class="txt"> github</span></li></a>
			<a href="mailto:contact@mariusschaer.ch" title="write me an email"><li class="menu ext"><span class="fa">&#xf0e0;</span><span class="txt"> email</span></li></a>
			<a href="/contact" title="more contact information"><li class="menu"><span class="fa">&#xf2bb;</span><span class="txt"> contact</span></li></a>
		</ul>
	</nav>
</header>