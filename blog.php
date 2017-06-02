<!DOCTYPE html>
<html>
<?php include("resources/components/head.php");?>
<body>
	<?php readfile("resources/components/header.html");?>
	<div class="page-wrap">
		<div class="card" id="didYouMean">
			The post you were linked to doesn't exist.
			<br>
			It could be one of these posts:
			<ul id="recommendations">
			</ul>
		</div>
		<div class="card">
			<?php putTitleShare("Blog - shiny and new", "2017-06-02");?>
			Now featuring a URL that makes sense.
		</div>
	</div>
	<?php readfile("resources/components/footer.html");?>
	<script type="text/javascript">
		var posts = <?php echo json_encode($_SESSION['posts']); ?>;
		var titles = <?php echo json_encode($_SESSION['titles']); ?>;
		if(window.location.hash){
			var linkedTo = window.location.hash.replace('#', '');
			if(!posts.includes(linkedTo)){
				//the permalinked post doesn't exist
				//we try to show posts that seem close
				var distances = [];
				document.getElementById("didYouMean").style.display= "block";;
				for(var i = 0; i < posts.length; i++){
					var lookingAt = posts[i];
					distances.push(getDistance(linkedTo, lookingAt));
				}

				var recommendations = document.getElementById("recommendations");

				for(var i = 0; i < distances.length && i < 3; i++){
					var idx = idxMin(distances);
					recommendations.appendChild(makeListEntry(titles[idx], posts[idx]));
					posts.splice(idx, 1);
					titles.splice(idx, 1);
					distances.splice(idx, 1);
				}
			}
		}

		function idxMin(arr){
			return arr.indexOf(minOfArray(arr));
		}

		function minOfArray(arr){
			return Math.min.apply(Math, arr);
		}

		function makeListEntry(title, post){
			var a = document.createElement("a");
			a.setAttribute("href", "/blag#" + post);
			a.appendChild(document.createTextNode(title));
			var li = document.createElement("li");
			li.appendChild(a);
			li.setAttribute("class", "fa");
			return li;
		}

		/**
		* calculates the Levenshtein distance between two strings
		* minified from https://gist.github.com/andrei-m/982927
		* by https://javascript-minifier.com/
		*/
		function getDistance(t,n){if(0==t.length)return n.length;if(0==n.length)return t.length;var e,r=[];for(e=0;e<=n.length;e++)r[e]=[e];var h;for(h=0;h<=t.length;h++)r[0][h]=h;for(e=1;e<=n.length;e++)for(h=1;h<=t.length;h++)n.charAt(e-1)==t.charAt(h-1)?r[e][h]=r[e-1][h-1]:r[e][h]=Math.min(r[e-1][h-1]+1,Math.min(r[e][h-1]+1,r[e-1][h]+1));return r[n.length][t.length]};
	</script>
</body>
</html>