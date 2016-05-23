<?php 
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php"); ?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <p>If you think there is something I&rsquo;m missing, Let me know! Complete the form to send me an email</p>
        <form method="post" action="process.php">
            <table>
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" name="name" id="name" /></td>
                </tr>
                <tr>
                    <th><label for="email">EMail</label></th>
                    <td><input type="email" name="email" id="email" /></td>
                </tr>
                <tr>
                    <th><label for="details">Suggest Item Details</label></th>
                    <td><textarea name="details" id="details"></textarea>
                </tr>
            </table>
            <input type="submit" value="Send"  />
        </form>
    </div>

</div>
<?php include("inc/footer.php"); ?>