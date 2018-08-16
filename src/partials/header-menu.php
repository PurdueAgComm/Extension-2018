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

global $county;
// var_dump($navigation); die();
?>
<div class="wide-container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?php echo $county ? '/'.$county : ''; ?>/">Home</a>
          <li class="nav-item dropdown nav-link">
            <a class="nav-item" href="<?php echo $county ? '/'.$county : ''; ?>/about">About</a>
             <div class="dropdown-menu">
              <div class="list-group nav nav-item">
                <a class="dropdown-item list-group-item list-group-item-action nav nav nav-item" href="<?php echo $county ? '/'.$county : ''; ?>/about">Contact Us</a>
                <a class="dropdown-item list-group-item list-group-item-action nav nav nav-item" href="<?php echo $county ? '/'.$county : ''; ?>/administration">Meet Extension Administration</a>
                <a class="dropdown-item list-group-item list-group-item-action nav nav nav-item" href="/about#counties">County Offices <?php echo $county ? '<i style="color: #495057;" class="fas fa-external-link-alt"></i>' : ''; ?></a>
              </div>
            </div>
          </li>
          <?php foreach($navigation->listMenuCategories as $category) : // Loop through categories ?>
            <li class="nav-item dropdown nav-link">
              <a class="nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/category/<?php echo $category->intCategoryID; ?>" id="<?php echo 'Dropdown-Link-' . $category->intCategoryID; ?>">
                <?php echo $category->strCategoryText; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="<?php echo 'Dropdown-Link-' . $category->intCategoryID; ?>">
                <?php if($category->strCategoryText == "Garden" && !empty($county)) : ?>
                  <div class="list-group nav nav-item">
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/label/12">Master Gardener</a>
                  </div>
                <?php endif; ?>
                <?php if($category->strCategoryText == "Youth" && !empty($county)) : ?>
                  <div class="list-group nav nav-item">
                      <p class="dropdown-header">4-H Resources</p>
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/label/8">4-H County Club</a>
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/label/9">4-H County Forms</a>
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/label/7">4-H County Projects</a>
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/label/11">4-H County Trips</a>
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/label/16">4-H County Volunteers</a>
                  </div>
                <?php endif; ?>
                <?php $youthCount = 0; ?>
                <?php foreach($category->listMenuSubCategories as $subCategory) : // Loop through each subcategory ?>
                  <div class="list-group nav nav-item">
                    <a class="dropdown-item list-group-item list-group-item-action nav nav-item" href="<?php echo !empty($county) ? '/' . $county : ''; ?>/subcategory/<?php echo $subCategory->intSubCatID; ?>"><?php echo $subCategory->strSubCatText; ?></a>
                    <!-- <p class="dropdown-header">Heading</p>
                    <?php foreach($subCategory->listMenuLinks as $subCategoryLink) : // For each link in the subcategory ?>
                      <a class="dropdown-item list-group-item lit-group-item-action nav nav-item" href="<?php echo $subCategoryLink->strNodeURL; ?>"><?php echo $subCategoryLink->strNodeText; ?></a>
                    <?php endforeach; ?> -->
                  </div>
                  <?php if($subCategory->strSubCatText == "4-H Youth Development" && !empty($county)) : ?>
                    <?php // add a heading to end AFTER 4-H Youth Development category ?>
                    <p class="dropdown-header">PK-12 Resources</p>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </li>
          <?php endforeach; ?>
          <form action="<?php echo $county;?>/results/" method="get" class="form__search form__search--mobile-nav">
            <input type="search" name="q" class="form__search-input" placeholder="Search people, articles, and more" aria-label="Search" aria-placeholder="Search people, articles, and more"
            />
            <input type="image" value="Search" src="<?php echo $GLOBALS['SITE_PATH']; ?>/assets/images/icon--search.svg" class="form__search-submit" alt="Search">
          </form>
        </div>
      </div>
    </div>
  </nav>
</div>