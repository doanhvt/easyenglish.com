<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/jquery.prettyPhoto.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/jquery.isotope.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/main.js') ?>"></script>
        <script src="<?php echo base_url('public/js/myip.js') ?>"></script>
        <script src="<?php echo base_url('public/js/wow.min.js') ?>"></script>
    </head>
    <body>
        <div style="text-align:center;">
            <form id="ipform" action="http://ip-api.com/json" method="get">
                your ip:
                <input id="yourip" name="yourip" text="text" value=""/>
                <button id="submit" type="submit">Submit</button>
            </form>
        </div>       
    </body>
</html>

