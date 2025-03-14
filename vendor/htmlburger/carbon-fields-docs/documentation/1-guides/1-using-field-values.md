# Using field values

This guide will show how to get and output field values in your theme. The use-case we will be discussing is for a copyright rich text field that we'll display in the theme's footer.

##### NB: Field values can only be retrieved after the `carbon_fields_fields_registered` action has fired.
The `carbon_fields_fields_registered` action is called in the `init` action with a priority of 0.

---

First, we'll need to define our theme options container and the rich text field in it by adding the following snippet at the top of your `functions.php` file:

```php
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
        ) );
}
```

If you open your administration panel you will see the newly added "Theme Options" section:

![Theme Options admin page](https://raw.githubusercontent.com/htmlburger/carbon-fields-docs/master/assets/using-field-values-1.png)

Then, we'll have to edit the theme's `footer.php` and output the field value:

```php
<?php
// get the field value
$copyright = carbon_get_theme_option( 'crb_footer_copyright' );

// output the field value
echo $copyright;
?>
```

##### Example 2: Post Meta

Here we'll create a field labeled "Venue" where authors can enter a place relevant to the post:

```php
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
    Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
        ->where( 'post_type', '=', 'post' )
        ->add_fields( array(
            Field::make( 'text', 'crb_venue', 'Venue' ),
        ) );
}
```

If you edit a post you will see the newly added "Post Options" meta box:

![Post Options meta box](https://raw.githubusercontent.com/htmlburger/carbon-fields-docs/master/assets/using-field-values-2.png)

Then, we'll edit your Loop code like this (most likely found in `index.php`):

```php
<?php while ( have_posts() ) : the_post(); ?>
	<p>Venue: <?php echo carbon_get_the_post_meta( 'crb_venue' ); ?></p>

	<!-- your usual WordPress Loop code here -->
<?php endwhile; ?>
```
