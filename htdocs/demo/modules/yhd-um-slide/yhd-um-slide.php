<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="yhd-um-slide"（class属性可以添加您需要的类选择器定义）
 3.禁止使用<style>标签（元素）
 4.禁止使用<script>标签（元素）
 5.禁止使用<link>标签（元素）
 6.禁止使用标签（元素）的id属性
 7.允许使用元素内联style属性
 */
?>
<div class="yhd-um-slide">
<?php
/**
 * 开始设计PHP页面
 */
?>
	<div class="J_TWidget section loading slide1" data-widget-type="Slide" data-widget-config="{'effect':'scrollx','easing':'easeOutCubic','countdown':true}">
		<ol class="yhd-switchable-content">
			<li>
				<a href="#" target="_blank">
					<img alt="" src="assets/images/img1.jpg"/>
				</a>
			</li>
			<li class="hidden">
				<a target="_blank" href="#">
					<img alt="" src="assets/images/img2.jpg"/>
				</a>
			</li>
			<li class="hidden">
				<a target="_blank" href="#">
					<img alt="" src="assets/images/img3.jpg"/>
				</a>
			</li>
		</ol>
	</div>
</div>
