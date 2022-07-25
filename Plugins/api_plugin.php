<?php
/*
* Plugin Name: Chave API integracao
*/

function minhas_configuracoes() {
    register_setting(
        'general',
        'chave_api_minha_integracao',
        [
            'sanitize_callback' => function($value){
                if(!preg_match('/ API-[0-9]{4}-[A-Z]{3} /', $value )){
                    add_settings_error(
                        'chave_api_minha_integracao',
                        esc_attr('chave_api_minha_integracao_erro'),
                        'Chave API está no formato errado.',
                        'error'
                    );
                    return get_option('chave_api_minha_integracao');
                }
                return $value;
            },
        ]
    );

    add_settings_field(
        'chave_api_minha_integracao',
        'Chave API da minha integração',
        function($args){
            $options = get_option('chave_api_minha_integracao',);
            ?>
            <input id="<?php echo esc_attr( $args['label_for']);?>" type="text" name="chave_api_minha_integracao" value="<?php echo esc_attr($options);?>">
            <?php
        },
        'general',
        'default',
        [
            'label_for' => 'chave_api_minha_integracao_id',
            'class'=>'minha-class-tr',
        ]
    );
}
add_action('admin_init', 'minhas_configuracoes');