<!doctype html>
<html lang="en">
    <head>
        <title>News | Broad Street Angels</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="about news">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <section class='header'>
            <div class="header-img">
                <picture>
                    <source srcset="img/entrepreneurs/header.png" media="(min-width: 600px)">
                    <img src="img/news/header-mobile.png" alt="" />
                </picture>
            </div>
          <div class='container'>
            <h1 class='right'>NEWS</h1>
          </div>
        </section>
        <section class='body'>
          <div class='container'>
            <?php for($i=0; $i<5; $i++) { ?>
            <article>
              <a href="broad-street-angels-closes-2019-with-over-1500000-in-investments.php"><img src='img/article-thumb.jpg' alt="" class="news-image" /></a>
              <h2><a href="broad-street-angels-closes-2019-with-over-1500000-in-investments.php">BROAD STREET ANGELS CLOSES 2019 WITH OVER $1,500,000 in investments</a></h2>
              <p>(Philadelphia, PA) February 20, 2020 - Broad Street Angels (BSA), an angel investment group in Philadelphia, PA, held its annual meeting at The <a href="https://www.unionleague.org" target="_blank">Union League of Philadelphia</a> on Thursday February 20, 2020 to announce its annual results. BSA invested over $1.5 million in 2019. Members funded 7 new investments and 5 existing portfolio companies. <a href='broad-street-angels-closes-2019-with-over-1500000-in-investments.php' class='readmore'>READ MORE</a></p>
              <div class='information row'>
                <div class="col-sm-3">
                    <span class='date'>February 20, 2020</span>
                </div>
                <div class="col-sm-4">
                    <span class='author'><strong>Author:</strong> broadstreetangels</span>
                </div>
                    <div class="col-sm-5">
                <span class='comments'><strong>Comments:</strong> No Comments</span>
                </div>
                <div class="col-sm-12">
                    <span class='tags'>
                        <strong>Category/Tags:</strong>
                        <div class="tags-and-cats">
                            <span>Media Release,    Angel Group,    Angel Investing,    Investment Club,    Philadelphia Angel Investors,			Start-Up,    Startup,    Union League</span>
                        </div>
                    </span>
                </div>
              </div>
            </article>
            <?php } ?>
            <div class='viewmore'>
              <div><strong>Showing 3 of 8</strong></div><br />
              <a href='#'>View More</a>
            </div>
          </div>
        </section>
        <?php include('includes/linkedin_bar.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
        <script>
            $('nav ul li:nth-child(6)').addClass('active');
        </script>
    </body>
</html>
