{extends file="layout.tpl"}
{block name=title}Home{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">

{block name=body}
    <h1>Logged In</h1>
    {$smarty.session.name}
    <h1>Items in Cart:</h1>
    <table border="0">
        {foreach from=$data item="entry"}
            <tr>
                <td>{$entry.NAME|escape}</td> 
                


            </tr>
        {foreachelse}
            <tr>
                <td>No items</td>
            </tr>
        {/foreach}
    </table>

{/block}