<?php

/*  |-------------------------|
    | KR34T3-Release-System   |
    | English Translation v.1 |
    |-------------------------|
    | Created by              |
    | Saintly2k & Kleineick   |
    | Project H33T x HENAI.eu |
    | Come visit us :)        |
    |-------------------------|
    | Last Updated:           |
    | 10.01.2022 - 16:46      |
    |-------------------------| */

// This shows if someone has Javascript disabled which will lead to not be able to download + some more functions (especially admin) not working
$lang["notice"] = "It seems like your Browser is blocking Javascript making some core functions unavailable.";

/* NAVIGATION */
$lang["nav"]["menu"] = "Menu"; // Menu Name
$lang["nav"]["recent"] = "Recent"; // Recent Mainpage/Homepage
$lang["nav"]["search"] = "Search"; // Search Mainpage
$lang["nav"]["about"] = "About"; // About  Page
$lang["nav"]["admin"] = "Admin"; // Admin Login/Home
$lang["nav"]["main"] = "Main"; // Admin Main Settings
$lang["nav"]["user"] = "User"; // Admin User Settings
$lang["nav"]["new"] = "New"; // Admin New Release Page
$lang["nav"]["cats"] = "Cats"; // Admin Categories short name
$lang["nav"]["note"] = "Note"; // Admin Authors Note Pgae
$lang["nav"]["logout"] = "Logout"; // Logout

/* PAGE TITLES */
// Imagine $pagination is a number, like 5 or so
$lang["title"]["recent"] = "Recent - Page "; // Recent Page Title
$lang["title"]["search_home"] = "Search - Home"; // Search Mainpage
$lang["title"]["search_act"] = "Searching"; // Searching Page
$lang["title"]["about"] = "About"; // About Page Title
$lang["title"]["view"] = "View Release"; // View Release Page
$lang["title"]["admin_home"] = "Admin - Home"; // Admin Homepage
$lang["title"]["admin_logout"] = "Admin - Logout"; // Admin Logout Title
$lang["title"]["admin_note"] = "Admin - Note of the Author(s)"; // Admin Note of the Author Title
$lang["title"]["admin_settings"] = "Admin - Main Settings"; // Admin Main settings Title
$lang["title"]["admin_release"] = "Admin - New Release"; // Admin New Release Title
$lang["title"]["admin_cats"] = "Admin - Manage Categories"; // Admin Edit Categories Title
$lang["title"]["admin_edit"] = "Admin - Edit Release"; // Admin Edit Release Title
$lang["title"]["admin_users"] = "Admin - Users"; // Admin Users Title - May be depretiated in future Versions
$lang["title"]["login"] = "Login"; // Login Page

/* PAGINATION */
$lang["pagination"]["prev"] = "Prev"; // Previous Page
$lang["pagination"]["next"] = "Next"; // Next Page

/* PUBLIC RECENT PAGE */
$lang["recent"]["cat"] = "Cat"; // Release Cat
$lang["recent"]["name"] = "Name"; // Release Name
$lang["recent"]["by"] = "By"; // Release Author
$lang["recent"]["date"] = "Date"; // Release Date
$lang["recent"]["view_all"] = "View all Releases"; // View all Releases Button
$lang["recent"]["no_releases"] = "0 Releases meow..."; // Shows if no Releases are there

/* PUBLIC SEARCH PAGE */
// "MAKING THIS PIECE OF TRASH WAS HARD AS IT BITCHED AROUND AS FUCK REEEE" - saintly2k, memories of a nobody
$lang["search"]["for"] = "Search for..."; // Shows before the input field
$lang["search"]["ph_for"] = "Release Name, Author, Category..."; // Placeholder for search input
$lang["search"]["for_release"] = "Search Releases"; // Search for Release
$lang["search"]["for_author"] = "Search Authors"; // Search for Author
$lang["search"]["for_category"] = "Search Categories"; // Search for Category
$lang["search"]["nothing"] = "Nothing found..."; // Shows if nothing found
$lang["search"]["again"] = "Return and Search again"; // Shows on search_act page

/* PUBLIC RELEASE PAGE */
$lang["release"]["error"] = "Something went wrong..."; // Shows if ID or title is empty
// Imagine $date is a date, like 23.04.2000
$lang["release"]["released"] = "Released on "; // Shows before release date
// Imagine $author is a name, like saintly
$lang["release"]["by"] = "By "; // Shows before Author
$lang["release"]["search_author"] = "Search all Releases by Author"; // Shows after Author's name
// Imagine $cat is a category, like games
$lang["release"]["cat"] = "In Category "; // Shows before Category
$lang["release"]["search_cat"] = "Search all Releases in this Cat"; // Shows after Category name
$lang["release"]["description"] = "Description:"; // Shows before description
$lang["release"]["download"] = "Download"; // Text on download button
$lang["release"]["edit"] = "Edit Release"; // Text on Edit button

/* ADMIN HOME PAGE */
// Imagine $username is some username
$lang["admin"]["home"]["welcome"] = "Welcome, "; // Welcome greeting, $username will always be last
$lang["admin"]["home"]["quick_actions"] = "Quick actions:"; // The text above the buttons
$lang["admin"]["home"]["main_settings"] = "Main Settings"; // Main Settings Button
$lang["admin"]["home"]["user_settings"] = "User Settings"; // User Settings Button (U.S. disabled)
$lang["admin"]["home"]["new_release"] = "New Release"; // New Release Button
$lang["admin"]["home"]["edit_categories"] = "Edit Categories"; // Edit Cats Button
$lang["admin"]["home"]["check_updates"] = "Check for Updates"; // Check for Updates Button
$lang["admin"]["home"]["authors_note"] = "Note of the Author(s)"; // Note Button

