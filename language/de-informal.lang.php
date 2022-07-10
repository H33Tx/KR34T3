<?php

/*  |-------------------------|
    | KR34T3-Release-System   |
    | Deutsche Übersetung v.1 |
    | Form: Formal (Sie-Form) |
    |-------------------------|
    | Erstellt von by         |
    | Saintly2k & Kleineick   |
    | Project H33T x HENAI.eu |
    | Besucht uns doch mal :) |
    |-------------------------|
    | Zuletzt Bearbeitet:     |
    | 10.01.2022 - 16:53      |
    |-------------------------| */

// This shows if someone has Javascript disabled which will lead to not be able to download + some more functions (especially admin) not working
$lang["notice"] = "Es sieht so aus, als würde dein Browser JavaScript nicht unterstützen. Das führt dazu, dass einige Funktionen nicht funtionieren.";

/* NAVIGATION */
$lang["nav"]["menu"] = "Menü"; // Menu Name
$lang["nav"]["recent"] = "Neueste"; // Recent Mainpage/Homepage
$lang["nav"]["search"] = "Suche"; // Search Mainpage
$lang["nav"]["about"] = "Über"; // About  Page
$lang["nav"]["admin"] = "Admin"; // Admin Login/Home
$lang["nav"]["main"] = "Haupt"; // Admin Main Settings
$lang["nav"]["user"] = "Nutzer"; // Admin User Settings
$lang["nav"]["new"] = "Neu"; // Admin New Release Page
$lang["nav"]["cats"] = "Kat."; // Admin Categories short name
$lang["nav"]["note"] = "Notiz"; // Admin Authors Note Pgae
$lang["nav"]["logout"] = "Logout"; // Logout

/* PAGE TITLES */
// Imagine $pagination is a number, like 5 or so
$lang["title"]["recent"] = "Neueste - Seite "; // Recent Page Title
$lang["title"]["search_home"] = "Suche - Hauptseite"; // Search Mainpage
$lang["title"]["search_act"] = "Suche..."; // Searching Page
$lang["title"]["about"] = "Über"; // About Page Title
$lang["title"]["view"] = "Release ansehen"; // View Release Page
$lang["title"]["admin_home"] = "Admin - Hauptseite"; // Admin Homepage
$lang["title"]["admin_logout"] = "Admin - Logout"; // Admin Logout Title
$lang["title"]["admin_note"] = "Admin - Authorenbemerkungen"; // Admin Note of the Author Title
$lang["title"]["admin_settings"] = "Admin - Seiteneinstellungen"; // Admin Main settings Title
$lang["title"]["admin_release"] = "Admin - Neues Release"; // Admin New Release Title
$lang["title"]["admin_cats"] = "Admin - Kategorien Bearbeiten"; // Admin Edit Categories Title
$lang["title"]["admin_edit"] = "Admin - Release Bearbeiten"; // Admin Edit Release Title
$lang["title"]["admin_users"] = "Admin - Nutzereinstellungen"; // Admin Users Title - May be depretiated in future Versions
$lang["title"]["login"] = "Login"; // Login Page

/* PAGINATION */
$lang["pagination"]["prev"] = "Zurück"; // Previous Page
$lang["pagination"]["next"] = "Vor"; // Next Page

/* PUBLIC RECENT PAGE */
$lang["recent"]["cat"] = "Kat."; // Release Cat
$lang["recent"]["name"] = "Name"; // Release Name
$lang["recent"]["by"] = "Von"; // Release Author
$lang["recent"]["date"] = "Datum"; // Release Date
$lang["recent"]["view_all"] = "Siehe alle Releases"; // View all Releases Button
$lang["recent"]["no_releases"] = "Es gibt keine Releases :("; // Shows if no Releases are there

