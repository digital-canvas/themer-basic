# Themer Basic
Minimal, fast, blank WordPress theme for use with Beaver Builder and Beaver Themer

This theme expects a page and layout builder plugin such as Beaver Builder with Beaver Themer to be used.

Without these plugins there wont be any header or footer and layouts will be extremely limited.
  
Other themes that are compatible with Beaver Themer such the Beaver Builder theme or GeneratePress contain a lot of settings and styles for things like headers and footers and page layouts that wind up being unused when those sections or layouts are overwritten with Beaver Themer.

This theme contains only the minimum needed for Beaver Themer to function.

Even without a page builder plugin this theme can be used as a very lightweight starting point to build a custom theme but you will need to create your own header and footer and templates for the various layouts that WordPress needs. 

## Creating a child theme

To prevent theme updates from overwriting your customizations it is recommended to use a child theme.

Copy the `themer-basic-child` folder from the `themer-basic` theme into the WordPress themes directory.   
You may rename the child theme if desired.

## Customizing Styles

There are a few options for customizing the styles of your child theme.

### Using child theme styles in addition to the parent theme styles.

This is the easiest and default way to customize the styles.

Make sure the `$stylesheet` variable in your child theme `functions.php` is set to `parent-and-child`. 

Add any styles you want to the child theme stylesheet.  
Both the parent and child theme stylesheets will be included.

This is the easiest method but does result in an extra http request and possibly unused or always overwritten styles. 

### Using only the Parent Stylesheet

If you don't need any stylesheet overrides you can set the `$stylesheet` variable in your child theme `functions.php` to `parent-only`.  

This will make it so that only the parent stylesheet is included.  
This prevents an extra http request to an empty stylesheet.

### Using only the Child Stylesheet

Setting the `$stylesheet` variable in your child theme `functions.php` to `child-only` will result in only the stylesheet from the child theme being included.

This is recommended if you don't want the parent styles or if you want to customize them using sass (see the `Using SASS to compile child theme styles` section below for instructions how to do this).

Customizing styles in this way is better for perfomance as there wont be an extra http request and any unused styles can be removed.

### Removing both stylesheets

If you don't want either the parent or child theme stylesheets included you can set the  `$stylesheet` variable in your child theme `functions.php` to `none`.

Without stylesheets everything will be rendered using browser defaults.

## Using SASS to compile child theme styles

It is recommended to use SASS to compile the child theme stylesheet and set the `$stylesheet` variable in your child theme `functions.php` to `child-only`.

This allows better control over what styles get included.

### Including the full parent styles with variable overrides

Uncomment the `@import "../../themer-basic/sass/style";` line in your child theme `style.scss` file.  
Modules like helpers, buttons, forms, or tables can be removed if they are not used to make the size of the stylesheet smaller. 

Make any variable changes to the `_variables.scss` file in the child theme sass directory.

Compile the child theme styles.

### Including only desired modules from the parent theme

Uncomment the `@import "parent";` line in your child theme `style.scss` file.

Edit the `_parent.scss` file in your child theme and comment out any modules you do not need.

Make any variable changes to the `_variables.scss` file in the child theme sass directory.

Compile the child theme styles.

## Compiling the SASS files

You must have the sass cli installed.  
See http://sass-lang.com/install for instructions how to install sass.

From your child theme directory run the following command to compile the stylesheet

```bash
sass --update --style=compressed "sass/style.scss":"style.css"
```

To run a file watcher to automatically compile the stylesheet every time a sass file changes run the following command.

```bash
sass --watch --style=compressed "sass/style.scss":"style.css"
```

On MAC or Linux you can run `make css` or `make watch` as a shortcut for these commands to save some typing.

## Using Beaver Themer to customize the site layout

Because Themer Basic does not include any templates you will need to create a Beaver Themer Theme Layout of each type for it to display correctly.

### Using Beaver Themer to create a header or footer

Create a Theme Layout and select Header or Footer for the Layout.

Use the Page Builder to customize it.

### Using Beaver Themer to create page layouts



## Creating a Header or Footer for your child theme

You may want to create your own header and footer rather than using Beaver Themer to build one.

This can be done by implementing the `themerbasic_header` and /or the `themerbasic_footer` actions.

Your actions should print out the content for your custom header or footer.

### Creating a custom header

Add the following to your child theme `functions.php`

```
add_action( 'themerbasic_header', 'themerbasic_child_header' );

function themerbasic_child_header() {
	// print out any html for your header here
}
```

### Creating a custom footer

Add the following to your child theme `functions.php`

```
add_action( 'themerbasic_footer', 'themerbasic_child_footer' );

function themerbasic_child_footer() {
	// print out any html for your footer here
}
```

## View a Style Guild for style examples.

Create a page on the site and set the template to `Style Guide`.

View the page on the site.
