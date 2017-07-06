<?php /* Template Name: Style Guide */ ?>
<?php get_header(); ?>

<?php do_action( 'themerbasic_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<div class="content-container">

		<div>

			<h1 id="h1-heading">h1 heading</h1>
			<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
				vestibulum.</p>

			<h2 id="h2-heading">h2 heading</h2>
			<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
				vestibulum.</p>

			<h3 id="h3-heading">h3 heading</h3>
			<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
				vestibulum.</p>

			<h4 id="h4-heading">h4 heading</h4>
			<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
				vestibulum.</p>

			<h5 id="h5-heading">h5 heading</h5>
			<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
				vestibulum.</p>

			<h6 id="h6-heading">h6 heading</h6>
			<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
				vestibulum.</p>

		</div>

		<hr>

		<h2>Paragraphs</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet dignissim sapien, ut vehicula dui
			tempus
			ullamcorper. Donec porta sed massa sit amet mollis. Aenean felis urna, malesuada nec magna et, fringilla
			placerat nisl. Duis et lorem et lectus pharetra aliquet. Nulla ornare arcu eget ligula dignissim egestas.
			Cras
			congue, tortor non volutpat pretium, lectus nulla tincidunt enim, sit amet varius velit felis a felis.
			Praesent
			sit amet diam sed urna eleifend porta non eget felis.</p>

		<p>Vivamus aliquet tortor augue, et luctus mi tempus vel. In accumsan sagittis nunc eu aliquet. Quisque cursus
			nisl
			vitae suscipit malesuada. Aliquam erat volutpat. Aliquam erat volutpat. Vivamus ac arcu ut urna consequat
			scelerisque. Aliquam turpis nunc, malesuada at facilisis id, commodo et lacus. Ut in odio eget neque
			efficitur
			vulputate at a sem. Maecenas varius, lacus vel feugiat luctus, nibh risus pulvinar lacus, nec pharetra dolor
			ipsum at arcu. Aenean convallis metus quis lacus mattis, nec ullamcorper justo posuere. Nam non gravida sem.
			Pellentesque tristique dapibus nisl quis consectetur. Aenean auctor cursus neque, ac luctus mi tempor
			id.</p>

		<hr>
		<div>

			<h2>Lists</h2>

			<ul>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Consectetur adipiscing elit</li>
				<li>Integer molestie lorem at massa</li>
				<li>Facilisis in pretium nisl aliquet</li>
				<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
				</li>
				<li>Faucibus porta lacus fringilla vel</li>
				<li>Aenean sit amet erat nunc</li>
				<li>Eget porttitor lorem</li>
			</ul>

			<ol>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Consectetur adipiscing elit</li>
				<li>Integer molestie lorem at massa</li>
				<li>Facilisis in pretium nisl aliquet</li>
				<li>Nulla volutpat aliquam velit</li>
				<li>Faucibus porta lacus fringilla vel</li>
				<li>Aenean sit amet erat nunc</li>
				<li>Eget porttitor lorem</li>
			</ol>

		</div>

		<dl>
			<dt>Description lists</dt>
			<dd>A description list is perfect for defining terms.</dd>
			<dt>Euismod</dt>
			<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
			<dd>Donec id elit non mi porta gravida at eget metus.</dd>
			<dt>Malesuada porta</dt>
			<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
		</dl>

		<hr>

		<h2>Tables</h2>

		<h5>Basic Table styling</h5>
		<table>
			<caption>This is an example table, and this is its caption to describe the contents.</caption>
			<thead>
			<tr>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			</tbody>
		</table>

		<h5>Add table-wide class to make table full width</h5>
		<table class="table-wide">
			<thead>
			<tr>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			</tbody>
		</table>

		<h5>Add table-border class to add borders</h5>
		<table class="table-border">
			<thead>
			<tr>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			</tbody>
		</table>

		<h5>Add table-stripe class to color alt rows</h5>
		<table class="table-stripe">
			<thead>
			<tr>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
				<th>Table heading</th>
			</tr>
			</thead>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
			<tr>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
				<td>Table cell</td>
			</tr>
		</table>

		<hr>

		<h2>Address</h2>
		<address>
			<strong>Twitter, Inc.</strong><br>
			1355 Market St, Suite 900<br>
			San Francisco, CA 94103<br>
			<abbr title="Phone">P:</abbr> (123) 456-7890
		</address>

		<h2>Blockquote</h2>

<pre class="well"><code>
&lt;blockquote&gt;
	&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
	&lt;footer&gt;Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;

&lt;blockquote class="blockquote"&gt;
	&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
	&lt;footer&gt;Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;
</code></pre>

		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		</blockquote>
		<blockquote class="blockquote">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		</blockquote>

		<hr>

		<h2>Form</h2>
		<form class="bd-example">
			<fieldset>
				<legend>Example legend</legend>

				<p>
					<label for="input">Example input</label>
					<input type="text" id="input" placeholder="Example input">
					<small>helper text</small>
				</p>

				<p>
					<label for="select">Example select</label>
					<select id="select">
						<option value="">Choose...</option>
						<optgroup label="Option group 1">
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
						</optgroup>
						<optgroup label="Option group 2">
							<option value="">Option 4</option>
							<option value="">Option 5</option>
							<option value="">Option 6</option>
						</optgroup>
					</select>
				</p>

				<p>
					<label>
						<input type="checkbox" value="">
						Check this checkbox
					</label>
				</p>

				<p>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
						Option one is this and that
					</label>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Option two is something else that's also super long to demonstrate the wrapping of these fancy
						form controls.
					</label>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
						Option three is disabled
					</label>
				</p>

				<p>
				<div>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
						Option one is this and that
					</label>
				</div>
				<div>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Option two
					</label>
				</div>
				<div>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
						Option three is disabled
					</label>
				</div>
				</p>

				<p>
					<label for="textarea">Example textarea</label>
					<textarea id="textarea" rows="3"></textarea>
				</p>

				<p>
					<label for="time">Example temporal</label>
					<input type="datetime-local" id="time">
				</p>

				<p>
					<label for="output">Example output</label>
					<output name="result" id="output">100</output>
				</p>

				<div class="form-group">
					<label for="output">Example inline</label>
					<div class="form-inline">
						<label for="input-inline-1">First Name:</label>
						<input type="text" id="input-inline-1" placeholder="Example input">
						<label for="input-inline-2">Last Name</label>
						<input type="text" id="input-inline-2" placeholder="Example input">
						<input type="text" id="input-inline-3" placeholder="Example input">
					</div>
				</div>

				<h2>Buttons</h2>

				<p>
					<button type="submit">Button submit</button>
					<input type="submit" value="Input submit button">
					<input type="button" value="Input button">
					<button type="submit" disabled="">Disabled</button>
				</p>

				<h5>Colors</h5>
				<p>

					<button type="button">Default</button>
					<button type="button" class="button-blue">button-blue</button>
					<button type="button" class="button-red">button-red</button>
					<button type="button" class="button-green">button-green</button>
					<button type="button" class="button-orange">button-orange</button>
					<button type="button" class="button-yellow">button-yellow</button>
					<button type="button" class="button-teal">button-teal</button>
					<button type="button" class="button-pink">button-pink</button>
					<button type="button" class="button-purple">button-purple</button>
					<button type="button" class="button-gray">button-gray</button>
					<button type="button" class="button-white">button-white</button>
					<button type="button" class="button-black">button-black</button>
				</p>

				<h5>Outline</h5>
				<p>

					<button type="button" class="button-outline">button-outline</button>
					<button type="button" class="button-blue-outline">button-blue-outline</button>
					<button type="button" class="button-red-outline">button-red-outline</button>
					<button type="button" class="button-green-outline">button-green-outline</button>
					<button type="button" class="button-orange-outline">button-orange-outline</button>
					<button type="button" class="button-yellow-outline">button-yellow-outline</button>
					<button type="button" class="button-teal-outline">button-teal-outline</button>
					<button type="button" class="button-pink-outline">button-pink-outline</button>
					<button type="button" class="button-purple-outline">button-purple-outline</button>
				</p>

				<h5>Shapes</h5>
				<p>

					<button type="button">Default</button>
					<button type="button" class="button-round">button-round</button>
					<button type="button" class="button-rectangle">button-rectangle</button>
					<button type="button" class="button-wide">button-wide</button>
					<button type="button" class="button-extrawide">button-extrawide</button>
					<button type="button" class="button-block">button-block</button>
				</p>

				<h5>Sizes</h5>
				<p>

					<button type="button" class="button-small">button-small</button>
					<button type="button">Default</button>
					<button type="button" class="button-large">button-large</button>
				</p>
			</fieldset>
		</form>

		<hr>
		<h2>Pagination</h2>
<pre class="well"><code>
the_posts_pagination( array(
	'prev_text' =&gt; '&lt;i class="fa fa-arrow-left"&gt;&lt;/i&gt; Previous',
	'next_text' =&gt; 'Next &lt;i class="fa fa-arrow-right"&gt;&lt;/i&gt;',
) );
</code></pre>
		<nav class="navigation pagination" role="navigation">
			<h2 class="screen-reader-text">Posts navigation</h2>
			<div class="nav-links"><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i> Previous</a>
				<a class="page-numbers" href="#">1</a>
				<span class="page-numbers dots">…</span>
				<a class="page-numbers" href="#">11</a>
				<span class="page-numbers current">12</span>
				<a class="page-numbers" href="#">13</a>
				<span class="page-numbers dots">…</span>
				<a class="page-numbers" href="#">22</a>
				<a class="next page-numbers" href="#">Next <i class="fa fa-arrow-right"></i></a></div>
		</nav>

		<hr>

		<h2>Alignment</h2>

		<p>
			Add content-container to set a max width.
			Should be used when beaver builder is not used.
		</p>
		<p class="text-left">
			Add text-left class for Left aligned text.
		</p>
		<p class="text-center">
			Add text-center class for Center aligned text.
		</p>
		<p class="text-right">
			Add text-right class for Right aligned text.
		</p>
		<p class="text-justify">
			Add text-justify class for Justified text.
		</p>

		<h2>Text Case</h2>

		<p>Add text-lowercase to <span class="text-lowercase">display text in all lowercase</span></p>
		<p>Add text-uppercase to <span class="text-uppercase">display text in all uppercase</span></p>
		<p>Add text-capitalize to <span class="text-capitalize">capitalize the first letter of each word</span></p>

		<h2>Text Colors</h2>

		<span class="text-black">text-black</span>
		<span class="text-white">text-white</span>
		<span class="text-gray">text-gray</span>
		<span class="text-blue">text-blue</span>
		<span class="text-red">text-red</span>
		<span class="text-orange">text-orange</span>
		<span class="text-yellow">text-yellow</span>
		<span class="text-green">text-green</span>
		<span class="text-teal">text-teal</span>
		<span class="text-pink">text-pink</span>
		<span class="text-purple">text-purple</span>

		<div class="alert alert-success">
			alert alert-success
		</div>
		<div class="alert alert-danger">
			alert alert-danger
		</div>
		<div class="alert alert-info">
			alert alert-info
		</div>
		<div class="alert alert-warning">
			alert alert-warning
		</div>



	</div>




	<?php the_content() ?>

<?php endwhile; ?>
<?php do_action( 'themerbasic_after_content' ); ?>

<?php get_footer(); ?>
