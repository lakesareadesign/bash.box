<?php
class post_type_requirements_checklist_settings {
	/**
	 * Unique identifier for your plugin.
	 *
	 *
	 * Call $plugin_slug from public plugin class later.
	 *
	 * @since    1.0
	 * @var      string
	 */
	protected $plugin_slug = null;
	/**
	 * Instance of this class.
	 *
	 * @since    1.0
	 * @var      object
	 */
	protected static $instance = null;
	/**
	 * Initialize the plugin by setting localization and loading public scripts
	 * and styles.
	 *
	 * @since     1.0
	 */
	private function __construct() {
		$plugin = post_type_requirements_checklist::get_instance();
		$this->plugin_slug = $plugin->get_plugin_slug();
		// Add settings page
		add_action( 'admin_init', array( $this, 'admin_init' ) );
		add_action( 'admin_print_styles', array( $this, 'is_settings_page' ) );
	}
	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	/**
	 * enqueue styles
	 *
	 * @param  string $content HTML string
	 *
	 * @since 1.0
	 */
	public function is_settings_page(){

		wp_enqueue_style('aptrc-settings-style', plugins_url( '../css/aptrc-settings.css', __FILE__ ) );

	} // end is_settings_page

	/**
	 * Registering the Sections, Fields, and Settings.
	 *
	 * This function is registered with the 'admin_init' hook.
	 */
	public function admin_init() {
		$plugin = post_type_requirements_checklist::get_instance();
		$post_types = $plugin->supported_post_types();
		$defaults = array(
				// order defined by Parameters reference at http://codex.wordpress.org/Function_Reference/post_type_supports
				'title' => '',
				'editor' => '',
				'thumbnail' => '',
				'excerpt' => '',
				'categories' => '',
				'tags' => '',
				'custom' => ''
			);

		foreach ( $post_types as $pt ) {
			$post_object = get_post_type_object( $pt );
			$section = $this->plugin_slug . '_' . $pt;
			if ( false == get_option( $section ) ) {
				add_option( $section, apply_filters( $section . '_default_settings', $defaults ) );
			}
			$args = array( $section, get_option( $section ) );
			add_settings_section(
				$pt,
				__( 'Content Requirements:', $this->plugin_slug ),
				'',
				$section
			);

			if ( post_type_supports( $pt, 'title' )) {
				add_settings_field(
					'title_check',
					__( 'Title:', $this->plugin_slug ),
					array( $this, 'title_check_callback' ),
					$section,
					$pt,
					$args
				);
			}

			if ( post_type_supports( $pt, 'editor' )) {
				add_settings_field(
					'editor_check',
					__( 'WYSIWYG Editor:', $this->plugin_slug ),
					array( $this, 'editor_check_callback' ),
					$section,
					$pt,
					$args
				);
			}

			if ( post_type_supports( $pt, 'thumbnail' )) {
				add_settings_field(
					'thumbnail_check',
					__( 'Featured Image:', $this->plugin_slug ),
					array( $this, 'thumbnail_check_callback' ),
					$section,
					$pt,
					$args
				);
			}

			if ( post_type_supports( $pt, 'excerpt' ) ) {
				add_settings_field(
					'excerpt_check',
					__( 'Excerpt:', $this->plugin_slug ),
					array( $this, 'excerpt_check_callback' ),
					$section,
					$pt,
					$args
				);
			}

			// category tag tip
			if ( 'page' != $pt) {
				$objtaxs = get_object_taxonomies( $pt );
				if ( !( $objtaxs == null ) ) {
					add_settings_section(
						'tax_' . $pt,
						__( 'Taxonomy Requirements:', $this->plugin_slug ),
						'',
						$section
					);
					add_settings_field(
						'CatTagTip',
						__( '', $this->plugin_slug ),
						array( $this, 'CatTagTip' ),
						$section,
						'tax_' . $pt,
						$args
					);
				}
			}

			if ( is_object_in_taxonomy( $pt, 'category' ) ) {
				add_settings_field(
					'categories_check',
					__( 'Categories:', $this->plugin_slug ),
					array( $this, 'categories_check_callback' ),
					$section,
					'tax_' . $pt,
					$args
				);
				// minimum
				add_settings_field(
					'categories_dropdown',
					__( '', $this->plugin_slug ),
					array( $this, 'categories_dropdown_callback' ),
					$section,
					'tax_' . $pt,
					$args
				);
				// maximum
				add_settings_field(
					'categories_max_dropdown',
					__( '', $this->plugin_slug ),
					array( $this, 'categories_max_dropdown_callback' ),
					$section,
					'tax_' . $pt,
					$args
				);
			}

			if ( is_object_in_taxonomy( $pt, 'post_tag' ) ) {
				add_settings_field(
					'tags_check',
					__( 'Tags:', $this->plugin_slug ),
					array( $this, 'tags_check_callback' ),
					$section,
					'tax_' . $pt,
					$args
				);
				// minimum
				add_settings_field(
					'tags_dropdown',
					__( '', $this->plugin_slug ),
					array( $this, 'tags_dropdown_callback' ),
					$section,
					'tax_' . $pt,
					$args
				);
				// maximum
				add_settings_field(
					'tags_max_dropdown',
					__( '', $this->plugin_slug ),
					array( $this, 'tags_max_dropdown_callback' ),
					$section,
					'tax_' . $pt,
					$args
				);
			}	

			$argums = array(
			    'public'   => true,
			    '_builtin' => false
			); 
			$outputs = 'names'; // or objects
			$operators = 'and'; // 'and' or 'or'
			$taxonomy_names = get_taxonomies( $argums, $outputs, $operators );
			$x = '1';
			foreach ( $taxonomy_names as $tn ) {

				if ( is_object_in_taxonomy( $pt, $tn ) ) {
					if ( is_taxonomy_hierarchical( $tn ) ) {
						add_settings_field(
							'hierarchical_check_'.$x,
							__( $tn.'s <span>(category):</span>', $this->plugin_slug ),
							array( $this, 'hierarchical_check_callback_'.$x ),
							$section,
							'tax_' . $pt,
							$args
						);
						// minimum
						add_settings_field(
							'hierarchical_dropdown_'.$x,
							__( '', $this->plugin_slug ),
							array( $this, 'hierarchical_dropdown_callback_'.$x ),
							$section,
							'tax_' . $pt,
							$args
						);
						// maximum
						add_settings_field(
							'hierarchical_max_dropdown_'.$x,
							__( '', $this->plugin_slug ),
							array( $this, 'hierarchical_max_dropdown_callback_'.$x ),
							$section,
							'tax_' . $pt,
							$args
						);
					}

					else {
						add_settings_field(
							'flat_check'.$x,
							__( $tn.'s <span>(tag):</span>', $this->plugin_slug ),
							array( $this, 'flat_check_callback_'.$x ),
							$section,
							'tax_' . $pt,
							$args
						);
						// minimum
						add_settings_field(
							'flat_dropdown'.$x,
							__( '', $this->plugin_slug ),
							array( $this, 'flat_dropdown_callback_'.$x ),
							$section,
							'tax_' . $pt,
							$args
						);
						// maximum
						add_settings_field(
							'flat_max_dropdown_'.$x,
							__( '', $this->plugin_slug ),
							array( $this, 'flat_max_dropdown_callback_'.$x ),
							$section,
							'tax_' . $pt,
							$args
						);
					}
				}

				$x++;					
			}





			register_setting(
				$section,
				$section
			);
		}
	} // end admin_init

// TITLE
	public function title_check_callback( $args ) {
		$output = $args[0].'[title_check]';
		$value  = isset( $args[1]['title_check'] ) ? $args[1]['title_check'] : '';

		$checkhtml = '<input type="checkbox" id="title_check" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="title_check"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} // end 

// EDITOR
	public function editor_check_callback( $args ) {
		$output = $args[0].'[editor_check]';
		$value  = isset( $args[1]['editor_check'] ) ? $args[1]['editor_check'] : '';

		$checkhtml = '<input type="checkbox" id="editor_check" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="editor_check"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} // end 

// FEATURED IMAGE
	public function thumbnail_check_callback( $args ) {
		$output = $args[0].'[thumbnail_check]';
		$value  = isset( $args[1]['thumbnail_check'] ) ? $args[1]['thumbnail_check'] : '';

		$checkhtml = '<input type="checkbox" id="thumbnail_check" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="thumbnail_check"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} // end 

// EXCERPT
	public function excerpt_check_callback( $args ) {
		$output = $args[0].'[excerpt_check]';
		$value  = isset( $args[1]['excerpt_check'] ) ? $args[1]['excerpt_check'] : '';

		$checkhtml = '<input type="checkbox" id="excerpt_check" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="excerpt_check"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} // end 

	public function CatTagTip( $args ) {
		$html = '<div id="toggle"><p>' . __( 'As a general rule, a post should have a maximum of 3 categories and no more than 30 combined Categories, Tags and Custom Taxonomies - both for SEO value and to keep post creation/load time to a minimum.  Requirements Checklist allows for more only to accommodate large sites with previously added taxonomies.', $this->plugin_slug ) . '</p></div>';
	    echo $html;
	}

// CATEGORIES
	public function categories_check_callback( $args ) {
		$output = $args[0].'[categories_check]';
		$value  = isset( $args[1]['categories_check'] ) ? $args[1]['categories_check'] : '';

		$checkhtml = '<input type="checkbox" id="categories_check" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="categories_check"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	}

		public function categories_dropdown_callback( $args ) {
			$output = $args[0].'[categories_dropdown]';
			$value  = isset( $args[1]['categories_dropdown'] ) ? $args[1]['categories_dropdown'] : '';

			$html = '<select id="categories_dropdown" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="categories_dropdown"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} 

		public function categories_max_dropdown_callback( $args ) {
			$output = $args[0].'[categories_max_dropdown]';
			$value  = isset( $args[1]['categories_max_dropdown'] ) ? $args[1]['categories_max_dropdown'] : '';

			$html = '<select id="categories_max_dropdown" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="categories_max_dropdown"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	
	    	echo $html;
		} // end

// TAGS
	public function tags_check_callback( $args ) {
		$output = $args[0].'[tags_check]';
		$value  = isset( $args[1]['tags_check'] ) ? $args[1]['tags_check'] : '';

		$checkhtml = '<input type="checkbox" id="tags_check" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="tags_check"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} // end tags_check_callback

		public function tags_dropdown_callback( $args ) {
			$output = $args[0].'[tags_dropdown]';
			$value  = isset( $args[1]['tags_dropdown'] ) ? $args[1]['tags_dropdown'] : '';

			$html = '<select id="tags_dropdown" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="tags_dropdown"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} //

		public function tags_max_dropdown_callback( $args ) {
			$output = $args[0].'[tags_max_dropdown]';
			$value  = isset( $args[1]['tags_max_dropdown'] ) ? $args[1]['tags_max_dropdown'] : '';

			$html = '<select id="tags_max_dropdown" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	        $html .= '<option value="7"' . selected( 7, $value, false) . '>7</option>';
	        $html .= '<option value="10"' . selected( 10, $value, false) . '>10</option>';
	        $html .= '<option value="15"' . selected( 15, $value, false) . '>15</option>';
	        $html .= '<option value="25"' . selected( 25, $value, false) . '>25</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="tags_max_dropdown"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	       
	    	echo $html;
		} // end 

	
// CUSTOM TAX 1
	public function hierarchical_check_callback_1( $args ) {
		$output = $args[0].'[hierarchical_check_1]';
		$value  = isset( $args[1]['hierarchical_check_1'] ) ? $args[1]['hierarchical_check_1'] : '';

		$checkhtml = '<input type="checkbox" id="hierarchical_check_1" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="hierarchical_check_1"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	}

		public function hierarchical_dropdown_callback_1( $args ) {
			$output = $args[0].'[hierarchical_dropdown_1]';
			$value  = isset( $args[1]['hierarchical_dropdown_1'] ) ? $args[1]['hierarchical_dropdown_1'] : '';

			$html = '<select id="hierarchical_dropdown_1" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="hierarchical_dropdown_1"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';		     
	    	echo $html;
		} 

		public function hierarchical_max_dropdown_callback_1( $args ) {
			$output = $args[0].'[hierarchical_max_dropdown_1]';
			$value  = isset( $args[1]['hierarchical_max_dropdown_1'] ) ? $args[1]['hierarchical_max_dropdown_1'] : '';

			$html = '<select id="hierarchical_max_dropdown_1" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="hierarchical_max_dropdown_1"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';  
	    	echo $html;
		} // end

	public function flat_check_callback_1( $args ) {
		$output = $args[0].'[flat_check_1]';
		$value  = isset( $args[1]['flat_check_1'] ) ? $args[1]['flat_check_1'] : '';

		$checkhtml = '<input type="checkbox" id="flat_check_1" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="flat_check_1"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function flat_dropdown_callback_1( $args ) {
			$output = $args[0].'[flat_dropdown_1]';
			$value  = isset( $args[1]['flat_dropdown_1'] ) ? $args[1]['flat_dropdown_1'] : '';

			$html = '<select id="flat_dropdown_1" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
        	$html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="flat_dropdown_1"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} // 

		public function flat_max_dropdown_callback_1( $args ) {
			$output = $args[0].'[flat_max_dropdown_1]';
			$value  = isset( $args[1]['flat_max_dropdown_1'] ) ? $args[1]['flat_max_dropdown_1'] : '';

			$html = '<select id="flat_max_dropdown_1" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	        $html .= '<option value="7"' . selected( 7, $value, false) . '>7</option>';
	        $html .= '<option value="10"' . selected( 10, $value, false) . '>10</option>';
	        $html .= '<option value="15"' . selected( 15, $value, false) . '>15</option>';
	        $html .= '<option value="25"' . selected( 25, $value, false) . '>25</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="flat_max_dropdown_1"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	    
	    	echo $html;
		} // end 

// CUSTOM TAX 2
	public function hierarchical_check_callback_2( $args ) {
		$output = $args[0].'[hierarchical_check_2]';
		$value  = isset( $args[1]['hierarchical_check_2'] ) ? $args[1]['hierarchical_check_2'] : '';

		$checkhtml = '<input type="checkbox" id="hierarchical_check_2" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="hierarchical_check_2"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function hierarchical_dropdown_callback_2( $args ) {
			$output = $args[0].'[hierarchical_dropdown_2]';
			$value  = isset( $args[1]['hierarchical_dropdown_2'] ) ? $args[1]['hierarchical_dropdown_2'] : '';

			$html = '<select id="hierarchical_dropdown_2" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="hierarchical_dropdown_2"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} 

		public function hierarchical_max_dropdown_callback_2( $args ) {
			$output = $args[0].'[hierarchical_max_dropdown_2]';
			$value  = isset( $args[1]['hierarchical_max_dropdown_2'] ) ? $args[1]['hierarchical_max_dropdown_2'] : '';

			$html = '<select id="hierarchical_max_dropdown_2" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="hierarchical_max_dropdown_2"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	
	    	echo $html;
		} // end

	public function flat_check_callback_2( $args ) {
		$output = $args[0].'[flat_check_2]';
		$value  = isset( $args[1]['flat_check_2'] ) ? $args[1]['flat_check_2'] : '';

		$checkhtml = '<input type="checkbox" id="flat_check_2" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="flat_check_2"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function flat_dropdown_callback_2( $args ) {
			$output = $args[0].'[flat_dropdown_2]';
			$value  = isset( $args[1]['flat_dropdown_2'] ) ? $args[1]['flat_dropdown_2'] : '';

			$html = '<select id="flat_dropdown_2" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
        	$html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="flat_dropdown_2"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} //

		public function flat_max_dropdown_callback_2( $args ) {
			$output = $args[0].'[flat_max_dropdown_2]';
			$value  = isset( $args[1]['flat_max_dropdown_2'] ) ? $args[1]['flat_max_dropdown_2'] : '';

			$html = '<select id="flat_max_dropdown_2" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	        $html .= '<option value="7"' . selected( 7, $value, false) . '>7</option>';
	        $html .= '<option value="10"' . selected( 10, $value, false) . '>10</option>';
	        $html .= '<option value="15"' . selected( 15, $value, false) . '>15</option>';
	        $html .= '<option value="25"' . selected( 25, $value, false) . '>25</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="flat_max_dropdown_2"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';     
	    	echo $html;
		} // end 

// CUSTOM TAX 3
	public function hierarchical_check_callback_3( $args ) {
		$output = $args[0].'[hierarchical_check_3]';
		$value  = isset( $args[1]['hierarchical_check_3'] ) ? $args[1]['hierarchical_check_3'] : '';

		$checkhtml = '<input type="checkbox" id="hierarchical_check_3" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="hierarchical_check_3"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function hierarchical_dropdown_callback_3( $args ) {
			$output = $args[0].'[hierarchical_dropdown_3]';
			$value  = isset( $args[1]['hierarchical_dropdown_3'] ) ? $args[1]['hierarchical_dropdown_3'] : '';

			$html = '<select id="hierarchical_dropdown_3" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="hierarchical_dropdown_3"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} 

		public function hierarchical_max_dropdown_callback_3( $args ) {
			$output = $args[0].'[hierarchical_max_dropdown_3]';
			$value  = isset( $args[1]['hierarchical_max_dropdown_3'] ) ? $args[1]['hierarchical_max_dropdown_3'] : '';

			$html = '<select id="hierarchical_max_dropdown_3" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="hierarchical_max_dropdown_3"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	  
	    	echo $html;
		} // end

	public function flat_check_callback_3( $args ) {
		$output = $args[0].'[flat_check_3]';
		$value  = isset( $args[1]['flat_check_3'] ) ? $args[1]['flat_check_3'] : '';

		$checkhtml = '<input type="checkbox" id="flat_check_3" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="flat_check_3"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function flat_dropdown_callback_3( $args ) {
			$output = $args[0].'[flat_dropdown_3]';
			$value  = isset( $args[1]['flat_dropdown_3'] ) ? $args[1]['flat_dropdown_3'] : '';

			$html = '<select id="flat_dropdown_3" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
        	$html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="flat_dropdown_3"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} // 

		public function flat_max_dropdown_callback_3( $args ) {
			$output = $args[0].'[flat_max_dropdown_3]';
			$value  = isset( $args[1]['flat_max_dropdown_3'] ) ? $args[1]['flat_max_dropdown_3'] : '';

			$html = '<select id="flat_max_dropdown_3" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	        $html .= '<option value="7"' . selected( 7, $value, false) . '>7</option>';
	        $html .= '<option value="10"' . selected( 10, $value, false) . '>10</option>';
	        $html .= '<option value="15"' . selected( 15, $value, false) . '>15</option>';
	        $html .= '<option value="25"' . selected( 25, $value, false) . '>25</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="flat_max_dropdown_3"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	   
	    	echo $html;
		} // end 

// CUSTOM TAX 4
	public function hierarchical_check_callback_4( $args ) {
		$output = $args[0].'[hierarchical_check_4]';
		$value  = isset( $args[1]['hierarchical_check_4'] ) ? $args[1]['hierarchical_check_4'] : '';

		$checkhtml = '<input type="checkbox" id="hierarchical_check_4" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="hierarchical_check_4"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function hierarchical_dropdown_callback_4( $args ) {
			$output = $args[0].'[hierarchical_dropdown_4]';
			$value  = isset( $args[1]['hierarchical_dropdown_4'] ) ? $args[1]['hierarchical_dropdown_4'] : '';

			$html = '<select id="hierarchical_dropdown_4" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="hierarchical_dropdown_4"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} 

		public function hierarchical_max_dropdown_callback_4( $args ) {
			$output = $args[0].'[hierarchical_max_dropdown_4]';
			$value  = isset( $args[1]['hierarchical_max_dropdown_4'] ) ? $args[1]['hierarchical_max_dropdown_4'] : '';

			$html = '<select id="hierarchical_max_dropdown_4" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="hierarchical_max_dropdown_4"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';   
	    	echo $html;
		} // end

	public function flat_check_callback_4( $args ) {
		$output = $args[0].'[flat_check_4]';
		$value  = isset( $args[1]['flat_check_4'] ) ? $args[1]['flat_check_4'] : '';

		$checkhtml = '<input type="checkbox" id="flat_check_4" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="flat_check_4"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function flat_dropdown_callback_4( $args ) {
			$output = $args[0].'[flat_dropdown_4]';
			$value  = isset( $args[1]['flat_dropdown_4'] ) ? $args[1]['flat_dropdown_4'] : '';

			$html = '<select id="flat_dropdown_3" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
        	$html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="flat_dropdown_4"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} // 

		public function flat_max_dropdown_callback_4( $args ) {
			$output = $args[0].'[flat_max_dropdown_4]';
			$value  = isset( $args[1]['flat_max_dropdown_4'] ) ? $args[1]['flat_max_dropdown_4'] : '';

			$html = '<select id="flat_max_dropdown_4" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	        $html .= '<option value="7"' . selected( 7, $value, false) . '>7</option>';
	        $html .= '<option value="10"' . selected( 10, $value, false) . '>10</option>';
	        $html .= '<option value="15"' . selected( 15, $value, false) . '>15</option>';
	        $html .= '<option value="25"' . selected( 25, $value, false) . '>25</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="flat_max_dropdown_4"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	    
	    	echo $html;
		} // end 

// CUSTOM TAX 5
	public function hierarchical_check_callback_5( $args ) {
		$output = $args[0].'[hierarchical_check_5]';
		$value  = isset( $args[1]['hierarchical_check_5'] ) ? $args[1]['hierarchical_check_5'] : '';

		$checkhtml = '<input type="checkbox" id="hierarchical_check_5" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="hierarchical_check_5"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function hierarchical_dropdown_callback_5( $args ) {
			$output = $args[0].'[hierarchical_dropdown_5]';
			$value  = isset( $args[1]['hierarchical_dropdown_5'] ) ? $args[1]['hierarchical_dropdown_5'] : '';

			$html = '<select id="hierarchical_dropdown_5" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="hierarchical_dropdown_5"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} 

		public function hierarchical_max_dropdown_callback_5( $args ) {
			$output = $args[0].'[hierarchical_max_dropdown_5]';
			$value  = isset( $args[1]['hierarchical_max_dropdown_5'] ) ? $args[1]['hierarchical_max_dropdown_5'] : '';

			$html = '<select id="hierarchical_max_dropdown_5" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="hierarchical_max_dropdown_5"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';	  
	    	echo $html;
		} // end

	public function flat_check_callback_5( $args ) {
		$output = $args[0].'[flat_check_5]';
		$value  = isset( $args[1]['flat_check_5'] ) ? $args[1]['flat_check_5'] : '';

		$checkhtml = '<input type="checkbox" id="flat_check_5" name="' . $output . '" value="1"' . checked( 1, $value, false ) . ' />';
		$checkhtml .= '<label for="flat_check_5"> ' . __( 'check to require', $this->plugin_slug ) . '</label>';
		echo $checkhtml;
	} 

		public function flat_dropdown_callback_5( $args ) {
			$output = $args[0].'[flat_dropdown_5]';
			$value  = isset( $args[1]['flat_dropdown_5'] ) ? $args[1]['flat_dropdown_5'] : '';

			$html = '<select id="flat_dropdown_5" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
        	$html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown" for="flat_dropdown_5"> ' . __( 'minimum required to publish', $this->plugin_slug ) . '</label>';	     
	    	echo $html;
		} // 

		public function flat_max_dropdown_callback_5( $args ) {
			$output = $args[0].'[flat_max_dropdown_5]';
			$value  = isset( $args[1]['flat_max_dropdown_callback_5'] ) ? $args[1]['flat_max_dropdown_callback_5'] : '';

			$html = '<select id="flat_max_dropdown_5" name="' . $output . '">';
	        $html .= '<option value="1"' . selected( 1, $value, false) . '>1</option>';
	        $html .= '<option value="2"' . selected( 2, $value, false) . '>2</option>';
	        $html .= '<option value="3"' . selected( 3, $value, false) . '>3</option>';
	        $html .= '<option value="4"' . selected( 4, $value, false) . '>4</option>';
	        $html .= '<option value="5"' . selected( 5, $value, false) . '>5</option>';
	        $html .= '<option value="7"' . selected( 7, $value, false) . '>7</option>';
	        $html .= '<option value="10"' . selected( 10, $value, false) . '>10</option>';
	        $html .= '<option value="15"' . selected( 15, $value, false) . '>15</option>';
	        $html .= '<option value="25"' . selected( 25, $value, false) . '>25</option>';
	        $html .= '<option value="1000"' . selected( 1000, $value, false) . '>&#8734;</option>';
	    	$html .= '</select>';
	    	$html .= '<label class="dropdown max" for="flat_max_dropdown_5"> ' . __( 'maximum allowed', $this->plugin_slug ) . '</label>';		     
	    	echo $html;
		} // end 

}
post_type_requirements_checklist_settings::get_instance();