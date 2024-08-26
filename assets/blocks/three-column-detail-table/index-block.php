
<?php
/**
 * Block Name: Icon Selection Table
 * Description: A custom block for displaying a three-column table with icon selection.
 * Author: Zahaira Zafar
 * Version: 1.0
 */

// Getting Block Variables
$block_title = get_field('tcdt_block_title');
?>

<section class="icon-selection-table-block">
    <div class="inner-wrap">
        <?php if($block_title){ ?>
            <h2 class="head" style="text-align: center;"><?php echo esc_html($block_title); ?></h2>
        <?php } ?>

        <?php
        // Check if rows exist in the repeater field.
        if( have_rows('tcdt_sub_section') ):

            // Loop through each row in the repeater field.
            while( have_rows('tcdt_sub_section') ) : the_row();

                // Load sub-field values.
                $title = get_sub_field('tcdt_sub_section_heading');
                $description = get_sub_field('detail_tabledesc');
                $icon_select = get_sub_field('select_sub_heading_icon_tcdt');
                $icon_image = get_sub_field('sub_heading_icon_tcdt'); 

                // Define the icon URL based on the selection.
                if ($icon_select === 'yes') {
                   $icon_url = '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmx9oPCPgZhBCaGynHYNb8jj8mYlA6tPpdzw&s" alt="Icon" class="icon-img" />';
                } elseif ($icon_select === 'no') {
                    $icon_url = '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZmGYRHccGe8jEiv6iBxrO1z7JEbfu-Bt2TQ&s" alt="Icon" class="icon-img" />';
                } elseif ($icon_select === 'icon') {
                    $icon_url = wp_get_attachment_image($icon_image, 'full'); // Assuming $icon_image is an image field
                } else {
                    $icon_url = ''; // No icon selected or invalid option provided
                }
                ?>

                <div class="table-row">
                    <div class="table-leftcol">
                        <?php if ($icon_url): ?>
                            <div class="icon-cell">
                                <?php echo $icon_url ?>
                            </div>
                        <?php endif; ?>

                        <?php if($title): ?>
                            <div class="title-cell">
                                <span><?php echo esc_html($title); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if($description): ?>
                        <div class="description-cellinner">
                            <?php echo wp_kses_post($description); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
