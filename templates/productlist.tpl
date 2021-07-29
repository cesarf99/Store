{extends file="layout.tpl"}
{block name=title}Product List{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">

{block name=body}
    <h1>Products</h1>

    <div class="row">
        {foreach from=$data item="entry"}
            <div class="column" style="border:2px solid black;">
                <form action="{$SCRIPT_NAME}?action=productdestination" method="POST">
                    <input type="hidden" name="id" value="{$entry.PRODUCTID}"/>

                    <h3>{$entry.DESCRIPTION}</h3>
                    <img src="{$entry.IMGPATH}" width="50%" height="50%" object-fit: contain">
                    <h3>Price:{$entry.PRICE}</h3>
                    <div>
                        <input type="submit" name="destination" value="Add to cart"/>
                        <input type="submit" name="destination" value="Buy" style="float:right;"/> 
                    </div>
                </form>
            </div>
        {/foreach}
    </div>
{/block}



