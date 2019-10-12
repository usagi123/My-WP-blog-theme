<?php
/*
Template Name: Twitch Stream Page
*/ ?>

<?php get_header(); ?>
        <div class="container-fluid custom-title">
            <div class="container">
                <h1><?php wp_title(''); ?></h1>
            </div>
        </div>
        
        <div class="container"> <!--or container-fluid-->
            <div class="row text-center transition-from-header">
                <div class="col-md-12 cliente left-title"> 
                    <!-- Add a placeholder for the Twitch embed -->
                    <div id="twitch-embed"></div>

                    <!-- Load the Twitch embed script -->
                    <script src="https://embed.twitch.tv/embed/v1.js"></script>

                    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
                    <script type="text/javascript">
                    new Twitch.Embed("twitch-embed", {
                        width: '100%',
                        height: '100%',
                        channel: "imhikarucat"
                    });
                    </script>
                </div>
        </div>
        <div class="extra-padding-bottom-10px"></div>
        </div>
<?php get_footer(); ?>
