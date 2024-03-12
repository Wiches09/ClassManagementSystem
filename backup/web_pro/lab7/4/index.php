<!DOCTYPE html>
<html>

<head>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            background-color: #0f701f;
            padding: 10px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }

        .grid-item img {
            width: 150px;
            height: 200px;
            max-width: 150px;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <?php
        $images = array(
            "https://i.pinimg.com/564x/cf/e4/fa/cfe4fac15693b54e3053b47b45de8e08.jpg",
            "https://i.pinimg.com/236x/3e/c4/21/3ec421612db0442a656919bcd16e9c46.jpg",
            "https://i.pinimg.com/236x/d3/17/5a/d3175a49fdad68265bcdb2c035afc00c.jpg",
            "https://i.pinimg.com/236x/40/05/67/4005675024d5cb68ce3796a09c11dbe0.jpg",
            "https://i.pinimg.com/236x/33/4a/9d/334a9d9ae73f2f74920d76b26b59acac.jpg",
            "https://i.pinimg.com/236x/1c/8a/e1/1c8ae15c4e6e8669e9d371b9d99e9036.jpg",
            "https://i.pinimg.com/236x/3f/52/24/3f5224603500fe626235a10f87e6bd42.jpg",
            "https://i.pinimg.com/236x/28/78/ed/2878ed9c848ebe1211970b237af50a23.jpg",
            "https://i.pinimg.com/236x/1d/e5/61/1de561aee1948520c48fe9efc36a256b.jpg",
            "https://i.pinimg.com/236x/58/cb/5e/58cb5eaa7a972a0356b9c57ae3293523.jpg",
            "https://i.pinimg.com/236x/ec/19/3b/ec193b0a857b57a1e72b4e33fc9ad0b1.jpg",
            "https://i.pinimg.com/236x/36/f4/89/36f4896b35ac139c11325123992f6a22.jpg",
            "https://i.pinimg.com/236x/82/c2/b2/82c2b219d401337dfe6eda4d71519561.jpg",
            "https://i.pinimg.com/236x/af/a5/ba/afa5ba7ade3ac9b4a89ce85d5dd05bc5.jpg",
            "https://i.pinimg.com/236x/d5/0c/07/d50c07d6902fd70fd9174a7ef0ae4d50.jpg",
            "https://i.pinimg.com/236x/40/3d/ea/403deae580bcf9da8b677436892e6799.jpg",
            "https://i.pinimg.com/236x/15/1d/db/151ddb360dd350ed467f49718d92b30b.jpg",
            "https://i.pinimg.com/236x/e7/30/37/e73037f1266b5f13846be863d8d7e077.jpg",
            "https://i.pinimg.com/236x/a0/45/71/a04571024f20833ce8ec54c10ea11e3a.jpg",
            "https://i.pinimg.com/236x/e7/6e/e8/e76ee88354eeaac075cf9896308317d3.jpg",
        );

        foreach ($images as $image) {
            echo '<div class="grid-item"><img src="' . $image . '" alt="Image"></div>';
        }
        ?>
    </div>
</body>

</html>