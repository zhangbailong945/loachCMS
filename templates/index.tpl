<body>
{include "test.php"}
{if $name}
<h1>{$name}</h1>
{else}
<h1>111</h1>
{/if}

{foreach $list(key,value)}
{@key}....{@value}<br/>
{/foreach}
{#}这是注释语句，页面不显示的{#}
{%author%}<br/>
{%url%}
</body>