
// Function to register custom ACF block -------------------------
function register_custom_acf_blocks() {
    // Register a custom ACF block called "Three-Column Detail Table"
    acf_register_block(array(
       // Unique name for the block
        'name'              => 'three-column-detail-table', 
        'title'             => __('Three-Column Detail Table'), // Title displayed in the Gutenberg editor
        'description'       => __('Three-Column Detail Table Block.'), // Short description of the block
        'render_template'   => 'assets/blocks/three-column-detail-table/index-block.php', // Path to the template file used to render the block
        'category'          => 'formatting', // Category under which the block will be listed
        'icon'              => '<svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                                <!-- SVG code for the block icon - You can also use DashIcon -->
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M47.6,29.2h-8c-1.3,0-2.4-1.1-2.4-2.4v-1.6 
                                c0-1.3,1.1-2.4,2.4-2.4h8c1.3,0,2.4,1.1,2.4,2.4v1.6C50,28.1,48.9,29.2,47.6,29.2"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30,29.2h-8c-1.3,0-2.4-1.1-2.4-2.4v-1.6 
                                c0-1.3,1.1-2.4,2.4-2.4h8c1.3,0,2.4,1.1,2.4,2.4v1.6C32.4,28.1,31.3,29.2,30,29.2"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4,29.2h-8C3,29.2,2,28.1,2,26.8v-1.6 
                                c0-1.3,1.1-2.4,2.4-2.4h8c1.3,0,2.4,1.1,2.4,2.4v1.6C14.8,28.1,13.7,29.2,12.4,29.2"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M43.6,34H8.4c-1.8,0-3.2,1.4-3.2,3.2v8c0,1.8,1.4,3.2,3.2,3.2h35.2 
                                c1.8,0,3.2-1.4,3.2-3.2v-8C46.8,35.4,45.3,34,43.6,34z M42,42.8c0,0.4-0.4,0.8-0.8,0.8H10.8c-0.4,0-0.8-0.4-0.8-0.8v-3.2 
                                c0-0.4,0.4-0.8,0.8-0.8h30.4c0.4,0,0.8,0.4,0.8,0.8V42.8z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M43.6,3.6H8.4C6.6,3.6,5.2,5,5.2,6.8v8c0,1.8,1.4,3.2,3.2,3.2h35.2 
                                c1.8,0,3.2-1.4,3.2-3.2v-8C46.8,5,45.3,3.6,43.6,3.6z M42,12.4c0,0.4-0.4,0.8-0.8,0.8H10.8c-0.4,0-0.8-0.4-0.8-0.8V9.2 
                                c0-0.4,0.4-0.8,0.8-0.8h30.4c0.4,0,0.8,0.4,0.8,0.8V12.4z"/> 
                                </svg>', 
        'keywords'          => array('Template', 'Accordion', 'acf', 'acf block'), // Keywords to help users find the block in the editor
    ));
}

// Hook the function into 'acf/init' to register the block when ACF initializes
add_action('acf/init', 'register_custom_acf_blocks');
