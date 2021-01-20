{script src="js/tygh/tabs.js"}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="hybrid_auth_form">

<div class="items-container cm-sortable" data-ca-sortable-table="hybrid_auth_providers" data-ca-sortable-id-name="provider_id" id="manage_providers_list">
{if $providers_list}

<div class="table-wrapper">
    <table class="table table-middle table--relative table-objects table-striped">
    {foreach $providers_list as $provider_data}
        {include file="common/object_group.tpl"
            id=$provider_data.provider_id
            text=$provider_data.name|default:$provider_data.provider
            href="hybrid_auth.update?provider_id=`$provider_data.provider_id`"
            href_delete="hybrid_auth.delete_provider?provider_id=`$provider_data.provider_id`"
            table="hybrid_auth_providers"
            object_id_name="provider_id"
            delete_target_id="manage_providers_list,content_group_*"
            status=$provider_data.status
            additional_class="cm-sortable-row cm-sortable-id-`$provider_data.provider_id`"
            no_table=true
            is_view_link=false
            header_text="{__("hybrid_auth.editing_provider")}: `$provider_data.name`"
            draggable=true
        }
    {/foreach}
    </table>
</div>

{else}
    <p class="no-items">{__("no_items")}</p>
{/if}
<!--manage_providers_list--></div>
</form>
{/capture}

{capture name="adv_buttons"}
    {capture name="add_new_picker"}
        {include file="addons/hybrid_auth/views/hybrid_auth/update.tpl" provider_data=[]}
    {/capture}

    {if "hybrid_auth.update_provider"|fn_check_view_permissions:"POST"}
        {include file="common/popupbox.tpl" id="add_new_provider" text=__("hybrid_auth.new_provider") content=$smarty.capture.add_new_picker title=__("hybrid_auth.add_provider") act="general" icon="icon-plus"}
    {/if}
{/capture}

{include file="common/mainbox.tpl" title=__("hybrid_auth.providers") content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons}
