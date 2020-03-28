
<h1>elFinderM - with ThemeManager!</h1>
<p><span style="color: #000080;"><strong>This is a <span style="text-decoration: underline;">modificated</span> Version of elFinder. This Modification includes a <span style="color: #333300;">inbuild Theme-Manager</span> with actually <span style="color: #333300;">6 Themes</span>. A <span style="color: #333300;">User-Login</span> was also added to this modded version, to password-protect your&nbsp;Filemanager. Another feature is, that the Filmanager apply <span style="color: #333300;">full-size</span> in the browser window.</strong></span></p>
<p><img style="width: 45%; border: 1px solid black; border-radius: 4px; border-width: 1px;" src="https://raw.githubusercontent.com/txchnoknd/elFinderM/master/Screenshots/Screen0.png" alt="Choose a Theme" width="241" height="124" />&nbsp;<img style="width: 45%; border: 1px solid black; border-radius: 4px; border-width: 1px;" src="https://raw.githubusercontent.com/txchnoknd/elFinderM/master/Screenshots/Screen3.png" alt="A nice Theme" width="241" height="125" /></p>
<p><img style="width: 30%; border: 1px solid black; border-radius: 3px; border-width: 1px;" src="https://raw.githubusercontent.com/txchnoknd/elFinderM/master/Screenshots/Screen5.png" alt="Login to elFinder" width="161" height="83" />&nbsp;<img style="width: 30%; border: 1px solid black; border-radius: 3px; border-width: 1px;" src="https://raw.githubusercontent.com/txchnoknd/elFinderM/master/Screenshots/Screen2.png" alt="A nice Theme" width="161" height="82" />&nbsp;<img style="width: 30%; border: 1px solid black; border-radius: 3px; border-width: 1px;" src="https://raw.githubusercontent.com/txchnoknd/elFinderM/master/Screenshots/Screen4.png" alt="A nice Theme" width="161" height="83" /></p>
<h3><strong><span style="text-decoration: underline;">Features of modificated Version of elFinder:</span></strong></h3>
<ul>
<li>Protection via user-authentication with a <strong>Login-System</strong><sup>(*1)</sup></li>
<li>Inbuild <strong>Theme-Manager</strong> with actually 7 choosable Themes</li>
<li><strong>Full-Size</strong> Filemanager to use the complete browser-window</li>
</ul>
<p><span style="text-decoration: underline;"><strong>Launch and Configure the Filemanager after drop elFinder to your Server</strong></span> - Before you can use the elFinder-Filmanager on your server, you have to open and edit with a text- or code-editor the <span style="text-decoration: underline;"><em><span style="background-color: #ccffff;">elFinderM/php/<strong>connector.minimal.php</strong></span></em></span> and define the variables with your server details. <sub>(Line 154 and 155 of&nbsp;<em>connector.minimal.php</em> is required to fill out!) </sub>After the right configuration, you can launch elFinder by opening the the root-dir which includes elFinder in your Browser (e.g.:&nbsp;<span style="text-decoration: underline;"><em>http(s)://your-server/path-to-elfinder/</em></span>).</p>
<p><span style="text-decoration: underline;"><strong>Create your Account for Login</strong></span><sup>(*1)&nbsp;</sup>-&nbsp;You only be able to access your elFinder-Filemanager with a valid user-account&nbsp;consisting of username and password. You can create a new user-account by typing the following URL in your browser:<br /> <em><span style="text-decoration: underline;"><span style="background-color: #ccffff;">http(s)://your-server/path-to-elfinder/<strong>register.php</strong></span></span></em><br />On this page you can create your and some others new user-account(s). After that, if you created a new user, you are able to login with your user-account-details on the elFinder-Filemanager application/client page. It is really recommended to delete or rename the&nbsp;<span style="text-decoration: underline;"><em>register.php</em></span>-file in elFinders directory after you created your user-account,&nbsp;so as not to give strangers the opportunity to create a user and gain access.</p>
<p><span style="text-decoration: underline;"><strong>Choose a Theme</strong></span> - Just click "Change Theme" in your elFinder-Filemanager client!</p>
<hr />
<p><span style="color: #808080;">This Version was modificated by <a style="color: #808080;" href="http://j0hn.eu" target="_blank" rel="noopener">John Felber</a></span></p>
<h3><strong><span style="text-decoration: underline;">The Original <a href="https://github.com/Studio-42/elFinder/" target="_blank" rel="noopener">elFinder</a> is from&nbsp;<a href="https://github.com/Studio-42/" target="_blank" rel="noopener">Studio-42</a>. So here is the Stuff of the original Readme with all informations about.</span></strong></h3>
<p>elFinder is an open-source file manager for web, written in JavaScript using jQuery UI. Creation is inspired by simplicity and convenience of Finder program used in Mac OS X operating system.</p>
<p><a href="https://github.com/Studio-42/elFinder/releases/latest"><img src="https://camo.githubusercontent.com/b71f4eae040b2e34153f9313c4c52fda0eff6896/68747470733a2f2f73747564696f2d34322e6769746875622e696f2f656c46696e6465722f696d616765732f646f776e6c6f61642d69636f6e2e706e67" alt="Download now!" data-canonical-src="https://studio-42.github.io/elFinder/images/download-icon.png" /></a>&nbsp;<a href="https://choosealicense.com/licenses/bsd-3-clause/" rel="nofollow"><img src="https://camo.githubusercontent.com/95246861643440f4aa143f94b93f487f8f84181b/68747470733a2f2f706f7365722e707567782e6f72672f73747564696f2d34322f656c66696e6465722f6c6963656e73652e706e67" alt="Packagist License" data-canonical-src="https://poser.pugx.org/studio-42/elfinder/license.png" /></a>&nbsp;<a href="https://packagist.org/packages/studio-42/elfinder" rel="nofollow"><img src="https://camo.githubusercontent.com/39ca49f8e95ac356d629f3ebafc75a085f4fec80/68747470733a2f2f706f7365722e707567782e6f72672f73747564696f2d34322f656c66696e6465722f76657273696f6e2e706e67" alt="Latest Stable Version" data-canonical-src="https://poser.pugx.org/studio-42/elfinder/version.png" /></a>&nbsp;<a href="https://packagist.org/packages/studio-42/elfinder" rel="nofollow"><img src="https://camo.githubusercontent.com/9918cbcd18a5e3275d56c0155cc470a990dead72/68747470733a2f2f706f7365722e707567782e6f72672f73747564696f2d34322f656c66696e6465722f642f746f74616c2e706e67" alt="Total Downloads" data-canonical-src="https://poser.pugx.org/studio-42/elfinder/d/total.png" /></a>&nbsp;<a href="https://cdnjs.com/libraries/elfinder" rel="nofollow"><img src="https://camo.githubusercontent.com/0d15367fa4604c04c73a47826b084827417387bc/68747470733a2f2f696d672e736869656c64732e696f2f63646e6a732f762f656c66696e6465722e737667" alt="CDNJS version" data-canonical-src="https://img.shields.io/cdnjs/v/elfinder.svg" /></a>&nbsp;<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=FF5FKRSMKYDVA" rel="nofollow"><img src="https://camo.githubusercontent.com/d5d24e33e2f4b6fe53987419a21b203c03789a8f/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f446f6e6174652d50617950616c2d677265656e2e737667" alt="Donate Paypal(nao-pon)" data-canonical-src="https://img.shields.io/badge/Donate-PayPal-green.svg" /></a>&nbsp;<a href="https://studio-42.github.io/elFinder/tools/donate-bitcoin/" rel="nofollow"><img src="https://camo.githubusercontent.com/d6da9755208b00aacc21a284f807effc7cd06776/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f446f6e6174652d426974636f696e2d6f72616e67652e737667" alt="Donate Bitcoin(nao-pon)" data-canonical-src="https://img.shields.io/badge/Donate-Bitcoin-orange.svg" /></a></p>
<h2><a id="user-content-contents" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#contents" aria-hidden="true"></a>Contents</h2>
<ul>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#branches">Branches</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#features">Features</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#requirements">Requirements</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#installation">Installation</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#downloads">Downloads</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#demo-sites">Demo Sites</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#faqs">FAQs</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-connectors">3rd Party Connectors</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-volume-drivers">3rd Party Volume Drivers</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-themes">3rd Party Themes</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#support">Support</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#authors">Authors</a></li>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/README.md#license">License</a></li>
</ul>
<h2><a id="user-content-branches" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#branches" aria-hidden="true"></a>Branches</h2>
<ul>
<li><a href="https://github.com/Studio-42/elFinder/tree/master">master</a>&nbsp;- Main development branch</li>
<li><a href="https://github.com/Studio-42/elFinder/tree/2.1-src">2.1-src</a>&nbsp;- 2.1 development branch, auto build to 2.1 on commit</li>
<li><a href="https://github.com/Studio-42/elFinder/tree/2.1">2.1</a>&nbsp;- 2.1 nightly build branch</li>
</ul>
<h2><a id="user-content-features" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#features" aria-hidden="true"></a>Features</h2>
<ul>
<li>Usability like the MacOS Finder or Windows Explorer</li>
<li>Mobile friendly view for touch devices</li>
<li>All operations with files and folders on a remote server (copy, move, upload, create folder/file, rename, etc.)</li>
<li>High performance server backend and light client UI</li>
<li>Multi-root support</li>
<li>Local file system, MySQL, FTP, Box, Dropbox, GoogleDrive and OneDrive volume storage drivers</li>
<li>Support AWS S3, Azure, Digital Ocean Spaces and more with&nbsp;<a href="https://github.com/barryvdh/elfinder-flysystem-driver">League\Flysystem</a>&nbsp;Flysystem driver</li>
<li>Cloud storage (Box, Dropbox, GoogleDrive and OneDrive) drivers</li>
<li>Background file/folder upload with Drag &amp; Drop HTML5 support</li>
<li>Chunked file upload for large file</li>
<li>Upload directly to the folder</li>
<li>Upload form URL (or list)</li>
<li>List and Icons view</li>
<li>Keyboard shortcuts</li>
<li>Standard methods of file/group selection using mouse or keyboard</li>
<li>Move/Copy files with Drag &amp; Drop</li>
<li>Drag &amp; Drop to outside by starting drag with alt/option key press</li>
<li>Archives create/extract (zip, rar, 7z, tar, gzip, bzip2)</li>
<li>Rich context menu and toolbar</li>
<li>Quicklook, preview for common file types</li>
<li>Edit text files and images</li>
<li>"Places" for your favorites</li>
<li>Calculate directory sizes</li>
<li>Thumbnails for image, movie files</li>
<li>Easy to integrate with web editors (elRTE, CKEditor, TinyMCE)</li>
<li>Flexible configuration of access rights, upload file types, user interface and other</li>
<li>Extensibility by event handling of backend and client side</li>
<li>Simple client-server API based on JSON</li>
<li>Supports custom information in info dialog</li>
<li>Configuable columns of list view</li>
<li>Supports custom CSS class function for the custom folder icon</li>
<li>Connector plugin
<ul>
<li><a href="https://github.com/Studio-42/elFinder/blob/2.1-src/php/plugins/AutoRotate/plugin.php">AutoRotate</a>&nbsp;: Auto rotation on file upload of JPEG file by EXIF Orientation.</li>
<li><a href="https://github.com/Studio-42/elFinder/blob/2.1-src/php/plugins/AutoResize/plugin.php">AutoResize</a>&nbsp;: Auto resize on file upload.</li>
<li><a href="https://github.com/Studio-42/elFinder/blob/2.1-src/php/plugins/Normalizer/plugin.php">Normalizer</a>&nbsp;: UTF-8 Normalizer of file-name and file-path etc.</li>
<li><a href="https://github.com/Studio-42/elFinder/blob/2.1-src/php/plugins/Sanitizer/plugin.php">Sanitizer</a>&nbsp;: Sanitizer of file-name and file-path etc.</li>
<li><a href="https://github.com/Studio-42/elFinder/blob/2.1-src/php/plugins/Watermark/plugin.php">Watermark</a>&nbsp;: Print watermark on file upload.</li>
</ul>
</li>
<li>For more details, see the&nbsp;<a href="https://github.com/Studio-42/elFinder/blob/master/Changelog">Changelog</a></li>
</ul>
<h2><a id="user-content-requirements" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#requirements" aria-hidden="true"></a>Requirements</h2>
<h3><a id="user-content-jquery--jquery-ui" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#jquery--jquery-ui" aria-hidden="true"></a>jQuery / jQuery UI</h3>
<ul>
<li>jQuery 1.8.0+</li>
<li>jQuery UI 1.9.0+
<ul>
<li>Required: draggable, droppable, resizable, selectable, button and slider</li>
<li>Recommend: sorter (To make sortable the List column and the Places)</li>
</ul>
</li>
</ul>
<p><strong>However, we recommend newest version.</strong></p>
<h3><a id="user-content-client" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#client" aria-hidden="true"></a>Client</h3>
<ul>
<li>Modern browsers both of desktop or mobile. elFinder was tested in newest Chrome, Edge, Firefox, IE and Opera
<ul>
<li><strong>Caution</strong>: Web App mode ("apple-mobile-web-app-capable" meta tag) on iOS is not work perfectly in elFinder</li>
</ul>
</li>
</ul>
<h3><a id="user-content-server" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#server" aria-hidden="true"></a>Server</h3>
<ul>
<li>Any web server</li>
<li>PHP 5.2+ (Recommend PHP 5.4 or higher) And for thumbnails - GD / Imagick module / convert(imagemagick) require
<ul>
<li>Recommend PHP 7.1 or higher to supports non-ASCII character of file path/name on the Windows server</li>
</ul>
</li>
</ul>
<h2><a id="user-content-installation" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#installation" aria-hidden="true"></a>Installation</h2>
<p><strong>WARNING: IF YOU HAVE OLDER (IN PARTICULAR 2.1.48 OR EARLIER) VERSIONS OF ELFINDER ON PUBLIC SERVERS, IT MAY CAUSE SERIOUS DAMAGE TO YOUR SERVER AND VISITED USER. YOU SHOULD UPDATE TO THE LATEST VERSION OR REMOVE IT FROM THE SERVER.</strong></p>
<h3><a id="user-content-builds-compressed" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#builds-compressed" aria-hidden="true"></a>Builds (compressed)</h3>
<ol>
<li>Download and unzip one of the&nbsp;<a href="https://github.com/Studio-42/elFinder/blob/master/README.md#downloads">builds</a>&nbsp;below to your PHP server</li>
<li>Rename&nbsp;<code>/php/connector.minimal.php-dist</code>&nbsp;to&nbsp;<code>/php/connector.minimal.php</code></li>
<li>Load&nbsp;<code>/elfinder.html</code>&nbsp;in your browser to run elFinder</li>
</ol>
<h3><a id="user-content-source-uncompressed" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#source-uncompressed" aria-hidden="true"></a>Source (uncompressed)</h3>
<ol>
<li>
<p>Clone this repository to your PHP server</p>
<pre><code>$ git clone https://github.com/Studio-42/elFinder.git
</code></pre>
</li>
<li>
<p>Rename&nbsp;<code>/php/connector.minimal.php-dist</code>&nbsp;to&nbsp;<code>/php/connector.minimal.php</code></p>
</li>
<li>
<p>Load&nbsp;<code>/elfinder.src.html</code>&nbsp;in your browser to run elFinder</p>
</li>
</ol>
<h3><a id="user-content-installer" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#installer" aria-hidden="true"></a>Installer</h3>
<ul>
<li><a href="https://github.com/Studio-42/elFinder/tree/gh-pages/tools/installer/setup_with_composer">Setup elFinder 2.1.x nightly with Composer</a></li>
</ul>
<h2><a id="user-content-downloads" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#downloads" aria-hidden="true"></a>Downloads</h2>
<p><strong>Stable releases</strong>&nbsp;(<a href="https://github.com/Studio-42/elFinder/blob/master/Changelog">Changelog</a>)</p>
<ul>
<li><a href="https://github.com/Studio-42/elFinder/archive/2.1.55.zip">elFinder 2.1.55</a></li>
<li><a href="https://github.com/Studio-42/elFinder/archive/2.0.9.zip">elFinder 2.0.9</a>&nbsp;(deprecated)</li>
</ul>
<p><strong>Nightly builds</strong></p>
<ul>
<li><a href="https://github.com/Studio-42/elFinder/archive/2.1.zip">elFinder 2.1.x (Nightly)</a></li>
</ul>
<h2><a id="user-content-demo-sites" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#demo-sites" aria-hidden="true"></a>Demo sites</h2>
<p><strong>2.1.x Nightly</strong></p>
<ul>
<li><a href="https://studio-42.github.io/elFinder/" rel="nofollow">https://studio-42.github.io/elFinder/</a>&nbsp;(with CORS)</li>
<li><a href="https://hypweb.net/elFinder-nightly/demo/2.1/" rel="nofollow">https://hypweb.net/elFinder-nightly/demo/2.1/</a></li>
</ul>
<h2><a id="user-content-faqs" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#faqs" aria-hidden="true"></a>FAQs</h2>
<h3><a id="user-content-should-i-use-elfinder-builds-compressed-or-source-uncompressed" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#should-i-use-elfinder-builds-compressed-or-source-uncompressed" aria-hidden="true"></a>Should I use elFinder builds (compressed) or source (uncompressed)?</h3>
<p>For debugging and development, use the&nbsp;<a href="https://github.com/Studio-42/elFinder/blob/master/README.md#source-uncompressed">source</a>. For production, use&nbsp;<a href="https://github.com/Studio-42/elFinder/blob/master/README.md#builds-compressed">builds</a>.</p>
<h3><a id="user-content-how-do-i-integrate-elfinder-with-ckeditortinymceelrteetc" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#how-do-i-integrate-elfinder-with-ckeditortinymceelrteetc" aria-hidden="true"></a>How do I integrate elFinder with CKEditor/TinyMCE/elRTE/etc...?</h3>
<p>Check out the&nbsp;<a href="https://github.com/studio-42/elFinder/wiki#howtos">wiki</a>&nbsp;for individual instructions.</p>
<h3><a id="user-content-the-procedure-of-language-files-created-or-modified" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#the-procedure-of-language-files-created-or-modified" aria-hidden="true"></a>The procedure of language files created or modified?</h3>
<p>You can create or modify the language file to use translation tool. Please refer to the pull request the results to the respective branch.</p>
<ul>
<li><a href="http://studio-42.github.io/elFinder/tools/langman/#2.1" rel="nofollow">2.1 branch translation tool</a></li>
</ul>
<h2><a id="user-content-3rd-party-connectors" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-connectors" aria-hidden="true"></a>3rd party connectors</h2>
<ul>
<li><a href="https://github.com/gordon-matt/elFinder.NetCore">ASP.NET Core</a></li>
<li><a href="https://github.com/leniel/elFinder.Net">ASP.NET</a></li>
<li><a href="https://github.com/trustsystems/elfinder-java-connector">Java Servlet</a></li>
<li><a href="https://github.com/efwGrp/efw3.X/blob/master/help/tag.elfinder.md">JavaScript/Efw</a></li>
<li><a href="https://github.com/dekyfin/elfinder-node">Nodejs</a></li>
<li><a href="https://github.com/Studio-42/elfinder-python">Python</a></li>
<li><a href="https://github.com/phallstrom/el_finder">Ruby/Rails</a></li>
</ul>
<h2><a id="user-content-3rd-party-volume-drivers" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-volume-drivers" aria-hidden="true"></a>3rd party Volume Drivers</h2>
<ul>
<li><a href="https://github.com/barryvdh/elfinder-flysystem-driver">League\Flysystem (PHP)</a>&nbsp;(for elFinder 2.1+) driver for the&nbsp;<a href="https://github.com/thephpleague/flysystem">Flysystem</a></li>
</ul>
<h2><a id="user-content-3rd-party-themes" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-themes" aria-hidden="true"></a>3rd party Themes</h2>
<p>Hint:&nbsp;<a href="https://github.com/Studio-42/elFinder/wiki/How-to-load-CSS-with-RequireJS%3F">How to load CSS with RequireJS?</a></p>
<ul>
<li><a href="https://github.com/lokothodida/elfinder-theme-moono">lokothodida/elfinder-theme-moono</a></li>
<li><a href="https://github.com/lokothodida/elfinder-theme-windows-10">lokothodida/elfinder-theme-windows-10</a></li>
<li><a href="https://github.com/RobiNN1/elFinder-Material-Theme">RobiNN1/elFinder-Material-Theme</a></li>
<li><a href="https://github.com/StudioJunkyard/LibreICONS/tree/master/themes/elFinder">StudioJunkyard/elfinder-boostrap-theme</a></li>
</ul>
<h2><a id="user-content-3rd-party-integrations" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#3rd-party-integrations" aria-hidden="true"></a>3rd party Integrations</h2>
<ul>
<li><a href="https://github.com/mikery/django-elfinder">Django</a></li>
<li><a href="https://www.drupal.org/project/elfinder" rel="nofollow">Drupal</a></li>
<li><a href="https://github.com/barryvdh/laravel-elfinder">Laravel</a></li>
<li><a href="https://github.com/Offerel/roundcube_elfinder">Roundcube</a></li>
<li><a href="https://github.com/helios-ag/FMElfinderBundle">Symfony</a></li>
<li><a href="https://doc.tiki.org/elFinder" rel="nofollow">Tiki Wiki</a></li>
<li><a href="https://wordpress.org/plugins/file-manager/" rel="nofollow">WordPress</a></li>
<li><a href="https://github.com/nao-pon/xelfinder">XOOPS</a></li>
<li><a href="http://www.yiiframework.com/extension/elfinder/" rel="nofollow">Yii</a></li>
<li><a href="http://www.zenphoto.org/news/elfinder/" rel="nofollow">Zenphoto</a></li>
</ul>
<h2><a id="user-content-support" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#support" aria-hidden="true"></a>Support</h2>
<ul>
<li><a href="http://elfinder.org/" rel="nofollow">Homepage</a></li>
<li><a href="https://github.com/Studio-42/elFinder/wiki">Wiki</a></li>
<li><a href="https://github.com/Studio-42/elFinder/issues">Issues</a></li>
<li><a href="mailto:dev@std42.ru">dev@std42.ru</a></li>
</ul>
<h2><a id="user-content-authors" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#authors" aria-hidden="true"></a>Authors</h2>
<ul>
<li>Current main developer: Naoki Sawada&nbsp;<a href="mailto:hypweb+elfinder@gmail.com">hypweb+elfinder@gmail.com</a></li>
<li>Chief developer: Dmitry "dio" Levashov&nbsp;<a href="mailto:dio@std42.ru">dio@std42.ru</a></li>
<li>Maintainer: Troex Nevelin&nbsp;<a href="mailto:troex@fury.scancode.ru">troex@fury.scancode.ru</a></li>
<li>Developers: Alexey Sukhotin&nbsp;<a href="mailto:strogg@yandex.ru">strogg@yandex.ru</a>, Naoki Sawada&nbsp;<a href="mailto:hypweb+elfinder@gmail.com">hypweb+elfinder@gmail.com</a></li>
<li>Icons: PixelMixer,&nbsp;<a href="http://p.yusukekamiyamane.com/" rel="nofollow">Yusuke Kamiyamane</a>,&nbsp;<a href="https://icons8.com/" rel="nofollow">Icons8</a></li>
</ul>
<p>We hope our tools will be helpful for you.</p>
<h2><a id="user-content-license" class="anchor" href="https://github.com/Studio-42/elFinder/blob/master/README.md#license" aria-hidden="true"></a>License</h2>
<p>elFinder is issued under a 3-clauses BSD license.</p>
<ul>
<li><a href="https://github.com/Studio-42/elFinder/blob/master/LICENSE.md">License terms</a></li>
</ul>