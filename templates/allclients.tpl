{extends file="layout.tpl"}

{block name=body}

    <table border="0">
        <tr>
            <th>
                All clients(<a href="{$SCRIPT_NAME}?action=add">add</a>)</th>
        </tr>
        {foreach from=$data item="entry"}
            <tr >
                <td>{$entry.CLIENTID|escape}</td>  
                <td>{$entry.NAME|escape}</td>      
                <td>{$entry.USERNAME|escape}</td>   
                <td>{$entry.PASSWORD|escape}</td> 
                <td>{$entry.ADDRESS|escape}</td> 

            </tr>

        {foreachelse}
            <tr>
                <td>No records</td>
            </tr>
        {/foreach}
    </table>
{/block}


