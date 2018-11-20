<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
<label>
  <input style="font-size:12px;color:blue;padding:5px 20px;text-align:left;" 
  type="search" class="search-field" placeholder="TYPE AND HIT ENTER ....." 
  value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
</label>

	<button style="color:#248483;background:white;" class="search-submit">
		<span class="icon-search" aria-hidden="true">
			<i class="fa fa-search"></i>
		</span>
		<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</button>
	
</form>

 
