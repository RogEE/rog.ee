<?php include('../header.php'); ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('scraper'); ?>">Scraper</a></p>
</nav>

<article class="g_12">

	<h1>Scraper 1.1.1</h1>

	<p>Scraper allows you to easily pull in HTML content from remote pages, selecting elements by CSS selector, and output that content via EE template variables.</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Scraper">code @ GitHub</a></li>
<!--		<li><a href="http://devot-ee.com/add-ons/support/scraper/viewforum/2160">support @ devot:ee forums</a></li>-->
		<li><a href="http://devot-ee.com/add-ons/scraper/">devot:ee</a></li>
	</ul></p>

	<h3>Examples: General Use</h3>

	<p>Simply specify a URL and root selector; Scraper will import the remote content and make the adjacent DOM available in EE variable form.</p>

	<p><pre>
<code>
&#123;exp:scraper url="http://some-external-site.com" selector="div.foo"&#125;

    &#123;tag&#125;
    &#123;outertext&#125;
    &#123;innertext&#125;
    &#123;plaintext&#125;
    &#123;count&#125; / &#123;total_results&#125;

    &#123;if children_total_results&#125;
      &#123;children&#125;
        &#123;tag&#125;, etc.
        &#123;attr:id&#125;, &#123;attr:class&#125;, etc.
        &#123;children_count&#125; / &#123;children_total_results&#125;
      &#123;/children&#125;
    &#123;/if&#125;

    &#123;parent&#125; ... &#123;/parent&#125;
    &#123;first_child&#125; ... &#123;/first_child&#125;
    &#123;last_child&#125; ... &#123;/last_child&#125;
    &#123;next_sibling&#125; ... &#123;/next_sibling&#125;
    &#123;prev_sibling&#125; ... &#123;/prev_sibling&#125;

    &#123;find selector=".bar"&#125; ... &#123;/find&#125;

&#123;/exp:scraper&#125;
</code>
</pre></p>

	<p>Using a variable prefix, it might look something like this:</p>

	<p><pre>
<code>
&#123;exp:scraper url="http://some-external-site.com" selector="div.foo" prefix="scraper:"&#125;

    &#123;scrapr:plaintext&#125;

    &#123;if scraper:children_total_results&#125;
      &#123;scraper:children&#125;
        &#123;scraper:attr:class&#125;
      &#123;/scraper:children&#125;
    &#123;/if&#125;

    &#123;scraper:find selector=".bar"&#125; ... &#123;/find&#125;

&#123;/exp:scraper&#125;
</code>
</pre></p>

	<h3>Parameters</h3>

	<ul>
		<li><b>url</b> &mdash; URL of the remote HTML document</i></li>
		<li><b>selector</b> &mdash; Selector of the desired root element <i>(You can use any valid CSS selector; If you want to use an attribute selector that contains spaces, you need to quote-wrap the attribute string.)</i></li>
		<li><b>index</b> &mdash; If multiple elements match the selector, you can filter all but one. <i>(Index 0 represents the first item. Index -1 returns the last item.)</i></li>
		<li><b>prefix</b> &mdash; Add a variable prefix to prevent collisions with other add-ons/tags</li>
		<li><b>backspace</b> &mdash; Removes characters from the last iteration of the loop</li>
		<li><b>fetch_method</b> &mdash; Set to <strong>curl</strong> to retrieve the source document with cURL. <i>(Useful if the remove page is GZIP'd)</i></li>
		<li><b>source_encoding</b> &mdash; Allows you to specify the charset of the remote page <i>[if it isn't already UTF-8]</i>.</li>
	</ul>

	</p>

	<h3>Variables</h3>

	<table>
		<tr>
			<th>Element variables</th>
			<th>Related Element variable pairs</th>
			<th class="g_o">Find variable pair</th>
		</tr>

		<tr>
			<td>

				<ul>
					<li>&#123;tag}</li>
					<li>&#123;outertext}</li>
					<li>&#123;innertext}</li>
					<li>&#123;plaintext}</li>
					<li>&#123;attr:<i>[attribute]</i>}</li>
				</ul>

				<p>Additionally, count variables are available for the root element(s):

				<ul>
					<li>&#123;count}</li>
					<li>&#123;total_results}</li>
					<li>&#123;children_total_results}</li>
				</ul>

			</td>
			<td>

				<ul>
					<li>&#123;children}</li>
					<li>&#123;parent}</li>
					<li>&#123;first_child}</li>
					<li>&#123;last_child}</li>
					<li>&#123;next_sibling}</li>
					<li>&#123;prev_sibling}</li>
				</ul>

				<p>The Element variables (except count variables) are also available for each of the Related Element pairs.</p>

				<p>The <strong>children</strong> pair makes available its own count variable:</p>

				<ul>
					<li>&#123;children_count}</li>
				</ul>

			</td>
			<td class="g_o">

				<ul>

					<li>&#123;find selector=""}</li>

				</ul>

				<p>The <strong>Find</strong> pair takes a <strong>selector</strong> and [optional] <strong>index</strong> parameter and searches for matching elements inside of the root element.</p>

				<p>The Element variables (except count variables) are available for each of the found elements. Each <strong>Find</strong> variable pair also makes available its own count variables:</p>

				<ul>

					<li>&#123;found_count}</li>
					<li>&#123;found_total_results}</li>

				</ul>

			</td>

		</tr>
	</table>

	<h3>Dealing with Foreign Character Encodings</h3>

	<p>If you find funny-looking characters where international characters, diacritics, accent marks, or symbols ought to be, you might need to specify the encoding of the source document. (It'll be converted to UTF-8, which is required for the DOM parser to work properly.) You must use cURL as the fetching method in order to enable the characterset conversion feature:</p>

	<p><pre>
<code>
&#123;exp:scraper url="http://some-external-site.com" selector="div.foo"
   fetch_method="curl" source_encoding="Windows-1250"&#125;
...
&#123;/exp:scraper&#125;
</code>
</pre></p>

</article>

<?php include('../footer.php'); ?>
