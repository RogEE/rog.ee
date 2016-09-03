<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('registration_codes'); ?>">Registration Codes</a></p>
</nav>

<article class="g_12">

	<h1>Registration Codes 1.1.0</h1>

	<p>Verifies new registrations and places users into predefined member groups based on customizable invite/registration codes.</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Registration-Codes">code @ GitHub</a></li>
<!--		<li><a href="http://devot-ee.com/add-ons/support/registration-codes/viewforum/322/">support @ devot:ee forums</a></li>-->
		<li><a href="http://devot-ee.com/add-ons/registration-codes/">devot:ee</a></li>
	</ul></p>

	<h3>Fight registration spam with custom registration codes!</h3>

	<p>Using the Registration Codes extension, you can create codes to place users to register directly into a pre-determined member group.</p>

	<p>Optionally, you can require a valid code for new member registration. (i.e. You can restrict new sign-ups on your site to be allowed only with a valid invitation code.</p>

	<h3>MSM-compatible!</h3>

	<p>With the EE Multiple Site Manager active, you can specify registration codes for each individual sites or for all sites globally.</p>

	<h3>3 Useful Ways to Use Registration Codes</h3>

	<p>
	<ol>
		<li><em>Simple registration code:</em> Add a single text input to your registration form to verify new users and/or place them into a member group you have chosen.</li>
		<li><em>Self-selected member groups:</em> Add a drop-down select box or radio button input to the registration form to allow new members to choose their destination group from a pre-defined list.</li>
		<li><em>Store codes in a custom field:</em> Permanently archive the code someone uses to register for your site by using a custom member field.</li>
	</ol>
	</p>

	<h4>Example #1 - Simple Registration Code</h4>

	<p>
	<ol>
		<li>Navigate to the <a href="http://expressionengine.com/user_guide/cp/add-ons/extension_manager.html">Extensions page in your CP</a> and activate the Registration Codes extension.</li>
		<li>Go to the Settings page for the Registration Codes extension, and choose a name for the form field you'll use to track registration codes submitted by your users. The <a href="http://devot-ee.com/images/sized/images/uploads/addons/rogee-registration-codes-cp-480x260.jpg">default value</a> is <b>registration_code</b>. Enter your chosen field name into the <b>Form field [name]</b> box and save the settings.</li>
		<li>Now, you need to create a form field of that same name on your member registration page. The default member theme is in the <strong>themes/profile_themes/default</strong> directory, and the file you need to edit is called <strong>registration_form.html</strong>.</li>
		<li>Add the form field HTML. For example, to add a text box below the CAPTCHA field in the default template, your code will be similar to this: <br />
			<pre><code>&#123;if captcha}
&lt;p>&lt;span class="highlight">*&lt;/span> &#123;lang:captcha}&lt;/p>
&lt;p>
&#123;captcha}
&lt;br />
&lt;input type="text" name="captcha" value=""
   size="20" maxlength="20" style="width:140px;" />
&lt;/p>
&#123;/if}
<strong>&lt;p>Registration code&lt;/p>
&lt;p>&lt;input type="text" name="registration_code" value=""
   size="20" maxlength="100" style="width:140px;" />&lt;/p></strong>
</code></pre></li>
		<li>Note: The <b>name</b> attribute of the form field must match the <b>Form field [name]</b> setting in the Registration Codes extension CP.</li>
		<li>When a new registration is processed, if the value submitted in this form field matches a registration code you have set up in the CP, the new member will be placed into the corresponding destination group.</li>
	</ol>
	</p>

	<h4>Example #2 - Self-selected member groups</h4>

	<p>Perhaps you'd like to give your users the ability to self-select between member groups. For example, if you have BOY and GIRL groups, you can let users choose which group they're placed into when they register.</p>
	<p>This example is similar to Example #1, except that we'll use radio buttons instead of a text input.</p>
	<ol>
		<li>Navigate to the <a href="http://expressionengine.com/user_guide/cp/add-ons/extension_manager.html">Extensions page in your CP</a> and activate the Registration Codes extension.</li>
		<li>Go to the Settings page for the Registration Codes extension, and choose a name for the form field you'll use to track registration codes submitted by your users. The <a href="http://devot-ee.com/images/sized/images/uploads/addons/rogee-registration-codes-cp-480x260.jpg">default value</a> is <b>registration_code</b>. Enter your chosen field name into the <b>Form field [name]</b> box and save the settings.</li>
		<li>Now, you need to create a form field of that same name on your member registration page. The default member theme is in the <strong>themes/profile_themes/default</strong> directory, and the file you need to edit is called <strong>registration_form.html</strong>.</li>
		<li>Add the radio buttons HTML. For example, to add radio buttons below the CAPTCHA field in the default template, your code will be similar to this: <br />
			<pre><code>&#123;if captcha}
&lt;p>&lt;span class="highlight">*&lt;/span> &#123;lang:captcha}&lt;/p>
&lt;p>
&#123;captcha}
&lt;br />
&lt;input type="text" name="captcha" value=""
   size="20" maxlength="20" style="width:140px;" />
&lt;/p>
&#123;/if}
<strong>&lt;p>Select your group&lt;/p>
&lt;p>
&lt;input type="radio" name="registration_code" value="boys" /> Boys&lt;br />
&lt;input type="radio" name="registration_code" value="girls" /> Girls
&lt;/p></strong>
</code></pre></li>
		<li>Note: The <b>name</b> attribute of the radio buttons must match the <b>Form field [name]</b> setting in the Registration Codes extension CP.</li>
		<li>Note: You must create the <b>boys</b> and <b>girls</b> registration codes in the extension CP.</li>
	</ol>
	</p>

	<h4>Example #3 - Registration codes in custom member fields</h4>

	<p>Perhaps you'd like to permanently store the registration codes used to register for your site. (For example, you might want to make special content available in your templates for members who used a particular invitation code, but you don't want to set up unique member groups for them.)</p>
	<p>In this case, we can use ExpressionEngine's built-in <a href="http://expressionengine.com/user_guide/cp/members/custom_member_fields.html">Custom Member Fields</a> feature.</p>
	<ol>
		<li>First, <a href="http://expressionengine.com/user_guide/cp/members/custom_member_fields_edit.html">create a custom member field</a> to keep track of registration/invite codes. <em>Make sure this new field is set to be visible in the registration form. At your discretion, you can keep it hidden on member profile pages.</em></li>
		<li>Note the Field ID of the Custom Member Field you just created. (We'll use this number in a moment.)</li>
		<li>Navigate to the <a href="http://expressionengine.com/user_guide/cp/add-ons/extension_manager.html">Extensions page in your CP</a> and activate the Registration Codes extension.</li>
		<li>Go to the Settings page for the Registration Codes extension.</li>
		<li><em>ExpressionEngine will auto-generate the form field for your Custom Member Field when the registration form is displayed. The name of the form field will use the Field ID of the Custom Member Field: For example, the form field name for Custom Member Field 1 is <b>m_field_id_1</b>.</em> Enter the appropriate field name into the <b>Form field [name]</b> box and save the settings.</li>
		<li>When a new registration is processed, your specified Custom Member Field will be searched for a valid code as in Example #1. In addition, if the registration completes, the code will be stored in the Custom Member Field for that user.</li>
	</ol>
	</p>

	<h3>Other possibilities</h3>

	<p>The extension is designed to be flexible: You can use any form field on the registration form. The possibilities are endless! If you have questions or suggestions about other possible use cases, please create a comment on the <a href="http://getsatisfaction.com/rogee">GetSatisfaction</a> page.</p>

	<h3>Note on Self-activation via email</h3>

	<p>The registration code is processed using the POST data from the registration form, which is only available during the initial member creation process. For this reason, Registration Codes does not fully support <strong>Self-activation via email</strong>. The extension <em>will</em> work to require a valid registration code when a new member is registering, but it <em>won't</em> work to assign that member to a special group if they self-activate by email.</p>

	<p>In order to take advantage of special member assignments according to registration codes, <strong>Require Member Account Activation?</strong> should be set to <strong>No Activation Required</strong>.

</article>

<?php include('../footer.php'); ?>
