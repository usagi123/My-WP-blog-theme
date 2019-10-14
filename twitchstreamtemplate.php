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
        
        <div class="container-fluid"> <!--or container-fluid-->
            <div class="row text-center transition-from-header">
                <div class="col-md-12 cliente left-title"> 
                    <div class="container-fluid left-button">
                    <div id="twitch-embed" class="text-center"></div>
                    <!-- Load the Twitch embed script -->
                    <script src="https://embed.twitch.tv/embed/v1.js"></script>

                    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
                    <script type="text/javascript">
                    new Twitch.Embed("twitch-embed", {
                        width: 1600,
                        height: 720,
                        channel: "imhikarucat",
                        theme: "dark",
                    });
                    </script>
                    </div>
                </div>
            </div>
        <div class="extra-padding-bottom-10px"></div>
        </div>
<?php get_footer(); ?>
