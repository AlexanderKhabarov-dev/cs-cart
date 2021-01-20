{** block-description:blog.recent_posts_scroller **}

{if $items}

    {assign var="obj_prefix" value="`$block.block_id`000"}
    
    <div class="ty-mb-l">
        {foreach from=$items item="page"}
            <div class="ty-blog-recent-posts__item">

                <div class="ty-blog-recent-posts__img-block">
                    <a href="{"pages.view?page_id=`$page.page_id`"|fn_url}">
                        {include file="common/image.tpl" obj_id=$page.page_id images=$page.main_pair}
                    </a>
                </div>

                <a href="{"pages.view?page_id=`$page.page_id`"|fn_url}">{$page.page}</a>

            </div>
        {/foreach}
            
    </div>
    {/if}