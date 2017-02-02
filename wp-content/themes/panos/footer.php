        </div>

        <footer>&copy;&nbsp;<?php echo date("Y"); ?>&nbsp;&#124;&nbsp;Panos Dance Studio &ndash; <?php bloginfo('description'); ?></footer>


        <?php wp_footer(); ?>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                
                /*add classes for Bootstrap navbar dropdowns*/
                //if li has ul, it needs .dropdown class
                $("ul.navbar-nav>li>ul").parent().addClass("dropdown");
                //ul of a li needs .dropdown-menu class
                $("ul.navbar-nav>li>ul").addClass("dropdown-menu");
                //if li has ul, its anchor tag needs .dropdown-toggle class and attr data-toggle="dropdown"
                $("ul.navbar-nav>li:has(ul)>a").addClass("dropdown-toggle");
                $("ul.navbar-nav>li:has(ul)>a").attr("data-toggle", "dropdown");
                
            });
        </script>
    </body>
</html>