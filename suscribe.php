<?php
$api_key = "68b7a43a82740312ae8b98b16dec4fae-us12";
$list_id = "16a24afed6";
require('./Mailchimp/src/Mailchimp.php');
$Mailchimp = new Mailchimp( $api_key );
$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );
echo "hello".$_POST['EMAIL'];
//$subscriber = $Mailchimp_Lists->subscribe($list_id, array('email' => $_POST['EMAIL']));
if ( ! empty( $subscriber['leid'] ) ) {
    echo "success";
}
else
{
    echo "fail";
}
?>
<div id="mc_embed_signup">
    <form action="//shapeheart.us12.list-manage.com/subscribe/post?u=bae5feda13b91325afa9cf6e1&amp;id=16a24afed6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
                <p id="votre_email">
                    <span class="english"><input type="email" value="" placeholder="Your email" name="EMAIL" class="required email" id="mce-EMAIL"></span>
                    <span class="francais"><input type="email" value="" placeholder="Votre email" name="EMAIL" class="required email" id="mce-EMAIL"></span>
                </p>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer">
        </div>
    </form>
</div>

<div id="mc_embed_signup">
    <form action="//shapeheart.us12.list-manage.com/subscribe/post?u=bae5feda13b91325afa9cf6e1&amp;id=16a24afed6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
                <p id="votre_email">
                    <span class="english"><input type="email" value="" placeholder="Your email" name="EMAIL" class="required email" id="mce-EMAIL"></span>
                    <span class="francais"><input type="email" value="" placeholder="Votre email" name="EMAIL" class="required email" id="mce-EMAIL"></span>
                </p>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer">
        </div>
    </form>
</div>
