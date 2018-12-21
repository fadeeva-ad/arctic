<!-- блоки только выводятся,но не скрываются -->
<?php
$bottomBlock = '';
if ($_SERVER['REQUEST_URI'] === "/index.php")
{
    $bottomBlock='data-js-remove=""';
} 
?>
<div class="news">
        <div class="container container_m">
            <a href="../news.php" class="news__title">новости</a>
            <div class="news__list news__list_full-news">
                <a href="news-item.php" class="news__list-item" style="background-image: url('production/img/default.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
                <a href="javascript:;" class="news__list-item" style="background-image: url('production/img/default2.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
                <a href="news-item.php" class="news__list-item" style="background-image: url('production/img/default2.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
                <a href="news-item.php" <?php echo $bottomBlock;?> class="news__list-item" style="background-image: url('production/img/news-iceberg.jpg');">
                  <div class="news__item-title">
                      Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                  </div>
                </a>
            </div>
                        
            <div <?php echo $bottomBlock;?> class="news__list news__list_full-news">
                <a href="news-item.php" class="news__list-item" style="background-image: url('production/img/default.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
                <a href="news-item.php" class="news__list-item" style="background-image: url('production/img/default2.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
                <a href="news-item.php" class="news__list-item" style="background-image: url('production/img/default2.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
                <a href="news-item.php" class="news__list-item" style="background-image: url('production/img/news-iceberg.jpg');">
                    <div class="news__item-title">
                        Встал, умылся, убери Арктику: зачем волонтеры очищают необитаемые острова
                    </div>
                </a>
            </div>
        </div>
    </div>