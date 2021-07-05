{extends file="layout.tpl"}
{block name=title}Home{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">
{block name=body}
    <h1>Welcome to our shop , check some of the products available</h1>

    <div class="row">
        {foreach from=$data item="entry"}
            <div class="column" style="border:1px solid black;">
                <h6>
                    {$entry.DESCRIPTION}
                </h6>
                <img src="{$entry.IMGPATH}" width="50%" height="50%" object-fit: contain">
                <h6>
                    <tr >
                        <td>Price:{$entry.PRICE}</td>  
                        <td>Add to Cart</td>      
                        <td> Buy</td>
                    </tr>
            </div>
        {/foreach}
    </div>

</div
{/block}