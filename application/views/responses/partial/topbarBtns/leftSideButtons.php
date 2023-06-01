<?php
if ($hasResponsesCreatePermission) {
    $this->widget(
        'ext.ButtonWidget.ButtonWidget',
        [
            'name' => 'response-dataentry',
            'id' => 'response-dataentry',
            'text' => gT('Data entry'),
            'icon' => 'ri-keyboard-box-line',
            'link' => Yii::App()->createUrl("admin/dataentry/sa/view/surveyid/$oSurvey->sid"),
            'htmlOptions' => [
                'class' => 'btn btn-outline-secondary',
                'role' => 'button'
            ],
        ]
    );
}

if ($hasResponsesExportPermission) { ?>
    <?php
    $exportDropdownItems = $this->renderPartial(
        '/responses/partial/topbarBtns/responsesExportDropdownItems',
        get_defined_vars(),
        true
    );
    $this->widget('ext.ButtonWidget.ButtonWidget', [
        'name' => 'ls-tools-button',
        'id' => 'ls-tools-button',
        'text' => gT('Export'),
        'icon' => 'ri-upload-2-fill',
        'isDropDown' => true,
        'dropDownContent' => $exportDropdownItems,
        'htmlOptions' => [
            'class' => 'btn btn-outline-secondary',
        ],
    ]);
    ?>
<?php }

if ($hasResponsesCreatePermission) { ?>
        <?php
        $importDropdownItems = $this->renderPartial(
            '/responses/partial/topbarBtns/responsesImportDropdownItems',
            get_defined_vars(),
            true
        );
        $this->widget('ext.ButtonWidget.ButtonWidget', [
            'name' => 'ls-tools-button',
            'id' => 'ls-tools-button',
            'text' => gT('Import'),
            'icon' => 'ri-download-2-fill',
            'isDropDown' => true,
            'dropDownContent' => $importDropdownItems,
            'htmlOptions' => [
                'class' => 'btn btn-outline-secondary',
            ],
        ]);
        ?>
<?php }

if ($hasResponsesDeletePermission) {
    if (!$oSurvey->isAnonymized && $oSurvey->isTokenAnswersPersistence) {
        $this->widget(
            'ext.ButtonWidget.ButtonWidget',
            [
                'name' => 'response-saved',
                'id' => 'response-saved',
                'text' => gT('Iterate survey'),
                'icon' => 'ri-repeat-fill',
                'link' => Yii::App()->createUrl("admin/dataentry/sa/iteratesurvey/surveyid/$oSurvey->sid"),
                'htmlOptions' => [
                    'class' => 'btn btn-outline-secondary',
                    'role' => 'button'
                ],
            ]
        );
    }
}
