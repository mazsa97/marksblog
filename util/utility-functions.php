<!--
 * = UTILITY-FUNCTIONS.PHP
 *
 * PHP FILE FOR THE FUNCTIONS THAT ARE USED AT MORE PLACES IN THE PROJECT.
 *
 * ------------------------------------------------------------------------- -->
<?php
/**
 * FUNCTION FOR GENERATING URLS.
 * ------------------------------------------------------------------------- */
function generateURL($text)
{
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    if (empty($text)) {
        return 'Wrong post label!';
    }
    return $text;
}

/**
 * FUNCTION FOR SHOWING THE STATUS IN TEXT FORMAT.
 * ------------------------------------------------------------------------- */
function statusText($ertek)
{
    $active = "Active";
    $inactive = "Inactive";
    if ($ertek == 1) {
        echo htmlentities($active);
    } else if ($ertek == 0) {
        echo htmlentities($inactive);
    }
}


/**
 * FUNCTION TO FORMAT EMPTY DATE FIELDS.
 * ------------------------------------------------------------------------- */
function emptyDate($value, $symbol)
{
    if ($value == '0000-00-00') {
        echo $symbol;
    } else {
        echo htmlentities($value);
    }
}

/**
 * FUNCTION TO SHOW WHEN THERE IS NO ACTIVE POSTS ON THE WEBSITE.
 * ------------------------------------------------------------------------- */
function emptypostMessage()
{
    echo "<h1>Oops, It looks like there is no active posts currently!</h1>";
    echo "<i class='far fa-sad-cry fa-4x'></i>";
    echo "<h2>Please come back later, or <a href='contact'>contact us</a> if you think it's an error.</h2>";
}

?>