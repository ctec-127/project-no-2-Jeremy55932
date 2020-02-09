<!DOCTYPE html>
<html lang="zxx">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<!-- The second page will be the page that uses the query string parameters to render dynamic content on the page. -->

    
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['darkmode'])) {
                $darkmode = $_GET['darkmode'];
                
                echo "<body class=\"darkmode\">DARK MODE";
                
            }

            require 'inc/header.inc.html';

            if(isset($_GET['col1'] )) {
                $col1 = $_GET['col1'];
                echo "<div class=\"col1\"><a href=\"page2.php?col1\">Color 1</a></div>";
            }elseif (isset($_GET['col2'])) {
                $col2 = $_GET['col2'];
                echo "<div class=\"col2\"><a href=\"page2.php?col2\">Color 2</a></div>";
            }elseif (isset($_GET['col3'])) {
                $col2 = $_GET['col3'];
                echo "<div class=\"col3\"><a href=\"page2.php?col3\">Color 3</div>";
            }elseif (isset($_GET['col4'])) {
                $col2 = $_GET['col4'];
                echo "<div class=\"col4\"><a href=\"page2.php?col4\">Color 4</div>";
            }elseif (isset($_GET['col5'])) {
                $col2 = $_GET['col5'];
                echo "<div class=\"col5\"><a href=\"page2.php?col5\">Color 5</div>";
            }

            if(isset($_GET['main-lorem'])){
                echo "
            <main>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum debitis, voluptatem eaque nostrum error quia vitae cumque nisi ullam ad delectus aut quaerat sit quas autem exercitationem molestiae nulla omnis!</p>
                <p>Delectus labore, provident aperiam magnam alias magni eos quia impedit enim molestiae explicabo, omnis molestias quod temporibus? Ab quod enim, quae veritatis culpa voluptatum magni, laudantium quas, sint quisquam libero?</p>
                <p>Nulla, rem rerum? Ducimus, rerum dolores doloremque consequuntur veritatis deleniti ad quasi modi reiciendis qui suscipit neque delectus eveniet nihil ullam cumque atque, perspiciatis sunt in voluptatibus excepturi! Dolorem, ut.</p>
                <p>Blanditiis dolorem non minima amet natus praesentium illo obcaecati consequatur vero magni deserunt dolorum fugiat, tenetur nulla facere neque quasi libero ut facilis labore impedit cum nihil delectus beatae! Nam.</p>
                <p>Quisquam, distinctio esse, est velit sed debitis eaque quas corporis accusantium numquam amet quos maxime ipsam officiis unde eum, illo corrupti porro magnam quibusdam facere possimus quidem. Libero, beatae sequi!</p>
            </main>";
            }
            if(isset($_GET['likecatz'])) {
                echo "<img src= \"img/catz.jpg\" alt=\"catz\" >";
            }
            
            if(isset($_GET['likedogz'])) {
                echo "<img src=\"img/dogz.jpg\" alt=\"dogz\">";
            }
            if(isset($_GET['form'])) {
                echo "<form action=\"page2.php?main-lorem&aside-lorem&likecatz&likedogz&col2&form&darkmode\" method=\"GET\">
                <label for=\"text\">Input Which Animal You Like Here</label>";

                echo "<textarea name=\"text\" id=\"text\" cols=\"30\" rows=\"6\"></textarea><br>";
                echo "<input type=\"submit\" value=\"submit\">";
                echo "</form>";
            }
                    if(!empty($_GET['text'])) {
                        $result = $_GET['text'];
                        echo "$result";
                    }else{
                        echo "...";
            }
            
            if(isset($_GET['aside-lorem'])){
                echo "
            <aside>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, possimus, quos aliquam illum tempore maiores consectetur sit dolore minus incidunt atque corrupti iste error voluptas libero quibusdam id maxime. Deleniti.</p>
                <p>Temporibus natus possimus maxime quas expedita perspiciatis iusto obcaecati nemo dignissimos cumque, excepturi voluptatibus doloribus itaque sunt velit voluptatem facilis. Molestiae soluta corporis amet magni tempore totam vel corrupti in!</p>
                <p>Incidunt doloremque ea commodi explicabo eos quae amet recusandae assumenda facilis animi praesentium voluptatum, quidem enim vitae. Maiores ducimus animi provident atque quisquam! Unde quas neque earum enim, quia praesentium!</p>
                <p>Laboriosam illum, rem totam hic at possimus a tenetur laborum? Unde animi molestias amet repellat quam perferendis, officiis itaque deleniti corporis illo voluptatem voluptates impedit quas nam! Inventore, harum ipsum.</p>
            </aside>
            
            require 'inc/footer.inc.html';
            </body>";
            }
            
        }
        
    ?>



<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</br>
</html>