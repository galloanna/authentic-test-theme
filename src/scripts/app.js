jQuery( window ).load(function() {
jQuery(document).ready(function() {
    jQuery('.toggle').click(function() {
        jQuery(this).toggleClass('opened');
        jQuery('.nav-menu').toggleClass('active');
    });
});
});