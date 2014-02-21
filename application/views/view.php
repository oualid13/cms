<html>
	<body>

		<h1>Bonjour</h1>

		<p>
		    Ceci est mon paragraphe !
		</p>

		<p>
		    Votre pseudo est {pseudo}.
		</p>

		<p>
		    Votre email est {email}.
		</p>

		<p>
			<?php if($en_ligne): ?>
			    Vous êtes en ligne.
			<?php else: ?>
			    Vous n'êtes pas en ligne.
			<?php endif; ?>




			<div id="example-one" contenteditable="true">
				<style scoped>
				  #example-one { margin-bottom: 10px; }
				  [contenteditable="true"] { padding: 10px; outline: 2px dashed #CCC; }
				  [contenteditable="true"]:hover { outline: 2px dashed #0090D2; }
				</style>
				<p>Everything contained within this div is editable in browsers that support <code>HTML5</code>. Go on, give it a try: click it and start typing.</p>
			</div>
		</p>
	</body>
</html>