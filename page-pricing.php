<?php get_header() ?>
<div class="row">
    <div class="page-title offset-lg-2 col-lg-8 col-xs-12">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus non erat in interdum.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
    </div>
    <div class="pricing-center offset-lg-1 col-lg-10">
        <div class="buyaccbox-left buyaccbox col-lg-5 col-xs-12  ">
                <h2>Basic</h2>
                <h1>$ 6.99</h1>
                <p>Plugin updates</p>
                <hr>
                <p>Email support</p>
                <hr>
                <p>Unlimited sites</p>
                <button class="btn-2">Purchase</button>
        </div>
        <div class="buyaccbox-right buyaccbox col-lg-5 col-xs-12">
                <h2>Premium</h2>
                <h1>$ 29.99</h1>
                <p>Plugin updates</p>
                <hr>
                <p>Email support</p>
                <hr>
                <p>Unlimited sites</p>
                <button class="btn-2">Purchase</button>
        </div>
    </div>
    <div class="page-title offset-lg-2 col-lg-8 col-xs-12">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus non erat in interdum.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
    </div>
    <div class="offset-lg-1 col-lg-10 col-xs-12 checkbox-wrapper">
        <div class="checkbox-txt col-lg-4 col-xs-3">
           <p>Lorem ispum dolor </p>
           <p>Sit amet</p>
           <p>Consectetur</p>
           <p>Adipiscing elit</p>
           <p>Nullam dapibus</p>
           <p>Non erat</p>
           <p>Interdum</p>
           <p>Vestibulum ante</p>
           <p>Ipsum primis</p>
        </div>
            <div class="col-lg-4 checkbox-img checkbox-img-left cols-xs-3">
                <h2 class="pricing-title">Basic</h2>
                <ul>
                    <?php for($i=1; $i<=9; $i++){
                        if($i<=4){
                            echo '<li><img src="' . get_template_directory_uri() .'/css/pics/checkbox.png" alt=""></li>';
                            }
                        else{
                            echo '<li><img src="' . get_template_directory_uri() .'/css/pics/checkbox-x.png" alt=""></li>';
                        }
                    } ?>
                </ul>
                
            </div>
            <div class="col-lg-4 checkbox-img checkbox-img-right col-xs-3">
                <h2 class="pricing-title">Premium</h2>
                <ul>
                    <?php for($i=1; $i<=9; $i++){
                         echo '<li><img src="' . get_template_directory_uri() .'/css/pics/checkbox.png" alt=""></li>';
                    } ?>
                </ul>
            </div>
    </div>
    <div class="offset-lg-1 col-lg-10 checkbox-price col-xs-12">
                        <div class="basic-price offset-lg-4 col-lg-4 col-xs-6">
                            <h1>$6.99</h1>
                            <button class="btn-2">Purchase</button>
                        </div>
                        <div class="premium-price col-lg-4 col-xs-6">
                            <h1>$29.99</h1>
                            <button class="btn-2">Purchase</button>
                        </div>

    </div>
</div>
<div class="page-title offset-lg-3 col-lg-6 col-xs-12">
    <h1>Lorem ipsum dolor sit amet</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus non erat in interdum.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
</div>
<div class="row price-ending">
    <div class="col-lg-6">
        <h3>Lorem ipsum dolor sit? </h3>
            <p>Ut malesuada ligula quis faucibus maximus. Vivamus luctus vulputate
        libero a lobortis. Aenean varius lobortis mi, ut pretium lorem vehicula
        laoreet. Vestibulum scelerisque laoreet justo, sit amet posuere quam
        ullamcorper a. Integer bibendum, orci aliquet rutrum feugiat, risus eros
        volutpat mauris, ac ornare elit metus in nulla.  </p>              
    </div>
    <div class="col-lg-6">
        <h3>Suspendisse tincidunt pharetra? </h3>
        <p>Ut malesuada ligula quis faucibus maximus. Vivamus luctus vulputate
        libero a lobortis. Aenean varius lobortis mi, ut pretium lorem vehicula
        laoreet. Vestibulum scelerisque laoreet justo, sit amet posuere quam
        ullamcorper a. Integer bibendum.</p>                
    </div>
    <div class="col-lg-6 pricing-end-row">
        <h3>Phasellus dictum, tortor et blandit venenatis?</h3>
        <p>Ut malesuada ligula quis faucibus maximus. Vivamus luctus vulputate
        libero a lobortis. Aenean varius lobortis mi, ut pretium lorem vehicula
        laoreet. Vestibulum scelerisque laoreet justo, sit amet posuere quam
        ullamcorper.</p>
    </div>
    <div class="col-lg-6 pricing-end-row">
        <h3>Aenean auctor?</h3>
        <p>Ut malesuada ligula quis faucibus maximus. Vivamus luctus vulputate
        libero a lobortis. Aenean varius lobortis mi, ut pretium lorem vehicula
        laoreet. Vestibulum scelerisque laoreet justo, sit amet posuere quam
        ullamcorper a. Integer bibendum, orci aliquet rutrum feugiat, risus eros
        volutpat mauris, ac ornare elit metus in nulla.
        </p>

    </div>


</div>

<?php get_footer() ?>