<?php
/**
 * Template Name: Docs - Javascript
 *
 * Cheat sheet for Javascript functionality.
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

                        <h2 id="modals">Modals</h2>

                        <h4>Standard</h4>
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            Launch demo modal
                        </button>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Large</h4>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>

                        <h4>Small</h4>
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h2 id="dropdowns">Drop downs</h2>

                        <h4>Within a navbar</h4>
                        <nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
								<div class="container-fluid">
                                <div class="navbar-header">
                                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">Project Name</a>
                                </div>
                                <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                                <li role="presentation" class="divider"></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                                <li role="presentation" class="divider"></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li id="fat-menu" class="dropdown">
                                            <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                                <li role="presentation" class="divider"></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /.nav-collapse -->
                            </div><!-- /.row -->
                        </nav>

                        <h4>Within pills</h4>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#">Regular link</a></li>
                            <li class="dropdown">
                                <a id="drop4" role="button" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
                                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a id="drop6" role="button" data-toggle="dropdown" href="#">Dropdown 3 <b class="caret"></b></a>
                                <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop6">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>

                        <hr>

                        <h2 id="scrollspy">Scrollspy</h2>

                        <h4>Example in navbar</h4>
                        <nav id="navbar-example2" class="navbar navbar-default navbar-static" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">Project Name</a>
                                </div>
                                <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                                    <ul class="nav navbar-nav">
                                        <li class=""><a href="#fat">@fat</a></li>
                                        <li class=""><a href="#mdo">@mdo</a></li>
                                        <li class="dropdown active">
                                            <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="navbarDrop1">
                                                <li class=""><a href="#one" tabindex="-1">one</a></li>
                                                <li class=""><a href="#two" tabindex="-1">two</a></li>
                                                <li class="divider"></li>
                                                <li class="active"><a href="#three" tabindex="-1">three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
                            <h4 id="fat">@fat</h4>
                            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                            <h4 id="mdo">@mdo</h4>
                            <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
                            <h4 id="one">one</h4>
                            <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
                            <h4 id="two">two</h4>
                            <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
                            <h4 id="three">three</h4>
                            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                            <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
                            </p>
                        </div>

                        <hr>

                        <h2 id="tabs">Tabs</h2>

                        <h4>Standard</h4>
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

                        <hr>

                        <h2 id="tooltips">Tooltips</h2>

                        <h4>Standard</h4>
                        <div class="docs-tooltip">
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                        </div>

                        <hr>

                        <h2 id="popovers">Popovers</h2>

                        <h4>Directions</h4>
                        <div class="docs-popovers">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on left
                            </button>
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on top
                            </button>
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on bottom
                            </button>
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on right
                            </button>
                        </div>

                        <hr>

                        <h2 id="alerts">Alerts</h2>

                        <h4>Dismissable</h4>
                        <div class="alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>Oh snap! You got an error!</h4>
                            <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                            <p>
                                <button type="button" class="btn btn-danger">Take this action</button>
                                <button type="button" class="btn btn-default">Or do this</button>
                            </p>
                        </div>

                        <hr>

                        <h2 id="buttons">Button</h2>

                        <h4>Loading state</h4>
                        <button type="button" id="loading-example-btn" data-loading-text="Loading..." class="btn btn-primary">
                            Loading state
                        </button>

                        <h4>Single toggle</h4>
                        <button type="button" class="btn btn-primary" data-toggle="button">Single toggle</button>

                        <h4>Checkbox</h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="checkbox"> Option 1
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox"> Option 2
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox"> Option 3
                            </label>
                        </div>

                        <h4>Radio</h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option1"> Option 1
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option2"> Option 2
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option3"> Option 3
                            </label>
                        </div>

                        <hr>

                        <h2 id="collapse">Collapse</h2>

                        <h4>Standard</h4>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h2 id="affix">Affix</h2>
						<p>Affix plugin is being used on the sidebar nav of this page.</p>

                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </div><!-- #content -->

            <div id="sidebar" class="<?php mbo_sidebar_class(); ?>" role="complementary">

                <div class="bs-docs-sidebar hidden-print affix" role="complementary">
                    <ul class="nav bs-docs-sidenav">

                        <li>
                            <a href="#modals">Modals</a>
                        </li>
                        <li>
                            <a href="#dropdowns">Dropdowns</a>
                        </li>
                        <li class="">
                            <a href="#scrollspy">Scrollspy</a>
                        </li>
                        <li>
                            <a href="#tabs">Tabs</a>
                        </li>
                        <li>
                            <a href="#tooltips">Tooltips</a>
                        </li>
                        <li>
                            <a href="#popovers">Popovers</a>
                        </li>
                        <li>
                            <a href="#alerts">Alerts</a>
                        </li>
                        <li>
                            <a href="#buttons">Buttons</a>
                        </li>
                        <li>
                            <a href="#collapse">Collapse</a>
                        </li>
                        <li>
                            <a href="#affix">Affix</a>
                        </li>
                    </ul>
                </div>

            </div><!-- #sidebar -->

        </div><!-- #content-area -->
    </div><!-- #main -->

<?php
get_footer();
