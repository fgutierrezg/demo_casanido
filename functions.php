<?php
function casanido_enqueue_assets() {

    // Google Fonts
    wp_enqueue_style(
        'casanido-google-fonts',
        'https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap',
        false
    );

    // Font Awesome y Bootstrap Icons
    wp_enqueue_style(
        'fontawesome',
        'https://use.fontawesome.com/releases/v5.15.4/css/all.css',
        array(),
        '5.15.4'
    );

    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        array(),
        '1.4.1'
    );

    // CSS de librerías
    wp_enqueue_style(
        'animate-css',
        get_template_directory_uri() . '/lib/animate/animate.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'lightbox-css',
        get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'owlcarousel-css',
        get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css',
        array(),
        null
    );

    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), '1.0', true );

    // Bootstrap y estilos personalizados
    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        '5.1'
    );

    wp_enqueue_style(
        'casanido-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0'
    );

    // JS – jQuery ya viene en WordPress, pero lo aseguramos
    wp_enqueue_script('jquery');

    // Librerías JS
    wp_enqueue_script(
        'wow-js',
        get_template_directory_uri() . '/lib/wow/wow.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'lightbox-js',
        get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'owlcarousel-js',
        get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js',
        array('jquery'),
        null,
        true
    );

    // Bootstrap Bundle JS (con Popper incluido)
    wp_enqueue_script(
        'bootstrap-bundle',
        get_template_directory_uri() . '/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.1',
        true
    );

    //O

    // Script personalizado
    wp_enqueue_script(
        'casanido-main',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'casanido_enqueue_assets');

function menu_register() {
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal',
    ));
}
add_action('after_setup_theme', 'menu_register');

//Logica para contact-from
add_action('init', 'process_contact_form');

function process_contact_form() {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cf-name'])) {
          $name    = sanitize_text_field($_POST["cf-name"]);
    $email   = sanitize_email($_POST["cf-email"]);
    $message = sanitize_textarea_field($_POST["cf-message"]);

    $to      = ["francio.gut@gmail.com","francisco.gutierrez.g@live.cl"];
    $subject = "Mensaje formulario de contacto Casa Nido";
    $headers = array('Content-Type: text/html; charset=UTF-8', "Reply-To: $email");
    $body    = "
        <h2>Nuevo mensaje desde formulario de contacto</h2>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensaje:</strong><br>$message</p>
    ";

    if (wp_mail($to, $subject, $body, $headers)) {
        echo '<script>alert("¡Gracias! Tu mensaje ha sido enviado correctamente.");</script>';
    } else {
        echo '<script>alert("Hubo un problema al enviar el mensaje. Intenta nuevamente.");</script>';
    }
    }
}

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php'; // Navwalker para Bootstrap