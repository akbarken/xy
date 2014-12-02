<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - About';
$this->breadcrumbs = array(
    'About',
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/jquery-1.11.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#viewAuth').click(function () {
            $('#showViewAuth').show();
            $('#showExportAuth').hide();
            $('#showAssignAuth').hide();
            viewAuth = $('#showViewAuth');
            viewAuth.html('正在获取产品列表...');
        });

        $('#exportAuth').click(function () {
            $('#showViewAuth').hide();
            $('#showExportAuth').show();
            $('#showAssignAuth').hide();
        });

        $('#assignAuth').click(function () {
            $('#showViewAuth').hide();
            $('#showExportAuth').hide();
            $('#showAssignAuth').show();
        });
    });
</script>

<div>
    <ul>
        <li>
            <a style="color: #000000"
               href="" id="viewAuth" name="viewAuth">
                查看权限
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a style="color: #000000"
               href="" id="exportAuth" name="exportAuth">
                导出权限
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a style="color: #000000"
               href="" id="assignAuth" name="assignAuth">
                授权范围
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a style="color: #000000"
               href="">
                复用查看权限
            </a>
        </li>
    </ul>
</div>

<div>
    <div id="showViewAuth" style="display: none">showViewAuth</div>
    <div id="showExportAuth" style="display: none">showExportAuth</div>
    <div id="showAssignAuth" style="display: none">showAssignAuth</div>
</div>


<div class="view" id="showViewAuth">
    <table>
        <!--查看权限-->
        <tr>
            <td><input type="checkbox" id="selectViewAuth"
                       name="selectViewAuth" value="res_1"
                       checked>主页
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" id="selectViewAuth"
                       name="selectViewAuth" value="res_2"
                       checked>——多维详情对比
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_3"
                       checked>————百度手机助手
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_4"
                       checked>————91手机助手
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_5"
                       checked>————安卓市场
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" id="selectViewAuth"
                       name="selectViewAuth" value="res_6"
                       checked>资源利用率
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_7"
                       checked>——百度手机助手
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_8"
                       checked>——91手机助手
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" id="selectViewAuth"
                       name="selectViewAuth" value="res_9"
                       checked>——安卓市场
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_10"
                       checked>————分发总览
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_11"
                       checked>————各职能使用
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_12"
                       checked>————各职能使用详情页
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_13"
                       checked>————各职能使用详情页
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_14"
                       checked>————各职能使用详情页
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" id="selectViewAuth"
                       name="selectViewAuth" value="res_15"
                       checked>————单资源位详情
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_16"
                       checked>——————编辑
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_17"
                       checked>——————首发
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_18"
                       checked>——————广告
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_19"
                       checked>——————游戏
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_20"
                       checked>——————换量
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_21"
                       checked>——————运营
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_22"
                       checked>资源变现效率
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_23"
                       checked>KPI进展
            </td>
        </tr>
        <tr>
            <td>

                <input type="checkbox" id="" name="" value="res_24"
                       checked>权限管理
            </td>
        </tr>
    </table>
</div>
