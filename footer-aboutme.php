        <!-- Bootstrap core JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <!-- Custom scripts -->
        <!-- <script>
        //Sidebar toggle
            function sidebarToggle(){
                var counter = 0;
                $(".menu-toggle").click(function(e){
                    e.preventDefault();
                    $("#sidebar-wrapper").toggleClass("active");
                    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
                    $(this).toggleClass("active");

                    // console.log("sidebar toggle") //debug
                    counter = counter + 1;
                    // console.log(counter) //debug
                    if (counter % 2 == 0) {
                        $('.overlay').fadeOut();
                    }
                    else if (counter % 2 != 0) {
                        $('.overlay').fadeIn();
                    }
                })
            };
            sidebarToggle();

            //Tooltip toggle - Needs Popper JS
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });

            //Date time calculations
            //Year variables
            var today = new Date();
            var year = today.getFullYear();
            var age;

            // Current year
            function getDate() {
                document.getElementById("currentDate").innerHTML = year;
            };
            getDate();

            //Calculate years old
            function calculateYO() {
                var age = year - 1997;
                document.getElementById('age').innerHTML = age;
            };
            calculateYO();
        </script> -->
        <?php wp_footer(); ?>
    </body>
</html>