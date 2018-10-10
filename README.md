## Requirements

- Node 8.11.1 (use [nvm](https://github.com/creationix/nvm) to manage your Node versions!)
- [Yarn](https://yarnpkg.com) `npm i -g yarn`

## Setting up

1. Clone/download to your machine
2. Run `yarn` to install dependencies

## Tasks

| Task                        | Description                                                                                                  |
|:----------------------------|:-------------------------------------------------------------------------------------------------------------|
| `yarn start` or `yarn dev`  | Watch for changes to new files.                                                                              |
| `yarn test`                 | Lints your CSS and JS files.                                                                                 |

## 🚨 IMPORTANT! Using Yarn vs. NPM

**Please note:** We are using Yarn on this project. This means **you should not use npm commands when adding/removing dependencies**! Please refer to the [Yarn's documentation](https://yarnpkg.com/en/docs/migrating-from-npm#toc-cli-commands-comparison) to ensure you are running the correct `yarn` command to:

- Add new dependencies
- Remove dependencies
- Reinstall dependencies

Structure
--------------

* `_compiled` this is where Yarn places all of the compiled CSS and JS files that are used. These files are not edited directly.
* `app` is where `functions.php` lives. `functions.php` is where the middle-layer functions are held that digests the API data and passes it to the views.
* `assets` is where the developer and front-end designer from AgComm places `images`, `scripts`, and `styles`. The `scripts` and `styles` are then compiled using Yarn and output to `_compiled`. 
* `src` is where the API calls to the ExtDCR and PI are made. 
* `pages` are where the approved path views are held. These files gather the `partials` and passes relevant arguments to the functions.
* `partials` is where the view is created. This is where a front-end designer from AgComm would spend the majority of their time, if they're updating the HTML structure around any assets.

Partials
--------------

* `feed-article.php` is used to output a feed of the articles for any page that would like articles.
* `feed-category.php` is the template file called on a category page to feed the articles relevant to that category.
* `feed-county-articles.php` is used on the county homepage since their design is drastically different from other feeds.
* `feed-event.php` is used to display a list of events.
* `feed-state-articles.php` is used on the state home page since its design is drastically different from other feeds.
* `feed-subcategory.php` is the same as `feed-category.php` except for subcategories.'
* `header-menu.php` is the menu that displays below the header file. It has static and dynamic elements from the Depot.
* `page-about.php` is the design for the About Us page for both state and counties.
* `page-administration.php` is the design for Extension administration.
* `page-article.php` is the design for a single article.
* `page-event.php` is the design for a single event.
* `page-label.php` is the design for a list of articles on a label page.
* `page-navigation.php` is deprecated and could be deleted.
* `page-profile.php` is the design for a profile page. Once 404s are identified, if a user doesn't have a profile picture, they will show a no profile picture.
* `tpl-4h-marketing.php` is the section (generally on a homepage) to apply for 4-H
* `tpl-banner.php` is the section currently on all pages that displays the current banner. 
* `tpl-footer.php` is the footer that appears on all pages.
* `tpl-give.php` is the section currently on the state Extension page requesting donations.
* `tpl-header.php` is the header that appears on all pages.
* `tpl-marketing.php` is the 4-colored sections present on homepages that represent ANR, HHS, 4-H, and CD.
* `tpl-resource-links.php` is the section at the bottom of all pages that identify three key audiences and provide important links for those audiences based off of our personas and red routes.

Profile Images
----------------

Profile images are not committed to this repository but are hosted on extension.purdue.edu/ProfileImages/ and are accessible through SFTP access and can be deployed to QA and PROD through typical Purdue ITaP methods. 

Known Issues
----------------

Known issues are kept in a Google Document that can be assessed by emailing Joan Crow at crow@purdue.edu.
