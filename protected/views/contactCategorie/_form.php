<?php
/* @var $this ContactCategorieController */
/* @var $model ContactCategorie */
/* @var $form CActiveForm */
$datacontact = Contact::model()->getDataJson();
?>

<div >
    <div class="highlight">
        <div class="form-group">
                <?php echo CHtml::label('Danh bạ', 'category_name'); ?>
                <?php echo CHtml::textField('category_name','',array('size'=>60,'maxlength'=>255)); ?>
        </div>
        <div class="form-group">
                <?php echo CHtml::label('Nhập liên hệ từ excel', 'contact_excel'); ?>
                <?php echo CHtml::fileField('contact_excel','',array('size'=>60,'maxlength'=>255,'type'=>'file')); ?>
                <?php
                    $this->widget('bootstrap.widgets.TbButton',array(
                                'label'=>'Nhập',
                                'type'=>'normal',
                                'size'=>'normal',
                                'encodeLabel'=>false,
                                'buttonType'=>'button',
                                'icon' => 'icon-arrow-up',
                                'ajaxOptions' => array(
                                     'success' => '...',
                                     'error' => '...',
                                     'beforeSend' => '...',
                                 )
                    ));
                ?>
                <?php
                    $this->widget('bootstrap.widgets.TbButton',array(
                                'label'=>'Tải file mẫu',
                                'type'=>'none',
                                'size'=>'normal',
                                'encodeLabel'=>false,
                                'icon'=>'icon-arrow-down',
                                'buttonType'=>'button',
                                'ajaxOptions' => array(
                                     'success' => '...',
                                     'error' => '...',
                                     'beforeSend' => '...',
                                 )
                    ));
                ?>
        </div>
    </div>
    <div id="contact_data"></div>
    <br>
    <?php
        $this->widget('bootstrap.widgets.TbButton',array(
                    'label'=>'Lưu',
                    'type'=>'primary',
                    'size'=>'normal',
                    'encodeLabel'=>false,
                    'icon'=>'icon-ok',
                    'buttonType'=>'button',
                    'ajaxOptions' => array(
                         'success' => '...',
                         'error' => '...',
                         'beforeSend' => '...',
                     )
        ));
     ?>
    <?php
        $this->widget('bootstrap.widgets.TbButton',array(
                    'label'=>'Hủy',
                    'type'=>'danger',
                    'size'=>'normal',
                    'encodeLabel'=>false,
                    'icon'=>'icon-trash',
                    'buttonType'=>'button',
                    'ajaxOptions' => array(
                         'success' => '...',
                         'error' => '...',
                         'beforeSend' => '...',
                     )
        ));
    ?>
</div><!-- form -->


<script data-jsfiddle="example1">
            var people =<?php echo $datacontact; ?>,
              contact_data = document.getElementById('contact_data'),
              settings1,
              ipValidatorRegexp,
              emailValidator;

            ipValidatorRegexp = /^(?:\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b|null)$/;
            emailValidator = function (value, callback) {
              setTimeout(function(){
                if (/.+@.+/.test(value)) {
                  callback(true);
                }
                else {
                  callback(false);
                }
              }, 1000);
            };

            settings1 = {
              data: people,
              minSpareRows: 1,
              contextMenu: true,
              afterChange: function (changes, source) {
                if (source !== 'loadData') {
                  //code
                }
              },
              colHeaders: ['Họ tên', 'Số điện thoại', 'Địa chỉ', 'Ngày sinh', 'Giới tính', 'Thư diện tử', 'Công ty', 'Ghi chú'],
              columns: [
                {data: 'fullname'},
                {data: 'phone'},
                {data: 'address'},
                {data: 'birthday'},
                {data: 'gender'},
                {data: 'email'},
                {data: 'company'},
                {data: 'notes'}
              ]
            };
            var hot = new Handsontable(contact_data, settings1);
</script>