<html>
    <head>
        <title>{block name=title}Default Page Title{/block}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <header>
        {include file='header.tpl'}
    </header>

    <body class="content">
    {block name=body}{/block}
</body>

<footer>
    {include file='footer.tpl'}
</footer>

</html>
