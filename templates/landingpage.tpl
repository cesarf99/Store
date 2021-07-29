{extends file="layout.tpl"}
{block name=title}Home{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">

{block name=body}
    <h1>Welcome to our shop , check some of the products available</h1>

    <div class="row">
        {foreach from=$data item="entry"}
            <div class="column" style="border:2px solid black;">
                <h3>
                    {$entry.DESCRIPTION}
                </h3>

                <img src="{$entry.IMGPATH}" width="50%" height="50%" object-fit: contain">
                <h3>
                    Price:{$entry.PRICE}
                </h3>

                
            </div>
        {/foreach}
    </div>

{/block}