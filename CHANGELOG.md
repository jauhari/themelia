# Change Log

All notable changes to Themelia will be documented in this file.
This changelog adheres to [Semantic Versioning](http://semver.org/). Version format will look like `3.2.1` where `3` is the major release, `2` is the minor release, and `1` is the patch release.

## [1.0.6] - 2016-09-15

### Fixed

* Fix Windows Phone scale issue in unsemantic.css
* Fix the issue with media queries and browser zoom using the exact same values for both min-width and max-width in unsemantic.css
* Fix main nav dropdowns for Stacked-Centered header layout (class .header-s-c)

## [1.0.5] - 2016-09-15

### Fixed

* Escaping `get_permalink()` in content/*.php files
* Fix style for showing stacked and centered nav menu
* CSS tweak for forms (input, textarea width)
* CSS tweak for Print styles (@media print)

### Changed

* Removed custom pagination. The function `themelia_paging_nav(`) is now a wrapper for the core `the_posts_pagination()` function.
* Navigation to next/previous post is wrapped in `themelia_post_nav(`) function.

### Updated

* Kirki library updated to version 2.3.6
* Removed custom panels from Customizer
* Added theme support for the core Custom Background function

## [1.0.4] - 2016-08-29

### Fixed

* Function prefix in customize.php
* Code cleanup

### Changed

* Added filters for custom attributes / container id and class - in themelia.php
* Containers attributes through `hybrid_attr()` function - in header.php
* Changed CSS media query - mobile menu appears at 1024px

### Removed

* Unused functions removed from customize.php

## [1.0.3] - 2016-08-04

### Fixed

* Function prefix in themelia.php
* Code cleanup

## [1.0.2] - 2016-06-28

### Fixed

* Fixed typos in recent changes in the description text in README and style.css
* Escaping `home_url()` in searchform.php
* Escaping urls and code cleanup in author-header.php and author-box.php
* General code cleanup and other minor improvements

### Changed

* Added separator in the Author By Line - content/*.php
* File version for enqueued scripts
* Changed prefix for some functions and filters to suit theme name
* Changed $handle parameter in the enqueue style.css to suit the theme name
* Changed $handle parameter in `wp_add_inline_style()`, in accordance with the style.css enqueue
* Code cleanup and formatting for better readability
* Removed support for Cleaner Gallery

## [1.0.1] - 2016-06-14

### Changed

* Description text in the README and style.css

## [1.0.0] - 2016-06-14

### New

* Initial release