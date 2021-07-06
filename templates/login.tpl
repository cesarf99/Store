{extends file="layout.tpl"}
{block name=body}
    <br>
    <div >
        <h1>Login</h1>
        <form action="{$SCRIPT_NAME}?action=login" method="POST">
            <div class="align-center">
                <label>Username:</label>
                <input type="text" name="username">
            </div>  
            <br>
            <div class="align-center">
                <label>Password:</label>
                <input type="password" name="password" ) >
            </div>
            <br>
            <div class="align-center">
                <input type="submit" value="Login">
                <p>Don't have an account? <a href="">Sign up now</a></p>
            </div>  
        </form>
    </div>    
{/block}