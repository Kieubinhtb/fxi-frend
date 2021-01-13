<?php 
    $listForex = array(
        array( 
            'name' => 'NatureForex'
        ),
        array( 
            'name' => 'Oinvest'
        ),
        array( 
            'name' => 'HotForex'
        ),
        array( 
            'name' => 'Spreadex'
        ),
        array( 
            'name' => 'ATFX'
        ),
        array( 
            'name' => 'FXBFI'
        ),
        array( 
            'name' => 'ClickTrade'
        ),
        array( 
            'name' => 'World Markets'
        ),
        array( 
            'name' => 'Zero Markets'
        ),
        array( 
            'name' => 'iTrader'
        ),
        array( 
            'name' => 'Alvexo'
        ),
        array( 
            'name' => 'Mtrading'
        ),
        array( 
            'name' => 'FXTM'
        ),
        array( 
            'name' => 'xDirect'
        ),
        array( 
            'name' => 'YJFX'
        ),
        array( 
            'name' => 'Exness'
        ),
        array( 
            'name' => 'Amarkets'
        ),
        array( 
            'name' => 'TradeSway'
        ),
        array( 
            'name' => 'FBS'
        ),
        array( 
            'name' => 'XGlobalMarkets'
        ),
        array( 
            'name' => 'XM'
        ),
        array( 
            'name' => 'Amega'
        ),
        array( 
            'name' => 'Bdswiss'
        ),
        array( 
            'name' => 'XGlobalMarkets'
        ),
        array( 
            'name' => 'GTF Markets'
        ),
        array( 
            'name' => 'xTrade'
        ),
        array( 
            'name' => 'XTB'
        ),
        array( 
            'name' => 'Alvexo'
        ),
        array( 
            'name' => 'AccentForex'
        ),
        array( 
            'name' => 'World Markets'
        )
    );
?>

<div class="section before-footer bg-gray">
    <div class="container">
        <h3 class="title-h3">Danh sách sàn Forex cập nhật T10/2020</h3>
        <ul class="lastest-updated-list">
            <?php 
                foreach( $listForex as $item ) {
                    echo '<li><a href="#">'. $item['name'] .'</a></li>';
                }

                foreach( $listForex as $item ) {
                    echo '<li><a href="#">'. $item['name'] .'</a></li>';
                }
            ?>
        </ul>
        <p class="text-center mb-0 mt-5"><a href="#" class="btn btn-more-circle"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a></p>
    </div>
</div>