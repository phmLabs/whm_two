<?php $categories = get_categories(); ?>
<ul id="cat-list">
<?php foreach( $categories as $category ): ?>
    <li id="cat-<?php echo $category->slug; ?>"><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
<?php endforeach; ?>
</ul>