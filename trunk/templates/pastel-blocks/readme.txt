Pastel Blocks template for pLog

  version 1.0 
  2004-11-04
  design by Tony Masiello 
            http://tonymasiello.com
            pastel-colors@tonymasiello.com

This is an orginal design that has been modified to work with pLog. It uses a fluid two column layout with nested DIVs to obtain a shadow box effect and multiple alternate stylesheets. It uses several very light 'pastel' colors for a varied effect, that is still easy on the eyes, and will contrast well with most darker text colors. If you plan to use light colors of text within your blog entries, than this template might not be for you. 

Every effort has been made to make this template error free with valid XHTML and valid CSS. If you find any errors please report them to me at; pastel-colors@tonymasiello.com


Some tips for tweaking this template:

 - Add your own copyright message
     - The copyright message is in the file 'block-endcredits.template'. You can add your own custom copyright or footer message here. Please leave the credits intact. Thanks!

 - Add your own logo
     - Replace the file logo.jpg with your logo. The current logo is 792x130
     - If your logo will have different dimensions, you will need to make some slight modifications to the style sheets.
        Open the document style.css 
        Edit the '.banner-shadow' class to match the 'width' and 'height' of your logo
        Edit the '.banner' class to match the 'height' of your logo
        If you intend to use the enclosed 'alternate stylesheets' make all of the above changes to these classes where appropriate. If a given property is not listed, do NOT add it. 

 - Removing the Alternate Stylesheets
     - Open the file 'header.template'
     - delete all lines at the top of the file that begin; <link rel="alternate stylesheet"

 - Editing the style sheets
     - I used multiple style documents for each available style. The file style-common.css contains most of the declarations that are common to every style. 
     - Please let me know if you create new styles for this template (without editing the template itself). I will consider including them in future versions of the template.

 - Adding, removing or reordering  'blocks' from the template
     - Open the header.template file and look for the following section of the file;

           {include file="$blogtemplate/block-calendar.template"}
           {include file="$blogtemplate/block-links.template"}
           {include file="$blogtemplate/block-categories.template"}
           {include file="$blogtemplate/block-recently.template"}
           {include file="$blogtemplate/block-archives.template"}
           {include file="$blogtemplate/block-syndicate.template"}
           {include file="$blogtemplate/block-resources.template"}

      - Any of these blocks can be removed simply by removing the line the calls it's template file.
      - In addition, and new blocks can easily be added by creating a new template for your block and adding the appropriate include statement.

 - Editing the template files
      - Have fun editing the template files and customizing them for your site. If you keep the look, feel or structure of Pastel Blocks, please leave the credits intact. Thanks!


credits:
  line1.gif and line2.gif images modified from images found at http://www.iconarchive.com/

