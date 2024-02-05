<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \frontend\models\ContactForm $model */
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';

?>

<?=$this->render('/site/_header',['header'=>'Contacto'])?>
<!-- team-->
<div class="contactpage pagepadd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="mf-contact-box clearfix ">

                    <div class="contact-info address"><i class="flaticon-arrow"></i>
                        <div>
                            <span>Direcci&oacute;n:</span> 
                            Carretera Angelina-Fantino, Curva de Bacumi, Cotui, Rep. Dom.
                        </div>
                    </div>
                    <div class="contact-info "><i class="fa fa-phone"></i>
                        <div>
                            <span>Tel&eacute;fono:</span> 


                            <a class="text-info" href="tel:829-813-6607">  
                                829-813-6607
                            </a>
                        </div>
                    </div>
                    <div class="contact-info email"><i class="flaticon-note"></i>
                        <div>
                            <span>Correo: </span>
                            <a class="text-info" href="mailto:info@intelmec.com.do">
                                info@intelmec.com.do
                            </a>
                        </div>
                    </div>
                    <ul class="contact-social">
                        <li class="facebook">
                            <a href="#" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li class="instagram">
                            <a href="#" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="mf-department">
                    <div class="mf-section-title text-left dark medium-size">
                        <h2>Ubicación</h2>
                    </div>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.191949269061!2d-70.2528174!3d19.143073299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eafd21ad4ca7341%3A0xbc2e826ab3c25bc5!2sIntelmec!5e0!3m2!1sen!2sdo!4v1698868872084!5m2!1sen!2sdo" 
                        width="100%" height="450" style="border:0;" allowfullscreen="" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">

                    </iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<?php /*
<div class="contactform">
    <div class="container">
        <div class="mf-section-title text-center dark large-size margbtm20">
            <h2>Envíanos un mensaje</h2>
        </div>

        <div class="contact-form mf-contact-form-7 form-light">
            <?php
            $form = ActiveForm::begin(['id' => 'contact-form', 'options' => [
                            'class' => 'wpcf7-form',
                            'novalidate' => "novalidate"
            ]]);
            ?>
            <?php //<form method="post" action="ajax/mail.php" class="wpcf7-form" id="contact-form" novalidate="novalidate"> ?>
            <div class="mf-form mf-form-2">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12 mf-input-field">
                        <p>
                            <input type="text" name="name" value="" size="40" placeholder="Nombre*">
                        </p>
                        <p>
                            <input type="email" name="email" value="" size="40" placeholder="Correo Electronico*">
                        </p>
                        <p>
                            <input type="text" name="phone" value="" size="40" placeholder="Telefono">
                        </p>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 mf-textarea-field">
                        <p>
                            <textarea name="message" cols="40" rows="10" placeholder="Mensaje..."></textarea>
                        </p>
                    </div>
                </div>
                <?=
                $form->field($model, 'verifyCode',[
                    'template'=>'<div class="row"><div class="col-sm-3 text-right">{label}</div><div class="col-sm-9 text-left">{input}{error}{hint}</div></div>'
                    ])->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-3 text-right">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])
                ?>
                <div class="row">
                    <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                        <button type="submit" class="btn-style-two">Enviar</button>
                    </div>
                </div>
            </div>
            <div id="loading" class="wpcf7-response-output wpcf7-display-none"><img src="images/ajax-loader.png" alt="loading" /></div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
*/ ?>