<?php


?>

<div class="container-fluid" style="padding-top: 7vw ;">

    <div class="row">
        <div class="col-6">

            <div class="card" >
              <div class="card-body">
                <h4 class="card-title">بستر جامع و قابل اعتماد آموزش
                </h4>
                <p class="card-text">
                      پایگاه جامع آموزش رمزارزها، بلاکچین و توکن‌های بهادار، اگر در دنیای رمزارزها و بلاکچین تازه وارد هستید و به دنبال یادگیری مفاهیم، شیوه استخراج رمزارزها و آشنایی با ارزهای دیجیتال هستید و یا به عنوان یک فرد با سابقه در پی بهبود استراتژی معاملاتی خود هستید، در بستر مزدکس همه نوع محتوا در سطوح مختلف برای شما آماده کردیم

                </p>

                  <button type="button" class="btn btn-primary">
                      از اینجا شروع کنید
                  </button>
              </div>
            </div>
        </div>

        <div class="col-5">



                    <?php
                    $p_bg = ot_get_option( 'cryptoland_blog_good_display', array() );
                    ?>

                    <video style="width:100%;height:80%" controls>
                        <source src="<?php echo $p_bg ?>" type="video/mp4">
                        <source src="<?php echo $p_bg ?>" type="video/ogg">
                    </video>

        </div>
    </div>
</div>


