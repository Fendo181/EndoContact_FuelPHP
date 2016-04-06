<div class="container">
    <div class="row">
        <div class="col-md-5">
            <img src="/assets/img/logo3.JPG" alt="" width="400" height="400">
        </div>
        <div class="col-md-7">
            <h1>Please Request!</h1>
            <p>
            <h2>ここでは日ごろ貴方が思っている遠藤に対する<strong>不満</strong>や<strong>改善</strong>してほしい点を投稿して頂ければ、気が向いたら遠藤がその投稿を見て改善します。ただし、<b><ins>ほとんど変わらないか、寧ろ悪化するものだと考えて下さい。</ins></b>
            </h2>
            </p>
            <form action="" method="post">
                <h1>
                <div class="col-md-12">
                    <?php echo Html::anchor('request/create','Add new Request',array('class' => 'btn-success')); ?>
                    <i><p>Add new Requestを押して要求を投稿しましょう!</p></i>
                </div>
                </h1>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="well txt-center">
                <h3>
                そう簡単に遠藤が動くと思わないで下さい。
                </h3>
            </div>
        </div>
    </div>

    <div class="row">

        <?php foreach ($requests as $item){ ?>
            <div class="col-md-4">
                <h3><?php echo substr($item->body,0,36); ?></h3>
                <p>【投稿日時】
                    <?php echo date("Y-m-d H:i"),$item->created_at; ?>
                </p>
                <p>【IP】
                    <?php echo $item->ip; ?>
                </p>
                <p>
                    <?php echo substr($item->body,0,240); ?>
                </p>
                <?php echo Html::anchor('request/edit/'.$item->id, '<i class="icon-wrench"></i> Edit',array('class' => 'btn btn-default btn-sm'));
                ?>
                    <?php echo Html::anchor('request/delete/'.$item->id,'<i class="icon-trash icon-white"></i> Delete',array('class' =>'btn btn-sm btn-
                danger','onclick'=>"return confirm('このデータを消去してもよろしいでしょうか？')"));
                ?>
            </div>
            <?php } ?>

    </div>
    <!-- /.row -->
</div>