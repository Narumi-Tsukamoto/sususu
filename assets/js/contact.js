jQuery(function ($) {
    $(function(){
        $("#formCheck").validationEngine(
            'attach', {
                promptPosition: "topLeft"//エラーメッセージ位置の指定
            }
        );
    });
    for (let i = 1; i <= 4; i++) {
        $(`.formElement${i}`).focus(function() {
            $(`.formElementParent${i}`).addClass("focus");
        }).blur(function() {
            $(`.formElementParent${i}`).removeClass("focus");
        }).keyup(function() {
            $(`.formElementParent${i}`).addClass("confirm");
        });
    };
    $('#your-name').addClass('validate[required]');
    $('#your-email').addClass('validate[required,custom[email]]');
    $('#your-title').addClass('validate[required]');
    $('#your-cont').addClass('validate[required]');
});