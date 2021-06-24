{* Smarty *}
<table border="0" width="300">
    <tr>
        <th colspan="2" bgcolor="#d1d1d1">
            Guestbook Entries (<a href="{$SCRIPT_NAME}?action=add">add</a>)</th>
    </tr>
    {foreach from=$data item="entry"}
        <tr bgcolor="{cycle values="#dedede,#eeeeee" advance=false}">
            <td>{$entry.USERID|escape}</td>  
            <td>{$entry.NAME|escape}</td>      
            <td>{$entry.USERNAME|escape}</td>   
            <td>{$entry.PASSWORD|escape}</td> 
            <td>{$entry.ADDRESS|escape}</td> 

        </tr>

    {foreachelse}
        <tr>
            <td colspan="2">No records</td>
        </tr>
    {/foreach}
</table>