/* PUBLIC SEARCH PAGE */
// "MAKING THIS PIECE OF TRASH WAS HARD AS IT BITCHED AROUND AS FUCK REEEE" - saintly2k, memories of a nobody
$lang["search"]["for"] = "Suche nach..."; // Shows before the input field
$lang["search"]["ph_for"] = "Release Name, Author, Kategorie..."; // Placeholder for search input
$lang["search"]["for_release"] = "Suche Releases"; // Search for Release
$lang["search"]["for_author"] = "Suche Authoren"; // Search for Author
$lang["search"]["for_category"] = "Suche Kategorien"; // Search for Category
$lang["search"]["nothing"] = "Nichts gefunden..."; // Shows if nothing found
$lang["search"]["again"] = "Kehre zurück und suche erneut!"; // Shows on search_act page

/* PUBLIC RELEASE PAGE */
$lang["release"]["error"] = "Irgendwas ist schiefgelaufen..."; // Shows if ID or title is empty
// Imagine $date is a date, like 23.04.2000
$lang["release"]["released"] = "Veröffentlicht am "; // Shows before release date
// Imagine $author is a name, like saintly
$lang["release"]["by"] = "Von "; // Shows before Author
$lang["release"]["search_author"] = "Alle Releases vom Author suchen"; // Shows after Author's name
// Imagine $cat is a category, like games
$lang["release"]["cat"] = "In Kategorie "; // Shows before Category
$lang["release"]["search_cat"] = "Alle Releases in dieser Kategorie suchen"; // Shows after Category name
$lang["release"]["description"] = "Beschreibung:"; // Shows before description
$lang["release"]["download"] = "Download"; // Text on download button
$lang["release"]["edit"] = "Release Bearbeiten"; // Text on Edit button

/* ADMIN HOME PAGE */
// Imagine $username is some username
$lang["admin"]["home"]["welcome"] = "Willkommen, "; // Welcome greeting, $username will always be last
$lang["admin"]["home"]["quick_actions"] = "Auf einen Blick:"; // The text above the buttons
$lang["admin"]["home"]["main_settings"] = "Seiteneinstellungen"; // Main Settings Button
$lang["admin"]["home"]["user_settings"] = "Nutzereinstellungen"; // User Settings Button (U.S. disabled)
$lang["admin"]["home"]["new_release"] = "Neues Release"; // New Release Button
$lang["admin"]["home"]["edit_categories"] = "Kategorien Bearbeiten"; // Edit Cats Button
$lang["admin"]["home"]["check_updates"] = "Nach Updates Überprüfen"; // Check for Updates Button
$lang["admin"]["home"]["authors_note"] = "Authorenbemerkungen"; // Note Button

/* ADMIN CATEGORY SETTINGS */
$lang["admin"]["cats"]["id"] = "ID"; // Category ID, idk why you would change this but ehre
$lang["admin"]["cats"]["name"] = "Kat. Name"; // Category full name
$lang["admin"]["cats"]["short"] = "Kat. Kürzel"; // Category short name
$lang["admin"]["cats"]["action"] = "Aktionen"; // To perform, delete or edit
$lang["admin"]["cats"]["cannot_id"] = "Du kannst die ID nicht bearbeiten!"; // Can not edit id text
$lang["admin"]["cats"]["ph_name"] = "Der Name der Kategorie wird auf der Release-Seite gezeigt"; // Placeholder for input field full name
$lang["admin"]["cats"]["ph_short"] = "Das Kürzel der Kategorie wird in Tabellen gezeigt"; // Placeholder for input field short name
$lang["admin"]["cats"]["action_update"] = "Updaten"; // Update Button
$lang["admin"]["cats"]["action_delete"] = "Löschen"; // Update Button
$lang["admin"]["cats"]["delete_sure"] = "Bist du sicher?"; // Text shown at modal title
$lang["admin"]["cats"]["delete_undone"] = "Dies kann nicht rückgängig gemacht werden!"; // Text in modal confirmation
$lang["admin"]["cats"]["delete_cancel"] = "Abbrechen"; // Cancel Button Text
$lang["admin"]["cats"]["delete_confirm"] = "Löschen"; // Delete Button Text
$lang["admin"]["cats"]["none"] = "Keine Kategorien gefunden... :("; // No Categories created yet/existent
// Imagine $number is the amount of Categories you have, like 6
$lang["admin"]["cats"]["total"] = " Kat."; // Total number of Categories
$lang["admin"]["cats"]["form_add"] = "Neue Kategorie Hinzufügen"; // Form Title for creation
$lang["admin"]["cats"]["form_show"] = "Zeige Forumal"; // Show form text
$lang["admin"]["cats"]["form_hide"] = "Verstecke Forumlar"; // Hide form text
$lang["admin"]["cats"]["form_cat_name"] = "Name"; // Category Name text
$lang["admin"]["cats"]["form_cat_short"] = "Lürzel"; // Category Short text
$lang["admin"]["cats"]["form_add_cat"] = "Füge Lategorie hinzu!"; // Add Cat button

