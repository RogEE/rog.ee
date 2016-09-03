<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('category_sorted_entries_lite'); ?>">Category Sorted Entries Lite</a></p>
</nav>

<article class="g_12">

	<h1>Category Sorted Entries Lite</h1>

	<p>Like the built-in EE Category Archive, but way mo' better (i.e. with additional variables and parameters for added control).</p>

	<p><strong>(The newer, 2.0 version of <a href="<?php echoUrl('category_sorted_entries'); ?>">Category Sorted Entries</a> is available as a free download. It features even more parameters, more variables &mdash; including Custom Channel Fields, much better control over the listing output, and generally faster, cleaner code. This original 1.0 version is no longer in development and remains here for posterity as a much less full-featured alternative.)</strong></p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Category-Sorted-Entries-Lite">code @ GitHub</a></li>
		<li><a href="http://devot-ee.com/add-ons/category-sorted-entries-lite/">devot:ee</a></li>
	</ul></p>

	<p>Once upon a time, I wanted to select all my entries with a particular category from Category Group 1, but I wanted to display them in a nested list that included only categories from Category Group 2. I also needed to display the entry_id alongside the title of the entry. The standard Category Archive Tag was close, but didn't quite cut it; So, I wrote this plugin...</p>

	<h3>Examples: General Use</h3>

	<p><pre>
<code>&#123;exp:category_sorted_entries channel="test" style="nested" show_empty="no" group_id="2" category="not 2|3"}

&#123;categories}
&lt;h3>&#123;category_name} (&#123;category_id})&lt;/h3>
&#123;/categories}

&#123;entry_titles}
&lt;p>&#123;title} (&#123;entry_id})&lt;/p>
&#123;/entry_titles}

&#123;/exp:category_sorted_entries}</code>
</pre></p>

	<p><pre>
<code>&#123;exp:category_sorted_entries channel="test" style="linear" show_empty="no" group_id="not 2" entry_id="1|2|3|4|5"}

&#123;categories}
&lt;h3>&#123;category_name}&lt;/h3>
&#123;/categories}

&#123;entry_titles}
&lt;p>&#123;title}&lt;/p>
&#123;/entry_titles}

&#123;/exp:category_sorted_entries}</code>
</pre></p>

	<h3>Parameters</h3>
	<p><ul>
		<li>All the <a href="http://expressionengine.com/user_guide/modules/channel/category_archive.html#parameters">parameters</a> of the standard <a href="http://expressionengine.com/user_guide/modules/channel/category_archive.html">Category Archive Tag</a> are available.</li>
		<li><b>group_id</b> - The category group(s) by which entries will be sorted/displayed.</li>
		<li><b>entry_id</b> - Entry IDs by which the results will be filtered. <i>(Only entries matching this parameter will be displayed.)</i></li>
		<li><b>category</b> - Category IDs by which the results will be filtered. <i>(Only entries assigned to these categories will be displayed.)</i></li>
	</ul></p>

	<p>Note: The <b>group_id</b>, <b>entry_id</b>, and <b>category</b> parameters can accept multiple IDs, pipe-separated, and optionally can include a <b>not</b> trigger. (e.g. <b>"1"</b>, <b>"2|3|5"</b>, <b>"not 2"</b>, and <b>"not 3|4|6"</b> are all valid.)
	</p>

	<h3>Variables</h3>
	<p>All the <a href="http://expressionengine.com/user_guide/modules/channel/category_archive.html#variable_pairs">variables</a> of the standard <a href="http://expressionengine.com/user_guide/modules/channel/category_archive.html">Category Archive Tag</a> are available.</p>
	<p>Additionally, in the <b><code>{entry_titles}</code></b> variable pair, the following additional variables can be used:
	<ul>
		<li><code>{entry_id}</code></li>
		<li><code>{url_title}</code></li>
	</ul>
	</p>

</article>

<?php include('../footer.php'); ?>
