<?php include('header.php') ?>

<nav>

	<ul class="g_12">
		<li class="g_12 alpha omega">
			<div style="background: #f6f9ff; padding: 20px;">
				<h2>EE3 Roadmap</h2>
				<p>All my EE2 add-ons are free, open-source, and available via <a href="https://github.com/RogEE">GitHub</a>.</p>
				<p>Due to lack of demand, I've decided not to port these add-ons to EE3 for now.</p>
				<p>However, I continue to be actively involved in ExpressionEngine development.
					Please <a href="mailto:rogee@michaelrog.com">get in touch</a> if you're interested in EE site or add-on development.</p>
			</div>
		</li>
	</ul>

	<ul class="g_12">

		<li class="g_6 alpha addon">
			<h2><a href="<?php echoUrl('show_me_my_assets'); ?>">Show_me_my_assets_ext</a></h2>
			<p>Replaces the CP link to the File Manager with a link to the Assets file browser, and auto-expands subfolders.</p>
			<p><a href="https://github.com/RogEE/Show-Me-My-Assets">GitHub</a> + <a href="<?php echoUrl('show_me_my_assets'); ?>">docs</a>
		</li>

		<li class="g_6 omega addon">
			<h2><a href="<?php echoUrl('tweetify'); ?>">&#123;exp:tweetify&#125;</a></h2>
			<p>Formats URLs, @shoutouts, and #hash-tags as HTML links, a la Twitter. A perfect companion for Twitter Timeline.</p>
			<p><a href="https://github.com/RogEE/Tweetify">GitHub</a> + <a href="<?php echoUrl('tweetify'); ?>">docs</a> + <a href="http://devot-ee.com/add-ons/tweetify/">devot:ee</a></p>
		</li>

		<div class="clear"></div>

		<li class="g_6 alpha addon">
			<h2><a href="<?php echoUrl('registration_codes'); ?>">Registration_codes_ext</a></h2>
			<p>Verifies new registrations and places users into predefined member groups based on customizable invite/registration codes.</p>
			<p><a href="https://github.com/RogEE/Registration-Codes">GitHub</a> + <a href="<?php echoUrl('registration_codes'); ?>">docs</a> + <a href="http://devot-ee.com/add-ons/registration-codes/">devot:ee</a></p>
		</li>

		<li class="g_6 omega addon">
			<h2><a href="<?php echoUrl('reg_restrict'); ?>">Reg_restrict_ext</a></h2>
			<p>Restricts new registrations based on email domain. (Allows sign-ups only from users with emails at your chosen domains.)</p>
			<p><a href="https://github.com/RogEE/Reg-Restrict">GitHub</a> + <a href="<?php echoUrl('reg_restrict'); ?>">docs</a> + <a href="http://devot-ee.com/add-ons/reg-restrict/">devot:ee</a></p>
		</li>

		<div class="clear"></div>

		<li class="g_6 alpha addon">
			<h2><a href="<?php echoUrl('category_sorted_entries'); ?>">&#123;exp:category_sorted_entries&#125;</a></h2>
			<p>Like the Category Archive Tag, but way mo' better. (i.e. with additional variables and parameters for added control)</p>
			<p><a href="https://github.com/RogEE/Category-Sorted-Entries">GitHub</a> + <a href="<?php echoUrl('category_sorted_entries'); ?>">docs</a> + <a href="http://devot-ee.com/add-ons/category-sorted-entries/">devot:ee</a></p>
		</li>

		<li class="g_6 omega addon">
			<h2><a href="<?php echoUrl('category_sorted_entries_lite'); ?>">&#123;exp:category_sorted_entries_lite&#125;</a></h2>
			<p>The 1.0 branch of Category Sorted Entries, no longer in development, available for free!</p>
			<p><a href="https://github.com/RogEE/Category-Sorted-Entries-Lite">GitHub</a> + <a href="<?php echoUrl('category_sorted_entries_lite'); ?>">docs</a> + <a href="http://devot-ee.com/add-ons/category-sorted-entries-lite/">devot:ee</a></p>
		</li>

		<div class="clear"></div>

		<li class="g_6 alpha addon"><h2>
				<a href="<?php echoUrl('email_from_template'); ?>">&#123;exp:email_from_template&#125;</a></h2>
			<p>Sends the tag contents in an e-mail (with or without echoing the contents back to the template). Offers variable replacement and default/customizable parameters.</p>
			<p><a href="https://github.com/RogEE/Email-From-Template">GitHub</a> + <a href="<?php echoUrl('email_from_template'); ?>">docs</a> + <a href="http://devot-ee.com/add-ons/email-from-template/">devot:ee</a></p>
		</li>

		<li class="g_6 omega addon">
			<h2><a href="<?php echoUrl('template_omnilogger'); ?>">&#123;exp:template_omnilogger&#125;</a></h2>
			<p>Creates OmniLog entries from your templates.</p>
			<p><a href="https://github.com/RogEE/Template-Omnilogger">GitHub</a> + <a href="<?php echoUrl('template_omnilogger'); ?>">docs</a></p>
		</li>

		<div class="clear"></div>

		<li class="g_6 alpha addon">
			<h2><a href="<?php echoUrl('wikibits'); ?>">&#123;exp:wikibits&#125;</a></h2>
			<p>Pulls data from EE wikis (into EE templates). Basically, this is EE's Channel tag, but for wiki content.</p>
			<p>(status: coming soon.)</p>
			<p>See <a href="http://expressionengine.com/forums/viewthread/151851/">EE forum thread</a> for notes.</p>
		</li>

		<li class="g_6 omega addon">
			<h2><a href="<?php echoUrl('nicer_wiki_titles'); ?>">Nicer_wiki_titles_ext</a></h2>
			<p>Allows for nicer spacing and capitalization in wiki article titles, and keeps track of article titles from version to version.</p>
			<p>(status: buggy beta)</p>
			<p>See <a href="http://devot-ee.com/add-ons/nicer-wiki-titles/">devot:ee page</a> for info.</p>
		</li>

	</ul>

</nav>

<?php include('footer.php') ?>
