<link rel="stylesheet" href="css/style.css" type="text/css">

<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="{$SCRIPT_NAME}?action=contact">Contact</a>
    <a href="{$SCRIPT_NAME}?action=about">About</a>
    <a href="{$SCRIPT_NAME}?action=products">Products</a>

    <div class="topnav-right">
         <a href="{$SCRIPT_NAME}?action=cart">Cart</a>
        <a href="{$SCRIPT_NAME}?action=logout">Logout</a>
        <a href="{$SCRIPT_NAME}?action=profile">Welcome: {$smarty.session.name}</a>    
    </div>

</div>

