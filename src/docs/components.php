<?php
/**
 * Template Name: Docs - Components
 *
 * Cheat sheet for framework Components.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

get_header(); ?>

	<div id="main" class="site-main container-fluid">
		<div id="content-area" class="row">

			<div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="page-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="page-content">

						<h2>Dropdowns</h2>
						<h3>Standard</h3>
						<div id="dropdown-demo" class="dropdown clearfix">
							<button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">
								Dropdown
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
								<li role="presentation" class="dropdown-header">Dropdown header</li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation" class="dropdown-header">Dropdown header</li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
							</ul>
						</div>

						<hr>

						<h2>Button groups</h2>
						<h3>Standard</h3>
						<div class="btn-group">
							<button type="button" class="btn btn-default">Left</button>
							<button type="button" class="btn btn-default">Middle</button>
							<button type="button" class="btn btn-default">Right</button>
						</div>

						<h3>Button toolbar</h3>
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<button type="button" class="btn btn-default">1</button>
								<button type="button" class="btn btn-default">2</button>
								<button type="button" class="btn btn-default">3</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">4</button>
								<button type="button" class="btn btn-default">5</button>
								<button type="button" class="btn btn-default">6</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">7</button>
							</div>
						</div>

						<h3>Sizing</h3>

						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group btn-group-lg">
								<button type="button" class="btn btn-default">Left</button>
								<button type="button" class="btn btn-default">Middle</button>
								<button type="button" class="btn btn-default">Right</button>
							</div>
						</div>
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<button type="button" class="btn btn-default">Left</button>
								<button type="button" class="btn btn-default">Middle</button>
								<button type="button" class="btn btn-default">Right</button>
							</div>
						</div>
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group btn-group-sm">
								<button type="button" class="btn btn-default">Left</button>
								<button type="button" class="btn btn-default">Middle</button>
								<button type="button" class="btn btn-default">Right</button>
							</div>
						</div>
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group btn-group-xs">
								<button type="button" class="btn btn-default">Left</button>
								<button type="button" class="btn btn-default">Middle</button>
								<button type="button" class="btn btn-default">Right</button>
							</div>
						</div>

						<h3>Nesting</h3>
						<div class="btn-group">
							<button type="button" class="btn btn-default">1</button>
							<button type="button" class="btn btn-default">2</button>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown link</a></li>
									<li><a href="#">Dropdown link</a></li>
								</ul>
							</div>
						</div>

						<h3>Vertical</h3>
						<div class="btn-group-vertical">
							<button type="button" class="btn btn-default">Button</button>
							<button type="button" class="btn btn-default">Button</button>
							<div class="btn-group">
								<button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
									<li><a href="#">Dropdown link</a></li>
									<li><a href="#">Dropdown link</a></li>
								</ul>
							</div>
							<button type="button" class="btn btn-default">Button</button>
							<button type="button" class="btn btn-default">Button</button>
							<div class="btn-group">
								<button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
									<li><a href="#">Dropdown link</a></li>
									<li><a href="#">Dropdown link</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
									<li><a href="#">Dropdown link</a></li>
									<li><a href="#">Dropdown link</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
									<li><a href="#">Dropdown link</a></li>
									<li><a href="#">Dropdown link</a></li>
								</ul>
							</div>
						</div>
						<h3>Justified</h3>
						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<button type="button" class="btn btn-default">Left</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">Middle</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">Right</button>
							</div>
						</div>

						<hr>

						<h2>Button dropdowns</h2>

						<h3>Single button dropdowns</h3>
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->

						<h3>Split button dropdowns</h3>
						<div class="btn-group">
							<button type="button" class="btn btn-default">Default</button>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Primary</button>
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-success">Success</button>
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-info">Info</button>
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-warning">Warning</button>
							<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button type="button" class="btn btn-danger">Danger</button>
							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->

						<h3>Sizing</h3>

						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
									Large button <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div><!-- /btn-group -->
						</div><!-- /btn-toolbar -->
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
									Small button <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div><!-- /btn-group -->
						</div><!-- /btn-toolbar -->
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
									Extra small button <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div><!-- /btn-group -->
						</div><!-- /btn-toolbar -->

						<hr>

						<h3>Input groups</h3>

						<form role="form">
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="text" placeholder="Username" class="form-control">
							</div>
							<br>
							<div class="input-group">
								<input type="text" class="form-control">
								<span class="input-group-addon">.00</span>
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control">
								<span class="input-group-addon">.00</span>
							</div>
						</form>

						<h3>Sizing</h3>

						<form role="form">
							<div class="input-group input-group-lg">
								<span class="input-group-addon">@</span>
								<input type="text" placeholder="Username" class="form-control">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="text" placeholder="Username" class="form-control">
							</div>
							<br>
							<div class="input-group input-group-sm">
								<span class="input-group-addon">@</span>
								<input type="text" placeholder="Username" class="form-control">
							</div>
						</form>

						<h3>Checkboxes and radio addons</h3>

						<form >
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon">
										  <input type="checkbox">
										</span>
										<input type="text" class="form-control">
									</div><!-- /input-group -->
								</div><!-- /.col-lg-6 -->
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon">
											<input type="radio">
										</span>
										<input type="text" class="form-control">
									</div><!-- /input-group -->
								</div><!-- .col-lg-6 -->
							</div><!-- /.row -->
						</form>

						<h3>Button addons</h3>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">Go!</button>
										</span>
										<input type="text" class="form-control">
									</div><!-- /input-group -->
								</div><!-- /.col-lg-6 -->
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">Go!</button>
										</span>
									</div><!-- /input-group -->
								</div><!-- /.col-lg-6 -->
							</div><!-- /.row -->
						</form>

						<h3>Buttons with dropdowns</h3>
						<form role="form">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div><!-- /btn-group -->
										<input type="text" class="form-control">
									</div><!-- /input-group -->
								</div><!-- /.col-lg-6 -->
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-btn">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div><!-- /btn-group -->
									</div><!-- /input-group -->
								</div><!-- /.col-lg-6 -->
							</div><!-- /.row -->
						</form>

						<h3>Segmented buttons</h3>
						<form role="form">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<div class="input-group-btn">
											<button type="button" class="btn btn-default" tabindex="-1">Action</button>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<input type="text" class="form-control">
									</div><!-- /.input-group -->
								</div><!-- /.col-lg-6 -->
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-btn">
											<button type="button" class="btn btn-default" tabindex="-1">Action</button>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</div><!-- /.input-group -->
								</div><!-- /.col-lg-6 -->
							</div><!-- /.row -->
						</form>

						<hr>

						<h2>Tabs</h2>

						<h3>Standard</h3>
						<ul id="myTab" class="nav nav-tabs">
							<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
							<li><a href="#profile" data-toggle="tab">Profile</a></li>
							<li class="dropdown">
								<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
									<li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
									<li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
								</ul>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="home">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="profile">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							</div>
							<div class="tab-pane fade" id="dropdown1">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
							<div class="tab-pane fade" id="dropdown2">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							</div>
						</div>

						<h3>Justified</h3>
						<ul id="myTab" class="nav nav-tabs nav-justified">
							<li class="active"><a href="#home2" data-toggle="tab">Home</a></li>
							<li><a href="#profile2" data-toggle="tab">Profile</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="home2">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="profile2">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							</div>
						</div>

						<hr>

						<h2>Pills</h2>

						<h3>Standard</h3>
						<ul class="nav nav-pills">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Help</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									Dropdown <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>

						<h3>Stacked</h3>
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li><a href="#">Messages</a></li>
						</ul>

						<h3>Justified</h3>
						<ul class="nav nav-pills nav-justified">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li><a href="#">Messages</a></li>
						</ul>

						<hr>

						<h2>Breadcrumbs</h2>

						<h3>Standard</h3>
						<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Library</a></li>
							<li class="active">Data</li>
						</ol>

						<hr>

						<h2>Pagination</h2>

						<h3>Standard</h3>
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="active"><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>

						<h3>Sizing</h3>
						<div>
							<ul class="pagination pagination-lg">
								<li><a href="#">«</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>
						<div>
							<ul class="pagination">
								<li><a href="#">«</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>
						<div>
							<ul class="pagination pagination-sm">
								<li><a href="#">«</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>

						<hr>

						<h2>Pager</h2>

						<h3>Standard</h3>
						<div class="pager">
							<ul>
								<li><a href="#">Previous</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>

						<h3>Aligned</h3>
						<div class="pager">
							<ul>
								<li class="previous disabled"><a href="#">&larr; Older</a></li>
								<li class="next"><a href="#">Newer &rarr;</a></li>
							</ul>
						</div>

						<hr>

						<h2>Labels</h2>

						<h3>Variations</h3>
						<ul>
							<li>
								<span class="label label-default">Default</span>
							</li>
							<li>
								<span class="label label-primary">Primary</span>
							</li>
							<li>
								<span class="label label-success">Success</span>
							</li>
							<li>
								<span class="label label-info">Info</span>
							</li>
							<li>
								<span class="label label-warning">Warning</span>
							</li>
							<li>
								<span class="label label-danger">Danger</span>
							</li>
						</ul>

						<hr>

						<h2>Badges</h2>

						<h3>Standard</h3>
						<a href="#">Notifications <span class="badge">10</span></a>

						<hr>

						<h2>Alerts</h2>

						<h3>Standard</h3>
						<div class="alert alert-success">
							<h4>Well done!</h4>
							<p>You successfully read this <a href="#" class="alert-link">important</a> alert message.</p>
						</div>
						<div class="alert alert-info">
							<strong>Heads up!</strong> This alert needs your <a href="#" class="alert-link">attention</a>, but it's not super important.
						</div>
						<div class="alert alert-warning">
							<strong>Warning!</strong> Best check yo <a href="#" class="alert-link">self</a>, you're not looking too good.
						</div>
						<div class="alert alert-danger">
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						</div>


						<h3>Dismissable</h3>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Warning!</strong> Better check yourself, you're not looking too good.
						</div>

						<hr>

						<h2>Progress Bars</h2>
						<h3>Basic</h3>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								<span class="sr-only">60% Complete</span>
							</div>
						</div>

						<h3>Contextual alternatives</h3>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete (success)</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete</span>
							</div>
						</div>

						<h3>Striped</h3>
						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete (success)</span>
							</div>
						</div>
						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete</span>
							</div>
						</div>
						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div>
						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete (danger)</span>
							</div>
						</div>

						<h3>Stacked</h3>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%">
								<span class="sr-only">35% Complete (success)</span>
							</div>
							<div class="progress-bar progress-bar-warning" style="width: 20%">
								<span class="sr-only">20% Complete (warning)</span>
							</div>
							<div class="progress-bar progress-bar-danger" style="width: 10%">
								<span class="sr-only">10% Complete (danger)</span>
							</div>
						</div>

						<hr>

						<h2>List Groups</h2>

						<h3>Standard</h3>
						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>

						<h3>Badges</h3>
						<ul class="list-group">
							<li class="list-group-item"><span class="badge">14</span>Cras justo odio</li>
							<li class="list-group-item"><span class="badge">2</span>Dapibus ac facilisis in</li>
							<li class="list-group-item"><span class="badge">7</span>Morbi leo risus</li>
							<li class="list-group-item"><span class="badge">5</span>Porta ac consectetur ac</li>
							<li class="list-group-item"><span class="badge">3</span>Vestibulum at eros</li>
						</ul>

						<h3>Linked items</h3>
						<div class="list-group">
							<a href="#" class="list-group-item active">
								Cras justo odio
							</a>
							<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
							<a href="#" class="list-group-item">Morbi leo risus</a>
							<a href="#" class="list-group-item">Porta ac consectetur ac</a>
							<a href="#" class="list-group-item">Vestibulum at eros</a>
						</div>

						<h3>Highlight classes</h3>
						<div class="row">
							<div class="col-md-6">
								<strong>Standard</strong>
								<ul class="list-group">
									<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
									<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
									<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
									<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
								</ul>
							</div>
							<div class="col-md-6">
								<strong>Linked items</strong>
								<div class="list-group">
									<a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
									<a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
									<a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
									<a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
								</div>
							</div>
						</div>

						<hr>

						<h2>Panels</h2>


						<h3>With header</h3>
						<div class="panel panel-default">
							<div class="panel-heading">Panel heading without title</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>


						<h3>With footer</h3>
						<div class="panel panel-default">
							<div class="panel-body">
								Panel content
							</div>
							<div class="panel-footer">Panel footer</div>
						</div>


						<h3>Contextual alternatives</h3>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title">Panel title</h3>
							</div>
							<div class="panel-body">
								Panel content
							</div>
						</div>


						<h3>With tables</h3>
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Panel heading</div>
							<div class="panel-body">
								<p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>

							<!-- Table -->
							<table>
								<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
								</tbody>
							</table>
						</div>

						<h3>With list groups</h3>
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Panel heading</div>
							<div class="panel-body">
								<p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>

							<!-- List group -->
							<ul class="list-group">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>

						<hr>

						<h2>Wells</h2>
						<h3>Standard</h3>
						<div class="well">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
						<h3>Large</h3>
						<div class="well well-lg">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
						<h3>Small</h3>
						<div class="well well-sm">Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			</div><!-- #content -->

			<?php get_sidebar(); ?>

		</div><!-- #content-area -->
	</div><!-- #main -->

<?php
get_footer();
