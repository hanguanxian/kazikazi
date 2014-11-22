<?php

/* index.html.twig */
class __TwigTemplate_7077c76423990fe5781e3dc5c43074097dc753a4346bdeabbcfe8a13d7687a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<style>
    .container { margin: 0 auto; width: 250px; }

    .container form input, .container form select { display: block; font-size: 15px; height: 32px; margin: 15px auto; padding-left: 14px; width: 100%; color: #a7989d; border: 1px solid #cccccc; box-sizing: border-box; }

    .container form select option { border: 1px solid #cccccc; box-sizing: border-box; color: #a7989d; display: block; font-size: 15px; padding: 8px 0 8px 14px; width: 100% }

    .container #sub { background-color: #f5ad49; color: #fff; display: block; font-size: 16px; height: 40px; line-height: 40px; margin-top: 10px; text-align: center; width: 100%; }
</style>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<div id=\"body\">
    
    <div style='height: 200px;'></div>
    <div class='container'>
        <form>
            <input type=\"text\" name=\"name\" placeholder=\"姓名/Name\" id=\"name\">
            <input type=\"text\" name=\"phone\" placeholder=\"电话/Phone\" id=\"phone\">
            <select name=\"province\" id=\"province\" onchange=\"changeProvince(this.options[this.selectedIndex].value)\">
                <option value=\"0\">省/Province</option>
            </select>
            <select name=\"city\" id=\"city\">
                <option value=\"0\">市/City</option>
            </select>
            <a href=\"#\" id=\"sub\">确定</a>
        </form>
    </div>

</div>

";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "<script src='web/js/cities.js'></script>
<script type=\"text/javascript\">

function changeProvince(province){ 

    \$(\"#city\").empty();

    var mycity = cities[province];
    
    for ( var len in mycity){
        \$(\"<option value='\"+mycity[len]+\"'>\"+mycity[len]+\"</option>\").appendTo(\"#city\");
    }
} 

\$(function(){

    for ( var len in cities){
        \$(\"<option value='\"+len+\"'>\"+len+\"</option>\").appendTo(\"#province\");
    }

    \$(\"#sub\").click(function(){

        var addr = \$(\"#province\").val();
        var name = \$(\"#name\").val();
        var phone = \$(\"#phone\").val();
        var city = \$(\"#province\").val()+\$(\"#city\").val();
        console.log(city);
        if(!name){
            alert(\"请输入姓名\");
        } else if(!phone){
            alert(\"请输入电话\");
        } else if(addr==0){
            alert(\"请选择城市\");
        } else {
            \$.ajax({
            type : \"post\",
            url : \"store.php\",
            data : {name : name,phone :phone,city : city},
            success : function() {
                alert(\"提交成功\");
                }
            });
        }

    });
});


function shareFriend() {
    WeixinJSBridge.invoke('sendAppMessage',{
        \"appid\": appid,
        \"img_url\": imgUrl,
        \"img_width\": \"80\",
        \"img_height\": \"80\",
        \"link\": lineLink,
        \"desc\": descContent,
        \"title\": shareTitle
    }, function(res) {
        //_report('send_msg', res.err_msg);
    })
}
function shareTimeline() {
    WeixinJSBridge.invoke('shareTimeline',{
        \"img_url\": imgUrl,
        \"img_width\": \"80\",
        \"img_height\": \"80\",
        \"link\": lineLink,
        \"desc\": descContent,
        \"content\": descContent,
        \"title\": descContent
    }, function(res) {
        //_report('timeline', res.err_msg);
    });
}
function shareWeibo() {
    WeixinJSBridge.invoke('shareWeibo',{
        \"img_url\": imgUrl,
        \"img_width\": \"80\",
        \"img_height\": \"80\",
        \"content\": descContent,
        \"title\": shareTitle,
        \"url\": lineLink,
    }, function(res) {
        //_report('weibo', res.err_msg);
    });
}
// 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
    // 发送给好友
    WeixinJSBridge.on('menu:share:appmessage', function(argv){
        shareFriend();
    });
    // 分享到朋友圈
    WeixinJSBridge.on('menu:share:timeline', function(argv){
        shareTimeline();
    });
    // 分享到微博
    WeixinJSBridge.on('menu:share:weibo', function(argv){
        shareWeibo();
    });
}, false);
</script>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 38,  72 => 37,  49 => 16,  46 => 15,  33 => 4,  30 => 3,);
    }
}
