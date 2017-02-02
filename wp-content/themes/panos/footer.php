            <footer>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- blog sidebar -->
                        <?php dynamic_sidebar('blog-sidebar'); ?>
                    </div>
                    <div class="col-sm-6">
                        &copy;&nbsp;<?php echo date("Y"); ?>&nbsp;&#124;&nbsp;Panos Dance Studio &ndash; <?php bloginfo('description'); ?>
                        <?php dynamic_sidebar('social-sidebar'); ?>
                    </div>
                </div>
            </footer>

            <?php wp_footer(); ?>

        </div>
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
                
                //add bootstrap classes to inputs
                $("input[type=text], input[type=password], input[type=datetime-local], input[type=date], input[type=month], input[type=time], input[type=week], input[type=number], input[type=email], input[type=url], input[type=search], input[type=tel], input[type=color]").addClass("form-control");
                $("input[type=submit]").addClass("btn btn-default");
                $("textarea").addClass("form-control");
                
                $("section:has(#contact-page)").css("min-height", "1000px");
                
            });
        </script>
    </body>
</html>