## 前端组件扩展

    |-表单类组件扩展.Widget
    |    |-Dot         多选择器
    |    |-CascadeDot  级联多选择器
    |    |-CascadeLine 级联管理器
    |    |-Linear      列表控件  
    |
    |-弹窗组件.Widget
    |    |-plane       异步弹窗组件
    |     
    |-辅助工具.Tool
    |    |-Assistant   数据处理辅助方法  
    |    |-FormPanel   表单内容生成器
    |    |-CascadeLineTrait   级联管理器的接口抽象类 
    |
    |-参考样例.Test
    |    |-example      组件样例
    |    |-CascadeLineController  级联管理器 接口样例

### 安装
```shell script
composer require dlp/component-js
```
### 发布
```shell script
php artisan vendor:publish --provider="DLP\DLPServiceProvider" --force
```

