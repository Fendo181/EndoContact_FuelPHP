<?php echo Form::open(array("class"=>"form-horizontal")); ?>

    <fieldset>
        <div class="form-group">
            <h3>
			<?php echo Form::label('要求内容を入力して下さい', 'body', array('class'=>'control-label')); ?>
            </h3>

            <?php echo Form::input('body', Input::post('body', isset($request) ? $request->body : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Body')); ?>

        </div>

        <div class="form-group">
            <label class='control-label'>&nbsp;</label>
            <?php echo Form::submit('submit', '投稿する。', array('class' => 'btn btn-primary')); ?>
        </div>
    </fieldset>
    <?php echo Form::close(); ?>