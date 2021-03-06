<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>图片展示页面</title>
<link rel="stylesheet" href="admins/css/style.default.css" type="text/css" />
<script type="text/javascript" src="admins/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="admins/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="admins/js/custom/general.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	
	
	///// DROP DOWN BUTTON /////
	jQuery('.dropdown').each(function(){
		var t = jQuery(this);
		t.find('a.dropdown_label').click(function(){
			if(!t.hasClass('open')) {
				var h = t.height();
				t.find('ul').show().css({top: h+2+'px'});	
				t.addClass('open');
			} else {
				t.find('ul').hide();	
				t.removeClass('open');				   
			}
			return false;
		});
		
	});
	
	jQuery(document).click(function(){
		jQuery('.dropdown').removeClass('open').find('ul').hide();
	});
	

	
	

});
</script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="admins/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="admins/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="admins/js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    @include('admin.header')
    @include('admin.leftmenu') <!-- 左侧菜单 -->
        
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Photo/Video Sharing</h1>
            <span class="pagedesc">This is a sample description of a page</span>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper nopadding">
        	<div class="photosharing_head">
            	<ul class="photosharing_menu">
                    <li><a class="prev prev_disabled"></a></li>
                    <li><a class="next"></a></li>
                    <li class="marginleft5 dropdown" id="actions">
                        <a class="dropdown_label" href="#actions">
                        Actions
                        <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="">Add to Group</a></li>
                            <li><a href="">Edit Photo</a></li>
                            <li><a href="">View Exif Info</a></li>
                            <li><a href="">Share</a></li>
                        </ul>
                    </li>
                    <li class="marginleft5 viewfilebtn"><a class="viewsizes">View All Sizes</a></li>
                    <li class="marginleft5 trashbtn"><a class="trash" title="Trash"></a></li>
                </ul>
                <span class="clearall"></span>
            </div><!--photosharing_head-->
            
            
            <div class="two_third photosharing_wrapper">
            	<div class="photopreview">
                	<a href=""><img src="images/preview/themepixels1.jpg" alt="" /></a>
                </div>
                <br />
                <h2>An Ant</h2>
                <div class="desc">
                	<p>Even kings and emperors with heaps of wealth and vast dominion cannot compare with an ant filled with the love of God.</p>
                </div>
                
				<div class="contenttitle2">
                	<h3>Comments</h3>
                </div><!--contenttitle-->
                
                 <ul class="commentlist nomargin">
                    <li>
                        <div class="comment_authorimg"><img src="../../images/thumbs/avatar5.png" alt="" /></div>
                        <div class="commentcontent">
                            <div class="top">
                                <a href="" class="user">Hiccup</a> - <a href="">Report</a> - <span>1 hour ago</span>
                            </div><!--top-->
                            <div class="text">Everything we know about you guys is wrong. </div><!--text-->
                         </div><!--updatecontent-->
                    </li>
                    <li>
                        <div class="comment_authorimg"><img src="../../images/thumbs/avatar5.png" alt="" /></div>
                        <div class="commentcontent">
                            <div class="top">
                                <a href="" class="user">Hiccup</a> - <a href="">Report</a> - <span>1 hour ago</span>
                            </div><!--top-->
                            <div class="text">Then something crazy...! </div><!--text-->
                         </div><!--updatecontent-->
                    </li>
                 </ul>

                <div class="sharing_commentform">
                    <form action="" method="post">
                        <div class="comment_authorimg"><img src="../../images/thumbs/avatar14.png" alt="" /></div>
                        <div class="commentcontent" style="padding-right: 12px;">
                            <input type="text" name="" value="Type your comment and press enter to submit" onclick="this.value=''" />
                        </div><!--updatecontent-->
                    </form>
                </div><!--commentform-->       
                
                         
            </div><!--photosharing_wrapper-->
            
            <div class="one_third last ps_sidebar">
            	<div class="ps_author">
                	<span class="thumb"><img alt="" src="images/thumbs/avatar5.png" /></span>
                </div><!--ps_author-->
                <div class="ps_authorinfo">
                	<a href="">Hiccup Haddock III</a> <br />
                    <small>Added: June 14, 2012 3:45pm</small>
                </div><!--ps_authorinfo-->
                
                <div class="viewinfo">
                	<span class="numviews"> 2,212 views</span>
                    <span class="numcomments"> 78 comments</span>
                </div><!--viewinfo-->
                
				<div class="contenttitle2">
                	<h3>More from this user</h3>
                </div><!--contenttitle-->
                
                <ul class="morephotolist">
                	<li><a href=""><img src="images/thumbs/image1.png" alt="" /></a></li>	
                    <li><a href=""><img src="images/thumbs/image2.png" alt="" /></a></li>	
                    <li><a href=""><img src="images/thumbs/image3.png" alt="" /></a></li>	
                    <li><a href=""><img src="images/thumbs/image4.png" alt="" /></a></li>	
                </ul><!--morephotolist-->
                
                <br clear="all" />
                
				<div class="contenttitle2">
                	<h3>Related Photos</h3>
                </div><!--contenttitle-->
                
                <ul class="morephotolist">
                	<li><a href=""><img src="images/thumbs/image5.png" alt="" /></a></li>	
                    <li><a href=""><img src="images/thumbs/image6.png" alt="" /></a></li>	
                    <li><a href=""><img src="images/thumbs/image2.png" alt="" /></a></li>	
                    <li><a href=""><img src="images/thumbs/image1.png" alt="" /></a></li>	
                </ul><!--morephotolist-->
                
                <br clear="all" />
                
                <div class="contenttitle2">
                	<h3>Tags</h3>
                </div><!--contenttitle-->
                
                <ul class="morephotolist">
                	<li><a href="">Cat</a></li>	
                    <li><a href="">Ancient</a></li>	
                    <li><a href="">Crayon</a></li>	
                    <li><a href="">Egg</a></li>	
                </ul><!--morephotolist-->

            </div><!--ps_sidebar-->
            
        </div><!--contentwrapper-->
                
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>
