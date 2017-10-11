<hr>
<footer>
    <ul class="list-inline">
        <li>
            <a href="http://www.linkzconsulting.com.br" class="external btn btn-outline btn-primary" target="_blank">LinkzConsulting by Fabio</a>
        </li>
      
    </ul>
</footer>
<script type="application/ld+json">
    {
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "YouPHPTube",
    "version": "<?php echo $config->getVersion(); ?>",
    "image": "http://youphptube.com/img/logo.png",
    "description": "The Best YouTube Clone Script, a free web solution to build your own video sahring site."
    }
</script>
<script>
    $(function () {
<?php
if (!empty($_GET['error'])) {
    ?>
            swal({title: "Sorry!", text: "<?php echo $_GET['error']; ?>", type: "error", html: true});
    <?php
}
?>
    });
</script>
<script src="<?php echo $global['webSiteRootURL']; ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>js/seetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>js/bootpag/jquery.bootpag.min.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>js/bootgrid/jquery.bootgrid.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>bootstrap/bootstrapSelectPicker/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>js/script.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>js/bootstrap-toggle/bootstrap-toggle.min.js" type="text/javascript"></script>
<script src="<?php echo $global['webSiteRootURL']; ?>js/js-cookie/js.cookie.js" type="text/javascript"></script>