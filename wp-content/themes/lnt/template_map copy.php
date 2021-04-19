<div class="stock-box"><br>
    <?php
        $request = wp_remote_get( 'https://api.bseindia.com/BseIndiaAPI/api/StockReachGraph/w?scripcode=540005&flag=0&fromdate=&todate=&seriesid=' );

 

        if( is_wp_error( $request ) ) {
            return false; // Bail early
        }

 

        $body = wp_remote_retrieve_body( $request );

 

        $data1 = json_decode( $body );
        
        $preclose = $data1->PrevClose;
        
        $diff = $data1->CurrVal - $preclose;
        
        $percentage = $diff / $preclose * 100;
        
        
        if( ! empty( $data1 ) ) {
    ?>
    <div class="stock-header"><b>STOCK WATCH</b>
    </div>
    <div class="stock-header-2">
        <a class="blue-clr" href="">BSE |</a>
        <a class="grey-clr" href="">NSE</a>
    </div><hr>

 

    <div class="stock-content">
        <div class="date-content"><p>As on <?php echo $data1->CurrDate; ?></p>
        </div>
        <div class="info-content-box">Current<br>
            <span class="current-data">
                <?php 
                    if( $diff > 0 ) 
                    {
                ?>
                        <span class="blue-Font"><?php echo $data1->CurrVal; ?></span>
                <?php
                    } else 
                    {
                ?>
                        <span class="red-Font"><?php echo $data1->CurrVal; ?></span>
                <?php
                    }
                ?>
             <span>INR</span>
             </span>

 

            <p class="M-T-5">
                <span>%Change</span><br>
                    <span class="blue-Font"><?php echo $percentage; ?></span>
            </p>

 

            <p class="M-T-5">
                <span>Volume</span><br>
                    <span class="blue-Font"><?php echo $data1->HighVol; ?></span></span>
            </p>
            <p class="M-T-6">
                <a href="">BSE</a>
                <a href="">NSE</a>
            </p>
        </div>
    </div>
    <?php 
    }
    ?>
</div>