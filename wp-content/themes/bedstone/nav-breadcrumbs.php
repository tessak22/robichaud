<?php
/**
 * breadcrumb nav
 *
 * @package Bedstone
 */

$breadcrumbs = bedstone_get_breadcrumbs();
?>

<?php if (!empty($breadcrumbs)) : ?>
    <nav class="nav-breadcrumbs hidden-print">
        <ul>
            <?php
            foreach ($breadcrumbs as $crumb) {
                echo '<li>';
                echo (isset($crumb['link']) && $crumb['link']) ? '<a href="' . $crumb['link'] . '">': '';
                echo $crumb['name'];
                echo (isset($crumb['link']) && $crumb['link']) ? '</a>' : '';
                echo '</li>';
            }
            ?>
        </ul>
    </nav>
<?php endif; ?>
