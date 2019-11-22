# Clavos BETA

![logo](/Clavos.png)

A starter plugin for building custom functionality for WP sites.

### Whats included
* Custom_Post_Type helper class
* (ACF for now)
* More coming in future

### Installation

Change the plugin header to your needs
```/**
 * Plugin Name:     {{Your Plugin Name}}
 * Description:     {{Your Plugin Desc}}
 * Author:          {{You}
 * Text Domain:     {{Your Plugin Domain}}
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         {{Your Plugin Domain}}
 */
 ```
Upload the plugin folder to your plugin directory, and install via the WP admin.

### Creating a new CPT

```
$news = new Custom_Post_Type('News');
```

### Adding Taxonomies
```
$news->add_taxonomy('News Types');
```
### Adding ACF fields
```

/* You get this $acf_args array by exporting a field group via ACF/tools  */

$acf_args = array(
	'key' => 'group_1',
	'title' => 'My Group',
	'fields' => array (
		array (
			'key' => 'field_1',
			'label' => 'Sub Title',
			'name' => 'sub_title',
			'type' => 'text',
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'news',
			),
		),
	),
);
$news->add_local_field_groups($acf_args);

```

# mapsearch_plugin
