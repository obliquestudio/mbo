Wordpress Starter Theme

#Todo
- [ ] Add "browser not supported" markup & warning
- [ ] Prevent direct access to theme php files using:

```
#!php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}

```