<?php
/**
 * Page Index pour le projet final en Developpement Web 2
 * @Author Matthew Lessard
 */

get_header();
?>
<div class="container_grid">
    <div class="container">
        <div class="head">
            <h1>Bonjour tout le monde</h1>
        </div>
        <br>
        <div class="container_texte">
            <h2>What is Lorem Ipsum?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.
            </p>
        </div>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
