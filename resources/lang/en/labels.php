<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all'     => 'All',
        'yes'     => 'Yes',
        'no'      => 'No',
        'custom'  => 'Custom',
        'actions' => 'Actions',
        'active'  => 'Active',
        'buttons' => [
            'save'   => 'Save',
            'update' => 'Update',
        ],
        'hide'              => 'Hide',
        'inactive'          => 'Inactive',
        'none'              => 'None',
        'show'              => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
    ],

    'backend' => [
        'profile_updated' => 'Your profile has been updated.',
        'access'          => [
            'roles' => [
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions'     => 'Permissions',
                    'role'            => 'Role',
                    'sort'            => 'Sort',
                    'total'           => 'role total|roles total',
                ],
            ],

            'permissions' => [
                'create'     => 'Create Permission',
                'edit'       => 'Edit Permission',
                'management' => 'Permission Management',

                'table' => [
                    'permission'   => 'Permission',
                    'display_name' => 'Display Name',
                    'sort'         => 'Sort',
                    'status'       => 'Status',
                    'total'        => 'role total|roles total',
                ],
            ],

            'users' => [
                'active'              => 'Active Users',
                'all_permissions'     => 'All Permissions',
                'change_password'     => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create'              => 'Create User',
                'deactivated'         => 'Deactivated Users',
                'deleted'             => 'Deleted Users',
                'edit'                => 'Edit User',
                'edit-profile'        => 'Edit Profile',
                'management'          => 'User Management',
                'no_permissions'      => 'No Permissions',
                'no_roles'            => 'No Roles to set.',
                'permissions'         => 'Permissions',

                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted'     => 'No Deleted Users',
                    'roles'          => 'Roles',
                    'total'          => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history'  => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmed',
                            'created_at'   => 'Created At',
                            'deleted_at'   => 'Deleted At',
                            'email'        => 'E-mail',
                            'last_updated' => 'Last Updated',
                            'name'         => 'Name',
                            'status'       => 'Status',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],

        ],

        'nonmls' => [
            'active'              => 'Properties',
            'create'              => 'Add New Property',
            'deleted'             => 'Deleted Property',
            'edit'                => 'Edit Property',
            'management'          => 'Non MLS Properties Management',

            'table' => [
                'list_date'      => 'Upload Date',
                'area_total'     => 'Total Area',
                'city'           => 'City',
                'is_openHouse'   => 'Open House',
                'id'             => 'ID',
                'address'        => 'Address',
                'asking_price'   => 'Price',
            ],

            'select' => [
                'p_type' => [
                        'detach'        => 'Residential Detached',
                        'attach'        => 'Residential Attached',
                        'land'          => 'Land Only',
                ],

                'dwelling' => [
                    'house_a'           => 'House with Acreage',
                    'house_s'           => 'House/Single Family',
                    'manufacture'       => 'Manufactured',
                    'manufacture_l'     => 'Manufactured with Land',
                    'other'             => 'Other',
                    'recreational'      => 'Recreational',
                    'townhouse'         => 'Townhouse',
                ],

            ],

            'tabs' => [
                'titles' => [
                    'overview' => 'Overview',
                ],

                'content' => [
                    'overview' => [
                        'id'	        			=> 'ID',
                        'area'	        			=> 'Area',
                        'asking_price'				=> 'Price',
                        'price_history'				=> 'Price History',
                        'price_history_c'			=> '[most recent, 1111.11]',
                        'unit_number'				=> 'Unit Number',
                        'address'	    			=> 'Address',
                        'city'			    	    => 'City',
                        'state'				        => 'State',
                        'postal'			    	=> 'Postal',
                        'list_date'			    	=> 'List Date',
                        'update_date'				=> 'Update Date',
                        'image_count'				=> 'Image Count',
                        'latitude'			    	=> 'Latitude',
                        'longitude'				    => 'Longitude',
                        'price_sqft'				=> 'Unit Price',
                        'p_type'				    => 'Property Type',
                        'p_layout'			    	=> 'Property Layout',
                        'brokerage'			    	=> 'Brokerage',
                        'brokerage_default'		    => 'None',
                        'school_listing'			=> 'School List',
                        'imageURL'			    	=> 'Image URL',
                        'property_status_id'		=> 'Property Status ID',
                        'is_openHouse'				=> 'Is Open House',
                        'description'				=> 'Description',
                        'Chinese_description'		=> 'Chinese Description',
                        'community'				    => 'Community',
                        'dwelling'				    => 'Dwelling',
                        'title_to_land'				=> 'Title to Land',
                        'zoning'				    => 'Zone',
                        'foundation'				=> 'Foundation',
                        'built_year'				=> 'Build Year',
                        'age'			        	=> 'House Age',
                        'view'			        	=> 'View',
                        'style'			        	=> 'Style',
                        'service'			    	=> 'Service',
                        'water'			    	    => 'Water Supply',
                        'construction'				=> 'Construction Material',
                        'exterior'			    	=> 'Exterior',
                        'roof'			        	=> 'Roof Material',
                        'parking_type'				=> 'Parking Type',
                        'parking_loc'				=> 'Parking Location',
                        'site_inf'	    			=> 'Site Influence',
                        'outdoor'				    => 'Outdoor Area',
                        'heating'			    	=> 'Heating Type',
                        'fireplace_fuel'			=> 'Fire Place Fuel Type',
                        'floor_finish'				=> 'Floor Finishing',
                        'features'				    => 'Included Features',
                        'amenities'			    	=> 'Amenities',
                        'include_maint_fee'			=> 'Maintenance Fee Includes',
                        'bylaw_rest'	    		=> 'By Law Restrictions',
                        'facing'    				=> 'Directional Exp Faces',
                        'stories'				    => 'Number of Stories',
                        'fireplace'			    	=> 'Number of Fireplaces',
                        'bed_count'			    	=> 'Bedroom Number',
                        'bed_bsmt'		    		=> 'Basement Bedroom Number',
                        'rm_count'				    => 'Total Room Number',
                        'kitchen_count'				=> 'Kitchen Number',
                        'halfbath_count'			=> 'Half Bathroom Number',
                        'fullbath_count'			=> 'Full Bathroom Number',
                        'bath_count'				=> 'Bathroom Number',
                        'cov_park_count'			=> 'Number of Covered Parking',
                        'parking_count'				=> 'Number of Parking',
                        'area_total'				=> 'Total Area',
                        'lot_front_ft'				=> 'Front Lot Size（sqft)',
                        'lot_front_mtr'				=> 'Front Lot Size（sqmt)',
                        'lot_depth_ft'				=> 'Lot Depth',
                        'parcel_num'				=> 'Parcel Number',
                        'lot_sqft'	    			=> 'Lot Size(sqft)',
                        'lot_acre'  				=> 'Lot Size(acre)',
                        'lot_sqmt'				    => 'Lot Size(sqmt)',
                        'lot_hect'			    	=> 'Lot Size(hect)',
                        'g_tax'		        		=> 'Gross Tax',
                        'strata_fee'	    		=> 'Strata Maintenance Fee',
                        'expected_handoff'			=> 'Expected Handoff',
                        'avaliable_quantity'		=> 'Avaliable Quantity',
                        'is_transfer'				=> 'Is Transfer',
                        'layout'				    => 'Layout',
                        'layout_diagram_urls'		=> 'Layout Diagram URL',
                        'created_at'	     		=> 'Create Date',
                        'updated_at'	        	=> 'Update Date',
                    ],
                ],
            ],

            'view' => 'View Property',
        ],

        'mls' => [
            'active'              => 'Properties',
            'deleted'             => 'Deleted Property',
            'edit'                => 'Edit Property',
            'management'          => 'MLS Properties Management',

            'table' => [
                'list_date'      => 'Upload Date',
                'area_total'     => 'Total Area',
                'city'           => 'City',
                'is_openHouse'   => 'Open House',
                'id'             => 'ID',
                'mls_number'     => 'MLS Number',
                'address'        => 'Address',
                'asking_price'   => 'Price',
            ],

            'tabs' => [
                'titles' => [
                    'overview' => 'Overview',
                ],

                'content' => [
                    'overview' => [
                        'id'	        			=> 'ID',
                        'listing_id'                => 'Listing ID',
                        'mls_number'                => 'MLS Number',
                        'area'	        			=> 'Area',
                        'asking_price'				=> 'Price',
                        'price_history'				=> 'Price History',
                        'price_history_c'			=> '[most recent, 1111.11]',
                        'unit_number'				=> 'Unit Number',
                        'address'	    			=> 'Address',
                        'city'			    	    => 'City',
                        'state'				        => 'State',
                        'postal'			    	=> 'Postal',
                        'list_date'			    	=> 'List Date',
                        'update_date'				=> 'Update Date',
                        'image_count'				=> 'Image Count',
                        'image_update_time'			=> 'Image Update Time',
                        'address_num_low'           => 'Address Number Low',
                        'latitude'			    	=> 'Latitude',
                        'longitude'				    => 'Longitude',
                        'price_sqft'				=> 'Unit Price',
                        'p_type'				    => 'Property Type',
                        'brokerage'			    	=> 'Brokerage',
                        'brokerage_default'		    => 'None',
                        'school_listing'			=> 'School List',
                        'imageURL'			    	=> 'Image URL',
                        'property_status_id'		=> 'Property Status ID',
                        'is_openHouse'				=> 'Is Open House',
                        'OH_StartDateTime'			=> 'Open House Start Date Time',
                        'OH_EndDateTime'			=> 'Open House End Date Time',
                        'description'				=> 'Description',
                        'Chinese_description'		=> 'Chinese Description',
                        'community'				    => 'Community',
                        'dwelling'				    => 'Dwelling',
                        'title_to_land'				=> 'Title to Land',
                        'zoning'				    => 'Zone',
                        'foundation'				=> 'Foundation',
                        'built_year'				=> 'Build Year',
                        'age'			        	=> 'House Age',
                        'view'			        	=> 'View',
                        'v_tour'                    => 'Virtual Tour',
                        'style'			        	=> 'Style',
                        'service'			    	=> 'Service',
                        'water'			    	    => 'Water Supply',
                        'construction'				=> 'Construction Material',
                        'exterior'			    	=> 'Exterior',
                        'roof'			        	=> 'Roof Material',
                        'parking_type'				=> 'Parking Type',
                        'parking_loc'				=> 'Parking Location',
                        'site_inf'	    			=> 'Site Influence',
                        'outdoor'				    => 'Outdoor Area',
                        'heating'			    	=> 'Heating Type',
                        'fireplace_fuel'			=> 'Fire Place Fuel Type',
                        'floor_finish'				=> 'Floor Finishing',
                        'features'				    => 'Included Features',
                        'amenities'			    	=> 'Amenities',
                        'include_maint_fee'			=> 'Maintenance Fee Includes',
                        'bylaw_rest'	    		=> 'By Law Restrictions',
                        'facing'    				=> 'Directional Exp Faces',
                        'stories'				    => 'Number of Stories',
                        'fireplace'			    	=> 'Number of Fireplaces',
                        'bed_count'			    	=> 'Bedroom Number',
                        'bed_bsmt'		    		=> 'Basement Bedroom Number',
                        'rm_count'				    => 'Total Room Number',
                        'kitchen_count'				=> 'Kitchen Number',
                        'halfbath_count'			=> 'Half Bathroom Number',
                        'fullbath_count'			=> 'Full Bathroom Number',
                        'bath_count'				=> 'Bathroom Number',
                        'cov_park_count'			=> 'Number of Covered Parking',
                        'parking_count'				=> 'Number of Parking',
                        'area_main'			        => 'Main Floor Area',
                        'area_above'	    		=> 'Above Floor Area',
                        'area_below'    			=> 'Below Floor Area',
                        'area_bsmt'		        	=> 'Basement Floor Area',
                        'area_total'				=> 'Total Area',
                        'area_unfinish'	      		=> 'Unfinished Floor Area',
                        'area_GT'			        => 'Grand Floor Area',
                        'lot_front_ft'				=> 'Front Lot Size（sqft)',
                        'lot_front_mtr'				=> 'Front Lot Size（sqmt)',
                        'lot_depth_ft'				=> 'Lot Depth',
                        'parcel_num'				=> 'Parcel Number',
                        'lot_sqft'	    			=> 'Lot Size(sqft)',
                        'lot_acre'  				=> 'Lot Size(acre)',
                        'lot_sqmt'				    => 'Lot Size(sqmt)',
                        'lot_hect'			    	=> 'Lot Size(hect)',
                        'g_tax'		        		=> 'Gross Tax',
                        'strata_fee'	    		=> 'Strata Maintenance Fee',
                        'created_at'	     		=> 'Create Date',
                        'updated_at'	        	=> 'Update Date',
                    ],
                ],
            ],

            'view' => 'View Property',
        ],

        'school' => [
            'active'              => 'Schools',
            'create'              => 'Create School',
            'deactivated'         => 'Deactivated Users',
            'deleted'             => 'Deleted School',
            'edit'                => 'Edit School',
            'management'          => 'School Management',

            'table' => [
                'id'             => 'ID',
                'name'           => 'Name',
                'address'        => 'Address',
                'city'           => 'City',
                'type'           => 'Type',
                'is_public'      => 'Public',
            ],

            'tabs' => [
                'titles' => [
                    'overview' => 'Overview',
                ],

                'content' => [
                    'overview' => [
                        'id'                    => 'ID',
                        'name'                  => 'Name',
                        'address'               => 'Address',
                        'city'                  => 'City',
                        'latitude'			    => 'Latitude',
                        'longitude'			    => 'Longitude',
                        'type'                  => 'Type',
                        'is_public'             => 'Public',
                        'school_zone'		    => 'School Zone',
                        'ranking_city'          => 'City Rank',
                        'ranking_state'         => 'State Rank',
                        'ranking_city_5_years'	=> 'City Rank in Five Years',
                        'ranking_state_5_years'	=> 'State Rank in Five Years',
                        'school_img_url'		=> 'School Image URL',
                        'created_at'			=> 'Create Date',
                        'updated_at'			=> 'Update Date',
                    ],
                ],
            ],

            'view' => 'View School',
        ],

        'pages' => [
            'create'     => 'Create Page',
            'edit'       => 'Edit Page',
            'management' => 'Page Management',
            'title'      => 'Pages',

            'table' => [
                'title'     => 'Title',
                'status'    => 'Status',
                'createdat' => 'Created At',
                'updatedat' => 'Updated At',
                'createdby' => 'Created By',
                'all'       => 'All',
            ],
        ],

        'blogcategories' => [
            'create'     => 'Create Blog Category',
            'edit'       => 'Edit Blog Category',
            'management' => 'Blog Category Management',
            'title'      => 'Blog Category',

            'table' => [
                'title'     => 'Blog Category',
                'status'    => 'Status',
                'createdat' => 'Created At',
                'createdby' => 'Created By',
                'all'       => 'All',
            ],
        ],

        'blogtags' => [
            'create'     => 'Create Blog Tag',
            'edit'       => 'Edit Blog Tag',
            'management' => 'Blog Tag Management',
            'title'      => 'Blog Tags',

            'table' => [
                'title'     => 'Blog Tag',
                'status'    => 'Status',
                'createdat' => 'Created At',
                'createdby' => 'Created By',
                'all'       => 'All',
            ],
        ],

        'blogs' => [
            'create'     => 'Create Blog',
            'edit'       => 'Edit Blog',
            'management' => 'Blog Management',
            'title'      => 'Blogs',

            'table' => [
                'title'     => 'Blog',
                'publish'   => 'PublishDateTime',
                'status'    => 'Status',
                'createdat' => 'Created At',
                'createdby' => 'Created By',
                'all'       => 'All',
            ],
        ],

        'emailtemplates' => [
            'create'     => 'Create Email Template',
            'edit'       => 'Edit Email Template',
            'management' => 'Email Template Management',
            'title'      => 'Email Templates',

            'table' => [
                'title'     => 'Title',
                'subject'   => 'Subject',
                'status'    => 'Status',
                'createdat' => 'Created At',
                'updatedat' => 'Updated At',
                'all'       => 'All',
            ],
        ],

        'settings' => [
            'edit'           => 'Edit Settings',
            'management'     => 'Settings Management',
            'title'          => 'Settings',
            'seo'            => 'SEO Settings',
            'companydetails' => 'Company Contact Details',
            'mail'           => 'Mail Settings',
            'footer'         => 'Footer Settings',
            'terms'          => 'Terms and Condition Settings',
            'google'         => 'Google Analytics Track Code',
        ],

        'faqs' => [
            'create'     => 'Create FAQ',
            'edit'       => 'Edit FAQ',
            'management' => 'FAQ Management',
            'title'      => 'FAQ',

            'table' => [
                'title'     => 'FAQs',
                'publish'   => 'PublishDateTime',
                'status'    => 'Status',
                'createdat' => 'Created At',
                'createdby' => 'Created By',
                'answer'    => 'Answer',
                'question'  => 'Question',
                'updatedat' => 'Updated At',
                'all'       => 'All',
            ],
        ],

        'menus' => [
            'create'     => 'Create Menu',
            'edit'       => 'Edit Menu',
            'management' => 'Menu Management',
            'title'      => 'Menus',

            'table' => [
                'name'      => 'Name',
                'type'      => 'Type',
                'createdat' => 'Created At',
                'createdby' => 'Created By',
                'all'       => 'All',
            ],
            'field' => [
                'name'      => 'Name',
                'type'      => 'Type',
                'items'     => 'Menu Items',
                'url'       => 'URL',
                'url_type'  => 'URL Type',
                'url_types' => [
                  'route'  => 'Route',
                  'static' => 'Static',
                ],
                'open_in_new_tab'    => 'Open URL in new tab',
                'view_permission_id' => 'Permission',
                'icon'               => 'Icon Class',
                'icon_title'         => 'Font Awesome Class. eg. fa-edit',
            ],
        ],

        'modules' => [
            'create'     => 'Create Module',
            'management' => 'Module Management',
            'title'      => 'Module',
            'edit'       => 'Edit Module',

            'table' => [
                'name'               => 'Module Name',
                'url'                => 'Module View Route',
                'view_permission_id' => 'View Permission',
                'created_by'         => 'Created By',
            ],

            'form' => [
                'name'                  => 'Module Name',
                'url'                   => 'View Route',
                'view_permission_id'    => 'View Permission',
                'directory_name'        => 'Directory Name',
                'namespace'             => 'Namespace',
                'model_name'            => 'Model Name',
                'controller_name'       => 'Controller &nbsp;Name',
                'resource_controller'   => 'Resourceful Controller',
                'table_controller_name' => 'Controller &nbsp;Name',
                'table_name'            => 'Table Name',
                'route_name'            => 'Route Name',
                'route_controller_name' => 'Controller &nbsp;Name',
                'resource_route'        => 'Resourceful Routes',
                'views_directory'       => 'Directory &nbsp;&nbsp;&nbsp;Name',
                'index_file'            => 'Index',
                'create_file'           => 'Create',
                'edit_file'             => 'Edit',
                'form_file'             => 'Form',
                'repo_name'             => 'Repository Name',
                'event'                 => 'Event Name',
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button'    => 'Register',
            'remember_me'        => 'Remember Me',
        ],

        'passwords' => [
            'forgot_password'                 => 'Forgot Your Password?',
            'reset_password_box_title'        => 'Reset Password',
            'reset_password_button'           => 'Reset Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'macros' => [
            'country' => [
                'alpha'   => 'Country Alpha Codes',
                'alpha2'  => 'Country Alpha 2 Codes',
                'alpha3'  => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us'     => [
                    'us'       => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed'    => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'last_updated'       => 'Last Updated',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'address'            => 'Address',
                'state'              => 'State',
                'city'               => 'City',
                'zipcode'            => 'Zip Code',
                'ssn'                => 'SSN',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
