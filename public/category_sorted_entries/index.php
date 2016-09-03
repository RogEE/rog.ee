<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('category_sorted_entries'); ?>">Category Sorted Entries</a></p>
</nav>

<article class="g_12">

	<h1>Category Sorted Entries 2.3.0</h1>

	<p>Like the built-in EE Category Archive, but way mo' better (i.e. with tons more variables and parameters for added control).</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Category-Sorted-Entries">code @ GitHub</a></li>
		<li><a href="http://devot-ee.com/add-ons/category-sorted-entries/">devot:ee</a></li>
	</ul></p>

	<p>Once upon a time, I wanted to select all my entries with a particular category from Category Group 1, but I wanted to display them in a nested list that included only categories from Category Group 2. I also needed to display the entry_id alongside the title of the entry. The standard Category Archive Tag was close, but didn't quite cut it; So, I wrote this plugin...</p>

	<p><em>n.b. Category Sorted Entries uses the PHP <a href="http://php.net/manual/en/function.array-fill-keys.php">array_fill_keys</a> function, so PHP 5.2+ is required.</em></p>

	<h3>Examples: General Use</h3>

	<p><pre>
<code>&#123;exp:category_sorted_entries channel="test" style="nested" show_empty="no" group_id="2" category="not 2|3"}

&#123;category}
&lt;h3>&#123;category_name} (&#123;category_id})&lt;/h3>
&#123;/category}

&#123;entries}
&lt;p>&#123;title} (&#123;entry_id})&lt;/p>
&#123;/entries}

&#123;/exp:category_sorted_entries}</code>
</pre></p>

	<p><pre>
<code>&#123;exp:category_sorted_entries channel="test" style="linear" show_empty="no" group_id="not 2" entry_id="1|2|3|4|5"}

&#123;category}
&lt;h3>&#123;category_name} (&#123;category_id})&lt;/h3>
&#123;/category}

&#123;entries}
&lt;p>&#123;title} (&#123;entry_id})&lt;/p>
&#123;/entries}

&#123;/exp:category_sorted_entries}</code>
</pre></p>

	<p>If you are using additional plugins or modules inside the listing, you may need to use <a href="http://expressionengine.com/docs/templates/plugins.html">parse="inward"</a> to ensure that entry IDs and other variables are available to those tags:</p>

	<p><pre>
<code>&#123;exp:category_sorted_entries channel="test" style="nested" group_id="1" <b>parse="inward"</b>}

 &#123;category}
  &lt;h3>&#123;category_name}&lt;/h3>
 &#123;/category}

 &#123;entries}

  &lt;p>&#123;title}&lt;/p>

  &lt;p><b>
  &#123;exp:channel_ratings:rating entry_id="&#123;entry_id}" scale="5"}
   &#123;rating:overall:stars}
  &#123;/exp:channel_ratings:rating}</b>
  &lt;/p>

 &#123;/entries}

