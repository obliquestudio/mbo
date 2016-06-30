<?php
/**
 * Template Name: Docs - Pricing Tables
 *
 * Cheat sheet for Pricing Tables.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

get_header(); ?>

    <div id="main" class="site-main container-fluid">
        <div id="content-area" class="row">

            <div id="content" class="site-content <?php mbo_fw_class(); ?>" role="main">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="page-header">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="page-content">

                        <div class="pricing-tables">

                            <h2>Wide</h2>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="plan first">
                                        <div class="head">
                                            <h2>Starter</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>20GB</strong> Storage</li>
                                            <li><strong>15</strong> Email Addresses</li>
                                            <li><strong>5</strong> Domains </li>
                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>19</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="plan recommended">
                                        <div class="head">
                                            <h2>Value</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>50GB</strong> Storage</li>
                                            <li><strong>25</strong> Email Addresses</li>
                                            <li><strong>15</strong> Domains</li>

                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>29</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="plan last">
                                        <div class="head">
                                            <h2>Pro</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>100GB </strong>Storage</li>
                                            <li><strong>50 </strong>Email Addresses</li>
                                            <li><strong>25</strong> Domains</li>
                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>49</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>

                            </div> <!-- row-->

                        </div> <!-- pricing-tables -->

                        <div class="pricing-tables">

                            <h2>Narrow</h2>

                            <div class="row">

                                <div class="col-md-3">
                                    <div class="plan">
                                        <div class="head">
                                            <h2>Starter</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>20GB</strong> Storage</li>
                                            <li><strong>10</strong> Email Addresses</li>
                                            <li><strong>5</strong> Domains</li>
                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>19</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="plan">
                                        <div class="head">
                                            <h2>Value</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>50GB</strong> Storage</li>
                                            <li><strong>10</strong> Email Addresses</li>
                                            <li><strong>15</strong> Domains</li>
                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>29</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="plan recommended">
                                        <div class="head">
                                            <h2>Pro</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>200GB</strong> Storage</li>
                                            <li><strong>20 </strong>Email Addresses</li>
                                            <li><strong>25</strong> Domains</li>
                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>49</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="plan">
                                        <div class="head">
                                            <h2>Premium</h2>
                                        </div>
                                        <ul class="item-list">
                                            <li><strong>200GB</strong> Storage</li>
                                            <li><strong>20</strong> Email Addresses</li>
                                            <li><strong>Unlimited</strong> Domains</li>
                                            <li><strong>Endless</strong> Support</li>
                                        </ul>
                                        <div class="price">
                                            <h3><span class="symbol">$</span>79</h3>
                                            <h4>per month</h4>
                                        </div>
                                        <button type="button" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>

                            </div> <!-- .row-->

                        </div> <!-- .pricing-tables -->

                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </div><!-- #content -->

        </div><!-- #content-area -->
    </div><!-- #main -->

<?php
get_footer();
