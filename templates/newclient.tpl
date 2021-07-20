{extends file="layout.tpl"}
{block name=title}New Client{/block}

<link rel="stylesheet" href="css/style.css" type="text/css">

{block name=body}
    <h1>Regist form</h1>

    <div class="border">
        <form action="{$SCRIPT_NAME}?action=register" method="post">
            <h3>Insert your data:</h3>
            <p>Name:<br>
                <input type="text"  style="width: 30em;" name="name" required>
            <p>Username:<br>
                <input type="text" style="width: 30em;" name="username" required>
            <p>Email:<br>
                <input type="email" style="width: 30em;" name="email" required>
            <p>Password:<br>
                <input type="password" style="width: 30em;" name="password" required>
            <p>Address:<br>
                <input type="address" style="width: 30em;" name="address" required>
            <p><input type="submit" value="Register">
        </form>
    </div>

{/block}