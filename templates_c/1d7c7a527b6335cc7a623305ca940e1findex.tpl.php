<body>
<?php include 'test.php'; ?>
<?php if($this->vars['name']){ ?>
<h1><?php echo $this->vars['name']; ?></h1>
<?php }else{ ?>
<h1>111</h1>
<?php } ?>

<?php foreach($this->vars['list'] as $key=>$value) {?>
<?php echo $key; ?>....<?php echo $value; ?><br/>
<?php } ?>
<?php /* 这是注释语句，页面不显示的 */ ?>
<?php echo $this->config['author'];?><br/>
<?php echo $this->config['url'];?>
</body>