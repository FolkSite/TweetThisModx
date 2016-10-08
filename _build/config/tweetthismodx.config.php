<?php

 /*               DO NOT EDIT THIS FILE

  Edit the file in the MyComponent config directory
  and run ExportObjects

 */



$packageNameLower = 'tweetthismodx'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    'packageName' => 'TweetThisModx',  /* No spaces, no dashes */
    'packageNameLower' => $packageNameLower,
    'packageDescription' => 'TweetThisModx for Social Marketers',
    'version' => '1.2.2',
    'release' => 'beta1',
    'author' => 'Daniel Harding',
    'email' => 'hello@stuntrocket.co',
    'authorUrl' => 'https://stuntrocket.co',
    'authorSiteName' => "StuntRocket",
    'packageDocumentationUrl' => 'https://github.com/stuntrocket/TweetThisModx',
    'copyright' => '2016',

    /* no need to edit this except to change format */
    'createdon' => strftime('%m-%d-%Y'),

    'gitHubUsername' => 'StuntRocket',
    'gitHubRepository' => 'TweetThisModx',

    /* two-letter code of your primary language */
    'primaryLanguage' => 'en',

    /* Set directory and file permissions for project directories */
    'dirPermission' => 0755,  /* No quotes!! */
    'filePermission' => 0644, /* No quotes!! */

    /* Define source and target directories */

    /* path to MyComponent source files */
    'mycomponentRoot' => $this->modx->getOption('mc.root', null,
        MODX_CORE_PATH . 'components/mycomponent/'),

    /* path to new project root */
    'targetRoot' => MODX_ASSETS_PATH . 'mycomponents/' . $packageNameLower . '/',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    'newSystemSettings' => array(
        'TweetThisModxEnabled' => array( // key
            'key' => 'tweetthismodx.enabled',
            'name' => 'TweetThisModx Enabled',
            'description' => 'Global Enable & Disable',
            'namespace' => 'tweetthismodx',
            'xtype' => 'combo-boolean',
            'value' => 1,
            'area' => 'Site',
        ),
        'TweetThisModxHighlightClass' => array( // key
            'key' => 'tweetthismodx.highlight_class',
            'name' => 'CSS Hightlight Class',
            'description' => 'CSS Class can be overridden when called in Chunks',
            'namespace' => 'tweetthismodx',
            'xtype' => 'textfield',
            'value' => 'ttm_highlight',
            'area' => 'Site',
        ),
        'TweetThisModxLinkClass' => array( // key
            'key' => 'tweetthismodx.link_class',
            'name' => 'CSS Link Class',
            'description' => 'CSS Class can be overridden when called in Chunks',
            'namespace' => 'tweetthismodx',
            'xtype' => 'textfield',
            'value' => 'ttm_link',
            'area' => 'Site',
        ),
    ),

    /* ************************ NEW SYSTEM EVENTS ************************* */

    /* Array of your new System Events (not default
     * MODX System Events). Listed here so they can be created during
     * install and removed during uninstall.
     *
     * Warning: Do *not* list regular MODX System Events here !!! */

    'newSystemEvents' => array(
    ),

    /* ************************ NAMESPACE(S) ************************* */
    /* (optional) Typically, there's only one namespace which is set
     * to the $packageNameLower value. Paths should end in a slash
    */

    'namespaces' => array(
        'tweetthismodx' => array(
            'name' => 'tweetthismodx',
            'path' => '{core_path}components/tweetthismodx/',
            'assets_path' => '{assets_path}components/tweetthismodx/',
        ),
    ),

    /* ************************ CONTEXT(S) ************************* */
    /* (optional) List any contexts other than the 'web' context here
    */

    'contexts' => array(
    ),

    /* *********************** CONTEXT SETTINGS ************************ */

    /* If your extra needs Context Settings, set their field values here.
     * You can also create or edit them in the Manager (Edit Context -> Context Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra.
     * The context_key should be the name of an actual context.
     * */

    'contextSettings' => array(
    ),

    /* ************************* CATEGORIES *************************** */
    /* (optional) List of categories. This is only necessary if you
     * need to categories other than the one named for packageName
     * or want to nest categories.
    */

    'categories' => array(
    ),

    /* *************************** MENUS ****************************** */

    /* If your extra needs Menus, you can create them here
     * or create them in the Manager, and export them with exportObjects.
     * Be sure to set their namespace to the lowercase package name
     * of your extra.
     *
     * Every menu should have exactly one action */

    'menus' => array(
    ),


    /* ************************* ELEMENTS **************************** */

    /* Array containing elements for your extra. 'category' is required
       for each element, all other fields are optional.
       Property Sets (if any) must come first!

       The standard file names are in this form:
           SnippetName.snippet.php
           PluginName.plugin.php
           ChunkName.chunk.html
           TemplateName.template.html

       If your file names are not standard, add this field:
          'filename' => 'actualFileName',
    */


    'elements' => array(

        'propertySets' => array( /* all three fields are required */
          'TweetThisModx' => array(
              'name' => 'TweetThisModx',
              'description' => 'TweetThisModx Chunk Properties',
              'category' => 'TweetThisModx',
          ),
        ),

        'snippets' => array(
            'TweetThis' => array(
                'category' => 'TweetThisModx',
                'description' => 'Description for TweetThisModx Snippet',
                'static' => false,
            ),
        ),

        'plugins' => array(
        ),

        'chunks' => array(
            'TweetThisChunk' => array(
                'description' => 'Description for TweetThisModx Chunk',
                'category' => 'TweetThisModx',
                'static' => false,
                'propertySets' => array(
                    'TweetThisModx'
                ),
            ),
        ),
        'templates' => array(
        ),
        'templateVars' => array(
        ),
    ),
    /* (optional) will make all element objects static - 'static' field above will be ignored */
    'allStatic' => false,


    /* ************************* RESOURCES ****************************
     Important: This list only affects Bootstrap. There is another
     list of resources below that controls ExportObjects.
     * ************************************************************** */
    /* Array of Resource pagetitles for your Extra; All other fields optional.
       You can set any resource field here */
    'resources' => array(
    ),


    /* Array of languages for which you will have language files,
     *  and comma-separated list of topics
     *  ('.inc.php' will be added as a suffix). */
    'languages' => array(
        'en' => array(
            'default',
            'properties',
            'forms',
        ),
    ),
    /* ********************************************* */
    /* Define optional directories to create under assets.
     * Add your own as needed.
     * Set to true to create directory.
     * Set to hasAssets = false to skip.
     * Empty js and/or css files will be created.
     */
    'hasAssets' => true,

    'assetsDirs' => array(

        /* If true, a default (empty) CSS file will be created */
        'css' => true,

        /* If true, a default (empty) JS file will be created */
        'js' => true,

        'images' => true,
        'audio' => false,
        'video' => false,

        'themes' => true,
    ),
    /* minify any JS files */
    'minifyJS' => true,
    /* Create a single JS file from all JS files */
    'createJSMinAll' => true,
    /* if this is false, regular jsmin will be used.
       JSMinPlus is slower but more reliable */
    'useJSMinPlus' => true,

    /* These will automatically go under assets/components/yourcomponent/js/
       Format: directory:filename
       (no trailing slash on directory)
       if 'createCmpFiles is true, these will be ignored.
    */
    'jsFiles' => array(
        'tweetthismodx.js',
    ),

    /* Desired CSS files */
    'cssFiles' => array(
        'tweetthismodx.css',
    ),

    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    'docs' => array(
        'readme.txt',
        'license.txt',
        'changelog.txt',
        'tutorial.html'
    ),

    /* (optional) Description file for GitHub project home page */
    'readme.md' => true,
    /* assume every package has a core directory */
    'hasCore' => false,

    /* ********************************************* */
    /* (optional) Array of extra script resolver(s) to be run
     * during install. Note that resolvers to connect plugins to events,
     * property sets to elements, resources to templates, and TVs to
     * templates will be created automatically -- *don't* list those here!
     *
     * 'default' creates a default resolver named after the package.
     * (other resolvers may be created above for TVs and plugins).
     * Suffix 'resolver.php' will be added automatically */
    'resolvers' => array(
        'default',
    ),

    /* (optional) Validators can abort the install after checking
     * conditions. Array of validator names (no
     * prefix of suffix) or '' 'default' creates a default resolver
     *  named after the package suffix 'validator.php' will be added */

    'validators' => array(
        'default',
    ),

    /* (optional) install.options is needed if you will interact
     * with user during the install.
     * See the user.input.php file for more information.
     * Set this to 'install.options' or ''
     * The file will be created as _build/install.options/user.input.php
     * Don't change the filename or directory name. */
    // 'install.options' => 'install.options',


    /* Suffixes to use for resource and element code files (not implemented)  */
    'suffixes' => array(
        'modPlugin' => '.php',
        'modSnippet' => '.php',
        'modChunk' => '.html',
        'modTemplate' => '.html',
        'modResource' => '.html',
    ),


    /* ********************************************* */
    /* (optional) Only necessary if you will have class files.
     *
     * Array of class files to be created.
     *
     * Format is:
     *
     * 'ClassName' => 'directory:filename',
     *
     * or
     *
     *  'ClassName' => 'filename',
     *
     * ('.class.php' will be appended automatically)
     *
     *  Class file will be created as:
     * yourcomponent/core/components/yourcomponent/model/[directory/]{filename}.class.php
     * Note: If a CMP is being created, classes containing the
     * project name will be ignored here.
     *
     * Set to array() if there are no classes. */
    'classes' => array(
        /*
        'AnotherClass' => 'tweetthismodx:anotherclass',
        'methods' => array(
            'AnotherClass' => array(
                'public function method1()',
                'method2($arg1, $arg2 = false)',
            ),
        ),
        */
    ),

    /* ************************************
     *  These values are for CMPs.
     *  Set any of these to an empty array if you don't need them.
     *  **********************************/

    /* If this is false, the rest of this section will be ignored */

    'createCmpFiles' => false,

    /* IMPORTANT: The array values in the rest of
       this section should be all lowercase */

    /* This is the main action file for your component.
       It will automatically go in core/component/yourcomponent/
    */

    'actionFile' => 'index.class.php',

    /* CSS file for CMP */

    'cssFile' => 'mgr.css',

    /* These will automatically go to core/components/yourcomponent/processors/
       format directory:filename
       '.class.php' will be appended to the filename

       Built-in processor classes include getlist, create, update, duplicate,
       import, and export. */

    'processors' => array(
        'mgr/snippet:getlist',
        'mgr/snippet:changecategory',
        'mgr/snippet:remove',

        'mgr/chunk:getlist',
        'mgr/chunk:changecategory',
        'mgr/chunk:remove',
    ),

    /* These will automatically go to core/components/yourcomponent/controllers[/directory]/filename
       Format: directory:filename */

    'controllers' => array(
        ':home.class.php',
    ),

    /* These will automatically go in assets/components/yourcomponent/ */

    'connectors' => array(
        'connector.php'

    ),
    /* These will automatically go to assets/components/yourcomponent/js[/directory]/filename
       Format: directory:filename */

    'cmpJsFiles' => array(
        ':tweetthismodx.class.js',
        'sections:home.js',
        'widgets:home.panel.js',
        'widgets:snippet.grid.js',
        'widgets:chunk.grid.js',
    ),

    /* These go to core/components/componentName/templates/
     * The format is:
     *    filename:content
     * content is optional
     */

    'cmpTemplates' => array (
         'mgr:<div id="tweetthismodx-panel-home-div"></div>',
    ),


    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to '1', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    'dryRun' => '0',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    'process' => array(
        'contexts',
        'snippets',
        'plugins',
        'templateVars',
        'templates',
        'chunks',
        'resources',
        'propertySets',
        'systemSettings',
        'contextSettings',
        'systemEvents',
        'menus'
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    'getResourcesById' => false,

    'exportResources' => array(
    ),

    /* Array of resource parent IDs to get children of. */
    'parents' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    'includeParents' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    'rewriteCodeFiles' => false,  /* remove ~~descriptions */
    'rewriteLexiconFiles' => true, /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
     * Used by the checkproperties utility to check properties in code against
     * the properties in your properties transport files.
     * if you use something else, add it here (OK to remove ones you never use.
     * Search also checks with '$this->' prefix -- no need to add it here. */
    'scriptPropertiesAliases' => array(
        'props',
        'sp',
        'config',
        'scriptProperties'
    ),
);

return $components;
