{extends file="layout.tpl"}
{block name=title}New Client{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">

{block name=body}
    <h1>Regist form</h1>


    <form action="{$SCRIPT_NAME}?action=register" method="post">
        <h3>Insert your data</h3>
        <p>Name:<input type="text" name="name">
        <p>Username:<input type="text" name="username">
        <p>Email:<input type="email" name="email">
        <p>Password:<input type="password" name="password">
        <p>Address:<input type="address" name="address">
            <input type="submit" value="Register">
    </form>
</div

{/block}