&#123;/exp:category_sorted_entries}</code>
</pre></p>


	<h3>Parameters</h3>
	<p>All the <a href="http://expressionengine.com/user_guide/modules/channel/category_archive.html#parameters">parameters</a> of the standard <a href="http://expressionengine.com/user_guide/modules/channel/category_archive.html">Category Archive Tag</a> are available. In addition, some extra functionality is provided.</p>

	<ul>
		<li><b>entry_id</b> - Entry IDs by which the results will be filtered. <i>(Only entries matching this parameter will be displayed.)</i></li>
		<li><b>category</b> - Category IDs by which the results will be filtered. <i>(Only entries assigned to these categories will be displayed.)</i></li>
		<li><b>status</b> - Status value(s) by which the results will be filtered. <i>(Only entries with these status values will be displayed.)</i></li>
	</ul>

	<ul>
		<li><b>show_expired_entries</b> - <i>(default: "no")</i></li>
		<li><b>show_future_entries</b> - <i>(default: "no")</i></li>
	</ul>

	<ul>
		<li><b>group_id</b> - The category group(s) by which entries will be sorted/displayed.</li>
		<li><b>show</b> - IDs by which the category listing will be filtered. <i>(Only these categories will be displayed.)</i></li>
		<li><b>show_empty</b> - Whether categories with no entries are displayed. <i>(default: "yes")</i></li>
		<li><b>parent_only</b> - Show only categories with no parent. <i>(i.e. "root" categories)</i></li>
	</ul>

	<ul>
		<li><b>container_tag</b> - Enclosing tag for each category and its entries <i>(when using "nested" style)</i></li>
		<li><b>container_class</b> - Class attribute for each container <i>(when using "nested" style)</i></li>
		<li><b>id</b> - ID attribute for the root container <i>(when using "nested" style)</i></li>
		<li><b>class</b> - Class attribute for the root container <i>(when using "nested" style)</i></li>
		<li><b>item_tag</b> - Enclosing tag for each entry <i>(when using "nested" style)</i></li>
		<li><b>item_class</b> - Class attribute for each entry <i>(when using "nested" style)</i></li>
	</ul>

	<ul>
		<li><b>backspace</b> - Removes characters from the last iteration of the loop <i>(when using "linear" style)</i></li>
	</ul>

	<ul>
		<li><b>disable</b> - Skip processing of variables you don't need: <i>category_fields, custom_fields, member_data</i></li>
	</ul>

	</p>

	<p>Note: The <b>group_id</b>, <b>entry_id</b>, <b>category</b>, and <b>show</b> parameters can accept multiple IDs, pipe-separated, and optionally can include a <b>not</b> trigger. (e.g. <b>"1"</b>, <b>"2|3|5"</b>, <b>"not 2"</b>, and <b>"not 3|4|6"</b> are all valid.)
	</p>

	<h3>Variables</h3>

	<p>
	<ul>
		<li><strong>Category</strong> variables are available within the <strong>&#123;category}</strong> tag pair.</li>
		<li><strong>Entry</strong> variables <strong>Member</strong> data are available within the <strong>&#123;entries}</strong> tag pair.</li>
	</ul>
	</p>

	<table>
		<tr>
			<th>Entry Data</th>
			<th>Member Data</th>
			<th class="g_o">Category Data</th>
		</tr>

		<tr>
			<td>

				<ul>

					<li>&#123;title}</li>
					<li>&#123;url_title}</li>
					<li>&#123;status}</li>
					<li>&#123;site_id}</li>
					<li>&#123;channel_id}</li>
					<li>&#123;author_id}</li>
					<li>&#123;ip_address}</li>
					<li>&#123;forum_topic_id}</li>

					<li>&#123;year}</li>
					<li>&#123;month}</li>
					<li>&#123;day}</li>
					<li>&#123;entry_date <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html">format</a>="..."}</li>
					<li>&#123;expiration_date <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html">format</a>="..."}</li>
					<li>&#123;comment_expiration_date <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html">format</a>="..."}</li>
					<li>&#123;recent_comment_date <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html">format</a>="..."}</li>

					<li>&#123;comment_total}</li>
					<li>&#123;view_count_one}</li>
					<li>&#123;view_count_two}</li>
					<li>&#123;view_count_three}</li>
					<li>&#123;view_count_four}</li>

					<li>&#123;sticky}</li>

				</ul>

				<p>Simple <strong>Custom Channel Fields</strong> are also available using each field's short_name. <em>Unfortunately, at the moment, CSE parses custom field content directly from the database, so more advanced Fieldtypes (e.g. Matrix, Playa) and sub-functions (e.g. image :thumbnail) will not render fully. This will be addressed in a future release.</em></p>

			</td>
			<td>

				<ul>

					<li>&#123;member_id}</li>
					<li>&#123;username}</li>
					<li>&#123;screen_name}</li>
					<li>&#123;group_id}</li>

					<li>&#123;email}</li>
					<li>&#123;url}</li>

					<li>&#123;join_date <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html">format</a>="..."}</li>

					<li>&#123;language}</li>

					<li>&#123;bday_d}</li>
					<li>&#123;bday_m}</li>
					<li>&#123;bday_y}</li>
					<li>&#123;aol_im}</li>
					<li>&#123;yahoo_im}</li>
					<li>&#123;msn_im}</li>
					<li>&#123;icq}</li>

					<li>&#123;bio}</li>
					<li>&#123;location}</li>
					<li>&#123;occupation}</li>
					<li>&#123;interests}</li>

					<li>&#123;signature}</li>
					<li>&#123;sig_img_filename}</li>
					<li>&#123;sig_img_width}</li>
					<li>&#123;sig_img_height}</li>

					<li>&#123;avatar_filename}</li>
					<li>&#123;avatar_width}</li>
					<li>&#123;avatar_height}</li>

					<li>&#123;photo_filename}</li>
					<li>&#123;photo_width}</li>
					<li>&#123;photo_height}</li>

				</ul>

			</td>
			<td class="g_o">

				<ul>

					<li>&#123;category_id}</li>
					<li>&#123;category_name}</li>
					<li>&#123;category_url_title}</li>
					<li>&#123;category_description}</li>
					<li>&#123;category_image}</li>
					<li>&#123;group_id}</li>
					<li>&#123;parent_id}</li>

				</ul>

				<p><strong>Custom Category Fields</strong> are also available using each field's short_name.</p>

			</td>

		</tr>
	</table>

</article>

<?php include('../footer.php'); ?>
