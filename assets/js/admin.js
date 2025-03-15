jQuery(document).ready(function($) {
    // Function to switch tabs
    function switchTab(tabId) {
        // Hide all tab content
        $('.ssb_settings_container').hide();

        // Show the selected tab content
        $('#' + tabId + '-tab-content').show();

        // Remove 'nav-tab-active' class from all tabs
        $('.nav-tab').removeClass('nav-tab-active');

        // Add 'nav-tab-active' class to the clicked tab
        $('#' + tabId + '-tab').addClass('nav-tab-active');
    }

    // Handle tab click events
    $('.nav-tab').on('click', function(e) {
        e.preventDefault(); // Prevent default link behavior

        // Get the tab ID from the clicked tab's href attribute
        var tabId = $(this).attr('href').replace('#', '');

        // Switch to the selected tab
        switchTab(tabId);
    });

    // Show the default tab on page load
    var defaultTab = $('.nav-tab-wrapper .nav-tab:first').attr('href').replace('#', '');
    switchTab(defaultTab);
});

jQuery(document).ready(function($) {
    // Make the lists sortable and connect them
    $(".sortable-list").sortable({
        connectWith: ".sortable-list",
        update: function(event, ui) {
            updateHiddenFields();
        }
    }).disableSelection();

    // Function to update hidden input fields with the current order
    function updateHiddenFields() {
        var activeButtons = [];
        $("#active-buttons .sortable-item").each(function() {
            activeButtons.push($(this).text());
        });

        var inactiveButtons = [];
        $("#inactive-buttons .sortable-item").each(function() {
            inactiveButtons.push($(this).text());
        });

        $("#social-share-active-buttons").val(activeButtons.join(','));
        $("#social-share-inactive-buttons").val(inactiveButtons.join(','));
    }
});