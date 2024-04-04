  <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Person Search</h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
              </form>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Domain</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <form id="categoryForm" action="category.php" method="GET">
                    <select class="form-control" name="catid" onchange="submitForm()">
                        <option value="">Category</option>
                        <?php 
                            $query=mysqli_query($con,"SELECT id, CategoryName FROM tblcategory");
                            while($row=mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['CategoryName']); ?></option>
                        <?php } ?>
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm() {
        document.getElementById("categoryForm").submit();
    }
</script>

          <!-- Search Widget -->
 <div class="card mb-4">
            <h5 class="card-header">Skills</h5>
            <div class="card-body">
                   <form name="search" action="search1.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
              </form>
              </div>
            </div>
          </div>
          

         