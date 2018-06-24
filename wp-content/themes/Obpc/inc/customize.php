<?php
/**
 * Função para registrar as opções do customizer
 * <?php echo get_theme_mod( '$wp_customize' ); ?>
 */
function funcao_do_customizer( $wp_customize ) {
    // -------------------------------------------------------------------------
    // Seção
    // Ela será utilizada em todos os campos do formulário
    // -------------------------------------------------------------------------
    $wp_customize->add_section(
        'info-footer',
        array(
            'title'       => 'Footer',
            'description' => 'Alterar informações do Footer.',
            'priority'    => 30,
        )
    );
 
    // -------------------------------------------------------------------------
    // Input do tipo "text"
    // -------------------------------------------------------------------------
 
    // Setting do link_facebook
    $wp_customize->add_setting(
        'link_facebook', // link_facebook
        array(
            'default'   => '', // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do link_facebook
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "link_facebook", // link_facebook
        array(
            "label"    => "Link Facebook", // Rótulo do campo
            "section"  => "info-footer", // A seção
            "settings" => "link_facebook", // Settings do campo
            "type"     => "text", // Input do tipo "text"
        )
    ));

    // Setting do link_linkedin
    $wp_customize->add_setting(
        'link_linkedin', // link_linkedin
        array(
            'default'   => '', // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do link_linkedin
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "link_linkedin", // link_linkedin
        array(
            "label"    => "Link Linkedin", // Rótulo do campo
            "section"  => "info-footer", // A seção
            "settings" => "link_linkedin", // Settings do campo
            "type"     => "text", // Input do tipo "text"
        )
    ));

    // Setting do link_youtube
    $wp_customize->add_setting(
        'link_youtube', // link_youtube
        array(
            'default'   => '', // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do link_youtube
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "link_youtube", // link_youtube
        array(
            "label"    => "Link Youtube", // Rótulo do campo
            "section"  => "info-footer", // A seção
            "settings" => "link_youtube", // Settings do campo
            "type"     => "text", // Input do tipo "text"
        )
    ));

    // -------------------------------------------------------------------------
    // Área de texto do tipo "textarea"
    // -------------------------------------------------------------------------
 
    // Setting do copyright
    $wp_customize->add_setting(
        'copyright', // copyright
        array(
            'default'   => '', // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do copyright
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "copyright", // copyright
        array(
            "label"    => "Copyright", // Rótulo do campo
            "section"  => "info-footer", // A seção
            "settings" => "copyright", // Settings do campo
            "type"     => "textarea", // Área de texto do tipo textarea
        )
    ));
 
    // -------------------------------------------------------------------------
    // FIM
    // -------------------------------------------------------------------------
} // funcao_do_customizer
 
// Utiliza o gancho para adicionar nossa função
add_action( 'customize_register', 'funcao_do_customizer' );
?>