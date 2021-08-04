{extends file="layout.tpl"}
{block name=title}Cart{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">

{block name=body}

    <h1>Items in Cart:</h1>
    <table border="1" >
        <thead>
            <tr>
                <th scope="col">TYPE</th>
                <th scope="col">NAME</th>
                <th scope="col">SIZE</th>
                <th scope="col">COLOR</th>
                <th scope="col">PRICE</th>
                <th scope="col"></th>
            </tr>
        </thead>
        {foreach from=$data item="entry"}
            <tr>
                <td>{$entry.TYPE|escape}</td> 
                <td>{$entry.NAME|escape}</td>
                <td>{$entry.SIZE|escape}</td> 
                <td>{$entry.COLOR|escape}</td> 
                <td>{$entry.PRICE|escape}</td> 
                <td>BUY</td> 



            </tr>
        {foreachelse}
            <tr>
                <td>No items</td>
            </tr>
        {/foreach}
    </table>

{/block}
