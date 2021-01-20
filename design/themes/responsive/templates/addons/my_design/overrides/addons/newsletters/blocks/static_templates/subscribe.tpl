{** block-description:tmpl_subscription **}
{if $addons.newsletters}
    <div class="ty-footer-form-block ty-footer-form-block--responsive">
        <form action="{""|fn_url}" method="post" name="subscribe_form" class="cm-processing-personal-data">
            <input type="hidden" name="redirect_url" value="{$config.current_url}" />
            <input type="hidden" name="newsletter_format" value="2" />
    
            {hook name="newsletters:email_subscription_block"}
    
            <div class="ty-footer-form-block__form-container">
                <div class="ty-footer-form-block__form ty-control-group ty-input-append cm-block-add-subscribe">
                    <label class="cm-required cm-email hidden" for="subscr_email{$block.block_id}">{__("email")}</label>
                    <input type="text" name="subscribe_email" id="subscr_email{$block.block_id}" size="20" value="Your email" class="cm-hint ty-input-text" />
                    
                </div>
                {include file="buttons/go_new.tpl" but_name="newsletters.add_subscriber" alt=__("go")}
            </div>
            {include file="common/image_verification.tpl" option="newsletters"}
            {/hook}
        </form>
    </div>
    {/if}