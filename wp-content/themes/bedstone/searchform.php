<?php
/**
 * searchform
 *
 * @package Bedstone
 */

?>
<div class="searchform hidden-print">
    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
        <label for="s">Search</label>
        <div class="container--input">
            <input class="form-control" type="text" name="s" title="Search" value="<?php echo get_search_query() ?>">
        </div>
    </form>
</div>
