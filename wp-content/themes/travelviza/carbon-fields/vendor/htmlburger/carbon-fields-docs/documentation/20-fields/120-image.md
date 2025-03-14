# Image

Renders an image upload button with a preview thumbnail of the uploaded image. The built-in WordPress file handling interface is used.

Supported image formats are: `jpg`, `jpeg`, `gif`, `png` and `bmp`.

This field type stores the **ID** of the selected image.

### Config methods

`set_type( $mime_type )` *(defaults to `image`)*

Set the allowed files type. Short mime types are also supported (`audio`, `video`, `image`).

`set_value_type( $value_type )`

Set the type of the stored value. *(defaults to `id`)*

You can also set the type to `url` to store the URL of the image instead of it's ID.

```php
Field::make( 'image', 'crb_employee_photo', 'Photo' )
    ->set_value_type( 'url' )
```
