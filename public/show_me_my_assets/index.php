<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('show_me_my_assets'); ?>">Show Me My Assets!</a></p>
</nav>

<article class="g_12">

	<h1>Show Me My Assets! 1.1.1</h1>

	<p>Replaces the "File Manager" CP link with a link to the Assets file browser.</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Show-Me-My-Assets">code @ GitHub</a></li>
<!--		<li><a href="http://devot-ee.com/add-ons/support/show-me-my-assets/viewforum/1723/">support @ devot:ee forums</a></li>-->
		<li><a href="http://devot-ee.com/add-ons/show-me-my-assets/">devot:ee add-on page</a></li>
	</ul></p>

	<h3>How it works</h3>

	<p>This extension uses the <strong>cp_menu_array</strong> hook to replace the Control Panel link to the default EE File Manager with a link to the <a href="http://pixelandtonic.com/assets">Assets</a> module's file browser.</p>

	<p>(The extension checks first to make sure Assets is installed, and also confirms that the user has permissions to access the module in the CP.)</p>

	<p>Optionally, the extension also introduces a bit of JavaScript (using the <strong>cp_js_end</strong> hook) to automatically expand subfolders in the file browser.</p>

	<h3>Requirements</h3>

	<p>ExpressionEngine 2.2+ and <a href="http://pixelandtonic.com/assets">Assets</a></p>

</article>

<?php include('../footer.php'); ?>
