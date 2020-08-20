jQuery( window ).load(function() {
jQuery(document).ready(function() {
    jQuery('.mobile-menu-open').click(function() {
        jQuery('.nav-menu').toggleClass('active');
        jQuery('.mobile-menu-close').css("visibility", "visible");
    });
    jQuery('.mobile-menu-close').click(function() {
        jQuery('.nav-menu').toggleClass('active');
        jQuery(this).css("visibility", "hidden");
    });
});
});