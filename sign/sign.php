<?php
session_start();

$db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
$result = $db->query("select nom,pass from utilisateur");

while ($row = $result->fetch_array()) {
      $a=$row['nom'];
      $b=$row['pass'];



if(isset($_POST['submit'])){
  if ($_POST['username']==$a && $_POST['password']==$b){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['signed-in']=true;
    header('location: ./home.php');
    return 0;
  }else{
    header('location:sign.php?error');
  }
}

}
?>








<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Elements - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">

	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a>
					<nav id="nav">
						<a href="./../index.php">Home</a>
						<a href="generic.html">Generic</a>
						<a href="elements.html">Elements</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
<!--			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Elements</h2>
						<p>Aliquam erat volutpat nam dui </p>
					</header>-->

					<!-- Intro -->
			<!--			<div class="row">
							<section class="6u 12u$(medium)">
								<h2>What is Baseline?</h2>
								<p><strong>Baseline</strong> is a simple boilerplate for creating new projects with <a href="http://skel.io">Skel</a>. It features clear, concise HTML5 and CSS3 code (built on <a href="http://sass-lang.com">Sass</a>), responsiveness right out of the box, off-canvas navigation, an assortment of pre-styled elements, <a href="http://fontawesome.io">Font Awesome</a> icons, and everything offered by Skel + Skel.scss. Baseline is <a href="http://skel.io/license">MIT licensed</a>.</p>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Sed Feugiat</h3>
								<p>Erat ac non lorem justo amet primis dolor adipiscing lacinia accumsan felis sed dolor interdum ut. Amet accumsan magna etiam orci faucibus interdum et lorem ipsum et nullam.</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Lorem Ipsum</h3>
								<p>Erat ac non lorem justo amet primis dolor adipiscing lacinia accumsan felis sed dolor interdum ut. Amet accumsan magna etiam orci faucibus interdum et lorem ipsum et nullam.</p>
							</section>
						</div>

					<hr class="major" />-->

					<!-- Content -->
						<!--<h2 id="content">Sample Content</h2>
						<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
						<div class="row">
							<div class="6u 12u$(small)">
								<h3>Sem turpis amet semper</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat commodo eu sed ante lacinia. Sapien a lorem in integer ornare praesent commodo adipiscing arcu in massa commodo lorem accumsan at odio massa ac ac. Semper adipiscing varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
							<div class="6u$ 12u$(small)">
								<h3>Magna odio tempus commodo</h3>
								<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan ac praesent.</p>
							</div>-->
							<!-- Break -->
			<!--				<div class="4u 12u$(medium)">
								<h3>Interdum sapien gravida</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
							<div class="4u 12u$(medium)">
								<h3>Faucibus consequat lorem</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
							<div class="4u$ 12u$(medium)">
								<h3>Accumsan montes viverra</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
						</div>

					<hr class="major" />-->

					<!-- Elements -->
				<!--		<h2 id="elements">Elements</h2>
						<div class="row 200%">
							<div class="6u 12u$(medium)">
-->
								<!-- Text stuff -->
		<!--							<h3>Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<header>
										<h2>Heading with a Subtitle</h2>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<header>
										<h3>Heading with a Subtitle</h3>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<header>
										<h4>Heading with a Subtitle</h4>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
-->
								<!-- Lists -->
		<!--							<h3>Lists</h3>
									<div class="row">
										<div class="6u 12u$(small)">

											<h4>Unordered</h4>
											<ul>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Sagittis adipiscing lorem eleifend.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ul>

											<h4>Alternate</h4>
											<ul class="alt">
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Sagittis adipiscing lorem eleifend.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ul>

										</div>
										<div class="6u$ 12u$(small)">

											<h4>Ordered</h4>
											<ol>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Etiam vel felis at lorem sed viverra.</li>
												<li>Felis enim feugiat dolore viverra.</li>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Etiam vel felis at lorem sed viverra.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ol>

											<h4>Icons</h4>
											<ul class="icons">
												<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
												<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
												<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
											</ul>

										</div>
									</div>
									<h4>Definition</h4>
									<dl>
										<dt>Item 1</dt>
										<dd>
											<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										</dd>
										<dt>Item 2</dt>
										<dd>
											<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										</dd>
										<dt>Item 3</dt>
										<dd>
											<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										</dd>
									</dl>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt">Default</a></li>
									</ul>
									<ul class="actions small">
										<li><a href="#" class="button special small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
										<li><a href="#" class="button alt small">Small</a></li>
									</ul>
									<div class="row">
										<div class="3u 12u$(small)">
											<ul class="actions vertical">
												<li><a href="#" class="button special">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button alt">Default</a></li>
											</ul>
										</div>
										<div class="3u 12u$(small)">
											<ul class="actions vertical small">
												<li><a href="#" class="button special small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button alt small">Small</a></li>
											</ul>
										</div>
										<div class="3u 12u$(small)">
											<ul class="actions vertical">
												<li><a href="#" class="button special fit">Default</a></li>
												<li><a href="#" class="button fit">Default</a></li>
												<li><a href="#" class="button alt fit">Default</a></li>
											</ul>
										</div>
										<div class="3u$ 12u$(small)">
											<ul class="actions vertical small">
												<li><a href="#" class="button special small fit">Small</a></li>
												<li><a href="#" class="button small fit">Small</a></li>
												<li><a href="#" class="button alt small fit">Small</a></li>
											</ul>
										</div>
									</div>
