<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3036</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../3036/less/3036.less">

</head>

<body>
    <div class="type-3036">
        <div class='container'>
            <div class="row">
                <div class="col-md-9">
                </div>
                <div class="col-md-3">
                    <div class="sidebar-title">
                        <h1>RECENT POST</h1>
                    </div>
                    <div class="recent-post">
                        <ul>
                            <li>
                                <a href="https://tk.commonsupport.com/repairplus/ipad-repairs-for-schoolsuniversities-across-the-usa-2/">
                                    <h5 class="post-title">We denounce with righteous indignation and dislike men who are ...</h5>
                                </a>
                                <h6 class="post-date"><i class="fa fa-clock-o" style="color: #43c3ea;"></i>September 21, 2019</h6>
                            </li>
                            <li>
                                <a href="https://tk.commonsupport.com/repairplus/all-software-boxes-and-dongles-available-at-best-prices-2/">
                                    <h5 class="post-title">Pleasures and praising pains was born and will give you ...</h5>
                                </a>
                                <h6 class="post-date"><i class="fa fa-clock-o" style="color: #43c3ea;"></i>September 21, 2019</h6>
                            </li>
                            <li>
                                <a href="https://tk.commonsupport.com/repairplus/all-software-boxes-and-dongles-available-at-best-prices/">
                                    <h5 class="post-title">Pleasures and praising pains was born and will give you ...</h5>
                                </a>
                                <h6 class="post-date"><i class="fa fa-clock-o" style="color: #43c3ea;"></i>September 21, 2019</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-title">
                        <h1>BLOG ARCHIVES</h1>
                    </div>
                    <ul class="blog-archives">
                        <li>
                            <a href="https://tk.commonsupport.com/repairplus/2019/09/">
                                <i class="fa fa-folder-o"></i> <span class='month-year'>September 21, 2019</span> <span class='post-count'>(8)</span>
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-title">
                        <h1>POPULAR TAGS</h1>
                    </div>
                    <div class="tagcloud">
                        <a href="http://tk.commonsupport.com/repairplus/tag/full-damage/" class="tag-link-19 tag-link-position-1" title="1 topic" style="font-size: 8pt;">Full Damage</a>
                        <a href="http://tk.commonsupport.com/repairplus/tag/ideas/" class="tag-link-23 tag-link-position-2" title="1 topic" style="font-size: 8pt;">Ideas</a>
                        <a href="http://tk.commonsupport.com/repairplus/tag/pclaptops/" class="tag-link-20 tag-link-position-3" title="1 topic" style="font-size: 8pt;">Pc&amp;Laptops</a>
                        <a href="http://tk.commonsupport.com/repairplus/tag/pin-number/" class="tag-link-18 tag-link-position-4" title="1 topic" style="font-size: 8pt;">Pin Number</a>
                        <a href="http://tk.commonsupport.com/repairplus/tag/unlocked/" class="tag-link-21 tag-link-position-5" title="1 topic" style="font-size: 8pt;">Unlocked</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>