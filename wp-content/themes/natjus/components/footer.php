<?php
$email = 'contato@redenatjus.com.br';
?>

<div class="footer">
        
    <div>
        <img 
            src="<?= get_template_directory_uri() ?>/static/images/logo-footer.png" 
            alt="Rede NATJus" 
            title="Rede NATJus"
        >
    </div>
    <a href="mailto:<?= $email ?>">
        <?= $email ?>
    </a>

</div>