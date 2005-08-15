<?php

    //
    // all different modes in which images can be embedded in posts
    //
    define( 'MOBLOG_EMBED_SMALL_PREVIEW', 1 );
    define( 'MOBLOG_EMBED_MEDIUM_PREVIEW', 2 );
    define( 'MOBLOG_EMBED_FULL_SIZE', 3 );
    
    //
    // whether to ignore SMIL files attached to messages... These are usually attached
    // by mobile phones in MMS messages, as they specify how the message should be
    // played
    //
    define( 'MOBLOG_IGNORE_SMIL_ATTACHMENTS', true );
    
    // encode all incoming e-mail message to UTF-8
    define( 'MOBLOG_FORCE_ENCODE_TO_UTF8', true );
?>