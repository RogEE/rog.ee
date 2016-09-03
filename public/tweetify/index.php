<?php include('../header.php') ?>

<nav>
	<p><a href="<?php echoUrl(''); ?>">RogEE</a> &raquo; <a href="<?php echoUrl('tweetify'); ?>">Tweetify</a></p>
</nav>

<article class="g_12">

	<h1>Tweetify 3.3</h1>

	<p>Tweetify formats URLs, @shoutouts, and #hashtags as HTML links, a la Twitter. I originally built it to work with <a href="http://expressionengine.com/downloads/details/twitter_timeline/">Twitter Timeline</a>, but it also functions nicely if you need Twitter-esque formatting of channel data, or if you want a more liberal URL-matching rule than EE2 provides out of the box.</p>

	<p><ul>
		<li><a href="https://github.com/RogEE/Tweetify">code @ GitHub</a></li>
<!--		<li><a href="http://devot-ee.com/add-ons/support/tweetify/viewforum/605/">support @ devot:ee forums</a></li>-->
<!--		<li><a href="/test/tweetify">test cases</a> (<a href="http://twitter.com/tweetify_test">on Twitter</a>)</li>-->
		<li><a href="http://devot-ee.com/add-ons/tweetify/">devot:ee</a></li>
	</ul></p>

	<h3>Examples: General Use</h3>

	<p>Simply wrap your Tweet text in the &#123;exp:tweetify&#125; and &#123;/exp:tweetify&#125; tags to convert @names, #tags, and URLs into links.</p>

	<p><pre>
<code>&#123;exp:tweetify}
My text here.
&#123;/exp:tweetify}</code>
</pre></p>

	<p>You can use the parameters to add CSS class names to the formatted links (<a href="#classnames">see below</a>).</p>

	<h3>Examples: with <a href="http://expressionengine.com/downloads/details/twitter_timeline/">Twitter Timeline</a></h3>

	<p>Ideally, you should wrap your Twitter Timeline <em>inside</em> Tweetify tags.</p>

	<p><pre>
<code>&#123;exp:tweetify cache="no"}
&#123;exp:twitter_timeline type="user" user="michaelrog" password="****" limit="3"}
&lt;li&gt;&#123;text}&lt;/li&gt;
&#123;/exp:twitter_timeline}
&#123;/exp:tweetify}</code>
</pre></p>

	<p>If you must put Twitter Timeline outside Tweetify, you'll need to use <a href="http://expressionengine.com/docs/templates/plugins.html">parse="inward"</a> on the outer Twitter Timeline tag.</p>

	<p><pre>
<code>&#123;exp:twitter_timeline type="user" user="michaelrog" password="****" limit="3" parse="inward"}
&#123;exp:tweetify}
&lt;li&gt;&#123;text}&lt;/li&gt;
&#123;/exp:tweetify}
&#123;/exp:twitter_timeline}</code>
</pre></p>

	<h3>Examples: Single-Function Use</h3>

	<p><pre>
<code>&#123;exp:tweetify:at} michaelrog @michaelrog #michaelrog http://michaelrog.com &#123;/exp:tweetify:at}</code>
</pre></p>
<!--	<p><ul><li>-->
<!--			{exp:tweetify:at cache="no"}michaelrog @michaelrog #michaelrog http://michaelrog.com{/exp:tweetify:at}-->
<!--		</li></ul>-->
<!--	</p>-->

	<p><pre>
<code>&#123;exp:tweetify:hash} michaelrog @michaelrog #michaelrog http://michaelrog.com &#123;/exp:tweetify:hash}</code>
</pre></p>
<!--	<p><ul><li>-->
<!--			{exp:tweetify:hash cache="no"}michaelrog @michaelrog #michaelrog http://michaelrog.com{/exp:tweetify:hash}-->
<!--		</li></ul>-->
<!--	</p>-->

	<p><pre>
<code>&#123;exp:tweetify:url} michaelrog @michaelrog #michaelrog http://michaelrog.com &#123;/exp:tweetify:url}</code>
</pre></p>
<!--	<p><ul><li>-->
<!--			{exp:tweetify:url cache="no"}michaelrog @michaelrog #michaelrog http://michaelrog.com{/exp:tweetify:url}-->
<!--		</li></ul>-->
<!--	</p>-->

	<a name="classnames"></a><h3>Examples: Adding CSS Classes</h3>

	<p>You can use the <code>class</code>, <code>atclass</code>, <code>hashclass</code>, and <code>urlclass</code> parameters to supply class names to the formatted links.</p>

	<p><pre>
<code>&#123;exp:tweetify class="class" atclass="at" urlclass="url1 url2" hashclass="hash1 hash2"}</code>
</pre></p>

	<h3>Formatting channel data</h3>

	<p>Tweetify can be selected as a text formatting option for channel fields.</p>


</article>

<?php include('../footer.php') ?>
