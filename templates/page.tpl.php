<?php // Corolla ?>
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <?php if ($menubar = render($page['menu_bar'])): ?>
      <div id="menu-bar-wrapper">

                 <!--  <?php if ($site_logo || $site_name || $site_slogan): ?>
            <div id="branding" class="branding-elements clearfix">

              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <div<?php print $hgroup_attributes; ?>>

                  <?php if ($site_name): ?>
                    <h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>

                  <?php if ($site_slogan): ?>
                    <h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>

                </div>
              <?php endif; ?>

            </div>
          <?php endif; ?>  -->


        <div class="container clearfix">
          <?php print $menubar; ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="header-wrapper">
      <div class="container clearfix">

        <header class="clearfix<?php print $site_logo ? ' with-logo' : ''; ?>" role="banner">

          <?php print render($page['header']); ?>

        </header>

      </div>
    </div>
<!-- 2 COLUMN GPANEL PASTE -->
   <?php if (
  $page['two_50_top'] ||
  $page['two_50_first'] ||
  $page['two_50_second'] ||
  $page['two_50_bottom']
  ): ?>
  <div id="top-panels-wrapper">
      <div class="container clearfix">
  <!-- Two column 2x50 Gpanel -->
  <div class="at-panel gpanel panel-display two-50 clearfix">
    <?php print render($page['two_50_top']); ?>
    <?php print render($page['two_50_first']); ?>
    <?php print render($page['two_50_second']); ?>
    <?php print render($page['two_50_bottom']); ?>
    </div>
   </div>
  </div>
<?php endif; ?>
<!-- END PASTE -->
    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['secondary_content']); ?>
        </div>
      </div>
     <?php endif; ?>

    <?php if ($messages || $page['help']): ?>
      <div id="messages-help-wrapper">
        <div class="container clearfix">
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper">
      <div class="container">

        <div id="columns">
          <div class="columns-inner clearfix">

            <div id="content-column">
              <div class="content-inner">

                <?php print render($page['highlighted']); ?>

                <<?php print $tag; ?> id="main-content" role="main">

                  <?php if ($primary_local_tasks): ?>
                    <div id="tasks" class="clearfix">

                      <?php if ($primary_local_tasks): ?>
                        <ul class="tabs primary">
                          <?php print render($primary_local_tasks); ?>
                        </ul>
                      <?php endif; ?>

                    </div>
                  <?php endif; ?>

                  <div class="content-margin">
                    <div class="content-style">

                      <?php if ($secondary_local_tasks): ?>
                        <ul class="tabs secondary">
                          <?php print render($secondary_local_tasks); ?>
                        </ul>
                      <?php endif; ?>

                      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

                      <?php print render($title_prefix); ?>

                      <?php if ($title): ?>
                        <header class="clearfix">
                          <h1 id="page-title">
                            <?php print $title; ?>
                          </h1>
                        </header>
                      <?php endif; ?>

                      <?php print render($title_suffix); ?>

                      <?php if ($action_links = render($action_links)): ?>
                        <ul class="action-links">
                          <?php print $action_links; ?>
                        </ul>
                      <?php endif; ?>

                      <div id="content">
                        <?php print render($page['content']); ?>
                      </div>

                      <?php print $feed_icons; ?>

                    </div>
                  </div>

                </<?php print $tag; // end main content ?>>

                <?php print render($page['content_aside']); ?>

              </div>
            </div>

            <?php print render($page['sidebar_first']); ?>
            <?php print render($page['sidebar_second']); ?>

          </div>
        </div>

      </div>
    </div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

  <!--  OLD STUFF -->
    <?php if (
  $page['five_first'] ||
  $page['five_second'] ||
  $page['five_third'] ||
  $page['five_fourth'] ||
  $page['five_fifth']
  ): ?>
      <div id="footer-panels-wrapper">
        <div class="container clearfix">
          <!-- Five column Gpanel -->
          <div class="at-panel gpanel panel-display five-5x20 clearfix">
            <div class="panel-row row-1 clearfix">
              <?php print render($page['five_first']); ?>
              <?php print render($page['five_second']); ?>
            </div>
            <div class="panel-row row-2 clearfix">
              <?php print render($page['five_third']); ?>
              <?php print render($page['five_fourth']); ?>
              <?php print render($page['five_fifth']); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>


   <?php if (
  $page['two_66_33_top'] ||
  $page['two_66_33_first'] ||
  $page['two_66_33_second'] ||
  $page['two_66_33_bottom']
  ): ?>
      <div id="footer-wrapper">
        <div class="container clearfix">
          <div class="at-panel gpanel panel-display two-66-33 clearfix">
    <?php print render($page['two_66_33_top']); ?>
    <?php print render($page['two_66_33_first']); ?>
    <?php print render($page['two_66_33_second']); ?>
    <?php print render($page['two_66_33_bottom']); ?>
  </div>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>
