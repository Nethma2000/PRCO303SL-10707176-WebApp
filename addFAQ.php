<?php


$conn = new PDO("mysql:host=localhost;dbname=careernextgen", "root", "123");

// check if insert form is submitted
if (isset($_POST["submit"])) {
    // create table if not already created
    $sql = "CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
            question TEXT NULL,
            answer TEXT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
    $statement = $conn->prepare($sql);
    $statement->execute();

   
    $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
    $statement = $conn->prepare($sql);
    $statement->execute([
        $_POST["question"],
        $_POST["answer"]
    ]);
}


$sql = "SELECT * FROM faqs ORDER BY id DESC";
$statement = $conn->prepare($sql);
$statement->execute();
$faqs = $statement->fetchAll();

?>








<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="faqcss/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="faqfont-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="faqrichtext/richtext.min.css" />


    <script src="faqjs/jquery-3.3.1.min.js"></script>
    <script src="faqjs/bootstrap.js"></script>
    <script src="faqrichtext/jquery.richtext.js"></script>

</head>


<body>
   
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <h1 class="text-center">Add FAQ</h1>

             
                <form method="POST" action="addfaq.php">

                    <div class="form-group">
                        <label>Enter Question</label>
                        <input type="text" name="question" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <label>Enter Answer</label>
                        <textarea name="answer" id="answer" class="form-control" required></textarea>
                    </div>

                    <input type="submit" name="submit" class="btn btn-info" value="Add FAQ" />
                </form>
            </div>
        </div>

        <div class="row">
            <div class="offset-md-2 col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($faqs as $faq) : ?>
                            <tr>
                                <td><?php echo $faq["id"]; ?></td>
                                <td><?php echo $faq["question"]; ?></td>
                                <td><?php echo $faq["answer"]; ?></td>
                                <td>
                                    <a href="editFAQ.php?id=<?php echo $faq['id']; ?>" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form method="POST" action="deleteFAQ.php" onsubmit="return confirm('Are you sure you want to delete this FAQ ?');">
                                        <input type="hidden" name="id" value="<?php echo $faq['id']; ?>" required />
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" />
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- initialize rich text library -->

    <script>
        window.addEventListener("load", function() {
            $("#answer").richText();
        });
    </script>
</body>

</html>