-->
								<!-- Blockquote -->
		<!--							<h3>Blockquote</h3>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis.</blockquote>
-->
								<!-- Table -->
		<!--							<h3>Table</h3>

									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item 1</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 2</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 3</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 4</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 5</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item 1</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 2</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 3</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item 4</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item 5</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

							</div>
							<div class="6u$ 12u$(medium)">
-->
								<!-- Buttons -->
		<!--							<h3>Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt">Alternate</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special big">Big</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt small">Small</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button special fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
										<li><a href="#" class="button alt fit">Fit</a></li>
									</ul>
									<ul class="actions fit small">
										<li><a href="#" class="button special fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
										<li><a href="#" class="button alt fit small">Fit + Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-search">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
										<li><a href="#" class="button alt icon fa-check">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Special</span></li>
										<li><span class="button disabled">Default</span></li>
										<li><span class="button alt disabled">Alternate</span></li>
									</ul>
-->
								<!-- Form -->
		<!--							<h3>Form</h3>

									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
											</div>
				-->							<!-- Break -->
						<!--					<div class="12u$">
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">- Category -</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
											</div>
								-->			<!-- Break -->
								<!--			<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low Priority</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal Priority</label>
											</div>
											<div class="4u$ 12u$(small)">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High Priority</label>
											</div>
						-->					<!-- Break -->
							<!--				<div class="6u 12u$(small)">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy of this message</label>
											</div>
											<div class="6u$ 12u$(small)">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">I am a human and not a robot</label>
											</div>
									-->		<!-- Break -->
							<!--				<div class="12u$">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
							-->				<!-- Break -->
									<!--		<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr />

									<form method="post" action="#">
										<div class="row uniform">
											<div class="9u 12u$(small)">
												<input type="text" name="query" id="query" value="" placeholder="Query" />
											</div>
											<div class="3u$ 12u$(small)">
												<input type="submit" value="Search" class="fit" />
											</div>
										</div>
				-->					</form>

								<!-- Image -->
				<!--					<h3>Image</h3>

									<h4>Fit</h4>
									<span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
									<div class="box alt">
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
				-->							<!-- Break -->
					<!--						<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
							-->				<!-- Break -->
						<!--					<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
										</div>
									</div>

									<h4>Left &amp; Right</h4>
									<p><span class="image left"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>
									<p><span class="image right"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>

						-->		<!-- Box -->
					<!--				<h3>Box</h3>
									<div class="box">
										<p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus lorem ipsum dolor sit amet nullam.</p>
									</div>
-->
								<!-- Preformatted Code -->
		<!--							<h3>Preformatted</h3>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';
</code></pre>

						</div>
					</div>

				</div>

			</section>
-->
		<!-- Footer -->
<!--			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>
-->
		<!-- Scripts -->
<!--			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form method="post" action="sign.php">
      <input type="text" placeholder="username" name="username"/>
      <br>
      <input type="password" placeholder="password" name="password" />
      <br>
      <center><button type="submit" name="submit">Sign in</button></center>
      <?php if (isset($_GET['error'])):?>
        <center><h3 style="color:red;">Invalid username or password</h3></center>
      <?php endif; ?>

    </form>
  <center>  <button type="button" name="signup">Sign up</button> </center>
  </div>
</div>


	</body>
</html>
