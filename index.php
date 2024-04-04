<?php session_start(); include('includes/config.php'); ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <meta name="description" content=""> <meta name="author" content=""> <title>EasyHire | Home Page</title> <!-- Bootstrap core CSS --> <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Custom styles for this template --> <link href="css/modern-business.css" rel="stylesheet"> <!-- Add some custom CSS to scale the images --> <style> .card-img-top { max-width: 300px; max-height: 200px; } </style> </head> <body> <!-- Navigation --> <?php include('includes/header.php');?> <!-- Page Content --> <div class="container"> <div class="row" style="margin-top: 4%"> <!-- Blog Entries Column --> <div class="col-md-8"> <!-- Blog Post --> <?php if (isset($_GET['pageno'])) { $pageno = $_GET['pageno']; } else { $pageno = 1; } $no_of_records_per_page = 9; $offset = ($pageno-1) * $no_of_records_per_page; $total_pages_sql = "SELECT COUNT(*) FROM tblposts WHERE willing='yes'"; $result = mysqli_query($con, $total_pages_sql); $total_rows = mysqli_fetch_array($result)[0]; $total_pages = ceil($total_rows / $no_of_records_per_page); $query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url, tblposts.experience, tblposts.willing FROM tblposts LEFT JOIN tblcategory ON tblcategory.id = tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId = tblposts.SubCategoryId WHERE tblposts.Is_Active = 1 AND tblposts.willing = 'yes' ORDER BY tblposts.id DESC LIMIT $offset, $no_of_records_per_page"); ?>

<!-- Create a table with Bootstrap grid system -->
<div class="table-responsive">
  <table class="table text-center align-middle"> <!-- Add alignment classes to the table element -->
    <!-- Loop through the posts and display them in rows of three -->
    <?php
    $count = 0; // Initialize a counter to track the number of posts in a row
    while ($row = mysqli_fetch_array($query)) {
      // Get the post details
      $postId = $row['pid'];
      $postTitle = $row['posttitle'];
      $postImage = $row['PostImage'];
      $postCategory = $row['category'];
      $postSubcategory = $row['subcategory'];
      $postExperience = $row['experience'];
      $postDate = $row['postingdate'];

      // Check if the counter is zero, meaning a new row is needed
      if ($count == 0) {
        echo "<tr>"; // Start a new row
      }

      // Display the post in a column
      echo "<td>";
      echo "<div class='card mb-4'>";
      echo "<img class='card-img-top' src='admin/postimages/$postImage' alt='$postTitle'>";
      echo "<div class='card-body'>";
      echo "<h2 class='card-title'>$postTitle</h2>";
      echo "<p>";
      echo "<!-- category -->";
      echo "<a class='badge bg-secondary text-decoration-none link-light' href='category.php?catid=$postCategory' style='color:#fff'> $postCategory</a>";
      echo " ";
      echo "<!-- Subcategory -->";
      echo "<a class='badge bg-secondary text-decoration-none link-light' style='color:#fff'>$postSubcategory</a>";
      echo " ";
      echo "<!-- Experience -->";
      echo "<span class='badge bg-secondary text-decoration-none link-light' style='color:#fff'>$postExperience Years</span>";
      echo "</p>";
      echo "<a href='news-details.php?nid=$postId' class='btn btn-primary'>Read More →</a>";
      echo "</div>";
      echo "<div class='card-footer text-muted'>";
      echo "Posted on $postDate";
      echo "</div>";
      echo "</div>";
      echo "</td>";

      // Increment the counter
      $count++;

      // Check if the counter is three, meaning the row is full
      if ($count == 3) {
        echo "</tr>"; // End the row
        $count = 0; // Reset the counter
      }
    }

    // Check if the last row is not full
    if ($count > 0) {
      // Fill the remaining columns with empty cells
      for ($i = $count; $i < 3; $i++) {
        echo "<td></td>";
      }
      echo "</tr>"; // End the row
    }
    ?>
  </table>
</div>

<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
  <li class="page-item"><a href="?pageno=1" class="page-link">First</a></li>
  <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
  </li>
  <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
  </li>
  <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
</ul>
</div>
<!-- Sidebar Widgets Column -->
<?php include('includes/sidebar.php');?>
</div>
<!-- /.row -->
</div>
<!-- /.container -->
<!-- Footer -->
<?php include('includes/footer.php');?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
