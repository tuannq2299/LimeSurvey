<?php
/**
 * Move next button
 *
 * @var $value
 * @var $class
 */
?>
<!-- views/survey/system/actionButton/moveNext -->
<?php
echo CHtml::openTag("div",array("class"=>"ls-{$name}-form"));
    echo CHtml::openTag("label",array("class"=>"col-form-label fw-bold d-none"));
        echo CHtml::checkBox($confirmedby,false,array('id'=>false,'value'=>$confirmvalue, 'class' => 'me-2'));
        echo CHtml::tag("span",array('class'=>'control-label'),gT("Please confirm you want to clear your response?"));
    echo CHtml::closeTag("label");
    echo CHtml::htmlButton(gT("Exit and clear survey"),array(
        'type'=>'submit',
        'id'=>null,
        'value'=>$value,
        'name'=>$name,
        'class'=>"$class btn btn-link",
        'data-confirmedby'=>$confirmedby,
        'title'=>gT("This action need confirmation."),
    ));
echo CHtml::closeTag("div");
?>
<!-- end of views/survey/system/actionButton/moveNext -->
