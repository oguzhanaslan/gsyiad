<ion:partial view="header" />
	<div id="manset">
		<div class="container">
			<div class="row">
				<div class="span8 ucek">
					<img src="http://fakeimg.pl/800x360/ffcc00/000/?text=img+placeholder">
				</div>
				<div class="span4 ucek">
					<div class="img"><img src="http://fakeimg.pl/400x170/ffcc00/000/?text=img+placeholder"></div>
					<div class="img last"><img src="http://fakeimg.pl/400x170/ffcc00/000/?text=img+placeholder"></div>
				</div>
				<div class="ayrac span12"></div>
			</div>
		</div>
	</div>
	<div id="icerik">
		<div class="container">
			<div class="row">
				<div class="span8 haberlist gorsel">
					<div class="row-fluid">
						<?php for($i=1;$i<10;$i++): ?>
						<div class="span6"><img src="http://fakeimg.pl/400x180/00CED1/FFF/?text=img+placeholder"></div>
						<?php if($i%2==0) echo '</div><div class="row-fluid">'; ?>
						<?php endfor; ?>
					</div>
				</div>
				<div class="span4" id="sidebar">
					<div class="border">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#profile">Profile</a></li>
							<li><a href="#messages">Messages</a></li>
							<li><a href="#settings">Settings</a></li>
						</ul>
							 
						<div class="tab-content">
							<div class="tab-pane active" id="home">home<div>
							<div class="tab-pane" id="profile">prof</div>
							<div class="tab-pane" id="messages">message</div>
							<div class="tab-pane" id="settings">setting</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>Hello, world!</h1>
			<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		</div>

		<!-- Example row of columns -->
		<div class="row">
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
		   </div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
		</div>

		<hr>
	</div>
<ion:partial view="footer" />
