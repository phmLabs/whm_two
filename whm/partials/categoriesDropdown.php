<?php $categories = get_categories(); ?>

<form>
    <a href="/"><img src="/images/logo-medium.png" /></a><br />
    <select name="categoryselect" id="cat-list-small" onChange="window.location.href=this.form.categoryselect.options[this.form.categoryselect.selectedIndex].value;">

    <?php var_dump($_SERVER["REQUEST_URI"])?>
    <option value="">Kategorie ausw&auml;hlen</option>
<?php foreach( $categories as $category ): ?>
        <option value="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></option>
<?php endforeach; ?>
    </select>
</form>