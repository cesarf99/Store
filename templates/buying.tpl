{extends file="layout.tpl"}

{block name=title}Buying{/block}

{block name=body}
    <h5>Product: {$data.productname}</h5>
    <div class="row">
        <div class="column" >
            <img src="{$data.img}" width="50%" height="50%" object-fit: contain">
        </div>
        <div class="column" >
            <p>Billing information:</p>
            <form>
                Name:<textarea type="text" name="name" rows="4" cols="50">{$data.name} </textarea>
                <p>
                    Address: <textarea type="text" name="address" rows="4" cols="50"> {$data.address} </textarea>
                <p>
                    <input type="submit" value="Buy"  />
            </form>
        </div>
    {/block}
