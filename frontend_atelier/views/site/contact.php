<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend_atelier\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contato';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>
</div>
<div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>

        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Nome']) ?>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail']) ?>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Assumto']) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Deixe uma mensagem']) ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row text-center"><div class="col-lg-6 text-center">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                </div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-xl text-uppercase', 'name' => 'contact-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
