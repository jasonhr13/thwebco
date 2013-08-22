<ul id="nav" class="sf-menu">
							<li class="<?php if($current_page == 'home') echo "current-menu-item";?>"><a href="home.php">Home<span class="subheader">Welcome</span></a></li>
							<li><a href="#">Services<span class="subheader">What we offer</span></a>
								<ul>
									<li class="<?php if($current_page == 'dev') echo "current-menu-item";?>"><a href="development.php"><span> Web Design & Development</span></a></li>
                                  <!--  <li class="<?php if($current_page == 'hosting') echo "current-menu-item";?>"><a href="cms"><span> kiwiCMS </span></a></li> -->
									<li class="<?php if($current_page == 'seo') echo "current-menu-item";?>"><a href="seo.php"><span> Search Engine Optimization </span></a></li>
									<li class="<?php if($current_page == 'mobile') echo "current-menu-item";?>"><a href="mobile.php"><span> Mobile </span></a></li>
									<li class="<?php if($current_page == 'social') echo "current-menu-item";?>"><a href="social.php"><span> Social Media </span></a></li>
                                    <li class="<?php if($current_page == 'hosting') echo "current-menu-item";?>"><a href="hosting"><span> Web Hosting & Email </span></a></li>
                                    
								</ul>
							</li>
							
							<li><a href="#">Our Work <span class="subheader">See our work</span></a>
                            <ul>
                                    <li class="<?php if($current_page == 'portfolio') echo "current-menu-item";?>"><a href="portfolio.php"><span>Portfolio </span></a></li>
                                    <li class="<?php if($current_page == 'case') echo "current-menu-item";?>"><a href="case.php"><span>Case Studies </span></a></li>
                                    </ul>
                                    </li>
							<li class="<?php if($current_page == 'about') echo "current-menu-item";?>"><a href="about.php">About Us<span class="subheader">Who we are</span></a>
								
							</li>
							<li class="<?php if($current_page == 'contact') echo "current-menu-item";?>"><a href="contact.php">Contact<span class="subheader">Get in touch</span></a></li>
                            <li class="<?php if($current_page == 'quote') echo "current-menu-item";?>"><a href="quote.php">Get A Quote<span class="subheader">Let us help</span></a></li>
						</ul>