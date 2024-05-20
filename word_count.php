<?php
function wordCount($input) {
    // Use the str_word_count function to count the number of words in the string
    $word_count = str_word_count($input);
    return $word_count;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input string from the form
    $input_string = $_POST['inputString'];
    // Count the words in the input string
    $count = wordCount($input_string);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Word Count Result</title>
        <link rel=stylesheet type="text/css" href="style.css">
    </head>
    <body>
        <div class="result">
            <h1>Word Count Result</h1>
            <p>The input string is: "<?php echo htmlspecialchars($input_string); ?>"</p>
            <p>The number of words in the input string is: <?php echo $count; ?></p>
            <a href="index.html">Go Back</a>
        </div>
    </body>
    </html>
    <?php
} else {
    // Redirect back to the form if the request method is not POST
    header("Location: index.html");
    exit();
}
?>
