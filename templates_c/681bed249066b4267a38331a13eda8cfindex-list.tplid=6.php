<?php $tpl->noParse('index/header.tpl'); ?>
<!-- start site's main content area -->
    <section class="content-wrap">
        <div class="container">
           <!-- nav path start -->
           <div class="row">
	             <div class="col-md-12">
		                <ol class="breadcrumb">
						  <li><a href="./">首页</a></li>
						  <?php echo $this->vars['nav_name']; ?>
						</ol>
						<input type="text" id="sort" value="<?php echo $this->vars['sort']; ?>">
	             </div>
            </div>
            <!-- nav path end -->
            
            <!-- content -->
            <div class="row">

              <main class="col-md-8 main-content">

                  	 <article id='".$article_id."' class='post tag-about-ghost tag-release featured'>
                  	 <div class='featured' title='推荐文章'><i class='fa fa-star'></i></div>
                  	 <div class='post-head'>
                  	 <h1 class='post-title'><a href='".$submit_Path."LoachBlog/LoachBlog/article/".$article_id."'>我是标题</a></h1>
                  	 <div class='post-meta'>";
                  	 <span class='author'>作者：<a href=''>loach</a></span>
                  	 <time class='post-date' datetime='".$article_created."' title='".$article_created."'>2017-9-8 14:05:43</time>
                  	 </div>
                  	 </div>
                  	 <div class='post-content'>";
                  	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;内容....</p>
                  	 </div>
                  	 <div class='post-permalink'>
                  	 <a href='".$submit_Path."LoachBlog/LoachBlog/article/".$article_id."' class='btn btn-default'>阅读全文</a>
                  	 </div>
                  	 </article>
            
                
				<nav class="page" role="navigation">
				    分页
				</nav>


                </main>

                <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->	


				<!-- start tag cloud widget -->
				<div class="widget">
					<h4 class="title">搜索</h4>
					<div class="content community">
						<p><input id="keyword" type="text" /><a href="javascript:void(0);" onclick="dosearch('LoachBlog/LoachBlog/search/','LoachBlog/LoachBlog/search/'+document.getElementById('keyword').value+'/page/',document.getElementById('keyword').value)" class="btn btn-default">搜索</a></p>
					</div>
				</div>
				<!-- end tag cloud widget -->	
				
				<!-- start tag cloud widget -->
				<?php if($this->vars['child_nav']){ ?>
				<div class="widget">
					<h4 class="title">子栏目列表</h4>
					<div class="content tag-cloud">			        			          
			          <?php foreach($this->vars['child_nav'] as $key=>$value) {?>
			          <a href="list.php?id=<?php echo $value->id; ?>"><?php echo $value->nav_name; ?>(<font color="blue">20</font>)</a>
			          <?php } ?>			          
					</div>
				</div>
				<?php } ?>
				<!-- end tag cloud widget -->		
				
				<!-- start tag cloud widget -->
				<div class="widget">
					<h4 class="title">标签云</h4>
					<div class="content tag-cloud">

			                <a href="#">标签</a>
			           
                            <a href="LoachBlog/LoachBlog/tags">...</a>
					</div>
				</div>
				<!-- end tag cloud widget -->	
				
				<!-- start widget -->
				<div class="widget">
					<h4 class="title">微信订阅号</h4>
					<div class="content download">
						<img src="<?php echo $this->vars['templates']; ?>/img/gzh.png" width="100%" alt="微信订阅号"/>
					</div>
				</div>
				<!-- end widget -->	
				
				<!-- start tag cloud widget -->
				<div class="widget">
					<h4 class="title">联系</h4>
					<div class="content community">
						<p><a href="mailto:zhangbailong945@outlook.com" title="zhangbailong945@outlook.com" target="_blank"><i class="fa fa-comments"></i> 留言给我</a></p>
						<p><a href="http://www.weibo.com/u/2734251684?is_all=1" title="loach" target="_blank"><i class="fa fa-weibo"></i> 官方微博</a></p>
					</div>
				</div>
				<!-- end tag cloud widget -->	

				<!-- end tag cloud widget -->	
				<div class="widget">
					<h4 class="title">订阅</h4>
					<div class="content">
				       <a href='ReallySimpleSyndication/rss' target='_blank'>
						<img src='<?php echo $this->vars['templats']; ?>/img/rss.gif' width='36' height='14' />
						</a>
				   </div>
				</div>
				<!-- start widget -->

				<!-- start tag cloud widget -->
				<div class="widget">
					<h4 class="title">访问量</h4>
					<div class="content tag-cloud">
				
					   	本站已有  <font color='#e67e22'>1000</font>  位访问者！
				
					</div>
				</div>
				<!-- end tag cloud widget -->

				
				<!-- start widget -->
				<!-- end widget -->                
              </aside>

            </div>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/indexNav.js"></script>
 <?php $tpl->noParse('index/footer.tpl'); ?>