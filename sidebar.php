<ul class="widget-area">
    <?php dynamic_sidebar('sidebar'); ?>
</ul>
<form method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<label for="s">Search News</label>
    <p>
        <input type="text" id="s" name="s" value="" class="search__field" placeholder="Search News" />
        <input type="image" alt="Search"  class="search__submit" src="<?php echo FCWPF_URI; ?>/images/search.png" id="searchsubmit" />
  	</p>
</form>