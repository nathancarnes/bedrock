<?php
//
// CheezCap - Cheezburger Custom Administration Panel
// (c) 2008 - 2011 Cheezburger Network (Pet Holdings, Inc.)
// LOL: http://cheezburger.com
// Source: http://github.com/cheezburger/cheezcap/
// Authors: Kyall Barrows, Toby McKes, Stefan Rusek, Scott Porad
// License: GNU General Public License, version 2 (GPL), http://www.gnu.org/licenses/gpl-2.0.html
//

$themename = 'Theme'; // used on the title of the custom admin page
$req_cap_to_edit = 'manage_options'; // the user capability that is required to access the CheezCap settings page
$cap_menu_position = 200; // OPTIONAL: This value represents the order in the dashboard menu that the CheezCap menu will display in. Larger numbers push it further down.
$cap_icon_url = ""; // OPTIONAL: Path to a custom icon for the CheezCap menu item. ex. $cap_icon_url = WP_CONTENT_URL . '/your-theme-name/images/awesomeicon.png'; Image size should be around 20px x 20px.

function cap_get_options() {
	return array(
		new Group( 'Basic', 'basic', array(
				new TextOption( 'Analytics Code', 'Paste in Google Analytics or other tracking code here to include just before the </body> tag.', 'analytics_code', '', true ),
			)
		),    
		new Group( 'CSS', 'css', array(
  			/*
  			 TODO new TextOption( 'Editor Styles', 'Styles to include in the WordPress editor', 'editor_styles', '', true ),
  			*/
  			new BooleanOption( 'Use scaffold styles', 'Provides basic layout and styling for testing', 'use_scaffold', true ),
  			new BooleanOption( 'Use reset stylesheet', 'Include Eric Meyer\'s reset.css', 'use_reset', true )        				        		  
		  ) 
		),
		
		new Group( 'Language Settings', 'language', array(
  			new TextOption( '404 Page Title', '', 'not_found_title', 'Page Not Found' ),
  			new TextOption( '404 Page Text', 'Text displayed on the 404 page', 'not_found_body', 'The page you\'re looking for couldn\'t be found.', true ),               
  			new TextOption( 'Tag Archive Title', 'Use [tag] as a placeholder for the tag name', 'tag_archive_title', 'Browsing "[tag]"', true ),	
    		new TextOption( 'Archives Title', 'Used for default sidebar', 'archives_title', 'Archives' ),	
    		new TextOption( 'Search Results Title', 'Use [term] as a placeholder for the search term', 'search_results_title', 'Results for "[term]"' ), 
    		new TextOption( 'No Search Results Title', 'Use [term] as a placeholder for the search term', 'no_search_results_title', 'No Found Results for "[term]"' ),  
        new TextOption( 'No Search Results Body', 'Shown on the search page when no results are found.', 'no_search_results_body', 'No results were found for your search. You might want to try a different search.', true ), 
        new TextOption( 'Empty Archive Title', 'Shown when a category, tag, or date archive is empty', 'empty_archive_title', 'Not Found' ), 
        new TextOption( 'Empty Archive Body', 'Shown when a category, tag, or date archive is empty', 'empty_archive_body', 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.' ),  
        new TextOption( 'No Search Results Body', 'Shown on the search page when no results are found.', 'no_search_results_body', 'No results were found for your search. You might want to try a different search.', true ),      
        new TextOption( 'Continue Reading Link', 'Shown when content is truncated on archive and post pages', 'continue_reading_link', 'Read more...' ), 
        new TextOption( 'Older Posts Link', 'Pagination', 'older_posts_link', 'Older Posts' ),       			
        new TextOption( 'Newer Posts Link', 'Pagination', 'newer_posts_link', 'Newer Posts' ), 
        new TextOption( 'Tags Prefix', 'Appears in post footers', 'tags_prefix', 'Tagged ' ),       			
        new TextOption( 'Categories prefix', 'Appears in post footers', 'categories_prefix', 'Filed under ' ),  
        new TextOption( 'No Comments', '', 'no_comments', '0 Comments' ),           
        new TextOption( 'One Comment', '', 'one_comment', 'One Comment' ),
        new TextOption( 'Many Comments', 'Use [num] as a placeholder for the number of comments', 'many_comments', '[num] Comments' ),    
        new TextOption( 'Comments Password Protected', '', 'comments_password_protected', 'This post is password protected. Enter the password to view any comments.', true ),                	 							
        new TextOption( 'Previous Comments', '', 'comments_previous', 'Older Comments' ),
        new TextOption( 'Next Comments', '', 'comments_next', 'News Comments' ),
        new TextOption( 'Browsing Category', 'Heading for category archives; category name will be appended.', 'browsing_category', 'Browsing ' ),
			)
		),
	);
}
