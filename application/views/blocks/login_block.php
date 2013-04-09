            <div class="BlockBorder">
                <div class="BlockBL">
                    <div></div>
                    
                </div>
                <div class="BlockBR">
                    <div></div>
                    
                </div>
                <div class="BlockTL">
                    
                </div>
                <div class="BlockTR">
                    <div></div>
                    
                </div><div class="BlockT"></div><div class="BlockR"><div></div></div><div class="BlockB"><div></div></div><div class="BlockL"></div><div class="BlockC"></div><div class="Block">

                    <span class="BlockHeader"><span>Вход в систему</span></span>

                    <div class="BlockContentBorderBorder"><div class="BlockContentBorderBL"><div></div></div><div class="BlockContentBorderBR"><div></div></div><div class="BlockContentBorderTL"></div><div class="BlockContentBorderTR"><div></div></div><div class="BlockContentBorderT"></div><div class="BlockContentBorderR"><div></div></div><div class="BlockContentBorderB"><div></div></div><div class="BlockContentBorderL"></div><div class="BlockContentBorderC"></div><div class="BlockContentBorder">
			    
		<?=form_open('home/login')?>
			    <?=validation_errors()?>
			    <?php $params=array(
				'name'		=> 'username',
				'id'		=> 'username',
				'style'		=> 'width:120px',
				'placeholder'	=> 'Логин'
				)?>
			    <?=form_input($params)?>
                            <?php $params=array(
				'name'		=> 'password',
				'id'		=> 'password',
				'style'		=> 'width:120px',
				'placeholder'	=> 'Пароль'
				)?>
			    <?=form_password($params)?>
                            <span class="ButtonInput"><span>
				    
			    <?=form_submit('login','Войти')?>
				</span></span>
		<?php echo form_close()?>

                        </div></div>

                </div>
            </div>