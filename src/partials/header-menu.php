<?php
/**
 * local variable $navigation must be set by the function including this partial
 *
 * home and about links are implied to be always present.  the rest are dynamic.
 *
 * we are using the listMenuCategories intCategoryID and strCategoryText instead of the strCategoryURL since those are hardset to the current application.
 *
 * we are honoring the sub-category list menu links node URL as-is.
 *
 * SFP Note: This is merely a suggestion on how to go about the menu, rewrite however you prefer to build megamenu navigation.
 */

$root = $navigation->currentHome->strPublicURLRoot;
$hid = $navigation->currentHome->intHomeID;

?>
<div class="wide-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="//<?php echo $root;?>pages/index.php">Home</a></li>
            <a class="nav-item nav-link" href="//<?php echo $root;?>pages/about.php">About</a>
            <?php foreach($navigation->listMenuCategories as $cat):?>
                <a class="nav-item nav-link" href="//<?php echo $root;?>/category/<?php echo $hid;?>/<?php echo $cat->intCategoryID;?>"><?php echo $cat->strCategoryText;?></a>
            <?php endforeach ?>
            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <form action="/results/" method="get" class="form__search form__search--mobile-nav">
              <input type="search" name="q" class="form__search-input" placeholder="Search people, articles, and more" aria-label="Search" aria-placeholder="Search people, articles, and more"
              />
              <input type="image" value="Search" src="/assets/images/icon--search.svg" class="form__search-submit" alt="Search">
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>


<!-- TODO: delete -->
<!-- <ul>
    <li><a href="//<?php echo $root;?>pages/index.php">Home</a></li>
    <li>
        <a href="//<?php echo $root;?>pages/about.php">About</a>
        <ul>
            <li>I believe this menu is hardcoded in the current site's template.  Use var $root; to set relative path on links.</li>
        </ul>
    </li>
    <?php foreach($navigation->listMenuCategories as $cat):?>
        <li>
            <a href="//<?php echo $root;?>pages/category.php?hid=<?php echo $hid;?>&cat=<?php echo $cat->intCategoryID;?>"><?php echo $cat->strCategoryText;?></a>
            <ul>
                <?php foreach($cat->listMenuSubCategories as $subcat):?>
                    <li>
                        <a href="//<?php echo $root;?>pages/subcategory.php?hid=<?php echo $hid;?>&subcat=<?php echo $subcat->intSubCatID;?>"><?php echo $subcat->strSubCatText;?></a>
                        <ul>
                            <?php foreach($subcat->listMenuLinks as $link):?>
                                <li>
                                    <a href="<?php echo $link->strNodeURL; ?>"<?php if($link->blnNewWindow){ echo ' target="_blank"';} ?>><?php echo $link->strNodeText; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul> -->