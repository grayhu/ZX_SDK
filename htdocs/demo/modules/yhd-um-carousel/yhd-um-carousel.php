<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="yhd-um-carousel"��class���Կ����������Ҫ����ѡ�������壩
 3.��ֹʹ��<style>��ǩ��Ԫ�أ�
 4.��ֹʹ��<script>��ǩ��Ԫ�أ�
 5.��ֹʹ��<link>��ǩ��Ԫ�أ�
 6.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 7.����ʹ��Ԫ������style����
 */
?>
<div class="yhd-um-carousel">
<?php
/**
 * ��ʼ���PHPҳ��
 */
?>
	<div  class="mall-slide J_TWidget dd"
		 data-widget-type="Carousel"
		 data-widget-config="{'navCls':'yhd-switchable-nav','contentCls':'yhd-switchable-content','effect': 'scrollx','easing': 'easeOutCubic', 'steps':1, 'viewSize': [908], 'circular': true, 'prevBtnCls': 'mall-prev', 'nextBtnCls': 'mall-next', 'disableBtnCls': 'disable' }"
			>
		<a title="��һҳ" href="javascript:void(0);"  class="mall-prev"></a>
		<a title="��һҳ" href="javascript:void(0);" class="mall-next"></a>

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
