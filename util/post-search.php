<!--
 * = POST-SEARCH.PHP
 *
 * PHP FILE FOR THE SEARCH FUNCTION ON THE INDEX PAGE.
 *
 * ------------------------------------------------------------------------- -->
<?php
include 'dbconfig.php';

if (!empty($_GET['q'])) {

        $q = mysqli_real_escape_string($conn, $_GET['q']);
        $query = mysqli_query($conn, "select * from posts where LOWER(post_label) OR LOWER(post_intro_txt) OR LOWER(post_content_txt) like LOWER('%$q%') LIMIT 5;") or die(mysqli_error($conn));
        $resultCount = mysqli_num_rows($query);
        while ($output = mysqli_fetch_assoc($query)) {

                echo '<a href="post?url=' . $output['url'] . '">' . $output['post_label'] . '</a>';
        }
        if ($resultCount == 0) {
                echo '<p id="search-no-results">No results found! <i class="far fa-sad-tear"></i></p>';
        }
}
