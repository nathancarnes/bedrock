<?php
//
// CheezCap - Cheezburger Custom Administration Panel
// (c) 2008 - 2011 Cheezburger Network (Pet Holdings, Inc.)
// LOL: http://cheezburger.com
// Source: http://github.com/cheezburger/cheezcap/
// Authors: Kyall Barrows, Toby McKes, Stefan Rusek, Scott Porad
// License: GNU General Public License, version 2 (GPL), http://www.gnu.org/licenses/gpl-2.0.html
//

$themename = 'Bedrock'; // used on the title of the custom admin page
$req_cap_to_edit = 'manage_options'; // the user capability that is required to access the CheezCap settings page
$cap_menu_position = 99; // OPTIONAL: This value represents the order in the dashboard menu that the CheezCap menu will display in. Larger numbers push it further down.
$cap_icon_url = ""; // OPTIONAL: Path to a custom icon for the CheezCap menu item. ex. $cap_icon_url = WP_CONTENT_URL . '/your-theme-name/images/awesomeicon.png'; Image size should be around 20px x 20px.

function cap_get_options() {
	return array(
		new Group( 'Basic', 'basic',
			array(
				new TextOption(
					'Analytics Code',
					'Paste in Google Analytics or other tracking code here to include just before the </body> tag.',
					'analytics_code',
					'',
					true
				)
			)
		),
		new Group( 'Language Settings', 'language',
			array(
				new TextOption(
					'404 Page Title',
					'',
					'not_found_title',
					'Page Not Found'
				),
				new TextOption(
					'404 Page Text',
					'Text displayed on the 404 page',
					'not_found_body',
					'The page you\'re looking for couldn\'t be found.',
					true
				),               
			new TextOption(
				'Tag Archive Title',
				'Use [tag] as a placeholder for the tag name',
				'tag_archive_title',
				'Browsing "[tag]"',
				true
			),				
			)
		),
	);
}
