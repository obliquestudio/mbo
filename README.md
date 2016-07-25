Wordpress Starter Theme

#Todo
- [ ] Add "browser not supported" markup & warning
- [ ] Exclude analytics locally
- [ ] JS hint on JS files only
- [ ] Gulp build doesn't build modernizer
- [ ] SVG build options not working
- [ ] Add mixins SCSS file
- [ ] Rel profile
- [ ] Mirror favicon setup
- [ ] Add wp gitignore stuff
- [ ] Add comment headers
- [ ] Local modernizer into head
- [ ] Add bm excerpt filter
- [ ] IE conditional
- [ ] Check min files included
- [ ] Pull in common post types
- [ ] Add flexslider default
- [ ] Prevent direct access to theme php files using:

```
#!php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}

```



#Refactor checklist
- inc
    - [ ] activation.php
    - [ ] cleanup.php
    - [ ] comments.php
    - [ ] config.php
    - [x] cpt-portfolio.php
    - [x] custom.php
    - [ ] filter-columns.php
    - [x] nav-bootstrap-walker.php
    - [x] nav.php
    - [x] scripts-styles.php
    - [x] shortcodes.php
    - [x] sidebar-widgets.php
    - [ ] template-tags.php
- partials
    - [x] content-none.php
    - [x] content-page.php
    - [x] content-search.php
    - [ ] content.php
- templates
    - [x] full-width.php
    - [x] sitemap.php
- [x] 404.php
- [x] archive.php
- [ ] comments.php
- [x] footer.php
- [ ] functions.php
- [x] header.php
- [x] index.php
- [x] page.php
- [x] screenshot.png
- [x] search.php
- [x] sidebar.php
- [x] single.php
- [x] style.css