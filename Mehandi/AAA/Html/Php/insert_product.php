 <?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
} else {
    if (isset($_POST['product_name'], $_POST['price'], $_POST['description'])) {
        $productName = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        // File upload
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
      //  $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow only certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";

                // Insert product into database
                $imagePath = $targetFile;
              //  $sql = "INSERT INTO insert_products (product_name, price, description, image) VALUES ('$productName', '$price', '$description', '$imagePath')";

                if (mysqli_query($conn, $sql)) {
                    echo "Product added successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "All fields are required.";
    }
}
?> 