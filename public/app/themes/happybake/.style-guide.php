<article>
    <div data-app="events" class="events"></div>
    <div data-app="posts" class="posts"></div>

    <h2 class="rig-style-guide">Core blocks</h2>

    <h1>Heading 1 <?= style_guide_str('short'); ?></h1>

    <p><strong>Paragraph.</strong> Lorem ipsum dolor <a href="#">sit amet consectetur adipiscing elit</a> duis dignissim <strong>massa vitae lacus</strong> hendrerit at aliquet elit <em>donec felis odio mollis</em> at mi at feugiat suscipit nisl suspendisse volutpat efficitur nisl ut condimentum est feugiat eu vivamus at diam aliquet sodales velit eu vulputate augue.</p>

    <h2>Heading 2 <?= style_guide_str('short'); ?></h2>

    <ul>
        <li><strong>List, unordered</strong></li>
        <li><?= style_guide_str(); ?></li>
        <li><?= style_guide_str('short'); ?></li>
    </ul>

    <h3>Heading 3 <?= style_guide_str('short'); ?></h3>

    <ol>
        <li><strong>List, ordered</strong></li>
        <li><?= style_guide_str(); ?></li>
        <li><?= style_guide_str('short'); ?></li>
    </ol>

    <h4>Heading 4 <?= style_guide_str('short'); ?></h4>

    <figure class="wp-block-table">
        <table>
            <thead>
                <tr>
                    <th>Table header 1</th>
                    <th>Table header 2</th>
                    <th>Table header 2</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <tr>
                        <?php for ($j = 1; $j <= 3; $j++) { ?>
                            <td>Table cell <?= $j; ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Table footer 1</td>
                    <td>Table footer 2</td>
                    <td>Table footer 3</td>
                </tr>
            </tfoot>
        </table>
    </figure>

    <h5>Heading 5 <?= style_guide_str('short'); ?></h5>

    <blockquote class="wp-block-quote">
        <p><strong>Quote</strong></p>
        <p><?= style_guide_str('short'); ?>.</p>
        <p><?= style_guide_str(); ?>.</p>
        <cite>Firstname Lastname</cite>
    </blockquote>

    <h6>Heading 6 <?= style_guide_str('short'); ?></h6>

    <figure class="wp-block-pullquote">
        <blockquote>
            <p><strong>Pullquote</strong></p>
            <p><?= style_guide_str('short'); ?>.</p>
            <p><?= style_guide_str(); ?>.</p>
            <cite>Firstname Lastname</cite>
        </blockquote>
    </figure>

    <div class="wp-block-buttons">
        <div class="wp-block-button"><a class="wp-block-button__link" href="#">Buttons</a></div>
        <div class="wp-block-button"><a class="wp-block-button__link" href="#">Lorem ipsum</a></div>
    </div>

    <?php $image = '<figure class="wp-block-image size-large"><a href="/app/themes/demo/img/placeholder.png"><img loading="lazy" width="1024" height="682" data-id="102" src="/app/themes/demo/img/placeholder.png" /></a><figcaption>Image caption</figcaption></figure>'; ?>

    <?= $image; ?>

    <figure class="wp-block-gallery has-nested-images columns-default is-cropped">
        <?= $image . $image . $image . $image . $image; ?>
        <figcaption class="blocks-gallery-caption">Gallery caption</figcaption>
    </figure>

    <div class="wp-block-columns">
        <div class="wp-block-column" style="flex-basis:33.33%">
            <h2>Columns</h2>
            <p><?= style_guide_str(); ?></p>
        </div>
        <div class="wp-block-column" style="flex-basis:66.66%">
            <h2>Heading</h2>
            <p><?= style_guide_str(); ?></p>
        </div>
    </div>

    <h2 class="rig-style-guide">Banner (with and without image)</h2>
    <section class="block-banner">
        <div class="container">
            <div class="text">
                <h2>Heading</h2>
                <p><?= style_guide_str(); ?></p>
                <div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
            </div>
        </div>
    </section>

    <section class="block-banner">
        <div class="container">
            <div class="image">
                <img src="/app/themes/demo/img/placeholder.png" alt="Placeholder" />
            </div>
            <div class="text">
                <h2>Heading</h2>
                <p><?= style_guide_str(); ?></p>
                <div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
            </div>
        </div>
    </section>

    <h2 class="rig-style-guide">Posts</h2>
    <section class="block-posts">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <a class="swiper-slide" href="#">
                        <article>
                            <div class="image"><img src="/app/themes/demo/img/placeholder.png" alt="Placeholder"></div>
                            <p><?= style_guide_str('short'); ?></p>
                        </article>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>

    <h2 class="rig-style-guide">Boxes (normal, wide and full-width)</h2>
    <section class="block-boxes">
        <div class="block-box vertical-align-top-right has-background has-tertiary-background-color">
            <div>
                <p><?= style_guide_str('short'); ?>.</p>
            </div>
        </div>
        <div class="block-box">
            <div>
                <p><?= style_guide_str(); ?>.</p>
            </div>
        </div>
    </section>
    <section class="block-boxes alignwide">
        <div class="block-box has-background has-primary-background-color">
            <div>
                <h3>Heading</h3>
                <p><?= style_guide_str('short'); ?>.</p>
                <figure class="wp-block-image">
                    <img src="/app/themes/demo/img/placeholder.png" alt="" width="102" height="68">
                </figure>
                <div class="wp-block-buttons">
                    <div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
                </div>
            </div>
        </div>
        <div class="block-box vertical-align-center has-background has-secondary-background-color">
            <div>
                <h3>Heading</h3>
                <p><?= style_guide_str('short'); ?>.</p>
                <figure class="wp-block-image">
                    <img src="/app/themes/demo/img/placeholder.png" alt="" width="102" height="68">
                </figure>
                <div class="wp-block-buttons">
                    <div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
                    <div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
                </div>
            </div>
        </div>
        <div class="block-box vertical-align-bottom-right has-background has-tertiary-background-color">
            <div>
                <h3>Heading</h3>
                <p><?= style_guide_str('short'); ?>.</p>
                <figure class="wp-block-image">
                    <img src="/app/themes/demo/img/placeholder.png" alt="" width="102" height="68">
                </figure>
                <div class="wp-block-buttons">
                    <div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
                </div>
            </div>
        </div>
        <div class="block-box" style="background-image: url(/app/themes/demo/img/placeholder.png);">
            <div>
                <h3>Heading</h3>
                <p><?= style_guide_str(); ?>.</p>
                <p><?= style_guide_str(); ?>.</p>
            </div>
        </div>
    </section>

    <h2 class="rig-style-guide">Boxes (collapsed)</h2>
    <section class="block-boxes alignwide is-style-collapse">
        <div class="block-box has-background has-primary-background-color">
            <div>
                <p><?= style_guide_str('short'); ?>.</p>
            </div>
        </div>
        <div class="block-box has-background has-secondary-background-color">
            <div>
                <p><?= style_guide_str(); ?>.</p>
            </div>
        </div>
    </section>
    <section class="block-boxes alignwide is-style-collapse">
        <div class="block-box has-background has-tertiary-background-color">
            <div>
                <p><?= style_guide_str('short'); ?>.</p>
            </div>
        </div>
        <div class="block-box">
            <div>
                <p><?= style_guide_str(); ?>.</p>
            </div>
        </div>
    </section>

    <h2 class="rig-style-guide">Person</h2>
    <section class="block-person">
        Firstname Lastname, Business Title<br>Role <br><a href="mailto:foo@bar.com">foo@bar.com</a><br><a href="tel:0101234567">010 123 4567</a>
    </section>

    <h2 class="rig-style-guide">Persons</h2>
    <section class="block-persons">
        <h2>Contact persons</h2>
        <ul>
            <li>
                Firstname Lastname, Business Title<br>Role <br><a href="mailto:foo@bar.com">foo@bar.com</a><br><a href="tel:0101234567">010 123 4567</a>
            </li>
            <li>
                Firstname Lastname, Business Title<br>Role <br><a href="mailto:foo@bar.com">foo@bar.com</a><br><a href="tel:0101234567">010 123 4567</a>
            </li>
        </ul>
    </section>

</article>

<style>
    .rig-style-guide {
        max-width: 100%;
        padding: 10px;
        background-color: #eee;
        font-size: 16px;
    }
</style>

<?php
function style_guide_str($amount = null)
{
    $offset = rand(0, 3);
    $length = $amount === 'short' ? rand(20, 22) : rand(30, (46 - $offset));

    $words = array_slice(explode(' ', 'lorem ipsum dolor sit amet consectetur adipiscing elit duis dignissim massa vitae lacus hendrerit at aliquet elit tincidunt donec felis odio mollis at mi at feugiat suscipit nisl suspendisse volutpat efficitur nisl ut condimentum est feugiat eu vivamus at diam aliquet sodales velit eu vulputate augue'), $offset, $length);
    $words[0] = ucfirst($words[0]);

    return implode(' ', $words);
}
?>
