<?php

// Register Custom Taxonomy
function register_project_industry_taxonomy() {
    $labels = array(
        'name'                       => _x('Industries', 'Taxonomy General Name', 'msr-plugin'),
        'singular_name'              => _x('Industry', 'Taxonomy Singular Name', 'msr-plugin'),
        'menu_name'                  => __('Industries', 'msr-plugin'),
        'all_items'                  => __('All Industries', 'msr-plugin'),
        'parent_item'                => __('Parent Industry', 'msr-plugin'),
        'parent_item_colon'          => __('Parent Industry:', 'msr-plugin'),
        'new_item_name'              => __('New Industry Name', 'msr-plugin'),
        'add_new_item'               => __('Add New Industry', 'msr-plugin'),
        'edit_item'                  => __('Edit Industry', 'msr-plugin'),
        'update_item'                => __('Update Industry', 'msr-plugin'),
        'view_item'                  => __('View Industry', 'msr-plugin'),
        'search_items'               => __('Search Industries', 'msr-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'project_industry',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('project_industry', ["projects"], $args);
}
add_action('init', 'register_project_industry_taxonomy', 0);


// Register Custom Taxonomy
function register_project_technology_taxonomy() {
    $labels = array(
        'name'                       => _x('Technologies', 'Taxonomy General Name', 'msr-plugin'),
        'singular_name'              => _x('Technology', 'Taxonomy Singular Name', 'msr-plugin'),
        'menu_name'                  => __('Technologies', 'msr-plugin'),
        'all_items'                  => __('All Technologies', 'msr-plugin'),
        'parent_item'                => __('Parent Technology', 'msr-plugin'),
        'parent_item_colon'          => __('Parent Technology:', 'msr-plugin'),
        'new_item_name'              => __('New Technology Name', 'msr-plugin'),
        'add_new_item'               => __('Add New Technology', 'msr-plugin'),
        'edit_item'                  => __('Edit Technology', 'msr-plugin'),
        'update_item'                => __('Update Technology', 'msr-plugin'),
        'view_item'                  => __('View Technology', 'msr-plugin'),
        'search_items'               => __('Search Technologies', 'msr-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'project_technology',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('project_technology', ["projects"], $args);
}
add_action('init', 'register_project_technology_taxonomy', 0);