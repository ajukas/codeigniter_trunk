<!DOCTYPE html>
<html lang="pt">
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url('assets/images/logo.ico'); ?>" rel="shortcut icon" type="image/x-icon" />
        <?php
        	foreach($css as $key => $value){
                echo(" <link type='text/css' rel='stylesheet' href='".$value."'> ");
            }
    	?>
        <script>
            var URL_ROOT = "<?php echo base_url(); ?>";
        </script>
    </head>
<body>
	<?php
    
    	$this->load->view($header);
    	$this->load->view($content);
    	$this->load->view($footer);

        foreach($js as $key => $value){
            echo(" <script type='text/javascript' src='".$value."'></script> ");
        }
	?>
</body>
</html>