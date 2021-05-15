<div class="container">
            <div class="blog__inner">
                <div class="reviews">
                    <?php
                    if(!isset($_GET['page'])) {
                        foreach($data as $page) {
                            echo "<h3 class=\"review__title\">".$page['title']."</h3>";
                            echo '<p class="review__text">';
                            echo $page['text'];
                            echo '</p>';
                        }
                    } else {
                            echo "<h3 class=\"review__title\">".$title."</h3>";
                            echo '<p class="review__text">';
                            echo $content;
                            echo '</p>';
                    }
                    ?>
                </div>
    
                <div class="sidebar__reviews">
                    <h3 class="sidebar__title">Все статьи</h3>
                    <ul class="review__all">
                        <?php 
                        foreach($data as $page) {
                            $url = $page['url'];
                            $title = $page['title'];
                            createLink($url, $title);
                        }
                        
                        function createLink($url, $title) {
                            $active = '';
                             if($_SERVER['REQUEST_URI'] == "/?page=$url") {
                                $active = 'active';
                            } 
                            echo "<li class=\"review__all-list\"><a href=\"?page=$url\" class=\"review__all-link $active\">".$title."</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>