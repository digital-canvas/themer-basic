<?php get_header(); ?>

<?php do_action( 'themerbasic_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <div style="max-width: 1100px; width:100%; margin:0 auto; margin: 25px;">

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
        <div>

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

        <address>
            <strong>Twitter, Inc.</strong><br>
            1355 Market St, Suite 900<br>
            San Francisco, CA 94103<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
        </address>

        <blockquote class="blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>

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

                <p>
                    <button type="submit">Button submit</button>
                    <input type="submit" value="Input submit button">
                    <input type="button" value="Input button">
                </p>

                <p>
                    <button type="submit" disabled="">Button submit</button>
                    <input type="submit" value="Input submit button" disabled="">
                    <input type="button" value="Input button" disabled="">
                </p>
            </fieldset>
        </form>

    </div>

	<?php the_content() ?>

<?php endwhile; ?>
<?php do_action( 'themerbasic_after_content' ); ?>

<?php get_footer(); ?>
