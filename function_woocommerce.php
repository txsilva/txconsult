/* FUNÇÕES IMPLEMENTADAS PARA WOOCOMMERCE */
// lista de países e ID do produto que não pode está disponível
function get_countries_products() {
    return [
        'PE' => [39,25],
        'US' => [25]
    ];    
}

// pega a geolocalização do ip do usuário
function get_current_country(){
    $location = [];
    if ( class_exists( 'WC_Geolocation' ) ){
        $location = WC_Geolocation::geolocate_ip();    
    }
    return $location['country'] ?? false;
}


// chamada para get_countries_products para carregar a lista de países
function get_country_products(){
    $id_products = get_countries_products();
    return $id_products[get_current_country()] ?? false;
}

// adiciona na página de produto com a função dcms_show_message_restrict_country
add_action('woocommerce_before_add_to_cart_form', 'dcms_show_message_restrict_country');

// mostra a mensagem após o formulário na página de produtos
function dcms_show_message_restrict_country(){
    global $product;

    if ( is_product() ) {
        $current_product = $product->get_id();
        $id_products = get_country_products();
        
        if ( $id_products && ! in_array($current_product, $id_products) ){
            echo"<p>ID do produto: ". $current_product ."</p>";
            echo "<div class='msg-restrict-country'>Este producto no esta disponible en tu país</div>";
        }else{
            echo"<p>ID do produto: ". $current_product ."</p>";
            echo "<div class='msg-restrict-country'>Este producto esta disponible en tu país</div>";
        }

    }    
}

/**
 * Add the field to the checkout
 */
add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );

function my_custom_checkout_field( $checkout ) {

    echo '<div id="my_custom_checkout_field"><h2>' . __('Meu campo') . '</h2>';
    echo '<input type="file" accept="image/*, .pdf" enctype="multpart/form-data">';

    woocommerce_form_field( 'my_field_name', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Fill in this field'),
        'placeholder'   => __('Enter something'),
        ), $checkout->get_value( 'my_field_name' ));

    echo '</div>';

}