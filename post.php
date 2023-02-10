<?php
include_once("./templates/header.php");

if (isset($_GET["id"])) {

    $postID = $_GET["id"];
    $currentPost;

    foreach ($posts as $post) {

        if ($post["id"] == $postID) {
            $currentPost = $post;
        }

    }

}

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost["title"] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost["description"] ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["description"] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe at hic rem quia obcaecati
            asperiores, quae quibusdam officia aperiam ipsam facere cumque, explicabo illum alias dolorem itaque aut
            provident dolore.
            Incidunt nam sunt ad nostrum expedita dicta voluptatum tenetur, a ut non? Deleniti, iusto harum odit impedit
            ipsam facere illo, temporibus veniam, reprehenderit atque tempora inventore necessitatibus cum optio! Nisi?
            Officiis aspernatur expedita, nemo at non adipisci nostrum nobis odit iure voluptatibus neque sunt placeat
            eius, vitae laborum. Cupiditate, necessitatibus. Consequatur accusamus, ullam impedit incidunt sapiente
            quibusdam reprehenderit est beatae?
            Distinctio vero quaerat sed eum facere ab quod asperiores reprehenderit aperiam maxime ratione quas, labore
            earum aliquam ipsa doloribus laboriosam blanditiis laborum explicabo totam. Velit magni ipsam quibusdam quis
            voluptate.
            Rem similique repellendus, error eius quos nemo nobis vitae hic natus magnam ipsam earum veritatis incidunt.
            Distinctio sapiente voluptatum officia facilis sunt ratione corrupti, consequuntur sit tempore temporibus
            quo at?
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe at hic rem quia obcaecati
            asperiores, quae quibusdam officia aperiam ipsam facere cumque, explicabo illum alias dolorem itaque aut
            provident dolore.
            Incidunt nam sunt ad nostrum expedita dicta voluptatum tenetur, a ut non? Deleniti, iusto harum odit impedit
            ipsam facere illo, temporibus veniam, reprehenderit atque tempora inventore necessitatibus cum optio! Nisi?
            Officiis aspernatur expedita, nemo at non adipisci nostrum nobis odit iure voluptatibus neque sunt placeat
            eius, vitae laborum. Cupiditate, necessitatibus. Consequatur accusamus, ullam impedit incidunt sapiente
            quibusdam reprehenderit est beatae?
            Distinctio vero quaerat sed eum facere ab quod asperiores reprehenderit aperiam maxime ratione quas, labore
            earum aliquam ipsa doloribus laboriosam blanditiis laborum explicabo totam. Velit magni ipsam quibusdam quis
            voluptate.
            Rem similique repellendus, error eius quos nemo nobis vitae hic natus magnam ipsam earum veritatis incidunt.
            Distinctio sapiente voluptatum officia facilis sunt ratione corrupti, consequuntur sit tempore temporibus
            quo at?
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost["tags"] as $tag): ?>
                <li>
                    <a href="#">
                        <?= $tag ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li>
                    <a href="#">
                        <?= $category ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </aside>
</main>

<?php include_once("templates/footer.php") ?>