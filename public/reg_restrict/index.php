<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('reg_restrict'); ?>">Reg Restrict</a></p>
</nav>

<article class="g_12">

	<h1>Reg Restrict 2.0.0</h1>

	<p>Restricts new registrations based on email domain. (Allow sign-ups only from users with emails at your chosen domains. Or, auto-assign new members to groups based on their email domain.)</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Reg-Restrict">code @ GitHub</a></li>
<!--		<li><a href="http://devot-ee.com/add-ons/support/reg-restrict/viewforum/1236">support @ Devot:ee</a></li>-->
		<li><a href="http://devot-ee.com/add-ons/reg-restrict/">devot:ee</a></li>
	</ul></p>

	<h3>Screenshot</h3>

	<p><a class="" href="/images/reg_restrict_2_preview.jpg"><img src="/images/reg_restrict_2_preview.jpg" width="200"></a></p>

	<h3>Plays nice with Solspace User</h3>

	<p><strong>Reg Restrict</strong> detects when the Solspace User module is active (and when Email-as-Username is turned on) and adapts seamlessly.</p>

	<h3>General Preferences</h3>

	<p>
	<ul>
		<li><strong>Form field name: </strong> By default, the extension looks for a domain name in the <em>email</em> field of the registration form. If you want to use another field (e.g. an "alternate email" field), specify the field name in the <em>Form field name</em> preference.</li>
		<li><strong>Require valid domain: </strong> By default, the extension restricts new registrations to domains on the allowed list. You can optionally disable this preference to allow registrations from all domains; Members who register with a domain that is on the list will still be assigned to the group you specify.</li>
	</ul>
	</p>


</article>

<?php include('../footer.php'); ?>
