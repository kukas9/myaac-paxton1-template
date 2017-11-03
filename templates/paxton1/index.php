<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo template_place_holder('head_start'); ?>
    <link rel="stylesheet" href="<?PHP echo $template_path; ?>/default.css" type="text/css" />
    <link rel="stylesheet" href="<?PHP echo $template_path; ?>/basic.css" type="text/css" />
	<link rel="shortcut icon" href="<?php echo $template_path; ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo $template_path; ?>/images/favicon.ico" type="image/x-icon" />
    <?php echo template_place_holder('head_end'); ?>
</head>
<body>
<?php echo template_place_holder('body_start'); ?>
<div id="page">
	<div id="logo-art">
    	<div id="logo-box">
    		<!--<div id="logo"><img src="<?php echo $template_path; ?>/images/logo.png" width="439" height="137" /></div>-->
        </div>
        <div id="cnt-box">
        	<div id="cnt-container">
            	<div id="cnt-left">
                	<div id="menu">
                    	<div id="menu-top">News</div>
                        <div id="menu-cnt">
                        	<ul>
                            	<li>
                                <ul>
                                	<li><a href="<?php echo $template['link_news']; ?>">Latest News</a></li>
									<li><a href="<?php echo $template['link_news_archive']; ?>">News Archive</a></li>
                               	</ul>
                                </li>
                            </ul>
                        </div>
                        <div id="menu-top">Account</div>
                        <div id="menu-cnt">
                        	<ul>
                            	<li>
                                <ul>
									<?php if($logged): ?>
										<li><a href="<?php echo $template['link_account_manage']; ?>">My Account</a></li>
										<li><a href="<?php echo $template['link_account_logout']; ?>">Logout</a></li>
									<?php else: ?>
										<li><a href="<?php echo $template['link_account_manage']; ?>">Login</a></li>
										<li><a href="<?php echo $template['link_account_create']; ?>">Create Account</a></li>
										<li><a href="<?php echo $template['link_account_lost']; ?>">Lost Account</a></li>
									<?php endif; ?>
									<li><a href="<?php echo $template['link_rules']; ?>">Server Rules</a></li>
	                                <?php if($config['bug_report']): ?>
										<li><a href="<?php echo $template['link_bugtracker']; ?>">Report bug</a></li>
	                                <?php endif; ?>
                               	</ul>
                                </li>
                            </ul>
                        </div>
                        <div id="menu-top">Community</div>
                        <div id="menu-cnt">
                        	<ul>
                            	<li>
                                <ul>
                                	<li><a href="<?php echo $template['link_characters']; ?>">Characters</a></li>
                                	<li><a href="<?php echo $template['link_online']; ?>">Who is online?</a></li>
									<li><a href="<?php echo $template['link_highscores']; ?>">Highscores</a></li>
								<?php if(isset($config['powergamers'])): ?>
									<li><a href="<?php echo $template['link_powergamers']; ?>">Powergamers</a></li>
								<?php endif; ?>
									<li><a href="<?php echo $template['link_lastkills']; ?>">Last Kills</a></li>
									<li><a href="<?php echo $template['link_houses']; ?>">Houses</a></li>
									<li><a href="<?php echo $template['link_guilds']; ?>">Guilds</a></li>
								<?php if(isset($config['wars'])): ?>
									<li><a href="<?php echo $template['link_wars']; ?>">Guild wars</a></li>
								<?php endif;
								if($config['otserv_version'] == TFS_03): ?>
									<li><a href="<?php echo $template['link_bans']; ?>">Bans</a></li>
								<?php endif;
								if($config['forum'] != ''):
									if($config['forum'] == 'site'): ?>
										<li><a href="<?php echo internalLayoutLink('forum'); ?>">Forum</a></li>
									<?php else: ?>
										<li><a href="<?php echo $config['forum']; ?>" target="_blank">Forum</a></li>
									<?php endif; ?>
								<?php endif; ?>
									<li><a href="<?php echo $template['link_team']; ?>">Team</a></li>
                                </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="menu-top">Library</div>
                        <div id="menu-cnt">
                        	<ul>
                            	<li>
                                <ul>
									<li><a href="<?php echo $template['link_creatures']; ?>">Creatures</a></li>
									<li><a href="<?php echo $template['link_spells']; ?>">Spells</a></li>
									<li><a href="<?php echo $template['link_commands']; ?>">Commands</a></li>
									<li><a href="<?php echo $template['link_serverInfo']; ?>">Server Info</a></li>
									<li><a href="<?php echo $template['link_downloads']; ?>">Downloads</a></li>
									<li><a href="<?php echo $template['link_screenshots']; ?>">Screenshots</a></li>
									<li><a href="<?php echo $template['link_movies']; ?>">Movies</a></li>
									<li><a href="<?php echo $template['link_experienceTable']; ?>">Experience table</a></li>
									<li><a href="<?php echo $template['link_experienceStages']; ?>">Experience stages</a></li>
									<li><a href="<?php echo $template['link_faq']; ?>">FAQ</a></li>
                                </ul>
                                </li>
                            </ul>
                        </div>
                        <?php if($config['gifts_system']): ?>
							<div id="menu-top">Shop</div>
							<div id="menu-cnt">
								<ul>
									<li>
									<ul>
										<li><a href="<?php echo $template['link_points']; ?>">Points</a></li>
										<li><a href="<?php echo $template['link_gifts']; ?>">Gifts</a></li>
									<?php if($logged): ?>
										<li><a href="<?php echo $template['link_gifts_history']; ?>">Shop History</a></li>
									<?php endif; ?>

										</ul>
									</li>
								</ul>
							</div>
						<?php endif; ?>
		                <?php if($config['template_allow_change']): ?>
							<div id="menu-top">Change template</div>
							<div id="menu-cnt">
									<ul>
										<li><center><?php echo template_form(); ?>
										</center></li>
									</ul>
							</div>
		                <?php endif; ?>
                    </div>
                </div>
                <div id="cnt-right">
				<!-- TOP INFO -->
                	<div id="content-cnt" style="margin-bottom: 8px;">
                    	<div id="content-bg">
						<div id="content-top">
							<div id="content-bot" style="font-size: 10px;">
							<style type="text/css">font#offline { font-size: 26px; } font#online { font-size: 26px; color: #008000; }</style>
									<table style="text-align: center;" width="100%">
										<tbody><tr>

											<td style="font-size: 15px;">
												<div style="font-size: 15px;">
                                                                                                		  <?php
			if($status['online'])
				echo '<b><div id="players" style="display: inline;">' . $status['players'] . '/' . $status['playersMax'] . '</div> players online.</b>';
			else
				echo '<font color="red"><b>Server<br/>OFFLINE</b></font>';
			?></div>
						<?php echo template_place_holder('center_top'); ?>
											</td>
										</tr>
									</tbody></table>
                            </div>
                        </div>
                        </div>
                    </div>
                <div id="cnt-right">
                	<div id="content-cnt">
                    	<div id="content-bg">
                        	<div id="content-top">
                            	<div id="content-bot">
                                <?php echo $content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        	<div id="cnt-box2">
        		<div id="cnt-container">
            		<!-- <div id="cnt-left">
                		<center><p style="color: #FFF;">Designed by Vean.</p></center>
            		</div>
            		<div id="cnt-right"> -->
					<center>
							<p style="color: #FFF; font-size: 11px;">
								<?php echo template_footer(); ?>
							</p>
						</center>
            		</div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<?php echo template_place_holder('body_end'); ?>
</body>
</html>
