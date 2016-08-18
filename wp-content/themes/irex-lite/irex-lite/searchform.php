<!-- #search -->
<div id="search">
  <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="searchbox" onfocus="this.value=''" class="searchinput"/>
    <input type="submit" class="submitbutton" value="<?php _e('Go', 'irex-lite'); ?>" />
  </form>
</div>
<!-- #search --> 