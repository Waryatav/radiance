<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

?>
<?php $cur_options = fw_get_db_post_option( get_the_ID() );; ?>
    <div class="product-info">
        <div class="product-info-left-side">
            <h4><?php pll_e( 'ABOUT PRODUCT' ); ?>:</h4>
            <?= $cur_options['description']; ?>
        </div>
        <div class="product-info-right-side">
            <h4 class="characteristic-header"><?php pll_e( 'CHARACTERISTICS' ); ?>:</h4>
            <p class="characteristic"><?php pll_e( 'Article' ); ?>: <span>#00009090234</span></p>
            <p class="characteristic"><?php pll_e( 'Material' ); ?>: <span class="value">Silk</span></p>
            <p class="characteristic"><?php pll_e( 'Color' ); ?>: <span class="value">Blue</span></p>
            <?php foreach ( $cur_options['characteristics'] as $option ): ?>
                <p class="characteristic"><?= $option['title']; ?>: <span class="value"><?= $option['value']; ?></span></p>
            <?php endforeach; ?>

            <h4 class="sizes-header"><?php pll_e( 'TABLE OF SIZES' ); ?>:</h4>
            <h5><?php pll_e( 'Before add to cart select your size in table' ); ?></h5>

            <a class="size-option " href="#"><span class="imperial imperial-active"></span> Imperial</a>
            <a class="size-option" href="#"><span class="metric"></span>Metric</a>
            <div class="size-table">
                <div class="conv__box metric">
                    <table>
                        <tbody>
                        <tr>
                            <th class="row">US</th>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                        </tr>
                        <tr>
                            <th class="row">UK</th>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                        </tr>
                        <tr>
                            <th class="row">EUROPE</th>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                        </tr>
                        <tr>
                            <th class="row">RUSSIA</th>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                        </tr>
                        <tr>
                            <th class="row">JAPAN</th>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                        </tr>
                        <tr>
                            <th class="row">KOREA</th>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                        </tr>
                        <tbody>
                        <tfoot>
                        <tr>
                            <th class="col">S-M-L</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                        </tr>
                        <tfoot>
                    </table>
                </div>
                <div class="conv__box imperial">
                    <table>
                        <tbody>
                        <tr>
                            <th class="row">US</th>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                        </tr>
                        <tr>
                            <th class="row">UK</th>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                            <td><a href="#">30</a></td>
                        </tr>
                        <tr>
                            <th class="row">EUROPE</th>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                        </tr>
                        <tr>
                            <th class="row">RUSSIA</th>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                            <td><a href="#">40</a></td>
                        </tr>
                        <tr>
                            <th class="row">JAPAN</th>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                            <td><a href="#">32</a></td>
                        </tr>
                        <tr>
                            <th class="row">KOREA</th>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                            <td><a href="#">80</a></td>
                        </tr>
                        <tbody>
                        <tfoot>
                        <tr>
                            <th class="col">S-M-L</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                            <th class="col">XXS</th>
                        </tr>
                        <tfoot>
                    </table>
                </div>
            </div>
            <h5><?php pll_e( 'Price' ); ?>:</h5>
            <p class="price"><span class="price-icon">$</span><?= $cur_options['price'];?></p>

        </div>
    </div>