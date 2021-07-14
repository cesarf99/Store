{extends file="layout.tpl"}

{block name=body}
    <h1>Contact us</h1>

    <div class="align-center">
        <form action="" method="post">
            <h3>Any questions? We would love to hear from you:</h3>
            <p>Name:
            <input type="name" id="name">
            <p>
                Email:  
                <input type="email" id="email">
            <p>
                Message:
                <br>
                <textarea id="message" name="txt_comments" rows="10" cols="35">
                </textarea>
                <br>
                <br>
                <input type="submit" value="NOT WORKING">
        </form>
    </div>
{/block}



