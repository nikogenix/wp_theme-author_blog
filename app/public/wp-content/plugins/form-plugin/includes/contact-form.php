<?php

add_shortcode('contact_form', 'show_form');

add_action('rest_api_init', 'create_rest_endpoint');
function show_form()
{
    ob_start();

    include PLUGIN_PATH . '/includes/templates/contact-form.php';

    $output = ob_get_clean();

    return $output;
}


function create_rest_endpoint()
{
    register_rest_route('v1/contact-form', '/submit', [

        'methods' => 'POST',
        'callback' => 'handle_enquiry',
        'permission_callback' => '__return_true',

    ]);
}

function handle_enquiry($data)
{
    $params = $data->get_params();

    if (!wp_verify_nonce($data['_wpnonce'], 'wp_rest')) {
        return new WP_REST_Response("Message not sent.", 422);
    }

    unset($params['_wpnonce']);
    unset($params['_wp_http_referer']);

    return new WP_REST_Response("Message sent succesfully.", 200);

}