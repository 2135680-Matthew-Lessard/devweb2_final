<?php
/**
 * Page Index pour le projet final en Developpement Web 2
 * @Author Matthew Lessard
 */

get_header();
?>
<div id="page" class="site-background">
    <div class="container_grid">
        <div class="container">
            <div class="head">
                <h1>Bienvenue</h1>
                <hr class="titrepage">
            </div>
            <div class="container_texte">
                <h3>Présentation de l'auteur</h3>
                <hr class="presentation">
                <p> Bonjour, je me nomme Matthew Lessard.
                    Je suis actuellement deuxième année en Techniques de l'informatique au Cégep de Victoriaville.
                    <br>
                    Je joue au volleyball dans la ligue collégiale avec les Vulkins.
                    Je réside à Kingsey Falls depuis que je suis petit et j'ai étudié par la suite au Collège Clarétain de Victoriaville.
                </p>
                <h3>Présentation du site</h3>
                <hr class="presentation">
                <p>
                    Bienvenue sur mon projet final dans le cadre du cours Développement Web 2. Nous devions créer un site sur
                    un thème particulié. J'ai choisi comme thème de vous expliquer ma passion pour le Volleyball
                </p>
                <h3>Articles Disponibles</h3>
                <hr class="presentation">
                    <?php
                    $query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                    ));

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="article">
                                <h2 class="titre_article">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo "<div class='message-erreur'>Nous sommes désolés, un problème technique nous empêche de retrouver les données (code 2).</div>";
                        echo_debug($query->error);
                    }
                    ?>
            </div>
            <div class="container_sidebar">
                <?php get_sidebar();?>
            </div>
    </div>
</div>
    <br>
<?php get_footer(); ?>
