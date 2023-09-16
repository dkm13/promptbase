
<?php 
include './db/db.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- styles -->
    <link rel="stylesheet" href="./styles/index.css">
    <title>Promptownik - Website</title>
</head>
<body>

<?php
   include './partials/navbar.php';
?>

<section class="breadcrumbs">
    <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./uploads/1.webp" class="d-block w-100 " alt="..."/>
            <div class="centered">
                DALL·E, GPT, Midjourney, Stable Diffusion, ChatGPT
                Prompt Marketplace
                <a href="#"><button type="button" class="btn btn-secondary btn-lg">Find Prompts</button></a>
            </div>
        </div>
        <div class="carousel-item">
             <img src="./uploads/2.webp" class="d-block w-100" alt="..."/>
             <div class="centered">
                 Find top prompts, produce better results, save on API costs
                 <a href="#"><button type="button" class="btn btn-secondary btn-lg">Find Prompts</button></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./uploads/3.webp" class="d-block w-100" alt="..."/>
            <div class="centered">
                DALL·E, GPT, Midjourney, Stable Diffusion, ChatGPT
                Prompt Marketplace
                <a href="#"><button type="button" class="btn btn-secondary btn-lg">Find Prompts</button></a>
            </div>
        </div>
        <div class="carousel-item">
             <img src="./uploads/4.webp" class="d-block w-100" alt="..."/>
             <div class="centered">
             Find top prompts, produce better results, save on API costs
             <a href="#"><button type="button" class="btn btn-secondary btn-lg">Find Prompts</button></a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>

<section class="search">
    <form class="d-flex search-form" method="GET" action="search_test.php">
        <input class="form-control me-2 s-bar" name="query" type="search" placeholder="Search Prompts" aria-label="Search">
        <button class="btn btn-success" type="submit" onclick="submit()">Search</button>
    </form>
</section>

<section class="prompts-list" id="prompts">
    <div class="featured">
        <h3>Featured Prompts</h3>
        <div class="featured-prompts">

              <?php 
                  $sql = "SELECT * FROM `prompts` WHERE featured=1 ORDER by id DESC LIMIT 3";
                  $rows = $mysqli->query($sql);
                  while($prompt = mysqli_fetch_assoc($rows)):
              ?>
              <div class="prompt">
                <a href="details.php?id=<?= $prompt['id'] ?>">
                <div class="parts">
                <div class="part-one">
                  <img src="<?= $prompt['image'];?>" alt="<?= $prompt['type']; ?>" width='200px' height='200px'/>
                </div>
                <div class="part-two">
                  <h4><?= $prompt['title'];?></h4>
                  <p>$ <?= $prompt['Price'];?></p>
                </div>
                </div>
              </a>
              </div>
                <?php endwhile; ?>
        </div>
    </div>
    <div class="featured">
        <h3>Popular Prompts</h3>
        <div class="featured-prompts">

              <?php 
                  $sql = "SELECT * FROM `prompts` WHERE popular=1 ORDER by id DESC LIMIT 3";
                  $rows = $mysqli->query($sql);
                  while($prompt = mysqli_fetch_assoc($rows)):
              ?>
              <div class="prompt">
                <a href="details.php?id=<?= $prompt['id'] ?>">
                <div class="parts">
                <div class="part-one">
                  <img src="<?= $prompt['image'];?>" alt="<?= $prompt['type']; ?>" width='200px' height='200px'/>
                </div>
                <div class="part-two">
                  <h4><?= $prompt['title'];?></h4>
                  <p>$ <?= $prompt['Price'];?></p>
                </div>
                </div>
              </a>
              </div>
                <?php endwhile; ?>
        </div>
    </div>
    <div class="featured">
        <h3>Recent Prompts</h3>
        <div class="featured-prompts">

              <?php 
                  $sql = "SELECT * FROM `prompts` ORDER by id DESC LIMIT 3";
                  $rows = $mysqli->query($sql);
                  while($prompt = mysqli_fetch_assoc($rows)):
              ?>
              <div class="prompt">
                <a href="details.php?id=<?= $prompt['id'] ?>">
                <div class="parts">
                <div class="part-one">
                  <img src="<?= $prompt['image'];?>" alt="<?= $prompt['type']; ?>" width='200px' height='200px'/>
                </div>
                <div class="part-two">
                  <h4><?= $prompt['title'];?></h4>
                  <p>$ <?= $prompt['Price'];?></p>
                </div>
                </div>
              </a>
              </div>
                <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="what-is">
    <h3>What is Promptownik?</h3>
    <p>
    Prompts are becoming a powerful new way of programming AI models like DALL·E, Midjourney & GPT.<br/>

    However, it's hard to find good quality prompts online.<br/>

    If you're good at prompt engineering, there's also no clear way to make a living from your skills.<br/>

    PromptBase is a marketplace for buying and selling quality prompts that produce the best results, and save you money on API costs.
    </p>
</section>

<!-- faq -->
<section class="faq">
    <h3>FAQ(Frequently asked questions)</h3>
    <div class="accordion" id="accordionExample">

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                How much do I keep from sales? 
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                 On Promptownik you will keep 75% of the sale, and we will keep the other 25% to keep maintaining this service.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                What is the purpose of Promptownik?
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               Our mission is to provide you with a platform where you can sell and buy high quality prompts for DALL-E, Midjourney and GPT-3, ChatGPT, so you can save time and hassle for your next project.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Where can i find the prompt I bought?
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               All prompts you buy will appear under the tab "Purchases" on your profile page.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                How will I receive payment?
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                We use Stripe as payment method.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="#collapseFive">
                Can I get a refund?
            </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               Yes, you can get a refund if the prompt does not work or work as described/expected. To qualify for a refund, you'll have to email us at promptownik1@gmail.com with proof that the prompt indeed does not work as described/expected.
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                My item was rejected?
            </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            If your item was rejected, our review team will leave a message explaining why it was rejected. Usually, items get rejected for having inconsistent prompt output, inappropriate name or tags, or low quality images. All rejected items will appear in your profile under "Rejected".
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                I have uploaded a prompt for sale, what now?
            </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                After you have uploaded your prompt, it will be sent to our review team, who will have a close inspection and test your prompts. It will also appear in your profile under the tab "Pending". It usually takes 24-48 hours to approve content, before its listed for sale.
            </div>
            </div>
        </div>
</div>
</section>



<?php include './partials/footer.php' ?>



</body>
</html>