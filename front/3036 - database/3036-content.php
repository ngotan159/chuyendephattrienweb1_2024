<?php
include 'db.php';
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);

// Truy vấn dữ liệu từ bảng posts
$sql = "SELECT title, post_date, tags FROM posts ORDER BY post_date DESC LIMIT 3";
$result = $conn->query($sql);

// Truy vấn để lấy số bài viết theo tháng và năm
$archive_sql = "SELECT DATE_FORMAT(post_date, '%M %Y') AS month_year, COUNT(*) AS post_count FROM posts GROUP BY month_year ORDER BY post_date DESC";
$archive_result = $conn->query($archive_sql);

// Truy vấn để lấy các thẻ phổ biến
$tag_sql = "SELECT tags FROM posts";
$tag_result = $conn->query($tag_sql);

?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../3036/less/3036.less"> 
</head>
    <div class="type-3036">
    <div class='container'>
        <div class="row">
            <div class="col-md-4">
                <h2>RECENT POST</h2>
                <div class="recent-posts">
                    <?php
                    if ($result && $result->num_rows > 0) {
                        // Lặp qua từng bài viết
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="recent-post">
                                <div class="post-title"><?php echo $row['title']; ?></div>
                                <div class="post-date">
                                    <i class="fa fa-clock-o" style="color: #43c3ea;"></i> <?php echo date("F d, Y", strtotime($row['post_date'])); ?>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No posts available.</p>";
                    }
                    ?>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-3">
                <h2>BLOG ARCHIVES</h2>
                <ul class="blog-archives">
                    <?php
                    if ($archive_result && $archive_result->num_rows > 0) {
                        while ($archive_row = $archive_result->fetch_assoc()) {
                            echo "<li>
                            <i class='fa fa-folder-o'></i> 
                            <span class='month-year'>{$archive_row['month_year']}</span>
                            <span class='post-count'>({$archive_row['post_count']})</span>
                            </li>";
                        }
                    } else {
                        echo "<li>No archives available.</li>";
                    }
                    ?>
                </ul>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-3">
                <h2>POPULAR TAGS</h2>
                <div class="popular-tags">
                    <?php
                    if ($tag_result && $tag_result->num_rows > 0) {
                        $tags_array = []; // Mảng để lưu các thẻ
                        while ($tag_row = $tag_result->fetch_assoc()) {
                            $tags = explode(',', $tag_row['tags']);
                            foreach ($tags as $tag) {
                                $tags_array[] = trim($tag); // Thêm thẻ vào mảng
                            }
                        }
                        // Loại bỏ thẻ trùng lặp
                        $tags_array = array_unique($tags_array);
                        foreach ($tags_array as $tag) {
                            echo "<span class='tag-item'>$tag</span>"; // Hiển thị thẻ
                        }
                    } else {
                        echo "<p>No tags available.</p>";
                    }
                    ?>
                </div>
            </div>
        </div> 
    </div>
</div>

<?php
$conn->close(); 
?>