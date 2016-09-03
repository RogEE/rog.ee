<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('email_from_template'); ?>">Email-from-Template</a></p>
</nav>

<article class="g_12">

	<h1>Email-from-Template 1.5.0</h1>

	<p>Sends the tag contents in an e-mail (with or without echoing the contents back to the template).</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Email-From-Temlate">code @ GitHub</a></li>
<!--		<li><a href="http://devot-ee.com/add-ons/support/email-from-template/viewforum/389/">support @ devot:ee forums</a></li>-->
		<li><a href="http://devot-ee.com/add-ons/email-from-template/">devot:ee</a></li>
	</ul></p>

	<p>I wrote this plugin was mostly a learning exercise, to get a knack for EE development. As I have come to find out, <a href="http://devot-ee.com/add-ons/plugins/send-email/">Adam Khan released a similar plugin</a>, and his plugin can be installed on EE 1.6+ as well. (My Email-from-Template offers variable replacement, parameter defaults, and entity decoding, though.)</p>

	<h3>Installation</h3>

	<p>After you download the plugin files from the code repository, upload them to <strong>/system/expressionengine/third_party/email_from_template/</strong> on your server. The <a href="http://expressionengine.com/user_guide/templates/plugins.html">installed plugin</a> should appear in the Add-ons section of the CP.</p>

	<h3>Example: General Use</h3>

	<p><pre>
<code>&#123;exp:email_from_template to="admin@ee.com" from="server@ee.com" subject="Hello!"}
   This tag content is being viewed at {uri_string} by {httpagent}. Sending notification to {to}.
&#123;/exp:email_from_template}</code>
</pre></p>

	<p><pre>
<code>&#123;if group_id == 1}

   My secret stuff goes here.

&#123;if:else}

   &#123;exp:email_from_template subject="Unauthorized Access!" echo="off"}
      Somebody tried to access the secret content at {uri_string} -- beware!
   &#123;/exp:email_from_template}

   Sorry, nothing here for you.

&#123;/if}</code>
</pre></p>

	<h3>Parameters</h3>
	<p><ul>
		<li><b>to</b> - destination email address <i>(default: site webmaster)</i></li>
		<li><b>cc</b> - [optional] email address to carbon-copy</li>
		<li><b>bcc</b> - [optional] email address to blind-carbon-copy</li>
		<li><b>from</b> - sender email address <i>(default: site webmaster)</i></li>
		<li><b>subject</b> - email subject line <i>(default: template URI)</i></li>
		<li><b>decode_subject_entities</b> - Set to <b>"no"</b> if you don't want to parse the HTML entities in the subject line.</li>
		<li><b>decode_message_entities</b> - Set to <b>"no"</b> if you don't want to parse the HTML entities in the message text.</li>
		<li><b>mailtype</b> - <b>"text"</b> or <b>"html"</b></li>
		<li><b>alt_message</b> - [optional] a text-only message (for email clients that don't support HTML email)</li>
		<li><b>attachments</b> - comma-separated list of server paths to files</li>
		<li><b>echo</b> - Set to <b>"off"</b> if you don't want to display the tag contents in the template.</li>
	</ul></p>

	<p><em>Note:</em> The <b>to</b> parameter accepts multiple email addresses, comma-separated.</p>

	<h3>Variables</h3>
	<p><ul>
		<li><code>{to}</code></li>
		<li><code>{cc}</code></li>
		<li><code>{bcc}</code></li>
		<li><code>{from}</code></li>
		<li><code>{subject}</code></li>
		<li><code>{ip}</code></li>
		<li><code>{httpagent}</code></li>
		<li><code>{uri_string}</code></li>
	</ul></p>

	<h3>Use with other plugins and tags</h3>

	<p>When you want to email the output of other tags, put your <b><code>&#123;exp:email_from_template}</code></b> tag <em>inside</em> the other tag and set <a href="http://expressionengine.com/user_guide/templates/plugins.html#changing-parsing-order">parse="inward"</a> on the outer tag(s).</p>

</article>

<?php include('../footer.php'); ?>
