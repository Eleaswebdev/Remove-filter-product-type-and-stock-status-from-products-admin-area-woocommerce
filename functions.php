add_filter( 'woocommerce_products_admin_list_table_filters', 'remove_products_admin_list_table_filters', 10, 1 );
function remove_products_admin_list_table_filters( $filters ){
    // Remove "Product type" dropdown filter
    if( isset($filters['product_type']))
        unset($filters['product_type']);

    // Remove "Product stock status" dropdown filter
    if( isset($filters['stock_status']))
        unset($filters['stock_status']);

    return $filters;
}
