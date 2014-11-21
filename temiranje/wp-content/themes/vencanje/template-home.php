<?php 
/**
 * Template Name: Home Page
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vencanje
 */


get_header(); ?>

       <!-- SLIDER -->
        <div id="outerslider">
        	<div class="container">
            <div class="row">
        	<div id="slidercontainer" class="twelve columns">
            
            	<section id="slider">
                    <div id="slideritems" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="images/content/slide1.jpg" alt="" />
                                <div class="flex-caption">
                                    <h1>Love is color of blind</h1>
                                    <p>Maecenas egestas congue nulla, eget feugiat diam<br /> eleifend in. Nunc augue mi, vestibulum.</p>
                                </div>
                            </li>
                            <li>
                                <img src="images/content/slide2.jpg" alt="" />
                                <div class="flex-caption">
                                    <h1>Nulla porta, ipsum sit amet</h1>
                                     <p>Maecenas egestas congue nulla, eget feugiat diam eleifend in. Nunc augue mi, vestibulum.</p>
                                </div>
                            </li>
                            <li>
                                <img src="images/content/slide3.jpg" alt="" />
                                <div class="flex-caption">
                                    <h1>Quisque lorem urna blandit </h1>
                                     <p>Maecenas egestas congue nulla, eget feugiat diam eleifend in. Nunc augue mi, vestibulum.</p>
                                </div>
                            </li>
                        </ul>
                        <img src="images/slider-shadow.png" alt="" />
                    </div>
                </section>
                
            </div>
            </div>
            </div>
        </div>
        <!-- END SLIDER -->


        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <div class="highlight-content">
                               <h1> We're getting married August 18, 2013</h1>
                            </div>
                        
      
							<div id="featured" class="row">
                            	<div class="one_third columns">
                                	<img src="images/icons/icon5.png" alt="" />
                                	<h3>Our Wedding Location</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                                <div class="one_third columns">
                                	<img src="images/icons/icon6.png" alt="" />
                                	<h3>Our Gift Registry</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                                <div class="one_third columns">
                                	<img src="images/icons/icon7.png" alt="" />
                                	<h3>Honeymoon Destinantion</h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
                                </div>
                            </div>

                                
                           	<div class="separator"></div>
                            
                            <div class="row">
                            	<div class="one_half columns">
                                	<div class="frame10 circle">
                                	<img src="images/content/avatar5.jpg" alt="" class=" " />
                                    </div>
                                    <div class="indentleft">
                                	<h3 class="title">About Miranda</h3>
                                    <p>Etiam vitae urna nec ipsum gravida cursus dapibus et eros. Vivamus vel pellentesque nisl. Etiam eu sodales justo. Donec vitae faucibus tellus, at lacinia orci. Aliquam blandit tellus ut porttitor eleifend. Sed ornare tincidunt...</p>
                                    <a href="#" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                                <div class="one_half columns">
                                	<div class="frame10 circle">
                                	<img src="images/content/avatar6.jpg" alt="" />
                                    </div>
                                    <div class="indentleft">
                                	<h3 class="title">About Michael</h3>
                                    <p>Etiam vitae urna nec ipsum gravida cursus dapibus et eros. Vivamus vel pellentesque nisl. Etiam eu sodales justo. Donec vitae faucibus tellus, at lacinia orci. Aliquam blandit tellus ut porttitor eleifend. Sed ornare tincidunt...</p>
                                    <a href="#" class="button">Read more <span></span></a>
                                    </div>
                                </div>
                            </div> 
                             
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
<?php get_footer(); ?>