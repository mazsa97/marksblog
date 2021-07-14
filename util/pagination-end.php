<!--
 * = PAGINATION-END.PHP
 *
 * PHP FILE FOR THE PAGINATION FUNCTION ON THE SITE.
 *
 * ------------------------------------------------------------------------- -->
<?php

$result_db = mysqli_query($conn, "SELECT COUNT(id) FROM posts WHERE post_status=1");
$row_db = mysqli_fetch_row($result_db);
$total_posts = $row_db[0];
$total_pages = ceil($total_posts / $limit);
$first = 1;
$firstLabel = "<<";
$lastLabel = ">>";

/* echo  $total_pages; */
$pagLink = "<ul class='index-pagination'>";
$pagLink .= "<li class='index-page-item'><a class='page-link' title='First Page' href='index?page=" . $first . "'>" . $firstLabel . "</a></li>";
for ($i = 1; $i <= $total_pages; $i++) {

    $pagLink .= "<li class='index-page-item'><a class='page-link' title='Page $i' href='index?page=" . $i . "'>" . $i . "</a></li>";
}
$pagLink .= "<li class='index-page-item'><a class='page-link' title='Last Page' href='index?page=" . $total_pages . "'>" . $lastLabel . "</a></li>";
echo $pagLink . "</ul>";
echo "<p class='current-page'>CURRENT PAGE: " . $page . "</p>";
?>