/* ADMIN CATEGORY SETTINGS */
$lang["admin"]["cats"]["id"] = "ID"; // Category ID, idk why you would change this but ehre
$lang["admin"]["cats"]["name"] = "Cat Name"; // Category full name
$lang["admin"]["cats"]["short"] = "Cat Short"; // Category short name
$lang["admin"]["cats"]["action"] = "Action"; // To perform, delete or edit
$lang["admin"]["cats"]["cannot_id"] = "You can not edit the ID!"; // Can not edit id text
$lang["admin"]["cats"]["ph_name"] = "Name of Category that will be shown on details page"; // Placeholder for input field full name
$lang["admin"]["cats"]["ph_short"] = "Short Name of Category that will be shown on Release page"; // Placeholder for input field short name
$lang["admin"]["cats"]["action_update"] = "Update"; // Update Button
$lang["admin"]["cats"]["action_delete"] = "Delete"; // Update Button
$lang["admin"]["cats"]["delete_sure"] = "Are you sure?"; // Text shown at modal title
$lang["admin"]["cats"]["delete_undone"] = "This cannot be undone!"; // Text in modal confirmation
$lang["admin"]["cats"]["delete_cancel"] = "Cancel"; // Cancel Button Text
$lang["admin"]["cats"]["delete_confirm"] = "Delete"; // Delete Button Text
$lang["admin"]["cats"]["none"] = "0 Cats meow..."; // No Categories created yet/existent
// Imagine $number is the amount of Categories you have, like 6
$lang["admin"]["cats"]["total"] = " Cats."; // Total number of Categories
$lang["admin"]["cats"]["form_add"] = "Add new Category"; // Form Title for creation
$lang["admin"]["cats"]["form_show"] = "Show Form"; // Show form text
$lang["admin"]["cats"]["form_hide"] = "Hide Form"; // Hide form text
$lang["admin"]["cats"]["form_cat_name"] = "Name"; // Category Name text
$lang["admin"]["cats"]["form_cat_short"] = "Short"; // Category Short text
$lang["admin"]["cats"]["form_add_cat"] = "Add new Category"; // Add Cat button

/* ADMIN LOGIN PAGE */
$lang["admin"]["login"]["error"] = "Uh oh... bad username or password."; // Error if details wrong
$lang["admin"]["login"]["username"] = "Username"; // Username Text
$lang["admin"]["login"]["password"] = "Password"; // Password Text
$lang["admin"]["login"]["login"] = "Login"; // Login Button

/* ADMIN ADD RELEASE PAGE */
$lang["admin"]["release"]["name"] = "Name"; // Release Name
$lang["admin"]["release"]["ph_name"] = "Release name"; // Placeholder for input
$lang["admin"]["release"]["author"] = "Author"; // Release Author
$lang["admin"]["release"]["ph_author"] = "Release author/cracker/leaker/creator"; // Placeholder for input
$lang["admin"]["release"]["description"] = "Desc-<br>ription"; // Recommend <br> or else it will look ugly
$lang["admin"]["release"]["ph_description"] = "What is this release about? Give more details here"; // Placeholder for textarea/input
$lang["admin"]["release"]["download"] = "Download"; // Download Link
$lang["admin"]["release"]["ph_download"] = "https://anonfiles.com/yourdownloadlink/file.zip"; // Example download link
$lang["admin"]["release"]["category"] = "Category"; // Category select
$lang["admin"]["release"]["ph_category"] = "Select..."; // Select text if none choosen
$lang["admin"]["release"]["no_category"] = "You haven't created any cats."; // If no Cats exist
$lang["admin"]["release"]["add"] = "Add Release!"; // Add Release Button
$lang["admin"]["release"]["edit"] = "Edit Release"; // Edit Release Button
$lang["admin"]["release"]["delete"] = "Delete Release"; // Delete Release Button

/* ADMIN NOTE PAGE */
// Nothing lol

/* ADMIN SETTINGS PAGE */
$lang["admin"]["settings"]["name"] = "Name"; // Name of the Release-System
$lang["admin"]["settings"]["ph_name"] = "Name of Release-system"; // Placeholder for the name
$lang["admin"]["settings"]["slogan"] = "Slogan"; // Slogan of Release-System
$lang["admin"]["settings"]["ph_slogan"] = "Slogan of Release-system"; // Placeholder for slogan
$lang["admin"]["settings"]["domain"] = "Domain"; // Domain of the Host
$lang["admin"]["settings"]["ph_domain"] = "Domain, END WITH SLASH!";
$lang["admin"]["settings"]["folder"] = "Folder"; // Sub-Directory of host
$lang["admin"]["settings"]["ph_folder"] = "Folder system is in, if domain.com/haha/ then haha/"; // Placeholder of folder/Sub-Directory
$lang["admin"]["settings"]["language"] = "Language"; // Language selector
$lang["admin"]["settings"]["save"] = "Save config!"; // Save Button
$lang["admin"]["settings"]["notice"] = "If changes don't show up after saving, reload the page until they show. If they still don't show after two times refreshing, make the changes again."; // Notice at the bottom
$lang["admin"]["settings"]["refreshing"] = "Page refreshing in two seconds, hold on!"; // Shows after saving config

/* ADMIN USERS PAGE */
// No, I don't think I will...

/* ADMIN EDIT RELEASE PAGE */
$lang["admin"]["edit"]["error"] = "There has been some error..."; // No ID entered error

?>
