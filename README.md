# TODO

* support pläne anders texten
* bilder noch mal in hell





* * *

INSTALL
=======

1. clone (guess what?)
2. run `composer install`
3. local PHP server should be: `www-fortrabbit-com` (so that we can all work together)
4. make sure docroot is `public/`

Update on pull
--------------

1. run `composer install`

Integrate latest product definitions
------------------------------------

1. run `composer update frbit/product-definition`
2. only production: Visit `http://www.fortrabbit.com/pricing?flush-cache=please` and `http://www.fortrabbit.com/support?flush-cache=please`

Run and develop locally
=======================

template and contents can be edited locally. to change styles and global scripts. you need the **fortrabbit-framework** (via bitbucket) on the same level as the root folder of this project

Deploy
======

* **Content**: `git push` > to deploy to fortrabbit
* **JS**: run `gulp deploy` > to push static assets to S3 (aws.json required)
