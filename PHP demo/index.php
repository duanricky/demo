<!DOCTYPE html>
<html>
<body>
    <h1>Images</h1>
    <ul>
        <?php
        $imageDirectory = "/Users/rickyduan/Documents/PHP demo/PHP_demo_images"; // Directory containing the images
        $images = "../PHP_demo_images/"; //Relative path for images
        // Get the list of files in the directory
        $files = scandir($imageDirectory);

        // Loop through the files
        foreach ($files as $file) {
            // Exclude current and parent directory entries
            if ($file !== "." && $file !== "..") {
                echo '<li><a href="' . $images . $file . '" target="_blank">' . $file . '</a></li>';
            }
        }
        ?>
    </ul>
</body>
</html>