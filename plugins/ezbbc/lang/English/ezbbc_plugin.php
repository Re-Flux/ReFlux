<?php
// Language definitions used in EZBBC Toolbar Plugin
$lang_ezbbc = array(
    //For the admin plugin page
    'Plugin in action' => 'Plugin in action!',
    'Plugin disabled' => 'The plugin has been disabled.',
    'Plugin wrong installation' => 'The plugin seems not to be installed properly. Please click on the enable button to reinstall it.',
    'Not writable' => 'The <code>header.php</code>, <code>help.php</code>, <code>include/parser.php</code>, and <code>plugins/ezbbc/config.php</code> files should be writeable to perform installation or removing. Please change the permissions of these files to have this action work.',
    'Style changed' => 'The style has been modified!',
    'Date format' => 'Y/m/d \a\t H:m',
    'Plugin title' => 'EZBBC Toolbar',
    'Description title' => 'Description',
    'Explanation' => 'This plugin allows the users to use a simple BBCode insertion toolbar.<br />To have it work, the <code>header.php</code>, <code>help.php</code>, <code>include/parser.php</code>, and <code>plugins/ezbbc/config.php</code> files must be writable. To have the possibility to manage the style folders directly from the administration page, the <code>plugins/ezbbc/style/</code> folder and all its contents must be writable (chmod 777). Finally, if you want to allow file upload, <code>cache/ezbbc/</code>, <code>/img/</code> and <code>/doc/</code> folders or the custom folders you set should also be writable (chmod 777). Please change the permissions of these files and folders to have these functionnalities work.<br />Each time you update the installation of the FluxBB boards, you should go back to this page to reinstall this plugin.',
    'Form title' => 'Information and actions',
    'Change style' => 'Change the style',
    'Legend style' => 'Please select the Toolbar style',
    'Legend status' => 'Here are all the information you have to know about the plugin status.',
    'Legend advanced features' => 'Here some advanced features that you can enable or disable',
    'Button selection title' => 'Button to display selection',
    'SmiliesBar position' => 'SmiliesBar position',
    'SmiliesBar over Toolbar' => 'SmiliesBar over the Toolbar',
    'SmiliesBar under Toolbar' => 'SmiliesBar under the Toolbar',
    'SmiliesBar under Textarea' => 'SmiliesBar under the Textarea',
    'Bars position' => 'SmiliesBar and Toolbar position',
    'Left' => 'Left',
    'Right' => 'Right',
    'Syntax Highlight title' => 'Code syntax highlighting',
    'Syntax Highlight' => 'Allow to highlight the code in codeboxes',
    'Syntax Highlight ok' => 'Code is highlighted',
    'H id title' => 'ID for heading',
    'H id' => 'Allow to assign an ID to heading tag',
    'H id ok' => 'Assigning an ID to heading tag allowed',
    'Video add title' => 'Video tag',
    'Video add' => 'Allow to insert video tags (YouTube, Dailymotion and Vimeo)',
    'Video add ok' => 'Inserting video tags (YouTube, Dailymotion and Vimeo) allowed',
    'Image upload title' => 'Image upload',
    'Image upload' => 'Allow to upload images',
    'Image upload ok' => 'Uploading images allowed',
    'Doc upload title' => 'Doc upload',
    'Doc upload' => 'Allow to upload files',
    'Doc upload ok' => 'Uploading files allowed',
    'Folder' => 'Folder (relative to FluxBB root and without trailing slash): ',
    'Folder or file not writable' => 'is not writable', // In front of that string the folder/file path
    'Max img width' => 'Resize image to max width: ',
    'Set' => 'Set',
    'Files listing ok' => 'Show listing of uploaded files enabled',
    'Files listing' => 'Show listing of uploaded files disabled',
    'Allowed ext' => 'Allowed file extensions (comma separated): ',
    'Max size' => 'Max size: ', //after that string the max image size in Kb
    'Kb' => 'Kb',
    'Max img upload user' => 'Max image upload allowed for user:',
    'Max img upload' => 'Max image upload allowed: ',
    'For moderators' => 'For mods:',
    'unlimited' => 'unlimited',
    'Max doc upload user' => 'Max document upload allowed for user:',
    'Max doc upload' => 'Max document upload allowed: ',
    'Max files mods' => 'for moderators and no limit for admins', //before that string the max doc upload value for moderators
    'Max size adminmod' => 'For mods and admins: ',
    'Yes' => 'Enable',
    'No' => 'Disable',
    'px' => 'px',
    'Toolbar preview' => 'Toolbar preview',
    'No preview' => 'No preview available',
    'Plugin version' => 'EZBBC Toolbar plugin version:',
    'Installation date' => 'This version of the plugin has been installed on',
    'Plugin status' => 'Plugin status:',
    'Available languages' => 'Available languages:',
    'Enable' => 'Enable EZBBC Toolbar',
    'Disable' => 'Disable EZBBC Toolbar',
    'Buttons' => 'Buttons',
    'Smilies' => 'Smilies',
    'Default smilies' => 'FluxBB default smilies',
    'EZBBC smilies' => 'EZBBC custom smilies',
    'Smiley' => 'Smiley',
    'Current style' => 'Current style:',
    'OK' => 'OK',
    'Edit css' => 'Edit CSS file',
    'Rename' => 'Rename',
    'Remove' => 'Remove',
    'Copy' => 'Copy',
    'Remove confirm' => 'Do you really want to remove this folder?',
    'File listing title' => 'Listing of user uploaded files',
    'Recent files' => 'Recent files:',
    'Last files' => 'last uploaded files', // in front of that string the number of files listed
    'Files by user' => 'Files uploaded by user:',
    'Image folder display' => 'Display image folder',
    'Document folder display' => 'Display document folder',
    'Files by id' => 'Files uploaded by id:',
    'Display images' => 'Only images',
    'Display docs' => 'Only documents',
    'Toolbar display' => 'Toolbar display',
    'Display on post edit' => 'Display Toolbar on post and edit windows disabled',
    'Display on post edit ok' => 'Display toolbar on post and edit windows enabled',
    'Display on quickpost' => 'Display toolbar on quickpost disabled',
    'Display on quickpost ok' => 'Display toolbar on quickpost enabled',
    'Display on signature' => 'Display toolbar on signature window disabled',
    'Display on signature ok' => 'Display toolbar on signature window enabled',
    // User settings
    'Display EZBBC Toolbar' => 'Display the EZBBC Toolbar',
    //For the files listing popup window
    'Recent title' => 'Recently uploaded files',
    'Go user folder' => 'Go to the user folder',
    'Files listing of' => 'Files listing of ', //After that string the username of the files owner
    'Legend files' => 'Below files you can manage',
    'Remove file confirm' => 'Do you really want to remove this file?',
    'File remove ok' => 'file has been successfully removed.',
    'File remove fail' => 'file has not been removed for unknown reason.',
    'Files listing not possible' => 'No files found',
    'Reasons not listing' => 'Either the username doesn\'t exist, either the id is not defined, either the user folder doesn\'t exist.',
    'No files in folder' => 'No files found in this folder…',
    //For popup windows
    'Ask title' => 'What is the heading?',
    'Title ID' => 'What is the ID? (optional)',
    'Invalid label' => 'Label is required!',
    'Web link' => 'Web',
    'Topic link' => 'Topic',
    'Post link' => 'Post',
    'Forum link' => 'Forum',
    'User link' => 'User',
    'Ask label' => 'What is the label? (optional)',
    'Ask url type' => 'What type of link?',
    'Ask url' => 'What is the URL? (beginning with "http://", "https://", "ftp://" or "www.")',
    'Ask id' => 'What is the ID? (integer)',
    'Invalid url' => 'Invalid URL!',
    'Invalid id' => 'Invalid ID!',
    'Upload Doc' => 'Upload a document',
    'Allowed extension display' => 'Allowed extensions: ', //After that string the allowed extensions
    'Already uploaded' => 'Uploaded: ', //After that string the file number already uploaded
    'File not allowed' => 'file is not allowed!', //In front of this string, the file extension
    'File too big' => 'The file is too big!',
    'Img size too large' => 'The picture is too wide - max width: ', //After that string, the max width value
    'No file submitted' => 'No file submitted!',
    'Upload fail' => 'Upload failed for unknown reasons',
    'User Folder not writable' => 'Sorry, your private folder is not writable. Please contact an administrator.',
    'Display' => 'Display', //used also on plugin admin page
    'Add' => 'Add',
    'My images' => 'My uploaded images',
    'My docs' => 'My uploaded docs',
    'Submit' => 'Upload file',
    'Ask author' => 'Who is the author? (optional)',
    'Ask quotation' => 'What is the quotation?',
    'Ask code' => 'What is the code?',
    'Ask language' => 'What is the language?',
    'HTML' => 'HTML',
    'XHTML' => 'XHTML',
    'XML' => 'XML',
    'CSS' => 'CSS',
    'SASS' => 'SASS',
    'C++' => 'C++',
    'Perl' => 'Perl',
    'PHP' => 'PHP',
    'JavaScript' => 'JavaScript',
    'Java' => 'Java',
    'CoffeeScript' => 'CoffeeScript',
    'Undefined' => 'Undefined',
    'Ask color' => 'What is the color?',
    'Ask color explanation' => 'Enter a color code like blue, green, red, purple or click on the ColorPicker to choose a color.',
    'Ask colorized text' => 'Text that has to be colorized',
    'Ask email' => 'What is the E-mail address? (containing "@")',
    'Invalid email' => 'Invalid email address!',
    'Ask url img' => 'What is the URL? (beginning with "http://", "https://" or "ftp://")',
    'Ask alt' => 'What is the alternative text?<br />(text to display when the image is not being displayed - optional)',
    'Upload image' => 'Upload an image file',
    'Add item' => 'Add an item',
    'Ask url video' => 'What is the YouTube, Dailymotion or Vimeo URL?',
    'Ask video width' => 'The width of the video (optional)',
    'Ask video height' => 'The height of the video (optional)',
    'Invalid width' => 'Invalid width',
    'Invalid height' => 'Invalid height',
    // Titles of the popup pages
    'EZBBC Heading' => 'EZBBC - Heading',
    'EZBBC ColorPicker' => 'EZBBC - ColorPicker',
    'EZBBC Link chooser' => 'EZBBC - Link chooser',
    'EZBBC Video chooser' => 'EZBBC - Video chooser',
    'EZBBC List creator' => 'EZBBC - List Creator',
    'EZBBC Code insertion' => 'EZBBC - Code',
    'EZBBC Image' => 'EZBBC - Image',
    'EZBBC Quote' => 'EZBBC - Quotation',
    'EZBBC Email' => 'EZBBC - Email',
    'Cancel' => 'Cancel',
    //For the toolbar
    'Bold' => 'B',
    'Underline' => 'U',
    'Italic' => 'I',
    'Strike-through' => 'S',
    'Delete' => 'Del',
    'Insert' => 'Ins',
    'Emphasis' => 'Em',
    'Colorize' => 'Color',
    'Heading' => 'H',
    'URL' => 'URL',
    'E-mail' => '@',
    'Image' => 'Img',
    'Quote' => 'Quote',
    'Code' => 'Code',
    'Unordered List' => 'U-List',
    'Ordered List' => 'N-List',
    'Alphabetical Ordered List' => 'A-List',
    'Video' => 'Video',
    'Smilies toggle' => 'Smilies',
    'Toolbar help' => 'Help',
    // The following titles are also used in admin page
    'Bold title' => 'Bold » [b]…[/b]',
    'Underline title' => 'Underline » [u]…[/u]',
    'Italic title' => 'Italic » [i]…[/i]',
    'Strike-through title' => 'Strike-through » [s]…[/s]',
    'Delete title' => 'Delete » [del]…[/del]',
    'Insert title' => 'Insert » [ins]…[/ins]',
    'Emphasis title' => 'Emphasis » [em]…[/em]',
    'Colorize title' => 'Colorize » [color=…]…[/color]',
    'Heading title' => 'Heading » [h]…[/h]',
    'URL title' => 'URL Link » [url=…]…[/url]',
    'E-mail title' => 'E-mail Link » [email=…]…[/email]',
    'Image title' => 'Image » [img=…]…[/img]',
    'Quote title' => 'Quote » [quote=…]…[/quote]',
    'Code title' => 'Code » [code]…[/code]',
    'Unordered List title' => 'Unordered List » [list=*][*]…[/*][*]…[/*][/list]',
    'Ordered List title' => 'Numbered Ordered List » [list=1][*]…[/*][*]…[/*][/list]',
    'Alphabetical Ordered List title' => 'Alphabetical Ordered List » [list=a][*]…[/*][*]…[/*][/list]',
    'Video title' => 'Video » [video=width,height]…[/video]',
    'Smilies toggle title' => 'Toggle the smilies Bar',
    'Toolbar help title' => 'EZBBC Toolbar help' //This string is also used in admin page
);