/* ADMIN LOGIN PAGE */
$lang["admin"]["login"]["error"] = "Uh oh... das Passwort oder der Nutzername ist falsch."; // Error if details wrong
$lang["admin"]["login"]["username"] = "Nutzername"; // Username Text
$lang["admin"]["login"]["password"] = "Password"; // Password Text
$lang["admin"]["login"]["login"] = "Einloggen"; // Login Button

/* ADMIN ADD RELEASE PAGE */
$lang["admin"]["release"]["name"] = "Name"; // Release Name
$lang["admin"]["release"]["ph_name"] = "Release Name"; // Placeholder for input
$lang["admin"]["release"]["author"] = "Author"; // Release Author
$lang["admin"]["release"]["ph_author"] = "Release Author/Cracker/Leaker/Ersteller"; // Placeholder for input
$lang["admin"]["release"]["description"] = "Beschrei-<br>bung"; // Recommend <br> or else it will look ugly
$lang["admin"]["release"]["ph_description"] = "Worüber ist das Release? Was beinhaltet es? Erzähle hier mehr darüber..."; // Placeholder for textarea/input
$lang["admin"]["release"]["download"] = "Download"; // Download Link
$lang["admin"]["release"]["ph_download"] = "https://anonfiles.com/yourdownloadlink/file.zip"; // Example download link
$lang["admin"]["release"]["category"] = "Kategorie"; // Category select
$lang["admin"]["release"]["ph_category"] = "Auswählen..."; // Select text if none choosen
$lang["admin"]["release"]["no_category"] = "Du hast noch keine Kategorien erstellt."; // If no Cats exist
$lang["admin"]["release"]["add"] = "Release eintragen!"; // Add Release Button
$lang["admin"]["release"]["edit"] = "Release Bearbeiten"; // Edit Release Button
$lang["admin"]["release"]["delete"] = "Release Löschen"; // Delete Release Button

/* ADMIN NOTE PAGE */
// Nothing lol

/* ADMIN SETTINGS PAGE */
$lang["admin"]["settings"]["name"] = "Name"; // Name of the Release-System
$lang["admin"]["settings"]["ph_name"] = "Name des Release-Systems"; // Placeholder for the name
$lang["admin"]["settings"]["slogan"] = "Slogan"; // Slogan of Release-System
$lang["admin"]["settings"]["ph_slogan"] = "Slogan des Release-Systems"; // Placeholder for slogan
$lang["admin"]["settings"]["domain"] = "Domain"; // Domain of the Host
$lang["admin"]["settings"]["ph_domain"] = "Domain, MUSS MIT SCHRÄGSTRICH ENDEN!";
$lang["admin"]["settings"]["folder"] = "Hefter"; // Sub-Directory of host
$lang["admin"]["settings"]["ph_folder"] = "Hefter wo das System is, wenn domain.com/haha/, dann haha/"; // Placeholder of folder/Sub-Directory
$lang["admin"]["settings"]["language"] = "Sprache"; // Language selector
$lang["admin"]["settings"]["save"] = "Konfiguration sichern!"; // Save Button
$lang["admin"]["settings"]["notice"] = "Wenn die Änderungen nach dem sichern nicht in kraft treten, lade die seite neu. Wenn sie nach zweimaligem neuladen immer noch nicht erscheinen, mache sie bitte erneut."; // Notice at the bottom
$lang["admin"]["settings"]["refreshing"] = "Warte kurz, Seite läd neu in zwei Sekunden!"; // Shows after saving config

/* ADMIN USERS PAGE */
// No, I don't think I will...

?>
