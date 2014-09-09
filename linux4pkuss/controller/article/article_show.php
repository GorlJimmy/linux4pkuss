<?php 
require_once '../libs/Smarty.class.php';
require_once '../service/ArticleService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$article_id=$_GET['id'];

$article=new ArticleService();
$article_all=$article->article_queryAll();

for ($i=0;$i < count($article_all);$i++){
					
		if(($i > 0)&&($i < count($article_all)-1)){
			if($article_all[$i]['id']==$article_id){
				//本篇文章
				$result=$article->article_queryById($article_id);
				//上一篇文章
				$result_pre=$article->article_queryById($article_all[$i-1]['id']);
				//下一篇文章
				$result_next=$article->article_queryById($article_all[$i+1]['id']);
			}
		}	
		if ($i==0) {
			if ($article_all[$i]['id']==$article_id) {
				//本篇文章
				$result=$article->article_queryById($article_id);
				//上一篇文章
				$result_pre=$article->article_queryById(0);
				$result_pre[0]['title']=null;
				//下一篇文章
				$result_next=$article->article_queryById($article_all[$i+1]['id']);
			}
		}
		if ($i==count($article_all)-1) {
			if ($article_all[$i]['id']==$article_id) {
				//本篇文章
				$result=$article->article_queryById($article_id);
				//上一篇文章
				$result_pre=$article->article_queryById($article_all[$i-1]['id']);
				//下一篇文章
				$result_next=$article->article_queryById(0);
				$result_next[0]['title']=null;
			}
		}
}

//把查询到的结果通过smarty传递给tpl页面
$smarty->assign('rst',$result);
$smarty->assign('rst_pre',$result_pre);
$smarty->assign('rst_next',$result_next);


$smarty->display('../../templates/article_show.tpl');



