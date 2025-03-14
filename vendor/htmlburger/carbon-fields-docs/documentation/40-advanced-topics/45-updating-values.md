# Programatically updating field values

Carbon Fields allow you to update field values programatically through the set of `carbon_set_{container_type}( [$id,] $field_name, $value )` functions.

__Note:__ when referring to fields you use a ___Field Name Pattern___ - more information can be found in the Field Name Patterns documentation page.

##### Example 1

Setting the value for the `crb_text` post_meta field for the post with id of 10:

```php
// field definition
Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
        Field::make( 'text', 'crb_text', 'Text' ),
    ) );

// updating
carbon_set_post_meta( 10, 'crb_text', 'Hello World!' );
```

##### Example 2

Setting the value for the `text` post_meta field for the post with id of 10 when the field is inside the `crb_complex` complex field:

```php
// field definition
Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_complex', 'Complex' )
            ->add_fields( array(
                Field::make( 'text', 'text', 'Text' ),
            ) ),
    ) );

// updating
carbon_set_post_meta( 10, 'crb_complex[0]/text', 'Hello World!' );
```

If we want to update the second `crb_complex` entry we can do the following (notice how the `[index]` part changes):

```php
carbon_set_post_meta( 10, 'crb_complex[1]/text', 'Hello World!' );
```

##### Example 3

Setting the value for the `crb_complex` post_meta field for the post with id of 10 so it has 2 entries:

```php
// field definition
Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_complex', 'Complex' )
            ->add_fields( array(
                Field::make( 'text', 'text', 'Text' ),
            ) ),
    ) );

// updating
carbon_set_post_meta( 10, 'crb_complex', array(
    array(
        // _type => 'your_group_name_here', // optional: use only if you've specified group names on field definition
        'text' => 'Foo',
    ),
    array(
        // _type => 'your_group_name_here',
        'text' => 'Bar',
    ),
) );
```
