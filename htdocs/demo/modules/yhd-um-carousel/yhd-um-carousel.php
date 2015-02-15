<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="yhd-um-carousel"（class属性可以添加您需要的类选择器定义）
 3.禁止使用<style>标签（元素）
 4.禁止使用<script>标签（元素）
 5.禁止使用<link>标签（元素）
 6.禁止使用标签（元素）的id属性
 7.允许使用元素内联style属性
 */
?>
<div class="yhd-um-carousel">
<?php
/**
 * 开始设计PHP页面
 */
?>
	<div  class="mall-slide J_TWidget dd"
		 data-widget-type="Carousel"
		 data-widget-config="{'navCls':'yhd-switchable-nav','contentCls':'yhd-switchable-content','effect': 'scrollx','easing': 'easeOutCubic', 'steps':1, 'viewSize': [908], 'circular': true, 'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }"
			>
		<a title="上一页" href="javascript:void(0);"  class="mall-prev"></a>
		<a title="下一页" href="javascript:void(0);" class="mall-next"></a>

		<div class="mall-content clearfix">
			<ul class="yhd-switchable-content">
				<li class="big-piclist">
					<span class="J_DirectPromo">
						<a target="_blank" href="#">
							<img src='assets/images/img1.jpg'/>
						</a>
					</span>
				</li>
				<li class="big-piclist">
					<span class="J_DirectPromo">
						<a target="_blank" href="#">
							<img src='assets/images/img2.jpg'/>
						</a>
					</span>
				</li>
				<li class="big-piclist">
					<span class="J_DirectPromo">
						<a target="_blank" href="#">
							<img src='assets/images/img3.jpg'/>
						</a>
					</span>
				</li>
			</ul>
			<ul class="yhd-switchable-nav">
				<li class="yhd-active">
					<img src='assets/images/img1.jpg'/>
				</li>
				<li>
					<img src='assets/images/img2.jpg'/>
				</li>
				<li>
					<img src='assets/images/img3.jpg'/>
				</li>
			</ul>
		</div>
	</div>
</div>
