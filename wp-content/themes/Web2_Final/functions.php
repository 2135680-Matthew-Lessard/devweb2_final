<?php
function theme_enqueue_styles() {
    wp_enqueue_style('index', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>

<?php
/**
 * Plugin Name: Pays Plugin
 * Description: Plugin pour creer une table des pays present au JO
 */

register_activation_hook(__FILE__, 'pays_plugin_activer');

function pays_plugin_activer() {
    global $wpdb;

    $global_prefix = $wpdb->prefix;
    $plugin_prefix = 'pays_plugin';
    $nom_table = $global_prefix . $plugin_prefix;

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $pays_table (
        id INT NOT NULL AUTO_INCREMENT,
        nom VARCHAR(64) NOT NULL,
        description TEXT,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

    inserer_pays();
}

function inserer_pays() {
    global $wpdb;

    $global_prefix = $wpdb->prefix;
    $plugin_prefix = 'pays_plugin';
    $nom_table = $global_prefix . $plugin_prefix;

    $tableau_champions = array(

        /**
         * Informations sur les personnages trouvés sur la page wikipedia: https://fr.wikipedia.org/wiki/Personnages_de_League_of_Legends
         */

        array('nom' => 'France', 'description' => 'Médaille d\'or: 1, Médaille d\'argent: 0, Médaille de bronze: 0'),
        array('nom' => 'Japon', 'description' => 'Médaille d\'or: 1, Médaille d\'argent: 1, Médaille de bronze: 1'),
        array('nom' => 'Canada', 'description' => 'Médaille d\'or: 0, Médaille d\'argent: 0, Médaille de bronze: 0'),
        array('nom' => 'Brésil', 'description' => 'Médaille d\'or: 3, Médaille d\'argent: 3, Médaille de bronze: 0'),
        array('nom' => 'Allemagne', 'description' => 'Médaille d\'or: 0, Médaille d\'argent: 1, Médaille de bronze: 0'),
        array('nom' => 'Pologne', 'description' => 'Médaille d\'or: 1, Médaille d\'argent: 0, Médaille de bronze: 0'),
        array('nom' => 'États-Unis', 'description' => 'Médaille d\'or: 3, Médaille d\'argent: 0, Médaille de bronze: 2')
    );

    $tableau = array('%s', '%s');

    foreach ($tableau_pays as $pays) {
        $wpdb->insert($nom_table, $pays, $tableau);
    }
}

/**
 * Plugin Name: Users Plugin
 * Description: Plugin pour creer un user ainsi que leur pays
 */

register_activation_hook(__FILE__, 'users_plugin_activer');

function users_plugin_activer() {
    global $wpdb;

    $global_prefix = $wpdb->prefix;
    $plugin_prefix = 'users_plugin';
    $users_table = $global_prefix . $plugin_prefix;

    $champions_table = $global_prefix . 'pays_plugin';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $users_table (
        id INT NOT NULL AUTO_INCREMENT,
        nom VARCHAR(64) NOT NULL,
        pays_id INT NOT NULL,
        PRIMARY KEY  (id),
        FOREIGN KEY (pays_id) REFERENCES $pays_table(id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
?>