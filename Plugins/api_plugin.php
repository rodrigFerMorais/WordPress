<?php
/*
* Plugin Name: Chave API integracao
*/

function minhas_configuracoes() {
	register_setting(
		'grupo_minhas_configuracoes',
		'chave_api_minha_integracao',
		array(
			'sanitize_callback' => function( $value ) {
                // IF para Validar o campo com menssagem de erro
				if ( ! preg_match( '/API-[0-9]{4}-[A-Z]{3}/', $value ) ) {
					add_settings_error(
						'chave_api_minha_integracao',
						esc_attr( 'chave_api_minha_integracao_erro' ),
						'Chave API no formato errado.',
						'error'
					);
					return get_option( 'chave_api_minha_integracao' );
				}
				return $value;
			},
		)
	);

    add_settings_section(
        'minha_secao',
        'Minha seção',
        function() {
            echo '<p>Insira aqui a sua chave API.</p>';
        },
        'grupo_minhas_configuracoes'
    );

    // 
    add_settings_field(
        'chave_api_minha_integracao',
        'Chave API da minha integração',
        function($args){
            $options = get_option('chave_api_minha_integracao',);
            ?>
            <input id="<?php echo esc_attr( $args['label_for']);?>" type="text" name="chave_api_minha_integracao" value="<?php echo esc_attr($options);?>">
            <?php
        },
        'grupo_minhas_configuracoes',
        'minha_secao',
        [
            'label_for' => 'chave_api_minha_integracao_id',
            'class'=>'minha-class-tr',
        ]
    );
}
add_action('admin_init', 'minhas_configuracoes');

// Criando options page
function minhas_configuracoes_menu(){
    add_options_page(
        'Minhas configutações',
        'Minhas conf.',
        'manage_options',
        'minhas-configuracoes',
        'minhas_configuracoes_html',
    );
}
add_action('admin_menu', 'minhas_configuracoes_menu');

function minhas_configuracoes_html(){
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_Admin_page_title()); ?></h1>
        <form action='options.php' method='post'>
            <?php
                settings_fields('grupo_minhas_configuracoes');
                do_settings_sections('grupo_minhas_configuracoes');
                submit_button();
            ?>
        </form>
    </div>
    <?php   
}