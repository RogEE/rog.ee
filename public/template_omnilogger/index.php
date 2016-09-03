<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('template_omnilogger'); ?>">Template OmniLogger</a></p>
</nav>

<article class="g_12">

	<h1>Template OmniLogger 1.0</h1>

	<p>Template OmniLogger brings the event logging functionality of the <a href="http://experienceinternet.co.uk/software/omnilog/">OmniLog</a> API into your ExpressionEngine templates.</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Template-Omnilogger">code @ GitHub</a></li>
		<li><a href="http://devot-ee.com/add-ons/template-omnilogger">devot:ee</a></li>
	</ul></p>

	<h3>About OmniLog</h3>

	<p><a href="http://experienceinternet.co.uk/about/">Stephen Lewis's</a> <a href="http://experienceinternet.co.uk/software/omnilog/">OmniLog module</a> provides a simple API for adding message logging capabilities to an ExpressionEngine add-on. Using OmniLog, add-on developers can easily log notices, warnings, and errors.</p>

	<p>Better yet, OmniLog ensures that important messages don’t go unnoticed by emailing details of the log entry to site administrators (at your discretion, of course).</p>

	<p>(You can read about the module and how it works on <a href="http://experienceinternet.co.uk/software/omnilog/">the OmniLog webpage</a>.)</p>

	<p><strong>But what if you want to create entries in OmniLog entries based on events that run in your templates? That's where Template OmniLogger comes in.</strong></p>

	<h3>Installation</h3>

	<ol>
		<li>If you don't already have <a href="http://experienceinternet.co.uk/software/omnilog/">OmniLog</a> installed, go grab it and <a href="http://experienceinternet.co.uk/software/omnilog/docs/omnilog-installation/">drop it into your ExpressioneEngine installation</a>.</li>
		<li>Un-ZIP the Template OmniLogger download and copy the <strong>/third_party/template_omnilogger</strong> folder into your <strong>/system/expressionengine/third_party</strong> direcotry.</li>
		<li>There is no Step 3.</li>
	</ol>

	<h3>Single tag &rarr; simple message (<em>without</em> Extended Content)</h3>

	<p>The only required parameter is the <strong>message</strong> you want to log:</p>

	<p><pre>
<code>&#123;exp:template_omnilogger message="Something happened!"}</code>
</pre></p>

	<p>(If the <strong>message</strong> is empty, no log entry will be created.)

	<h3>Tag pair &rarr; message with Extended Content</h3>

	<p>Again, the <strong>message</strong> parameter is required.</p>

	<p>The contents of the tag pair will be recorded as the Extended Content of the log entry.</p>

	<p><pre>
<code>&#123;exp:template_omnilogger message="Something happened!"}
Extended content goes here!
&#123;/exp:template_omnilogger}</code>
</pre></p>

	<h3>Parameters</h3>

	<p>The available parameters correspond to the log entry fields in OmniLog.</p>

	<ul>
		<li><b>source</b> &mdash; Appears in the <em>Add-on</em> field of the entry. <i>(defaults to "[Template]")</i></li>
		<li><b>message</b> &mdash; Fills the <em>Message</em> field in OmniLogger.</li>
		<li><b>type</b> &mdash; Describes the severity of the logged event: <em>notice</em>, <em>warning</em>, or <em>error</em> <i>(defaults to "notice")</i></li>
	</ul>

	<ul>
		<li><b>notify_admin</b> &mdash; Set to "yes" if you want OmniLog to dispatch an email notification. <i>(default: "no")</i></li>
		<li><b>admin_emails</b> &mdash; A comma-separated list of admin emails to notify <i>(default: site webmaster email)</i></li>
	</ul>

	<ul>
		<li><b>echo</b> &mdash; When using the tag pair, set <b>echo</b> to "on" if you want the tag contents to be output to the template. <i>(default: "off")</i></li>
	</ul>

</article>

<?php include('../footer.php'); ?>
