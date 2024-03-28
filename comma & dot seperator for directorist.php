add_action('wp_footer', 'modify_listing_price_display');

function modify_listing_price_display() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Loop through each matching element
            $('span.directorist-listing-price').each(function() {
                // Get the text content of the span
                var priceText = $(this).text();
                // Extract only the integer part before the comma or dot separator
                var mainNumber = priceText.split(/[\.,]/)[0];
                // Update the content of the span with the modified number and text
                $(this).text(mainNumber + ' EUR/Stunde');
            });
        });
    </script>
    <?php
}
