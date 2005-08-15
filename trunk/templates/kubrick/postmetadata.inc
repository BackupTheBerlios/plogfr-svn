      This entry was posted on {$locale->formatDate($postDate,"%d %B, %Y %H:%M")}
      and file under
      {foreach name=categories from=$post->getCategories() item=postcategory}
      <a href="{$url->categoryLink($postcategory)}">{$postcategory->getName()}</a>{if !$smarty.foreach.categories.last}, {/if}
      {/foreach}. 
      You can follow any responses to this entry through the
      <a href="{$url->postRssLink($post)}">RSS2.0</a> feed.
      You can leave a <a href="{$url->postPermalink($post)}">Response</a>, or <a href="{$url->postTrackbackStatsLink($post)}">{$locale->tr("trackbacks")}</a> from your own site.
